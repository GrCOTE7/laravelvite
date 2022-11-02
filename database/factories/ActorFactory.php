<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace Database\Factories;

use App\Models\Actor;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actor>
 */
class ActorFactory extends Factory
{
	protected $model = Actor::class;

	public function definition()
	{
		$name = $this->faker->name();

		return [
			'name' => $name,
			'slug' => Str::slug($name),
		];
	}
}