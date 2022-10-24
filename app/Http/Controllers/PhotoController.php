<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;

class PhotoController extends Controller
{
	public function create()
	{
		return view('pages.photo');
	}

	public function store(ImagesRequest $request)
	{
		$request->image->store(config('images.path'), 'public');

		return view('pages.photo_ok');
	}
}