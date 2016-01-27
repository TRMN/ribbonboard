<?php
if (empty($_GET['debug'])) {
	header('Content-type: image/png');
} else {
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
}

$cache_hash = md5($_GET['request']);
$cache_subdir = substr($cache_hash, 0, 1);
$cache_file = "cache/{$cache_subdir}/{$cache_hash}.png";

if (!empty($_GET['debug'])) {
	print "\n".$cache_hash."\n";
}

if (!file_exists("cache/{$cache_subdir}")) {
	mkdir("cache/{$cache_subdir}");
}

if (!file_exists($cache_file)) {
	$request = json_decode(trim(base64_decode($_GET['request'])), 'true');

	switch ($request['faction']) {
		case 'rmn':
			require_once('rmn_ribbon.class.php');
			$gen = new RmnRibbon();
			break;
		case 'civilian':
			require_once('civilian_ribbon.class.php');
			$gen = new CivilianRibbon();
			break;
		case 'rma':
			require_once('rma_ribbon.class.php');
			$gen = new RmaRibbon();
			break;
		case 'gsn':
			require_once('gsn_ribbon.class.php');
			$gen = new GsnRibbon();
			break;
	}

	$cleaned = array_filter(
		$request['ribbons'],
		function ($var) {
			if (empty($var) || !is_numeric($var)) {
				return false;
			}

			return true;
		}
	);

	$gen->render_board($cleaned, 105, 27, $cache_file);
}

readfile($cache_file);
