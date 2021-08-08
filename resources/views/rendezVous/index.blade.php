@extends('layouts.app')
@section('content')

    <main>
        <div class="jumbo">
            <div class="container">
                <div class="header-content">
                    <div class="demo-right">
                        <h1 class="title">VOTRE SANTE , NOTRE PRIORITE</h1>
                        <h3>La campagne de vaccination contre le COVID 19 a commencé dans le territoire national.</h3><br>
                        <p class="m-2">Afin de préparer les moyens logistiques nécessaires et favoriser l’accès de tous à la vaccination, le Ministère de la Santé et de l'Action Sociale <b>(MSAS)</b> et le gouvernement mettent en place un recensement des sénégalais voulant se faire vacciner.
                        <br><br>
                        <div class="button">
                            <button type="submit" class="btn-sign"><a href="{{ route('rdvs.create') }}" style="color: white;">Je m'inscris pour la vaccination</a></button>
                            <button type="submit" class="btn-admin"><a href="{{ url('/contact-form') }}" style="color: white;">Nous-rejoindre</a></button>
                        </div>
                    </div>

                    <div class="demo-left">
                        <img src="{{ asset('img/covid.jfif')}}" alt="" class="covid-header">
                    </div>
                </div>
            </div>
        </div>

        <section>
            <div class="container">
                <p> <b>A savoir : </b>Ce recensement est un service supplémentaire apporté par le Ministère de la Santé afin de faciliter l'accès à la vaccination pour tous.</p>
                <p>Vous résidez au Sénégal et souhaitez être prévenu quand ce sera à votre tour de vous faire vacciner ? Vous souhaitez que le Ministère de la Santé et de l'Action Sociale <b>(MSAS)</b> vous assiste lors de la réalisation de votre vaccination car vous avez des problèmes de mobilité, le vaccin sera peu disponible dans la zone ou vous vous trouvez ou pour tout autres raisons ? Il vous suffit de remplir ce <b>formulaire en ligne après votre inscription </b>.Une fois ce formulaire rempli par vos soins , votre demande sera traitée et vous recevrez un accusé de réception.</p>
            </div><br><br>
        </section>

        <section>
            <div class="container">
                <h1 class="reals">Nos Réalisations</h1><br>
                <div class="content">
                    <!-- <img src="img/vaccin-3.jfif" alt="">
                    <img src="img/vaccin-diouf.jfif"alt="">
                    <img src="img/vac-pik.jfif" alt=""> -->
                
                <div class="slider owl-carousel">
                    <div class="card">
                        <div class="img">
                            <img src="{{ asset('img/vaccin-3.jfif') }}" alt="Desole pas d'images">
                        </div>
                        <div class="card-content">
                            <div class="titles">Titre 1</div>
                            <div class="sub-title">Premier dose</div>
                            <p>Le Sénégal a acheté 200 000 doses du <b>Sinopharm</b>, dont <b>10% cédées aux voisins gambien et bissau-guinéen</b>,et reçu plus de 300 000 doses d'<b>AstraZeneca</b> dans le cadre du programme international <b>Covax</b>,destiné à assurer aux pays pauvres l'accès à la vaccination.</p><br><br>
                            <div class="btn">
                                <a href="{{ url('rdvs/info1') }}">
                                    <button type="submit">Voir plus</button>
                                </a>
                            </div>
                        </div>
                    </div>
            
                    <div class="card">
                        <div class="img">
                            <img src="{{ asset('img/vaccin-diouf.jfif')}}" alt="Desole pas d'images">
                        </div>
                        <div class="card-content">
                            <div class="titles">Titre 2</div>
                            <div class="sub-title">Vaccin du Ministre de la Santé</div>
                            <p>Au Sénégal , le lancement officiel de la campagne de vaccination anti-Covid-19 a été lancée <b>Mardi 23 février</b> en grande pompe . Le Ministre de la Santé ,  Abdoulaye Diouf Sarr, a été le premier à être vacciné devant la presse , avant de laisser la place à une trentaine de personnalités politiques , religieuses et de la société civile.</p>
                            <div class="btn">
                                <a href="{{ url('rdvs/info2') }}">
                                    <button type="submit">Voir plus</button>
                                </a>
                            </div>
                        </div>
                    </div>
            
                    <div class="card">
                        <div class="img">
                            <img src="{{ asset('img/vac-pik.jfif') }}"  alt="Desole pas d'images">
                        </div>
                        <div class="card-content">
                            <div class="titles">Titre 3</div>
                            <div class="sub-title">Sinopharm</div>
                            <p>A la date du 27 février 2021 , 25 653 personnes avaient déja été vaccinées sur l'étendue du territoire national .Pour rappel le Sénégal a démarré la campagne de vaccination avec les vaccins <b>Sinopharm</b>.Toutes les personnes s'étant déja fait vacciner doivent prendre une deuxième dose. </p>
                            <br><br>
                            <div class="btn">
                                <a href="{{ url('rdvs/info3') }}">
                                    <button type="submit">Voir plus</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div><div></div>
        </section>
        <section></section>
    </main>

    <footer class="footer">
        <h6>Copyright 2021 | VaccinCovid@gmail.com | Tous droits réservés.</h6>
    </footer>
    <!-- js caroussel -->
    <script src="{{ asset('js/caroussel.js')}}"></script>
@endsection