<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordTabel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('records', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email',100);
			$table->string('ip',30);
			$table->tinyInteger('question1')->default(1);
			$table->tinyInteger('q21')->default(0);
			$table->tinyInteger('q22')->default(0);
			$table->tinyInteger('q23')->default(0);
			$table->tinyInteger('q24')->default(0);
            $table->tinyInteger('q25')->default(0);
			$table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('records');
	}

}
