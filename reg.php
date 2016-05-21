<?php
  mysql_connect("localhost","root","");
  mysql_select_db("bishka");
  if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['city']) && isset($_POST['password'])){
      $sql="select * from users where email='".$_POST['email']."'";
      $result=mysql_query($sql);
      if(mysql_num_rows($result)==0){
          $sqll="INSERT INTO `users`( `name`, `surname`, `email`, `password`, `city`)
              VALUES ('".$_POST['name']."','".$_POST['surname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['city']."')";
          mysql_query($sqll);
          header("location: http://localhost/bishka/");
      }
      else header("location: http://localhost/bishka/");
  }
  else header("location: http://localhost/bishka/registr.php");
 ?>
