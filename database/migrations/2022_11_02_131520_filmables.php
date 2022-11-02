<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filmables', function (Blueprint $table) {
			$table->id();
			$table->foreignId('film_id')
				->constrained()
				->onDelete('cascade')
				->onUpdate('cascade');
			$table->morphs('filmable');
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
		Schema::dropIfExists('filmables');
	}
};