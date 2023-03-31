<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Auto;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $auto = new Auto;
        $auto->marca = 'Hyundai';
        $auto->modello = 'i10';
        $auto->cilindrata = '1000';
        $auto->telaio = 'AJSKCMVJ456KSLCK5';
        $auto->targa = 'GE764FA';
        $auto->stato = 'usato';
        $auto->alimentazione = 'benzina';
        $auto->prezzo = 8500;

        $auto->save();

        $auto = new Auto;
        $auto->marca = 'Fiat';
        $auto->modello = 'punto';
        $auto->cilindrata = '1500';
        $auto->telaio = 'AJSKCMVJ475KSLCK5';
        $auto->targa = 'CE764FA';
        $auto->stato = 'usato';
        $auto->alimentazione = 'benzina';
        $auto->prezzo = 4500;

        $auto->save();

        $auto = new Auto;
        $auto->marca = 'Opel';
        $auto->modello = 'corsa';
        $auto->cilindrata = '1500';
        $auto->telaio = 'AJSKDEVJ875KSLCK5';
        $auto->stato = 'nuovo';
        $auto->alimentazione = 'benzina';
        $auto->prezzo = 14500;

        $auto->save();
    }
}