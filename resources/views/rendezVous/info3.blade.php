@extends('layouts.rdv')
@section('content')

    <main>
        <div class="jumbo">
            <div class="container">
                <div class="header-content">
                    <div class="demo-right">
                        <h1 class="title">VOTRE SANTE , NOTRE PRIORITE</h1>
                        <h3>La campagne de vaccination contre le COVID 19 a commencé dans le territoire national.</h3><br>
                        <h2>Point de situation</h2><br>
                        <p><b>La vaccination est ouverte à tous sans condition.</b><br><br>

                        <b>La vaccination est obligatoire pour :</b><br><br>
                        <ul>
                            <li>Tous les <b>personnels soignants et non-soignants</b> de hôpitaux, cliniques, maisons de retraite, établissements pour personnes en situation de handicap ;<br>
                            </li>
                            
                        </ul>
                    </p>
                        
                    </div>

                    <div class="demo-left">
                        <img src="{{ asset('img/vac-pik.jfif')}}" alt="" class="covid-header" width="100%">
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container">
                <ul>
                    <li>
                        Tous les professionnels ou bénévoles qui travaillent au contact des personnes âgées ou fragiles, y compris à domicile.
                        Des contrôles seront opérés à partir du 15 septembre. 
                    </li>
                </ul>
                <h2 style="text-align: justify;"><strong>La vaccination ouverte à tous</strong></h2><br>
                <strong>La vaccination est ouverte à tous les adultes sans condition et aux adolescentes de 12 à 17 ans compris. </strong><br /><br>
                <br />
                Concernant la vaccination des collégiens, lycéens et étudiants, des campagnes spécifiques de vaccination seront opérées au plus proche de ces publics dès la rentrée.<br />
                <br />
                Pour les premiers vaccinés, une campagne de rappel sera mise en place dès les premiers jours de septembre pour une injection qui sera administrée dans les mêmes conditions que les premières.<br />
                <br />
                Si vous avez déjà été vacciné contre la Covid-19, vous pouvez récupérer une<strong> attestation certifiée sur le site de l'Assurance maladie</strong> :<br />
                &nbsp;
            </div><br><br>
        </section>

        
        <section></section>
    </main>


@endsection