<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $title = "INDEX";
        return view('books.index', ['books' => $books, 'title'=> $title]);
    }

    public function create()
    {
        if(!Gate::allows('create-book')){
            abort('403');
        }

        return view('books.create');
    }

    public function store(Request $request)
    {
        if(!Gate::allows('create-book')){
            abort('403');
        }

        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->user_id = $request->user()->id;
        $book->user_id = Auth::id();
        $book->save();
        return redirect('/books');
    }

    public function show($id)
    {
        $books = Book::findOrFail($id);
        return view('books.show', ['books' => $books]);
    }

    public function edit($id)
    {
        $books = Book::findOrFail($id);
        if(!Gate::allows('update-book', $books)){
            return "Buku ini bukan punya kamu, gak bisa di edit";
        }else{
            return view('books.edit', ['books' => $books]);
        }
    }

    public function update(Request $request, $id)
    {

        $book = Book::findOrFail($id);
        if(!Gate::allows('update-book', $book)){
            return "Buku ini bukan punya kamu, gak bisa di edit";
        }else{
            $book->title = $request->title;
            $book->description = $request->description;
            $book->user_id = $request->user()->id;
            $book->user_id = Auth::id();
            $book->save();
            return redirect('/books');
        }
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        if(!Gate::allows('delete-book', $book)){
            return "Buku ini bukan punya kamu, gak bisa dihapus";
        }else{
            $book->user_id = Auth::id();
            $book->delete();
            return redirect('/books');
        }
    }
}
