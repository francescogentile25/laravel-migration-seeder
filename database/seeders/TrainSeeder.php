<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $agency = ['Italo', 'Trenitalia', 'TreNord', 'FerrovieGatgano', 'Hogwarts'];
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();
            $new_train->reference = $faker->bothify('??-######');
            $new_train->agency = $faker->randomElement($agency);
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_number = $faker->randomNumber(1, 99);
            $new_train->number_carriages = $faker->randomNumber(1, 12);
            $new_train->in_time = $faker->randomElement([0, 1]);
            $new_train->deleted = $faker->randomElement([0, 1]);
            $new_train->price = $faker->randomFloat(2, 1, 999);
            $new_train->save();
        }
    }
}
