<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(
            [
                'name' => 'Admin',
                'alamat' => ' jl.makmur NO 38',
                'username' => 'Admin',
                'nomorhp' => '082245678712',
                // 'role_id' => 2,
                'email' => 'Admin@gmail.com',
                'password' => Hash::make('password'),
            ],
        );
        $user->assignRole('admin');

    }
}
