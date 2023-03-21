@extends('layouts.admin_new')

@section('conteudo')
<div class="content-header">
  <h1>
    
    Mensagem | SIGE
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-envelope"></i> Notificacão</a></li>
    <li class="active">Ver</li>
  </ol>
  <br>
</div>   
<div class="panel panel-default">
  
    <div class="row">
        
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

</div></div></div>
<br><br>
<br>
<br>
<br>
<br>

@endsection