<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Models\User;

class AdminDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsUser::create([
            'name' => 'admin',
            'email' => 'aastha@example.com',
            'password' => bcrypt('aastha123'),
            'role'=> 'admin'
            // 'is_admin' => true,
        ]);
    }
}
