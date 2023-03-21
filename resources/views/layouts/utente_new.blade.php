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
      /* FROM HTTP://WWW.GETBOOTSTRAP.COM
        * Glyphicons
        *
        * Special styles for displaying the icons and their classes in the docs.
        */

        main > .container {
  padding: 60px 15px 0;
}
.container-fluid{
 background: #8c9edb;
 box-shadow: 0px 0px 10px rgba(19, 35, 54, 0.4);


}


  .interface{
	

	margin: -20px auto 10px auto;
	/*box-shadow: 0px 0px 10px rgba(19, 35, 54, 0.4);*/
	padding: 0px;	}

  .content{
    background: #8c9edb;
  }

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
          color: #161515;
      }
      .mt-1{
          text-indent: 50px;
          color: #161515;
      }
      .lead{
          text-indent: 50px;
          color: #e2dbdb;
      }
      .mb-2{
          color: #161515;
      }
      label{
            
            color: #161515;
          }
       

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }    
      

      aside.lateral{
	display: absolute;
	width: 340px;
	float: right;
  box-shadow: 0px 0px 0px rgba(0,0,0,.5);
	padding: 0px;
	margin-top: -3px;
	

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
        background-color: rgba(124, 97, 61, 0.1);
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
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">                  
                  <img src="img/gilberto.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="img/gilberto.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sair</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>                      
        
          <div class="container-fluid">
          <div class="navbar-header">
            <a href="{{ route('home') }}" class="navbar-brand">S I G E</a>
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
                  <li><a class="dropdown-item" href="{{ route('primeiravia') }}">Primeira Via</a></li>
                  <li><a class="dropdown-item" href="{{ route('segundavia') }}">Segunda Via</a></li>
                  <li><a class="dropdown-item" href="{{ route('renovar') }}">Renovar Bilhete</a></li>
                  <li><a class="dropdown-item" href="{{ route('averbar') }}">Averbar Bilhete</a></li>                  
                  <li><a class="dropdown-item" href="{{ route('bilheteinfo') }}">Informações</a></li>
                </ul>
              </li><li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registo Criminal<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a class="dropdown-item" href="{{ route('registocriminal') }}">Tratar Registo</a></li>
                  <li><a class="dropdown-item" href="{{ route('registoinfo') }}">Informações</a></li>                  
                </ul>
              </li>
              <li class="active"><a class="nav-link" href="{{ route('utente.registos') }}">Registos<span class="sr-only">(current)</span></a></li>
              <li><a class="nav-link" href="{{ route('suporte.create') }}">Efectuar Contacto</a></li>
            </ul>
                      
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>      
      <div class="content">
        <section>
          
          @yield('conteudo')        
        
        </section>        
      <br>
      </div>
    </div>
  </div>
    
      <footer class="main-footer">
        <div>
          <div class="pull-right hidden-xs">
            <b>Versão</b> 1.0
          </div>
          <strong>Copyright &copy; 2022-2023 <a href="http://almsaeedstudio.com">Khanza Studio</a>.</strong> All rights reserved.
        </div><!-- /.container -->
      </footer>
    
  

    <script src="{{ asset('site/jQuery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('site/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
    <script src="{{ asset('site/fastclick.min.js') }}"></script>    
    <script src="{{ asset('site/jquery.dataTables.js') }}"></script> 
    <script src="{{ asset('site/dataTables.bootstrap.js') }}"></script> 
    <script src="{{ asset('site/jquery.slimscroll.min.js') }}"></script>
    <script scr="{{ asset('site/app.min.js') }}"></script>
    <script src="{{ asset('site/demo.js') }}"></script>

    
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimScroll.min.js" type="text/javascript"></script>  

    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
    </div>
    
  </body>
</html>
