@extends('layouts.admin_index')

@section('conteudo')
<div class="panel panel-default">
  <div id="page-inner">
    <div class="row">
        <div class="col-md-12">
         <h2>Detalhes</h2><br>             
        </div>
        <div class="col-md-12">
          <!-- Advanced Tables -->
                       
              <div class="panel-body">

          <h3><strong>Nome:</strong> {{ $suporte->nome }}</h3>
          <p><strong>Email:</strong><a href=""> {{ $suporte->email }}</a>  </p>
          <p><strong>Mensagem:</strong> {{ $suporte->mensagem }}</p> 
          <p><strong>Data:</strong> {{ date('d/m/y h:i', strtotime($suporte->created_at))}}</p><br>

          <form action="{{route('suporte.destroy', $suporte->idsuporte )}}" method="POST">
            @csrf 
            @method('DELETE')
            <button class="btn btn-danger btn-lg " type="submit">Eliminar</button> 
          </form>
</div>
</div></div></div>

@endsection