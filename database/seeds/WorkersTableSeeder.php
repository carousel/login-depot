<?php
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\LoginDepot\Worker;
        /**
        * 
        **/
        class WorkersTableSeeder extends Seeder {
            /**
            * 
            */
            public function run()
            {
                Worker::truncate();
                $faker = Faker\Factory::create();

                for($i = 0; $i < 10; $i++){
                    Worker::create([
                        "first_name" => $faker->firstName,
                        "last_name" => $faker->lastName,
                        "email" => $faker->safeEmail,
                        "account_number" => $i,
                        "company_id" => 1,
                    ]);
                };
                
            }
        }
