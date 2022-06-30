<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'name' => "ini_uname",
            'email' => Str::random(10).'ini@email.com',
            'password' => Hash::make('P@ssw0rd'),
        ]);
    }
}
