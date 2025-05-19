# ZeroDayFanShop – Developer Repository

⚠️ **Let op: deze repository is uitsluitend bedoeld voor interne ontwikkel- en testdoeleinden. Niet delen of openbaar publiceren zonder overleg.**  
Bevat mogelijk gevoelige configuratiebestanden en testdata.

## 🔧 Projectomschrijving

ZeroDayFanShop is een interne proof-of-concept webshop gericht op de verkoop van pentest-tools, merch en accessoires. Dit project wordt gebruikt als demo-omgeving voor tests met authenticatie, API-koppelingen en Docker-deployments.

## 📁 Mappenstructuur

- `app/` – Hoofdapplicatiecode (Laravel controllers, models, views)
- `public/` – Publieke root (let op `.gitignore`)
- `config/` – App-configuratie en credentials (zie `.env`)
- `docker/` – Docker-omgeving (dev/test)
- `postman/` – Postman collections voor API-testen
- `.env` – Omgevingsvariabelen (niet uploaden!)

## 🚀 Development setup

1. Clone deze repo **lokaal**, NIET op een publiek profiel:
    ```bash
    git clone git@internal.git/zerodayfanshop.git
    cd zerodayfanshop
    ```

2. Zorg dat je `.env` lokaal hebt. Vraag anders aan Bart of gebruik het `.env.example`.

3. Draai de containers:
    ```bash
    docker-compose up -d
    ```

4. Toegang tot de app:
    - Web: [http://localhost:8000](http://localhost:8000)
    - Admin paneel: `/admin` (gebruik admin credentials)

## 🛑 Belangrijk

- Push geen `.env` of testdata naar GitHub.
- Let op met hardcoded secrets in Postman.
- Verwijder `DEBUG=true` in productie-omgevingen.
