@extends('layouts.nav')


    <div class="row">
        <div class="col-md-5 mx-auto" style="background-color: aliceblue;border-radius: 5px;margin:50px; padding:40px;margin-top:100px">
            <div id="first">
                
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Login</h1>
                        </div>
                    </div>

                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" value="{{ __('Email') }}">Email address</label>
                            <input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                required autofocus />
                        </div>

                        <div class="form-group">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="form-control" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <div class="form-group">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif

                            <button class="btn btn-primary">
                                {{ __('Log in') }}
                            </button>
                        </div>
                    </form>
                
            </div>
            </div>
            </div>
    
</body>

</html>