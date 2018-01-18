<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dodaj ekran</title>
</head>
<body>
	<?php
			include "funkcje.php";
				$klient = new Klient;
				$polaczenie = $klient->Polacz();
				$rezultat = $klient->Pobierz_klientow($polaczenie);
				$ile = mysqli_num_rows($rezultat);
				echo "znaleziono:".$ile;
				echo " ";
				if($polaczenie === false)
					die("BŁĄD: Nie można połączyć " . mysqli_connect_error());

				$zapytanie = "INSERT INTO klienci (ID, imie, nazwisko, pesel, numer_telefonu, adres_zamieszkania, kod_pocztowy, seria_dowodu, email)
													VALUES (NULL, 'Test', 'Test1', '1111', '1111', 'Test4', 'Test5', 'Test6', 'Test7')";
				
				if(mysqli_query($polaczenie, $zapytanie))
					echo '<font color="#15dc00">'."Poprawnie dodano wpis.".'</font>'.'<br><br>';
				else
					echo "BŁĄD: Nie można wykonać polecenia $zapytanie. " . mysqli_error($polaczenie);

				mysqli_close($polaczenie);

	?>
	
	<form action="test_dodanie.php" method="post">
	<table>
		<b>TEST:</b><br>
	</table>	
	</form>
	
	
</body>
</html>