<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use faker\Factory as Faker;

class StudentSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name,
                'email' => $faker->unique()->safeEmail(),
                'jurusan' => $faker->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Teknik Elektro', 'Teknik Mesin']),
                'umur' => $faker->numberBetween(18, 25),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
