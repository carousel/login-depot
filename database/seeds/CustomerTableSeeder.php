<?php
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\LoginDepot\Customer;
        /**
        * 
        **/
        class CustomerTableSeeder extends Seeder {
            /**
            * 
            */
            public function run()
            {
                Customer::truncate();
                $faker = Faker\Factory::create();

                for($i = 0; $i < 20; $i++){
                    Customer::create([
                        "first_name" => $faker->firstName,
                        "last_name" => $faker->lastName,
                        "email" => $faker->safeEmail,
                        "secondary_email" => $faker->safeEmail,
                    ]);
                };
                
            }
        }
