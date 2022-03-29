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

    @if (!empty($mesDemandesAcceptees))
        <div class="container rounded bg-light mt-3 " >
            <div class="row">
                <div class="container mt-5">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mr mb-1"></i>
                        <a href="/dashboard" class="btn btn-info" role="button">Revenir au profil</a>
                    </div>
                    <br><br></br>
                    <table class="table table-hover table-responsive">
                        <thead class="bg-info text-white">
                        <tr>
                            <th scope="col">Type Annonce</th>
                            <th scope="col">Date</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Messagerie</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($mesDemandesAcceptees as $value)

                            <tr>
                                <td>{{$value->type }}</td>
                                <td>{{$value->date }}</td>
                                <td><div id="imageAnnonceDemande">
                                        <img src="{{URL('storage/imageAnnonces/'.$value->photoAnnonce)}}"  alt="Card image cap">
                                    </div></td>
                                <td>
                                    <form id="formChoix" action="{{route('enligne')}}" method="post">
                                        @csrf
                                        <input type="hidden"  name="idchoix" value="{{ $value->id  }}">
                                        <input type="hidden"  name="type" value="{{ $value->type  }}">
                                        <button type="submit" class="btn btn-info w-100"><input type="hidden"  name="idAnnonce" value="{{ $value->idAnnonce  }}">En ligne</button>
                                    </form>
                                </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <div class="alert alert-danger mt-5">Aucun demandes n'est encor acceptée pour vous </div>
                        <div class="float-end">
                            <a class="btn btn-danger" href="/dashboard" role="button">Revenir au profil</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
@endsection
