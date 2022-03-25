
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
                        <a href="/dashboard" class="btn btn-info" role="button">Revenir au profil</a>
                    </div>
                </div>
                <div class="mt-3 btn-group-vertical">
                    <button type="submit" class="btn btn-danger "><a id="mesAnnonces" href='/MesAnnonces'>Mes Annonces</a></button>
                    <button type="submit" class="btn btn-warning "><a id="creerAnnonce" href='/ChoixCreationAnnonces'>Créer une Annonce</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
