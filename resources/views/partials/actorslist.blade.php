Actor{{ count($film->actors) > 1 ? 's' : '' }} :

@foreach ($film->actors as $k => $actor)
    @if ($loop->index)
        -
    @endif {{ $actor->name }}
@endforeach
