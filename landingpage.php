<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landing Page</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
	<style type="text/css">
		#place {
			margin: auto;
			display: block;
			text-align: center;
		}

		.carousel {
			width: 500px;
			margin: auto;
			display: block;
			text-align: center;
		}

		.carousel-control-prev-icon,
		.carousel-control-next-icon {
		  filter: invert(100%);
		}

	</style>
<body>
	<form action="home.html" method="get"> 
		<div class="container p-2 text-center">
		<h3>UMN Gotcha</h3>
		<hr>

		<div id="carouselExample" class="carousel slide">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="characters/stitchLandingPage.gif" class="d-block w-100" id="stitch">
		    </div>
		    <div class="carousel-item">
		      <img src="characters/olafLandingPage.gif" style="height: 420px;" class="d-block w-100" id="olaf">
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>
		<br>
		<div class="mb-3 w-50" id="place">
		  <label for="exampleFormControlInput1" class="form-label">Enter your pet name here...</label>
		  <input type="text" class="form-control" id="petname" name="petname">
		</div>

		<div class="">
		  <button class="btn btn-primary" type="submit">Play</button>
		</div>
	</form>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

		<script type="text/javascript">
		  $(document).ready(function(){
		    $('.carousel-item').click(function(){
		      var id = $(this).attr('id'); //ambil id gambar yang diklik
		      window.location.href = 'home.html?id=' + id; //pindah ke halaman lain dengan membawa parameter id
		    });
		  });
		</script>
</body>
</html>