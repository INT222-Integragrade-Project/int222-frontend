<!DOCTYPE html>
<html lang="en">

<?php include("web_assets.php"); ?>

<body>
  
	<?php include("navbar.php");?>
	
	<div class="container" style="max-width: 1200px;">

		<div class="row">
			<div class="col-md" style="text-align: center;">
				<p class="topic">DORA PRODUCT</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md" style="text-align: center;">
				<div id="carouselIndicators" class="carousel slide" data-ride="carousel" style="">

					<ol class="carousel-indicators">
						<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselIndicators" data-slide-to="1"></li>
					</ol>
					
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="image/imagebrand/product.png" class="d-block w-100" >
						</div>
						<div class="carousel-item" >
							<img src="image/imagebrand/product1.png" class="d-block w-100">
						</div>
					</div>

					<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>

				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md" style="text-align: center;">
				<p class="brand-name" style="margin-bottom: -0.5rem;">Anllo</p>
			</div>
		</div>
		
		<hr style="border:1px solid #C7BBE2;margin-bottom:5px;">
		
		<div class="row">
			<div class="col-md">
				<div class="dropdown">
					<div class="btn-group">
						<label class="btn dropdown-toggle" href="#" role="button" id="dropdownBrand" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px;">BRAND</label>
						<div class="dropdown-menu" aria-labelledby="dropdownBrand">
							<a class="dropdown-item">None</a>
							<a class="dropdown-item">Anello</a>
							<a class="dropdown-item">Chanel</a>
							<a class="dropdown-item">Dior</a>
							<a class="dropdown-item">Guicci</a>
							<a class="dropdown-item">Lyn</a>
							<a class="dropdown-item">Ysl</a>
						</div>
					</div>

					<div class="btn-group">
						<label class="btn dropdown-toggle" href="#" role="button" id="dropdownColor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px;">COLOR</label>
						<div class="dropdown-menu" aria-labelledby="dropdownColor">
							<a class="dropdown-item">None</a>
							<a class="dropdown-item">Blue</a>
							<a class="dropdown-item">Green</a>
							<a class="dropdown-item">Red</a>
							<a class="dropdown-item">Brown</a>
							<a class="dropdown-item">Black</a>
							<a class="dropdown-item">White</a>
							<a class="dropdown-item">Yellow</a>
							<a class="dropdown-item">Orange</a>
							<a class="dropdown-item">Sky Blue</a>
							<a class="dropdown-item">Gray</a>
							<a class="dropdown-item">Pink</a>
							<a class="dropdown-item">Cream</a>
							<a class="dropdown-item">Beige</a>
							<a class="dropdown-item">Purple</a>
						</div>
					</div>


					<div class="btn-group" style="float: right;">
					<label class="btn dropdown-toggle" href="#" role="button" id="dropdownSortby" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 15px;">SORT BY PRICE</label>
						<div class="dropdown-menu" aria-labelledby="dropdownSortby">
							<a class="dropdown-item">None</a>
							<a class="dropdown-item">Low to high</a>
							<a class="dropdown-item">High to low</a>
						</div>
					</div>

				</div>
			</div>
		</div>
			
		<hr style="border:1px solid #C7BBE2;margin-top:0px;">

<style>

	#product-content {
		background-color: #ffffff;
		min-height: 1000px;
		padding: 10px 0px 0px 30px;
		
	}

	#product-content .col-md-3 {
		padding-right: 25px;
    	padding-left: 0px;
		/* margin-left: 0px; */
	}
	
	.div-product {
		position: relative;
		width: 100%;
		min-height: 395px;
		background-color: #fbfbfb;
		box-shadow: 1px 1px 5px #cccccc;
		border-radius: 15px;
		margin: 30px 0px 0px 0px;
		padding: 0px 0px 0px 0px;
		overflow: hidden;
	}

	.div-product:hover {
		background-color: #e8e8e8;
	}

	.div-product .col-md {
		padding-right: 0px;
    	padding-left: 0px;
	}

	.div-product img {
		width: 100%;
		max-height: 300px;
		box-shadow: 1px 0px 2px #cccccc;
	}

	.div-product .div-product-favorite {
		position: absolute;
		top: 15px;
		right: 20px;

	}

	.div-product-title {
		position: absolute;
		top: 300px;
		left: 20px;
		font-size: 20px;
	}

	.div-product-price {
		position: absolute;
		bottom: 10px;
		right: 20px;
		color: #ff0000;
	}

	
	.link-custom {
		color: #555555;

	}

	.link-custom:hover {
		color: #f4a29d;
		text-decoration: none;
	}

</style>

<script>

	$(document).ready(function(){

		// $(".div-product-favorite").hover(function(){
		// 	this(".material-icons-outlined").html("favorite");
		// });
	});

</script>
		<?php $loop = [1,2,3,4,5,6] ?>

		<div id="product-content">

			<div class="row justify-content-sm-left" style="margin:0px;">

				<?php foreach($loop as $key => $value): ?>
					<div class="col-md-3">
						<div class="div-product">
							
							<div class="div-product-img">
								<img src="image/product/Dior/PD1/PD1Red.png">
								<!-- <img src="image/product/Anello/PA1/PA1Pink.png"> -->
							</div>

							<div class="div-product-favorite">
								<!-- favorite -->
								<!-- favorite_border -->
								<a id="favorite-<?= $key ?>" class="link-custom" href="#"><span class="material-icons-outlined">favorite_border</span></a>
							</div>

							<div class="div-product-title">
								Product Name
							</div>
							
							<div class="div-product-price">
								THB <?= number_format(3500); ?> 
							</div>
						</div>
					</div>
				<?php endforeach; ?>

			</div>

		</div>
		

	</div>
	
</body>
</html>
