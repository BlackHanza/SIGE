@extends('layouts.admin_index')


@section('conteudo')

<div class="panel panel-default">
  
  <div id="page-inner">
  <div class="row">
      <div class="col-md-12">
       <h2>Editar Dados</h2><br>             
      </div>
      
  
      <div class="col-md-12">
          <!-- Advanced Tables -->
          <div class="panel panel-default">
            <div class="panel-body">

              <form action="{{route('update.criminal', $idsuporte)}}" class="needs-validation" method="POST" novalidate>
                
                @method('PUT')
                @csrf

                <table class="table table-striped table-sm">
                  <tbody>
                    <tr>
                      <th>Nome Completo:</th>
                    </tr>
                    <td><input type="text" class="form-control"   required name="nome" value="{{$servico->nome}}"></td>
                    <tr>
                      <th>Número do Bilhete:</th>
                    </tr>        
                      <td><input type="text" class="form-control"  placeholder=""  required name="bi_numero" value="{{$servico->bi_numero}}"></td>
                    <tr>
                        <th>Efeito:</th>
                    </tr>  
                      <td><input type="text" class="form-control"  placeholder=""  required name="efeito" value="{{$servico->efeito}}"></td>
                      
                  </tbody> 

                  
       
              </table>
                          
              <button class="btn btn-success btn-lg" type="submit">Salvar alterações</button>
                          </form>

</div>



@endsection



  