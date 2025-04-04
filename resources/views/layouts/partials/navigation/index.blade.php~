<nav class="bg-gray-900 text-gray-200 w-full py-4">
    <div class="container mx-auto flex justify-between">
        <a wire:navigate.hover class="text-2xl font-bold" href="{{ route('home') }}">{{ config('app.name') }}</a>

        <div class="flex space-x-8">
            <a wire:navigate.hover href="{{ route("home") }}">Home</a>
            <a wire:navigate.hover href="{{ route("contact-us") }}">Contact Us</a>


            @if(Route::has('login') && auth()->guest())
                <a wire:navigate.hover href="{{ route("login") }}">Login</a>
            @endif

            @if(Route::has("register") && auth()->guest())
                <a wire:navigate.hover href="{{ route("register") }}">Register</a>
            @endif

            @auth
                <a wire:navigate.hover href="{{ route("dashboard.index") }}">Dashboard</a>
            @endauth

        </div>
    </div>
</nav>
