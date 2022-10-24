<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
	public function index()
	{
		// Storage::disk('local')->put('recettes.txt', 'Contenu du fichier');
		Storage::disk('public')->put('recettes.txt', 'Contenu du fichier');
		$data = config('view.paths');
		return view('pages.test')->with('data', implode(',',$data));
	}
}