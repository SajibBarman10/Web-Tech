<?php  

include "../model/model.php";
 $message = '';   
 $error='';

 $name_err = $email_err = $uname_err = $pass_err = $cpass_err = $gender_err =$date_err= '';
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["uname"]))  
      {  
           $name_err = "Name is required";  
      }
    else {
  $EmptyArr = str_word_count($_POST['uname']);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z- ]*$/",$_POST['uname']) || $EmptyArr<2) 
      $name_err = "Only can contain whitespace,period,dash and alphabetic letter. Name must be consits of at least two words";
    
    
  }
       if(empty($_POST["email"]))  
      {  
           $email_err = "Email is required";  
      }  
    else {
    
    // check if e-mail address is well-formed
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $email_err = "Invalid email format";
      
    }
  }
       if(empty($_POST["usname"]))  
      {  
           $uname_err = "Username is required";  
      }  
       if(empty($_POST["pass"]))  
      {  
           $pass_err = "Password is required";  
      }
    else{
      if(!preg_match("/^(?=.*?[A-Za-z])(?=.*?[$@#%]).{8,}$/",$_POST['pass']))
      
        $pass_err = "Password is invalid";
      else
        $pass_err = "";}
       if(empty($_POST["cpass"]))  
      {  
           $cpass_er = "Confirm password filed cannot be empty";  
      } 
    else{
      if($_POST["cpass"]!=$_POST["pass"])
        $cpass_err = "Mismatched password.. Try again.";
    }
       
       if(!isset($_POST["gender"]))  
      {  
           $gender_err = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
    if(empty($_POST["dd"]))  
      {  
           $date_err = "date is required";  
      }  
       
      else  
      {  
          
if (isset($_POST['submit'])) {
     $data['usname'] = $_POST['usname'];
     $data['name'] = $_POST['name'];
     $data['email'] = $_POST['email'];
     $data['pass'] = $_POST['pass'];
     $data['gender'] = $_POST['gender'];
     $data['dd'] = $_POST['dd'];
     $data['mm'] = $_POST['mm'];
     $data['yy'] = $_POST['yy'];
    
 
 
   if (addStudent($data)) {
       
   }
 } else {
     echo 'You are not allowed to access this page.';
 }

      }  
 }  
 }
 ?>