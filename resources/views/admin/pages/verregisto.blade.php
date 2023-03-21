@extends('layouts.admin_new')
@section('conteudo')

<div class="content-header">
  <h1>
    
    Registo Criminal | SIGE
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Registos</a></li>
    <li class="active">Registo Criminal</li>
  </ol>
  <br>
</div>   
 
  <div class="row">
      
      
  
      <div class="col-md-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
            <div class="panel-body">


              <table class="table table-striped table-sm">
                <tbody>
                  <tr>
                    <th>Nome Completo</th>
                  </tr>
                  <td>{{ $request->nome }}</td>
                  <tr>
                    <th>Número do Bilhete</th>
                  </tr>        
                    <td>{{ $request->bi_numero }}</td>
                  <tr>
                      <th>Efeito</th>
                  </tr>  
                    <td>{{ $request->efeito }}</td>
                  
                </tbody>        
               
            </table>

            <a class="btn btn-info btn-sm" target="blank"  href="{{asset('storage/ficheiros/'.$request->filename)}}">Bilhete de Identidade</a>
            <a class="btn btn-info btn-sm" target="blank"  href="{{asset('storage/ficheiros/'.$request->comprovativo)}}">Comprovativo</a><br>

            <p>{{ date('d/m/Y H:i', strtotime($request->created_at))}}</p>

            <p>
              <a class="btn btn-info btn-sm-block"  href="#">Editar</a>
              <a class="btn btn-success btn-sm-block"  href="#">Aprovar</a>
              <a class="btn btn-danger btn-sm-block"  href="#">Reprovar</a>
            
            </p>
            <div>
              <img style="display: none;" src="{{asset('storage/ficheiros/'.$request->filename)}}" alt="FILE"/>
            

            </div>
          </div>
        
            
</div>



@endsection