
    @extends('layouts.rdv')
    

    @section('content')
    <main>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div> <br>
        @endif
        <div class="container">
    
            <div class="box-content">
                <form action="{{ route('rdvs.store') }}" method="post" class="formulaire">
                @csrf
                    <h3 style="text-align: center;padding-top: 7px;">Formulaire de demande d'inscription</h3><br>
                    <!-- 1er etape -->
                    <div class="etape1">
                        <h4><i>Etape 1</i></h4><hr><br>
                            <div class="form-div">
                                <input type="text" placeholder="Votre prénom" class="input" name="prenom">
                                <span class="focus-border"></span>
                            </div><br>
                            <div class="form-div">
                                <input type="text" placeholder="Votre nom" class="input" name="nom">
                                <span class="focus-border"></span>
                            </div><br>
                            <div class="form-div">
                                <input type="text" placeholder="Votre age" class="input" name="age">
                                <span class="focus-border"></span>
                            </div><br>
                            <div class="form-div">
                                <label for="sexe">Sexe</label><br><br>
                                <input type="radio"  class="input-choice" name="sexe" value="Masculin"> <label for="">Masculin</label>&nbsp;&nbsp;
                                <input type="radio"  class="input-choice" name="sexe" value="Feminin"> <label for="">Feminin</label>
                            </div><br>
                            <div class="form-div">
                                <input type="text" placeholder="Votre numero de telephone" class="input" name="telephone">
                                <span class="focus-border"></span>
                            </div><br>
                            <div class="form-div">
                                <input type="text" placeholder="Votre adresse email" class="input" name="email">
                                <span class="focus-border"></span>
                            </div><br>
                            <div class="form-div">
                                <label for="sexe">Souffrez-vous d'une maladie chronique ?</label><br><br>
                                <input type="radio"  class="input-choice" name="maladie" value="oui"> <label for="">Oui</label>&nbsp;&nbsp;
                                <input type="radio"  class="input-choice" name="maladie" value="non"> <label for="">Non</label>
                            </div>
                            
                    </div>
                    <!-- 2eme etape -->
                    <div class="etape2">
                        <h4><i>Etape 2</i></h4><hr><br>

                        
                        <div class="form-div">
                            <label for="" class="title-label-lg">Région</label>
                            <select name="region" id="region" class="input">
                                    @foreach($regions ?? '' as $region)
                                        <option value="{{ $region->id }}" class="input-choice">{{ $region->name }}</option>
                                    @endforeach
                            </select>
                            <!-- <input type="text" placeholder="Votre région" class="input" name="region"> -->
                        </div><br>
                        <div class="form-div">
                            <label for="" class="title-label-lg">Département</label>
                            <select name="region" id="region" class="input">
                            @foreach($regions ?? '' as $region)
                                        @foreach($region->departements as $departement)
                                            <option value="{{ $departement->id }}" class="input-choice">{{ $departement->name }}</option>
                                        @endforeach
                            @endforeach
                            </select>
                            <!-- <input type="text" placeholder="Votre département" class="input" name="departement"> -->
                        </div><br>
                        <div class="form-di">
                            <label for="centre" class="title-label-lg">Choisissez un centre</label>
                            <select name="centre" id="centre" class="input">
                            @foreach($regions ?? '' as $region)
                                        @foreach($region->departements as $departement)
                                            @foreach($departement->centres as $centre)
                                                <option value="{{ $centre->id }}" class="input-choice">{{ $centre->name }}</option>
                                            @endforeach
                                        @endforeach
                            @endforeach
                            </select>
                        <div class="form-di">
                            <label for="vaccin" class="title-label-lg">Choisissez un vaccin </label>
                            <select name="vaccin" id="vaccin" class="input">
                            @foreach($regions ?? '' as $region)
                                        @foreach($region->departements as $departement)
                                            @foreach($departement->centres as $centres)
                                                @foreach($centres->vaccins as $vaccin)
                                                    <option value="{{ $vaccin->id }}" class="input-choice">{{ $vaccin->name }}</option>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                            @endforeach
                            </select>
                            <!-- <input type="radio"  class="input-choice" name="vaccin" value="AstraZeneca"> <label for="">AstraZeneca</label>&nbsp;&nbsp;<br>
                            <input type="radio"  class="input-choice" name="vaccin" value="Moderna"> <label for="">Moderna</label><br>
                            <input type="radio"  class="input-choice" name="vaccin" value="Pfizer"> <label for="">Pfizer</label>&nbsp;&nbsp;<br>
                            <input type="radio"  class="input-choice" name="vaccin" value="Sinopharm"> <label for="">Sinopharm</label> -->
                        </div><br>
                        <div>
                            <label for="" class="title-label">Motif du demande</label>
                            <textarea name="motif" id="motif" cols="30" rows="10" placeholder="Motif du demande" class="textarea"></textarea>
                        </div>
                        <br><br>

                        <div class="form-div">
                            <button type="submit" class="btn-valid">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
<section >
    <div id="map" style="background-color:red;margin-top:700px;width:100%" >
		<!-- Ici s'affichera la carte -->
	</div>
</section>
@endsection
@section('maps')
    <h2>Les lieux de vaccination Populaires</h2>
        <div class="first">
            <div class="second">
                <div class="tree">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.316123678904!2d-17.466366785846706!3d14.694706478704735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1728fec1ac107%3A0x61b5af59bd54e383!2sCentre%20Hospitalier%20Universitaire%20De%20Fann!5e0!3m2!1sfr!2ssn!4v1628236230411!5m2!1sfr!2ssn" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="tree">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.6554889193585!2d-17.4219360973996!3d14.73205942008819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10cd2c9ab7d39%3A0x40508028a3ad10e5!2sHopital%20Psychiatrique%20de%20Thiaroye!5e0!3m2!1sfr!2ssn!4v1628236180787!5m2!1sfr!2ssn" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="second">
                <div class="tree">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.9737694606724!2d-17.437803185847148!3d14.657430079612672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172347f70e079%3A0x3e5a339cfb619b50!2sHopital%20Aristide%20LE%20DANTEC!5e0!3m2!1sfr!2ssn!4v1628236085075!5m2!1sfr!2ssn" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="tree">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.65421290131!2d-17.447323185846273!3d14.732131477790976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d328fc0e231%3A0xf54a7ab4b32b28a8!2zSMO0cGl0YWwgR8OpbsOpcmFsIElEUklTU0EgUE9VWUUgZGUgR3JhbmQgWW9mZiBTw6luw6lnYWw!5e0!3m2!1sfr!2ssn!4v1628236036215!5m2!1sfr!2ssn" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
 
            </div>
            <div class="second">
                <div class="tree">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.235147982716!2d-17.39828288584601!3d14.755777777212502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10ca2a8f63b4d%3A0x29777f1ce16b8c98!2sCentre%20de%20Sant%C3%A9%20Dominique!5e0!3m2!1sfr!2ssn!4v1628236062165!5m2!1sfr!2ssn" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="tree">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.9528274972317!2d-17.484502485846455!3d14.715259078203184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec16d582bbcb065%3A0x10ed947ed439a3f1!2sH%C3%B4pital%20militaire%20de%20Ouakam!5e0!3m2!1sfr!2ssn!4v1628235129303!5m2!1sfr!2ssn" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
    @endsection


