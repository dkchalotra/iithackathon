<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_username = "adminuser";
        $default_password = "root1234";

        DB::table('users')->insert([
            'username' => $default_username,
            'password' => password_hash($default_password, PASSWORD_DEFAULT)
        ]);
    }
}
