<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServieHome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceHomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServieHome::create([
            'title'=>"Nos services",
            'secondTitle'=>"Explorez nos services de pointe",
            'actionText'=>"Tout voir",
        ]);
    }
}
