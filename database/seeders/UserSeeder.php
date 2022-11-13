<?php

namespace Database\Seeders;

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
        //
        $users = [
            [
                'username' => 'UserName',
                'first_name' => 'FirstName',
                'last_name' => 'LastName',
                'email' => 'user@app.com',
                'password' => bcrypt(123456)
            ],
            [
                'username' => 'user2',
                'first_name' => 'user2',
                'last_name' => 'user2',
                'email' => 'user2@app.com',
                'password' => bcrypt(123456)
            ]
        ];

        foreach ($users as $user) {
            \Models\App\User::create($user);
        }

    }
}