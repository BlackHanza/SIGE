@extends('layouts.utente')

@section('title', 'Renovar')

@section('conteudo')


<div class="container">
  <div class="py-5 text-center">
      <h2 class="mt-1">BILHETE DE IDENTIDADE</h2>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">TABELA DE PREÇOS</span>        
      </h4>
      <hr class="mb-4">
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">1ª Vez</h6>
            <small class="text-muted">Cidadão Nacional</small>
          </div>
          <span class="text-muted">Isento</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Caducidade</h6>
            <small class="text-muted">BI Original</small>
          </div>
          <span class="text-muted">455.00KZ</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Extravio</h6>
            <small class="text-muted">Qual for o motivo</small>
          </div>
          <span class="text-muted">3.828.00KZ</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Averbamento</h6>
            <small class="text-muted">Antes de 60dias</small>
          </div>
          <span class="text-muted">1.520.00KZ</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Averbamento</h6>
            <small class="text-muted">Depois de 60dias</small>
          </div>
          <span class="text-muted">15.520.00KZ</span>
        </li>   
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Actualização de Dados</h6>
            <small class="text-muted">Actualização de Dados </small>
          </div>
          <span class="text-muted">13.200.00KZ</span>
        </li>        
      </ul>
      
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-2">DADOS</h4>
      <hr class="mb-4">
      <form action="{{route('cadastro.store')}}" class="needs-validation" method="POST" novalidate>
@csrf
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">NOME COMPLETO</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="nome">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">NÚMERO DO BI</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Desejo alterar dados do meu Bilhete de Identidade</label>
          </div>

          <div class="col-md-6 mb-3">
            <label for="Fich">Bilhete de Identidade</label>
            <input type="file"  id="Fich" required>
         </div>
        </div>

      <hr class="mb-4">

         <div class="row">

            <div class="col-md-6 mb-3">
                <label for="firstName">ATUALIZAR NOME</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.

         <div class="col-md-5 mb-3">
          <label for="address">ACTUALIZAR MORADA</label>
          <input type="text" class="form-control" id="address" placeholder="Morada atual" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
         </div>

         <div class="col-md-5 mb-3">
            <label for="address">DISTRITO</label>
            <input type="text" class="form-control" id="address" placeholder="Morada atual" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
           </div>
         
          <div class="col-md-5 mb-3">
            <label for="country">MUNÍCIPIO</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Selecionar...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-4 mb-2">
            <label for="state">PROVÍNCIA</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Selecionar...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
         </div>    

          <hr class="mb-4">        
           <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar</button>
          </form>
         </div>
        
</div>
@endsection