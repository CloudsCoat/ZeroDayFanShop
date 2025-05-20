FROM php:8.2-apache

WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev

# Install Node.js (voor Vite build)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set ServerName globally
RUN echo "ServerName zerodayzoetermeer-fanshop.chals.io" >> /etc/apache2/apache2.conf

# Copy Apache config and activate it
COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

# Copy application files
COPY . .

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache \
    && chmod -R 755 /var/www/html/public \
    && chmod 644 /var/www/html/public/.htaccess \
    && if [ -f /var/www/html/public/.git ]; then chmod 644 /var/www/html/public/.git; fi

# Install PHP dependencies
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Generate application key
RUN php artisan key:generate

# Install JS dependencies and build assets
RUN npm install && npm run build

# Create .htaccess file in public directory (if not present)
RUN echo "Options -Indexes\nRewriteEngine On\nRewriteBase /\nRewriteRule ^index\\.php$ - [L]\nRewriteCond %{REQUEST_FILENAME} !-f\nRewriteCond %{REQUEST_FILENAME} !-d\nRewriteRule . /index.php [L]" > /var/www/html/public/.htaccess

# Ensure index.php exists
RUN touch /var/www/html/public/index.php

EXPOSE 80

CMD ["apache2-foreground"]
