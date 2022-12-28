<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class FilmResource extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
	 */
	public function toArray($request)
	{
		// return parent::toArray($request);
		return [
			'title'       => $this->title,
			'year'        => $this->year,
			'description' => Str::words($this->description, 5),
			'actors'      => $this->actors,
			'categories'  => $this->categories,
		];
	}
}
