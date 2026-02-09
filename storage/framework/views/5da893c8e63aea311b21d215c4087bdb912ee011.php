

<?php $__env->startSection('container'); ?>
 
	<h3 class="text-center">Data QNA</h3>
 
	<table border="0.5">
		
		<?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<div style="margin:20px"><?php echo e($mahasiswa->jawaban); ?></div>
			
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
 
	<br/>
		<!--div id="myDIV" style="display:none">
		
</div-->

<form action="/mahasiswa/cari" method="GET">
<div class="input-data form-group" style="position: fixed; bottom: 0; right: 0;left:0px; width: 1257px; margin: 0px; background-color:#DCDCDC;">
                    
                    <input type="text"  id="data" class="form-control" style="width: 1000px; margin: 20px;" required name="cari" placeholder="Cari QnA .." value="<?php echo e(old('cari')); ?>">
					<input type="submit" value="CARI" onclick="myFunction()" id="myBtn" class="btn btn-primary" style="width: auto; padding: auto; margin: auto;box-sizing: border-box;bottom:20px; position:absolute; right:130px;">    
            
</form>

 <!--script>
	document.getElementById("myBtn").addEventListener("click", function(){
    event.preventDefault();
});
	function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
 </script-->
 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutsmhs.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laraveldelapan\resources\views/mahasiswas/index.blade.php ENDPATH**/ ?>