<p>Nombre des Membres : {{count($data)}}</p>
@foreach ($data as $item)
    @if ($item->genre == "Homme")
        <p class="text-primary">{{$item->nom}}</p>
    @else
        <p class="text-danger">{{$item->nom}}</p>
    @endif
@endforeach