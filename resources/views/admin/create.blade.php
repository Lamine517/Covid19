@extends('layouts.admin')

<div class="wrapper">

    @section('content')
    
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

                    <div class="row">
                        <div class="col-9 ">
                            <form action="{{ route('admins.store') }}" method="post" class="form">
                                @csrf
                                  <h2>Ajouter un nouveau vaccin</h2>
                                <div class="row">
                                        <div class="col-12">
                                          <label for="">Vaccin</label>
                                          <input type="text" class="form-control" name="vaccin">
                                      </div>
                                      <div class="col-12">
                                          <label for="">Description</label>
                                          <textarea name="description" cols="30" rows="10" class="form-control"></textarea>
                                      </div>
                                      
                                      <div class="col-12">
                                          <label for="">Centre</label>
                                          <input type="text" class="form-control" name="centre">
                                      </div>

                                      <div class="col-12">
                                          <label for="">Image</label>
                                          <input type="file" class="form-control" name="image">
                                      </div>
                                     
                                      <div class="col-12">
                                          <label for="">Disponibiltes par jours</label>
                                          <input type="text" class="form-control" name="jours">
                                      </div>
                                      <div class="col-12">
                                          <label for="">Heures disponibles</label>
                                          <input type="text" class="form-control" name="heures">
                                      </div>

                                      <div class="col-12"><br>
                                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                                      </div>
                                  </div>
                              </form>
                        </div>
                       </div>
                  
                    
                </div>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
</div>

@endsection
