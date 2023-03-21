@extends('layouts.admin_new')

@section('conteudo')

<div class="content-header">
  <h1>    
    Utilizadores | SIGE
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
    <li class="active">Utilizadores</li>
  </ol>
  <br>
</div>   
<div class="panel panel-default">
  
              <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                <th>Nome</th>
                <th>Email</th> 
                <th></th>
                <th></th>                            
                </tr>
            </thead>    
            <tbody>    
@foreach ($requests as $suportes)
      <tr>
        <td>@foreach ($suportes->pessoas as $item)
          {{$item->nome}}
        @endforeach</td>
        <td>{{$suportes->email}}</td>
        <td><a class="btn btn-success btn-sm btn-block"  href="#">Ver</a></td>
        <td>
        
           
          <button class="btn btn-primary btn-sm btn-block" type="submit">Eliminar</button>
        
      </td>
      </tr>    
@endforeach     
    </tbody>  
        </table>
      </div>
    </div>
  </div>
</div>
    
@endsection