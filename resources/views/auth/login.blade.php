@extends('layouts.inicio')

@section('conteudo')
    <div class="login-box">
      <div class="login-logo"><a href="{{ route('login') }}"><b>Login </b>| SIGE </a></div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Iniciar sessão</p>
        <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="form-group has-feedback">
            <input type="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email" autofocus/>               
            @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror            
          </div>
          <div class="form-group has-feedback">
            <input type="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
            @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror  
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox blue">
                <label>
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  Lembrar-me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OU -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Entrar com Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus"><i class="fa fa-google-plus"></i> Entrar com Google+</a>
        </div><!-- /.social-auth-links -->

        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">Esqueceu a senha?</a><br>
        @endif
        

      </div><!-- /.login-box-body -->
    </div><!-- /.login-bo
@endsection