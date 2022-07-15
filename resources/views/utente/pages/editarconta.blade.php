@extends('layouts.utente')

@section('conteudo')


<div class="container">
  <div class="py-5 text-center">
      <h2 class="mt-1">Editar Dados</h2>
  </div>
  
    <div class="col-md-8 order-md-1">
            <hr class="mb-4">

      <form action="{{route('#')}}" class="needs-validation" method="POST" novalidate>
@csrf
@method('put')
        <h4 class="mb-2">Dados</h4>        
        <hr class="mb-4">

        <div class="row">          
          <div class="col-md-6 mb-3">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="nome">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

                  
          <div class="col-md-6 mb-3">
            <label for="FName">Email</label>
            <input type="text" class="form-control"  placeholder=""  required name="email">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="pass">Password</label>
            <input type="password" class="form-control"  placeholder="" value="" required name="password">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>   
        </div>
                   
            <hr class="mb-4">
          <button class="btn btn-success btn-lg btn-block" type="submit">Salvar alteracoes</button>

          </form>
         </div>
        </div>
</div>
@endsection

  