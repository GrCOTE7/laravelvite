<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

class ArticleController extends Controller
{
	public function show($n)
	{
		return view('pages.article')->with('numero', $n);
	}
}
