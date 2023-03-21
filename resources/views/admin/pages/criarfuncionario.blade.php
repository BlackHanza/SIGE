@extends('layouts.admin_new')

@section('conteudo')
<div class="content-header">
  <h1>    
    Adicionar Funcionário | SIGE
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
    <li class="active">Funcionário</li>
  </ol>
  <br>
</div> 

<div class="panel panel-default">

  <div id="page-inner">
    <div class="row">
       
        <div class="col-md-12">
          
          <!-- Advanced Tables -->
        
            <div class="panel-body">

  
              

      <form action="{{route('funcionario.store')}}" class="needs-validation" method="POST" novalidate>
        @csrf
        

        <div class="row">          
          <div class="col-md-6 mb-3">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="nome">
           
          </div>

                  
          <div class="col-md-6 mb-3">
            <label for="FName">Email</label>
            <input type="text" class="form-control"  placeholder=""  required name="email">
            
          </div>
          <br>
          <div class="col-md-6 mb-3">
            <label for="pass">Password</label>
            <input type="password" class="form-control"  placeholder="" value="" required name="password">
            
          </div>
          <div class="col-md-6 mb-3">
            <label for="pass">Confirmar-Password</label>
            <input type="password" class="form-control"  placeholder="" value="" required name="verificarpassword">
            
          </div>
          
         </div>
                   
            <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Adicionar</button>

          </form>
         </div>
        </div>
</div>

@endsection

  