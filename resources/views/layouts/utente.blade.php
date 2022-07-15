<!doctype html>
<html lang="pt-br" class="h-100">
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

  .dropdown-item:hover{
background: #d8f006;

  }

  

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      .list-group{
        box-shadow: 0px 0px 20px rgba(0,0,0,.5);
      }

      .lado{
        position: absolute;
        left: 1290px;
      }

      .footer{
        text-align: center;
      }
      
      .form-control{
        box-shadow: 0px 0px 20px rgba(0,0,0,.5);
      }

      .nav-link:hover {
        
        color: #fff;
        background-color: #632e8c;
       
        border-radius: 3%;
      }
      

      .mt-5{
          text-indent: 50px;
          color: #111111;
      }
      .mt-1{
          text-indent: 50px;
          color: #111111;
      }
      .lead{
          text-indent: 50px;
          color: #111111;
      }
      .mb-2{
          color: #111111;
      }
      label{
            
            color: #111111;
          }
       

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

     
      

      aside#lateral{
	display: block;
	width: 340px;
	float: right;
	
	padding: 20px;
	margin-top: -300px;
	
}
      
    </style>
  </head>
  <body class="bg-info d-flex flex-column h-100">
    
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('utente') }}">      SIGE     </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('utente') }}">Início</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false">Bilhete de Identidade</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{ route('primeiravia') }}">Primeira Via</a>
              <a class="dropdown-item" href="{{ route('segundavia') }}">Segunda Via</a>
              <a class="dropdown-item" href="{{ route('renovar') }}">Renovar Bilhete</a>
              <a class="dropdown-item" href="{{ route('averbar') }}">Averbar Bilhete</a>
              <a class="dropdown-item" href="{{ route('bilheteinfo') }}">Informações</a>
            </div>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false">Registo Criminal</a>
            <div class="dropdown-menu" aria-labelledby="dropdown02">
              <a class="dropdown-item" href="{{ route('registocriminal') }}">Tratar Registo</a>
              <a class="dropdown-item" href="{{ route('registoinfo') }}">Informações</a>
            </div>
          </li>
          <li class="nav-item">              
            <a class="nav-link" href="{{ route('utente.registos') }}">Registos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('suporte.create') }}">Efectuar Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ajuda</a>
          </li>

         <li class="lado nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
             
           </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Conta</a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('guest') }}" method="get" class="d-none">
                  @csrf
              </form>
          </div>
      </li>
    </ul>
        
      </div>
    </div>
  </nav>
</header>

<div id="interface">

@yield('conteudo')


</div>

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