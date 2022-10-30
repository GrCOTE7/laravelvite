@extends('layouts.bulma')

@section('main')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification du film #{{ $film->id }}</p>
        </header>
        <div class="card-content">
            <div class="content">

                <form action="{{ route('film.update', $film->id) }}" class="film-form" method="POST">
                    @csrf
                    @method('put')

                    <div class="field">
                        <label class="label">Titre</label>
                        <div class="control">
                            <input class="input @error('title') is-danger @enderror" type="text" name="title"
                                value="{{ old('title', $film->title) }}" placeholder="Titre du film">
                        </div>
                        @error('title')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Année de diffusion</label>
                        <div class="control">
                            <input class="input" type="number" name="year" value="{{ old('year', $film->year) }}"
                                min="1950" max="{{ date('Y') }}">
                        </div>
                        @error('year')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description" placeholder="Description du film">{{ old('description', $film->description) }}</textarea>
                        </div>
                        @error('description')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field is-grouped is-grouped-right">
                        <div class="control">
                            <button class="button is-link">Submit</button>
                        </div>
                        <div class="control">
                            <button class="button is-link is-light">Cancel</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
