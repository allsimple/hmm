<?php
  mysql_connect("localhost","root","");
  mysql_select_db("bishka");
  session_start();
  if(isset($_SESSION['id'])){
      if($_SESSION['id']==1){
          if(isset($_POST['head']) && isset($_POST['new'])){
              $sql="insert into news(head,descr)
                VALUES('".$_POST['head']."','".$_POST['new']."')";
              mysql_query($sql);
              header("location: admin.php");
          }
          else header("location: admin.php");
      }
      else header("location: index.php");
  }
  else header("location: index.php");
 ?>
