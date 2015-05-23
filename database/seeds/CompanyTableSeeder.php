<?php
use App\LoginDepot\Company;
use Illuminate\Database\Seeder;
use Faker\Factory;

        class CompanyTableSeeder extends Seeder {
            public function run()
            {

                Company::create([
                    "company_name" => "miroslav",
                    "dot_number" => 113,
                    "mc_number" => 543333333123,
                    "logo" => "path_to_logo",
                    "website" => "larabal.com",
                    "user_id" => 1,
                ]);
                Company::create([
                    "company_name" => "company_1",
                    "dot_number" => 11332524,
                    "mc_number" => 543333333123,
                    "logo" => "path_to_logo",
                    "website" => "company_2_website",
                    "user_id" => 2,
                ]);
                
            }
        }
