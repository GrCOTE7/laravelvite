<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class FilmResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
	 */
	public function toArray($request)
	{
		// return parent::toArray($request);

		$orderedCategories = $this->categories->toArray();
        sort($orderedCategories);

		return [
			'title'       => $this->title,
			'year'        => $this->year,
			'description' => Str::words($this->description, 5),
			// 'updated_at'  => $this->updated_at,
			'actors'     => $this->actors,
			'categories' => collect($orderedCategories),
		];
	}
}
