@extends('layouts.admin_index')


@section('conteudo')

<div class="panel panel-default">
  
  <div id="page-inner">
  <div class="row">
      <div class="col-md-12">
       <h2>Formulário</h2><br>             
      </div>
      
  
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
<p>{{ date('d/m/Y H:i', strtotime($services->created_at))}}</p>
</div>

<p>
  <a class="btn btn-info btn-sm-block"  href="#">Editar</a>
  <a class="btn btn-success btn-sm-block"  href="#">Aprovar</a>
  <a class="btn btn-danger btn-sm-block"  href="#">Reprovar</a>

</p>

@endsection

