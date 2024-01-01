<style>
    #l-body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background-color: #ddbbe3;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100%;
    }

    .login-container {
        display: flex;
        width: 60%;
        height: 30vw;
        overflow: hidden;
        box-shadow: 0 0 30px #7a4084;
        border-radius: 10px;
        margin: auto
    }

    .left-side {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #333;
        padding: 20px;
        position: relative;
    }

    .left-side img {
        width: 300px;
        height: 300px;
        margin-bottom: 20px;
    }

    .left-side button {
        width: 60%;
        padding: 10px;
        background-color: #D60CF8;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-left: 60px
    }

    .left-side button:hover {
        background-color: #06345b;
    }

    .right-side {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
        position: relative;
    }

    .right-side h1 {
        text-align: center;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: xx-large;
    }

    .form-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 100%;
        max-width: 300px;
    }

    .form-container label {
        position: relative;
        margin: 5px;
    }

    .form-container input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 25px;
        transition: border-color 0.3s ease;
        margin: 5px;
    }

    .form-container input:focus {
        border-color: #0f4c81;
    }

    .form-container label span {
        position: absolute;
        left: 15px;
        top: 24px;
        transform: translateY(-50%);
        font-size: 0.9em;
        color: #aaa;
        transition: transform 0.3s ease, font-size 0.3s ease, top 0.3s ease;
        background-color: #ffffff;
        padding: 0 5px;
    }

    .form-container input:focus+span,
    .form-container input:not(:placeholder-shown)+span {
        transform: translateY(-80%);
        font-size: 0.8em;
        top: 5px;
        color: #000;
    }

    .login-btn {
        width: 50%;
        padding: 10px;
        background-color: #D60CF8;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-left: 80px;
        border-radius: 20px;
        margin-top: 20px;
    }

    .l-forgot{
        margin-top: 10px ;
        margin-left:20px;
    }

    .login-btn:hover {
        background-color: #06345b;
    }
</style>

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <body id="l-body">

        <div class="login-container">
            <div class="left-side">
                <img src="images\login-pic.svg" alt="Logo">
                <a href="{{ route('register') }}">
                    <button class="button" type="button">Register</button>
                </a>
            </div>


            <div class="right-side">
                <h1>Login</h1>
                <div class="form-container">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label>
                            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                required autofocus autocomplete="username" placeholder=" " />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <span>Username</span>
                        </label>
                        <label>
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="current-password" placeholder=" " />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <span>Password</span>
                        </label>

                        <div class="l-forgot">
                            @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none
                        focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot password?') }}
                            </a>
                            @endif
                            <br>
                            <button class="login-btn">
                                {{ __('Log in') }}
                            </button>
                        </div><br>

                        {{-- <button class="login-btn" type="submit">Login</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </body>

    <!-- Remember Me -->
    {{-- <div class="block mt-4"> --}}
        {{-- <label for="remember_me" class="inline-flex items-center"> --}}
            {{-- <input id="remember_me" type="checkbox" --}} {{--
                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            --}}
            {{-- <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span> --}}
            {{-- </label> --}}
        {{-- </div> --}}

</x-guest-layout>
