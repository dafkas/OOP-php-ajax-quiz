<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('question', function(Blueprint $table) {
			$table->increments('question_id');
			$table->text('question');
			$table->text('awnser_a');
			$table->text('awnser_b');
			$table->text('awnser_c');
			$table->text('awnser_d');
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
	}

}
