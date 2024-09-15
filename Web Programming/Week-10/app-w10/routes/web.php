<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/read', function(){
    $posts = Post::all();
    $str = "";
    foreach($posts as $post){
        $str .= $post->title . "<br />";
    }
    return $str;
});

Route::get('/find/{id}', function($id){
    $post = Post::find($id);
    return $post->title;
});

Route::get('/findwhere', function(){
    $posts = Post::where('is_admin', false)->orderBy('id', 'desc')->take(1)->get();
    return $posts;
});

Route::get('/basicinsert', function(){
    $post = new Post;
    $post->title = "New Eloquent Title";
    $post->content = "Wow Eloquent content is really cool";
    $post->is_admin = true;
    $post->save();
});

Route::get('/create', function(){
    Post::create([
        'title' => 'Title with Create Method',
        'content' => 'Saya belajar banyak hari ini',
        'is_admin' => false
    ]);
});

Route::get('/basicupdate', function(){
    $post = Post::find(5);
    $post->title = 'Updated Eloquent Title';
    $post->content = 'Update Eloquent Content';
    $post->save();
});

Route::get('/update', function(){
    Post::where('id', 5)->where('is_admin', false)->update([
        'title' => 'NEW PHP TITLE',
        'content' => 'I love learning Laravel'
    ]);
});

Route::get('/delete', function(){
    $post = Post::find(5);
    $post->delete();
});

Route::get('/delete2', function(){
    Post::destroy([2,3]);
});

Route::get('/delete3', function(){
    Post::where('is_admin', 0)->delete();
});

Route::get('/softdelete', function(){
    Post::find(2)->delete();
});

Route::get('/readsoftdelete', function(){
    // $post = Post::find(2);
    // return $post;
    // $post = Post::withTrashed()->where('id',2)->get();
    // return $post;
    // $post = Post::withTrashed()->get();
    // return $post;
    $post = Post::onlyTrashed()->get();
    return $post;
});

Route::get('/restore', function(){
    Post::withTrashed()->where('id', 2)->restore();
});

Route::get('/forcedelete', function(){
    Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
});

/*
Route::get('/insert', function(){
    DB::insert("INSERT INTO posts(title, content) VALUES(?,?)",
        ['PHP With Laravel', 'Laravel is the best thing that happen to PHP']);
});

Route::get('/read', function(){
    $results = DB::select("SELECT * FROM posts WHERE id = ?", [1]);
    // foreach($results as $post){
    // return $post->title;
    // }
    return $results;
});

Route::get('/update', function(){
    $updated = DB::update("UPDATE posts SET title = ? WHERE id = ?", ["Update title", 1]);
    return $updated;
});

Route::get('/delete', function(){
    $deleted = DB::delete("DELETE FROM posts WHERE id = ?", [1]);
    return $deleted;
});
*/

Route::get('/students/THEPROCESS/create/{nim}/{nama}/{prodi}', function($nim, $nama, $prodi){
    Student::create([
        'nim' => $nim,
        'nama' => $nama,
        'prodi' => $prodi
    ]);
});

Route::get('/students/THEPROCESS/read', function(){
    $students = Student::all();
    $str = "";
    foreach($students as $student){
        $str .= "NIM: ". $student->nim . "<br />";
        $str .= "Nama: ". $student->nama . "<br />";
        $str .= "Prodi: ". $student->prodi . "<br /><br/ >";
    }
    return $str;
});

Route::get('/students/THEPROCESS/update/{id}/{nim}/{nama}/{prodi}', function($id, $nim, $nama, $prodi){
    Student::where('id', $id)->update([
        'nim' => $nim,
        'nama' => $nama,
        'prodi' => $prodi
    ]);
});

Route::get('/students/THEPROCESS/softdelete/{nim}', function($nim){
    Student::find($nim)->delete();
});

Route::get('/students/THEPROCESS/readsoftdelete', function(){
    $students = Student::onlyTrashed()->get();
    $str = "";
    foreach($students as $student){
        $str .= "NIM: ". $student->nim . "<br />";
        $str .= "Nama: ". $student->nama . "<br />";
        $str .= "Prodi: ". $student->prodi . "<br />";
        $str .= "Deleted at: ". $student->deleted_at . "<br /><br/ >";
    }
    return $str;
});

Route::get('/students/THEPROCESS/restore/{nim}', function($nim){
    Student::withTrashed()->where('nim', $nim)->restore();
});

Route::get('/students/THEPROCESS/restoreall', function(){
    Student::onlyTrashed()->restore();
});

Route::get('/students/THEPROCESS/forcedelete', function(){
    Student::onlyTrashed()->forceDelete();
});