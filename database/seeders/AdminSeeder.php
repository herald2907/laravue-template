<?php

namespace Database\Seeders;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'username' => 'admin',
            'email' => 'devph.live@gmail.com',
            'email_verified_at' => now(),
            'password' => '@ppdev01',
            'role' => 'super_admin',
        ];

        $repository = new UserRepository(new User());
        $repository->createUser($data);
    }
}
