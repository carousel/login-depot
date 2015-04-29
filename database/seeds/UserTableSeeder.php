<?php
use App\LoginDepot\User;
use Illuminate\Database\Seeder;
        /**
        * 
        **/
        class UserTableSeeder extends Seeder {
            /**
            * 
            */
            public function run()
            {
                User::truncate();
                User::create([
                    "name" => "admin",
                    "email" => "admin@logindepot.com",
                    "password" => \Hash::make("logindepot1234"),
                    "role" => "admin"
                ]);
                User::create([
                    "name" => "miroslav",
                    "email" => "miroslav.trninic@gmail.com",
                    "password" => \Hash::make("bumerang"),
                    "role" => "company"
                ]);
                User::create([
                    "name" => "joe",
                    "email" => "joe@logindepot.com",
                    "password" => \Hash::make("joeworker"),
                    "role" => "worker"
                ]);
                
            }
        }
