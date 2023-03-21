<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ínicio | SIGE</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('site/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('site/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{ asset('site/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('site/morris-0.4.3.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('site/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('site/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('site/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('site/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
    <style type="text/css">
      
     
        .login-box, .register-box{
            margin-top: 2%;


        }
      .bs-glyphicons {
        padding-left: 0;
        padding-bottom: 1px;
        margin-bottom: 20px;
        list-style: none;
        overflow: hidden;
      }
      .bs-glyphicons li {
        float: left;
        width: 25%;
        height: 115px;
        padding: 10px;
        margin: 0 -1px -1px 0;
        font-size: 12px;
        line-height: 1.4;
        text-align: center;
        border: 1px solid #ddd;
      }
      .bs-glyphicons .glyphicon {
        margin-top: 5px;
        margin-bottom: 10px;
        font-size: 24px;
      }
      .bs-glyphicons .glyphicon-class {
        display: block;
        text-align: center;
        word-wrap: break-word; /* Help out IE10+ with class names */
      }
      .bs-glyphicons li:hover {
        background-color: rgba(86,61,124,.1);
      }

      

      @media (min-width: 768px) {
        .bs-glyphicons li {
          width: 12.5%;
        }
      }
    </style>    
  </head>
<body class="skin-blue layout-top-nav">
    <div class="wrapper">      
      <header class="main-header"> 
        <nav class="navbar navbar-static-top" role="navigation">
            
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">   
                

                    @if (Route::has('login'))
                          
                              @auth
                                <li class="nav-item"> 
                                  <a class="nav-link" href="{{ route('utente') }}">Home</a>
                                </li>
                              @else
                                <li class="nav-item"> 
                                  <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                                </li>
                              @if (Route::has('register'))
                                  <li class="nav-item">
                                     <a class="nav-link"  href="{{ route('register') }}">Cadastrar</a>
                                  </li>
                              @endif
                              @endauth
                          
                      @endif
          
                    <!-- Authentication Links -->
                    
                </ul>           
  
          </div>                      
        
          <div class="container-fluid">
          <div class="navbar-header">
            <a href="{{route('inicio')}}" class="navbar-brand">S I G E</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-FILE"></i>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bilhete de Identidade<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ route('login') }}">Primeira Via</a></li>
                  <li><a href="{{ route('login') }}">Segunda Via</a></li>
                  <li><a href="{{ route('login') }}">Renovar</a></li>
                  <li><a href="{{ route('login') }}">Averbar</a></li>                  
                  <li><a href="#">Informações</a></li>
                </ul>
              </li><li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registo Criminal<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ route('login') }}">Tratar Registo</a></li>
                  <li><a href="#">Informações</a></li>                  
                </ul>
              </li>              
            </ul>
                      
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>   
        <section>         
          @yield('conteudo')      
        </section>
        
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="pull-right hidden-xs">
            <b>Versão</b> 1.0
          </div>
          <strong>Copyright &copy; 2022-2023 <a href="http://almsaeedstudio.com">Khanza Studio</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div>
    </div><!-- ./wrapper -->

    <script src="{{ asset('site/jQuery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('site/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script scr="{{ asset('site/app.min.js') }}"></script>

  </body>
</html>
