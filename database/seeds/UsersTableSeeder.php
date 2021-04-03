<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
        	'display_name' => 'Administrator',
        	'username' => 'admin',
        	'password' => Hash::make('12345'),
        	'tlp' => '089518894819',
        	'role' => 1
        ]);

        DB::table('user')->insert([
        	'display_name' => 'Petugas',
        	'username' => 'petugas',
        	'password' => Hash::make('12345'),
        	'tlp' => '085759902052',
        	'role' => 2
        ]);
    }
}
