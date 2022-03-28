@extends('layouts.app')

@section('content')
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

        @if (!empty($mesDemandesUsers))
<div class="container rounded bg-light mt-3 " >
 <div class="row">
<div class="container mt-5">
    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mr mb-1"></i>
        <a href="/dashboard" class="btn btn-info" role="button">Revenir au profil</a>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="float: right; margin-bottom: 10px;">
        Consulter vos recommandation
    </button>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <table class="table table-hover table-responsive">
                        <thead class="bg-info text-white">
                        <tr>
                            <th scope="col">Demandeur</th>
                            <th scope="col">Nombre Total de bénéfices</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($recommandation as $value)
                            <tr>
                            <td>{{$value->name }}</td>
                            <td>{{$value->nombreDeBenefices }}</td></tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-hover table-responsive">
        <thead class="bg-info text-white">
        <tr>
            <th scope="col">Demandeur</th>
            <th scope="col">Type</th>
            <th scope="col">Date</th>
            <th scope="col">Photo</th>
            <th scope="col">Etats Annonce</th>
        </tr>
        </thead>
        <tbody>
            @foreach($mesDemandesUsers as $value)

            <tr>
                <td>{{$value->name }} {{$value->prenom }}</td>
                <td>{{$value->type }}</td>
                <td>{{$value->date }}</td>
                <td><div id="imageAnnonceDemande">
                        <img src="{{URL('storage/imageAnnonces/'.$value->photoAnnonce)}}"  alt="Card image cap">
                    </div></td>
                <td>

                <form id="formChoix" action="{{ route('affecterAnnonce')}}" method="post">
                        @csrf
                        <input type="hidden"  name="idchoix" value="{{ $value->idchoix  }}">
                        <button type="submit" class="btn btn-success w-100"><input type="hidden"  name="idAnnonce" value="{{ $value->idAnnonce  }}">Accepter</button>
                </form>
                <form id="formChoix" action="{{ route('refuserAnnonce')}}" method="post">
                        @csrf
                        <input type="hidden"  name="idchoix" value="{{ $value->idchoix  }}">
                        <button type="submit" class="btn btn-danger w-100"><input type="hidden"  name="idAnnonce" value="{{ $value->idAnnonce  }}">Refuser</button>
                </form>
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <div class="alert alert-danger mt-5">Aucun personne n'a encor choisi vos annonces </div>
        <div class="float-end">
            <a class="btn btn-danger" href="/dashboard" role="button">Revenir au profil</a>
        </div>
    @endif
     </div>
 </div>
</div>
@endsection
