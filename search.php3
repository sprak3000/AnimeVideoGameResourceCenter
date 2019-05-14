<?php
	$subdirectory = "../";
	include($subdirectory."lib/dbconnect.php3");
	include("lib/avrc_select_list.php3");

	$page_title = "Anime Video Game Resource Center : Search";

	include("avrc_header.php3");
?>

<h2 align="center">Search</h2>

<div align="center">
	<table border="0">
		<tr>
			<td>
				<form method="post" action="search_results.php3">
					<input type="hidden" name="search_type" value="System">
					<strong>By System:</strong><br>
					<?php print($system_select_list);?>&nbsp;<input type="submit" value="Search">
				</form>

				<form method="post" action="search_results.php3">
					<input type="hidden" name="search_type" value="Genre">
					<strong>By Genre:</strong><br>
					<?php print($genre_multiselect_list);?>&nbsp;<input type="submit" value="Search">
				</form>

				<form method="post" action="search_results.php3">
					<input type="hidden" name="search_type" value="Company">
					<strong>By Genre:</strong><br>
					<?php print($company_multiselect_list);?>&nbsp;<input type="submit" value="Search">
				</form>
			</td>
		</tr>
	</table>
</div>

<?php
	include("avrc_footer.php3");
	include($subdirectory."lib/dbdisconnect.php3");
?>