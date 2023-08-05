@extends ('layouts.layout')

@section('title')
    Test
@endsection

@section('main')
    <h1>My Test</h1>
    {{-- <?= implode('<br>', $data ?? []) ?> --}}
    {{-- <p>{{ $data[0] }}</p> --}}
    {{-- {{ App\Tools\Gc7::aff($data) }} --}}
    @php
        use App\Tools\Gc7;
        Gc7::aff($tables, 'Tables in DB');
    @endphp

    {{-- @foreach ($tables as $table)
        {{  $table }}<br>
    @endforeach --}}
    <hr>

    @php
        // Gc7::aff($data);
        echo count($data) . ' users :<hr>';
    @endphp

    <table>
        @foreach ($data as $item)
            <tr>

                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
            </tr>
        @endforeach
    </table>

    <hr>

    <p>Oki</p>
@endsection
