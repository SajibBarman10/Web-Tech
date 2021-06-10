<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #0000FF;}
</style>
</head>
<body>  

<?php

// define variables and set to empty values


$nameErr = $emailErr = $degreeErr  = $genderErr = $dateErr = $bloodErr= "";

$name = $email =  $gender =$degree = $date=  $blood="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-'\.\ ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name = "";
    }
  }


  
  if (empty($_POST["email"]))
   {
    $emailErr = "Email is required";
  } else 
  {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email = "";
    }
  }


   if (empty($_POST["gender"]))
    {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


  if (empty($_POST["$degree"]))
   { 
   	$degreeErr="Select degree";
   }else
    {
    	$degree =test_input($_POST["degree"]);
    }


if (empty($_POST["$date"]))
   { 
   	$dateErr="Select a date";
   }else
    {
    	$date =test_input($_POST["date"]);
    }


}
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<h2 style="color:#FF00FF"><b>PHP Form Validation Example</b></h2>
<p style="font-size: 20px"><span class="error"><b>* Required field</b></span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 



  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span><br>
  <br>

Degree:
<br><br>
<input type ="checkbox" name="degree" <?php if (isset($degree) && $degree=="female") echo "checked";?> value="SSC">SSC
<input type ="checkbox" name="$degree"<?php if (isset($degree) && $degree=="female") echo "checked";?> value="HSC">HSC
<input type ="checkbox" name="$degree"<?php if (isset($degree) && $degree=="female") echo "checked";?> value="BSc">BSc
<input type ="checkbox" name="$degree"<?php if (isset($degree) && $degree=="female") echo "checked";?> value="MSc">MSc
<span class="error">* <?php echo $degreeErr;?></span><br>
  <br>

Date:
<input type="date" id="date" name="date"
       value="dd-mm-yyyy"
       min="01-01-1900" max="1-12-3030"><br><br>

<span class="error">* <?php echo $dateErr;?></span><br>
  <br>


Blood Group:
   <select id="Blood group" name="Blood group">
    <option value="select "></option>
    <option value="Blood group 1">O+</option>
    <option value="Blood group 2">B+</option> 
    <option value="Blood group 3">A+</option>
  </select>
  <br><br>
















  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $degree;
echo "<br>";
echo $blood;
echo "<br>";
echo $gender;
?>
</body>
</html>
