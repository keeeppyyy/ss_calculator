<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GemSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(GemSeeder::class);
    }
}

