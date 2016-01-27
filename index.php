<html>
	<head>
		<title>TRMN Ribbon Board Generator</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
	<div id="awardForm">
		<div class="info">To expand each group, click on its title.</div>
<?php
$organizations = array(
	'Royal Manticoran Navy & Marine Corps' => array(
		'class' => 'RmnRibbon',
		'class_file' => 'rmn_ribbon.class.php',
		'faction' => 'rmn'
	),
	'Royal Manticoran Army' => array(
		'class' => 'RmaRibbon',
		'class_file' => 'rma_ribbon.class.php',
		'faction' => 'rma'
	),
	'Grayson Space Navy' => array(
		'class' => 'GsnRibbon',
		'class_file' => 'gsn_ribbon.class.php',
		'faction' => 'gsn'
	),
	'Civilian' => array(
		'class' => 'CivilianRibbon',
		'class_file' => 'civilian_ribbon.class.php',
		'faction' => 'civilian'
	),
);

function outputRibbonList($ribbons, $group_name) {
	?>
	<table class="award-list">
		<tr>
			<th>Award</th>
			<th>#</th>
			<th>Sample</th>
		</tr>

		<?php
		foreach ($ribbons AS $ribbon) {
			echo "<tr>";
			echo '<td class="award_name">'.$ribbon['name'].'</td>';

			echo '<td>';
			if ($ribbon['multiple']) {
				echo '<select name="'.$group_name.'['.$ribbon['id'].']">';
				for ($i = 0; $i <= 5; $i++) {
					echo "<option>{$i}</option>";
				}
				echo '</select>';
			} else {
				echo '<input type="checkbox" value="1" name="'.$group_name.'['.$ribbon['id'].']">';
			}
			echo '</td>';

			echo '<td><img class="ribbon-sample" src="ribbons/'.$ribbon['method_name'].'.png" /></td>';
			echo "</tr>\n";
		}
		?>
	</table>
	<?php
}

foreach ($organizations AS $name => $data) {
require_once($data['class_file']);
$gen = new $data['class']();
$award_data = $gen->individual_award_details();
$unit_award_data = $gen->unit_award_details();
?>
<fieldset>
<legend><?php echo $name; ?></legend>
<div style="display: none">
<form action="build_board.php" method="post">
<input type='hidden' name='faction' value='<?php echo $data['faction'] ?>'>

			<fieldset>
				<legend>General - Individual</legend>
				<div>
					<?php outputRibbonList($award_data['General - Individual'], 'ribbons'); ?>
				</div>
			</fieldset>

			<div class="info">Only the highest award you have selected will be displayed from each of these groups. To expand each group, click on its title.</div>
			<?php
			foreach ($award_data AS $group => $ribbons) {
				if ($group == 'General - Individual') {
					continue;
				}
				?>
				<fieldset>
					<legend><?php echo $group; ?></legend>
					<div style="display: none">
						<?php outputRibbonList($ribbons, 'ribbons'); ?>
					</div>
				</fieldset>
				<?php
			}

			if ($unit_award_data) {
				echo '<div class="info">The following lists are unit awards, and will be displayed on a seperate ribbon board.</div>';
			}

			foreach ($unit_award_data AS $group => $ribbons) {
				?>
				<fieldset>
					<legend><?php echo $group; ?></legend>
					<div style="display: none">
						<?php outputRibbonList($ribbons, 'unit_ribbons'); ?>
					</div>
				</fieldset>
				<?php
			}
			?>
<input type="submit" value="Create Ribbon Board"><input type="reset">
</form>
</div>
</fieldset>
<?php
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
	$("fieldset legend").click(function() {
		$(this).siblings("div").slideToggle('fast');
	})
});
</script>
	</div>
	</body>
</html>
