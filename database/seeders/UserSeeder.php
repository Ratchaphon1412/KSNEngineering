<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "poom";
        $user->email = "poomffi@hotmail.com";
        $user->password = bcrypt('12345678');
        $user->role = "admin";
        $user->save();

        $user = new User();
        $user->name = "poom1";
        $user->email = "poomffi@gmail.com";
        $user->password = bcrypt('12345678');
        $user->role = "user";
        $user->save();
    }
}
