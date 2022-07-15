@extends('layouts.admin_index')

@section('conteudo')

<div class="panel panel-default">
  <div id="page-inner">
    <div class="row">
        <div class="col-md-12">
         <h2>Notificação</h2><br>             
        </div>
        <div class="col-md-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
             
              <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                
                <th>Nome</th>
                <th>Email</th> 
                <th>Data</th>
                <th></th>
                <th></th>                            
                </tr>
            </thead>    
            <tbody>    
@foreach ($suporte as $suportes)
      <tr>
        
        <td>{{$suportes->nome}}</td>
        <td>{{$suportes->email}}</td>
        <td>{{$suportes->created_at}}</td>
        <td><a class="btn btn-success btn-sm btn-block"  href="{{route('suporte.show', $suportes->idsuporte)}}">Ver</a></td>
        <td>  
          <form action="{{route('suporte.destroy', $suportes->idsuporte )}}" method="POST">
            @csrf 
            @method('DELETE')
            <button class="btn btn-primary btn-sm btn-block" type="submit">Eliminar</button> 
          </form>
                 
      </td>
      </tr>    
@endforeach     
    </tbody>  
        </table>
      </div>
    </div>
  </div></div>
    
@endsection