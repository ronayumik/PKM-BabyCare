<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($x=1;$x<5;$x++){
            DB::table('questions')->insert([
                'user_id' => $faker->numberBetween($min=3, $max=13),
                'answer_id' => $x,
                'question' => $faker->sentences($nb=3, $asText = true),
                'created_at' => $faker->dateTimeThisYear($max = '-4 months')
            ]);
        }
    }
}
