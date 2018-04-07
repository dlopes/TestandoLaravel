<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->double('price', 12, 2);
            $table->date('start');
            $table->date('finish');

            $table->unsignedInteger('categoria_id')->nullable()->index();
            //$table->integer('categoria_id')->unsigned()->nullable()->index();
            $table->integer('consultor_id')->unsigned()->nullable()->index();
            $table->integer('endereco_id')->unsigned()->nullable()->index();



           /* $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->
            references('id')->
            on('categorias')->
            onDelete('cascade');*/

            /*$table->integer('consultor_id')->unsigned();
            $table->foreign('consultor_id')->
            references('id')->
            on('consultors')->
            onDelete('cascade');

            $table->integer('endereco_id')->unsigned();
            $table->foreign('endereco_id')->
            references('id')->
            on('enderecos')->
            onDelete('cascade');*/

            
           
            $table->timestamps();
        });

        Schema::table('cursos', function($table) {
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('consultor_id')->references('id')->on('consultors')->onDelete('cascade');
            $table->foreign('endereco_id')->references('id')->on('enderecos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
