<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use App\Models\Category;
use App\Models\Film;

class FilmController extends Controller
{
	public function index($slug = null)
	{
		$query     = $slug ? Category::whereSlug($slug)->FirstOrFail()->films() : Film::query();
		$films     = $query->withTrashed()->oldest('title')->paginate(5);
		$films->nb = Film::nb();

		return view('pages.film.index', compact('films', 'slug'));
	}

	public function create()
	{
		return view('pages.film.create');
	}

	public function store(FilmRequest $filmRequest)
	{
		$film = Film::create($filmRequest->all());
        $film->categories()->attach($filmRequest->cats);
		return redirect()->route('film.index')->with('info', 'Le film a bien été crée.');
	}

	public function show(Film $film)
	{
		// $film::with('categories')->get();
// dd($film->categories);
		return view('pages.film.show', compact('film'));
	}

	public function edit(Film $film)
	{
		return view('pages.film.edit', compact('film'));
	}

	public function update(FilmRequest $filmRequest, Film $film)
	{
		$film->update($filmRequest->all());
        $film->categories()->sync($filmRequest->cats);
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