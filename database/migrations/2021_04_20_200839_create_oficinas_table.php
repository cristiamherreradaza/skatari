<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOficinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficinas', function (Blueprint $table) {
            $table->id();
            
            $table->string('codigo', 15)->nullable();
            $table->string('ciudad', 10)->nullable();
            $table->string('municipio', 80)->nullable();
            $table->string('nombre', 255)->nullable();
            $table->string('telefonos', 30)->nullable();
            $table->string('direccion', 30)->nullable();
            $table->datetime('deleted_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oficinas');
    }
}
