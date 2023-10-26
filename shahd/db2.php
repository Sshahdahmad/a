 <?php 
?> 
 
<center> 
<form method="post" action="LOGIN.php"> 
<h1>حذف البيانات</h1> 
  name: <input type="submit"  name="show" value ="عرض الكل"> 
<input type="text"  name="username" > 
<input type="submit"  name="delete" value ="حذف"> 
<input type="submit"  name="add" value ="أضافة"> 
<hr> 
 
 
<h1>تعديل البيانات</h1> 
ID: <input type="text"  name="id" value="id" > <br><br> 
name:<input type="text"  name="name" value="name" ><br><br> 
salary:<input type="text"  name="salary" value="salary" ><br><br> 
 
<input type="submit"  name="modefy" value ="تعديل"><br><br> 
<hr> 
 
 
</form> 
 
</center> 
<?php 
$connection = mysqli_connect ('localhost','root','employee'); 
  
//update 
if(isset($_POST['modefy'])){ 
    $idu= $_POST['id']; 
     $username= $_POST['name']; 
  $salaryu= $_POST['salary']; 
    
  
  $query="update users set name = '$username', salary= '$salaryu' where id= '$idu'"; 
 $result = mysqli_query ($connection,$query); 
 if ($result){ 
  echo "updated done"; 
   
}else {die('error'); 
 } 
} 
 
 
 
//delete 
if(isset($_POST['delete'])){ 
     $name= $_POST['username']; 
  $query="delete from users where name= '$name'"; 
 $result = mysqli_query ($connection,$query); 
 if ($result){ 
  echo "deleted done"; 
   
}else {die('error'); 
 } 
} 
 
 
 
 
//if($connection){ 
   
 // echo 'connected'; 
// }else 
// { 
 // die ('error'); 
// } 
 
 
 
 
if(isset($_POST['show'])){ 
 $query = 'select * from users'; 
 $result = mysqli_query($connection, $query); 
  
 if ($result){ 
 echo ' Success'; 
 echo '<table border ="1"> 
  
 <th>ID</th> 
 <th>NAME</th> 
 <th>PASSWORD</th> 
 <th>DEPARTMENT</th> 
 '; 
 while ($row =mysqli_fetch_row($result)){ 
   
  ECHO '<tr> 
  <td>'.$row[0].'</td> 
  <td>'.$row[1].'</td> 
  <td>'.$row[2].'</td> 
  <td>'.$row[3].'</td> 
  </tr>'; 
 } 
 } 
  else{ 
    
   die('error'.mysqli_error($connection)); 
  }  
 } 
 
 
 
 
 
 
?>