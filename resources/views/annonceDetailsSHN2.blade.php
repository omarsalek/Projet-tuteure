@extends('layouts.app')

@section('content')

    <div class="container rounded bg-light mt-3 " >
        <div class="row">
            <div class="d-wrapper mt-3 back"><i class="fa fa-long-arrow-left mr-1 mr mb-1"></i>
                <a href="/MesAnnonces" class="btn btn-info" role="button">Revenir au choix</a>
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
                                            <p class="tag-section"><strong>Marque : </strong>{{$annonce->marque}} </p>
                                            <p class="tag-section"><strong>Age Matériel : </strong>{{$annonce->ageMat}}</p>
                                            <p class="tag-section"><strong>Etat : </strong>{{$annonce->etatMat}}</p>
                                            <p class="tag-section"><strong>Description : </strong><a>{{$annonce->descriptionMat}}</a> </p>
                                        </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="row">

                                        <div class="col-lg-6 pb-2">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ajouter une photo </button>
                                        </div>
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Ajouter une photo dans la galerie</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form  action="{{route('ajouterPhotos')}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div id="InputImageMatch">
                                                                <input type="file" name="photoAajouterAnnonce">
                                                                <input type="hidden"  name="idAnnonce" value="{{ $annonce->idAnnonce  }}">
                                                                <br><br>
                                                                <div class="btnAjouterPhoto"><button  type="submit" class="btn btn-primary"  name="ajouterPhotos" class="mr-3" >Ajouter Photo</button></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
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
