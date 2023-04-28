<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
        for ($i=0; $i < 50; $i++) { 
            
            // insert data ke table pegawai menggunakan Faker
            DB::table('boards')->insert([
                'name' => $faker->name,
                'job' => $faker->jobTitle,
                'address' => $faker->address(),
                'content' => $faker->address()
            ]);

        }
    }
}
