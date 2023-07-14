<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

namespace App\Http\Controllers;

class ProductController extends Controller
{
	public function show($n)
	{
		return view('pages.product')->with('number', $n);
	}
}
