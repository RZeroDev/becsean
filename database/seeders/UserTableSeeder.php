<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::whereName('admin')->first();
        $dev = Role::whereName('dev')->first();

        
        $user3 = User::create([
            'firstname'=> "Hadi",
            'lastname'=> "RADJI",
            'email'=> "hadicodemaster@gmail.com",
            'phone'=> "0022967957132",
            'status' => true,
            'password' => bcrypt('Dev3@2FT'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user3->assignRole('dev');

        $user5 = User::create([
            'firstname'=> "Super",
            'lastname'=> "Administrateur",
            'email'=> "admin@gmail.com",
            'phone'=> "003366600000000",
            'status' => true,
            'password' => bcrypt('Admin@01'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user5->assignRole('admin');
        
    }
}
