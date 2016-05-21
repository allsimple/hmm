<?php
  session_start();
 ?>
<!doctype html>
<html>
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

    <div class="slider">

      <div class="slide active-slide">
        <div class="container">
          <div class="row">
            <div class="slide-copy col-xs-5">
              <h1>Планшеты NVIDIA получили поддержку Vulkan API </h1>
              <p>Компания NVIDIA выпустила обновление до Android 6.0.1 для планшета SHIELD Tablet K1, а также оригинального SHIELD Tablet. Апдейт исправляет различные ошибки и приносит ряд важных изменений. .</p>
              <a href="index2.html" style="font-family:Oswald;color:#898989">Читать</a>

            </div>
            <div class="slide-img col-xs-7">
              <img src="home.png" width="400px" height="400px" >
            </div>
          </div>
        </div>
      </div>

       <div class="slide">
        <div class="container">
          <div class="row">
            <div class="slide-copy col-xs-5">
              <h1>Samsung патентует смарт-часы со встроенным проектором</h1>
              <p>Компания Samsung ищет новый способ взаимодействия с "умными" часами. Об этом говорится в одном из патентов, который опубликовало американское бюро регистрации патентов и товарных знаков.</p>
              <a href="index2.html" style="font-family:Oswald;color:#898989">Читать</a>

            </div>
            <div class="slide-img col-xs-7">
              <img src="home2.png" width="400px" height="400px" >
            </div>
          </div>
        </div>
      </div>

       <div class="slide">
        <div class="container">
          <div class="row">
            <div class="slide-copy col-xs-5">
              <h1>Мини-компьютеры ZBOX Mini PC могут поместиться в кармане</h1>
              <p>Компания Zotac, известная выпуском материнских плат и видеокарт на базе процессоров NVIDIA, представила новую линейку миниатюрных компьютеров ZBOX Mini PC</p>
              <a href="index2.html" style="font-family:Oswald;color:#898989">Читать</a>

            </div>
            <div class="slide-img col-xs-7">
              <img src="home3.png" width="400px" height="400px" >
            </div>
          </div>
        </div>
      </div>

       <div class="slide">
        <div class="container">
          <div class="row">
            <div class="slide-copy col-xs-5">
              <h1>Apple патентует самообучающуюся систему для "умного" дома</h1>
              <p>На днях в сети появилась информация о новом патенте компании Apple, в котором описана работа центрального узла в "умном" доме.</p>
              <a href="index2.html" style="font-family:Oswald;color:#898989">Читать</a>

            </div>
            <div class="slide-img col-xs-7">
              <img src="home4.png" width="400px" height="400px" >
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="slider-nav">
      <a href="#" class="arrow-prev"><img src="arrow-prev.png"></a>
      <ul class="slider-dots">
        <li class="dot active-dot">&bull;</li>
        <li class="dot">&bull;</li>
        <li class="dot">&bull;</li>
        <li class="dot">&bull;</li>
      </ul>
      <a href="#" class="arrow-next"><img src="arrow-next.png"></a>
    </div>

    <script src="jquery.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>
