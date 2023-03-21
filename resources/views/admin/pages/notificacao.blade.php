@extends('layouts.admin_new')
@section('conteudo')
<div class="content-header">
  <h1>    
    Notificação | SIGE
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
    <li class="active">Notificação</li>
  </ol>
  <br>
</div>     
        
          <div class="panel panel-default">
             
            
      
        <table class="table table-bordeded table-striped" id="example1">
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