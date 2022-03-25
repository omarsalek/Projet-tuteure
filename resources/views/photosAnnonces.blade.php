@extends('layouts.app')

@section('content')

@if (!empty($annoncesPhotos))
    <div class="container">
    <h1 class="titrePage">Gallerie des images</h1>
    <div class="mb-3"> <a class="btn btn-primary" href="/RechercherAnnonces" role="button">Retour aux annonces</a></div>
<section class="gallery min-vh-50">
    <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-4">
            @foreach ($annoncesPhotos as $photos)
            <div class="col">
                <img  id="photoAnnonceConsultation" src="{{URL('storage/imageAnnonces/'.$photos->descriptionPhotVid)}}" class="gallery-item" alt="gallery">
            </div>
            @endforeach
        </div>
    </div>
</section>
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img  id="photoAnnonceConsultation" src="{{URL('storage/imageAnnonces/'.$photos->descriptionPhotVid)}}" class="modal-img" alt="modal img">
            </div>
        </div>
    </div>
</div>
<script>
        document.addEventListener("click",function (e){
            if(e.target.classList.contains("gallery-item")){
                const src = e.target.getAttribute("src");
                document.querySelector(".modal-img").src = src;
                const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
                myModal.show();
            }
        })
</script>
@else
<div class="alert alert-warning mt-5">Il y a actuellement aucune photos</div>
</div>
@endif
@endsection
