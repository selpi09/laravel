

<?php $__env->startSection('container'); ?>
<div class="input-data form-group" style="position: fixed; bottom: 0; right: 0;left:0px; width: 1257px; border: 3px solid #DCDCDC;  margin: 0px; background-color:#DCDCDC;">
                    
                    <input type="text"  id="data" class="form-control" style="width: 1000px; margin: 20px;" required name="cari" placeholder="Cari QnA .." value="<?php echo e(old('cari')); ?>">
					<input type="submit" value="CARI" onclick="myFunction()" id="myBtn" class="btn btn-primary" style="width: auto; padding: auto; margin: auto;box-sizing: border-box;bottom: 15px; position:absolute; right:130px; bottom:40px;">    
            
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
  ​
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutsmhs.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laraveldelapan\resources\views/index.blade.php ENDPATH**/ ?>