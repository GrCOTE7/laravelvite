<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

class TestController extends Controller
{
	public function index()
	{
		$data = __('messages.welcome', ['name' => ucfirst('lionel')]);

		return view('pages.test')->with('data', $data);
	}
}
