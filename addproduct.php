<!DOCTYPE html>
<html lang="en">

<?php include("web_assets.php"); ?>

<body>
  
<?php include("navbar.php");?>
<center>
<b><p class="topic" style="padding-top:2%;">ADD PRODUCT</p></b>

<form style="width:60%; padding:2%; background-color:white;  text-align:left;">

  <div class="form-group">
    <label for="inputProductName">PRODUCT NAME</label>
    <input type="text" class="form-control" id="inputProductName" placeholder="GG Marmont crossbody bag">
  </div>

  <div class="form-row" >
    <div class="form-group col-md-4">
      <label for="inputPrice">PRICE</label>
      <input type="Price" class="form-control" id="inputPrice" placeholder="999.00">
    </div>
    <div class="form-group col-md-4">
      <label for="date">MANUFACTURER DATE</label>
      <input type="date" class="form-control" id="date">
    </div>
    <div class="form-group col-md-4">
      <label for="inputWarranty">WARRANTY</label>
      <select id="inputWarranty" class="form-control">
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
      <input type="text" class="form-control" id="inputSize" placeholder="25 X 17 X 9 CM">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">BRAND</label>
      <select id="inputState" class="form-control">
        <option selected>Anello</option>
        <option selected>Chanel</option>
        <option selected>Dior</option>
        <option selected>Guicci</option>
        <option selected>Lyn</option>
        <option selected>Ysl</option>
      </select>
    </div>
    <div class="form-group col-md-12">
        <label for="productDescription">PRODUCT DESCRIPTION</label>
        <textarea class="form-control" id="productDescription" rows="6"></textarea>
    </div>
  </div>
  <!-- <div style=" text-align:right;">
  <button type="submit" class="btn btn-primary" >Sign in</button>
  </div> -->

  <div class="form-group">
        <label for="coloranfimage">COLOR & IMAGE</label><br>
        <button class="buttoncircle" style="background: #B6B0E2;"></button>
        <button class="buttoncircle" style="background: #1B5893;"></button>
        <button class="buttoncircle" style="background: #C9EFBD;"></button>
        <button class="buttoncircle" style="background: #E95950;"></button>
        <button class="buttoncircle" style="background: #B08266;"></button>
        <button class="buttoncircle" style="background: #24212A;"></button>
        <button class="buttoncircle" style="background: #FFFFFF;"></button>
        <button class="buttoncircle" style="background: #FFE383;"></button>
        <button class="buttoncircle" style="background: #FEB877;"></button>
        <button class="buttoncircle" style="background: #C7F1FF;"></button>
        <button class="buttoncircle" style="background: #AEAEAD;"></button>
        <button class="buttoncircle" style="background: #FFDAF7;"></button>
        <button class="buttoncircle" style="background: #FFF4E2;"></button>
        <button class="buttoncircle" style="background: #EDD9BB;"></button>

    </div>

  <button type="submit" class="btn btn-primary btn-lg btn-block">ADD+</button>
  <button type="submit" class="btn btn-secondary btn-lg btn-block">SAVE</button>
  <button type="submit" class="btn btn-secondary btn-lg btn-block">CANCLE</button>







</form>
        



</center>

</body>
</html>