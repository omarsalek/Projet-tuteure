@extends('layouts.app')

@section('content')

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

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
    @if (!empty($mesRendezVous))
        <div class="container rounded bg-light mt-3 " >
            <div class="row">
                <div class="container mt-5">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mr mb-1"></i>
                        <a href="/dashboard" class="btn btn-info" role="button">Revenir au profil</a>
                    </div>
                    <br>
                    <br>
                    <table class="table table-hover table-responsive">
                        <thead class="bg-warning text-white">
                        <tr>
                            <th scope="col">Demandeur</th>
                            <th scope="col">Type</th>
                            <th scope="col">Date</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Retirer</th>
                            <th scope="col">Prenez rendez-vous</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mesRendezVous as $value)

                            <tr>
                                <td>{{$value->name }} {{$value->prenom }}</td>
                                <td>{{$value->type }}</td>
                                <td>{{$value->date }}</td>
                                <td><div id="imageAnnonceDemande">
                                        <img src="{{URL('storage/imageAnnonces/'.$value->photoAnnonce)}}"  alt="Card image cap">
                                    </div></td>
                                <td>
                                    <form id="formChoix" action="{{route('retirerAffectation')}}" method="post">
                                        @csrf
                                        <input type="hidden"  name="id" value="{{ $value->id  }}">
                                        <button type="submit" class="btn btn-danger w-100"><input type="hidden"  name="idAnnonce" value="{{ $value->idAnnonce }}">Retirer</button>
                                    </form>
                                </td>
                            <td><form id="formChoix" action="{{route('enligne')}}" method="post">
                                        @csrf
                                        <input type="hidden"  name="idchoix" value="{{ $value->id  }}">
                                        <input type="hidden"  name="type" value="{{ $value->type  }}">
                                        <button type="submit" class="btn btn-info w-100"><input type="hidden"  name="idAnnonce" value="{{ $value->idAnnonce  }}">En ligne</button>
                                    </form>
                                    <form id="formChoix" action="{{route('email')}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-success w-100"><input type="hidden"  name="email" value="{{ $value->email }}">Par email</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="alert alert-danger mt-5">Désolé Vous n'avez pas encor accepté la demande de quelqu'un </div>
                        <div class="float-end">
                            <a class="btn btn-danger" href="/dashboard" role="button">Revenir au profil</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
@endsection
