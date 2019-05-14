<?php
	$subdirectory = "../../";
	include($subdirectory."lib/dbconnect.php3");
?>

<html>

<head>
	<title>AVRC Game Deleted</title>
</head>

<body bgcolor="#FFFFFF">

<?php
	$delete_game = mysql_query("
		DELETE FROM
			avrc_game
		WHERE
			game_id = $game_id
	") or die("Could not delete game!");

	// Erase all company and genre entries.
	$delete_genre = mysql_query("
		DELETE FROM
			avrc_game_genre
		WHERE
			game_id = $game_id
	");

	$delete_company = mysql_query("
		DELETE FROM
			avrc_game_company
		WHERE
			game_id = $game_id
	");
?>

<h2 align="center">Delete a Game</h2>

<div align="center">
	<table border="0">
		<tr>
			<td>
				Link deleted.
			
				<p><a href="games.php3">Return to Games</a>
			</td>
		</tr>
	</table>
</div>

</body>

</html>

<?php
	include($subdirectory."lib/dbdisconnect.php3");
?>