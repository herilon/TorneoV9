<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('dt', 100);
            $table->foreignId('municipio_id')->constrained();
            $table->string('escudo', 100);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
