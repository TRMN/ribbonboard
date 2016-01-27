<?php
require_once('ribbon.class.php');
require_once('traits.php');

class RmnRibbon extends GenericRibbon {
	protected $organization = 'rmn';
	use parlimentary_medal_of_valor, order_of_gallantry, manticore_cross,
	osterman_cross, saganami_cross, distinguished_gallantry_cross, navy_star,
	conspicuous_gallantry_medal, order_of_the_star_kingdom, order_of_merit,
	order_of_queen_elizabeth, order_of_king_roger, distinguished_service_order,
	sphinx_cross, order_of_the_crown_for_naval_service,
	queens_cross_for_bravery, gryphon_star, queens_bravery_medal,
	conspicuous_bravery_medal, conspicuous_service_medal,
	meritorious_service_medal, navy_commendation_decoration,
	navy_marine_achievement_medal, fleet_excellence_award,
	prisoner_of_war_medal, silesian_antipiracy_campaign_medal,
	list_of_honor_citation, royal_unit_citation_for_gallantry,
	royal_meritorious_unit_citation, masadan_occupation_medal,
	manticoran_service_medal, havenite_war_campaign_medal,
	manticoran_reserve_service_medal, havenite_operation_service_medal,
	good_conduct_medal, navy_rifle, navy_pistol,
	space_service_deployment_ribbon, manticoran_combat_action_medal,
	king_roger_iii_coronation_medal, queen_elizabeth_iii_coronation_medal,
	grand_alliance_campaign_medal, gsn_recruit_training_ribbon,
	nco_senior_course_ribbon, navy_service_medal, hidden_ribbons;
}
