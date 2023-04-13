<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Train $faker)
    {
        $agency = ['Italo', 'Trenitalia', 'TreNord', 'FerrovieGatgano', 'Hogwarts'];
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();
            $new_train->reference = $faker->bothify('??-######');
            $new_train->reference = $faker->randomElement($agency);
            $new_train->reference = $faker->city();
            $new_train->reference = $faker->city();
            $new_train->reference = $faker->time();
            $new_train->reference = $faker->time();
            $new_train->reference = $faker->randomNumber(1, 99);
            $new_train->reference = $faker->randomNumber(1, 12);
            $new_train->reference = $faker->randomElement([0, 1]);
            $new_train->reference = $faker->randomElement([0, 1]);
            $new_train->reference = $faker->randomFloat(2, 1, 999);
            $new_train->save();
        }
    }
}
