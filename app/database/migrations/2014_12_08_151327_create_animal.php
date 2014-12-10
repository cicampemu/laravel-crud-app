<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimal extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		/*
			Schema::create('animals', function($newtable)
    {
 		$newtable->increments('id'); 
		$newtable->string('title',500); 
		$newtable->text('description');
		$newtable->string('father', 500); 
		$newtable->string('mother', 500); 
		$newtable->date('born'); 
		$newtable->date('sold'); 
		$newtable->boolean('member');
		$newtable->integer('price');

		$newtable->timestamps();
	});
	*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		//Schema::drop('animal');
	}

}
