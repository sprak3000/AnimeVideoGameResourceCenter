<?php
	$subdirectory = "../../";
	include($subdirectory."lib/dbconnect.php3");
?>

<?php
	$name = addslashes($name);
	$faq_link_text = addslashes($faq_link_text);
	$description = addslashes($description);
	$review_link_text = addslashes($review_link_text);
	$ordering_info = addslashes($ordering_info);
	$alternate_title = addslashes($alternate_title);

	if ($game_id == "")
	{
		$series_link = mysql_query("
			INSERT INTO
					avrc_game
			VALUES
				('$game_id', '$system_id', '$release_date', '$price', '$faq_url', '$faq_link_text', '$description', '$review_url', 
				'$review_link_text', '$ordering_info', '$series_id', '$name', '$image_name', '$image_width', '$image_height', 
				'$alternate_title', '$rerelease_date', '$rerelease_price', '$rerelease_ordering_info')
		") or die("Could not insert game.");

		$game_id = mysql_insert_id();
	}

	else
	{
		$series_link = mysql_query("
			UPDATE
					avrc_game
			SET
				system_id = '$system_id',
				series_id = '$series_id',
				name = '$name',
				release_date = '$release_date',
				price = '$price',
				faq_url = '$faq_url',
				faq_link_text = '$faq_link_text',
				description = '$description',
				review_url = '$review_url',
				review_link_text = '$review_link_text',
				ordering_info = '$ordering_info',
				image_name = '$image_name',
				image_width = '$image_width',
				image_height = '$image_height',
				alternate_title = '$alternate_title',
				rerelease_date = '$rerelease_date',
				rerelease_price = '$rerelease_price',
				rerelease_ordering_info = '$rerelease_ordering_info'
			WHERE
				game_id = '$game_id'
		") or die("Could not update game.");

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
	}

	// Insert the company and genre entries.
	foreach ($genre_id as $genre)
	{
		$insert_genre = mysql_query("
			INSERT INTO
				avrc_game_genre
			VALUES
				($game_id, $genre)
		") or die("Could not insert into avrc_game_genre");
	}

	foreach ($company_id as $company)
	{
		$insert_company = mysql_query("
			INSERT INTO
				avrc_game_company
			VALUES
				($game_id, $company)
		") or die("Could not insert into avrc_game_company");
	}
?>

<html>

<head>
	<title><?php if ($link_id == "") {print("Edit");} else {print("Add");}?> a game</title>
</head>

<body bgcolor="#FFFFFF">

<h2 align="center"><?php if ($link_id == "") {print("Edit");} else {print("Add");}?> a game</h2>

<div align="center">
	<table border="0">
		<tr>
			<td>
				Game inserted/modified.
				
				<p><a href="games.php3">Return to games</a>
			</td>
		</tr>
	</table>
</div>

</body>

</html>

<?php
	include($subdirectory."lib/dbdisconnect.php3");
?>