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
                    <br><br>
                    <h1>La liste des inscrits</h1>

                    <table class="table striped">
                        <thead>
                            <tr>
                                <th scope="col">Prenom</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Age</th>
                                <th scope="col">Sexe</th>
                                <th scope="col">Email</th>
                                <th scope="col">Maladie</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Region</th>
                                <th scope="col">Departement</th>
                                <th scope="col">Vaccin</th>
                                <th scope="col">Motif</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($listInscrit as $listInscrits)
                            <tr>
                                <td> {{ $listInscrits->prenom }}</td>
                                <td> {{ $listInscrits->nom }}</td>
                                <td> {{ $listInscrits->age }}</td>
                                <td> {{ $listInscrits->sexe }}</td>
                                <td> {{ $listInscrits->email }}</td>
                                <td> {{ $listInscrits->maladie }}</td>
                                <td> {{ $listInscrits->telephone }}</td>
                                <td> {{ $listInscrits->region }}</td>
                                <td> {{ $listInscrits->departement }}</td>
                                <td> {{ $listInscrits->vaccin }}</td>
                                <td> {{ $listInscrits->motif }}</td>
                        
                                
                                <td> 
                                    <form action="" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"
                                        type="submit">Supprimer</button>
                                    </form>
                                </td>
                                
                                
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    
                </div>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
</div>

@endsection

