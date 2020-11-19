@if(isset($equipas->id_equipa))
    <h1>Informação</h1>

    {{$equipas->designacao}}
    <br>
    {{$equipas->designacao_curta}}
    <br>
    {{$equipas->localidade}}
@else   
    <h1 style="color:red">ERRO </h1>
@endif