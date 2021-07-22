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
      <h4 class="mb-2">Dados</h4>
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
            <label for="lastName">NÚMERO DO BILHETE DE IDENTIDADE</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required name="bi_numero">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="Fich">BILHETE DE IDENTIDADE</label>
            <input type="file"  id="Fich" required name="ficheiro">
            </div>
          <div class="col-md-6 mb-3">
            <label for="FName">NOME DO PAI</label>
            <input type="text" class="form-control" id="FName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="MName">NOME DA MÃE</label>
            <input type="text" class="form-control" id="MName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-2">
          <label for="username">CORREIO ELECTRÓNICO</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required name="email">
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

                       
        <h4 class="mb-2">Efeito</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Trabalho</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Passaporte</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">carta de Condução</label>
          </div>
        </div>  
        
        <hr class="mb-4">
        
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Eu tenho mais de 14 anos de idade</label>
        </div>
        <hr class="mb-4">
        
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Continuar</button>
      </form>
    </div>
  </div>
</div>
@endsection