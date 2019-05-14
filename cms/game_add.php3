<?php
	$subdirectory = "../../";
	$multiselect = 1;
	include($subdirectory."lib/dbconnect.php3");
?>

<?php
	if ($mode == "edit")
	{
		$game = mysql_query("
			SELECT
				*
			FROM
				avrc_game
			WHERE
				game_id = $game_id
		") or die ("Could not retrieve link.");

		while ($current_row = mysql_fetch_array($game))
		{
			$game_id = $current_row["game_id"];
			$system_id = $current_row["system_id"];
			$series_id = $current_row["series_id"];
			$name = $current_row["name"];
			$release_date = $current_row["release_date"];
			$price = $current_row["price"];
			$faq_url = $current_row["faq_url"];
			$faq_link_text = $current_row["faq_link_text"];
			$description = $current_row["description"];
			$review_url = $current_row["review_url"];
			$review_link_text = $current_row["review_link_text"];
			$ordering_info = $current_row["ordering_info"];
			$image_name = $current_row["image_name"];
			$image_width = $current_row["image_width"];
			$image_height = $current_row["image_height"];
			$alternate_title = $current_row["alternate_title"];
			$rerelease_date = $current_row["rerelease_date"];
			$rerelease_price = $current_row["rerelease_price"];
			$rerelease_ordering_info = $current_row["rerelease_ordering_info"];
		}
	}

	include("../lib/avrc_select_list.php3");
?>

<html>

<head>
	<title><?php if ($mode == "edit") {print("Edit");} else {print("Add");}?> a Game</title>
</head>

<body bgcolor="#FFFFFF">

<h2 align="center"><?php if ($mode == "edit") {print("Edit");} else {print("Add");}?> a Game</h2>

<div align="center">
	<form method="GET" action="game_insert.php3">
		<input type="hidden" name="game_id" value="<?php print($game_id);?>">

		<table border="1" width="50%">
			<tr>
				<td>Game Name:</td>
				<td><input type="text" name="name" value="<?php print($name);?>" size="50" maxlength="100"></td>
			</tr>

			<tr>
				<td>Alternate Title:</td>
				<td><input type="text" name="alternate_title" value="<?php print($alternate_title);?>" size="50" maxlength="100"></td>
			</tr>

			<tr>
				<td>Series:</td>
				<td><?php print($series_select_list);?></td>
			</tr>

			<tr>
				<td>System:</td>
				<td><?php print($system_select_list);?></td>
			</tr>

			<tr>
				<td>Company:</td>
				<td><?php print($company_multiselect_list);?></td>
			</tr>

			<tr>
				<td>Genre(s):</td>
				<td><?php print($genre_multiselect_list);?></td>
			</tr>

			<tr>
				<td>Release Date:</td>
				<td><input type="text" name="release_date" value="<?php print($release_date);?>" size="10" maxlength="10"></td>
			</tr>

			<tr>
				<td>Re-Release Date:</td>
				<td><input type="text" name="rerelease_date" value="<?php print($rerelease_date);?>" size="10" maxlength="10"></td>
			</tr>

			<tr>
				<td>Price:</td>
				<td><input type="text" name="price" value="<?php print($price);?>" size="6" maxlength="6"></td>
			</tr>

			<tr>
				<td>Re-Release Price:</td>
				<td><input type="text" name="rerelease_price" value="<?php print($rerelease_price);?>" size="6" maxlength="6"></td>
			</tr>

			<tr>
				<td>Description:</td>
				<td><textarea name="description" rows="5" cols="80"><?php print($description);?></textarea></td>
			</tr>

			<tr>
				<td>FAQ Link Text:</td>
				<td><input type="text" name="faq_link_text" value="<?php print($faq_link_text);?>" size="50" maxlength="100"></td>
			</tr>

			<tr>
				<td>FAQ URL:</td>
				<td><input type="text" name="faq_url" value="<?php  print($faq_url);?>" size="50" maxlength="255"></td>
			</tr>

			<tr>
				<td>Review Link Text:</td>
				<td><input type="text" name="review_link_text" value="<?php print($review_link_text);?>" size="50" maxlength="100"></td>
			</tr>

			<tr>
				<td>Review URL:</td>
				<td><input type="text" name="review_url" value="<?php  print($review_url);?>" size="50" maxlength="255"></td>
			</tr>

			<tr>
				<td>Ordering Info:</td>
				<td><input type="text" name="ordering_info" value="<?php print($ordering_info);?>" size="50" maxlength="50"></td>
			</tr>

			<tr>
				<td>Re-release Ordering Info:</td>
				<td><input type="text" name="rerelease_ordering_info" value="<?php print($rerelease_ordering_info);?>" size="50" maxlength="50"></td>
			</tr>

			<tr>
				<td>Image Name:</td>
				<td><input type="text" name="image_name" value="<?php print($image_name);?>" size="50" maxlength="200"></td>
			</tr>

			<tr>
				<td>Image Width:</td>
				<td><input type="text" name="image_width" value="<?php print($image_width);?>" size="5" maxlength="5"></td>
			</tr>

			<tr>
				<td>Image Height:</td>
				<td><input type="text" name="image_height" value="<?php print($image_height);?>" size="5" maxlength="5"></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="link_submit" value="Submit Game"></td>
			</tr>
		</table>
	</form>
</div>

</body>

</html>

<?php
	include($subdirectory."lib/dbdisconnect.php3");
?>