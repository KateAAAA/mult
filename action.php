<html>
	<head>
	<title>Форма</title>
	</head>

	<body>

	<?php

	// Получатель (измените на ваш e-mail адрес)
	$strEmail = "a.katyxa@mail.ru";

	// Получить пользовательские вводы
	$strSubject = $_POST["FIO"];
	$strMessage = $_POST["number"];

	mail($strEmail,$strSubject,$strMessage);
	echo "Mail Sent.";
	 
	
	?>


	</body>
	</html>
	