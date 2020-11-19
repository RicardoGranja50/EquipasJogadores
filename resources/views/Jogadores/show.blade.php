@if(isset($jogadores->id_jogador))
    <h1>Informação</h1>
    <br>
    {{$jogadores->nome}}
    <br>
    {{$jogadores->nacionalidade}}
    <br>
    {{$jogadores->data_nascimento}}
    <br>
	{{$jogadores->equipas->designacao}}<br>
@else   
    <h1 style="colar:red"> erro</H1>
@endif