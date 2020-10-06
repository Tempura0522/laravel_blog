<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(){ DB::table('users')->insert([
            [
                'name' => 'tanakataro',
                'email' => 'tanaka@example.com',
                'password' => 'tanakataro',
            ],
        ]);
    }
}
