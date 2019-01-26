<?php 
session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhost/kolkata example/home.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/designplace.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body id="bg">


<form id="new-img" action="visit.php" method="post">
 <div class="card bg-primary">
   <h2 class="text-center">Hello,<?php echo $_SESSION['username']; ?></br></h2>
</div> 
 <div class="card bg-primary  " style="width:25rem;">
    
    
    <label for="exampleFormControlInput1">Choose Your Location:</label>
	
    <select  class="form-control" name="select1">
    <option>Garia</option>
      <option>Esplanade</option>
      <option>Park Street</option>
      <option>Salt Lake Sector-V</option>
      <option>Maidan</option>
    </select>
	Choose Your Cost Range:
    <select class="form-control" name="select2">
      <option>10-100</option>
      <option>100-400</option>
      <option>500-1000</option>
      <option>1000-3000</option>
      <option>>3000</option>
    </select>
	<input type="submit" value="Submit"/>
	</div>
	
	<div class="card" style="width:25rem;">
	<a href="home.php" class="text-danger">Logout</a>
	</div>
 
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>