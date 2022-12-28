@extends('layouts.bulma')

@section('title')
    Film
@endsection

@section('main')
    @if (session()->has('info'))
        <div class="notification is-success">
            <button class="delete"></button>
            {{ session('info') }}
        </div>
    @endif

    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Films</p>

            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('film.index') }}" @unless($slug) selected @endunless>Tous
                        acteurs</option>
                    @foreach ($actors as $actor)
                        <option value="{{ route('film.actor', $actor->slug) }}"
                            {{ $slug == $actor->slug ? 'selected' : '' }}>{{ $actor->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('film.index') }}" @unless($slug) selected @endunless>
                        Toutes
                        catégories</option>
                    @foreach ($categories as $category)
                        <option value="{{ route('film.category', $category->slug) }}"
                            {{ $slug == $category->slug ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <a class="button is-info" href="{{ route('film.create') }}" title="Créer un film">+</a>
        </header>

        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">

                    <caption>Liste des films (@if ($films->nbSelected < $films->nb){{ $films->nbSelected }} / @endif{{ $films->nb }})</caption>
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th colspan="3" style="text-align: center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($films as $film)
                            <tr @if ($film->deleted_at) class="has-background-grey-lighter" @endif>
                                <td><strong>{{ $film->title }}</strong>
                                    @if (!$slug)
                                        <br>
                                        <p class="is-size-6 has-text-weight-light">@include ('partials.categorieslist')</p>
                                    @endif
                                </td>

                                <td>
                                    @if ($film->deleted_at)
                                        <form action="{{ route('film.restore', $film->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button class="button is-primary" type="submit">Restaurer</button>
                                        </form>
                                    @else
                                        <a class="button is-primary" href="{{ route('film.show', $film->id) }}">Voir</a>
                                    @endif
                                </td>

                                <td>
                                    @if ($film->deleted_at)
                                    @else
                                        <a class="button is-warning"
                                            href="{{ route('film.edit', $film->id) }}">Modifier</a>
                                    @endif
                                </td>

                                <td>
                                    <form
                                        action="{{ route($film->deleted_at ? 'film.force.destroy' : 'film.destroy', $film->id) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <footer class="card-footer paginate">
            {{ $films->links() }}
        </footer>
    </div>
@endsection
