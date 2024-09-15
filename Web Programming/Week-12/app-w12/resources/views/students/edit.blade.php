<h1>Edit Student</h1>
<a href="/students">Back to Student List</a>

@if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="/students/{{$student->id}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    NIM: <input type="text" name="nim" value="{{$student->nim}}" /><br />
    Nama: <input type="text" name="nama" value="{{$student->nama}}" /><br />
    Prodi: <input type="text" name="prodi" value="{{$student->prodi}}" /><br />
    <label for="gender">Jenis Kelamin:</label>
    <select name="gender" id="gender">
        <option value="Laki-laki" {{$student->gender === 'Laki-laki' ? 'selected' : ''}}>Laki-laki</option>
        <option value="Perempuan" {{$student->gender === 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
    </select> <br />
    Tanggal Lahir: <input type="date" name="tanggal_lahir" value="{{$student->tanggal_lahir}}" /><br />
    Hobi: <input type="text" name="hobi" value="{{$student->hobi}}" /><br />
    Foto: <img src="{{asset("storage/{$student->photo}")}}" /><br />
    <input type="file" name="photo" />
    <button type="submit">Submit</button>
</form>