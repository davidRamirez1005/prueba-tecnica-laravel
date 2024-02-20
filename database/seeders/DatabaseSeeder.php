<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Persona;
use Illuminate\Database\Seeder;
use Database\Seeders\PersonaTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Persona::factory(20)->create();
    }
}
