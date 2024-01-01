<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Our Articles @if(isset($title)) {{ ' | '.$title}} @endif</title>
</head>

<body >
    <nav >
        <ul >
            <li>
                <a href="{{ route('welcome') }}">Main Site</a>
                <a href="{{ route('admin') }}" >Admin Home</a>
                <a href="{{ route('admin-users') }}">All Users</a>
                <a href="{{ route('admin-users-create') }}">Create Users</a>
                <a href="#">All Posts</a>
                <a href="#">Create Posts</a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a :href="route('logout')"
                        onclick="event.preventDefault();this.closest('form').submit();">
                        {{ __('Log Out') }}</a>
                </form>
            </li>
        </ul>
    </nav>
    <div class="relative z-0 lg:flex-grow">
        <header class="flex bg-gray-700 text-white items-center px-3">
            {{-- <button class="p-2 focus:outline-none focus:bg-gray-600 hover:bg-gray-600 rounded-md lg:hidden" --}}
                {{-- @click="open = true"> --}}
                {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" --}}
                    {{-- stroke="currentColor"> --}}
                    {{-- <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /> --}}
                {{-- </svg> --}}
            {{-- </button> --}}
            <span class="block text-2xl sm:text-3xl font-bold p-4">@if(isset($header)) {{ $header }} @endif</span>
        </header>
        <main class="p-6">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
