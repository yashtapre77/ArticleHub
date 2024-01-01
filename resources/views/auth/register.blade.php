<style>
    #r-body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background-color: #ddbbe3;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .r-registration-container {
        display: flex;
        width: 60%;
        height: 30vw;
        overflow: hidden;
        box-shadow: 0 0 30px #7a4084;
        border-radius: 10px;
        margin: auto;
    }

    .r-left-side {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #333;
        padding: 20px;
        position: relative;
    }

    .r-left-side h1 {
        text-align: center;
        font-size: 34px;
        margin: 7px;
        font-weight: 800;
    }

    .r-form-container {
        display: flex;
        flex-direction: column;
        gap: 20px;
        width: 100%;
        max-width: 300px;
    }

    .r-form-container label {
        position: relative;
        margin: 15px;
    }

    .r-form-container input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 25px;
        transition: border-color 0.3s ease;
        margin: 15px;
    }

    .r-form-container input:focus {
        border-color: #D60CF8;
    }

    .r-form-container label span {
        position: absolute;
        left: 15px;
        top: 25px;
        transform: translateY(-50%);
        font-size: 0.9em;
        color: #aaa;
        transition: transform 0.3s ease, font-size 0.3s ease, top 0.3s ease;
        background-color: #fff;
        padding: 0 5px;
    }

    .r-form-container input:focus+span,
    .r-form-container input:not(:placeholder-shown)+span {
        transform: translateY(-80%);
        font-size: 0.8em;
        top: 4px;
        color: #000;
    }

    .r-button {
        width: 50%;
        padding: 10px;
        color: #fff;
        border: none;
        border-radius: 15px;
        cursor: pointer;
        /* transition: background-color 0.3s ease; */
        margin-left: 80px;
        background:#D60CF8;
    }

    .r-button:hover {
        background-color: #06345b;
    }

    .r-right-side {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .r-right-side img {
        width: 300px;
        height: 300px;
        margin-bottom: 20px;
    }

    .r-right-side button {
        width: 60%;
        padding: 10px;
        background-color: #D60CF8;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .r-right-side button:hover {
        background-color: #06345b;
    }

</style>
<x-guest-layout>
    {{-- <form method="POST" action="{{ route('register') }}"> --}}
        {{-- @csrf --}}
        {{-- <div class="flex items-center justify-end mt-4"> --}}
            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" --}}
                {{-- href="{{ route('login') }}"> --}}
                {{-- {{ __('Already registered?') }} --}}
            {{-- </a> --}}

            {{-- <x-primary-button class="ms-4"> --}}
                {{-- {{ __('Register') }} --}}
            {{-- </x-primary-button> --}}
        {{-- </div> --}}
    {{-- </form> --}}



<body id="r-body">

    <div class="r-registration-container">
        <div class="r-left-side">
            <h1>Registration</h1>
            <div class="r-form-container">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <label>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" placeholder=" " />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <span>Name</span>
                </label>

                <label>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" placeholder=" " />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <span>Email</span>
                </label>

                <label>
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" placeholder=" " />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <span>Password</span>
                    </label>
                <label>
                        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" placeholder=" "/>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        <span>Confirm </span>
                </label>
                <div><a href="">
                    <button class="r-button"  >Register</button>
                </a>
                </div>
                </div>
        </div>
        <div class="r-right-side">
            <img src="/images/register-pic.svg" alt="Logo">
            <!-- Replace 'your-image-path.jpg' with your actual image path -->
            <a href="{{url('/')}}/login">
                <button class="r-button" type="button">Login</button>
            </a>
        </div>
    </div>
</body>
    </x-guest-layout>
