<?php
	$subdirectory = "../../";
	include($subdirectory."lib/dbconnect.php3");
?>

<html>

<head>
	<title>AVRC Games</title>
</head>

<body bgcolor="#FFFFFF">

<h2 align="center">AVRC Games</h2>

<div align="center">
	<table border="0" width="50%">
		<tr>
			<td><a href="game_add.php3?mode=add">Add a new game</a>
		</tr>
	</table>

	<table border="1" width="50%">
<?php
	$games = mysql_query("
		SELECT 
			game_id, avrc_game.name AS game_name, avrc_system.name AS system_name
		FROM 
			avrc_game, avrc_system
		WHERE
			avrc_game.system_id = avrc_system.system_id
		ORDER BY
			avrc_game.name, avrc_system.name
	") or die("Query failed!");

	if (mysql_num_rows($games) != 0)
	{
		while($current_row = mysql_fetch_array($games))
		{
			print("\t\t<tr>\n");
			print("\t\t\t<td align=\"center\"><a href=\"game_add.php3?mode=edit&game_id=".$current_row["game_id"]."\">Edit</a></td>\n");
			print("\t\t\t<td>".$current_row["game_name"]."</td>\n");
			print("\t\t\t<td>".$current_row["system_name"]."</td>\n");
			print("\t\t\t<td align=\"center\"><a href=\"game_delete.php3?game_id=".$current_row["game_id"]."\">Delete</a></td>\n");
			print("\t\t</tr>\n");
		}
	}

	else
	{
		print("\t\t<tr>\n\t\t\t<td>There are currently no games</td>\n\t\t</tr>\n");
	}
?>
</table>
</div>

</body>

</html>

<?php
	include($subdirectory."lib/dbdisconnect.php3");
?>