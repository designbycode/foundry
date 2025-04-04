<x-app-layout>

    <div class="max-w-lg mx-auto my-12">
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                A new email verification link has been emailed to you!
            </div>
        @endif
        <form action="{{ route('login') }}" method="post" class="space-y-4 ">
            @csrf
            

            <button class="rounded-md bg-gray-900 cursor-pointer text-white hover:bg-gray-950 px-4 py-2" type="submit">Login</button>
        </form>
    </div>

</x-app-layout>
