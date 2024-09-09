<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    public function run()
    {
        // Rolleri oluşturma
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'writer']);
        Role::firstOrCreate(['name' => 'user']);
    }
}
