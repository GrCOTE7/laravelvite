@extends ('layouts.layout')

@section('title')
    Compte
@endsection

@section('main')
    <form action="{{ url('users') }}" method="POST">
        @csrf
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom">
        <input type="submit" value="Envoyer !">
    </form>
@endsection
