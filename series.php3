<?php
	// Expecting series_id passed.

	$subdirectory = "../";
	$series_html = "";

	include($subdirectory."lib/dbconnect.php3");

	// Grab the series name.
	$series_name_query = mysql_query("
		SELECT
			name, image_name, image_width, image_height
		FROM
			avrc_series
		WHERE
			series_id = $series_id
	") or die("Could not get series name.");

	while ($current_row = mysql_fetch_array($series_name_query))
	{
		$series_name = $current_row["name"];
		$image_name = $current_row["image_name"];
		$image_width = $current_row["image_width"];
		$image_height = $current_row["image_height"];
	}

	$page_title = "Anime Video Game Resource Center : ".$series_name;

	include("avrc_header.php3");

	// Grab the links for the series.
	$series_links_query = mysql_query("
		SELECT
			series_url, series_link_text
		FROM
			avrc_series_link
		WHERE
			series_id = $series_id
		ORDER BY
			link_id
	") or die("Could not get links.");

	if (mysql_num_rows($series_links_query) != 0)
	{
		$series_html .= "<ul>\n<lh><strong>Useful Links</strong></lh>\n";

		while ($current_row = mysql_fetch_array($series_links_query))
		{
			$series_html .= "<li><a href=\"".$current_row["series_url"]."\">".$current_row["series_link_text"]."</a>\n";
		}

		$series_html .= "</ul>\n\n";
	}

	// For the series, find out which systems have a game for it.  Then, loop over the result set and find all the games
	// for that particular system.
	$systems_query = mysql_query("
		SELECT
			DISTINCT a_as.system_id AS system_id, a_as.name AS system_name
		FROM
			avrc_game AS a_ag, avrc_system AS a_as
		WHERE
			series_id = $series_id and
			a_ag.system_id = a_as.system_id
		ORDER BY
			a_as.name
	") or die("Could not fetch systems.");

	while ($current_row = mysql_fetch_array($systems_query))
	{
		$system_id = $current_row["system_id"];
		$series_html .= "<ul>\n<lh><strong>".$current_row["system_name"]."</strong></lh>\n";
	
		$games_query = mysql_query("
			SELECT
				game_id, name
			FROM
				avrc_game
			WHERE
				series_id = $series_id and
				system_id = $system_id
		") or die("Could not fetch games");

		while ($current_row = mysql_fetch_array($games_query))
		{
			$series_html .= "<li><a href=\"game.php3?game_id=".$current_row["game_id"]."\">".$current_row["name"]."</a>\n";
		}

		$series_html .= "</ul>\n\n";
	}
?>

<h2 align="center"><?php print($series_name);?></h2>

<table border=0 width="100%">
	<tr>
<?php
	if ($image_name != "")
	{
		print("<td valign=\"top\"><img src=\"images/series/".$image_name."\" width=\"".$image_width."\" height=\"".$image_height."\" border=\"0\" alt=\"".$series_name."\"></td>\n");
	}
?>
		<td valign="top">
			<?php print($series_html."\n");?>
		</td>
	</tr>
</table>

<?php
	include("avrc_footer.php3");
	include($subdirectory."lib/dbdisconnect.php3");
?>                                                                                                             