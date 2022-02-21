<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $train = new Train();
            $train->Azienda = $faker->company();
            $train->Stazione_di_partenza = $faker->city();
            $train->Stazione_di_arrivo = $faker->city();
            $train->Data = $faker->dateTimeInInterval('-1 days', '+3 days');
            $train->Orario_di_partenza = $faker->time();
            $train->Orario_di_arrivo = $faker->time();
            $train->Codice_treno = $faker->ean8();
            $train->Numero_carrozze = $faker->randomDigit();;
            $train->In_orario = $faker->boolean();
            // $train->Cancellato = $faker->boolean();
            if ($train->In_orario == true) {
                $train->Cancellato = 0;
            }
            elseif($train->In_orario == false) {
                $train->Cancellato = 1;
            }
            $train->save();
        }
    }
}
