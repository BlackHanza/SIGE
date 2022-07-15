@extends('layouts.admin_index')

@section('conteudo')

<div class="panel panel-default">
  <div id="page-inner">
    <div class="row">
        <div class="col-md-12">
         <h2>Funcionários</h2><br>             
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
                </tr>
              </thead>
              <tbody>   

  @foreach ($requests as $request)
    <tr>
      <td>@foreach ($request->pessoas as $item)
        {{$item->nome}}
      @endforeach</td>
      <td>@foreach ($request->utilizadores as $value)
        {{$value->email}}
      @endforeach</td>      
      <td>@foreach ($request->pessoas as $item)
        {{$item->created_at}}
      @endforeach</td>

      <td><a class="btn btn-success btn-sm btn-block"  href="#">Ver</a></td>

      <td><button class="btn btn-primary btn-sm btn-block" type="submit">Eliminar</button>

      </td>          
     
    </tr>
    </tbody>
  @endforeach
  </table>   
            <a class="btn btn-primary btn-sm " href="{{ route('funcionario.create') }}">Adicionar</a><br>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
    
@endsection