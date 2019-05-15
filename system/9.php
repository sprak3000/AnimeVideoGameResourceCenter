<?php
	error_reporting(E_NONE);

	$directoryLevel = "../";
	$pageTitle = "Anime Video Game Resource Center : Sufami Turbo";
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
					<option value="9" selected>Sufami Turbo</option>
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
<td><img src="<?php print($directoryLevel); ?>images/system/sufami_turbo.gif" border="0" width="140" height="115" alt="Sufami Turbo unit"></td>
<td><img src="<?php print($directoryLevel); ?>images/system/sufami_turbo_intro.gif" border="0" width="140" height="115" alt="Sufami Turbo splash screen"></td>
</tr>
</table>
</div>

<p>I first heard of this device roughly around 1995. It was slated for release as a new accessory for the Super 
Famicom in Japan. It would use smaller cartridges and allow developers to design smaller games with many 
parts. Since then, I heard nothing more about this device until now. Lasse Reinikainen has informed me that 
the Sufami Turbo did not become vaporware. What follows below is what he has learned about this device. 

<p>The Sufami Turbo is add-on unit for Super Famicom. You plug it into the game module connector as a 
normal game module. Sufami Turbo has two game module slots (not normal ones). 

<p>The idea must be something like this: Sufami Turbo has some built-in resources (Japanese fonts, etc.) 
that allows you to save space when releasing modules 
(cartridges) for it. Possibly there is some multiplayer capabilities as well. I think the biggest advantage was 
that you can forget Nintendo and release games 
without licensing them (no paying money to Nintendo). 

<p>Jacob Poon adds that it's biggest feature is the ability to have two cartridges to share common resources. 
It is much like Sega's <em>Sonic and Knuckles</em> device.  
For example, you can plug in two SD Ultraman games and use Ultraseven in the game he is not featured in.

<p>More information can be found <a href="http://assembler.roarvgm.com/Superfami_Turbo/superfami_turbo.html">here</a>.</td>
	</tr>
</table>

<?php include($directoryLevel."footer.php"); ?>