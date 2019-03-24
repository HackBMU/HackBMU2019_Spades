<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wedding Planner</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Wedding Planner App</h2>
</div>
<div class="one">

</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <div class=logout>
    <?php  if (isset($_SESSION['username'])) : ?>
      <div class="two"
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    </div>
      <ol>
        <div class="one">
          <h2>Your options are:</h2>
    <h3>To book :</h1>
    <li>Venue</li>
    <li>Photographer</li>
    <li>Caterer</li>
    <li>Make-up Artist</li>
    <li>Hair-Stylist</li>
  </ol>
        </div>


        
      </div>

    <?php endif ?>
</div>
<form name="myform" action="index.php?action=contact_id" method="POST">
<div align="center" class="three">
<select name="product_id" required>
<option value="Venue">Venue</option>
<option value="Photographer">Photographer</option>
<option value="Caterer">Caterer</option>
<option value="Make-up Artist">Make-up Artist</option>
<option value="Hair-Stylist">Hair-Stylist</option>
</select>
  <input type="submit" value="Proceed">

</div>
</form>
		
</body>
</html>
