<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dodaj ekran</title>
</head>
<body>
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
		
				include "funkcje.php";
				$pracownik = new Pracownik;
				$polaczenie = $pracownik->Polacz();
				$zapytanie = "UPDATE pracownicy SET nazwisko='Przetestowane' WHERE imie='Test'";	
				mysqli_query($polaczenie, $zapytanie);
				
				if(mysqli_query($polaczenie, $zapytanie))
					echo '<font color="#15dc00">'."Edytowany wpis.".'</font>'.'<br><br>';
				else
					echo "BŁĄD: Nie można wykonać polecenia $zapytanie. " . mysqli_error($polaczenie);

				mysqli_close($polaczenie);
	?>
	
	<form action="test_edytuj_pracownik.php" method="post">
	<table>
		<b>Edycja:</b><br>
	</table>	
	</form>
	
	
</body>
</html>