Catégorie{{ count($film->categories) > 1 ? 's' : '' }} :
@foreach ($film->categories as $k => $category)
    @if ($loop->index)
        -
    @endif {{ $category->name }}
@endforeach
