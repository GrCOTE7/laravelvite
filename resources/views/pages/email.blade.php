@extends ('layouts.bootstrap')

@section('title')
    Email
@endsection

@section('main')
    <h1>Email</h1>

    {{ $action }}

    <form action="{{url('email')}}" method="get">
        <input type="hidden" name="send" value="1">
        <button type="reset" class="btn btn-secondary">Reset</button>
        <button type="submit" class="btn btn-secondary">Send</button>
    </form>
@endsection
