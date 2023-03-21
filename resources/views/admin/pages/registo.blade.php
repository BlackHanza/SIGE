@extends('layouts.admin_new')
@section('titulo','Inicial')
@section('conteudo') 
<div class="content-header">
    <h1>
      
      Registos | SIGE
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
      <li class="active">Registos</li>
    </ol>
    <br>
</div>     
       
<div class="box">
    <div class="box-body">
        <div class='row'>
            <div class='col-xs-12'>
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#fa-icons" data-toggle="tab">Todos Registos</a></li>
                  <li class="#glyphicons"><a href="#fa-bell" data-toggle="tab">1ª Via</a></li>
                  <li class="#glyphicons"><a href="#glyphicons" data-toggle="tab">2ª Via</a></li>
                  <li class="#glyphicons"><a href="#fa-icons" data-toggle="tab">Renovar</a></li>
                  <li class="#glyphicons"><a href="#fa-icons" data-toggle="tab">Averbar</a></li>
                  <li><a href="#glyphicons" data-toggle="tab">Registo Criminal</a></li>
                </ul>                
              </div>
            </div>
        </div>

        <table class="table table-bordeded table-striped" id="example1">
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
                                <a class="btn btn-primary btn-md fa fa-eye"  @if ($ite->tipo == "Registo Criminal") href="{{route('form.show', $request->idservico)}}"
                                    @elseif ($ite->tipo == "Bilhete Primeira Via") href="{{route('form.show.primeira', $request->idservico)}}"
                                    @else href="{{route('form.segunda.show', $request->idservico)}}" @endif>  Ver</a>
                            @empty
                            @endforelse
                                <a class="btn btn-info btn-md fa fa-pencil " href="{{route('edit.criminal', $request->idservico)}}" >  Editar</a>
                                <a class="btn btn-danger btn-md fa fa-trash-o " href="{{route('form.segunda.delete', $request->idservico)}}">  Eliminar</a>
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
@endsection