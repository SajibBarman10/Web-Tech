<?php 
include "../model/model.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
 {
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["newpass"]))  
      {  
           $name_err = "new pass is required";  
      }
    else {
  $EmptyArr = str_word_count($_POST['newpass']);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z- ]*$/",$_POST['newpass']) || $EmptyArr<2) 
      $name_err = "Only can contain whitespace,period,dash and alphabetic letter. Name must be consits of at least two words";
    
    
  }
       if(empty($_POST["rnewpass"]))  
      {  
           $email_err = "re new pass is required";  
      }  

       
      else  
      {  
          
if (isset($_POST['submit'])) {
     $data['newpass'] = $_POST['newpass'];
     $data['curpass'] = $_POST['curpass'];
     $data['rnewpass'] = $_POST['rnewpass'];
   
    
 
 
   if (changepass($data)) {
    echo 'You have  password your password.';

       
   }
 } else {
     echo 'There is an occued created.';
 }

      }  
 }  
 }

?>