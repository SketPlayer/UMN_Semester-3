<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{$books->title}}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <a href="/books" class="text-gray-700 dark:text-gray-300">Back to Index</a>
            </div><br />
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p><strong>Judul:</strong> {{$books->title}}</p>
                    <p><strong>Deskripsi:</strong> {{$books->description}}</p>
                    <p><strong>User:</strong> {{$books->user->name}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
