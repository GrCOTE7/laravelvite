<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCategory
 */
class Category extends Model
{
	use HasFactory;

    protected $visible = ['name'];

	public function films()
	{
		return $this->morphToMany(Film::class, 'filmable');
	}
}
