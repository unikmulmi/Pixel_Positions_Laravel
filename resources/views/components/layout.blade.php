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


        @auth
        <div class="flex space-x-6 font-bold">
            <a href="/jobs/create">Post a Job</a>
            
            <form method="POST" action="/logout">
                @csrf
                @method('DELETE')


                <button type="submit" class="cursor-pointer">Log Out</button>
            </form>
        </div>
        @endauth

        @guest
        <div class="flex space-x-4 font-bold">
            <a href="/register">Sign Up</a>
            <a href="/login">Login</a>

        @endguest

    </nav>

    <main class="mt-10 max-w-[986px] mx-auto ">
        {{ $slot }}
    </main>


<footer class="mt-20 border-t border-white/10 pt-10 pb-6">
    <div class="max-w-[986px] mx-auto">
        
        <div class="flex flex-col lg:flex-row justify-between gap-10">
            
            {{-- Left --}}
            <div class="space-y-4 max-w-sm">
                <a href="/" class="inline-block">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="pixel_positions">
                </a>

                <p class="text-sm text-white/60 leading-6">
                   Discover new opportunities, connect with great companies, and build a career you’re proud of.
                </p>
            </div>

            {{-- Middle --}}
            <div>
                <h3 class="font-bold mb-4">Explore</h3>

                <div class="flex flex-col space-y-3 text-sm text-white/70">
                    <a href="/" class="hover:text-blue-500 transition-colors duration-300">Jobs</a>
                    <a href="#" class="hover:text-blue-500 transition-colors duration-300">Companies</a>
                    <a href="#" class="hover:text-blue-500 transition-colors duration-300">Careers</a>
                    <a href="#" class="hover:text-blue-500 transition-colors duration-300">Salaries</a>
                </div>
            </div>

            {{-- Right --}}
            <div>
                <h3 class="font-bold mb-4">Contact</h3>

                <div class="flex flex-col space-y-3 text-sm text-white/70">
                    <a href="mailto:hello@pixelpositions.dev" class="hover:text-blue-500 transition-colors duration-300">
                        hello@pixelpositions.dev
                    </a>

                    <a href="#" class="hover:text-blue-500 transition-colors duration-300">
                        Twitter
                    </a>

                    <a href="#" class="hover:text-blue-500 transition-colors duration-300">
                        GitHub
                    </a>
                </div>
            </div>

        </div>

        {{-- Bottom --}}
        <div class="mt-10 pt-6 border-t border-white/10 flex flex-col lg:flex-row justify-between items-center gap-4 text-sm text-white/40">
            <p>© {{ date('Y') }} Pixel Positions. All rights reserved.</p>

            <div class="flex items-center gap-6">
                <a href="#" class="hover:text-white transition-colors duration-300">
                    Privacy
                </a>

                <a href="#" class="hover:text-white transition-colors duration-300">
                    Terms
                </a>
            </div>
        </div>

    </div>
</footer>

</div>
</body>
</html>
