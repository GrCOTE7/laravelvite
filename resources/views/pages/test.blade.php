@extends ('layouts.layout')

@section('title')
    Test
@endsection


@section('main')
    <h1>My Test</h1>
    {{-- <?= implode('<br>', $data ?? []) ?> --}}
    {{-- <p>{{ $data[0] }}</p> --}}
    {{-- {{ App\Tools\Gc7::aff($data) }} --}}
    @foreach ($data as $item)
        {{ $item->id }} - {{ $item->name }}<br>
        {{ $item->email }}
        {{-- {{  $arr = $item->categories }} --}}
        {{-- @foreach ($item->categories as $k => $cat)
            @if ($k)
                -
            @endif
            {{ $cat['name'] }}
        @endforeach --}}
        <hr>
    @endforeach
@endsection
