<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create New Book
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <a href="/books" class="text-gray-700 dark:text-gray-300">Back to Index</a>
            </div><br>
            <form action="/books" method="post" class="mb-4">
                @csrf
                <label for="title" class="block text-gray-700 dark:text-gray-300">Judul:</label>
                <input type="text" name="title" class="w-full p-2 border rounded-md">
                <br><br>
                <label for="description" class="block text-gray-700 dark:text-gray-300">Keterangan:</label>
                <textarea name="description" class="w-full p-2 border rounded-md"></textarea>
                <br><br>
                <button type="submit" class="dark:bg-gray-700 text-gray-700 dark:text-white p-2 rounded-md">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
