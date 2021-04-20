<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('ap_paterno', 15)->nullable()->after('password');
            $table->string('ap_materno', 15)->nullable()->after('password');
            $table->string('carnet', 20)->nullable()->after('password');
            $table->string('genero', 10)->nullable()->after('password');
            $table->string('estado_civil', 15)->nullable()->after('password');
            $table->string('perfil', 30)->nullable()->after('password');
            $table->string('celulares', 30)->nullable()->after('password');
            $table->string('email', 30)->nullable()->after('password');
            $table->string('direccion', 200)->nullable()->after('password');
            $table->string('estado', 30)->nullable()->after('password');
            $table->date('fecha_nacimiento')->nullable()->after('password');
            $table->datetime('deleted_at')->nullable()->after('remember_token');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('sector_id');
            $table->dropColumn('ap_paterno');
            $table->dropColumn('ap_materno');
            $table->dropColumn('carnet');
            $table->dropColumn('genero');
            $table->dropColumn('estado_civil');
            $table->dropColumn('perfil');
            $table->dropColumn('celulares');
            $table->dropColumn('direccion');
            $table->dropColumn('estado');
            $table->dropColumn('fecha_nacimiento');
            $table->dropColumn('deleted_at');
        });
    }
}
