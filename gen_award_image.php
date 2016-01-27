<?php
ini_set('display_errors', true);
require_once('rmn_ribbon.class.php');
require_once('rma_ribbon.class.php');
require_once('civilian_ribbon.class.php');
require_once('gsn_ribbon.class.php');

$width = 75;
$height = 19;

$Rmn = new RmnRibbon();
$Rma = new RmaRibbon();
$Civilian = new CivilianRibbon();
$Gsn = new GsnRibbon();

$exclude = get_class_methods("GenericRibbon");

foreach (array('Rmn','Rma','Civilian','Gsn') AS $group) {
	foreach (get_class_methods($group."Ribbon") AS $method) {
		if (in_array($method, $exclude)) {
			continue;
		}

		$$group->init($width, $height);
		$$group->{$method}();
		$$group->render_ribbon(1, 'ribbons/'.$method.'.png');
	}
}
