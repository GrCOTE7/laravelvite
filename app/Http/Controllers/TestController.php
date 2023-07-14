<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\User;
use App\Tools\Gc7;

class TestController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 *
	 * $data = $this->arrayShiftExample();
	 */
	public function index()
	{
		$data = User::all();

		// Gc7::aff($data);

		return view('pages/test')
			->with('data', $data ?? []);
		// $data = $this->getFilmsAndOrderedCats();
	}

	private function getFilmsAndOrderedCats()
	{
		$fs = Film::with('categories:name')
			->orderBy('categories:name')
		// ->orderBy('title')
			->get();
		// echo gettype($fs);
		$arr = $fs->toArray();
		// echo gettype($arr);
		// Gc7::aff($arr[2]);

		foreach ($fs as $f) {
			$cats = $f->categories->toArray();
			sort($cats);
			$f->categories = collect($cats);
		}

		return $fs;
	}

	private function arrayShiftExample()
	{
		$arr = range('a', 'e');

		$nb = count($arr);
		for ($i = 0; $i < $nb; ++$i) {
			shuffle($arr);
			$v      = array_shift($arr);
			$data[] = $v . ($arr ? (' → ' . implode(',', $arr)) : '');
		}

		return $data;
	}
}
