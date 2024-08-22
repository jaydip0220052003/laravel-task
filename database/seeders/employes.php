<?php

namespace Database\Seeders;

use App\Models\Employe;
use Database\Factories\employesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class employes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Employe::factory()->count(10)->create();
        Employe::factory()->count(10)->create();
    }
}
