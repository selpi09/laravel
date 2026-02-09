@extends('layoutstumhs.main')

@section('container')
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Web QNA</title>
</head>
<body>

	<h3>Edit QNA</h3>

	<br/>
	<br/>

	@foreach($tatausahas as $t)
	<form action="/tatausaha/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->id }}"> <br/>
		Pertanyaan <input type="text" required="required" name="pertanyaan" value="{{ $t->pertanyaan }}"> <br/>
		Jawaban <input type="text" required="required" name="jawaban" value="{{ $t->jawaban }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
@endsection
