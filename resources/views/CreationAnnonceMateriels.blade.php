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
                <form  action="{{route('enregistrerAnnonceMat')}}" method="post" enctype="multipart/form-data">
                    @CSRF
                    <div>
                        <input id="btnRadio" type="radio" name="materiels" value="materiels" checked>
                    </div>
                    <br>
                    <div class="row mt-4 ">
                        <br>
                        <div class="col-md-6"><input type="text" class="form-control" name="titre" placeholder="Titre"></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="description" placeholder="Description"></div>
                    </div>
                    <br>
                    <div class="form-outline mb-4">
                        <div>
                            <label id ="labeleAnnonceTitre">Date de l'annonce :  </label>
                            <input type="date" name="dateAnnonce"
                                   value='<?= date('Y-m-d');?>'
                                   min='<?= date('Y-m-d');?>' max="2050-01-01">
                        </div>
                    </div>
                     <label id ="labeleAnnonceTitre">Adresse : </label>
                        <select name="adresse" required>
                            <option value="T.R régionale zone Sud Est">T.R régionale zone Sud Est</option>
                            <option value="T.R régionale zone Sud Ouest">T.R régionale zone Sud Ouest</option>
                            <option value="T.R régionale zone Nord Est">T.R régionale zone Nord Est</option>
                            <option value="T.R régionale zone Nord Ouest">T.R régionale zone Nord Ouest</option>
                            <option value="Chpts zone Sud Est">Chpts zone Sud Est</option>
                            <option value="Chpts zone Sud Ouest">Chpts zone Sud Ouest</option>
                            <option value="Chpts zone Nord Est">Chpts zone Nord Est</option>
                            <option value="Chpts zone Nord Ouest">Chpts zone Nord Ouest</option>
                            <option value="Chpts de France Indoor">Chpts de France Indoor</option>
                            <option value="Chpts de France Mer">Chpts de France Mer</option>
                            <option value="Chpts de France Beacg Rowing Sprint">Chpts de France Beacg Rowing Sprint</option>
                            <option value="Chpts de France Bateaux courts">Chpts de France Bateaux courts</option>
                            <option value="Chpts de France J16">Chpts de France J16</option>
                            <option value="Chpts de France J18">Chpts de France J18</option>
                            <option value="Pôle Lyon">Pôle Lyon</option>
                            <option value="Pôle Nantes">Pôle Nantes</option>
                            <option value="Pôle Paris">Pôle Paris</option>
                            <option value="Pôle Toulouse">Pôle Toulouse</option>
                            <option value="Bassin Aiguebelette">Bassin Aiguebelette</option>
                            <option value="Bassin de Bordeaux">Bassin de Bordeaux</option>
                            <option value="Bassin de Cazaubon">Bassin de Cazaubon</option>
                            <option value="Bassin de Gravelines">Bassin de Gravelines</option>
                            <option value="Bassin de Libourne">Bassin de Libourne</option>
                            <option value="Bassin de Macôn">Bassin de Macôn</option>
                            <option value="Bassin de Mantes-la-jolie">Bassin de Mantes-la-jolie</option>
                            <option value="Bassin de Vaires-sur-Marne">Bassin de Vaires-sur-Marne</option>
                            <option value="Bassin de Vichy">Bassin de Vichy</option>
                            <option value="Bassin de Mantes-la-jolie">Bassin de Mantes-la-jolie</option>
                        </select>
                        <br><br>
                        <div class="col-md-5"><input type="text" class="form-control" name="ville" placeholder="Ville"></div>
                    <br>
                    <div class="row mt-4 ">
                        <br>
                        <div class="col-md-6"><input type="text" class="form-control" name="marque" placeholder="Marque"></div>
                        <!-- Age -->
                        <div class="col-md-4"><input type="number"  class="form-control"  placeholder="Entrer un age" name="ageMat" required/></div>
                    </div>
                    <br>
                    <div>
                        <label id ="labeleAnnonceTitre">État: </label>
                        <select name="etatMat" required>
                            <option value="Neuf">Neuf</option>
                            <option value="TresBonEtat"> Très bon état : </option>
                            <option value="BonEtat">Bon état</option>
                            <option value="Satisfaisant">Satisfaisant</option>
                        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label id ="labeleAnnonceTitre" >Photo:  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
                                    <button class="btn btn-primary" name="CreerAnnonceMateriels">Oui</button>
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
