
<?php 
    const SEX_NOT_INFO = '-';
    const SEX_MALE = 'male';
    const SEX_FEMALE = 'female';
?>

<h2 style='text-align:center'>Add Addition Address</h2>

<?php 
    if ($model->hasErrors()) {
       foreach($model->getErrors() as $error) {
            echo '<h4 style="color:red">' . $error[0] . '</h4><br>';
       }
    }
?>

<form method="post" style='width:70%'>
  <div class="form-group">
    <label for="zip">Zip</label>
    <input type="text" pattern="[0-9]*" name='zip' class="form-control" id="zip" placeholder="Enter Zip-Code">
  </div>
  <div class="form-group">
    <label for="country">Country</label>
    <input type="text" pattern="[A-Z][A-Z]" name='country' class="form-control" id="country" placeholder="Enter Country Upper case 2 letters">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" name='city' class="form-control" id="city" placeholder="Enter City name">
  </div>
  <div class="form-group">
    <label for="street">Street</label>
    <input type="text" name='street' class="form-control" id="street" placeholder="Enter Street">
  </div>
  <div class="form-group">
    <label for="house">House</label>
    <input type="text" name='house' class="form-control" id="house" placeholder="Enter house number">
  </div>
  <div class="form-group">
    <label for="office">Office / Flat</label>
    <input type="text" name='office' class="form-control" id="office" placeholder="Enter office number">
  </div>
    
    <button type="submit" class="btn btn-primary">Add</button>
</form>
