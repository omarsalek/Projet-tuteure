@extends('layouts.app')

@section('content')

    <div class="container">
        <h1 class="titrePage">Mes annonces</h1>
        <div class="mb-3"> <a class="btn btn-primary" href="/GererAnnonces" role="button">Retour </a></div>
        <div class="row">
            <br><br><br><br>
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
            <div id ="annonces">
                @if (!empty($annonces))
                    <div class="container">
                        <div class="row">
                            @foreach ($annonces as $annonce)
                                <div id="idCard">
                                    <div class="card-columns-fluid" >
                                        <div class="card  bg-light" >
                                            <div id="imageAnnonce">
                                                <img  src="{{URL('storage/imageAnnonces/'.$annonce->photoAnnonce)}}"  alt="Card image cap">
                                            </div>
                                            <br>
                                            <div class="card-body">
                                                <p>{{$annonce->date}}</b></p>
                                                <div>
                                                    <form  id="formCons" action="{{ route('consulterOffreSHN')}}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-info "><input type="hidden" id="annonceConsChoix" name="idAnnonce" value="{{ $annonce->idAnnonce  }}">Consulter</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">Aucun annonces  n'a été créé pour le moment
                        <a href="#" class="btn-close" role="button"></a>
                    </div>
                @endif
            </div>
        </div>

@endsection
