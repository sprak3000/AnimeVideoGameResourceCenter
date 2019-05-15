<?php
	$directoryLevel = "../";
	$pageTitle = "Anime Video Game Resource Center : Kamen Rider";

	include_once($directoryLevel."header.php");
?>

<h2 class="center">Kamen Rider</h2>

<table border="0" width="100%">
	<tr>		<td valign="top"><img src="<?php print($directoryLevel); ?>images/series/castKamen.jpg" width="509" height="300" alt="Kamen Rider" /></td>		<td valign="top">			<ul>
				<lh><strong>Gameboy</strong></lh>				<li><a href="<?php print($directoryLevel); ?>game/151.php">Kamen Rider SD: Hashire! Mighty Riders</a></li>			</ul>			<ul>
				<lh><strong>Super Famicom</strong></lh>				<li><a href="<?php print($directoryLevel); ?>game/152.php">Kamen Rider SD: Shutsugeki!! Rider Machine</a></li>			</ul>		</td>
	</tr>
</table>

<?php include($directoryLevel."footer.php"); ?>