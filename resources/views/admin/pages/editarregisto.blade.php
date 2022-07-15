@extends('layouts.admin_index')
@section('title', 'Registo Criminal')

@section('conteudo')


<div class="container">
  <div class="py-5 text-center">
      <h2 class="mt-1">Registo Criminal</h2>
  </div>
  <div class="row">
   <div class="col-md-8 order-md-1">
      <hr class="mb-2">
      <h4 class="mb-2">Identificação Pessoal</h4>
      <hr class="mb-2">
      <form action="{{route('registo.store')}}" class="needs-validation" method="POST" novalidate>
         @csrf
         @method('put')

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="nome">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="lastName">Número do Bilhete</label>
            <input type="text" class="form-control"   value="" required name="bi_numero">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="FName">Nome do Pai</label>
            <input type="text" class="form-control"  value="" required name="pai">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="MName">Nome da Mãe</label>
            <input type="text" class="form-control"  value="" required name="mae">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <hr class="mb-2">                     
        <h4 class="mb-2">Efeito</h4>
        <hr class="mb-2">

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="efeito" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Trabalho</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="efeito" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Passaporte</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="efeito" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">carta de Condução</label>
          </div>
        </div>          
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar Alteracoes</button>
      </form>
    </div>
  </div>
</div>
@endsection