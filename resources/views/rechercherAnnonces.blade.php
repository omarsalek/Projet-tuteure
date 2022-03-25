@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="titrePage">Rechercher une annonce</h1>
    <div class="mb-3"> <a class="btn btn-primary" href="/LesAnnonces" role="button">Retour </a></div>
    <div class="row">

            <form  class="SearchForm" action = "{{ route('searchResult') }}" method="post">
                @csrf
                <table style="margin:auto;">
                <tr>
                <td id="td"><div id="typeOffre">
                    <select name="searchResListe" id="searchResListe">
                        <option value="tousAnnonces"></option>
                        <option value="vetements">Vetements</option>
                        <option value="chaussures">Chaussures</option>
                        <option value="materiels">Matériels</option>
                    </select>
                </div></td>
                <td id="td"><input class="form-control" type="text" id="searchRes" name="searchRes" placeholder="Rechercher par lieu un ou plusieurs annonces"></td>
               <td id="td" ><button id="SearchButton" type="submit"> <i class="fas fa-search"></i></button></td>
                </tr>
                </table>
            </form>
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
                                            <h5><b>{{$annonce->ville}}</b></h5>
                                            <p>{{$annonce->date}}</b></p>
                                            <div>
                                                <form  id="formCons" action="{{ route('consulterOffre')}}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-info "><input type="hidden" id="annonceConsChoix" name="idAnnonce" value="{{ $annonce->idAnnonce  }}">Consulter</button>
                                                </form>
                                                <form id="formChoix" action="{{ route('choisirOffre')}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success "><input type="hidden" id="annonceConsChoix" name="idAnnonce" value="{{ $annonce->idAnnonce  }}">Choisir</button>
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
