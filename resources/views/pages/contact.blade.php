@extends('layouts.bootstrap')

@section('title')
    Contact
@endsection

@section('main')
    <h1>Contact</h1>
    <div class="container">
        <p class="justify">
            N.B.: Penser à starter les MailHog<br>
            (Ou autre selon les settings dans le .env)
        </p>
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Contactez-moi</h4>
            <div class="card-body">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="nom"
                            id="nom" placeholder="Votre nom" value="{{ old('nom') }}">
                        @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Votre email"
                            value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror"
                            placeholder="Votre message" value="{{ old('message') }}"></textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>
            </div>
        </div>
    </div>
@endsection
