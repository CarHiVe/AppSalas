<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$table->increments('id');
		$table->string('nombre');
		$table->string('direccion');
		$table->double('latitud');
		$table->double('longitud');
		$table->string('descripcion');
		$table->integer('rut_encargado');
		$table->timestamp('created_at');
		$table->timestamp('uploated_at');


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('campus');
	}

}
