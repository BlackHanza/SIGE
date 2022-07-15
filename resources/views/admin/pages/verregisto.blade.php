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
                  <td>{{ $request->nome }}</td>
                  <tr>
                    <th>Número do Bilhete:</th>
                  </tr>        
                    <td>{{ $request->bi_numero }}</td>
                  <tr>
                      <th>Efeito:</th>
                  </tr>  
                    <td>{{ $request->efeito }}</td>
                  
                </tbody>        
               
            </table>
            <p>{{ date('d/m/Y H:i', strtotime($request->created_at))}}</p>
            <div>

              <img style="display: none;" src="{{asset('storage/ficheiros/'.$request->filename)}}" alt="FILE"/>
            </div>
</div>

<p>
  <a class="btn btn-info btn-sm-block" target="blank"  href="{{asset('storage/ficheiros/'.$request->filename)}}">Ver Ficheiro</a>
  <a class="btn btn-info btn-sm-block"  href="#">Editar</a>
  <a class="btn btn-success btn-sm-block"  href="#">Aprovar</a>
  <a class="btn btn-danger btn-sm-block"  href="#">Reprovar</a>

</p>

@endsection