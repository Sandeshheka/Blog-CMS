<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        $faker = Factory::create();
        DB::table('users')->insert([
            [
                'name' => "Sandesh Heka",
                'slug' => "sandesh heka",
                'email' => "heka@superman.com",
                'password' => bcrypt('secret'),
                'bio'=> $faker->text(rand(250, 300))
            ], 
            [
                'name' => "Sandy",
                'slug' => "sandy",
                'email' => "heka@sandy.com",
                'password' => bcrypt('secret'),
                'bio'=> $faker->text(rand(250, 300))
            ],
            [
                'name' => "Saurab",
                'slug' => "saurab",
                'email' => "the@flash.com",
                'password' => bcrypt('secret'),
                'bio'=> $faker->text(rand(250, 300))
            ]
        ]);
    }
}
