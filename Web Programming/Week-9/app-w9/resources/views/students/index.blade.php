@extends('layout.app')

@section('content')

    <h1>Data Mahasiswa</h1>
    <table border="1">
        <thead>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student['nim'] }}</td>
                    <td>{{ $student['nama'] }}</td>
                    <td>{{ $student['prodi'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('footer')
    <script>alert('Hello Visitor!')</script>
@stop