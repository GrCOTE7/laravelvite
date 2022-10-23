<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

class TestController extends Controller
{
	public function index()
	{
		return view('pages.test')->with('data', 123);
	}
}
