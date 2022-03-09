
@extends('layouts.app')

@section('content')
<div class="container rounded bg-light mt-3" >
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                @if ($user->sexe =='Madame')
                <img class="rounded-circle mt-5" src="https://bootdey.com/img/Content/avatar/avatar3.png" class="mb-4" alt=""  width="90" />
                @else
                <img class="rounded-circle mt-5" src="https://bootdey.com/img/Content/avatar/avatar7.png" class="mb-4" alt="" width="90" />
                @endif
                    {{$user->name}}  {{$user->prenom}}<span class="font-weight-bold"></span><span class="text-black-50">{{$user->email}}</span><span>{{$user->ville}}</span></div>
        </div>

        <div class="col-md-8">
            <div class="p-3 py-5 ">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mr mb-1"></i>
                        <a href="/dashboard" class="btn btn-info" role="button">Annuler Modification</a>
                    </div>
                </div>
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
                <form id="formulaireModif" action="{{route('updateProfil')}}" method="post">

                    @csrf
                    @method('PUT')
                    <input type="radio" id="choix1" class="civilite" name="civiliteNv" value="Monsieur" required>
                    <label for="choix1">Mr</label>

                    <input type="radio" id="choix2" class="civilite" name="civiliteNv" value="Madame" required>
                    <label for="choix2">Mme</label>
                    <div class="row mt-4 mr-3">
                        <div class="col-md-6"><input type="text" class="form-control" name="prenomNv" placeholder="Prenom"></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="nameNv" placeholder="Nom"></div>
                    </div>
                    <label id="LabelPoste">Role : </label>
                    <select name="roleNv" required>
                        <option value="OffreurSHN">SHN</option>
                        <option value="Demandeur">Demandeur</option>

                    </select>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="email" class="form-control" name="emailNv" placeholder="Email"></div>
                        <div class="col-md-6"><input type="number" class="form-control"  name="ageNv" placeholder="Age"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><input type="password" class="form-control" name="passwordNv"placeholder="Mot de passe" ></div>
                        <div class="col-md-6"><input type="text" class="form-control" name="villeNv" placeholder="Ville"></div>
                    </div>
                    <div class=btn><button class="btn btn-success "  class="mr-3" type="submit">Enregistrer Profile</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
