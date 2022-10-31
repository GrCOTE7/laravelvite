<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Film;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		\App\Models\User::factory(7)->create();

		// Film::factory(10)->create();

		Category::factory()
			->has(Film::factory()->count(4))
			->count(5)
			->create();

		// Category::factory(3)->create();

		// \App\Models\User::factory()->create([
		// 	'name'  => 'Test User',
		// 	'email' => 'test@example.com',
		// ]);
	}
}
