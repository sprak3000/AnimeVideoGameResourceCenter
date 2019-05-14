<?php
	// Build a select list containing all the series.
	$series_select_list = "<select name=\"series_id\">\n";

	$series_list = mysql_query("
		SELECT
			series_id, name
		FROM
			avrc_series
		ORDER BY
			name
	") or die ("Could not get series list.");

	while ($current_row = mysql_fetch_array($series_list))
	{
		$series_select_list .= "<option value=\"".$current_row["series_id"]."\"";
	
		if (strcmp($series_id, $current_row["series_id"]) == 0)
		{
			$series_select_list .= " selected";
		}

		$series_select_list .= ">".$current_row["name"]."\n";
	}

	$series_select_list .= "</select>";

	// Build a select list containing all the systems.
	$system_select_list = "<select name=\"system_id\">\n";

	$system_list = mysql_query("
		SELECT
			system_id, name
		FROM
			avrc_system
		ORDER BY
			name
	") or die ("Could not get system list.");

	while ($current_row = mysql_fetch_array($system_list))
	{
		$system_select_list .= "<option value=\"".$current_row["system_id"]."\"";
	
		if (strcmp($system_id, $current_row["system_id"]) == 0)
		{
			$system_select_list .= " selected";
		}

		$system_select_list .= ">".$current_row["name"]."\n";
	}

	$system_select_list .= "</select>";

	// Build a multi-select list containing all the genres.
	if ($multiselect == 1)
		$genre_multiselect_list = "<select name=\"genre_id[]\" multiple size=\"5\">\n";
	else
		$genre_multiselect_list = "<select name=\"genre_id\">\n";

	$genre_list = mysql_query("
		SELECT
			genre_id, name
		FROM
			avrc_genre
		ORDER BY
			name
	") or die ("Could not get genre list.");


	while ($current_row = mysql_fetch_array($genre_list))
	{
		$genre_multiselect_list .= "<option value=\"".$current_row["genre_id"]."\"";
		$genre_multiselect_list .= ">".$current_row["name"]."\n";
	}

	$genre_multiselect_list .= "</select>";

	// Build a multi-select list containing all the companies.
	if ($multiselect == 1)
		$company_multiselect_list = "<select name=\"company_id[]\" multiple size=\"5\">\n";
	else
		$company_multiselect_list = "<select name=\"company_id\">\n";

	$company_list = mysql_query("
		SELECT
			company_id, name
		FROM
			avrc_company
		ORDER BY
			name
	") or die ("Could not get company list.");

	while ($current_row = mysql_fetch_array($company_list))
	{
		$company_multiselect_list .= "<option value=\"".$current_row["company_id"]."\"";
		$company_multiselect_list .= ">".$current_row["name"]."\n";
	}

	$company_multiselect_list .= "</select>";	
?>