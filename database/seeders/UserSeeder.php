<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Daniel Galarza',
            'email' => 'dggt1089@gmail.com',
            'password' => bcrypt('123456')
        ])->assignRole('Admin');

        User::create([
            'name' => 'David Chacon',
            'email' => 'Davidcha@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
