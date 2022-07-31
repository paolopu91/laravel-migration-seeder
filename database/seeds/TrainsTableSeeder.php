<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataTrains = [
            [
                "Azienda" => "Treni Italia",
                "Stazione_di_Partenza" =>"Roma Termini" ,
                "Stazione_di_Arrivo" =>"Firenze  Santa Maria Novella" ,
                "Orario_di_Partenza" =>"07:05:00" ,
                "Orario_di_Arrivo" =>"08:35:00",
                "Codice_treno" =>"999fl77" ,
                "Numero_carrozze" =>10 ,
                "In_orario" =>1 ,
                "Cancellato" =>0,
            ], 
            [
                "Azienda" => "Treni Italia",
                "Stazione_di_Partenza" =>"Roma Termini" ,
                "Stazione_di_Arrivo" =>"Ferrara stazione centrale" ,
                "Orario_di_Partenza" =>"17:15:00" ,
                "Orario_di_Arrivo" =>"21:20:00",
                "Codice_treno" =>"193fl66" ,
                "Numero_carrozze" =>10 ,
                "In_orario" =>1 ,
                "Cancellato" =>0,
            ], 
            [
                "Azienda" => "Italo",
                "Stazione_di_Partenza" =>"Firenze Santa Maria Novella" ,
                "Stazione_di_Arrivo" =>"Roma Tiburtina" ,
                "Orario_di_Partenza" =>"13:05:00" ,
                "Orario_di_Arrivo" =>"15:35:00",
                "Codice_treno" =>"439fl72" ,
                "Numero_carrozze" =>10 ,
                "In_orario" =>1 ,
                "Cancellato" =>0,
            ],
            [
                "Azienda" => "Italo",
                "Stazione_di_Partenza" =>"Roma Tiburtina" ,
                "Stazione_di_Arrivo" =>"Bologna" ,
                "Orario_di_Partenza" =>"11:15:00" ,
                "Orario_di_Arrivo" =>"14:10:00",
                "Codice_treno" =>"867hg00" ,
                "Numero_carrozze" =>10 ,
                "In_orario" =>1 ,
                "Cancellato" =>0,
            ], 

        ];

        

        foreach($dataTrains as $train){

            $data = new Train();
            
            $data ->Azienda = $train['Azienda'];
            $data ->Stazione_di_Partenza = $train['Stazione_di_Partenza'];
            $data ->Stazione_di_Arrivo = $train['Stazione_di_Arrivo'];
            $data ->Orario_di_Partenza = $train['Orario_di_Partenza'];
            $data ->Orario_di_Arrivo = $train['Orario_di_Arrivo'];
            $data ->Codice_treno = $train['Codice_treno'];
            $data ->Numero_carrozze = $train['Numero_Carrozze'];
            $data ->In_orario = $train['In_orario'];
            $data->Cancellato = $train['Cancellato'];

            $data->save();
        }
    }
}
