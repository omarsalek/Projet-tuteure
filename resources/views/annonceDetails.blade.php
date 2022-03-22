@extends('layouts.app')

@section('content')

    <div class="container rounded bg-light mt-3 " >
        <div class="row">
            <div class="d-wrapper mt-3 flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mr mb-1"></i>
                <a href="/RechercherAnnonces" class="btn btn-info" role="button">Revenir au choix</a>
                <br>
                <br>
                @foreach ($annonce as $annonce)
                <div class="row m-0">
                    <div class="col-lg-4 left-side-product-box pb-3">
                        <img src="{{URL('storage/imageAnnonces/'.$annonce->photoAnnonce)}}" class="border p-3">

                        <span class="sub-img">
                    <img src="http://nicesnippets.com/demo/pd-image2.jpg" class="border p-2">
                    <img src="http://nicesnippets.com/demo/pd-image3.jpg" class="border p-2">
                    <img src="http://nicesnippets.com/demo/pd-image4.jpg" class="border p-2">
                </span>
                    </div>
                    <div class="col-lg-8">
                        <div class="right-side-pro-detail border p-3 mt-3 ">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="tag-section"><strong>Date Annonce : </strong><a href="#">{{$annonce->date}}</a></p>
                                    <p class="tag-section"><strong>Adresse : </strong>{{$annonce->adresse}} / {{$annonce->ville}} </p>
                                    <p class="tag-section"><strong>Type / Categorie : </strong>{{$annonce->type}} / {{$annonce->categorie}}</p>
                                    <p class="tag-section"><strong>Couleur : </strong>{{$annonce->couleur}} </p>
                                    <p class="tag-section"><strong>Marque : </strong>{{$annonce->marque}} </p>
                                    <p class="tag-section"><strong>Taille : </strong>{{$annonce->taille}}</p>
                                    <p class="tag-section"><strong>Saison : </strong>{{$annonce->saison}}</p>
                                    <p class="tag-section"><strong>Etat : </strong>{{$annonce->etatVetChaus}}</p>
                                    <p class="tag-section"><strong>Description : </strong><a>{{$annonce->description}}</a> </p>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="row">
                                        <div class="col-lg-6 pb-2">
                                            <a href="#" class="btn btn-danger w-100">Choisir</a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#" class="btn btn-success w-100">Voir Photos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
