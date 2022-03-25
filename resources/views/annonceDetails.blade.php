@extends('layouts.app')

@section('content')

    <div class="container rounded bg-light mt-3 " >
        <div class="row">
            <div class="d-wrapper mt-3 flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mr mb-1"></i>
                <a href="/RechercherAnnonces" class="btn btn-info" role="button">Revenir au choix</a>
                <br>
                <br>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @elseif ($errors->any())
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @elseif(Session::has('danger'))
                    <div class="alert alert-danger">
                        {{ Session::get('danger') }}
                    </div>

                @endif
                @foreach ($annonce as $annonce)
                <div class="row m-0">
                    <div class="col-lg-4 left-side-product-box pb-3">
                        <img src="{{URL('storage/imageAnnonces/'.$annonce->photoAnnonce)}}" class="border p-3">
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

                                            <form id="formChoix" action="{{ route('choisirOffre')}}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-danger w-100"><input type="hidden"  name="idAnnonce" value="{{ $annonce->idAnnonce  }}">Choisir</button>

                                            </form>
                                            <form id="formChoix" action="{{ route('voirPhotos')}}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-success w-100"><input type="hidden"  name="idAnnonce" value="{{ $annonce->idAnnonce  }}">Voir Photos</button>
                                            </form>

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
