<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{$title}} Buku
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <a href="/books/create" class="dark:font-bold text-gray-700 dark:text-gray-300">Add Book</a>
            </div><br>
            <form action="/books/search" method="post" class="mb-4">
                @csrf
                <input type="text" name="q" class="p-2 border rounded">
                <button type="submit" class="dark:bg-gray-700 text-gray-700 dark:text-white p-2 rounded">Search</button>
            </form>
            <table class="w-full border-collapse border">
                <thead>
                    <tr>
                        <th class="p-3 border text-gray-700 dark:text-gray-300">Judul</th>
                        <th class="p-3 border text-gray-700 dark:text-gray-300">Deskripsi</th>
                        <th class="p-3 border text-gray-700 dark:text-gray-300">User</th>
                        <th class="p-3 border text-gray-700 dark:text-gray-300">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td class="p-4 border text-gray-700 dark:text-gray-300">{{ $book->title }}</td>
                            <td class="p-4 border text-gray-700 dark:text-gray-300" style="width: 55%; white-space: pre-line; overflow: hidden; text-overflow: ellipsis;">
                                {{ $book->description }}</td>
                            <td class="p-4 border text-gray-700 dark:text-gray-300">{{ $book->user->name }}</td>
                            <td class="p-4 border text-gray-700 dark:text-gray-300">
                                <a href="/books/{{$book->id}}" class="text-blue-500 dark:text-gray-300">Show</a> | 
                                <a href="/books/{{$book->id}}/edit" class="text-blue-500 dark:text-gray-300">Edit</a> | 
                                <form action="/books/{{$book->id}}" method="post" style="display: inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="bg-transparent text-red-500 dark:text-gray-300">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
