@extends('layouts.utente_new')

@section('title', 'Bilhete de Identidade')

@section('conteudo')

<style>
  .reg{
    color: darkgray;
  }
  
  .card{
    box-shadow: 0px 0px 20px rgba(0,0,0,.5);
  }
</style>

  <div class="container card-body">
  <div class="py-5 text-center">
      <h2 class="mt-1">Primeira Via</h2>
  </div>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Tabela de Preço</span>        
      </h4>
      <hr class="mb-4">
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
          <hr class="mb-2">
      <form action="{{route('primeira.store')}}" enctype="multipart/form-data" class="needs-validation" method="POST" novalidate>
@csrf
        <h4 class="mb-2">Identificação Pessoal</h4>        
        <hr class="mb-2">
        <br>
        <div class="row">          
          <div class="col-md-6 mb-3">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control"  placeholder="Nome Completo" value="" required name="nome">
            
          </div>
          <div class="col-md-6 mb-3">
            <label for="Nasc">Nascimento</label>
            <input type="date" class="form-control"  placeholder="" value="" required name="data_nascimento">
            <br>
          </div>

          <div class="col-md-6 mb-3">
            <label for="country">Genero</label>
            <select class="custom-select d-block w-100"  required name="genero">
              <option value="">Selecionar</option>
              <option selected>Masculino</option>
              <option>Femenino</option>
            </select>            
          </div>

          <div class="col-md-6 mb-3">
            <label for="country">Estado Civil</label>
            <select class="form-select form-select-lg mb-3 custom-select d-block w-100"  required name="estado_civil">
              <option selected>Solteiro</option>
              <option>Casado</option>
              
            </select>
            <br><br>
          </div>
          <div class="col-md-6 mb-3">
            <label for="FName">Nome do Pai</label>
            <input type="text" class="form-control"  placeholder="" value="" required name="pai">
            
          </div>
          <div class="col-md-6 mb-3">
            <label for="MName">Nome da Mãe</label>
            <input type="text" class="form-control"  placeholder="" value="" required name="mae">
            <br>  
          </div>
          <div class="col-md-6 mb-3">
            <label for="Natur">Naturalidade</label>
            <input type="text" class="form-control" placeholder="Natural de..." value="" required name="naturalidade">
            
          </div>
          <div class="col-md-4 mb-2">
            <label for="state">Província</label>
            <select class="custom-select d-block w-100"  required name="provincia">
              <option value="">Selecionar...</option>
              <option>Luanda</option>
            </select>
            
          </div>
         </div>
         <hr class="mb-4">
         <h4 class="mb-2">Endereço Pessoal</h4>
         <hr class="mb-4">
         
       

         <div class="row">
         <div class="col-md-5 mb-3">
          <label for="address">Morada</label>
          <input type="text" class="form-control" placeholder="Casa nº, Rua" name="morada" required>
          
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
          
        </div>
          
          <div class="col-md-5 mb-3">
            <label for="country">Município</label>
            <select class="custom-select d-block w-100"  required name="municipio_idmunicipio">
              <option value="">Selecionar...</option>
              <option>LUANDA</option>
              <option>VIANA</option>
              <option>CAZENGA</option>
              <option>KICOLO</option>
              <option>ICOLO E BENGO</option>
              <option>ZANGO</option>
              <option>KILAMBA KIAXI</option>
            </select>
            
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
            
          </div>
         </div>
         
         <hr class="mb-4">
         <h4 class="mb-2">Anexos e Outros</h4>
         <hr class="mb-4">

         <div class="row">
         <div class="col-md-6 mb-3">
            <label for="nCert">Número de Assento de Nascimento</label>
            <input type="text" class="form-control" placeholder="" required name="n_assento">            
          </div>

          <div class="col-md-6 mb-2">
               <label for="Fich">Assento de Nascimento</label>
               <input type="file" required name="assentofile">
          </div>
          <div class="col-md-6 mb-2">
            <label for="Fich">Cartão de Baptismo</label>
            <input type="file" name="batismofile">
          </div>

          <div class="col-md-6 mb-2">
                <label for="Fich">BI ou Cartão Eleitoral do Pai</label>
                <input type="file" required name="bipai">
          </div>
          <div class="col-md-6 mb-2">
                <label for="Fich">BI ou Cartão Eleitoral da Mãe</label>
                <input type="file" required name="bimae">
          </div>
        </div>

                
            <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar</button>

          </form>
         </div>
        </div>
</div>

@endsection