@extends('layoutstumhs.main')

@section('container')

<!DOCTYPE html>
<html>
<head>
	<title>Web QNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

	<h3>Data tatausaha</h3>
	<br/>
	<br/>

	<form action="/tatausaha/store" method="post">
		{{ csrf_field() }}
		Pertanyaan <input type="text" name="pertanyaan" required="required"> <br/>
		Jawaban <input type="text" name="jawaban" required="required"> <br/>
		 <br/>
		<input type="submit" value="Simpan Data">
	</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
@endsection
