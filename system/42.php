<?php
	error_reporting(E_NONE);

	$directoryLevel = "../";
	$pageTitle = "Anime Video Game Resource Center : MSX";
	include_once($directoryLevel."header.php");
?>

	<form method="post" action="system.php">
		<table class="menu">
			<td><strong>System</strong></td>
			<td>
				<select name="id" onChange="submit();">					<option value="42" selected>MSX</option>
					<option value="5">NES</option>
					<option value="12">PC Engine/Coregrafx</option>
					<option value="17">Sega Game Gear</option>
					<option value="21">Sega Genesis</option>
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
		<td valign="top"><div align="center">
<table border="0" width="50%">
<tr>
<td><img src="<?php print($directoryLevel); ?>images/system/SanyoMSX.jpg" border="0" width="100" height="40" alt="Sanyo unit"></td>
<td><img src="<?php print($directoryLevel); ?>images/system/ToshibaMSX.jpg" border="0" width="100" height="51" alt="Toshiba unit"></td>
</tr>
</table>
</div>

<p>In 1982, a Z80-based family of machines known as the MSX was introduced. While gaining popularity in Asia, South 
America, the former Soviet Union, and Europe, the MSX remained virtually unknown in the US until the emulation scene
revived interest in it. The whole MSX project was designed to establish a single home computing standard similar to the 
VHS standard for video equipment. The MSX standard was developed by a company called ASCII in cooperation with Microsoft (rumor has it MSX stands
for MicroSoft eXtended). A hard-wired version of Microsoft's BASIC was built into the MSX machine. Before its demise in 1988, the MSX2, MSX2+, and 
TurboR versions were created.</td>
	</tr>
</table>

<?php include($directoryLevel."footer.php"); ?>