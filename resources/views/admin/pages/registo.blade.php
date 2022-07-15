@extends('layouts.admin_index')

@section('conteudo')


<div class="panel panel-default">
  
  <div id="page-inner">
  <div class="row">
      <div class="col-md-12">
       <h2>Registos</h2><br>             
      </div>
      <div class="col-md-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default"> 
              <div class="panel-body">
                  <div class="table-responsive">
                      <table class="table table-date table-striped table-hover" id="dataTables-example">
                          <thead>
                              <tr>
                                  <th>Serviço</th>
                                  <th>Preço</th>
                                  <th>Data de Registo</th>
                                  <th>Acção</th>
                              </tr>
                          </thead>
                          <tbody>
@foreach($servico as $request)
<tr>
  @forelse ($request->tipos as $item)
  <td>
        {{$item->tipo}}
  </td>
   <td>
        {{$item->preco}}
    @empty
  </td>
  @endforelse
  <td>{{$request->created_at}}</td>
  <td>
    @forelse ($request->tipos as $ite)
    <a class="btn btn-info btn-sm"  @if ($ite->tipo == "Registo Criminal") href="{{route('form.show', $request->idservico)}}"
         @elseif ($ite->tipo == "Bilhete Primeira Via") href="{{route('form.show.primeira', $request->idservico)}}"
          @else href="{{route('form.segunda.show', $request->idservico)}}" @endif>Ver</a>
@empty
@endforelse
<a class="btn btn-info btn-sm " href="{{route('edit.criminal', $request->idservico)}}" >Editar</a>

        <a class="btn btn-danger btn-sm " href="{{route('form.segunda.delete', $request->idservico)}}" >Eliminar</a>
  </td>
</tr>
@endforeach              
</table>
@if (isset($filters))
{!!$tipoServico->appends($filters)->links()!!}
@else
{!!$tipoServico->links()!!}
@endif
</div>
</div>                                                
</tbody>
                      </table>
                  </div>
                  
              </div>
          </div>
          <!--End Advanced Tables -->
      </div>
  </div>
@endsection