<?php
use App\LoginDepot\Customer;
use Illuminate\Database\Seeder;
use Faker\Factory;

        class CustomerTableSeeder extends Seeder {
            public function run()
            {
                $faker = Factory::create();
                for ($i = 0; $i < 50; $i++) {
                    Customer::create([
                        "first_name" => $faker->firstName,
                        "last_name" => $faker->lastName,
                        "email" => $faker->email,
                        "secondary_email" => $faker->email,
                        "phone" => $faker->phoneNumber,
                        "company_id" => 2,
                    ]);
                }
                for ($i = 0; $i < 50; $i++) {
                    Customer::create([
                        "first_name" => $faker->firstName,
                        "last_name" => $faker->lastName,
                        "email" => $faker->email,
                        "secondary_email" => $faker->email,
                        "phone" => $faker->phoneNumber,
                        "company_id" => 3,
                    ]);
                }
            }
        }
