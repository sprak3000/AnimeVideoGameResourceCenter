<?php
	error_reporting(E_NONE);

	$directoryLevel = "../";
	$pageTitle = "Anime Video Game Resource Center : Turbografx-16";
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
					<option value="21">Sega Genesis</option>
					<option value="25">Sega Saturn</option>
					<option value="8">SNES</option>
					<option value="33">Sony Playstation</option>
					<option value="9">Sufami Turbo</option>
					<option value="13" selected>Turbografx-16</option>
				</select>
			</td>
			<td><input type="submit" value="Go!" /></td>
		</table>
	</form>

<table border="0" width="100%">
	<tr>
		<td valign="top"><p>The Turbografx-16 has a hardware lockout.  An adaptor can be bought to play PC Engine games 
on the Turbographx-16.</td>
	</tr>
</table>

<?php include($directoryLevel."footer.php"); ?>