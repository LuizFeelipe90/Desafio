<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create(['descricao'=>'caneca',
        'descricao'=>'camiseta',
        'descricao'=>'capa celular',
        'descricao'=>'moletom']);
    }
}
