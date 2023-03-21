@extends('layouts.utente_new')

@section('conteudo')

<div class="container card card-body">
<div class="py-5 text-center">
  <h2 class="mt-1">Formulario</h2>
</div>
<p>{{ $services->nome }}</p>
<p>{{ $services->bi_numero }}</p>
<p>{{ $services->pai }}</p>
<p>{{ $services->mae }}</p>
<p>{{ $services->efeito }}</p>
<p>{{ $services->ficheiro_bilhete }}</p>
<p>{{ $services->ficheiro_pagamento }}</p>
<p>{{ date('d/m/Y H:i', strtotime($services->created_at))}}</p>
<button class="btn btn-success" type="submit">Voltar</button>
<button class="btn btn-danger" type="submit">Apagar</button>
</div>

@endsection