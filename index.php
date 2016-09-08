<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мультстудия</title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>
		  $(window).on("scroll", function() {
		    if ($(window).scrollTop() > 302){
		    	if (!($("div").is(".minilogo")))$('.container').append('<div class="minilogo"><img src="images/mini.png"/></div>');}
		    else
		    	if ($("div").is(".minilogo"))	$("div" ).remove(".minilogo");    	
		    });

		  $(window).on("scroll", function() {
		    if ($(window).scrollTop() > 302){
		    	$('#idmenu').removeClass('menu');
		    	$('#idmenu').addClass('menufixed');
		    }		    	
		    else {
		    	$('#idmenu').removeClass('menufixed');
		    	$('#idmenu').addClass('menu');
		    }   	
		    });
		</script>
    </head>

    <body>
    	<div class="container"><div class="company"><small>Центр цифровых технологий</small> <br> "Новатикус" </div> 	<div class="phone">Звоните: +7 (351) 751-12-67 </div>
    	</div>
    	<div class="testblog"></div>
		<div id = "container1">
			<div id="idmenu" class="menu">
			    <ul>
			      <li><a href="#Что_такое_мультстудия?" style="background:#fd8026">Что такое мультстудия?</a></li>
			      <li><a href="#Что_мы_делаем_на_занятиях?" style="background:#0d9cea">Что делаем на занятиях?</a></li>
			      <li><a href="#Примеры_проектов" style="background:#a349a3">Примеры проектов</a></li>
			      <li><a href="#Почему_именно_мы" style="background:#edd31c">Почему именно мы?</a></li>
			      <li><a href="#Карта_и_контакты" style="background:#ed1c22">Карта и контакты</a></li>
			    </ul>
			</div>
			<div class="podcontainer1">
				<div id="Что_такое_мультстудия?"></div>			
				<h1 style="color:yellow" class="headerBlog">Что такое Мультстудия?</h1>
				<div id ="blogInfo">
					<ul>
						<li>Целый год занятий мультипликацией stop-motion! (1 или 2 раза в неделю) <br>
		         		<a href="#">Что такое stop-motion?<a></li>
						<li>Не нужно уметь рисовать! Делать мультики в нашей студии сможет каждый!</li>
						<li>Развитие мелкой моторики</li>
						<li>Навыки работы с компьютерными программами (монтажа, озвучки, рисования)</li>
						<li>Навыки командной и проектной работы.</li>
						<li>Что ещё? Приходите на бесплатное занятие, мы всё вам расскажем! Заполните форму справа -->></li>
					</ul>
				</div>
				<div id ="makaka">
				<img src="images/obvlenia.png" alt="Формируем навыки работы с программами"/>
				</div>
				<div id ="formasvazi">
					<div class="bigText">Запишите ребенка <br>на <text style="color:black">бесплатное</text> занятие <br>прямо сейчас!</div>
					<form name="test" method="post">
						<ul>
							<li><input type="text" name="FIO" placeholder="Ваше ФИО"></br></li>
							<li><input type="text" name="number" placeholder="Ваш номер телефона"></li>
						</ul>
						<button class="bluebutton">Записаться на занятие</button>
						<div class="minitext">После получения Ваших контактных данных с Вами свяжется администратор нашего центра и согласует время занятия! Пожалуйста, будьте на связи!</div>					
					</form>	
					<small></small>			
				</div>
			</div>			
		</div>

		<div id = "container2">
			<div class="podcon2"></div> 
			<div id="Что_мы_делаем_на_занятиях?"></div>
			<h1 style="color:yellow" class="headerBlog">Что мы делаем на занятиях?</h1>
				<div class="zanatia">
			    <ul>
			      <li><img src="images/lepim.png"/><br>Лепим!</li>
			      <li><img src="images/stroim.png"/><br>Строим!</li>
			      <li><img src="images/virezaem.png"/><br>Вырезаем!</li>
			      <li><img src="images/risuem.png"/><br>Рисуем!</li>
			    </ul>
			</div>
			<h1 style="color:black" class="headerBlog">А пото-о-о-м...</h1>
				<div class="zanatia1">
				    <ul>
					    <li><img src="images/img1.png"/><br>Моделируем сцену, добавляем свет</li>
					    <li><img src="images/img2.png"/><br>Снимаем кадры</li>
					    <li><img src="images/img3.png"/><br>Монтируем видео, озвучиваем</li>
				    </ul>
				</div>
		</div>
		<div id="container3c">
			<h1 style="color:black" class="headerBlog" class="podcon3"><br>Еще немного старания....<br>И мультфильм готов!!</h1>
			<img src="images/children.png" class="children" />
		</div>		
		<div id = "container3">
			
			<div id="Примеры_проектов" class="podcon4"></div>
			<h1 style="color:black" class="headerBlog">Получаются вот такие проекты</h1>
			<div class="video">
				<ul>
					<li><iframe src="https://www.youtube.com/embed/xxv19zgnP34" frameborder="0" allowfullscreen></iframe></li>
					<li><iframe src="https://www.youtube.com/embed/xxv19zgnP34" frameborder="0" allowfullscreen></iframe></li>
					<li><iframe src="https://www.youtube.com/embed/xxv19zgnP34" frameborder="0" allowfullscreen></iframe></li>
				</ul>
				<br><br><br>
			</div>
			<div class="bluebutton"><a href="#Что_такое_мультстудия?">Немедленно записываю ребенка на бесплатное занятие!</a></div>
			<br><br><br>
		</div>

		<div id = "container4">
			<div id="Почему_именно_мы"></div>
			<h1 style="color:black" class="headerBlog">Почему еще стоит пойти в нашу студию</h1>
		</div>
	
		<div id = "contacts">
			<div id="Карта_и_контакты"></div>
			<h1 style="color:black" class="headerBlog">Карта и контакты</h1>

			<a class="dg-widget-link" href="http://2gis.ru/chelyabinsk/firm/70000001019995442/center/61.37535810470582,55.15696610424921/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Челябинска</a>
			<div class="dg-widget-link">
				<a href="http://2gis.ru/chelyabinsk/center/61.375358,55.156963/zoom/16/routeTab/rsType/bus/to/61.375358,55.156963╎Интернет технологии, ООО, компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Интернет технологии, ООО, компания</a>
			</div>
			<script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script>
			<script charset="utf-8">new DGWidgetLoader({"width":'100%',"height":600,"borderColor":"#a3a3a3","pos":{"lat":55.15696610424921,"lon":61.37535810470582,"zoom":16},"opt":{"city":"chelyabinsk"},"org":[{"id":"70000001019995442"}]});</script>
			<noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
			<br><br><br>
			<div class="bluebutton" ><a href="#Что_такое_мультстудия?">Хочу получить бесплатный урок для ребенка!</a></div>
		</div>

		<div id="footer">
			<div class="footertext">
				ООО "Интернет технологии" (с) 2014-2016<br>
				г. Челябинск, ул. Энтузиастов, 12, офис 607<br>
				751-12-67
			</div>
		</div>
    </body>
</html>


