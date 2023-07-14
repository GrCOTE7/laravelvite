<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Category;
use App\Models\Film;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
        \App\Models\User::factory(7)->create();
        
		Actor::factory()->count(10)->create();
		$categories = [
			'Comédie',
			'Drame',
			'Action',
			'Fantastique',
			'Horreur',
			'Animation',
			'Espionnage',
			'Guerre',
			'Policier',
			'Pornographique',
		];
		foreach ($categories as $category) {
			Category::create(['name' => $category, 'slug' => Str::slug($category)]);
		}
		$ids = range(1, 10);
		Film::factory()->count(40)->create()->each(function ($film) use ($ids) {
			shuffle($ids);
			$film->categories()->attach(array_slice($ids, 0, rand(1, 4)));
			shuffle($ids);
			$film->actors()->attach(array_slice($ids, 0, rand(1, 4)));
		});
	}
}
