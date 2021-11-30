<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
        integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="./../css/app.css">
    @livewireStyles
    <script src="./../js/app.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot>


        <div class="row">
            <div class="col-4" >
                <div class="card" style="background-color:white;margin:10px; margin-right:-5px">
                    <img style="padding-top:10px;background-color:white;width:200px;text-align:center;height: 170px; margin:auto;display:flex;  border-radius: 50%;"
                        src="https://source.unsplash.com/random/301x200" alt="">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align:center;">Informations Personnelles </h4>

                        <div class="container">

                            <div class="row">
                                <div class="col-3">
                                    <div style="margin-bottom: 7px ;">Nom</div>
                                    <div style="margin-bottom: 7px ;">Prenom : </div>
                                    <div style="margin-bottom: 7px ;">Email : </div>
                                    <div style="margin-bottom: 7px ;">Login : </div>
                                    <div style="margin-bottom: 7px ;">Role : </div>
                                </div>


                                <div class="col-9">
                                <div style="margin-bottom: 7px ;">{{Auth::user()['nom']}}</div>
                                <div style="margin-bottom: 7px ;">{{Auth::user()['prenom']}}</div>
                                <div style="margin-bottom: 7px ;">{{Auth::user()['email']}}</div>
                                <div style="margin-bottom: 7px ;">{{Auth::user()['name']}}</div>
                                <div style="margin-bottom: 7px ;">hhhhh</div>
                                    
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-8" style="background-color:white;background-color:white;margin-top:10px;">


                <div>
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')

                        <x-jet-section-border />
                        @endif

                        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.update-password-form')
                        </div>

                        <x-jet-section-border />
                        @endif

                        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.two-factor-authentication-form')
                        </div>

                        <x-jet-section-border />
                        @endif

                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.logout-other-browser-sessions-form')
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                        <x-jet-section-border />

                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.delete-user-form')
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </x-app-layout>