<?php

namespace Database\Seeders;
use App\models\user;
use Illuminate\Database\Seeder;

class roleParmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SuperAdminRole = User::createRole('Super Admin');
        $AdminRole = User::createRole('Admin');
        $UserRole = User::createRole('User');

    }
}
