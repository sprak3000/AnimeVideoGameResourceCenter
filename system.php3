<?php
	// Expecting system_id passed.

	$subdirectory = "../";

	include($subdirectory."lib/dbconnect.php3");

	// Grab the game info.
	$system_query = mysql_query("
		SELECT
			*
		FROM
			avrc_system
		WHERE
			system_id = $system_id
	") or die("Could not fetch system.");

	while ($current_row = mysql_fetch_array($system_query))
	{
		$system_name = $current_row["name"];
		$description = $current_row["description"];
	}

	$page_title = "Anime Video Game Resource Center : ".$system_name;

	include("avrc_header.php3");
?>

<h2 align="center"><?php print($system_name);?></h2>

<table border=0 width="100%">
	<tr>
		<td valign="top">
			<?php if ($description != "") { print($description); }?>
		</td>
	</tr>
</table>

<?php
	include("avrc_footer.php3");
	include($subdirectory."lib/dbdisconnect.php3");
?>