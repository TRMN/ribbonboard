<?php
require_once('ribbon.class.php');
require_once('traits.php');

class RmaRibbon extends GenericRibbon {
	protected $organization = 'rma';
	use adrienne_cross, cormany_star, distinguished_service_medal,
	manticore_medal, leonard_medal, medal_of_gallantry, army_medal,
	order_of_the_crown_for_army_service, rma_conspicuous_service_medal,
	rma_meritorious_service_medal, army_commendation_decoration,
	army_achievement_medal, army_regimental_excellence_award,
	rma_masadan_occupation_medal, silesean_peacekeeping_and_observational_medal,
	army_space_duty_ribbon, conspicuous_bravery_medal,
	conspicuous_gallantry_medal, distinguished_service_order,
	good_conduct_medal, grand_alliance_campaign_medal, gryphon_star,
	havenite_operation_service_medal, havenite_war_campaign_medal,
	king_roger_iii_coronation_medal, manticoran_combat_action_medal,
	manticoran_reserve_service_medal, manticoran_service_medal,
	order_of_king_roger, order_of_merit, order_of_queen_elizabeth,
	order_of_the_star_kingdom, parlimentary_medal_of_valor,
	prisoner_of_war_medal, queen_elizabeth_iii_coronation_medal,
	queens_bravery_medal, queens_cross_for_bravery,
	royal_meritorious_unit_citation, royal_unit_citation_for_gallantry,
	sphinx_cross, gsn_recruit_training_ribbon, nco_senior_course_ribbon,
	navy_service_medal;
}
