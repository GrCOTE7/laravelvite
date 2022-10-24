<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

class TestController extends Controller
{
	public function index()
	{
		$data = config('view.paths');
		return view('pages.test')->with('data', implode(',',$data));
	}
}