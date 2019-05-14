<?php
	$subdirectory = "../../";
	include($subdirectory."lib/dbconnect.php3");
?>

<html>

<head>
	<title>AVRC Series Link Deleted</title>
</head>

<body bgcolor="#FFFFFF">

<?php
	$delete_series_link = mysql_query("
		DELETE FROM
			avrc_series_link
		WHERE
			link_id = $link_id
	") or die("Could not delete link!");
?>

<h2 align="center">Delete a Series Link</h2>

<div align="center">
	<table border="0">
		<tr>
			<td>
				Link deleted.
			
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