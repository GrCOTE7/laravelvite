<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Film extends Model
{
	use HasFactory;
	use SoftDeletes;

	protected $fillable = ['title', 'year', 'category_id', 'description'];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public static function nb()
	{
		return Film::count();
	}
}
