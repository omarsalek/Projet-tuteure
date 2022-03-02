
@extends('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div id="content" class="content p-0">
            <div class="profile-header">
                <div class="profile-header-cover"></div>
                <div class="profile-header-content">
                    <div class="profile-header-img mb-4">

                        @if ($user->sexe=='Madame')
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="mb-4" alt="" />
                        @else
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="mb-4" alt="" />
                        @endif
                    </div>
                        <div class="profile-header-info">
                        <h4 class="m-t-sm">{{ $user->name}}</h4>
                        <a href="/ModificationsProfil" class="btn btn-xs btn-primary mb-2">Modifier mon profil</a>
                    </div>
                </div>
                <ul class="profile-header-tab nav nav-tabs">
                    <li class="nav-item"><a href="#profile" class="nav-link" name="profil" data-toggle="tab" id="titreInformationProfil">Information</a></li>
                    <li class="nav-item"><a href="" class="nav-link " data-toggle="tab">Les Offres</a></li>
                    <li class="nav-item"><a href="" class="nav-link " data-toggle="tab">Mes Demandes </a></li>
                    <li class="nav-item"><a href="" class="nav-link " data-toggle="tab">Mes Alertes</a></li>

                </ul>
            </div>
            <div class="tab-pane fade active show" id="profile"></div>
            <div class="card" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0 mr-30">Civilité : </p>
                        </div>
                        <div class="col-sm-9">
                            <p class="mb-0">{{ $user->sexe}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nom : </p>
                        </div>
                        <div class="col-sm-9">
                            <p class="mb-0">{{ $user->name}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Prénom :</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="mb-0">{{ $user->prenom}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Age : </p>
                        </div>
                        <div class="col-sm-9">
                            <p class="mb-0">{{ $user->age}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Role :</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="mb-0">{{ $user->role}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Ville :</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="mb-0">{{ $user->ville}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email :</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="mb-0">{{ $user->email}}</p>
                        </div>
                    </div>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float:right;">
                        Supprimer mon compte
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Voulez-vous vraiment supprimer votre compte ?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <a href="index.php?module=ModProfil&action=FormSuppProfil" class="btn btn-primary">Oui</a>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
