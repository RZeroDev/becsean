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

        $user1 = User::create([
            'firstname'=> "Forester Antonio A.",
            'lastname'=> "CODJO",
            'email'=> "foranster04@gmail.com",
            'phone'=> "0022962691850",
            'status' => true,
            'password' => bcrypt('Dev1@2FT'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user1->assignRole('admin');

        $user2 = User::create([
            'firstname'=> "Fabrice",
            'lastname'=> "DEGLA",
            'email'=> "fabiodegla15@gmail.com",
            'phone'=> "0022967012331",
            'status' => true,
            'password' => bcrypt('Dev2@2FT'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user2->assignRole('admin');

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

        $user4 = User::create([
            'firstname'=> "Abdel Nawal Adébissi",
            'lastname'=> "IMOROU",
            'email'=> "adebissiimorou@gmail.com",
            'phone'=> "0022960258045",
            'status' => true,
            'password' => bcrypt('Dev4@2FT'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user4->assignRole('dev');

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
        $user6 = User::create([
            'firstname'=> "Consultant",
            'lastname'=> "Super",
            'email'=> "consultant@gmail.com",
            'phone'=> "003366600000010",
            'status' => true,
            'password' => bcrypt('Consultant@01'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $user6->assignRole('consultant');

    }
}
