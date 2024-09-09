<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Rolleri oluştur
        $this->call(RolesSeeder::class);

        // Kullanıcıların rollerini ata
        $this->call(UsersTableSeeder::class);

        // Kategorileri oluştur
        $this->call(CategorySeeder::class);

    }
}
