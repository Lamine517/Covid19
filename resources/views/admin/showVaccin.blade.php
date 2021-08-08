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
                    
                    
                  

        <div class="container">
            <div class="box-content">
                <table class="table table-striped">
                    <thead>
                        <tr id="header">
                            <th>Numéro</th>
                            <th>Photo</th>
                            <th>Vaccin</th>
                            <th>Description</th>
                            <th>Centre</th>
                            <th>Disponiblites par jours</th>
                            <th>Horaires</th>
                            <th colspan="2" style="text-align:center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($listVac as $listVaccin)
                        <tr>
                            <td>{{ $listVaccin->id}}</td>
                            <td> <img src="{{ asset('img/'.$listVaccin->image) }}" alt="pas d'images" width="100px"> </td>
                            <td>{{ $listVaccin->vaccin}}</td>
                            <td>{{ $listVaccin->description}}</td>
                            <td>{{ $listVaccin->centre}}</td>
                            <td>{{ $listVaccin->jours}}</td>
                            <td>{{ $listVaccin->heures}}</td>
                            <td>
                                <a class="button is-warning" href="{{ route('admins.edit', $listVaccin->id) }}">
                                    <button class="btn btn-primary">Modifier</button>
                                </a>
                            </td>
                            <td>
                                
                            <form action="{{ route('admins.destroy', $listVaccin->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"
                                    type="submit">Supprimer</button>
                            </form>
                            </td>
                            
                        </tr> 
                       @endforeach  
                       
                    </tbody>
                </table>
            </div>
        </div>
                    
                </div>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>  
</div>

@endsection
