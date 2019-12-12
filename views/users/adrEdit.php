
<h2 style='text-align:center'>Edit Addition address</h2>

<?php 
    if (isset($errors)) {
       foreach($errors as $error) {
            echo '<h4 style="color:red">' . $error[0] . '</h4><br>';
       }
    }
?>

<form method="post" style='width:70%'>
  <div class="form-group">
    <label for="zip">Zip</label>
    <input value="<?php echo $adr->zip; ?>" type="text" pattern="[0-9]*" name='zip' class="form-control" id="zip" placeholder="Enter Zip-Code">
  </div>
  <div class="form-group">
    <label for="country">Country</label>
    <input value="<?php echo $adr->country; ?>" type="text" pattern="[A-Z][A-Z]" name='country' class="form-control" id="country" placeholder="Enter Country Upper case 2 letters">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input value="<?php echo $adr->city; ?>" type="text" name='city' class="form-control" id="city" placeholder="Enter City name">
  </div>
  <div class="form-group">
    <label for="street">Street</label>
    <input value="<?php echo $adr->street; ?>" type="text" name='street' class="form-control" id="street" placeholder="Enter Street">
  </div>
  <div class="form-group">
    <label for="house">House</label>
    <input value="<?php echo $adr->house; ?>" type="text" name='house' class="form-control" id="house" placeholder="Enter house number">
  </div>
  <div class="form-group">
    <label for="office">Office / Flat</label>
    <input value="<?php echo $adr->office; ?>" type="text" name='office' class="form-control" id="office" placeholder="Enter office number">
  </div>
    
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
