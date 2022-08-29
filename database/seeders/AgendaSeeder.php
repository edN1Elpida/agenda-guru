<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Faker\Factory as Faker;
 
 
class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// insert data ke table pegawai
        DB::table('users')->insert([
        	'name' => 'Rohmadani Dwi Oktaviansyah',
        	'email' => 'elpidadw@gmail.com',
        	'password' => bcrypt('admin'),
            'remember_token' => Str::random('60')
        ]);
        
    }
}