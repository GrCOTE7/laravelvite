<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Repositories;

use Illuminate\Http\UploadedFile;

class PhotoRepository
{
	public function save(UploadedFile $image)
	{
		$image->store(config('image.path'), 'public');
	}
}