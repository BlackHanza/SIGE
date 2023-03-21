@extends('layouts.admin_new')

@section('conteudo')

<div class="content-header">
  <h1>    
    Funcionário | SIGE
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
    <li class="active">Funcionário</li>
  </ol>
  <br>
</div>     
        
          <div class="panel panel-default">
             
           
            <table class="table table-bordeded table-striped" id="example1"">
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