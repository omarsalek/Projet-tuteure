
@extends('layouts.app')

@section('content')

<x-guest-layout>
    <x-auth-card>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Civilite-->
                <div class="form-outline mb-4">
                    <input type="radio" id="choix1" class="civilite" name="civilite" value="Monsieur">
                    <label for="choix1" class="labelCivilite">Mr</label>
                    <input type="radio" id="choix2" class="civilite" name="civilite" value="Madame">
                    <label for="choix2" class="labelCivilite">Mme</label>
                </div>
            <!--Role -->
            <div>
                <x-label for="name" :value="__('Role')" />
                <select name="role">
                    <option value="offreurSHN">Offreur(SHN)</option>
                    <option value="demandeur">Demandeur</option>
                </select>
            </div>
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nom')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <!-- Prenom -->
             <div>
                <x-label for="prenom" :value="__('Prenom')" />

                <x-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus />
             </div>
             <div>
                <x-label for="age" :value="__('Age')" />

                <x-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus />
             </div>
             <!-- ville -->
             <div>
                 <x-label for="ville" :value="__('Ville')" />

                 <x-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" required autofocus />
             </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Mot de passe')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmer mot de passe')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Se Connecter') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Inscrire') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection
