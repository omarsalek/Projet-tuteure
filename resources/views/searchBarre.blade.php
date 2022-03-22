@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="titrePageAmis">Rechercher un match</h1>
    <div class="mb-3"> <a class="btn btn-primary" href="index.php?module=ModMatchs&action=PageMatchs" role="button">Retour</a></div>
    <div class="row">
        <div class="col-sm-0 col-md-2 col-lg-3"></div>
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="form-group">
                <input class="form-control" type="text" id="search-match" value="" placeholder="Rechercher un ou plusieurs matchs"/>
            </div>
            <div style="margin-top:20px">
                <div id="result-search-matchs"></div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function (){
    $('#search-match').keyup(function (){
        var match = $(this).val();
        $('#result-search-matchs').html('');
        if(match != ""){
            $.ajax({
                    type:"GET",
                    url:'"{{route('searchB')}}"',
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
</script>
@endsection
