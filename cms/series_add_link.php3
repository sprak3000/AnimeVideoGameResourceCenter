<?php
	$subdirectory = "../../";
	$multiselect = 1;
	include($subdirectory."lib/dbconnect.php3");
?>

<?php
	if ($mode == "edit")
	{
		$series_link = mysql_query("
			SELECT
				*
			FROM
				avrc_series_link
			WHERE
				link_id = $link_id
		") or die ("Could not retrieve link.");

		while ($current_row = mysql_fetch_array($series_link))
		{
			$series_id = $current_row["series_id"];
			$series_url = $current_row["series_url"];
			$series_link_text = $current_row["series_link_text"];
		}
	}

	include("../lib/avrc_select_list.php3");
?>

<html>

<head>
	<title><?php if ($mode == "edit") {print("Edit");} else {print("Add");}?> a Series Link</title>
</head>

<body bgcolor="#FFFFFF">

<h2 align="center"><?php if ($mode == "edit") {print("Edit");} else {print("Add");}?> a Series Link</h2>

<div align="center">
	<form method="GET" action="series_insert_link.php3">
		<input type="hidden" name="link_id" value="<?php print($link_id);?>">

		<table border="1" width="50%">
			<tr>
				<td>Series:</td>
				<td><?php print($series_select_list);?></td>
			</tr>

			<tr>
				<td>Link Text:</td>
				<td><input type="text" name="series_link_text" value="<?php print($series_link_text);?>" size="50" maxlength="100"></td>
			</tr>

			<tr>
				<td>URL:</td>
				<td><input type="text" name="series_url" value="<?php print($series_url);?>" size="50" maxlength="255"></td>
			</tr>

			<tr>
				<td colspan="2" align="center"><input type="submit" name="link_submit" value="Submit Link"></td>
			</tr>
		</table>
	</form>
</div>

</body>

</html>

<?php
	include($subdirectory."lib/dbdisconnect.php3");
?>