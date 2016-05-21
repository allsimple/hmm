<?php
  mysql_connect("localhost","root","");
  mysql_select_db("bishka");
  if(isset($_POST['email']) && isset($_POST['password'])){
    $sql="select * from users where email='".$_POST['email']."' and password='".$_POST['password']."'";
    $result=mysql_query($sql);
    if(mysql_num_rows($result)>0){
        $row=mysql_fetch_assoc($result);
        session_start();
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['surname']=$row['surname'];
        $_SESSION['email']=$row['email'];
        $_SESSION['city']=$row['city'];
        header("location: http://localhost/bishka/");
    }
    else header("location: http://localhost/bishka/login.php");
  }
  else header("location: http://localhost/bishka/login.php");
 ?>
