<?php
trait parlimentary_medal_of_valor {
	function parlimentary_medal_of_valor() {
		$section_width = $this->base_width / 3;

		$this->generic_vertical_bars(
			array(
				array('color' => 'navy_blue', 'width' => $section_width),
				array('color' => 'crimson', 'width' => $section_width),
				array('color' => 'white', 'width' => $section_width),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait order_of_gallantry {
	function order_of_gallantry() {
		$line = $this->height / $this->base_height;

		$line_start = 0;
		$line_end = $line * 1;
		imagefilledrectangle($this->ribbon, 0, 0, $this->width, $line_end, $this->light_blue);

		$line_start = $line_end;
		$line_end = $line_end + ($line * 2);
		imagefilledrectangle($this->ribbon, 0, $line_start, $this->width, $line_end, $this->white);

		$line_start = $line_end;
		$line_end = $line_end + ($line * 3);
		imagefilledrectangle($this->ribbon, 0, $line_start, $this->width, $line_end, $this->light_blue);

		$line_start = $line_end;
		$line_end = $line_end + ($line * 2);
		imagefilledrectangle($this->ribbon, 0, $line_start, $this->width, $line_end, $this->white);

		$line_start = $line_end;
		$line_end = $line_end + $line;
		imagefilledrectangle($this->ribbon, 0, $line_start, $this->width, $line_end, $this->light_blue);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait manticore_cross {
	function manticore_cross() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'blood_red', 'width' => $this->width),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait osterman_cross {
	function osterman_cross() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'navy_blue', 'width' => $this->width),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait saganami_cross {
	function saganami_cross() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'white', 'width' => 5),
				array('color' => 'scarlet', 'width' => 25),
				array('color' => 'white', 'width' => 5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait distinguished_gallantry_cross {
	function distinguished_gallantry_cross() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'navy_blue', 'width' => 12),
				array('color' => 'purple', 'width' => 4),
				array('color' => 'navy_blue', 'width' => 3),
				array('color' => 'purple', 'width' => 4),
				array('color' => 'navy_blue', 'width' => 12),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait navy_star {
	function navy_star() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'navy_blue', 'width' => 12),
				array('color' => 'purple', 'width' => 4),
				array('color' => 'white', 'width' => 3),
				array('color' => 'purple', 'width' => 4),
				array('color' => 'navy_blue', 'width' => 12),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait conspicuous_gallantry_medal {
	function conspicuous_gallantry_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'navy_blue', 'width' => 8.5),
				array('color' => 'white', 'width' => 4),
				array('color' => 'navy_blue', 'width' => 10),
				array('color' => 'white', 'width' => 4),
				array('color' => 'navy_blue', 'width' => 8.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait order_of_the_star_kingdom {
	function order_of_the_star_kingdom() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 31),
				array('color' => 'gold', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait order_of_merit {
	function order_of_merit() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 15.5),
				array('color' => 'white', 'width' => 15.5),
				array('color' => 'gold', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait order_of_the_golden_lion {
	function order_of_the_golden_lion() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'dark_green', 'width' => 35),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function order_of_the_golden_lion_one() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 1),
				array('color' => 'dark_green', 'width' => 33),
				array('color' => 'gold', 'width' => 1),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function order_of_the_golden_lion_two() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 2),
				array('color' => 'dark_green', 'width' => 31),
				array('color' => 'gold', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait order_of_queen_elizabeth {
	function order_of_queen_elizabeth() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'silver', 'width' => 35),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function order_of_queen_elizabeth_one() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 1),
				array('color' => 'silver', 'width' => 33),
				array('color' => 'gold', 'width' => 1),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function order_of_queen_elizabeth_two() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 2),
				array('color' => 'silver', 'width' => 31),
				array('color' => 'gold', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait order_of_king_roger {
	function order_of_king_roger() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'scarlet', 'width' => 35),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function order_of_king_roger_one() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 1),
				array('color' => 'scarlet', 'width' => 33),
				array('color' => 'gold', 'width' => 1),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function order_of_king_roger_two() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 2),
				array('color' => 'scarlet', 'width' => 31),
				array('color' => 'gold', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait distinguished_service_order {
	function distinguished_service_order() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'navy_blue', 'width' => 6),
				array('color' => 'blood_red', 'width' => 23),
				array('color' => 'navy_blue', 'width' => 6),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait sphinx_cross {
	function sphinx_cross() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'purple', 'width' => 10),
				array('color' => 'white', 'width' => 3),
				array('color' => 'crimson', 'width' => 3),
				array('color' => 'white', 'width' => 3),
				array('color' => 'crimson', 'width' => 3),
				array('color' => 'white', 'width' => 3),
				array('color' => 'purple', 'width' => 10),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait order_of_the_crown_for_naval_service {
	function order_of_the_crown_for_naval_service() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'navy_blue', 'width' => 15.5),
				array('color' => 'blood_red', 'width' => 4),
				array('color' => 'navy_blue', 'width' => 15.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait queens_cross_for_bravery {
	function queens_cross_for_bravery() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'forest_green', 'width' => 35),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait gryphon_star {
	function gryphon_star() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'forest_green', 'width' => 9),
				array('color' => 'white', 'width' => 5),
				array('color' => 'forest_green', 'width' => 7),
				array('color' => 'white', 'width' => 5),
				array('color' => 'forest_green', 'width' => 9),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait queens_bravery_medal {
	function queens_bravery_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'forest_green', 'width' => 10.5),
				array('color' => 'crimson', 'width' => 4),
				array('color' => 'white', 'width' => 2),
				array('color' => 'crimson', 'width' => 4),
				array('color' => 'forest_green', 'width' => 10.5),
				array('color' => 'crimson', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait conspicuous_bravery_medal {
	function conspicuous_bravery_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'forest_green', 'width' => 12.5),
				array('color' => 'white', 'width' => 4),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'white', 'width' => 4),
				array('color' => 'forest_green', 'width' => 12.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait conspicuous_service_medal {
	function conspicuous_service_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'scarlet', 'width' => 2),
				array('color' => 'emerald', 'width' => 8),
				array('color' => 'scarlet', 'width' => 15),
				array('color' => 'emerald', 'width' => 8),
				array('color' => 'scarlet', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait meritorious_service_medal {
	function meritorious_service_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'emerald', 'width' => 2),
				array('color' => 'scarlet', 'width' => 8),
				array('color' => 'emerald', 'width' => 15),
				array('color' => 'scarlet', 'width' => 8),
				array('color' => 'emerald', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait navy_commendation_decoration {
	function navy_commendation_decoration() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'scarlet', 'width' => 4.5),
				array('color' => 'emerald', 'width' => 3),
				array('color' => 'purple', 'width' => 2),
				array('color' => 'emerald', 'width' => 3),
				array('color' => 'scarlet', 'width' => 10),
				array('color' => 'emerald', 'width' => 3),
				array('color' => 'purple', 'width' => 2),
				array('color' => 'emerald', 'width' => 3),
				array('color' => 'scarlet', 'width' => 4.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait navy_marine_achievement_medal {
	function navy_marine_achievement_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'purple', 'width' => 4.5),
				array('color' => 'emerald', 'width' => 3),
				array('color' => 'scarlet', 'width' => 2),
				array('color' => 'emerald', 'width' => 3),
				array('color' => 'purple', 'width' => 10),
				array('color' => 'emerald', 'width' => 3),
				array('color' => 'scarlet', 'width' => 2),
				array('color' => 'emerald', 'width' => 3),
				array('color' => 'purple', 'width' => 4.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait fleet_excellence_award {
	function fleet_excellence_award() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'space_black', 'width' => 27),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'crimson', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);

		$this->generic_center_device('devices/letter_e.png');
	}
}

trait prisoner_of_war_medal {
	function prisoner_of_war_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 11.5),
				array('color' => 'crimson', 'width' => 8),
				array('color' => 'charcoal_grey', 'width' => 11.5),
				array('color' => 'gold', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait silesian_antipiracy_campaign_medal {
	function silesian_antipiracy_campaign_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'scarlet', 'width' => 5),
				array('color' => 'royal_blue', 'width' => 11),
				array('color' => 'gold', 'width' => 3),
				array('color' => 'royal_blue', 'width' => 11),
				array('color' => 'scarlet', 'width' => 5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait list_of_honor_citation {
	function list_of_honor_citation() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'space_black', 'width' => 6),
				array('color' => 'blood_red', 'width' => 23),
				array('color' => 'space_black', 'width' => 6),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);

		$this->generic_center_device('devices/gold_scroll.png');
		$this->generic_border('devices/gold_border.png');
	}
}

trait royal_unit_citation_for_gallantry {
	function royal_unit_citation_for_gallantry() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'scarlet', 'width' => 6),
				array('color' => 'gold', 'width' => 23),
				array('color' => 'scarlet', 'width' => 6),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);

		$this->generic_border('devices/gold_border.png');
	}
}

trait royal_meritorious_unit_citation {
	function royal_meritorious_unit_citation() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 6),
				array('color' => 'scarlet', 'width' => 23),
				array('color' => 'gold', 'width' => 6),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);

		$this->generic_border('devices/gold_border.png');
	}
}

trait masadan_occupation_medal {
	function masadan_occupation_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'crimson', 'width' => 4),
				array('color' => 'gold', 'width' => 3.8),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'gold', 'width' => 3.8),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'gold', 'width' => 3.8),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'gold', 'width' => 3.8),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'gold', 'width' => 3.8),
				array('color' => 'crimson', 'width' => 4),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait manticoran_service_medal {
	function manticoran_service_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 19),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'crimson', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait navy_rifle {
	function navy_rifle_high_expert_shooter() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 6),
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 6.5),
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 6.5),
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 6),
				array('color' => 'rose', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function navy_rifle_expert_shooter() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 6),
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 15),
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 6),
				array('color' => 'rose', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function navy_rifle_sharpshooter() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 14.5),
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 14.5),
				array('color' => 'rose', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait havenite_war_campaign_medal {
	function havenite_war_campaign_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'blood_red', 'width' => 2),
				array('color' => 'forest_green', 'width' => 9.5),
				array('color' => 'white', 'width' => 4),
				array('color' => 'space_black', 'width' => 4),
				array('color' => 'white', 'width' => 4),
				array('color' => 'forest_green', 'width' => 9.5),
				array('color' => 'blood_red', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait manticoran_reserve_service_medal {
	function manticoran_reserve_service_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'royal_blue', 'width' => 2),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 2),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'crimson', 'width' => 19),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 2),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait navy_pistol {
	function navy_pistol_high_expert_shooter() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'charcoal_grey', 'width' => 8),
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 4.5),
				array('color' => 'rose', 'width' => 6),
				array('color' => 'charcoal_grey', 'width' => 4.5),
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 8),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function navy_pistol_expert_shooter() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'rose', 'width' => 2),
				array('color' => 'charcoal_grey', 'width' => 12.5),
				array('color' => 'rose', 'width' => 6),
				array('color' => 'charcoal_grey', 'width' => 12.5),
				array('color' => 'rose', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function navy_pistol_sharpshooter() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'charcoal_grey', 'width' => 14.5),
				array('color' => 'rose', 'width' => 6),
				array('color' => 'charcoal_grey', 'width' => 14.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait havenite_operation_service_medal {
	function havenite_operation_service_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'blood_red', 'width' => 2),
				array('color' => 'forest_green', 'width' => 9.5),
				array('color' => 'space_black', 'width' => 4),
				array('color' => 'gold', 'width' => 4),
				array('color' => 'space_black', 'width' => 4),
				array('color' => 'forest_green', 'width' => 9.5),
				array('color' => 'blood_red', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait good_conduct_medal {
	function good_conduct_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'orange', 'width' => 7.5),
				array('color' => 'crimson', 'width' => 3),
				array('color' => 'orange', 'width' => 14),
				array('color' => 'crimson', 'width' => 3),
				array('color' => 'orange', 'width' => 7.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait space_service_deployment_ribbon {
	function space_service_deployment_ribbon() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 4),
				array('color' => 'space_black', 'width' => 27),
				array('color' => 'gold', 'width' => 4),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait manticoran_combat_action_medal {
	function manticoran_combat_action_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'forest_green', 'width' => 6),
				array('color' => 'blood_red', 'width' => 23),
				array('color' => 'forest_green', 'width' => 6),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait king_roger_iii_coronation_medal {
	function king_roger_iii_coronation_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'silver', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 14.5),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 14.5),
				array('color' => 'silver', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait queen_elizabeth_iii_coronation_medal {
	function queen_elizabeth_iii_coronation_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'silver', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 12.5),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 12.5),
				array('color' => 'silver', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait grand_alliance_campaign_medal {
	function grand_alliance_campaign_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'navy_blue', 'width' => 4.33),
				array('color' => 'light_blue', 'width' => 3),
				array('color' => 'navy_blue', 'width' => 4.33),

				array('color' => 'space_black', 'width' => 4.33),
				array('color' => 'gold', 'width' => 3.01),
				array('color' => 'space_black', 'width' => 4.33),

				array('color' => 'forest_green', 'width' => 4.33),
				array('color' => 'silver', 'width' => 3),
				array('color' => 'forest_green', 'width' => 4.33),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait adrienne_cross {
	function adrienne_cross() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'crimson', 'width' => 35),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
		$this->generic_center_device('devices/bronze_maltese_cross.png');
	}
}

trait cormany_star {
	function cormany_star() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 1),
				array('color' => 'dark_green', 'width' => 16),
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'dark_green', 'width' => 16),
				array('color' => 'gold', 'width' => 1),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait distinguished_service_medal {
	function distinguished_service_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 1),
				array('color' => 'light_blue', 'width' => 16),
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'light_blue', 'width' => 16),
				array('color' => 'gold', 'width' => 1),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait manticore_medal {
	function manticore_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 1),
				array('color' => 'dark_green', 'width' => 15),
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'white', 'width' => 1),
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'dark_green', 'width' => 15),
				array('color' => 'gold', 'width' => 1),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait leonard_medal {
	function leonard_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 1),
				array('color' => 'light_blue', 'width' => 15),
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'white', 'width' => 1),
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'light_blue', 'width' => 15),
				array('color' => 'gold', 'width' => 1),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait medal_of_gallantry {
	function medal_of_gallantry() {
		$line = $this->height / $this->base_height;

		$line_start = 0;
		$line_end = $line * 1;
		imagefilledrectangle($this->ribbon, 0, 0, $this->width, $line_end, $this->dark_green);

		$line_start = $line_end;
		$line_end = $line_end + ($line * 2);
		imagefilledrectangle($this->ribbon, 0, $line_start, $this->width, $line_end, $this->gold);

		$line_start = $line_end;
		$line_end = $line_end + ($line * 3);
		imagefilledrectangle($this->ribbon, 0, $line_start, $this->width, $line_end, $this->dark_green);

		$line_start = $line_end;
		$line_end = $line_end + ($line * 2);
		imagefilledrectangle($this->ribbon, 0, $line_start, $this->width, $line_end, $this->gold);

		$line_start = $line_end;
		$line_end = $line_end + $line;
		imagefilledrectangle($this->ribbon, 0, $line_start, $this->width, $line_end, $this->dark_green);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait army_medal {
	function army_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'orange', 'width' => 1),
				array('color' => 'emerald_green', 'width' => 16),
				array('color' => 'purple', 'width' => 1),
				array('color' => 'emerald_green', 'width' => 16),
				array('color' => 'orange', 'width' => 1),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait order_of_the_crown_for_army_service {
	function order_of_the_crown_for_army_service() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'blood_red', 'width' => 15.5),
				array('color' => 'navy_blue', 'width' => 4),
				array('color' => 'blood_red', 'width' => 15.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait rma_conspicuous_service_medal {
	function rma_conspicuous_service_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'royal_blue', 'width' => 2),
				array('color' => 'gold', 'width' => 8),
				array('color' => 'royal_blue', 'width' => 15),
				array('color' => 'gold', 'width' => 8),
				array('color' => 'royal_blue', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait rma_meritorious_service_medal {
	function rma_meritorious_service_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 8),
				array('color' => 'gold', 'width' => 15),
				array('color' => 'royal_blue', 'width' => 8),
				array('color' => 'gold', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait army_commendation_decoration {
	function army_commendation_decoration() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'royal_blue', 'width' => 4.5),
				array('color' => 'gold', 'width' => 3),
				array('color' => 'purple', 'width' => 2),
				array('color' => 'gold', 'width' => 3),
				array('color' => 'royal_blue', 'width' => 10),
				array('color' => 'gold', 'width' => 3),
				array('color' => 'purple', 'width' => 2),
				array('color' => 'gold', 'width' => 3),
				array('color' => 'royal_blue', 'width' => 4.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait army_achievement_medal {
	function army_achievement_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'purple', 'width' => 4.5),
				array('color' => 'royal_blue', 'width' => 3),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 3),
				array('color' => 'purple', 'width' => 10),
				array('color' => 'royal_blue', 'width' => 3),
				array('color' => 'gold', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 3),
				array('color' => 'purple', 'width' => 4.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait army_regimental_excellence_award {
	function army_regimental_excellence_award() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'orange', 'width' => 2),
				array('color' => 'blood_red', 'width' => 2),
				array('color' => 'dark_green', 'width' => 27),
				array('color' => 'blood_red', 'width' => 2),
				array('color' => 'orange', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait rma_masadan_occupation_medal {
	function rma_masadan_occupation_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'cool_grey', 'width' => 4),
				array('color' => 'dark_green', 'width' => 7.5),
				array('color' => 'charcoal_grey', 'width' => 4),
				array('color' => 'light_blue', 'width' => 4),
				array('color' => 'charcoal_grey', 'width' => 4),
				array('color' => 'dark_green', 'width' => 7.5),
				array('color' => 'cool_grey', 'width' => 4),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait silesean_peacekeeping_and_observational_medal {
	function silesean_peacekeeping_and_observational_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'gold', 'width' => 5),
				array('color' => 'dark_green', 'width' => 6.5),
				array('color' => 'light_blue', 'width' => 4),
				array('color' => 'blood_red', 'width' => 4),
				array('color' => 'light_blue', 'width' => 4),
				array('color' => 'dark_green', 'width' => 6.5),
				array('color' => 'gold', 'width' => 5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait army_space_duty_ribbon {
	function army_space_duty_ribbon() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'dark_green', 'width' => 4),
				array('color' => 'space_black', 'width' => 11.5),
				array('color' => 'dark_green', 'width' => 4),
				array('color' => 'space_black', 'width' => 11.5),
				array('color' => 'dark_green', 'width' => 4),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait star_of_grayson {
	function star_of_grayson() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'blood_red', 'width' => 35),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait austin_medal {
	function austin_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'light_blue', 'width' => 35),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait distinguished_service_star {
	function distinguished_service_star() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'violet', 'width' => 14.5),
				array('color' => 'crimson', 'width' => 6),
				array('color' => 'violet', 'width' => 14.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait legion_of_military_merit {
	function legion_of_military_merit_commander() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'cool_grey', 'width' => 5),
				array('color' => 'crimson', 'width' => 25),
				array('color' => 'cool_grey', 'width' => 5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
		$this->generic_center_device('devices/gold_swords.png');
	}

	function legion_of_military_merit_officer() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'cool_grey', 'width' => 5),
				array('color' => 'crimson', 'width' => 25),
				array('color' => 'cool_grey', 'width' => 5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
		$this->generic_center_device('devices/silver_swords.png');
	}

	function legion_of_military_merit_member() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'cool_grey', 'width' => 5),
				array('color' => 'crimson', 'width' => 25),
				array('color' => 'cool_grey', 'width' => 5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
		$this->generic_center_device('devices/bronze_swords.png');
	}
}

trait naval_star_of_gallantry {
	function naval_star_of_gallantry() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'light_blue', 'width' => 15),
				array('color' => 'forest_green', 'width' => 5),
				array('color' => 'light_blue', 'width' => 15),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait distinguished_service_decoration {
	function distinguished_service_decoration() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'violet', 'width' => 14.5),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'white', 'width' => 2),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'violet', 'width' => 14.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait naval_medal_of_gallantry {
	function naval_medal_of_gallantry() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'forest_green', 'width' => 2),
				array('color' => 'light_blue', 'width' => 13),
				array('color' => 'forest_green', 'width' => 5),
				array('color' => 'light_blue', 'width' => 13),
				array('color' => 'forest_green', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait gsn_distinguished_service_medal {
	function gsn_distinguished_service_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'violet', 'width' => 5),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'violet', 'width' => 5),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'violet', 'width' => 3),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'violet', 'width' => 5),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'violet', 'width' => 5),
				array('color' => 'crimson', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait grayson_medal {
	function grayson_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'rose', 'width' => 13.5),
				array('color' => 'cool_grey', 'width' => 8),
				array('color' => 'rose', 'width' => 13.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait navy_wound_medal {
	function navy_wound_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'crimson', 'width' => 11),
				array('color' => 'white', 'width' => 3),
				array('color' => 'crimson', 'width' => 7),
				array('color' => 'white', 'width' => 3),
				array('color' => 'crimson', 'width' => 11),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait medal_of_courage {
	function medal_of_courage() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'violet', 'width' => 4.5),
				array('color' => 'gold', 'width' => 3),
				array('color' => 'violet', 'width' => 2),
				array('color' => 'gold', 'width' => 3),
				array('color' => 'violet', 'width' => 10),
				array('color' => 'gold', 'width' => 3),
				array('color' => 'violet', 'width' => 2),
				array('color' => 'gold', 'width' => 3),
				array('color' => 'violet', 'width' => 4.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait meritorious_service_star {
	function meritorious_service_star() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'turquoise', 'width' => 13.5),
				array('color' => 'kelly_green', 'width' => 8),
				array('color' => 'turquoise', 'width' => 13.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait meritorious_service_decoration {
	function meritorious_service_decoration() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'turquoise', 'width' => 12),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'kelly_green', 'width' => 8),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'turquoise', 'width' => 12),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait gsn_meritorious_service_medal {
	function gsn_meritorious_service_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'turquoise', 'width' => 2),
				array('color' => 'kelly_green', 'width' => 1),
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'kelly_green', 'width' => 1),
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'kelly_green', 'width' => 1),
				array('color' => 'turquoise', 'width' => 21),
				array('color' => 'kelly_green', 'width' => 1),
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'kelly_green', 'width' => 1),
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'kelly_green', 'width' => 1),
				array('color' => 'turquoise', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait gsn_commendation_medal {
	function gsn_commendation_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'purple', 'width' => 2),
				array('color' => 'emerald', 'width' => 31),
				array('color' => 'purple', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait gsn_achievement_medal {
	function gsn_achievement_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'purple', 'width' => 2),
				array('color' => 'emerald', 'width' => 14.5),
				array('color' => 'purple', 'width' => 2),
				array('color' => 'emerald', 'width' => 14.5),
				array('color' => 'purple', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait protectors_unit_citation_for_gallantry {
	function protectors_unit_citation_for_gallantry() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'light_blue', 'width' => 35),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
		$this->generic_border('devices/gold_border.png');
	}
}

trait naval_meritorious_unit_award {
	function naval_meritorious_unit_award() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'emerald', 'width' => 35),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
		$this->generic_border('devices/gold_border.png');
	}
}

trait navy_battle_efficiency_medal {
	function navy_battle_efficiency_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'space_black', 'width' => 2),
				array('color' => 'light_blue', 'width' => 14.5),
				array('color' => 'space_black', 'width' => 2),
				array('color' => 'light_blue', 'width' => 14.5),
				array('color' => 'space_black', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait grayson_masada_war_campaign_medal {
	function grayson_masada_war_campaign_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'royal_blue', 'width' => 14.5),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 2),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 14.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait second_grayson_masada_war_campaign_medal {
	function second_grayson_masada_war_campaign_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 12.5),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 2),
				array('color' => 'crimson', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 12.5),
				array('color' => 'crimson', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait grayson_havenite_campaign_medal {
	function grayson_havenite_campaign_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'royal_blue', 'width' => 14.5),
				array('color' => 'dark_green', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 2),
				array('color' => 'dark_green', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 14.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait space_action_medal {
	function space_action_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'jade', 'width' => 14.5),
				array('color' => 'ruby', 'width' => 6),
				array('color' => 'jade', 'width' => 14.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait gsn_long_service_and_good_conduct_medal {
	function gsn_long_service_and_good_conduct_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'light_blue', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 14.5),
				array('color' => 'light_blue', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 14.5),
				array('color' => 'light_blue', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait gsn_reserve_long_service_and_good_conduct_medal {
	function gsn_reserve_long_service_and_good_conduct_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'light_blue', 'width' => 2),
				array('color' => 'royal_blue', 'width' => 31),
				array('color' => 'light_blue', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait gsn_recruit_training_ribbon {
	function gsn_recruit_training_ribbon() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'forest_green', 'width' => 16),
				array('color' => 'crimson', 'width' => 1),
				array('color' => 'forest_green', 'width' => 16),
				array('color' => 'crimson', 'width' => 1),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait nco_senior_course_ribbon {
	function nco_senior_course_ribbon() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'emerald', 'width' => 3),
				array('color' => 'white', 'width' => 2),
				array('color' => 'yellow', 'width' => 2),
				array('color' => 'white', 'width' => 2),
				array('color' => 'emerald', 'width' => 3),
				array('color' => 'royal_blue', 'width' => 11),
				array('color' => 'emerald', 'width' => 3),
				array('color' => 'white', 'width' => 2),
				array('color' => 'yellow', 'width' => 2),
				array('color' => 'white', 'width' => 2),
				array('color' => 'emerald', 'width' => 3),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait navy_service_medal {
	function navy_service_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'royal_blue', 'width' => 5),
				array('color' => 'white', 'width' => 3),
				array('color' => 'crimson', 'width' => 19),
				array('color' => 'white', 'width' => 3),
				array('color' => 'royal_blue', 'width' => 5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait space_service_ribbon {
	function space_service_ribbon() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'light_blue', 'width' => 2),
				array('color' => 'navy_blue', 'width' => 31),
				array('color' => 'light_blue', 'width' => 2),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait grayson_champion_shots_medal {
	function grayson_champion_shots_medal() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'emerald', 'width' => 4),
				array('color' => 'blood_red', 'width' => 11.5),
				array('color' => 'emerald', 'width' => 4),
				array('color' => 'blood_red', 'width' => 11.5),
				array('color' => 'emerald', 'width' => 4),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait gsn_distinguished_weapons_qualification_medal {
	function gsn_distinguished_weapons_qualification_medal_one() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'crimson', 'width' => 9.5),
				array('color' => 'white', 'width' => 2),
				array('color' => 'crimson', 'width' => 5),
				array('color' => 'white', 'width' => 2),
				array('color' => 'crimson', 'width' => 5),
				array('color' => 'white', 'width' => 2),
				array('color' => 'crimson', 'width' => 9.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function gsn_distinguished_weapons_qualification_medal_two() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'crimson', 'width' => 9.5),
				array('color' => 'white', 'width' => 2),
				array('color' => 'crimson', 'width' => 12),
				array('color' => 'white', 'width' => 2),
				array('color' => 'crimson', 'width' => 9.5),
			)
		);

		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}

trait hidden_ribbons {
	function hidden_ribbon_one() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'purple', 'width' => 10),
				array('color' => 'white', 'width' => 3),
				array('color' => 'scarlet', 'width' => 3),
				array('color' => 'white', 'width' => 3),
				array('color' => 'scarlet', 'width' => 3),
				array('color' => 'white', 'width' => 3),
				array('color' => 'purple', 'width' => 10),
			)
		);
		
		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}

	function hidden_ribbon_two() {
		$this->generic_vertical_bars(
			array(
				array('color' => 'emerald', 'width' => 5),
				array('color' => 'blood_red', 'width' => 25),
				array('color' => 'emerald', 'width' => 5),
			)
		);
		
		imagecopyresampled($this->ribbon, $this->ribbon_texture, 0, 0, mt_rand(0, imagesx($this->ribbon_texture) - $this->width), mt_rand(0, imagesy($this->ribbon_texture) - $this->height), $this->width, $this->height, $this->width, $this->height);
	}
}
