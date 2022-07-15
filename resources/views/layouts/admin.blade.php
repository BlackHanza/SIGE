
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('site/bootstrap.css') }}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('site/font-awesome.css') }}" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="{{ asset('site/AdminLTE.min.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('site/all-skins.min.css') }}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body class="bg-info d-flex flex-column h-100 skin-blue layout-top-nav">
    <div class="wrapper">      
      <header class="main-header">               
        <nav class="navbar navbar-static-top">
          <div class="container-fluid">
          <div class="navbar-header">
            <a href="../../index2.html" class="navbar-brand"><b>SWGESP</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav"> 
                <li><a href="#">Quem Somos</a></li>             
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bilhete de Identidade <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Primeira Via</a></li>
                  <li><a href="#">Segunda Via</a></li>
                  <li><a href="#">Renovar</a></li>
                  <li><a href="#">Averbar</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Informação</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registo Criminal <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Tratar Registo</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Informação</a></li>
                </ul>
              </li>
              <li class="active"><a href="#">Registos <span class="sr-only">(current)</span></a></li>
              <li><a href="#">Efetuar Contacto</a></li>
              <li><a href="#">Conta</a></li>
            </ul>            
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Top Navigation
              <small>Example 2.0</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active">Dashboard</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
@yield('conteudo')

          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
          </div>
          <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    
  
    <script src="{{ asset('site/jQuery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('site/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/jquery.slimScroll.min.js') }}"></script> 
    <script src="{{ asset('site/fastclick.min.js') }}"></script> 
    <script src="{{ asset('site/app.min.js') }}"></script> 
    <script src="{{ asset('site/demo.js') }}"></script> 

</body>
</html>
