@extends('layouts.app')

@section('content')
    <main>
            <section  class="container-fluid mt-5">
            <div class="float-end">
                <img src="{{URL('images/VetementsDonations.png')}}" alt="donationVetements" class="img-fluid" id="imagesPresentation">
            </div>
            <div id="textePresentation">
                <p id="p1">Espace de donations </p>
                <p>Notre objectif c'est de permettre aux offreurs de déposer leurs annonces afin que les demandeurs bénéficient de ces dons  </p>
            </div>
            {{--<?php if (isset($_SESSION['login'])) : ?>
            <a href="index.php?module=ModProfil" class="btn btn-primary" >Consulter Profil</a>
            <?php else: ?>
            <?php endif; ?>--}}
            <a href="/PageInscription" class="btn btn-primary" >Inscrivez vous gratuitement</a>
        </section>

        <section  id="section2" class="container-fluid mt-5">
            <div class="line2">
                <hr>
            </div>
            <img src="{{URL('images/valide.png')}}" alt="" />
            <p>L'Association des Internationaux d'Aviron  ? Vous nous-connaissez n'est ce pas ?</p>
            <img src="{{URL('images/valide.png')}}" alt="" />
            <p>Le don est une belle action, cependant ce qui prime vraiment est de vous déleste de vos habilles d’occasion.</p>
            <img src="{{URL('images/valide.png')}}" alt="" />
            <p>On s'accorde sur le fait que si on choisit de donner c’est avant tout pour que les Vêtements .. ne soient pas simplement jetés qu’ils aient une chance d’avoir une seconde vie.</p>
            <img src="{{URL('images/valide.png')}}" alt="" />
            <p>Donner via notre site internet ne vous demande pas beaucoup d'investissement ! </p>
            <div class="line">
                <hr>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div>
                        <a>
                            <img id="imageDebut" src="{{URL('images/jeuxOl.jpg')}}" alt="Lights">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <a>
                            <img id="imageMilieu" src="{{URL('images/drapeauAsso.jpg')}}" >
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <a>
                            <img id="imageLast" src="{{URL('images/logo.jpg')}}" >
                        </a>
                    </div>
                </div>

            </div>
            <div class="line">
                <hr>
            </div>
        </section>
        <section id="section3">

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <a>
                            <img src="{{URL('images/iconDonations.png')}}" alt="Lights">
                            <div >
                                <p id="borderBasPage">Mettez vos annonces Online (Vêtements, Chaussures ...) </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <a>
                            <img src="{{URL('images/Choixoffre.png')}}" >
                            <div>
                                <p id="borderBasPage" >Choisissez l'offre qui vous intéresse</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <a>
                            <img src="{{URL('images/rendezVous.png')}}" >
                            <div>
                                <p id="borderBasPage">Prendez rendez-vous pour récupérer votre choix !</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </main>
@endsection
{{--
@foreach($posts as $post)
    <h3>{{$post}}</h3>
@endforeach--}}
