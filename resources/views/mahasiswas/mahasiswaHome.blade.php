
<!DOCTYPE html>
<html>
<head>
	<title>QnA</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="">
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
 
	<h3><p class="text-center" style="position: auto; top:0; right: 0;left:0px; height: 50px;width: 1257px; border: 3px solid #DCDCDC;  margin: 0px; background-color:#DCDCDC;">Data QnA</p></h3>
		
	<br/>
 
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
<div class="input-data form-group" style="position: fixed; bottom: 0; right: 0;left:0px; width: 1257px; border: 3px solid #DCDCDC;  margin: 0px; background-color:#DCDCDC;">
                    
                    <input type="text"  id="data" class="form-control" style="width: 1000px; margin: 20px;" required name="cari" placeholder="Cari QnA .." value="{{ old('cari') }}">
					<input type="submit" value="CARI" onclick="myFunction()" id="myBtn" class="btn btn-primary" style="width: auto; padding: auto; margin: auto;box-sizing: border-box;bottom: 15px; position:absolute; right:130px; bottom:40px;">    
            
</form>
</div>
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
	
	

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>

