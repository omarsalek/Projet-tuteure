@extends('layouts.app')

@section('content')
     <section class="vh-100" id="form_log">
                        <div class="container-fluid h-custom">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-md-9 col-lg-6 col-xl-5">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
                                </div>
                                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                                    <form action="index.php?module=ModConnexion&action=connexion" method="POST">

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example3" class="form-control form-control-lg" value="<?php if (isset($_COOKIE['login'])) echo $_COOKIE['login'];?>" placeholder="Entrer l'adresse mail" name="login" required/>
                                            <label for="form3Example3"></label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-3">
                                            <input type="password" id="form3Example4" class="form-control form-control-lg" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'];?>"placeholder="Entrer le mot de passe" name="password" required/>
                                            <label for="form3Example4"></label>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Checkbox -->
                                            <div class="form-check mb-0">
                                                <input class="form-check-input me-2" type="checkbox" name="check" id="form2Example3" />
                                                <label class="form-check-label" for="form2Example3" style="color: white;">
                                                    Rester connecté(e)
                                                </label>
                                            </div>
                                        </div>

                                        <div class="text-center text-lg-start mt-4 pt-2">
                                            <button type="submit" class="btn btn-primary btn-lg"  style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Connexion">Connexion</button>
                                            <p class="small fw-bold mt-2 pt-1 mb-0"style="color: white;">Vous n'avez pas de compte ? <a href="index.php?module=ModInscription" class="link-danger">Inscription</a></p>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>

@endsection
