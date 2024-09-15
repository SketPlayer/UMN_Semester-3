<?php

// namespace App\Http\Controllers;

// class StudentController extends Controller
// {
//     public function index()
//     {
//         $studentsNim = ['001', '002', '003'];
//         $studentsNama = ['John Thor', 'John Wick', 'John Does'];
//         $studentsProdi = ['Informatika', 'Sistem Informasi', 'Teknik Komputer'];
//         return view('students.index')->with('students', $studentsNim);
//     }
// }

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['nim' => '001', 'nama' => 'John Thor', 'prodi' => 'Informatika'],
            ['nim' => '002', 'nama' => 'John Wick', 'prodi' => 'Sistem Informasi'],
            ['nim' => '003', 'nama' => 'John Does', 'prodi' => 'Teknik Komputer'],
        ];

        return view('students.index')->with('students', $students);
    }
}
