<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landing Page</title>
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
</head>
	<style type="text/css">
		* {
    		color: white;
    		margin: 0;
    		padding: 0;
    	}

    	option {
    		color: black;
    	}

		body {
			background-image: url(backgrounds/malam.png);
			background-size: cover;
			background-repeat: no-repeat;
		}

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
		<hr style="border: 2px solid black;">
		<div class="row">
			<div class="col">
				<div id="carouselExample" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="characters/stitchLandingPage.gif" class="d-block w-100" alt="stitch">
				    </div>
				    <div class="carousel-item">
				      <img src="characters/tamaLandingPage.gif" style="height: 420px;" class="d-block w-100" alt="tama">
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
			</div>
			<div class="col mt-sm-4 mt-md-0">
				<h4>Choose your pet character!</h4>
				<select class="form-select" aria-label="Default select example" id="character">
				  <option selected>Open this select character</option>
				  <option value="stitch">Stitch</option>
				  <option value="gudetama">Gudetama</option>
				</select>
			</div>
		</div>
		
		<br>
		<div class="mb-3 w-50" id="place">
		  <h4>Enter your pet name here...</h4>
		  <input type="text" class="form-control" id="petname" name="petname">
		</div>

		<div class="">
		  <button class="btn btn-primary" type="submit" id="playButton">Play</button>
		</div>
	</form>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

		<script type="text/javascript">
			$(document).ready(function() {
			    $("#playButton").click(function(e) {
			        e.preventDefault();
			        var character = $("#character").val();
			        var petname = $("#petname").val();
			        // mengirim data ke halaman home.html menggunakan method GET
			        window.location.href = "home.html?character=" + character + "&petname=" + petname;
			    });
			});
		</script>
</body>
</html>