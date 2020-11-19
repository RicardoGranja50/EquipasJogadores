@foreach($jogadores as $jogador)
    <a href="{{route('jogadores.show', ['id'=>$jogador->id_jogador])}}">
    {{$jogador->nome}}
    </a>
    <br>
@endforeach