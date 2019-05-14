<?php
	// Expecting game_id passed.

	$subdirectory = "../";

	include($subdirectory."lib/dbconnect.php3");

	// Grab the game info.
	$game_query = mysql_query("
		SELECT
			system_id, price, faq_url, faq_link_text, description, review_url, review_link_text, ordering_info,
			name, image_name, image_width, image_height, release_date, alternate_title,
			rerelease_date, rerelease_price, rerelease_ordering_info
		FROM
			avrc_game
		WHERE
			game_id = $game_id
	") or die("Could not fetch game.");

	while ($current_row = mysql_fetch_array($game_query))
	{
		$release_date = $current_row["release_date"];
		$price = $current_row["price"];
		$faq_url = $current_row["faq_url"];
		$faq_link_text = $current_row["faq_link_text"];
		$description = $current_row["description"];
		$review_url = $current_row["review_url"];
		$review_link_text = $current_row["review_link_text"];
		$ordering_info = $current_row["ordering_info"];
		$game_name = $current_row["name"];
		$image_name = $current_row["image_name"];
		$image_width = $current_row["image_width"];
		$image_height = $current_row["image_height"];
		$system_id = $current_row["system_id"];
		$alternate_title = $current_row["alternate_title"];
		$rerelease_date = $current_row["rerelease_date"];
		$rerelease_price = $current_row["rerelease_price"];
		$rerelease_ordering_info = $current_row["rerelease_ordering_info"];
	}

	// Munge release date.
	list ($year, $month, $day) = split("-", $release_date);
	if ($month == "00")
		$release_date = $year;
	else
		$release_date = $month."/".$day."/".$year;

	// Munge re-release date.
	if ($rerelease_date != "")
	{
		list ($year, $month, $day) = split("-", $rerelease_date);
		if ($month == "00")
			$rerelease_date = $year;
		else
			$rerelease_date = $month."/".$day."/".$year;
	}

	// Munge alternate title.
	if ($alternate_title != "" )
	{
		list ($country, $title) = split("-", $alternate_title);
		$alternate_title = "<li><strong>".$country." Title:</strong>  <em>".$title."</em>";
	}

	// Grab the system name.
	$system_name_query = mysql_query("
		SELECT
			name
		FROM
			avrc_system
		WHERE
			system_id = $system_id
	") or die("Could not fetch system name");

	while ($current_row = mysql_fetch_array($system_name_query))
	{
		$system_name = $current_row["name"];
	}

	// Grab the company info.
	$company_query = mysql_query("
		SELECT
			name
		FROM
			avrc_game_company AS agc, avrc_company AS ac
		WHERE
			game_id = $game_id and
			agc.company_id = ac.company_id
	") or die("Could not fetch company.");

	while ($current_row = mysql_fetch_array($company_query))
	{
		$company .= $current_row["name"]."/";
	}

	// Chop the last / off of the company string.
	$company = substr($company, 0, strrpos($company, "/"));

	// Grab the genre info.
	$genre_query = mysql_query("
		SELECT
			name
		FROM
			avrc_game_genre AS agg, avrc_genre AS ag
		WHERE
			game_id = $game_id and
			agg.genre_id = ag.genre_id
	") or die("Could not fetch genre.");

	while ($current_row = mysql_fetch_array($genre_query))
	{
		$genre .= $current_row["name"]."/";
	}

	// Chop the last / off of the company string.
	$genre = substr($genre, 0, strrpos($genre, "/"));

	$page_title = "Anime Video Game Resource Center : ".$game_name;

	include("avrc_header.php3");
?>

<h2 align="center"><?php print($game_name);?></h2>

<table border=0 width="100%">
	<tr>
<?php
	if ($image_name != "")
	{
		print("<td valign=\"top\"><img src=\"images/games/".$image_name."\" width=\"".$image_width."\" height=\"".$image_height."\" border=\"0\" alt=\"".$game_name."\"></td>\n");
	}
?>
		<td valign="top">
			<ul>
				<?php if ($alternate_title != "") { print($alternate_title); }?>
				<li><strong>System:</strong>  <?php print($system_name);?>
				<li><strong>Company:</strong>  <?php if ($company != "") { print($company); } else { print("???"); }?>
				<li><strong>Ordering Information:</strong>  <?php if ($ordering_info != "") { print($ordering_info); } else { print("???"); }?>
				<?php if ($rerelease_ordering_info != "") { print("<li><strong>Re-release Ordering Information:</strong>  ".$rerelease_ordering_info."\n"); }?>
				<li><strong>Release Date:</strong>  <?php if ($release_date != "" && $release_date != 0) { print($release_date); } else { print("???"); }?>
				<?php if ($rerelease_date != "" && $rerelease_date != 0) { print("<li><strong>Re-release Date:</strong>  ".$rerelease_date."\n"); }?>
				<li><strong>Price:</strong>  <?php if ($price != "" && $price != 0) { print($price."&#165;"); } else { print("???"); }?>
				<?php if ($rerelease_price != "" && $rerelease_price != 0) { print("<li><strong>Re-release Price:</strong>  ".$rerelease_price."&#165;\n"); }?>
				<li><strong>Genre:</strong>  <?php if ($genre != "") { print($genre); } else { print("???"); }?>
				<?php if ($faq_url != "") { print("<li><strong>FAQ:</strong>  <a href=\"".$faq_url."\">".$faq_link_text."</a>\n"); }?>
				<?php if ($review_url != "") { print("<li><strong>Review:</strong>  <a href=\"".$review_url."\">".$review_link_text."</a>\n"); }?>
			</ul>

			<?php if ($description != "") { print($description); }?>
		</td>
	</tr>
</table>

<?php
	include("avrc_footer.php3");
	include($subdirectory."lib/dbdisconnect.php3");
?>