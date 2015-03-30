<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('rent', function(Blueprint $table)
		{
                
			$table->increments('r_id');
                        $table->integer('student_id');
                        $table->integer('book_id');
                        $table->date('r_startdate');
                        $table->date('r_enddate');
                        $table->date('r_postpone');

                        
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
		Schema::drop('rent');
	}

}
