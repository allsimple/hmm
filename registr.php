
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta charset="utf-8">
  <title>Форма регистрации</title>
  <link href='css.css' rel='stylesheet'>
  <link href="bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">

  </head>

    <style>

       * {box-sizing: border-box;
margin: 0;
padding: 0;
border: none;
font-family: arial;
font-size: 11pt;}

form {display: block;
position: relative;
width: 50%;
min-width: 550px;
height: auto;
margin:30px auto;
}

fieldset {display: block;
position: relative;
border: 1px solid #888;
width: 100%;
height: auto;
padding-left: 20px;
padding-bottom: 20px;
}

input {border: 1px solid #888;
width: 220px;
height: 20px;
}

input:focus {outline: none;}


fieldset p {
border: 0px solid black;
width: 330px;
overflow: auto;
margin-bottom: 10px;

background-repeat: no-repeat;
background-position: right 3px;
padding-right: 17px;}

fieldset p span {float: left;
line-height: 22px;}

fieldset p input {float: right;}

p:first-child {margin-top: 20px;}

p.city, p.repeat {margin-bottom: 35px;}


p.kart {background: url(code.jpg);
background-repeat: no-repeat;
background-position: left top;
height: 32px;
border: 0px solid black;
padding-top: 4px;}




div.subm {display: block;
position: relative;
width: 100%;
height: 43px;
margin-top: 10px;
background-color: #e3e3e3;
border-radius: 5px;}

p.text {background: none;}

button {displat: block;
position: absolute;
width: 150px;
height: 20px;
border: 0px solid black;
background: -webkit-linear-gradient(top, #9BD274 0%, #679E40 50%, #9BD274 100%);
background: linear-gradient(to bottom, #9BD274 0%, #679E40 50%, #9BD274 100%);
border-radius: 10px;
left: 0;
right: 0;
top: 0;
bottom: 0;
margin: auto;
color: #fff;
font-family: arial;
font-size: 10pt;}

button:focus {outline: none;}

button:active {box-shadow:inset 0px 0px 0px 1px #888;}

    </style>

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


     <form action="reg.php" onsubmit="return validate()" method="post" name="form">

  <fieldset>

  <p id="f"><span>Имя:</span> <input type="text" name="name"/></p>
    <p><span>Фамилия:</span> <input type="text" name="surname"/></p>
    <p class="city"><span>Город:</span> <input type="text" name="city" /></p>
    <p><span>Эл. почта:</span> <input type="email"  name="email"/></p>
    <p><span>Пароль:</span> <input type="password"  name="password"/></p>
    <p class="repeat"><span>Повторите:</span> <input type="password"  name="rpassword"/></p>
  <p class="text">Введите число с картинки:</p>
    <p class="kart"><input type="text" name="num" value=""/></p>




  </fieldset>

  <div class="subm">
    <button type="submit">Зарегистрироваться</button>
  </div>

</form>
<script type="text/javascript">
    function validate(){
        var name=document.forms['form']['name'].value;
        var surname=document.forms['form']['surname'].value;
        var city=document.forms['form']['city'].value;
        var email=document.forms['form']['email'].value;
        var password=document.forms['form']['password'].value;
        var rpassword=document.forms['form']['rpassword'].value;
        var num=document.forms['form']['num'].value;
        if(name.length<2){
            alert("Короткое имя");
            return false;
        }
        if(surname.length<2){
            alert("Короткая фамилия");
            return false;
        }
        if(city.length<2){
            alert("Короткий город");
            return false;
        }
        if(name.length<2){
            alert("Короткая почта");
            return false;
        }

        if(password.length<8){
          alert("Короткий пароль");
          return false;
        }
        if(password!=rpassword){
          alert("Разные пароли");
          return false;
        }
        if(num!=55102){
          alert("Число не то");
          return false;
        }
    }
</script>
</body>
</html>
