<?php
	error_reporting(E_NONE);

	$directoryLevel = "../";
	$pageTitle = "Anime Video Game Resource Center : NES";
	include_once($directoryLevel."header.php");
?>

	<form method="post" action="system.php">
		<table class="menu">
			<td><strong>System</strong></td>
			<td>
				<select name="id" onChange="submit();">					<option value="42">MSX</option>
					<option value="5" selected>NES</option>
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
		<td valign="top"><p>The Nintendo Entertainment System used a hardware lock out.  Famicom cartridges used 60 pin connectors while NES carts used 72 pin 
connectors.  The most well-known and hard to find adaptor was created by <em>Honeybee</em>.  Another recent adaptor was called the <em>Super 8</em>; 
it allowed you to play NES, Famicom, and Super Famicom games on your SNES.  It is also hard to find anyone selling it as well.  Since NES carts go very 
cheap these days, someone also discovered a low cost solution.  Apparently, old cartidges made by Nintendo contain a 60 to 72 pin convertor 
built-in.  A more <a href="http://atarihq.com/tsr/odd/scans/adapter.html">detailed description</a> of this process is available at 
<a href="http://atarihq.com/tsr/">tsr's NES Archive</a>.</td>
	</tr>
</table>

<?php include($directoryLevel."footer.php"); ?>