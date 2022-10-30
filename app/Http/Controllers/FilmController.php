<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use App\Models\Film;

class FilmController extends Controller
{
	public function index()
	{
		$films     = Film::withTrashed()->oldest('title')->paginate(5);
		$films->nb = Film::nb();

		return view('pages.film.index', compact('films'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('pages.film.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store(FilmRequest $filmRequest)
	{
		Film::create($filmRequest->all());

		return redirect()->route('film.index')->with('info', 'Le film a bien été crée.');
	}

	public function show(Film $film)
	{
		return view('pages.film.show', compact('film'));
	}

	public function edit(Film $film)
	{
		return view('pages.film.edit', compact('film'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int                      $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update(FilmRequest $filmRequest, Film $film)
	{
		$film->update($filmRequest->all());

		return redirect()->route('film.index')->with('info', 'Le film a bien été mis à jour.');
	}

	public function destroy(Film $film)
	{
		$film->delete();

		return back()->with('info', 'Le film a bien été mis dans la corbeille.');
	}

	public function forceDestroy($id)
	{
		Film::withTrashed()->whereId($id)->firstOrFail()->forceDelete();

		return back()->with('info', 'Le film a bien été supprimé définitivement dans la base de données.');
	}

	public function restore($id)
	{
		Film::withTrashed()->whereId($id)->firstOrFail()->restore();

		return back()->with('info', 'Le film a bien été restauré.');
	}
}
