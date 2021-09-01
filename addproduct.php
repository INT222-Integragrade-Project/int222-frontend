<!DOCTYPE html>
<html lang="en">

<?php include("web_assets.php"); ?>

<style>

	#imagePanel {
		width: 450px;
		height: 450px;
		background-color: #cccccc;
	}

	.imagePreview {
		overflow: hidden;
		max-width: 450px;
		max-height: 450px;
	}

	.imagePreview img {
		position: relative;
		width: 100%;
		/* opacity: 0.2; */
		/* top:-150px; */
	}

	/* Color Panel */
	.colornav-wrapper {
		/* height: 104px; */
		margin-top: 10px;
	}

	.colornav-wrapper ul {
		margin-block-start: 0px;
		margin-block-end: 0px;
		margin-inline-start: 0px;
		margin-inline-end: 0px;
		padding-inline-start: 0px;
		margin-bottom: 0px;
	}
	
	.colornav-items {
		padding-top: 0;
	}

	.colornav-item {
		float: none;
		margin: 0 2px;
		display: inline-block;
	}

	
	
	.colornav-link {
		border: 2px solid #cccccc;
		border-radius: 50%;
		box-sizing: border-box;
		color: #1d1d1f;
		cursor: pointer;
		float: left;
		margin-bottom: 0px;
		padding: 3px;
		position: relative;
		width: 42px;
		height: 42px;
		z-index: 1;
	}

	.colornav-link:hover {
		border: 2px solid #0070f9;
	}

	.colornav-item:focus {
		outline: 4px solid rgba(0,125,250,0.6);
		outline-offset: 1px;
	}



	.colornav-swatch {
		background: #f5f5f7 center center;
		border-radius: 50%;
		display: block;
		width: 32px;
		height: 32px;
	}

</style>

<script>

	function showImagePreview(input){

		var imageFile = $("input[id=inputFile]").get(0).files[0];
		// if (this) {
		// 	$("#imagePreview").src = URL.createObjectURL(this)
		// }
		if(imageFile){
			var reader = new FileReader();
			reader.onload = function(){
				$("#imagePreview").attr("src", reader.result);
			}
			reader.readAsDataURL(imageFile);

			$("#imagePreview").show();
		}

	}

</script>

<body>

	<?php include("navbar.php");?>

	<div class="row">
		<div class="col-md" style="text-align:center;">
			<p class="topic"><b>ADD PRODUCT</b></p>
		</div>
	</div>

	<div class="row justify-content-md-center">
		<div class="col-md-7">
			<form action="save_product.php" method="post" style="padding:2em; background-color:#ffffff;text-align:left;">

				<div class="form-group">
					<label for="inputProductName">PRODUCT NAME</label>
					<input type="text" class="form-control" id="inputProductName" name="inputProductName" placeholder="GG Marmont crossbody bag">
				</div>

				<div class="form-row" >
					<div class="form-group col-md-4">
						<label for="inputPrice">PRICE</label>
						<input type="number" class="form-control" id="inputPrice" name="inputPrice" placeholder="999.00">
					</div>
					<div class="form-group col-md-4">
						<label for="inputDate">MANUFACTURER DATE</label>
						<input type="date" class="form-control" id="inputDate" name="inputDate">
					</div>
					<div class="form-group col-md-4">
						<label for="inputWarranty">WARRANTY</label>
						<select class="form-control" id="inputWarranty"  id="inputWarranty">
							<option selected>3 Days</option>
							<option selected>5 Days</option>
							<option selected>7 Days</option>
							<option selected>1 Month</option>
							<option selected>None</option>
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputSize">SIZE</label>
						<input type="text" class="form-control" id="inputSize" name="inputSize" placeholder="25 X 17 X 9 CM">
					</div>
					<div class="form-group col-md-6">
						<label for="inputState">BRAND</label>
						<select  class="form-control" id="inputState" name="inputState">
							<option selected>Anello</option>
							<option selected>Chanel</option>
							<option selected>Dior</option>
							<option selected>Guicci</option>
							<option selected>Lyn</option>
							<option selected>Ysl</option>
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="productDescription">PRODUCT DESCRIPTION</label>
						<textarea class="form-control" id="productDescription" name="productDescription" rows="6"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="coloranfimage">COLOR & IMAGE</label><br>
					<?php 
						$sql = "
							SELECT * FROM color ORDER BY colorId
 						";
						$result = mysqli_query($db, $sql);
					?>

					<div class="colornav-wrapper">
						<ul role="list" class="colornav-items">
							<?php while ($row = mysqli_fetch_array($result)) { ?>
								<li class="colornav-item">
									<button type="button" class="colornav-link" style="background: <?= $row["colorCode"] ?>;">
										<div class="caption"></div>
									</button>
								</li>
							<?php } ?>
						</ul>
					</div>
					
					<br>
					<?php $result = mysqli_query($db, $sql); ?>
					<?php while ($row = mysqli_fetch_array($result)) { ?>
						<button class="buttoncircle" style="background: <?= $row["colorCode"] ?>;"></button>
					<?php } ?>

					<!-- <div class="colornav-wrapper">
						<ul role="list" aria-label="Select a finish for iPhone 12 Pro" class="colornav-items">
							<li class="colornav-item">
								<button type="button" class="colornav-link">
									<figure class="colornav-swatch colornav-swatch-pacificblue">
										<figcaption class="colornav-label">แปซิฟิกบลู</figcaption>
									</figure>
								</button>
							</li>
							<li class="colornav-item">
								<button type="button" class="colornav-link current" aria-selected="true">
									<figure class="colornav-swatch colornav-swatch-gold">
										<figcaption class="colornav-label">ทอง</figcaption>
									</figure>
								</button>
							</li>
							<li class="colornav-item">
								<button type="button" class="colornav-link">
									<figure class="colornav-swatch colornav-swatch-graphite">
										<figcaption class="colornav-label">กราไฟต์</figcaption>
									</figure>
								</button>
							</li>
							<li class="colornav-item">
								<button type="button" class="colornav-link">
									<figure class="colornav-swatch colornav-swatch-silver">
										<figcaption class="colornav-label">เงิน</figcaption>
									</figure>
								</button>
							</li>
						</ul>
					</div> -->

				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<input type="file" id="inputFile" name="inputFile" onchange="showImagePreview(this)">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-6">
						<div id="imagePanel">
							<div class="imagePreview">
								<img src="#" id="imagePreview">
							</div>
						</div>
					</div>
					<div class="form-group col-md-3">
						<label for="inputStock">Stock</label>
						<input type="number" class="form-control" id="inputStock" name="inputStock" min="0">
					</div>
				</div>

				<div style="margin-top: 5em;">
					<button type="button" class="btn btn-primary btn-lg btn-block">ADD+</button>
					<button type="submit" class="btn btn-secondary btn-lg btn-block">SAVE</button>
					<button type="button" class="btn btn-secondary btn-lg btn-block">CANCLE</button>
				</div>

			</form>
		</div>
	</div>

</body>
</html>