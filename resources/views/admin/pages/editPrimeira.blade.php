@extends('layouts.admin_index')

@section('title', 'Bilhete de Identidade')

@section('conteudo')


<div class="container">
  <div class="py-5 text-center">
      <h2 class="mt-1">Primeira Via</h2>
  </div>


      <form action="{{route('primeira.store')}}" enctype="multipart/form-data" class="needs-validation" method="POST" novalidate>
@csrf
@method('put')
        <h4 class="mb-2">Identificação Pessoal</h4>        
        <hr class="mb-4">

        <br>
        
        <div class="row">          
          <div class="col-md-6 mb-3">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control"  placeholder="Nome Completo" value="" required name="nome">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="Nasc">Nascimento</label>
            <input type="date" class="form-control"  placeholder="" value="" required name="data_nascimento">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="country">Genero</label>
            <select class="custom-select d-block w-100"  required name="genero">
              <option value="">Selecionar</option>
              <option selected>Masculino</option>
              <option>Femenino</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="country">Estado Civil</label>
            <select class="custom-select d-block w-100"  required name="estado_civil">
              <option selected>Solteiro</option>
              <option>Casado</option>
              
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          
          <div class="col-md-6 mb-3">
            <label for="FName">Nome do Pai</label>
            <input type="text" class="form-control"  placeholder="" value="" required name="pai">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="MName">Nome da Mãe</label>
            <input type="text" class="form-control"  placeholder="" value="" required name="mae">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="Natur">Naturalidade</label>
            <input type="text" class="form-control" placeholder="Natural de..." value="" required name="naturalidade">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-md-4 mb-2">
            <label for="state">Província</label>
            <select class="custom-select d-block w-100"  required name="provincia">
              <option value="">Selecionar...</option>
              <option>Luanda</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
         </div>
         <hr class="mb-4">
         <h4 class="mb-2">Endereço Pessoal</h4>
         <hr class="mb-4">
         
       

         <div class="row">

            
         <div class="col-md-5 mb-3">
          <label for="address">Morada</label>
          <input type="text" class="form-control" id="address" placeholder="Morada atual" name="morada" required>
          <div class="invalid-feedback">
          Please enter your shipping address.
          </div>
        </div>

        <div class="col-md-5 mb-3">
          <label for="country">Distrito</label>
          <select class="custom-select d-block w-100" id="country" required name="pais">
            <option value="">Selecionar...</option>
            <option>United States</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid country.
          </div>
        </div>
          <div class="col-md-5 mb-3">
            <label for="country">Município</label>
            <select class="custom-select d-block w-100" id="country" required name="pais">
              <option value="">Selecionar...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-4 mb-2">
            <label for="state">Província</label>
            <select class="custom-select d-block w-100" id="state" required name="provincia">
              <option value="">Selecionar...</option>
              <option>CABINDA</option>
              <option>CUNENE</option>
              <option>BENGO</option>
              <option>BENGUELA</option>
              <option>LOBITO</option>
              <option>LUANDA</option>
              <option>MALANJE</option>
              <option>KWANZA SUL</option>
              <option>KWANZA NORTE</option>
              <option>LUNDA SUL</option>
              <option>LUNDA NORTE</option>
              <option>MOXICO</option>
              <option>ZAIRE</option>
              <option>UIGE</option>
              <option>NAMINBE</option>
              <option>HUILA</option>
              <option>BIE</option>
              <option>HUAMBO</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
         </div>
         
         <hr class="mb-4">
         <h4 class="mb-2">Anexos e Outros</h4>
         <hr class="mb-4">

         <div class="row">
         <div class="col-md-6 mb-3">
            <label for="nCert">Número de Assento de Nascimento</label>
            <input type="text" class="form-control" placeholder="" required name="assento" >
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

            <hr class="mb-4">        
            <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Salvar Alteracoes</button>

          </form>
         </div>
        </div>
</div>
@endsection