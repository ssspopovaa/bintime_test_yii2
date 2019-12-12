
<?php 
    const SEX_NOT_INFO = '-';
    const SEX_MALE = 'male';
    const SEX_FEMALE = 'female';
?>

<h2 style='text-align:center'>Edit User</h2>

<?php 
    if (isset($errors)) {
       foreach($errors as $error) {
            echo '<h4 style="color:red">' . $error[0] . '</h4><br>';
       }
    }
?>

<form method="post" style='width:70%'>
  <div class="form-group">
    <label for="login">Login</label>
    <input value="<?php echo $user->login; ?>" type="text" name='login' class="form-control" id="login" aria-describedby="emailHelp" placeholder="Enter login">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input value="<?php echo $user->password; ?>" type="password" name='password' class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input value="<?php echo $user->name; ?>" type="text" name='name' class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="surname">Surname</label>
    <input value="<?php echo $user->surname; ?>" type="text" name='surname' class="form-control" id="surname" placeholder="Sername">
  </div>
  <div class="form-group">
    <label for="sex">Sex</label>
    <select name='sex'>
        <option disabled >Select Sex</option>
        <option value = <?php echo SEX_NOT_INFO ?>><?php echo SEX_NOT_INFO ?></option>
        <option value = <?php echo SEX_MALE ?>><?php echo SEX_MALE ?></option>
        <option value = <?php echo SEX_FEMALE ?>><?php echo SEX_FEMALE ?></option>
    </select>
  <div class="form-group">
    <label for="email">Email</label>
    <input value="<?php echo $user->email; ?>" type="email" name='email' class="form-control" id="email" placeholder="Email">
  </div>
    
  <h4>Address</h4>  
  <div class="form-group">
    <label for="zip">Zip</label>
    <input value="<?php echo $user->zip; ?>" type="text" pattern="[0-9]*" name='zip' class="form-control" id="zip" placeholder="Enter Zip-Code">
  </div>
  <div class="form-group">
    <label for="country">Country</label>
    <input value="<?php echo $user->country; ?>" type="text" pattern="[A-Z][A-Z]" name='country' class="form-control" id="country" placeholder="Enter Country Upper case 2 letters">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input value="<?php echo $user->city; ?>" type="text" name='city' class="form-control" id="city" placeholder="Enter City name">
  </div>
  <div class="form-group">
    <label for="street">Street</label>
    <input value="<?php echo $user->street; ?>" type="text" name='street' class="form-control" id="street" placeholder="Enter Street">
  </div>
  <div class="form-group">
    <label for="house">House</label>
    <input value="<?php echo $user->house; ?>" type="text" name='house' class="form-control" id="house" placeholder="Enter house number">
  </div>
  <div class="form-group">
    <label for="office">Office / Flat</label>
    <input value="<?php echo $user->office; ?>" type="text" name='office' class="form-control" id="office" placeholder="Enter office number">
  </div>
    
    <button type="submit" class="btn btn-primary">Edit</button>
</form>
