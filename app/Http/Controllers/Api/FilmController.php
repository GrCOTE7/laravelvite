<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FilmResource;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return Film::paginate(4);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		Film::create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show(Film $film)
	{
		return new FilmResource($film);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Film $film)
	{
		$film->update($request->all());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Film $film)
	{
		$film->delete();
	}
}