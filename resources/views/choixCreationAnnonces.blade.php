
@extends('layouts.app')

@section('content')
    <br>
    <div class="container rounded bg-light mt-3" >
        <br>
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mr mb-1"></i>
            <a href="/GererAnnonces" class="btn btn-info" role="button">Revenir au choix </a>
        </div>
        <br>
        <div class="gallery">
            <div class="contentChoix">
                <img id="imageChoix" src="{{URL('images/shoes.png')}}">
                <h3 id="titleChoixAnnonce">Chaussures</h3>
                <br>
                <button type="submit"  id="buttonStyleChoix" class="depo-1"><a  id="creerAnnonce" href="/CreationAnnonceChaussures">Déposer Maintenant</a></button>

            </div>
            <div class="contentChoix">
                <img id="imageChoix"  src="{{URL('images/watch.png')}}">
                <h3 id="titleChoixAnnonce">Matériels</h3>
                <br>
                <button id="buttonStyleChoix" class="depo-3">Déposer Maintenant</button>
            </div>
            <div class="contentChoix">
                <img id="imageChoix" src="{{URL('images/vetements.png')}}">
                <h3 id="titleChoixAnnonce" >Vêtements</h3>
                <br>
                <button type="submit"  id="buttonStyleChoix" class="depo-2"><a  id="creerAnnonce" href="/CreationAnnonceVetements">Déposer Maintenant</a></button>

            </div>

        </div>
</div>
@endsection
