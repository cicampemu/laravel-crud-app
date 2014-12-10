<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
		// Creates users table
		Schema::create('users', function($newtable)
		{
			$newtable->increments('id');
			$newtable->string('email',100)->unique();
			$newtable->string('username',100)->unique();
			$newtable->string('password',100)->unique();
			$newtable->string('remember_token',100)->unique();
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
		// drops the users table
		//Schema::drop('users');
	}

}
