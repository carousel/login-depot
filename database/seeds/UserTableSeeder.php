<?php
use App\LoginDepot\User;
use Illuminate\Database\Seeder;
use Faker\Factory;

        class UserTableSeeder extends Seeder {
            public function run()
            {
                User::truncate();

                User::create([
                    "username" => "admin",
                    "email" => "admin@logindepot.com",
                    "password" => \Hash::make("logindepot1234"),
                    "role" => "admin"
                ]);
                User::create([
                    "username" => "miroslav",
                    "email" => "miroslav.trninic@gmail.com",
                    "password" => \Hash::make("bumerang"),
                    "role" => "company"
                ]);
                User::create([
                    "username" => "company1",
                    "email" => "company1@logindepot.com",
                    "password" => \Hash::make("company1"),
                    "role" => "company"
                ]);
                User::create([
                    "username" => "joe",
                    "email" => "joe@logindepot.com",
                    "password" => \Hash::make("joeworker"),
                    "role" => "worker"
                ]);
                
            }
        }
