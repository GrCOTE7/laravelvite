@extends('layouts.bulma')

@section('title')
    Film
@endsection

@section('main')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Titre : {{ $film->title }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Année de sortie : {{ $film->year }}</p>

                <p>@include ('partials.actorslist')</p>

                <p>@include ('partials.categorieslist')</p>

                <hr>

                <p>Description :<br>
                    {{ $film->description }}</p>
            </div>
        </div>
    </div>
@endsection
