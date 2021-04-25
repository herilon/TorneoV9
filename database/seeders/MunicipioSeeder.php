<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Municipio;
class MunicipioSeeder extends Seeder
{
    public function run()
    {
        $municipio = new Municipio();
        $municipio->nombre = "Manizales";
        $municipio->save();
        $municipio = new Municipio();
        $municipio->nombre = "Pereira";
        $municipio->save();
        $municipio = new Municipio();
        $municipio->nombre = "Armenia";
        $municipio->save();
    }
}
