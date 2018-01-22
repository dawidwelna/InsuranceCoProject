<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dodaj ekran</title>
</head>
<body>
	<?php
			include "funkcje.php";
				$pracownik = new Pracownik;
				$polaczenie = $pracownik->Polacz();
				if($polaczenie === false)
					die("BŁĄD: Nie można połączyć " . mysqli_connect_error());
				
				$zapytanie = "DELETE FROM pracownicy WHERE imie ='Test'";
				
				if(mysqli_query($polaczenie, $zapytanie))
					echo '<font color="#15dc00">'."Usunieto wpis.".'</font>'.'<br><br>';
				else
					echo "BŁĄD: Nie można wykonać polecenia $zapytanie. " . mysqli_error($polaczenie);

				mysqli_close($polaczenie);

	?>
	
	<form action="test_usuwanie_pracownik.php" method="post">
	<table>
		<b>Usuwanie:</b><br>

	</table>	
	</form>

	
</body>
</html>