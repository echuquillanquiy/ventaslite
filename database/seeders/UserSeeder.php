<?php

namespace Database\Seeders;

use App\Models\User;
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
            'name' => 'Eduardo Chuquillanqui',
            'phone' => '944944199',
            'email' => 'echuquillanquiy@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Melissa Albahat',
            'phone' => '933247583',
            'email' => 'melissaalbahat@gmail.com',
            'profile' => 'EMPLOYEE',
            'status' => 'ACTIVE',
            'password' => bcrypt('12345678')
        ]);
    }
}
