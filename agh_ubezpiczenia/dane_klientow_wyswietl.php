<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
    <title>Dane osobowe</title>
</head>
<body>
	<form action="dane_klientow_wyswietl.php" method="post">
    <tr>
	<p>
		<td><input type="submit" name="menu" value="Menu" /></td>
	</p>
	</tr>
	</form>

    <table width="500" align="center" border="1" bordercolor="#d5d5d5"  cellpadding="0" cellspacing="0">
        <tr>
			<?php
			if ( isset( $_POST['menu'] ) )
			{
				header("Location: index.html");
			}
			include "funkcje.php";
				$klient = new Klient;
				$polaczenie = $klient->Polacz();
				$rezultat = $klient->Pobierz_klientow($polaczenie);
				$klient->Wyswitl($rezultat);

			?>
		</tr>

	</table>

</body>
</html>

