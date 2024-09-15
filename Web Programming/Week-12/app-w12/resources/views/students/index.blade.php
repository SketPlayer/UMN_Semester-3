<h1>Daftar Mahasiswa</h1>
<a href="/students/create">Create new Student</a>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Hobi</th>
        <th>Tindakan</th>
    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{$student->nim}}</td>
        <td>
            @if($student->photo)
                <img src="{{asset("storage/{$student->photo}")}}" alt="{{$student->nama}}" style="max-width: 100px; max-height: 100px;">
            @else
                NULL
            @endif
        </td>
        <td>{{$student->nama}}</td>
        <td>{{$student->prodi}}</td>
        <td>{{$student->gender}}</td>
        <td>{{$student->tanggal_lahir}}</td>
        <td>{{$student->hobi}}</td>
        <td>
            <a href="/students/{{$student->id}}">SHOW</a> | 
            <a href="/students/{{$student->id}}/edit">EDIT</a> | 
            <form action="/students/{{$student->id}}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>