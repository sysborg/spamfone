<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SpamType;

class SpamTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating a begining list of spam type
        SpamType::create([
            'type'      => 'Desconhecido',
            'active'    => true
        ]);

        SpamType::create([
            'type'      => 'Contato sério',
            'active'    => true
        ]);

        SpamType::create([
            'type'      => 'Loteria',
            'active'    => true
        ]);

        SpamType::create([
            'type'      => 'Agência de cobrança',
            'active'    => true
        ]);

        SpamType::create([
            'type'      => 'Propaganda Agressiva',
            'active'    => true
        ]);

        SpamType::create([
            'type'      => 'Pesquisa de opnião',
            'active'    => true
        ]);

        SpamType::create([
            'type'      => 'Ameaça',
            'active'    => true
        ]);

        SpamType::create([
            'type'      => 'Tentativa de golpe',
            'active'    => true
        ]);

        SpamType::create([
            'type'      => 'Hotline de televendas',
            'active'    => true
        ]);

        SpamType::create([
            'type'      => 'Chamada perdida',
            'active'    => true
        ]);

        SpamType::create([
            'type'      => 'spam SMS',
            'active'    => true
        ]);
    }
}
