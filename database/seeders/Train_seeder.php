<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
class Train_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       /*   $train = [
            [
                "azienda" => "Italo",
                "departure_station" => "Roma Termini",
                "destination" => "Milano Centrale",
                "date" => "2024/02/15",
                "departure_hour" => "22:11",
                "arrival_hour" => "11:22",
                "train_code" => "e09sd720fs",
                "number_wagon" => 5,
        
            ],
            [
                "azienda" => "Frecciarossa",
                "departure_station" => "Roma Termini",
                "destination" => "Milano Lambrate",
                "date" => "2024/02/15",
                "departure_hour" => "09:22",
                "arrival_hour" => "15:26",
                "train_code" => "119sd720fs",
                "number_wagon" => 7,
        
            ],
            [
                "azienda" => "Italo",
                "departure_station" => "Milano  Centrale",
                "destination" => "Verona Porta Nuova",
                "date" => "2024/02/15",
                "departure_hour" => "07:37",
                "arrival_hour" => "13:47",
                "train_code" => "329sd720fs",
                "number_wagon" => 6,
        
                ]
            ];

            foreach ($train as $trains){
                $new_train = new Train();
                $new_train ->azienda = $trains["azienda"];
                $new_train ->departure_station = $trains["departure_station"];
                $new_train ->destination = $trains["destination"];
                $new_train ->date = $trains["date"];
                $new_train ->departure_hour = $trains["departure_hour"];
                $new_train ->arrival_hour = $trains["arrival_hour"];
                $new_train ->train_code = $trains["train_code"];
                $new_train ->number_wagon = $trains["number_wagon"];
                $new_train ->in_hour = 1;
                $new_train ->deleted = 0;
                $new_train ->save(); 
              
    };  */
    for($i=0; $i<10; $i++){
        $train = new Train();
        $train->azienda = $faker->randomElement(["Italo", "Frecciarossa", "Trenord"]);
        $train->departure_station = $faker->randomElement(["Roma", "Milano", "Verona"]);
        $train->destination = $faker->randomElement(["Napoli", "Rossano Calabro", "Rosolina Mare"]);
        $train->departure_hour = $faker->dateTimeBetween("-3 days ", "+3 days");
        $train->arrival_hour = $faker->dateTimeBetween("+1 days ", "+3 days");
        $train->train_code = $faker->shuffle(['helloworld']);
        $train->number_wagon = $faker->randomDigit();
        $train->in_hour =  $faker->randomDigit();
        $train->deleted =  $faker->randomDigit();
        $train->save();
        }
   
    }
}