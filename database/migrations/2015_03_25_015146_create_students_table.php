<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
                
			$table->increments('s_id');
                        $table->string('s_cnumber');
			$table->string('s_lname');
                        $table->string('s_fname');
                        $table->string('s_dateofbirth');
                        $table->char('s_sex');
                        $table->integer('s_payment');
			$table->string('s_email')->unique();
                        $table->date('s_enrolldate');
			$table->enum('s_status' , array('graduated', 'active', 'move'));
                        $table->integer('s_phone');
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
		Schema::drop('students');
	}

}
