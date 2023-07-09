<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

class TestController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$data = $this->arrayShift();

		return view('pages/test')->with('data', $data ?? []);
	}

	private function arrayShift()
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