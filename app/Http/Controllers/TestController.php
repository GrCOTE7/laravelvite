<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

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
		$data = $this->getPostsAndCats();

		return view('pages/test')->with('data', $data ?? []);
	}

	private function getPostsAndCats():array
	{
        $arr = [
            'a' => 1,
			'b' => 2,
			'c' => 3,
		];
        Gc7::aff($arr);
        return $arr;
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