
<!DOCTYPE html>
<html lang="ru-RU">
<head>
<meta charset="utf-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes"/>
<title>novosti</title>
<link href='css.css' rel='stylesheet'>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

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


<?php
		mysql_connect("localhost","root","");
		mysql_select_db("bishka");
		$sql="select * from news";
		$result=mysql_query($sql);
		while($row=mysql_fetch_assoc($result)){
				?>

<div class="rWYNoq7QC ryQxSNjtXwTZo">
		<div id="rygBDL8">
			<article class="post" >
				<div class="description">
					<h1 class="list-post-title" itemprop="headline">
						<a href="news.php?id=<?php echo $row['id']; ?>" itemprop="url">
							<span itemprop="name"><?php echo $row['head']; ?>
							</span>
						</a>
					</h1>
					<div itemprop="description">
						<p style="text-align: justify;"><?php echo $row['descr']; ?></p>
					</div>
				</div>
			</article>
		</div>
</div>
<?php
}
?>
</body>
</html>
