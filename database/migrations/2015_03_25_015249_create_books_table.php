<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
            Schema::create('books', function(Blueprint $table)
		{
                
			$table->increments('bk_id');
                        $table->string('b_name');
                        $table->string('b_author');
                        $table->string('b_position');
                        $table->integer('b_count');
                        $table->integer('b_price');
                        $table->integer('b_catid');
                        
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
		Schema::drop('books');
	}

}
