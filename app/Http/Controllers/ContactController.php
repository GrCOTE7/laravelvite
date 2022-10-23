<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pages.contact');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'nom'     => 'bail|required|between:5,20|alpha',
			'email'   => 'bail|required|email',
			'message' => 'bail|required|max:250',
		]);

		if ($validator->fails()) {
			return back()->withErrors($validator)->withInput();
		}

		return view('pages.confirm');
	}
}
