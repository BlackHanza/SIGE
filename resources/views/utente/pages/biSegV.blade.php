@extends('layouts.utente')

@section('title', 'Bilhete de Identidade')

@section('conteudo')


<div class="container">
  <div class="py-5 text-center">
      <h2 class="mt-1">Segunda Via</h2>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Tabela de Preço</span>        
      </h4>
      <hr class="mb-1">
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">1ª Vez</h6>
            <small class="text-muted">Primeira Via</small>
          </div>
          <span class="text-muted">Isento</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Caducidade</h6>
            <small class="text-muted">Renovar</small>
          </div>
          <span class="text-muted">455.00KZ</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Extravio</h6>
            <small class="text-muted">Segunda Via</small>
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
            <hr class="mb-1">



      <form action="{{route('segunda.store')}}" enctype="multipart/form-data" class="needs-validation" method="POST" novalidate>
@csrf
<h4 class="mb-1">Identificação Pessoal</h4>        
<hr class="mb-1">

      
<div class="row">          
  <div class="col-md-5 mb-3">
    <label for="firstName">Nome</label>
    <input type="text" class="form-control" placeholder="Nome Completo" value="" required name="nome">
    <div class="invalid-feedback">
      Valid first name is required.
    </div>
  </div>

       
  <div class="col-md-5 mb-3">
    <label for="FName">Número do BI</label>
    <input type="text" class="form-control"  placeholder="Número do Bilhete" value="" required name="bi_numero">
    <div class="invalid-feedback">
      Valid last name is required.
    </div>
  </div>
  
</div>
 
 <hr class="mb-1">
 <h4 class="mb-1">Endereço Pessoal</h4>
 <hr class="mb-1">
 


 <div class="row">

    
  <div class="col-md-5 mb-3">
    <label for="address">Morada</label>
    <input type="text" class="form-control" placeholder="Casa nº, Rua" name="morada" required>
    <div class="invalid-feedback">
    Please enter your shipping address.
    </div>
  </div>

  <div class="col-md-5 mb-3">
    <label for="country">Distrito</label>
    <select class="custom-select d-block w-100" id="country" required name="distrito">
      <option value="">Selecionar...</option>
      <option>SAMBA</option>
      <option>MAIANGA</option>
      <option>INGOMBOTAS</option>
      <option>RANGEL</option>
      <option>SAMBIZANGA</option>
      <option>TALATONA</option>
      <option>KILAMBA</option>
      <option>BITA TANQUE</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid country.
    </div>
  </div>
    
    <div class="col-md-5 mb-3">
      <label for="country">Município</label>
      <select class="custom-select d-block w-100"  required name="art">
        <option value="">Selecionar</option>
        <option>LUANDA</option>
        <option>VIANA</option>
        <option>CAZENGA</option>
        <option>KICOLO</option>
        <option>ICOLO E BENGO</option>
        <option>ZANGO</option>
        <option>KILAMBA KIAXI</option>
      </select>
      <div class="invalid-feedback">
        Please select a valid country.
      </div>
    </div>

    <div class="col-md-4 mb-2">
      <label for="state">Província</label>
      <select class="custom-select d-block w-100"  required name="provincia">
        <option>LUANDA</option>
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
        <option>NAMIBE</option>
        <option>HUILA</option>
        <option>BIE</option>
        <option>HUAMBO</option>
      </select>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
   </div>
 
 <hr class="mb-1">
 <h4 class="mb-1">Anexos e Outros</h4>
 <hr class="mb-1">

 <div class="row">


  <div class="col-md-6 mb-2">
       <label for="Fich">Bilhete de Identidade</label>
       <input type="file"  required name="fichbilhete">
  </div>
</div>
  
  <hr class="mb-1">
  <h4 class="mb-1">Dados de Pagamento</h4>
  <hr class="mb-1">

  <div class="row">

  <div class="col-md-5 mb-3">
    <label for="nCert">Número de Transação/Operação </label>
    <input type="text" class="form-control" placeholder="" required name="n_transacao" >
    <div class="invalid-feedback">
      Valid last name is required.
    </div>
  </div>

  <div class="col-md-6 mb-2">
    <label for="Fich">Compravativo de Pagamento</label>
    <input type="file"   required name="comprovativo">
  </div>
</div> 

                   
            <hr class="mb-1">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar</button>

          </form>
         </div>
        </div>
</div>
@endsection