<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactType;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating the existing contact type for spam report
        ContactType::create([
            'type' => 'Celular/Telefone',
            'active' => true
        ]);

        ContactType::create([
            'type' => 'Email',
            'active' => true
        ]);

        ContactType::create([
            'type' => 'SMS',
            'active' => true
        ]);
    }
}
