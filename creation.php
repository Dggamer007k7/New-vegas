<!DOCTYPE html>
<html>

	<head>
		<title>You're SPECIAL</title>
		<meta charset="UTF-8"/>
		<meta name="Autor" content="Diogo Machado"/>
		<meta name="Content" content="Character creator from Fallout NEW VEGAS"/>
		<link rel="stylesheet" href="Bonito.css"/>
	</head>

<body>
  
	<form action="Site supremo.php" method="post">
		
		<h2>Strength:</h2>	<input type="text" name="Str" class="spe" /> 
		<h2>Perception:</h2>	<input type="text" name="Per" class="spe" />
		<h2>Endurance:</h2>	<input type="text" name="End" class="spe" /> 
		<h2>Charisma:</h2>	<input type="text" name="Cha" class="spe" /> 
		<h2>Intelligence:</h2>	<input type="text" name="Int" class="spe" /> 
		<h2>Agility:</h2>	<input type="text" name="Agi" class="spe" /> 
		<h2>Luck:</h2>	<input type="text" name="Luc" class="spe" />
		
		<br>
		<br>
			
			<h2>Tag Skills:</h2>
			
		
							
				<input type="checkbox" name="Barter" value="on" id="barter"/>  <label for="barter">Barter</label>
				<br>										
				<input type="checkbox" name="Ener_Weapons" value="on" id="energy"/>  <label for="energy">Energy Weapons</label> 
				<br>										
				<input type="checkbox" name="Explo" value="on" id="explosives"/> <label for="explosives">Explosives</label> 
				<br>						
				<input type="checkbox" name="Guns" value="on" id="gun"/>  <label for="gun">Guns</label>
				<br>						
				<input type="checkbox" name="Lock" value="on" id="lockpick"/>  <label for="lockpick">Lockpick</label>
				<br>						
				<input type="checkbox" name="Medicine" value="on" id="med"/>   <label for="med">Medicine</label>
				<br>						
				<input type="checkbox" name="Me_Weapons" value="on" id="melee"/>  <label for="melee">Melee Weapons</label>
				<br>				
				<input type="checkbox" name="Repair" value="on" id="repair"/>  <label for="repair">Repair</label>
				<br>						
				<input type="checkbox" name="Science" value="on" id="science"/>  <label for="science">Science</label>
				<br>						
				<input type="checkbox" name="Sneak" value="on" id="sneak"/>  <label for="sneak">Sneak</label>
				<br>						
				<input type="checkbox" name="Speech" value="on" id="speech"/>  <label for="speech">Speech</label>
				<br>						
				<input type="checkbox" name="Unarmed" value="on" id="unarmed"/>  <label for="unarmed">Unarmed</label>
				<br>						
				<input type="checkbox" name="Survival" value="on" id="survival"/>  <label for="survival">Survival</label>
				<br>
				<br>
				<br>
		<input type="submit" name="end" value="DONE" class="Done" /> 
		
		</form>
<br>
<br>
<br>
		<?php
						
			$strength=$_POST['Str'] ?? "";
			$perception=$_POST['Per'] ?? "";
			$endurance=$_POST['End'] ?? "";
			$charisma=$_POST['Cha'] ?? "";
			$intelligence=$_POST['Int'] ?? "";
			$agility=$_POST['Agi'] ?? "";
			$luck=$_POST['Luc'] ?? "";
			
			$barter= 2+2*$charisma+$luck/2;
			$energy_weapons= 2+2*$perception+$luck/2;
			$explosives= 2+2*$perception+$luck/2;
			$guns= 2+2*$agility+$luck/2;
			$lockpick= 2+2*$perception+$luck/2;
			$medicine= 2+2*$intelligence+$luck/2;
			$melee_weapons= 2+2*$strength+$luck/2;
			$repair= 2+2*$intelligence+$luck/2;
			$science= 2+2*$intelligence+$luck/2;
			$sneak= 2+2*$agility+$luck/2;
			$speech= 2+2*$charisma+$luck/2;
			$survival= 2+2*$endurance+$luck/2;
			$unarmed= 2+2*$endurance+$luck/2;
			
			$level=1;
			$crit_chance=$luck*1;
			$hit_points= 100+$endurance*20+$level-1*5;
			$action_points= 65+3*$agility;
			$carry_weight= 150+$strength*10;
			$skill_points= 10+0.5*$intelligence;
			
			if(isset($_POST['Barter'])==true) {
					$barter+=15;
			}
				if(isset($_POST['Speech'])==true) {
						$speech+=15;
				}
					if(isset($_POST['Ener_Weapons'])==true) {
							$energy_weapons+=15;
					}
						if(isset($_POST['Guns'])==true) {
								$guns+=15;
						}
							if(isset($_POST['Lock'])==true) {
									$lockpick+=15;
							}
								if(isset($_POST['Medicine'])==true) {
										$medicine+=15;
								}
									if(isset($_POST['Explo'])==true) {
											$explosives+=15;
									}
										if(isset($_POST['Me_Weapons'])==true) {
												$melee_weapons+=15;
										}
											if(isset($_POST['Repair'])==true) {
													$repair+=15;
											}
												if(isset($_POST['Science'])==true) {
														$science+=15;
												}
													if(isset($_POST['Sneak'])==true) {
															$sneak+=15;
													}
														if(isset($_POST['Survival'])==true) {
																$barter+=15;
														}
															if(isset($_POST['Unarmed'])==true) {
																	$unarmed+=15;
															}
	
		
		?>
		
		<table>
		<tr>
			<th>S</th>
			<th>P</th>
			<th>E</th>
			<th>C</th>
			<th>I</th>
			<th>A</th>
			<th>L</th>
		</tr>
		
		<tr>
			<td><?php echo "$strength"; ?></td>
			<td><?php echo "$perception"; ?></td>
			<td><?php echo "$endurance"; ?></td>
			<td><?php echo "$charisma"; ?></td>
			<td><?php echo "$intelligence"; ?></td>		
			<td><?php echo "$agility"; ?></td>	
			<td><?php echo "$luck"; ?></td>				
		</tr>
		</table>
		<br>
		<br>
	<table>
	
		<tr>
			<th>TAG SKILLS</th>
		</tr>
	
		<tr>
			<th>Barter</th>
			<td><?php echo "$barter"; ?></td>
		</tr>
		<tr>
			<th>Energy Weapons</th>
			<td><?php echo "$energy_weapons"; ?></td>
		</tr>
		<tr>
			<th>Explosives</th>
			<td><?php echo "$explosives"; ?></td>
		</tr>
	
		<tr>
			<th>Guns</th>
			<td><?php echo "$guns"; ?></td>
		</tr>
	
		<tr>
			<th>Lockpick</th>
			<td><?php echo "$lockpick"; ?></td>
		</tr>
	
		<tr>
			<th>Medicine</th>
			<td><?php echo "$medicine"; ?></td>
		</tr>
	
		<tr>
			<th>Melee Weapons</th>
			<td><?php echo "$melee_weapons"; ?></td>
		</tr>
	
		<tr>
			<th>Repair</th>
			<td><?php echo "$repair"; ?></td>
		</tr>
	
		<tr>
			<th>Science</th>
			<td><?php echo "$science"; ?></td>
		</tr>
	
		<tr>
			<th>Sneak</th>
			<td><?php echo "$sneak"; ?></td>
		</tr>
	
		<tr>
			<th>Speech</th>
			<td><?php echo "$speech"; ?></td>
		</tr>
	
		<tr>
			<th>Unarmed</th>
			<td><?php echo "$unarmed"; ?></td>
		</tr>
	
		<tr>
			<th>Survival</th>
			<td><?php echo "$survival"; ?></td>
		</tr>
	
	</table>
<br>
	<table>
		
		<tr>
			<th>Critical Chance</th>
			<td><?php echo "$crit_chance"."%";?></td>
		</tr>
		
		<tr>
			<th>Hit Points</th>
			<td><?php echo "$hit_points";?></td>
		</tr>
		
		<tr>
			<th>Action Points</th>
			<td><?php echo "$action_points";?></td>
		</tr>
		
		<tr>
			<th>Carry Weight</th>
			<td><?php echo "$carry_weight"; ?></td>
		</tr>
	
	</table>
	
</body>


</html>