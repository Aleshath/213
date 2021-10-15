<?php
session_start();
if (!isset($_SESSION["theme"])){
  $_SESSION["theme"]="main";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>my-giro</title>
  <link rel="stylesheet" href="main.css" id="theme-link" >
  <link rel="stylesheet" href="<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
</head>

<header>
<div class="logo">
    <img src="image/mygiro.png" class="logo-img"> <!---лого сайта--->
    <span class="logo-title"></span>
</div>
     <div class="hor-menu">
         <ul>
             <b>
     <li><a href="#">+7 351 111 22 33</a></li>

     <li><a href="#"><img scr="image/call.jpg"></a></li>
     </ul>
</b>
</header>

<div class="theme-button" id="theme-button">Сменить тему</div>

<main class="main">
<article class="main_content">
  <p><!---lorem120---></p>
</article>
</main>
  <!-- блок слайдера -->
  <div class="carousel-wrapper" class="cvet_slaidera">
    <span id="item-1"></span>
    <span id="item-2"></span>
    <span id="item-3"></span>
    <span id="item-4"></span>
    <!-- 1й элемент слайдера -->
    <div class="carousel-item item-1">
      <p class="zagolovok_y_slaidera" class="cvet">Мы обслуживаем одинаково качественно как своих гарантийных клиентов, так и сторонние заказы.</p>
      <a class="arrow arrow-prev" href="#item-4"></a>
      <a class="arrow arrow-next" href="#item-1"></a>
    </div>
    <!-- 2й элемент слайдера -->
    <div class="carousel-item item-2">
      <p class="zagolovok_y_slaidera"  class="cvet">Если деталь сломалась — в нашем центре ее не будут ремонтировать, а сразу заменят на новую.</p>
      <a class="arrow arrow-prev" href="#item-1"></a>
      <a class="arrow arrow-next" href="#item-3"></a>
    </div>
    <!-- 3й элемент слайдера -->
    <div class="carousel-item item-3">
      <p class="zagolovok_y_slaidera"  class="cvet">Мы работаем с крупной сетью сервисных центров, ее филиалы находятся в 70 городах России.</p>
      <a class="arrow arrow-prev" href="#item-2"></a>
      <a class="arrow arrow-next" href="#item-4"></a>
    </div>
    <div class="carousel-item item-4">
      <p class="zagolovok_y_slaidera"  class="cvet">Гарантия действует в течении 3 лет!</p>
      <a class="arrow arrow-prev" href="#item-3"></a>
      <a class="arrow arrow-next" href="#item-1"></a>
    </div>
  </div>
<body>
<div class="wrapper">
    <div class="content">
<img src="image/elsam.jpg" class="kartinka" > <!---картинка с боку от текста--->
    </div>
    <div> <!---заголовок --->
    <p>
        <b class="texst2"  id="electro"  class="cvet"> <!---текст становиться больше--->
       Электросамокат
      </b>
      </p>
    <p class="texst"  class="cvet"> <!---текст про самокат--->
    Электросамокат - современный вариант простого самоката. Для того чтобы на нем кататься, нужно всего один раз оттолкнуться ногой от земли, обеспечив стартовое ускорение. Дальше устройство будет везти хозяина самостоятельно за счет встроенного электромотора. Если выбирать между моноколесом или электросамокатом, последний будет гораздо безопаснее в эксплуатации за счет наличия 2 колес (т.е. 2 точек опоры) и ручки для опоры руками.
</p>
    </div>
</div>


<div class="wrapper">
    <div class="content">
<img src="image/tov1.jpg" class="kartinka" >
    </div>
    <div>
    </p>
        <b class="texst2" id="gyro"  class="cvet"><!---товар---> <!---айди для ссылки--->
        Гироскутер
      </b>
      </p>
    <p class="texst"  class="cvet"><!---описание--->>
    Гироскутер представляет собой конструкцию из 2 колес, расположенных по бокам от наездника и соединенных поперечной планкой-корпусом. Внутри корпуса располагаются электродвигатели, аккумуляторные батареи и гироскопы, поддерживающие в горизонтальном положении площадку для ног.
Гироскутеры никогда не оснащаются рукоятками для рук. Устройства из 2 колес, поперечной площадки и рулевого столба называются сигвеями и управляются манипуляциями руками.<a href="#" ></a>
      </p>
    </div>
    </div>
</div>


<div class="wrapper">
    <div class="content">
<img src="image/tov4.jpg" class="kartinka" >
    </div>
    <div>
    </p>
        <b class="texst2" id="Sigvei"  class="cvet">
        Сигвей
      </b>
      </p>
    <p class="texst"  class="cvet">
    Сигвей - средство передвижения для одного человека, которое держит равновесие с помощью специальной автобалансирующей системы. Это своеобразный электрический скутер, самостоятельно удерживающий равновесие. Сигвеи бесшумны в работе, не загрязняют окружающую среду, работают на электрической энергии, накопленной батареей аккумуляторов.

      </p>
    </div>
    </div>
</div>
<table>
  <tr>
    <td>Вид</td> <!---таблица с указанием цен--->
    <td>Название</td>
    <td>Цена</td>
  </tr>
  <tr>
    <td><a href="#electro" class="silki">Электросамокат</a></td> <!---ссылка на айди--->
    <td>Yamato PES MINI</td>
    <td>15900</td>
  </tr>
  <tr>
    <td><a href="#gyro" class="silki">Гироскутер</a></td>
    <td>Smart Balance 6.5" Ver. 1</td>
    <td>8990</td>
  </tr>
  <tr>
    <td><a href="#Sigvei" class="silki">Сигвей</a></td>
    <td>Minirobot Mini PRO 36V Белый</td>
    <td>15990</td>
  </tr>
</table>
<div>
   <div class="bol" id="koms"> <!---блок с кансультатами--->

     Наши консультанты

   </div>
  <img class="imgkons" src="image/men1.png" alt="" >
<div class="kons">

Иванов Иван Иванович – квалифицированный специалист сервисного центра My Gyro.


</div>

<img class="imgkons" src="image/men2.png" alt="">
<div class="kons">

Пупкин Василий Васильевич – старший консультант My Gyro.

</div>


<img class="imgkons" src="image/men3.png" alt="">
<div class="kons">

Захаров Андрей Борисович – менеджер-консультант My Gyro.

</div>

</div>
<!---фильтр--->


<h1 class="zago">Фильтр</h1>
<div class="container">
<input type="radio" id="gyroskuter" name="color" />
<label for="gyroskuter" class="ba">Гироскутеры</label>
<input type="radio" id="segvei" name="color"/>
<label for="segvei" class="ba">Сигвеи</label>
<input type="radio" id="electrosam" name="color"/>
<label for="electrosam" class="ba">Электросамокаты</label>
<input type="radio" id="reset" name="color"/>
<label for="reset">Алл</label>

<div class="tile gyroskuter"><img src="image/tov1.jpg" class="filkar"></div>
<div class="tile segvei"><img src="image/tov4.jpg" class="filkar"></div>
<div class="tile gyroskuter"><img src="image/tov1.jpg" class="filkar"></div>
<div class="tile electrosam"><img src="image/tov7.jpg" class="filkar"></div>
<div class="tile gyroskuter"><img src="image/tov1.jpg" class="filkar"></div>
<div class="tile segvei"><img src="image/tov4.jpg" class="filkar"></div>
<div class="tile segvei"><img src="image/tov4.jpg" class="filkar"></div>
<div class="tile electrosam"><img src="image/tov7.jpg" class="filkar"></div>
<div class="tile gyroskuter"><img src="image/tov1.jpg" class="filkar"></div>
<div class="tile electrosam"><img src="image/tov7.jpg" class="filkar"></div>
<div class="tile segvei"><img src="image/tov4.jpg" class="filkar"></div>
<div class="tile electrosam"><img src="image/tov7.jpg" class="filkar"></div>
<div class="tile gyroskuter"><img src="image/tov1.jpg" class="filkar"></div>
<div class="tile gyroskuter"><img src="image/tov1.jpg" class="filkar"></div>
<div class="tile electrosam"><img src="image/tov7.jpg" class="filkar"></div>
<div class="tile segvei"><img src="image/tov4.jpg" class="filkar"></div>
</div>







<div class="zal"><a href="#"><img src="image/strelka.png" width="60px"></a></div> <!---бренды--->
  <div class="feeter">
    <div class="feater-img"></div>
      <img src="image/brand/br1.png" alt="" class="img-feet">
      <img src="image/brand/br2.png" alt="" class="img-feet">
      <img src="image/brand/br3.png" alt="" class="img-feet">
      <img src="image/brand/br4.png" alt="" class="img-feet">
    </div>
  </div>
    <div class="o2"> <!---ссылки с полезной информацией--->
  <div class="o">
  <a href="#" class="o"> о нас</a> <!---ссылка на краткую информацию о компании--->
</div>
  <div class="o">
    <a href="#koms" class="o">консультанты</a> <!---переход на часть с консультантами--->
  </div>
  <div class="o"> <!---почта--->
  <a href="#" class="o"> мыло</a>
  </div>
<script src="theme.js"></script>
</body>
</html>
