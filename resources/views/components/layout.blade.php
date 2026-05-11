<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken pb-20">

<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10 ">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="pixel_positions">
            </a>
        </div>

        <div class="space-x-4 font-bold">
            <a href="/">Jobs</a>
            <a href="">Career</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>


        {{-- <div class="flex space-x-6 font-bold">
            <a href="/jobs/create">Post a Job</a>
            
            <form method="POST" action="/logout">

                <button type="submit" class="cursor-pointer">Log Out</button>
            </form>
        </div> --}}


        <div class="flex space-x-4 font-bold">
            <a href="/register">Sign Up</a>
            <a href="/login">Login</a>
        </div>

    </nav>

    <main class="mt-10 max-w-[986px] mx-auto ">
        {{ $slot }}
    </main>
</div>
</body>
</html>
