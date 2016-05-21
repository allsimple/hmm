<?php
  mysql_connect("localhost","root","");
  mysql_select_db("bishka");
  session_start();
  if(isset($_SESSION['id'])){
      if(isset($_POST['com']) && isset($_POST['id'])){
          $sql="insert into comments(com,news_id,user_id) values('".$_POST['com']."',".$_POST['id'].",".$_SESSION['id'].")";
          mysql_query($sql);
          ?>
            <hr>
          	<div class="description">
     					<h1 class="list-post-title" itemprop="headline"><span itemprop="name"><?php echo $_SESSION['name']." ".$_SESSION['surname']; ?></span></h1>
     					<div itemprop="description">
     						<p style="text-align: justify;"><?php echo $_POST['com']; ?></p>
     					</div>
     				</div>
     			<?php
      }
  }
 ?>
