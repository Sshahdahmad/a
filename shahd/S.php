 <?php 
  
 session_start(); 
 include "2.php";
   
?>   
   
<center>   
<form method="post" action="SASA.php">   
  
<h1> تسجيل دخول</h1>   
name:<input type="text"  name="name" value="name" ><br><br>   
password:<input type="text"  name="password" value="password" ><br><br>   
  
<input type="submit"  name="signin" value ="تسجيل دخول"><br><br>   <a href="db.php">انشاء حساب</a><pre>
<hr>   
   
</form>   
   
</center>   
<?php   
$connection = mysqli_connect ('localhost','root','','employee');   
    
    
//add   
if(isset($_POST['signin']))
{	
     $username= $_POST['name'];   
  $passwordu= $_POST['password'];      
if($username !=='' && $passwordu !=='')  
{  
  $query="select * from users where name = '$username' && password = '$passwordu'";   
 $result = mysqli_query ($connection,$query);   
 if ($result){   
  echo "تم تجسيل الدخول بنجاح";   
     
}else {die('error');   
 }   
}    
}  
   
   
   
   
   
?>