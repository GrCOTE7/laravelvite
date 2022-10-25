<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use App\Repositories\PhotoRepository;

class PhotoController extends Controller
{
	public function create()
	{
		return view('pages.photo');
	}

	public function store(ImagesRequest $request, PhotoRepository $photoRepository)
	{
		$photoRepository->save($request->image);

		return view('pages.photo_ok');
	}
}