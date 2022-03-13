@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="titrePage">Rechercher une annonce</h1>
    <div class="mb-3"> <a class="btn btn-primary" href="/LesAnnonces" role="button">Retour </a></div>
    <div class="row">
        <div class="col-sm-0 col-md-2 col-lg-3"></div>
        <div class="col-sm-12 col-md-8 col-lg-6">
            <form class="row g-3" action = "{{ route('searchResult') }}" method="post" id="search-form">
                <div id="typeOffre">
                    <label id ="labeleAnnoncetype">Type Offre: </label>
                    <select name="type" required>
                        <option value="vetements">Vetements</option>
                        <option value="chaussures">Chaussures</option>
                        <option value="materiels">Matériels</option>
                    </select>
                </div>
                <br><br><br><br><br>
                <div class="col-auto">

                <input class="form-control" type="text" id="searchRes" name="searchRes" value="" placeholder="Rechercher un ou plusieurs annonces">
                </div>
                <div class="col-auto">

                <button type="submit"> recherche</button>
                </div>
            </form>


            <div style="margin-top:20px">
                <div id="result-search-matchs"></div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}">



</script>
{{--
<script>
    $(document).ready(function (){
        $('#search-match').keyup(function (){
            var match = $(this).val();
            $('#result-search-matchs').html('');
            if(match != ""){
                $.ajax({
                    type:"GET",
                    url:'index.php?module=ModMatchs&action=FiltrerMatchs',
                    data: 'adresseMatch=' + encodeURIComponent(match),
                    success: function(data){
                        if(data != ""){
                            $('#result-search-matchs').append(data);
                        }else{
                            document.getElementById('result-search-matchs').innerHTML = "<div style='font-size: 20px; text-align: center; margin-top: 10px; color :white;'>Aucun matchs</div>"
                        }
                    }
                });
            }
        });
    });
</script>--}}
@endsection
