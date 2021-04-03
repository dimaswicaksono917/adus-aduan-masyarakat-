<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MasyarakatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masyarakat')->insert([
        	'nik' => '3203011202919912',
        	'display_name' => 'Masyarakat',
        	'username' => 'masyarakat',
        	'password' => Hash::make('12345'),
        	'tlp' => '089518894819',
        ]);
    }
}
