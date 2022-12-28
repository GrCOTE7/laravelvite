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
    protected $hidden = ['id', 'created_at', 'update_at', 'deleted_at'];
    // protected $visible = ['name'];

	public function categories()
	{
		return $this->morphedByMany(Category::class, 'filmable');
	}

	public function actors()
	{
		return $this->morphedByMany(Actor::class, 'filmable');
	}

	public static function nb()
	{
		return Film::count();
	}

    public static function nbSelect()
	{
		return $GLOBALS;
	}
}
