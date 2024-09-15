<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'nim' => 'required|max:10|unique:students',
            'nama' => 'required|max:50',
            'prodi' => 'required|max:15',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'hobi' => 'required|max:15',
            'photo' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $path = $request->file('photo')->storePublicly('photos', 'public');

        $student = new Student();
        $student->nim = $request->nim;
        $student->nama = $request->nama;
        $student->prodi = $request->prodi;
        $student->photo = $path;
        $student->gender = $request->gender;
        $student->tanggal_lahir = $request->tanggal_lahir;
        $student->hobi = $request->hobi;
        $student->save();
        // return "Berhasil menyimpan data Student dengan id=" . $student->id;
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        $photo = Storage::url($student->photo);
        return view('students.show', ['student' => $student, 'photo' => $photo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request , [
            'nim' => 'required|max:10|unique:students,nim,'.$id,
            'nama' => 'required|max:50',
            'prodi' => 'required|max:15',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'hobi' => 'required|max:15',
            'photo' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $path = $request->file('photo')->storePublicly('photos', 'public');

        $student = Student::findOrFail($id);
        $student->nim = $request->nim;
        $student->nama = $request->nama;
        $student->prodi = $request->prodi;
        $student->photo = $path;
        $student->gender = $request->gender;
        $student->tanggal_lahir = $request->tanggal_lahir;
        $student->hobi = $request->hobi;
        $student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students');
    }
}
