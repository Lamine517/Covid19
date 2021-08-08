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
            <h1>La liste des contacts</h1>
                <table class="table striped">
                    <thead>
                        <tr>
                            <th scope="col">Prenom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Sujet</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($listContact as $listContacts)
                        <tr>
                            <td> {{ $listContacts->name }}</td>
                            <td> {{ $listContacts->email }}</td>
                            <td> {{ $listContacts->phone }}</td>
                            <td> {{ $listContacts->subject }}</td>
                            <td> {{ $listContacts->message }}</td>
                            <td> 
                                <button class="btn btn-danger" type="submit">Supprimer</button>
                            </td>
                            
                            
                        </tr>
                    </tbody>
                    @endforeach
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
