<?php
require_once('ribbon.class.php');
require_once('traits.php');

class CivilianRibbon extends GenericRibbon {
	protected $organization = 'civilian';
	use queens_cross_for_bravery, order_of_the_star_kingdom,
	order_of_king_roger, order_of_the_golden_lion, order_of_queen_elizabeth,
	order_of_merit, distinguished_service_order, gryphon_star,
	conspicuous_service_medal, meritorious_service_medal,
	royal_unit_citation_for_gallantry, royal_meritorious_unit_citation,
	prisoner_of_war_medal, havenite_operation_service_medal,
	grand_alliance_campaign_medal, king_roger_iii_coronation_medal,
	queen_elizabeth_iii_coronation_medal, manticoran_service_medal,
	manticoran_reserve_service_medal, space_service_deployment_ribbon,
	navy_rifle, navy_pistol, gsn_recruit_training_ribbon, navy_service_medal,
	silesean_peacekeeping_and_observational_medal, havenite_war_campaign_medal;
}
