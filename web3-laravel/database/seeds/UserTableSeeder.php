<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name' => 'Kali Na',
                'email' => 'kalina@gmail.com',
                'password' => Hash::make('kalina123')
            ],
            [
                'name' => 'Klau Dia',
                'email' => 'klaudia@gmail.com',
                'password' => Hash::make('klaudia123')
            ],
            [
                'name' => 'Tes Ter',
                'email' => 'tester@gmail.com',
                'password' => Hash::make('tester123')
            ]]);
    }
}
