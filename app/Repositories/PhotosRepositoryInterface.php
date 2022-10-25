<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Repositories;

use Illuminate\Http\UploadedFile;

interface PhotosRepositoryInterface
{
	public function save(UploadedFile $image);
}