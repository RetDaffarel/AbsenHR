<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'jabatan' => 'Sekre',
        //     'nrk' => '123456789123',
        //     'role' => '',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('12345678')
        // ]);
        // User::factory()->create([
        //     'name' => 'Usernon',
        //     'jabatan' => 'non-Sekre',
        //     'nrk' => '321987654321',
        //     'role' => '',
        //     'email' => 'sekre@make.com',
        //     'password' => bcrypt('87654321')
        // ]);\

        User::factory()->create([
            'name' => 'superAdmin',
            'jabatan' => 'superAdmin',
            'nrk' => '123456789',
            'role' => 'superAdmin',
            'email' => 'super@admin.com',
            'password' => bcrypt('password')
        ]);
        User::factory()->create([
            'name' => 'atasanAdmin',
            'jabatan' => 'atasanAdmin',
            'nrk' => '987654321',
            'role' => 'atasanAdmin',
            'email' => 'atasan@admin.com',
            'password' => bcrypt('password')
        ]);
        User::factory()->create([
            'name' => 'pegawaiAdmin',
            'jabatan' => 'pegawaiAdmin',
            'nrk' => '12341234',
            'role' => 'pegawaiAdmin',
            'email' => 'pegawai@admin.com',
            'password' => bcrypt('password')
        ]);
    }
}
