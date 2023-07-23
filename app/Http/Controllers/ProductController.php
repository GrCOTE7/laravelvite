<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

namespace App\Http\Controllers;

class ProductController extends Controller
{
	public function show($number)
	{
		$route = route('product', ['n' => 789]);

		return view(
			'pages.product',
			compact('number')
		)
			->with('route', $route);
	}
}
