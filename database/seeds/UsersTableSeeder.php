<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@hotmail.com',
            'password' => bcrypt('123456'),
            'created_at' => '2018-02-07 09:42:27',
            'updated_at' => '2018-02-15 08:42:27'
        ]);
    }
}
