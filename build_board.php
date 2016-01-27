<html>
	<head>
		<title>TRMN Ribbon Board Generator</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
<?php

$cleaned = array();
if (!empty($_POST['unit_ribbons'])) {
	$cleaned = array_filter(
		$_POST['unit_ribbons'],
		function ($var) {
			if (empty($var) || !is_numeric($var)) {
				return false;
			}

			return true;
		}
	);
}

$display_unit = false;
if ($cleaned) {
	$request = array(
		'ribbons' => $cleaned,
		'faction' => $_POST['faction']
	);

	$unit_request = base64_encode(json_encode($request));
	$display_unit = true;
}

$cleaned = array_filter(
	$_POST['ribbons'],
	function ($var) {
		if (empty($var) || !is_numeric($var)) {
			return false;
		}

		return true;
	}
);

$request = array(
	'ribbons' => $cleaned,
	'faction' => $_POST['faction']
);

$request = base64_encode(json_encode($request));
?>
<div class="info">You may copy the URL of the images or download them to use elsewhere. If possible, downloading a copy is preferred, as it reduces load on the server.</div><br />
<table>
	<?php
	if ($display_unit) {
	?>
	<tr>
		<th>Unit Awards</th>
	</tr>
	<tr>
		<td align="center"><?php echo '<img src="board_image.php?request='.$unit_request.'" />'; ?></td>
	</tr>
	<?php } ?>
	<tr>
		<th>Individual Awards</th>
	</tr>
	<tr>
		<td><?php echo '<img src="board_image.php?request='.$request.'" />'; ?></td>
	</tr>
</table>
	</body>
</html>
