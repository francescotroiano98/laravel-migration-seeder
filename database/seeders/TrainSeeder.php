<?php

namespace Database\Seeders;

use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
       
        

        for ($i = 0; $i < 100; $i++) {

            $newTrain = new Train();

            $newTrain->Azienda = $faker->name();
            $newTrain->Stazione_di_partenza = $faker->word();
            $newTrain->Stazione_di_arrivo = $faker->word();
            $newTrain->Orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->Orario_di_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->Codice_Treno = $faker->numberBetween(1000, 9999);
            $newTrain->Numero_Carrozze = $faker->numberBetween(1, 20);
            $newTrain->In_orario = $faker->boolean();
            $newTrain->Cancellato = $faker->boolean();
            $newTrain->save();

        }

    }
}
