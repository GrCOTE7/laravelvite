<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
	public $arr = ['Action', 'Aventure', 'Comédie', 'Drame', 'Science-Fiction'];

	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		// $name = $this->faker->word();
        $name = $this->getCategory();

		return [
			'name' => $name,
			'slug' => Str::slug($name),
		];
	}

	public function getCategory()
	{
		shuffle($this->arr);

		return array_shift($this->arr);
	}
}
