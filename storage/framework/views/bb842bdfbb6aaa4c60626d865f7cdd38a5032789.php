<?php $__env->startSection('container'); ?>
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
		<?php $__currentLoopData = $tatausahas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
        <td ><?php echo e($t->id); ?></td>
			<td><?php echo e($t->pertanyaan); ?></td>
			<td><?php echo e($t->jawaban); ?></td>
			<td>
				<a href="/tatausaha/edit/<?php echo e($t->id); ?>">Edit</a>
				|
				<a href="/tatausaha/hapus/<?php echo e($t->id); ?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</body>

</html>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutstumhs.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laraveldelapan\resources\views/dashboard/index.blade.php ENDPATH**/ ?>