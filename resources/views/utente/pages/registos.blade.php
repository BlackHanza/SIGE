@extends('layouts.utente')

@section('conteudo')

<style>
  .reg{
    color: darkgray;
  }
  
  .card{
    box-shadow: 0px 0px 20px rgba(0,0,0,.5);
  }
</style>

<div class="container card card-body">
<div class="py-5 text-center">
  <h2 class="reg mt-1">Registos</h2>
</div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Serviço</th>
              <th>Preço</th>
              <th>Data Registo</th>
            </tr>
          </thead>
          <tbody>

            
@foreach($servico as $request)

              <tr>

                <td>
                  @forelse ($tipoServico as $item)
                  @if ($request->tipo_servico_idtipo_servico == $item->idtipo_servico)
                  {{$item->tipo}}
                  @endif
                @empty
                    
                @endforelse
                </td>
                <td> @forelse ($tipoServico as $item)
                  @if ($request->tipo_servico_idtipo_servico == $item->idtipo_servico)
                  {{$item->preco}}
                  @endif
                @empty
                    
                @endforelse</td>
                <td>{{$request->created_at}}</td>
                <td><a class="btn btn-info btn-sm btn-block"  href="{{route('formulario.show', $request->idservico)}}">Ver</a>
                </td>
               
            </tr>

@endforeach      
@if (isset($filters))
{!!$tipoServico->appends($filters)->links()!!}
@else
{!!$tipoServico->links()!!}
@endif        
        </table>
       
         
      </div>
    </div>
    
@endsection