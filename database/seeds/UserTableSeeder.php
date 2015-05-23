<?php
use App\LoginDepot\User;
use Illuminate\Database\Seeder;
use Faker\Factory;

        class UserTableSeeder extends Seeder {
            public function run()
            {
                User::truncate();

                User::create([
                    "username" => "miroslav",
                    "email" => "miroslav.trninic@gmail.com",
                    "password" => \Hash::make("bumerang"),
                    "profile_complete" => true,
                    "role" => "company",
                ]);
                User::create([
                    "username" => "company_1",
                    "email" => "company_1@logindepot.com",
                    "password" => \Hash::make("company_1"),
                    "profile_complete" => true,
                    "role" => "company"
                ]);
                
            }
        }
