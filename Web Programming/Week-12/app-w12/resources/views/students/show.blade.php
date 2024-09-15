<h1>{{ $student->nama }}</h1>
<a href="/students">Back to Student List</a>
<br />
NIM: {{$student->nim}}<br />
Nama: {{$student->nama}}<br />
Prodi: {{$student->prodi}}<br />
Jenis Kelamin: {{$student->gender}}<br />
Tanggal Lahir: {{$student->tanggal_lahir}}<br />
Hobi: {{$student->hobi}}<br />
Foto: <img src="{{asset($photo)}}" alt="{{$student->nama}}"/>