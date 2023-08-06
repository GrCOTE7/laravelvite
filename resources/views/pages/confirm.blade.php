@extends('layouts.bootstrap')

@section('title')
    Message Envoyé
@endsection

@section('main')
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h2 class="card-header mt-2">Bravo, {{ $contact->nom }} !</h2>
            <div class="card-body">
                <p class="card-text">Merci. Votre message a bien été enregistré et transmis à l'administrateur du site. Vous
                    recevrez une réponse rapidement.</p>
            </div>
        </div>
    </div>
@endsection
