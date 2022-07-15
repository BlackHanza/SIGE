@extends('layouts.admin_index')
@section('titulo','Inicial')
@section('conteudo')


    
        <div class="row">
            <div class="col-md-12">
             <h2>Dashboard</h2>   
                <h5>Bem Vindo Gilberto. </h5>
            </div>
        </div>              
         <!-- /. ROW  -->
          <hr />
        <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">           
    <div class="panel panel-back noti-box">
        <span class="icon-box bg-color-red set-icon">
            <i class="fa fa-file-o"></i>
        </span>
        <div class="text-box" >
            <p class="main-text">20</p>
            <p class="text-muted">Registos</p>
        </div>
     </div>
     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
    <div class="panel panel-back noti-box">
        <span class="icon-box bg-color-blue set-icon">
            <i class="fa fa-bell-o"></i>
        </span>
        <div class="text-box" >
            <p class="main-text">40</p>
            <p class="text-muted">Notificações</p>
        </div>
     </div>
     </div>
            <div class="col-md-3 col-sm-6 col-xs-6">           
    <div class="panel panel-back noti-box">
        <span class="icon-box bg-color-brown set-icon">
            <i class="fa fa-user"></i>
        </span>
        <div class="text-box" >
            <p class="main-text">20</p>
            <p class="text-muted">Utilizadores</p>
        </div>
     </div>
     </div>
     <div class="col-md-3 col-sm-12 col-xs-12 ">
        <div class="panel ">
<div class="main-temp-back">
<div class="panel-body">
<div class="row">
<div class="col-xs-6"> <i class="fa fa-cloud fa-3x"></i> Clima Atual</div>
<div class="col-xs-6">
  <div class="text-temp"> 10° </div>
</div>
</div>
</div>
</div>
    </div>
         <!-- /. ROW  -->
        <hr />                
        <div class="row">    
          
  

             <div class="panel panel-back noti-box">
        <span class="icon-box bg-color-green set-icon">
            <i class="fa fa-desktop"></i>
        </span>
        <div class="text-box" >
            <p class="main-text">Display</p>
            <p class="text-muted">Looking Good</p>
        </div>
     </div>
    
</div>
                
</div>
        
        
           </div>
            </div>
  
@endsection
