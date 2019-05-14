<?php
	$subdirectory = "../";
	include($subdirectory."lib/dbconnect.php3");

	$select_fields = "a_g.game_id, a_g.name AS game_name";
	$from_clause = "avrc_game AS a_g";

	switch ($search_type)
	{
		case "System" :
			$select_fields .= ", a_s.name AS system_name";
			$from_clause .= ", avrc_system AS a_s";
			$where_clause = "a_s.system_id = ".$system_id." and a_g.system_id = a_s.system_id";

			$header_info = mysql_query("
				SELECT
					name
				FROM
					avrc_system
				WHERE
					system_id = $system_id
			") or die("Could not fetch header info.");

			while ($current_row = mysql_fetch_array($header_info))
			{
				$header_text = $current_row["name"];
			}

			break;

		case "Genre" :
			$select_fields .= ", a_ge.name AS genre_name";
			$from_clause .= ", avrc_genre AS a_ge, avrc_game_genre AS a_g_g";
			$where_clause = "a_ge.genre_id = ".$genre_id." and a_ge.genre_id = a_g_g.genre_id and a_g_g.game_id = a_g.game_id";

			$header_info = mysql_query("
				SELECT
					name
				FROM
					avrc_genre
				WHERE
					genre_id = $genre_id
			") or die("Could not fetch header info.");

			while ($current_row = mysql_fetch_array($header_info))
			{
				$header_text = $current_row["name"];
			}

			break;

		case "Company" :
			$select_fields .= ", a_c.name AS company_name";
			$from_clause .= ", avrc_company AS a_c, avrc_game_company AS a_g_c";
			$where_clause = "a_c.company_id = ".$company_id." and a_c.company_id = a_g_c.company_id and a_g_c.game_id = a_g.game_id";

			$header_info = mysql_query("
				SELECT
					name
				FROM
					avrc_company
				WHERE
					company_id = $company_id
			") or die("Could not fetch header info.");

			while ($current_row = mysql_fetch_array($header_info))
			{
				$header_text = $current_row["name"];
			}

			break;
	}

	$search_results = mysql_query("
		SELECT
			$select_fields
		FROM
			$from_clause
		WHERE
			$where_clause
		ORDER BY
			game_name
	") or die(mysql_error());

	$page_title = "Anime Video Game Resource Center : Search Results By ".$search_type;

	include("avrc_header.php3");
?>

<h2 align="center">Search Results By <?php print($search_type." - ".$header_text);?></h2>

<div align="center">
	<table border="0" width="50%">
		<tr>
			<td>
				<ul>
				<?php
					if (mysql_num_rows($search_results) != 0)
					{
						while ($current_row = mysql_fetch_array($search_results))
						{
							print("<li><a href=\"game.php3?game_id=".$current_row["game_id"]."\">".$current_row["game_name"]."</a><br>\n");
						}
					}

					else
						print("No matches found.");
				?>
				</ul>
			</td>
		</tr>
	</table>
</div>

<?php
	include("avrc_footer.php3");
	include($subdirectory."lib/dbdisconnect.php3");
?>