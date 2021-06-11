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

$name = $email =  $gender = $date=  $blood= $degree[0]= $degree[1]= $degree[2]= $degree[3]="";

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


  if(!empty($_POST['degree']))
  {
    if (sizeof($_POST["degree"])<2){
    $degreeErr="Please select at least two fields";
    }
    else
    {
    $degreeErr="";
    $degree=$_POST['degree'];
    }
  }else $degreeErr="Please select at least two fields";


if (empty($_POST["date"])){
    $dateErr="Date of birth is required";
  }
  else {
    $dateErr = "" ;
    $date= $_POST["date"];
  }


 if (($_POST['blood'])==""){
    $bloodErr="Please select blood gorup";
  } else 
  {
    $bloodErr="";
    $blood=$_POST['blood'];
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
  <input type="checkbox" name="degree[0]" value="SSC" <?php if(isset($_POST['degree'][0])) echo "checked"; ?> >SSC 
  <input type="checkbox" name="degree[1]" value="HSC" <?php if(isset($_POST['degree'][1])) echo "checked"; ?> >HSC 
  <input type="checkbox" name="degree[2]" value="BSc" <?php if(isset($_POST['degree'][2])) echo "checked"; ?> >BSc 
  <input type="checkbox" name="degree[3]" value="MSc" <?php if(isset($_POST['degree'][3])) echo "checked"; ?> >MSc
  <span class="error">* <?php echo $degreeErr;?></span> 
  <br><br>

Date:
<input type="date" id="date" name="date" min="1900-01-01" max="2020-12-31"
      value="<?php echo $date;?>">
       <span class="error">* <?php echo $dateErr;?></span>
  <br><br>








  Blood Group:
   <select id="blood" name="blood">
    <option value=""></option>
 <option value="A+" <?php if($blood == 'O+'){ echo ' selected="blood"'; } ?> >O+</option>
    <option value="B+" <?php if($blood == 'A+'){ echo ' selected="blood"'; } ?> >A+</option>
    <option value="O+" <?php if($blood == 'B+'){ echo ' selected="blood"'; } ?> >B+</option>
    <option value="AB+" <?php if($blood == 'AB+'){ echo ' selected="blood"'; } ?> >AB+</option>
    <option value="O-" <?php if($blood == 'O-'){ echo ' selected="blood"'; } ?> >O-</option> 
    <option value="A-" <?php if($blood == 'A-'){ echo ' selected="blood"'; } ?> >A-</option>
    <option value="B-" <?php if($blood == 'B-'){ echo ' selected="blood"'; } ?> >B-</option>
    <option value="AB-" <?php if($blood == 'AB-'){ echo ' selected="blood"'; } ?> >AB-</option>
  </select> 
  <span class="error">* <?php echo $bloodErr;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>


<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo " ";
if (isset($_POST['degree'])){
  foreach($_POST['degree'] as $value)
  {
    echo $value.' ';
  }
  }
echo "<br>";
echo $date;
echo "<br>";

echo $blood;


?>
</body>
</html>
