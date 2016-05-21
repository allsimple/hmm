<?php
    session_start();
    mysql_connect("localhost","root","");
    mysql_select_db("bishka");
    if(isset($_SESSION['id'])){
        if($_SESSION['id']==1){
            if(isset($_GET['id'])){
                if($_GET['id']!=1){
                    $sql="delete from users where id=".$_GET['id'];
                    mysql_query($sql);
                        $sql="delete from comments where user_id=".$_GET['id'];
                        mysql_query($sql);
                    header("location: admin.php");
                }
                else header("location: admin.php");
            }
            else header("location: admin.php");
        }
        else header("location: index.php");
    }
    else header("location: index.php");
 ?>
