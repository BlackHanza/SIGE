@extends('layouts.utente')

@section('conteudo')

<div class="container card card-body">
<div class="py-5 text-center">
  <h2 class="mt-1">Formulario</h2>
</div>
<p>{{ $services->nome }}</p>
<p>{{ $services->nascimento }}</p>
<p>{{ $services->genero }}</p>
<p>{{ $services->estado_civil }}</p>
<p>{{ $services->pai }}</p>
<p>{{ $services->mae }}</p>
<p>{{ $services->naturalidade }}</p>
<p>{{ $services->provincia }}</p>
<p>{{ $services->morada }}</p>
<p>{{ $services->distrito }}</p>
<p>{{ $services->municipio }}</p>
<p>{{ $services->provincia }}</p>
<p>{{ $services->n_assenton }}</p>
<p>{{ $services->ficheiro_assento }}</p>
<p>{{ $services->ficheiro_BilhetePai }}</p>

<p>{{ date('d/m/Y H:i', strtotime($services->created_at))}}</p>
<button class="btn btn-success" type="submit">Voltar</button>
<button class="btn btn-danger" type="submit">Apagar</button>
</div>