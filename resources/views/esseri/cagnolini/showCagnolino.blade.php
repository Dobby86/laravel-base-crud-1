@extends('layouts.cagnoliniLayout')
@section('content')
<div class="cagnolino">
  <h1>Il nostro cagnolino:</h1>
  <ul>
    <li><b>Nome:</b> {{$cagnolino['nome']}}</li>
    <li><b>Tipo:</b> {{$cagnolino['tipo']}}</li>
    <li><b>Peso:</b> {{$cagnolino['peso']}}</li>
    <li><b>Altezza:</b> {{$cagnolino['altezza']}}</li>
  </ul>



</div>

@endsection