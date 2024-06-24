@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<article> 
        <h2> <a href="/posts/second-post">Benvenuto</a></h2>
        <p>
        Quando Joseph Krug fondò la Maison de Champagne che 
    porta il suo nome nel 1843, mosso dalla convinzione 
    che la vera essenza dello Champagne è il piacere stesso,
     il suo sogno era quello di offrire ogni anno il 
     miglior Champagne possibile. <br><br> L’attenzione speciale 
     portata alle singolarità di ogni vigneto, il rispetto 
     delle peculiarità di ogni appezzamento e del suo vino 
     e la creazione di una vasta biblioteca di vini di 
     riserva di varie annate hanno permesso a Joseph Krug 
     di realizzare il suo sogno. <br> <br>
     Lo Champagne Numero 1, oggi noto come Krug Grande Cuvée,
      è l’espressione più generosa dello Champagne ed è ricreato 
      ogni anno, indipendentemente dalle variazioni 
      climatiche. Krug Grande Cuvée è un assemblaggio di 
      oltre 120 vini selezionati da più di 10 annate diverse. 
        <p>
    </article>

    <article> 
        <h2><a href="/posts/Benvenuto">  Quasi pronti all'apertura </a></h2>
        <p>
            Data, Luogo, Orario  : i tre fattori da decidere
            <br> <br> Ebbene si anche il luogo perchè questa
            piattaforma avrà come regola LA NOVITA! <br>
            Luoghi differenti organizzati non solo da noi ma
            anche da tutte le attività presenti della zona.
            <br><br>
            La nostra forza siete voi e lo sarete SEMPRE!!<br>
            #ALLA_NOSTRA_SALUTE 
        <p>
    </article>

    <article> 
        <h2> <a href="/posts/first-post"> Il mio terzo Post </a></h2>
        <p>
            Con che emozione sta arrivando la data di apertura!!
            <br><br>
            Sempre più vicini ad aver pronto tutto il necessario
            per renderci INDISPENSABILI PER TUTTI VOI <br> <br>

            Presunzione o meno stiamo lavorando incessantemente per
            dare il via a questo piccolo grande progetto.<br>
            Partire dalle proprie conoscenze può avvantaggiarti
            <br> ... ma non sempre bastano per realizzare i propri sogni.
            <br> <br>
            #INSEGUITE_I_VOSTRI_SOGNI 
        <p>
    </article>