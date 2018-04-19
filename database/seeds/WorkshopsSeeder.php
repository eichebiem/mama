<?php

use Illuminate\Database\Seeder;
use App\Workshop;

class WorkshopsSeeder extends Seeder
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
            Workshop::create([

                'company_name' => $faker->name,
                'company_address' => $faker->address,
                'company_email' => $faker->companyEmail,
                'company_tel' => $faker->tollFreePhoneNumber,
                'participants' => '30',
                'contact_person' => $faker->name,
                'contact_number' => '09876543215',
                'contact_designation' => $faker->text,
                'contact_department' => $faker->text,
                'special_instructions' => $faker->text,
                'course' => 'MS Excel',
                'ewan' => 'Basic'
                
            ]);
        }
    }
}
