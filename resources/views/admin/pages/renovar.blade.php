@extends('layouts.admin_index')

@section('conteudo')

<div class="container card card-body">
<div class="py-5 text-center">
  <h2 class="mt-1">Formulario</h2>
</div>
<p>{{ $services->nome }}</p>
<p>{{ $services->bi_numero }}</p>
<p>{{ $services->morada }}</p>
<p>{{ $services->distrito }}</p>
<p>{{ $services->municipio }}</p>
<p>{{ $services->provincia }}</p>
<p>{{ $services->ficheiro_bilhete }}</p>
<p>{{ $services->ficheiro_pagamento }}</p>
<p>{{ date('d/m/Y H:i', strtotime($services->created_at))}}</p>
<button class="btn btn-success" type="submit">Voltar</button>
<button class="btn btn-danger" type="submit">Apagar</button>
</div>
