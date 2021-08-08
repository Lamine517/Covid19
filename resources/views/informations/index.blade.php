@extends('layouts.table')
@section('content')


        
        <div class="container">
            <div class="box-content">
                <table>
                    <thead>
                        <tr id="header">
                            <th>Numéro</th>
                            <th>Photo</th>
                            <th>Vaccin</th>
                            <th>Description</th>
                            <th>Centre</th>
                            <th>Disponiblites par jours</th>
                            <th>Horaires</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($infos as $info)
                        <tr>
                            <td>{{ $info->id}}</td>
                            <td> <img src="{{ asset('img/'.$info->image) }}" alt="pas d'images" width="100px"> </td>
                            <td>{{ $info->vaccin}}</td>
                            <td>{{ $info->description}}</td>
                            <td>{{ $info->centre}}</td>
                            <td>{{ $info->jours}}</td>
                            <td>{{ $info->heures}}</td>
                            
                        </tr> 
                       @endforeach  
                       
                    </tbody>
                </table>
            </div>
        </div>


 @endsection