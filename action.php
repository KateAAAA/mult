<html>
	<head>
	<title>�����</title>
	</head>

	<body>

	<?php

	// ���������� (�������� �� ��� e-mail �����)
	$strEmail = "a.katyxa@mail.ru";

	// �������� ���������������� �����
	$strSubject = $_POST["FIO"];
	$strMessage = $_POST["number"];

	mail($strEmail,$strSubject,$strMessage);
	echo "Mail Sent.";
	 
	
	?>


	</body>
	</html>
	