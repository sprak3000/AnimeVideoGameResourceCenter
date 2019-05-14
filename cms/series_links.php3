<?php
	$subdirectory = "../../";
	include($subdirectory."lib/dbconnect.php3");
?>

<html>

<head>
	<title>AVRC Series Links</title>
</head>

<body bgcolor="#FFFFFF">

<h2 align="center">AVRC Series Links</h2>

<div align="center">
	<table border="0" width="50%">
		<tr>
			<td><a href="series_add_link.php3?mode=add">Add a new link</a>
		</tr>
	</table>

	<table border="1" width="50%">
<?php
	$series_links = mysql_query("
		SELECT 
			link_id, series_link_text, name
		FROM 
			avrc_series_link, avrc_series
		WHERE
			avrc_series_link.series_id = avrc_series.series_id
		ORDER BY
			name
	") or die("Query failed!");

	if (mysql_num_rows($series_links) != 0)
	{
		while($current_row = mysql_fetch_array($series_links))
		{
			print("\t\t<tr>\n");
			print("\t\t\t<td align=\"center\"><a href=\"series_add_link.php3?mode=edit&link_id=".$current_row["link_id"]."\">Edit</a></td>\n");
			print("\t\t\t<td>".$current_row["name"]."</td>\n");
			print("\t\t\t<td>".$current_row["series_link_text"]."</td>\n");
			print("\t\t\t<td align=\"center\"><a href=\"series_delete_link.php3?link_id=".$current_row["link_id"]."\">Delete</a></td>\n");
			print("\t\t</tr>\n");
		}
	}

	else
	{
		print("\t\t<tr>\n\t\t\t<td>There are currently no links</td>\n\t\t</tr>\n");
	}
?>
</table>
</div>

</body>

</html>

<?php
	include($subdirectory."lib/dbdisconnect.php3");
?>