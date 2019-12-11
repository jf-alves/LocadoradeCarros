<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('cpf',11)->default('');
            $table->date("dataNascimento",10);
            $table->string("sexo",10);
            $table->string("habilitacao",3)->default('');
            $table->string('tel',11)->default('');
            $table->string('cep',13)->default('');
            $table->string('end',50)->default('');
            $table->string('email')->unique();
            $table->string('foto',100)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('usuario');
    }
}
