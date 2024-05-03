<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin Afandi',
            'email' => 'afandi@fic16.com',
            'password' => Hash::make('12345678'),
        ]);

        // data dummy for company
        \App\Models\Company::create([
            'name' => 'Rumah Sakit Islam Gondanglegi',
            'email' => 'rsigondanglegi@ymail.com',
            'address' => 'Jl. Hayam Wuruk No.66 Gondanglegi',
            'latitude' => '-8,1702801',
            'longitude' => '112,6401149',
            'radius_km' => '13.5',
            'time_in' => '08:00',
            'time_out' => '15:00',
        ]);
    }
}
