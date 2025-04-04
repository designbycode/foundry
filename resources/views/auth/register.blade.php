<x-app-layout>

    <div class="max-w-lg mx-auto my-12">
        <form action="{{ route('register') }}" method="post" class="space-y-4 ">
            @csrf
            <div class="flex flex-col space-y-1">
                <label for="name">Name</label>
                <input autofocus class="rounded-md" name="name" type="text" id="name" value="{{ old("name") }}">
                @error("name")<small class="text-red-500">{{ $message }}</small>@enderror
            </div>
            <div class="flex flex-col space-y-1">
                <label for="email">Email</label>
                <input class="rounded-md" type="email" name="email" id="email" value="{{ old("email") }}">
                @error("email")<small class="text-red-500">{{ $message }}</small>@enderror
            </div>
            <div class="flex flex-col space-y-1">
                <label for="password">Password</label>
                <input class="rounded-md" type="password" name="password" id="password">
                @error("password")<small class="text-red-500">{{ $message }}</small>@enderror
            </div>
            <div class="flex flex-col space-y-1">
                <label for="password_confirmation">Password</label>
                <input class="rounded-md" type="password" name="password_confirmation" id="password_confirmation">
            </div>

            <button class="rounded-md bg-gray-900 cursor-pointer text-white hover:bg-gray-950 px-4 py-2" type="submit">Register</button>
        </form>
    </div>

</x-app-layout>
