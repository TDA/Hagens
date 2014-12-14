<!doctype html>
<html>
<head></head>
<body>
<?php
$fname=$_POST[fname];
$lname=$_POST[lname];
$dob=$_POST[dob];
$address=$_POST[address];
$city=$_POST[city];
$state=$_POST[state];
$sex=$_POST[sex];
$contact=$_POST[number];
$email=$_POST[email];
$errors;
// check for valid name
$pattern="^[a-zA-Z' ]+$";
if( !ereg($pattern,$fname) && !ereg($pattern,$lname) )
   $errors[1]="Enter a valid name ";

// check for valid contact number
$pattern="^[0-9]{10}$";
if( !preg_match($pattern,$contact))
 $errors[2]=" Enter a valid mobile contact number ";

// check for valid e-mail address
$pattern="^.+@.+\.com$";
if(! preg_match($pattern,$email))
$errors[3]="Enter a valid email address ";

foreach($errors as $error)
  echo "$error";

$dbc=mysqli_connect('localhost','root',' ','sudarshan') or die('Error in connection mysql');
$query="INSERT INTO sudarshan (first_name,last_name,dob,address,contact,city,state,email,sex) values($fname,$lname,$dob,$address,$contact,$city,$state,$email,$sex)";
$result=mysqli_query($dbc,$query) or die('Error in connection mysql');
mysqli_close($dbc);
?>
</body>
</html>



  