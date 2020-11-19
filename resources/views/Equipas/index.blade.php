@foreach($equipas as $equipa)
    <a href="{{route('equipas.show', ['id'=>$equipa->id_equipa])}}">
    {{$equipa->designacao}}
    </a>
    <br>
@endforeach