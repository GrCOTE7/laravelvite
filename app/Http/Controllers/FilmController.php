<?php

/**
 * (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App\Http\Controllers;

use App\Http\Requests\FilmRequest;
use App\Models\{Actor, Category,Film};
use App\Tools\Gc7;
use Illuminate\Support\Facades\Route;

class FilmController extends Controller
{
	public function index($slug = null)
	{
		if ($slug) {
			// Gc7::aff(Route::currentRouteName());
			if ('film.category' == Route::currentRouteName()) {
				$model = new Category();
			} else {
				$model = new Actor();
			}
		}
		$query             = ($model ?? null) ? $model->whereSlug($slug)->FirstOrFail()->films() : Film::query();
		$films             = $query->withTrashed()->oldest('title')->paginate(5);
		$films->nb         = Film::nb();
		$films->nbSelected = $films->total();

		return view('pages.film.index', compact('films', 'slug'));
	}

	public function create()
	{
		return view('pages.film.create');
	}

	public function store(FilmRequest $filmRequest)
	{
		$film = Film::create($filmRequest->all());
		$film->actors()->attach($filmRequest->acts);
		$film->categories()->attach($filmRequest->cats);

		return redirect()->route('film.index')->with('info', 'Le film a bien été crée.');
	}

	public function show(Film $film)
	{
		// $film::with('categories')->get();

		// $film::with(['categories' => function ($query) {
		// 	$query->orderBy('name');
		// }])->find($film);

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
		$film->actors()->sync($filmRequest->acts);
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