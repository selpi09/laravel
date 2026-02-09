@extends('layoutsmhs.main')

@section('container')
 
	<h3 class="text-center">Data QNA</h3>
 
	<table border="0.5">
		
		@foreach($mahasiswas as $mahasiswa)
		<tr>
			<div style="margin:20px">{{ $mahasiswa->jawaban }}</div>
			
		</tr>
		@endforeach
	</table>
 
	<br/>
		<!--div id="myDIV" style="display:none">
		
</div-->

<form action="/mahasiswa/cari" method="GET">
<div class="input-data form-group" style="position: fixed; bottom: 0; right: 0;left:0px; width: 1257px; margin: 0px; background-color:#DCDCDC;">
                    
                    <input type="text"  id="data" class="form-control" style="width: 1000px; margin: 20px;" required name="cari" placeholder="Cari QnA .." value="{{ old('cari') }}">
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
 
@endsection