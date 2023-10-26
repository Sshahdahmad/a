<?php 
  
  session_start(); 
  include "2.php";
    
 ?>     
<center>   
<form method="post" action="db.php">    
<h1>تسجيل جديد</h1>   
name:<input type="text"  name="name1" value="name" ><br><br>   
password:<input type="text"  name="password1" value="password" ><br><br>   
retype password:<input type="text"  name="password2" value="password" ><br><br>   
<button type="submit">انشاء حساب</button><br><br>  <a href="S.php">تسجيل دخول</a><pre>
<hr>     
</form>     
</center>   
<?php   
$connection = mysqli_connect ('localhost','root','','test_db');   
//add   
if(isset($_POST['add'])) 
{	
     $username= $_POST['name1'];   
  $passwordu= $_POST['password1'];   
      $passwordu2= $_POST['password2'];      
if($username !=='' && $passwordu !=='' && $passwordu==$passwordu2)  
{  
  $query="INSERT INTO users (uesr_name, password)
         VALUES ('$username', '$passwordu2')";
 $result = mysqli_query ($connection,$query);   
 if ($result){   
  echo "inserted done";      
}else {die('error');   
 }  }  }   ?>