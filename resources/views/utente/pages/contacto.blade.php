@extends('layouts.utente_new')
@section('title', 'Fale Connosco')
    

@section('conteudo')


<div class="container">
  <div class="py-5 text-center">
      <h2 class="mt-1">Fale Conosco</h2>
  </div>
      
  <div class="col-md-8 order-md-1">
    <hr class="mb-2">
      <h4 class="mb-2">Identificação Pessoal</h4>
      <hr class="mb-2">
      
      <form action="{{route('suporte.store')}}" class="needs-validation" method="POST" novalidate>
@csrf  
        
          <div class="mb-2">
            <label for="firstName">Nome</label>
            <input type="text" class="form-control"  placeholder="Nome Completo" value="" required name='nome'>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
       
        
        
          <div class="mb-2">
            <label for="username">Correio Electrónico</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="username" placeholder="Username" required name='email'>
              <div class="invalid-feedback" style="width: 50%;">
                Your username is required.
              </div>
            </div>
          </div>

        <div class="mb-2">
              <label for="msg">Mensagem</label>
              <textarea name="mensagem" class="form-control" placeholder="Deixe aqui a sua mensagem" 
              required cols="30" rows="5"></textarea>
              <div class="invalid-feedback">
                Por favor introduza da tua mensagem.
              </div>
          </div> 

          <hr class="mb-4">
         <button class="btn btn-primary btn-lg btn-block" type="submit" name='enviar'>Enviar</button>
      </form>
    </div>
  </div>
</div>
@endsection
    
