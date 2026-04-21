<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold">Welcome User {{ auth()->user()->name }}</h1>
        <p class="mt-2 text-gray-600">You are logged in as <b>{{ auth()->user()->role }}</b></p>
        <div class="mt-4 p-4 bg-gray-100 rounded">
            <h2 class="font-semibold">Profile</h2>
            <p>Name: {{ auth()->user()->name }}</p>
            <p>Email: {{ auth()->user()->email }}</p>
            <p>Role: {{ auth()->user()->role }}</p>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="mt-4 px-4 py-2 bg-red-500 text-white rounded">Logout</button>
        </form>
    </div>
</x-app-layout>
