<!DOCTYPE html>
<html>
<head>
	<title>Web QNA</title>
</head>
<body>
 
	<h3>Data tatausaha</h3>
 
	<a href="/tatausaha"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/tatausaha/store" method="post">
		<?php echo e(csrf_field()); ?>

		Pertanyaan <input type="text" name="pertanyaan" required="required"> <br/>
		Jawaban <input type="text" name="jawaban" required="required"> <br/>
		 <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html><?php /**PATH C:\laraveldelapan\resources\views/tambah.blade.php ENDPATH**/ ?>