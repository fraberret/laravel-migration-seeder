<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Una volta inserire i dati bisogna mandare il seed con il comando: 
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Metodo Manuale per inserire dati fittizzi nel database

        $trains = [
            [
                'Azienda' => 'Trenitalia',
                'Stazione_di_partenza' => 'Roma Termini',
                'Stazione_di_arrivo' => 'Bologna',
                'Orario_di_partenza' => '100000',
                'Orario_di_arrivo' => '140000',
                'Codice_treno' => 'XXXX123',
                'Numero_carrozze' => 30,
                'In_orario' => 1,
                'Cancellato' => 0,
                'date' => '2024-06-09',

            ],

            [
                'Azienda' => 'Italo',
                'Stazione_di_partenza' => 'Napoli centrale',
                'Stazione_di_arrivo' => 'Bari',
                'Orario_di_partenza' => '120000',
                'Orario_di_arrivo' => '150000',
                'Codice_treno' => 'XXXX153',
                'Numero_carrozze' => 25,
                'In_orario' => 1,
                'Cancellato' => 0,
                'date' => '2024-07-08',

            ],
            [
                'Azienda' => 'Italo',
                'Stazione_di_partenza' => 'Roma Anagnina',
                'Stazione_di_arrivo' => 'Padova',
                'Orario_di_partenza' => '130000',
                'Orario_di_arrivo' => '160000',
                'Codice_treno' => 'XXXX158',
                'Numero_carrozze' => 20,
                'In_orario' => 1,
                'Cancellato' => 0,
                'date' => '2024-01-08',

            ],
            [
                'Azienda' => 'Italo',
                'Stazione_di_partenza' => 'Napoli centrale',
                'Stazione_di_arrivo' => 'Bari',
                'Orario_di_partenza' => '120000',
                'Orario_di_arrivo' => '150000',
                'Codice_treno' => 'XXXX153',
                'Numero_carrozze' => 25,
                'In_orario' => 1,
                'Cancellato' => 0,
                'date' => '2024-07-08',

            ],


        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->Azienda = $train['Azienda'];
            $newTrain->Stazione_di_partenza = $train['Stazione_di_partenza'];
            $newTrain->Stazione_di_arrivo = $train['Stazione_di_arrivo'];
            $newTrain->Orario_di_partenza = $train['Orario_di_partenza'];
            $newTrain->Orario_di_arrivo = $train['Orario_di_arrivo'];
            $newTrain->Codice_treno = $train['Codice_treno'];
            $newTrain->Numero_carrozze = $train['Numero_carrozze'];
            $newTrain->In_orario = $train['In_orario'];
            $newTrain->Cancellato = $train['Cancellato'];
            $newTrain->date = $train['date'];

            // Bisogna salvare
            $newTrain->save();
        }

        // Metodo Automstico per inserire dati fittizzi nel database con Faker




    }
}
