@extends('layouts.inicio')

@section('conteudo')
<div class="register-box">
    <div class="register-logo">
      <a href="{{ route('register') }}"><b>Registar </b>| SIGE</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Registar novo utilizador</p>
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group has-feedback">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome completo">
          @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror          
    </div>
        <div class="form-group has-feedback">
          <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror          
        </div>
        <div class="form-group has-feedback">
          <input id="password" type="password" placeholder="Senha" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror          
        </div>

        <div class="form-group has-feedback">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Senha">
        </div>
        <div class="row">
          <div class="col-xs-8">    
            <div class="checkbox">
              <label>
                <input type="checkbox"> Eu concordo com os <a href="#">termos</a>
              </label>
            </div>                        
          </div><!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block">{{ __('register') }}</button>
          </div><!-- /.col -->
        </div>
      </form>        

      <div class="social-auth-links text-center">
        <p>- Ou -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Entrar com o Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google-plus"><i class="fa fa-google-plus"></i> Entrar com o Google+</a>
      </div>

      <a href="login.html" class="text-center">Já sou utilizador</a>
    </div><!-- /.form-box -->
  </div><!-- /.register-box -->
@endsection
