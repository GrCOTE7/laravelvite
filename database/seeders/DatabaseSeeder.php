<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Film;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		\App\Models\User::factory(7)->create();

		Category::factory()->count(5)->create();

		$ids = range(1, 5);
		Film::factory()->count(40)->create()->each(function ($film) use ($ids) {
			shuffle($ids);
			$film->categories()->attach(array_slice($ids, 0, rand(1, 3)));
		});
	}
}
