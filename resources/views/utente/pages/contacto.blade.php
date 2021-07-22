@extends('layouts.utente')
@section('title', 'Fale Connosco')
    

@section('conteudo')


<div class="container">
  <div class="py-5 text-center">
      <h2 class="mt-1">FALE CONNOSCO</h2>
  </div>
      
  <div class="col-md-8 order-md-1">
      <h4 class="mb-2">DADOS</h4>
      <hr class="mb-4">
      <form action="{{route('cadastro.store')}}" class="needs-validation" method="POST" novalidate>
@csrf  
        
          <div class="mb-2">
            <label for="firstName">NOME COMPLETO</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required name='nome'>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
       
        
        
          <div class="mb-2">
            <label for="username">CORREIO ELECTRÓNICO</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="username" placeholder="Username" required name='correio'>
              <div class="invalid-feedback" style="width: 50%;">
                Your username is required.
              </div>
            </div>
          </div>

        <div class="mb-2">
              <label for="msg">MENSAGEM</label>
              <textarea name="tMsg" class="form-control" id="cMsg" placeholder="Deixe aqui a sua mensagem" 
              required cols="30" rows="5"></textarea>
              <div class="invalid-feedback">
                Por favor introduza da tua mensagem.
              </div>
          </div> 

          <hr class="mb-4">
         <button class="btn btn-primary btn-lg btn-block" type="submit" name='enviar'>ENVIAR</button>
      </form>
    </div>
  </div>
</div>
@endsection
    
