@extends('layoutstumhs.main')

@section('container')
<!DOCTYPE html>
<html>
<head>
	<title>Web QNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<h3>Data QNA</h3>

	<a href="/tatausaha/tambah"> + Tambah QNA Baru</a>

	<br/>
	<br/>

	<table border="1"  class="table">
		<tr>
        <th></th>
			<th>Pertanyaan</th>
			<th>Jawaban</th>
			<th>Opsi</th>
		</tr>
		@foreach($tatausahas as $t)
		<tr>
        <td >{{ $t->id }}</td>
			<td>{{ $t->pertanyaan }}</td>
			<td>{{ $t->jawaban }}</td>
			<td>
				<a href="/tatausaha/edit/{{ $t->id }}">Edit</a>
				|
				<a href="/tatausaha/hapus/{{ $t->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>

</html>
	@endsection
