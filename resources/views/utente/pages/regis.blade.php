@extends('layouts.utente')
@section('title', 'Registo Criminal')

@section('conteudo')

<div class="container">
  <div class="py-5 text-center">
      <h2 class="mt-1">Registo Criminal</h2>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Tabela de Preços</span>
                
      </h4>
      <hr class="mb-2">
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Trabalho</h6>
            <small class="text-muted">Concursos Públicos</small>
          </div>
          <span class="text-muted">450.00KZ</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Particular</h6>
            <small class="text-muted">Carta de Condução</small>
          </div>
          <span class="text-muted">5720.00KZ</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Laborais</h6>
            <small class="text-muted">Representações Diplimatícas</small>
          </div>
          <span class="text-muted">7.800KZ</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Pessoal</h6>
            <small class="text-muted">Armas de Fogo</small>
          </div>
          <span class="text-muted">120.000KZ</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Pessoal</h6>
            <small class="text-muted">Armas de Caça</small>
          </div>
          <span class="text-muted">70.800KZ</span>
        </li>        
      </ul>      
    </div>

    <div class="col-md-8 order-md-1">
      <hr class="mb-2">
      <h4 class="mb-2">Identificação Pessoal</h4>
      <hr class="mb-2">
      <form action="{{route('registo.store')}}" enctype="multipart/form-data" class="needs-validation" method="POST" novalidate>
         @csrf

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value=""  name="nome">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="lastName">Número do Bilhete</label>
            <input type="text" class="form-control"   value=""  name="bi_numero">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
          

        <hr class="mb-2">                     
        <h4 class="mb-2">Efeito</h4>
        <hr class="mb-2">

        <div class="col-md-5 mb-3">
          
          <select class="custom-select d-block w-100"  required name="efeito">
            <option value="">Selecionar...</option>
            <option>PASSAPORTE</option>
            <option>CARTA DE CONDUÇÃO</option>
            <option>TRABALHO</option>
            <option>LICENCIAR ARMA DE FOGO</option>
            <option>LABORAIS</option>
            <option>ARMA DE FOGO</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid country.
          </div>
        </div>
        
      
        <hr class="mb-2">
         <h4 class="mb-2">Anexos e Outros</h4>
         <hr class="mb-2">
         <div class="row">
          <div class="col-md-6 mb-2">
               <label for="Fich">Bilhete de Identidade</label>
               <input type="file" name="fichbilhete">
          </div>
        </div>
          <hr class="mb-2">
          <h4 class="mb-2">Dados de Pagamento</h4>
          <hr class="mb-2">
          <div class="row">
          <div class="col-md-5 mb-3">
            <label for="nCert">Número de Transação/Operação </label>
            <input type="text" class="form-control" placeholder="" required name="n_transacao" >
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <label for="Fich">Comprovativo de Pagamento</label>
            <input type="file"  required name="fich_pagamento">
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar</button>
      </form>
    </div>
  </div>
</div>
@endsection