@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edition d'un auteur</div>
 
                <div class="panel-body">
                    @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                    @endif
                    <form method="POST" action="{{ route('test.update', $centre->id )}} " accept-charset="UTF-8" class="form-horizontal panel">
                         
                        {!! csrf_field() !!}
                        <input name="_method" type="hidden" value="PUT">
 
                        <div class="form-group ">
                            <label for="name" class="col-md-4 control-label">Nom :</label>
                            <div class="col-md-6">
                                <input class="form-control" name="name" type="text" id="name" value="{{ old('name', $centre->name) }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                 
                        <div class="form-group">
                            <label for="region" class="col-md-4 control-label">Region:</label>
                            <div class="col-md-6">
                                <select name="region" id="region" class="form-control">
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <label for="departement" class="col-md-4 control-label">Departement :</label>
                            <div class="col-md-6">
                                <select name="departement" id="departement" class="form-control">
                                    @foreach($departements ?? '' as $departement)
                                        <option value="{{ $departement->id }}">{{ $departement->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="vaccin" class="col-md-4 control-label">Vaccins :</label>
                            <div class="col-md-6">
                                <select name="vaccin" id="vaccin" class="form-control">
                                    @foreach($vaccins ?? '' as $vaccin)
                                        <option value="{{ $vaccin->id }}">{{ $vaccin->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Envoyer
                                </button>
                            </div>
                        </div>
 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
@section('scripts')
<script>
$(function() {
 
    // Récupération des id pour pays et ville
        
    var region_id = {{ old('region', $centre->departement->region->id) }};
    var departement_id = {{ old('departement', $centre->departement->id) }};
 
    // Sélection du pays
    $('#region').val(region_id).prop('selected', true);
    // Synchronisation des villes
    departementUpdate(region_id);
 
    // Changement de pays
    $('#region').on('change', function(e) {
        var region_id = e.target.value;
        departement_id = false;
        departementUpdate(region_id);
    });
 
    // Requête Ajax pour les villes
    function departementUpdate(regionId) {
        $.get('{{ url('departements') }}/'+ regionId + "'", function(data) {
            $('#departement').empty();
            $.each(data, function(index, departements) {
                $('#departement').append($('<option>', { 
                    value: departements.id,
                    text : departements.name 
                }));
            });
            if(departement_id) {
                $('#departement').val(departement_id).prop('selected', true);
            }
        });
    }
     
});
</script>
@endsection