<?php
namespace Database\Seeders;
use App\Models\Posicion;
use Illuminate\Database\Seeder;
class PosicionSeeder extends Seeder
{
    public function run()
    {
        $posicion = new Posicion();
        $posicion->nombre = "Portero";
        $posicion->save();
        $posicion = new Posicion();
        $posicion->nombre = "Defensa";
        $posicion->save();
        $posicion = new Posicion();
        $posicion->nombre = "Volante";
        $posicion->save();
        $posicion = new Posicion();
        $posicion->nombre = "Delantero";
        $posicion->save();
    }
}
