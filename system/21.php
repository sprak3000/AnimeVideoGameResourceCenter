<?php
	error_reporting(E_NONE);

	$directoryLevel = "../";
	$pageTitle = "Anime Video Game Resource Center : Sega Genesis";
	include_once($directoryLevel."header.php");
?>

	<form method="post" action="system.php">
		<table class="menu">
			<td><strong>System</strong></td>
			<td>
				<select name="id" onChange="submit();">					<option value="42">MSX</option>
					<option value="5">NES</option>
					<option value="12">PC Engine/Coregrafx</option>
					<option value="17">Sega Game Gear</option>
					<option value="21" selected>Sega Genesis</option>
					<option value="25">Sega Saturn</option>
					<option value="8">SNES</option>
					<option value="33">Sony Playstation</option>
					<option value="9">Sufami Turbo</option>
					<option value="13">Turbografx-16</option>
				</select>
			</td>
			<td><input type="submit" value="Go!" /></td>
		</table>
	</form>

<table border="0" width="100%">
	<tr>
		<td valign="top"><p>The Genesis uses a language lockout involving a built-in switch and megahertz settings used in the Mega Drive.  Since the Genesis 
has neither of these, your only hope is to build a language switch and cut plastic from your Genesis to make the cartrige fit.  You can also
buy a converter with a language switch.  Many Genesis games contain the roms for their Japanese counterparts, such as 
<em>Mystic Defender</em>.  If a language switch is set to Japanese, it plays the Japanese version of the game.</td>
	</tr>
</table>

<?php include($directoryLevel."footer.php"); ?>