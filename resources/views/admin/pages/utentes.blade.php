@extends('layouts.admin_index')

@section('conteudo')

<div class="panel panel-default">
  <div id="page-inner">
    <div class="row">
        <div class="col-md-12">
         <h2>Utilizadores</h2><br>             
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