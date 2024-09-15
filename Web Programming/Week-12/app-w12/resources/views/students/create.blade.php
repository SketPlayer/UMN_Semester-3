<h1>Create New Student</h1>
<a href="/students">Back to Student List</a>

@if($errors)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form action="/students" method="post" enctype="multipart/form-data">
    @csrf
    NIM: <input type="text" name="nim" /><br />
    Nama: <input type="text" name="nama" /><br />
    Prodi: <input type="text" name="prodi" /><br />
    <label for="gender">Jenis Kelamin:</label>
    <select name="gender" id="gender">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select> <br />
    Tanggal Lahir: <input type="date" name="tanggal_lahir" /><br />
    Hobi: <input type="text" name="hobi" /><br />
    Foto: <input type="file" name="photo" /><br /><br />
    <button type="submit">Submit</button>
</form>