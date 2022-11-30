<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->nombre = "Romance";
        $categoria->save();

        $categoria2 = new Categoria();
        $categoria2->nombre = "Comedia";
        $categoria2->save();

        $categoria3 = new Categoria();
        $categoria3->nombre = "Epopeya";
        $categoria3->save();
    }
}
