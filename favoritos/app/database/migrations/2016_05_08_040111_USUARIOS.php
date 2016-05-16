<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class USUARIOS extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('USUARIOS',function($table){
			$table->create();
			$table->increments("id");
			$table->string('codigousuario');
			$table->string('usuario',100);
			$table->string('clave',100);
			$table->integer('edad');
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
		//
		Schema::drop('USUARIOS');
	}

}
