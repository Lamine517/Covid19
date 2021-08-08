@extends('layouts.admin')



<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Covid 19</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href=" {{ asset('fonts/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @section('content')


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Vaccin Covid 19</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrateur</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gestion de Covid
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admins/rdvList')}}" class="nav-link active" style="color:white">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste des inscrits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admins/vaccinList')}}" class="nav-link" style="color:white">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vaccin</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <!-- <h1>Bienvenue</h1> -->
            <div class="row">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('Vous etes connecte en tant que administrateur') }} -->
                    <br><br>
                    <div class="col-3 ">
                        <button type="submit" class="btn btn-primary pull-right"> <a href="{{ url('admins/vaccinForm')}}" style="color:white">Ajouter</a> </button>
                    </div>

                   
                    <table class="table stripped">
                        <thead>
                            <tr>
                                <th scope="col">Matricule</th>
                                <th scope="col">Centre</th>
                                <th scope="col">Vaccin</th>
                                <th scope="col">Disponiblites par jours</th>
                                <th scope="col">Horaires</th>
                                <th scope="col">Action 1 </th>
                                <th scope="col">Action 2</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>2213WS</td>
                            <td>Hopital Dalaal DIAM de GUEDIAWAYE</td>
                            <td>Moderna</td>
                            <td>Lundi au Mercredi</td>
                            <td>08:00 - 13:00</td>
                            <td> <button type="submit" class="btn btn-warning">Modifier</button> </td>
                            <td> <button type="submit" class="btn btn-danger">Supprimer</button> </td>
                        </tr>
                        <tr>
                            <td>2213WS</td>
                            <td>Hopital Dalaal DIAM de GUEDIAWAYE</td>
                            <td>Moderna</td>
                            <td>Lundi au Mercredi</td>
                            <td>08:00 - 13:00</td>
                            <td> <button type="submit" class="btn btn-warning">Modifier</button> </td>
                            <td> <button type="submit" class="btn btn-danger">Supprimer</button> </td>
                        </tr>
                        <tr>
                            <td>2213WS</td>
                            <td>Hopital Dalaal DIAM de GUEDIAWAYE</td>
                            <td>Moderna</td>
                            <td>Lundi au Mercredi</td>
                            <td>08:00 - 13:00</td>
                            <td> <button type="submit" class="btn btn-warning">Modifier</button> </td>
                            <td> <button type="submit" class="btn btn-danger">Supprimer</button> </td>
                        </tr>
            
                        <tr>
                            <td>2213WS</td>
                            <td>Hopital Abass Ndao</td>
                            <td>AstraZeneca</td>
                            <td>Mardi au Jeudi</td>
                            <td>08:00 - 13:00</td>
                            <td> <button type="submit" class="btn btn-warning">Modifier</button> </td>
                            <td> <button type="submit" class="btn btn-danger">Supprimer</button> </td>
                        </tr>
                        <tr>
                            <td>2213WS</td>
                            <td>Hopital Abass Ndao</td>
                            <td>AstraZeneca</td>
                            <td>Mardi au Jeudi</td>
                            <td>08:00 - 13:00</td>
                            <td> <button type="submit" class="btn btn-warning">Modifier</button> </td>
                            <td> <button type="submit" class="btn btn-danger">Supprimer</button> </td>
                        </tr>
                        <tr>
                            <td>2213WS</td>
                            <td>Hopital Abass Ndao</td>
                            <td>AstraZeneca</td>
                            <td>Mardi au Jeudi</td>
                            <td>08:00 - 13:00</td>
                            <td> <button type="submit" class="btn btn-warning">Modifier</button> </td>
                            <td> <button type="submit" class="btn btn-danger">Supprimer</button> </td>
                        </tr>  
                      
                      
                        </tbody>
                    </table>
                    
                </div>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  


  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Lamine DIEME <i>Developper Front-End</i>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">VaccinCovid</a>.</strong> Tous droits reservés.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script> 
</body>
</html>
@endsection
