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

	protected $fillable = ['title', 'year', 'description'];

	public static function nb()
	{
		return Film::count();
	}
}
