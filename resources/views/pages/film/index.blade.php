@extends('layouts.bulma')

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
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <caption>Liste des films</caption>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th colspan="3" style="text-align: center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($films as $film)
                            <tr>
                                <td style="text-align:right">{{ $film->id }}</td>
                                <td><strong>{{ $film->title }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('film.show', $film->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('film.edit', $film->id) }}">Modifier</a>
                                </td>
                                <td>
                                    <form action="{{ route('film.destroy', $film->id) }}" method="post">
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
