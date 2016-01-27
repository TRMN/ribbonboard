<?php
require_once('ribbon.class.php');
require_once('traits.php');

class GsnRibbon extends GenericRibbon {
	protected $organization = 'gsn';
	protected $multi_device = 'devices/gsn_star.png';

	use star_of_grayson, austin_medal, distinguished_service_star,
	legion_of_military_merit, naval_star_of_gallantry,
	distinguished_service_decoration, naval_medal_of_gallantry,
	gsn_distinguished_service_medal, grayson_medal, navy_wound_medal,
	medal_of_courage, meritorious_service_star, meritorious_service_decoration,
	gsn_meritorious_service_medal, gsn_commendation_medal, gsn_achievement_medal,
	protectors_unit_citation_for_gallantry, naval_meritorious_unit_award,
	navy_battle_efficiency_medal, grayson_masada_war_campaign_medal,
	second_grayson_masada_war_campaign_medal, grayson_havenite_campaign_medal,
	space_action_medal, gsn_long_service_and_good_conduct_medal,
	gsn_reserve_long_service_and_good_conduct_medal,
	gsn_recruit_training_ribbon, nco_senior_course_ribbon, navy_service_medal,
	space_service_ribbon, grayson_champion_shots_medal,
	gsn_distinguished_weapons_qualification_medal;
}
