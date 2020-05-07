<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'Kalina AD.',
                'email' => 'kali@admin.com',
                'password' => Hash::make('kalina')
            ],
            [
                'name' => 'Klaudia AD.',
                'email' => 'klau@admin.com',
                'password' => Hash::make('klaudia')
            ],
            [
                'name' => 'Tester AD.',
                'email' => 'tes@admin.com',
                'password' => Hash::make('tester')
            ]]);
    }
}
