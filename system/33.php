<?php
	error_reporting(E_NONE);

	$directoryLevel = "../";
	$pageTitle = "Anime Video Game Resource Center : Sony Playstation";
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
					<option value="33" selected>Sony Playstation</option>
					<option value="9">Sufami Turbo</option>
					<option value="13">Turbografx-16</option>
				</select>
			</td>
			<td><input type="submit" value="Go!" /></td>
		</table>
	</form>

<table border="0" width="100%">
	<tr>
		<td valign="top"><p>The PSX uses a hardware lockout.  To defeat the lockout, you must install a mod chip onto your PSX board.  This requires 
opening the PSX and soldering the mod chip onto the board.  Many places will sell you mod chips with instruction on where to 
solder it, but some places also offer to modify your PSX for you (if you are uncomfortable with soldering).  

<p>Essentially, every PSX 
game has a country code encoded on the CD itself.  When you turn on your PSX, the code is read off the CD and compared to the
code stored in your PSX deck; if they match, the game will play.  The mod chip bypasses this country code check and lets you play 
any game from any country.

<p>There are also Gameshark like devices that allow you to perform a CD swap trick.</td>
	</tr>
</table>

<?php include($directoryLevel."footer.php"); ?>