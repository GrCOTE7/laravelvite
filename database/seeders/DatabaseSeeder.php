<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

namespace Database\Seeders;

use App\Models\Actor;
use App\Models\Category;
use App\Models\Film;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		User::create([
			'name'              => 'User',
			'email'             => 'user@example.com',
			'email_verified_at' => now(),
			'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
			'remember_token'    => Str::random(10),		]);

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
