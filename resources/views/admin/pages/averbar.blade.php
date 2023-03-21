@extends('layouts.admin_new')


@section('conteudo')

<div class="content-header">
  <h1>
    
    Renovar | SIGE
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Registos</a></li>
    <li class="active">Renovar</li>
  </ol>
  <br>
</div>
  
  <div id="page-inner">
  
  
      <div class="col-md-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
            <div class="panel-body">


      <table class="table table-striped table-sm">
        <tbody>
          <tr>
            <th>Nome Completo:</th>
          </tr>
          <td>{{ $services->nome }}</td>
          <tr>
            <th>Número do Bilhete:</th>
          </tr>        
            <td>{{ $services->bi_numero }}</td>
          <tr>
              <th>Morada:</th>
          </tr>  
            <td>{{ $services->morada }}</td>
          <tr>
              <th>Distrito:</th>
          </tr>
            <td>{{ $services->distrito }}</td>       
        </tr>   
        <tr>
          <th>Municipio:</th>
      </tr>
        <td>{{ $services->municipio_idmunicipio }}</td>       
    </tr>   
    <tr>
      <th>Provincia:</th>
    </tr>
    <td>{{ $services->provincia }}</td>       
    </tr>   
        </tbody>        
    </table>

    <a class="btn btn-info btn-sm" target="blank"  href="{{asset('storage/ficheiros/'.$services->filename)}}">Bilhete de Identidade</a>
    <a class="btn btn-info btn-sm" target="blank"  href="{{asset('storage/ficheiros/'.$services->comprovativo)}}">Comprovativo</a><br>
    <br>
    <p>
      <a class="btn btn-info btn-sm-block"  href="#">Editar</a>
      <a class="btn btn-success btn-sm-block"  href="#">Aprovar</a>
      <a class="btn btn-danger btn-sm-block"  href="#">Reprovar</a>

    </p>
</div>
          <br>
      


@endsection

