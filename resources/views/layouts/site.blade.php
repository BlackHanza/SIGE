<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>@yield('title')</title>

    <link href="{{ asset('site/style.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Favicons -->
    <style>
        main > .container {
  padding: 60px 15px 0;
}

  .interface{
	

	margin: -20px auto 10px auto;
	box-shadow: 0px 0px 10px rgba(0,0,0,.4);
	padding: 0px;	}

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .top-right{
        position: absolute;
        left: 1220px;

      }
      .nav-link:hover {
        
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
        border-radius: 3%;
      }
      .mt-5{
          text-indent: 50px;
          color: #f2ecec;
      }
      .mt-1{
          text-indent: 50px;
          color: #f2ecec;
      }
      .lead{
          text-indent: 50px;
          color: #f2ecec;
      }
      .mb-2{
          color: #f2ecec;
      }
      label{
            
            color: #f2ecec;
          }
      .fter{
          
          text-align: center;
      }     

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
    </style>
  </head>
  <body class="d-flex flex-column h-100">    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('guest') }}">SWGESPE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('guest') }}">Quem Somos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false">Bilhete de Identidade</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">PRIMEIRA VIA</a>
              <a class="dropdown-item" href="#">SEGUNDA VIA</a>
              <a class="dropdown-item" href="#">RENOVAR BILHETE</a>
              <a class="dropdown-item" href="#">AVERBAR BILHETE</a>
              <a class="dropdown-item" href="{{ route('site.binformacao') }}">INFORMAÇÕES</a>
            </div>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false">Registo Criminal</a>
            <div class="dropdown-menu" aria-labelledby="dropdown02">
              <a class="dropdown-item" href="#">TRATAR REGISTO</a>
              <a class="dropdown-item" href="{{ route('site.rinformacao') }}">INFORMAÇÕES</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('site.ajuda') }}">Ajuda</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">

          @if (Route::has('login'))
                
                    @auth
                      <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('utente') }}">Home</a>
                      </li>
                    @else
                      <li class="nav-item"> 
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                      </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                           <a class="nav-link"  href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                    @endauth
                
            @endif

          <!-- Authentication Links -->
          
      </ul>
       </div>
    </div>
  </nav>
</header>


@yield('conteudo')


  <script src="{{ asset('site/jquery.js') }}"></script>
  <script src="{{ asset('site/bootstrap.js') }}"></script> 
<br>
  <footer class="footer mt-auto py-3 bg-dark">
    <div class="container"><span class="text-muted">
        <p class="fter">Ministério da Justiça e Direitos Humanos – MINJUSDH<br>
            Rua 17 de Setembro, Cidade Alta, Luanda<br>
            <a href="http://www.minjusdh.gov.ao">http://www.minjusdh.gov.ao</a></p>
      </span>
    </div>
  </footer>
      
  </body>
</html>