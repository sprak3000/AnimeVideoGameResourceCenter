<?php
	$subdirectory = "../../";
	include($subdirectory."lib/dbconnect.php3");
?>

<?php
	$series_url = addslashes($series_url);
	$series_link_text = addslashes($series_link_text);

	if ($link_id == "")
	{
		$series_link = mysql_query("
			INSERT INTO
					avrc_series_link
			VALUES
				('$link_id', '$series_id', '$series_url', '$series_link_text')
		") or die("Could not insert link.");
	}

	else
	{
		$series_link = mysql_query("
			UPDATE
					avrc_series_link
			SET
				series_id = '$series_id', 
				series_url = '$series_url', 
				series_link_text = '$series_link_text'
			WHERE
				link_id = '$link_id'
		") or die("Could not update link.");
	}
?>

<html>

<head>
	<title><?php if ($link_id == "") {print("Edit");} else {print("Add");}?> a Series Link</title>
</head>

<body bgcolor="#FFFFFF">

<h2 align="center"><?php if ($link_id == "") {print("Edit");} else {print("Add");}?> a Series Link</h2>

<div align="center">
	<table border="0">
		<tr>
			<td>
				Link inserted/modified.
				
				<p><a href="series_links.php3">Return to Series Links</a>
			</td>
		</tr>
	</table>
</div>

</body>

</html>

<?php
	include($subdirectory."lib/dbdisconnect.php3");
?>