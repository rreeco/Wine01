<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wines')->insert([[
            'id'            => '',  //autoincrement??
            'nome'          => '',
            'annata'        => '',
            'metodo'        => '',
            'uvaggio'       => '',
            'note'          => '',
            'descrizione'   => '',
            'cantina'       => '',
        ],[
            'id'            => '',  //autoincrement??
            'nome'          => '',
            'annata'        => '',
            'metodo'        => '',
            'uvaggio'       => '',
            'note'          => '',
            'descrizione'   => '',
            'cantina'       => '',
        ], [
            'id'            => '',  //autoincrement??
            'nome'          => '',
            'annata'        => '',
            'metodo'        => '',
            'uvaggio'       => '',
            'note'          => '',
            'descrizione'   => '',
            'cantina'       => '',
        ]]);
    }
}
