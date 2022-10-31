@extends ('layouts.layout')

@section('title')
    Article
@endsection

@section('main')
    <h1>My Test</h1>
    <?= implode('<br>',$data) ?>
    {{-- <p>{{ $data[0] }}</p> --}}
    <hr>
@endsection
