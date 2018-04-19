<?php

use Illuminate\Database\Seeder;
use App\Stat;

class StatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($x = 0; $x < 100; $x++){
            Stat::create([

                'client_name' => $faker->name,
                'client_address' => $faker->address,
                'client_email' => $faker->companyEmail,
                'contact_number' => '09876543215',
                'client_tel' => $faker->tollFreePhoneNumber,
                'research_title' => $faker->text,
                'stats_procedure' => $faker->text,
                'company_name' => $faker->name,
                'company_address' => $faker->address,
                'research_class' => 'Post Grad'
                
            ]);
        }
    }
}
