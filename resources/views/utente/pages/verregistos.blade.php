@extends('layouts.utente')

@section('conteudo')

<div class="container card card-body">
<div class="py-5 text-center">
  <h2 class="mt-1">Formulário</h2>
</div>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <tbody>
      <tr>
        <th>Nome Completo:</th>
      </tr>
      <td>{{ $request->nome }}</td>
      <tr>
        <th>Número do Bilhete:</th>
      </tr>        
        <td>{{ $request->bi_numero }}</td>
      <tr>
          <th>Pai:</th>
      </tr>  
        <td>{{ $request->pai }}</td>
      <tr>
          <th>Mãe:</th>
      </tr>
        <td>{{ $request->mae }}</td>       
    </tr>   
    </tbody>        
</table>

<p>{{ date('d/m/Y H:i', strtotime($request->created_at))}}</p>
</div>

@endsection

