<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;


class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create(['nome'=>'Jose', 
        'nome'=>'Maria',
        'nome'=>'Jaja',
        'nome'=>'Hermanoteu']);
    }
}
