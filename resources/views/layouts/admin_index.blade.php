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
    <link href="{{ asset('site/morris-0.4.3.min.css') }}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{ asset('site/custom.css') }}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="{{ asset('site/dataTables.bootstrap.css') }}" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('admin')}}">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> {{date('d/m/y H:i')}}  &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a></div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{ asset('img/find_user.png') }}" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="{{route('admin')}}"><i class="fa fa-desktop fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-file fa-3x"></i> Registos<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('AdminRegisto')}}">Todos Registos</a>
                            </li>
                            <li>
                                <a href="{{route('aprovados')}}">Registos Aprovados</a>
                            </li>
                            <li>
                                <a href="{{route('reprovados')}}">Registos Reprovados</a>
                            </li>
                        </ul>
                       </li>
                    <li>
                        <a  href="{{route('conta.index')}}"><i class="fa fa-user fa-3x"></i> Utilizadores</a>
                    </li>
					<li>
                        <a  href="{{route('suporte.index')}}"><i class="fa fa-envelope-o fa-3x"></i> Notificação</a>
                    </li>
                    <li  >
                      <a   href="{{route('funcionario.index')}}"><i class="fa fa-user fa-3x"></i> Funcionários</a>
                    </li>	
                    <li>
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Conta</a>
                    </li>				                 	
                    <li>
                        <a  href="form.html"><i class="fa fa-dashboard fa-3x"></i> Sistema</a>
                    </li>	
                </ul>               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                           
              @yield('conteudo')

             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('site/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('site/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/jquery.metisMenu.js') }}"></script> 
    <script src="{{ asset('site/jquery.dataTables.js') }}"></script> 
    <script src="{{ asset('site/dataTables.bootstrap.js') }}"></script> 
    <script src="{{ asset('site/raphael-2.1.0.min.js') }}"></script> 
    <script src="{{ asset('site/morris.js') }}"></script> 
    <script>
      $(document).ready(function () {
          $('#dataTables-example').dataTable();
      });
</script>
    <script src="{{ asset('site/custom.js') }}"></script> 

</body>
</html>
