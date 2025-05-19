<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Jesse de Vries',
                'email' => 'jesse.devries@gmail.com',
                'password' => bcrypt('287h9qha87cy'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fatima El Amrani',
                'email' => 'fatima.elamrani@hotmail.com',
                'password' => bcrypt('90810jnfnn1jknf'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bart van Dijk',
                'email' => 'bart.vandijk@zerodayfanshop.nl',
                'password' => bcrypt('kjh3rh938fhf2f'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
