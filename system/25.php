<?php
	error_reporting(E_NONE);

	$directoryLevel = "../";
	$pageTitle = "Anime Video Game Resource Center : Sega Saturn";
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
					<option value="25" selected>Sega Saturn</option>
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
		<td valign="top"><p>The Saturn has a hardware territorial lock out system.  A switch can be installed to defeat the lockout; 
the <a href="http://db.gamefaqs.com/console/saturn/file/sega_saturn_b.txt">Sega Saturn FAQ</a> at <a href="http://www.gamefaqs.com/">www.gamefaqs.com</a> has details.

</td>
	</tr>
</table>

<?php include($directoryLevel."footer.php"); ?>