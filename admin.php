<?php
  session_start();
  if(isset($_SESSION['id'])){
    if($_SESSION['id']==1){
    ?>
      <!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title></title>
          <link href='css.css' rel='stylesheet'>
          <link href="bootstrap.min.css" rel="stylesheet">
          <link href="style.css" rel="stylesheet">
           <script type="text/javascript" src="jquery.min.js">
           </script>
        </head>
        <body>
          <div class="header">
            <div class="container">
              <a href="#" class="logo-icon">
                <img src="logo.png" style="height:50px;width:50pxS">
              </a>

              <ul class="menu">
                <li><a href="#">Форум</a></li>
                <li><a href="#">Магазин</a></li>
                <li><a href="novosti.php">Новости</a></li>
                <li><a href="#">Программы</a></li>
                <?php
                  if(empty($_SESSION['id'])){
                ?>
                <li><a href="registr.php">Регистрация</a></li>
                <li><a href="login.php">Вход</a></li>
                <?php }
                    else if($_SESSION['id']==1){
                      ?>
                      <li><a href="logout.php">Выйти</a></li>

                      <li><a href="admin.php">Админ</a></li>

                      <?php
                    }else {
                ?>
                <li><a href="logout.php">Выйти</a></li>
                <?php } ?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle">Еще <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Вакансии</a></li>
                    <li><a href="#">Медиа</a></li>
                    <li><a href="#">Новичку</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>


          <form action="insert.php" method="post">
            <input type="text" name="head" style="width:70%" placeholder="header">
            <textarea name="new" placeholder="description" style="width:70%"></textarea>
            <input type="submit">
          </form>
          <table class="table table-inverse">
            <tr>
              <td>ID</td><td>Name</td><td>Surname</td><td>Email</td><td>City</td><td>delete</td>
            </tr>
           

		   <?php
                mysql_connect("localhost","root","");
                mysql_select_db("bishka");
                $sql="select * from users where not id=1";
                $result=mysql_query($sql);
                while($row=mysql_fetch_assoc($result)){
                  ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['surname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">del</a></td>
                  </tr>

                  <?php
                }
             ?>
          </table>
        </body>
      </html>
    <?php
    }
    else header("location: http://localhost/bishka/");
  }
  else header("location: http://localhost/bishka/");
?>
