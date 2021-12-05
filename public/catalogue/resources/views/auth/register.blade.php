@extends('layouts.nav')

    <div class="row">
        <div class="col-md-5 mx-auto" style="background-color: aliceblue;border-radius: 5px;margin:50px; padding:40px; margin-top:100px;">
            <div id="first">
               
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Créer Un Compte</h1>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="nom" value="{{ __('Nom') }}"> Nom</label>
                            <input id="nom" class="form-control" type="text" name="nom" :value="old('nom')" required
                                autofocus autocomplete="name" />
                        </div>
                        <div class="form-group">
                            <label for="prenom" value="{{ __('Prenom') }}"> Prenom</label>
                            <input id="prenom" class="form-control" type="text" name="prenom" :value="old('prenom')" required
                                autofocus autocomplete="name" />
                        </div>
                        <div class="form-group">
                            <label for="name" value="{{ __('Name') }}"> Login</label>
                            <input id="name" class="form-control" type="text" name="name" :value="old('name')" required
                                autofocus autocomplete="name" />
                        </div>

                        <div class="form-group">
                            <label for="email" value="{{ __('Email') }}"> Email</label>
                            <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                required />
                        </div>

                        <div class="form-group">
                            <label for="password" value="{{ __('Password') }}"> Password</label>
                            <input id="password" class="form-control" type="password" name="password" required
                                autocomplete="new-password" />
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirme
                                Password</label>
                            <input id="password_confirmation" class="form-control" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                        </div>
                    
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms" />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                            class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of
                                            Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                            class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                            Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <button class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>