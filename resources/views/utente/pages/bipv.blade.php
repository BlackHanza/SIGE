@extends('layouts.utente')

@section('title', 'Bilhete de Identidade')

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
            <small class="text-muted">PRIMEIRA VIA</small>
          </div>
          <span class="text-muted">Isento</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Caducidade</h6>
            <small class="text-muted">RENOVAR</small>
          </div>
          <span class="text-muted">455.00KZ</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Extravio</h6>
            <small class="text-muted">SEGUNDA VIA</small>
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
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Eu tenho menos de 6 anos de idade</label>
          </div>
        <hr class="mb-4">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">NOME COMPLETO</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="tipo">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="Nasc">NASCIMENTO</label>
            <input type="date" class="form-control" id="Nasc" placeholder="" value="" required name="data_nascimento">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          
          <div class="col-md-6 mb-3">
            <label for="FName">NOME DO PAI</label>
            <input type="text" class="form-control" id="FName" placeholder="" value="" required name="pai">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="MName">NOME DA MÃE</label>
            <input type="text" class="form-control" id="MName" placeholder="" value="" required name="mae">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="Natur">NATURALIDADE</label>
            <input type="text" class="form-control" id="Natur" placeholder="Natural de..." value="" required name="naturalidade">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <label for="state">PROVÍNCIA</label>
            <select class="custom-select d-block w-100" id="state" required name="provincia">
              <option value="">Selecionar...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
         </div>

         <div class="mb-2">
          <label for="address">MORADA</label>
          <input type="text" class="form-control" id="address" placeholder="Morada atual" name="morada" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
         </div>

         <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">PAÍS</label>
            <select class="custom-select d-block w-100" id="country" required name="pais">
              <option value="">Selecionar...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <label for="state">PROVÍNCIA</label>
            <select class="custom-select d-block w-100" id="state" required name="provincia">
              <option value="">Selecionar...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
         </div>           
        
         <div class="col-md-6 mb-2">
            <label for="nCert">NÚMERO DE ASSENTO DE NASCIMENTO</label>
            <input type="text" class="form-control" id="nCert" placeholder="" value="" required name="assento" >
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-md-6 mb-2">
               <label for="Fich">Assento de Nascimento</label>
               <input type="file"  id="Fich" required name="">
          </div>
          <div class="col-md-6 mb-2">
            <label for="Fich">Cartão de Batismo</label>
            <input type="file"  id="Fich" required>
          </div>

          <div class="col-md-6 mb-2">
                <label for="Fich">BI ou Cartão Eleitoral do Pai</label>
                <input type="file"  id="Fich" required>
          </div>
          <div class="col-md-6 mb-2">
                <label for="Fich">BI ou Cartão Eleitoral da Mãe</label>
                <input type="file"  id="Fich" required>
          </div>


            <hr class="mb-4">        
            <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar</button>
          </form>
         </div>
        </div>
</div>
@endsection