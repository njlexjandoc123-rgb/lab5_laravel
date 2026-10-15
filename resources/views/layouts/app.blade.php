<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Student Grade Portal') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Tailwind CSS CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased bg-slate-100 text-slate-900">
        <!-- Top Dark Navy Navigation Bar -->
        <header class="bg-slate-900 text-white flex justify-between items-center px-6 py-3 shadow-md">
            <div class="font-bold text-lg tracking-wide flex items-center gap-2">
                <span>Student Grade & Subject Portal</span>
            </div>
            <div class="flex items-center space-x-4 text-xs">
                <span>Welcome, <strong>{{ Auth::user()->name }}</strong></span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="bg-slate-800 hover:bg-slate-700 text-gray-200 px-3 py-1 rounded border border-slate-700">Logout</button>
                </form>
            </div>
        </header>

        <div class="min-h-screen flex">
            <!-- Sidebar -->
            <aside class="w-56 bg-white border-r border-gray-200 p-4 space-y-1">
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2.5 rounded text-sm font-semibold {{ request()->routeIs('dashboard') ? 'bg-slate-800 text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                    Dashboard
                </a>
                <a href="{{ route('products.index') }}" class="flex items-center px-4 py-2.5 rounded text-sm font-semibold {{ request()->routeIs('products.*') ? 'bg-slate-800 text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                    Subjects & Tuition
                </a>
                <a href="{{ route('profile.edit') }}" class="flex items-center px-4 py-2.5 rounded text-sm font-semibold {{ request()->routeIs('profile.*') ? 'bg-slate-800 text-white' : 'text-gray-600 hover:bg-gray-100' }}">
                    Profile Settings
                </a>
            </aside>

            <!-- Main Content Area -->
            <main class="flex-1">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>