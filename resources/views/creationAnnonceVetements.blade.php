@extends('layouts.app')

@section('content')

<div class="container rounded bg-light mt-3 " >
    <br><br>
    <div class="row">

        <div><i class="fa fa-long-arrow-left mr-1 mr mb-1"></i>
            <a href="/ChoixCreationAnnonces" class="btn btn-info" role="button">Revenir au choix</a>
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
            <form  action="{{route('enregistrerAnnonceVet')}}" method="post" enctype="multipart/form-data">
                @CSRF
                <div>
                    <input id="btnRadio" type="radio" name="vetements" value="vetements" checked>
                </div>
                <br>
                <div class="row mt-4 ">
                    <br>
                    <div class="col-md-6"><input type="text" maxlength="60" class="form-control" name="titre" placeholder="Titre"></div>
                    <div class="col-md-6"><input type="text" maxlength="60" class="form-control" name="description" placeholder="Description"></div>
                </div>
                <br>
                <div class="form-outline mb-4">
                <div>
                        <label id ="labeleAnnonceTitre">Date de l'annonce :  </label>
                        <input type="date" name="dateAnnonce"
                               value='<?= date('Y-m-d');?>'
                               min='<?= date('Y-m-d');?>' max="2050-01-01">
                </div>
                    <div>
                    <label id ="labeleAnnonceTitre">Catégorie :  </label>
                    <input type="radio" id="choix1" class="civilite" name="categorie" value="Homme">
                    <label for="choix1" class="labelCivilite">Homme</label>
                    <input type="radio" id="choix2" class="civilite" name="categorie" value="Femme">
                    <label for="choix2" class="labelCivilite">Femme</label>
                    </div>
                </div>

                <div class="row mt-4 ">
                    <br>
                    <div class="col-md-6"><input type="text" class="form-control" name="adresse" placeholder="Adresse"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="ville" placeholder="Ville"></div>
                </div>
                <br>
                <div class="row mt-4 ">
                    <br>
                    <div class="col-md-6"><input type="text" class="form-control" name="marque" placeholder="Marque"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="couleur" placeholder="Couleur"></div>
                </div>
                <br>
                <div>
                    <label id ="labeleAnnonceTitre">État: </label>
                    <select name="etatVetChauss" required>
                        <option value="Neuf">Neuf</option>
                        <option value="TresBonEtat"> Très bon état : </option>
                        <option value="BonEtat">Bon état</option>
                        <option value="Satisfaisant">Satisfaisant</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label id ="labeleAnnonceTitre">Taille : </label>
                    <select name="taille" required>
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label id ="labeleAnnonceTitre">Saison : </label>
                    <select name="saison" required>
                        <option value="Hiver">Hiver</option>
                        <option value="Printemps">Printemps</option>
                        <option value="ete">été</option>
                        <option value="Automne">Automne</option></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label id ="labeleAnnonceTitre">Photo : </label>
                    <input type="file" name="imageAnnonce">
                </div>
                <hr>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float: right; margin-bottom: 10px;">
                    Créer cette Annonce
                </button>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Voulez-vous vraiment créer cette annonce ?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" name="CreerAnnonceVetements">Oui</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
