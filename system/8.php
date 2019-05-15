<?php
	error_reporting(E_NONE);

	$directoryLevel = "../";
	$pageTitle = "Anime Video Game Resource Center : SNES";
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
					<option value="8" selected>SNES</option>
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
		<td valign="top"><p>The Super Nintendo Entertainment System lock out is completely cosmetic.  If you compare a SFC cartridge with a SNES cartridge, you will notice that the SNES cartridge 
has two notches in the back that the SFC cartridge does not.  Now, push in the flap where you plug in the cartridge on your SNES deck.  If you 
look inside, you should see two plastic pieces sticking up that correspond to the notches on your SNES cartridge.

<p>You now have two choices.  You could cut notches in your SFC cartridge to match the plastic pieces inside.  Or, you could simply cut the 
plastic pieces off.  I recommend the second choice; it is easier and less noticeable.  I have found that the easiest way to remove them is to take 
a pair of hand-held garden shears to clip them out.

<p>The same tabs exist on the SNES Game Genie and can be removed as well.  If you are uncomfortable with either of these methods, you 
can buy adaptors which essentially extends the cartridge slot.  The only adaptor I would consider buying would be the <em>Super 8</em> adaptor.  It 
allows you to play SNES, SFC, NES, and Famicom cartridges on your SNES deck.  Unfortunately, I have never actually seen anyone selling this.  
Mark Drefahl has also suggested that the <em>X-band</em> device for the SNES also makes a good adaptor without modification (<em>ed.</em>  He 
has no SFC cartridges to test it with, and I have never seen the X-band device.  Not sure if actually works or not).</td>
	</tr>
</table>

<?php include($directoryLevel."footer.php"); ?>