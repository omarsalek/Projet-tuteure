@extends('layouts.app')

@section('content')
    <section class="vh-200" id="form_log">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image" id="log_img">
                </div>
                <div class="col-md-10 col-lg-10 col-xl-4 offset-xl-1">
                    <form action="index.php?module=ModInscription&action=inscription" method="POST">

                        <!-- Civilite-->
                        <div class="form-outline mb-4">
                            <input type="radio" id="choix1" class="civilite" name="civilite" value="Monsieur">
                            <label for="choix1" class="labelCivilite">Mr</label>
                            <input type="radio" id="choix2" class="civilite" name="civilite" value="Madame">
                            <label for="choix2" class="labelCivilite">Mme</label>
                        </div>

                        <!-- Poste-->
                        <div class="form-outline mb-4">
                            <label class="labelCivilite">Role</label>
                            <select name="poste">
                                <option value="Shn">SHN</option>
                                <option value="Utilisateur">User</option>
                            </select>
                        </div>


                        <!-- Prenom -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example3" class="form-control form-control-lg"  placeholder="Entrer un prenom" name="prenom" required/>
                            <label for="form3Example3"></label>
                        </div>

                        <!-- Nom -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example4" class="form-control form-control-lg"  placeholder="Entrer un nom" name="nom" required/>
                            <label for="form3Example4"></label>
                        </div>

                        <!-- Age -->
                        <div class="form-outline mb-4">
                            <input type="number" id="form3Example5" class="form-control form-control-lg"  placeholder="Entrer un age" name="age" required/>
                            <label for="form3Example5"></label>
                        </div>

                        <!-- Ville -->
                        <div class="form-outline mb-4">
                            <input type="text" id="form3Example6" class="form-control form-control-lg"  placeholder="Entrer une ville" name="ville" required/>
                            <label for="form3Example6"></label>
                        </div>

                        <!-- Email -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example7" class="form-control form-control-lg" value="<?php if (isset($_COOKIE['login'])) echo $_COOKIE['login'];?>" placeholder="Entrer l'adresse mail" name="login" required/>
                            <label for="form3Example7"></label>
                        </div>

                        <!-- Password -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example8" class="form-control form-control-lg" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'];?>"placeholder="Entrer le mot de passe" name="password" required/>
                            <label for="form3Example8"></label>
                        </div>


                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"  data-bs-toggle="modal" data-bs-target="#exampleModal" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Inscription">Inscription</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0"style="color: white;">Vous avez déjà un compte ? <a href="/PageConnexion" class="link-danger">Connexion</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
