<!DOCTYPE html>
<html>
<head>
	<title>Web QNA</title>
</head>
<body>
 
	<h3>Edit QNA</h3>
 
	<a href="/tatausaha"> Kembali</a>
	
	<br/>
	<br/>
 
	<?php $__currentLoopData = $tatausahas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<form action="/tatausaha/update" method="post">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="id" value="<?php echo e($t->id); ?>"> <br/>
		Pertanyaan <input type="text" required="required" name="pertanyaan" value="<?php echo e($t->pertanyaan); ?>"> <br/>
		Jawaban <input type="text" required="required" name="jawaban" value="<?php echo e($t->jawaban); ?>"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
 
</body>
</html><?php /**PATH C:\laraveldelapan\resources\views/edit.blade.php ENDPATH**/ ?>