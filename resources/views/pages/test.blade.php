@extends ('layouts.layout')

@section('title')
    Article
@endsection

@section('main')
    <h1>My Test</h1>
    <p>{{ $data }}</p>
    <hr>
    @php
        $name = App::isLocale('fr') ? 'Prénom' : 'lastname';
    @endphp
    {{ __('First translation, :name', ['name' => ucfirst($name)]) }}
    <hr>
    @lang('First translation, :name', ['name' => ucfirst($name)])
@endsection
