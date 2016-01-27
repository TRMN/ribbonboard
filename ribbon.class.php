<?php
class GenericRibbon {
	protected $ribbon;
	protected $width;
	protected $height;

	protected $space_black;
	protected $charcoal_grey;
	protected $silver;
	protected $white;
	protected $blood_red;
	protected $crimson;
	protected $scarlet;
	protected $orange;
	protected $gold;
	protected $yellow;
	protected $emerald;
	protected $forest_green;
	protected $dark_green;
	protected $navy_blue;
	protected $royal_blue;
	protected $light_blue;
	protected $purple;
	protected $rose;

	protected $base_width = 35;
	protected $base_height = 9;
	protected $base_device_height = 6;

	protected $multi_device = 'devices/bronze_star.png';

	protected $organization;

	public function __construct() {
		$this->ribbon_texture = imagecreatefrompng('textures/ribbon_texture.png');
		$this->board_texture = imagecreatefrompng('textures/board_texture.png');

		$db_user = 'kydance_trmn';
		$db_pass = 'rQ5ZMhWhvbmxT2K3';
		$db_db = 'kydance_trmn';
		$this->dbh = mysqli_connect('localhost', $db_user, $db_pass, $db_db);
	}

	public function init($width, $height) {
		$this->ribbon = imagecreatetruecolor($width, $height);

		$this->width = $width;
		$this->height = $height;

		$this->space_black 		= imagecolorallocate($this->ribbon,  26,  39,  50);
		$this->charcoal_grey	= imagecolorallocate($this->ribbon,  68,  79,  81);
		$this->cool_grey		= imagecolorallocate($this->ribbon, 112, 138, 144);
		$this->silver			= imagecolorallocate($this->ribbon, 198, 199, 201);
		$this->white			= imagecolorallocate($this->ribbon, 255, 255, 255);
		$this->blood_red		= imagecolorallocate($this->ribbon, 117,  38,  61);
		$this->crimson			= imagecolorallocate($this->ribbon, 175,  30,  45);
		$this->scarlet			= imagecolorallocate($this->ribbon, 232,  17,  45);
		$this->orange			= imagecolorallocate($this->ribbon, 246, 126,   0);
		$this->gold				= imagecolorallocate($this->ribbon, 173, 155,  12);
		$this->yellow			= imagecolorallocate($this->ribbon, 252, 209,  22);
		$this->emerald			= imagecolorallocate($this->ribbon,   0, 183,  96);
		$this->forest_green		= imagecolorallocate($this->ribbon,   0, 122,  61);
		$this->emerald_green	= imagecolorallocate($this->ribbon,   0, 183,  96);
		$this->dark_green		= imagecolorallocate($this->ribbon,  35,  79,  51);
		$this->navy_blue		= imagecolorallocate($this->ribbon,  17,  33,  81);
		$this->royal_blue		= imagecolorallocate($this->ribbon, 102,  86, 188);
		$this->light_blue		= imagecolorallocate($this->ribbon, 155, 196, 226);
		$this->purple			= imagecolorallocate($this->ribbon, 112,  53, 114);
		$this->rose				= imagecolorallocate($this->ribbon, 211, 107, 158);
		$this->violet			= imagecolorallocate($this->ribbon,  86,   0, 140);
		$this->kelly_green		= imagecolorallocate($this->ribbon,  76, 187,  23);
		$this->turquoise		= imagecolorallocate($this->ribbon,   0, 140, 130);
		$this->jade				= imagecolorallocate($this->ribbon,   0, 178, 122);
		$this->ruby				= imagecolorallocate($this->ribbon, 229,   5,  58);
	}

	public function individual_award_details() {
		$return = array();
		$res = mysqli_query($this->dbh, "SELECT * FROM ribbons WHERE FIND_IN_SET('{$this->organization}', organization) > 0 AND unit = 0 AND enabled = 1 ORDER BY display_order ASC");

		while ($row = mysqli_fetch_assoc($res)) {
			if (empty($row['precedence_set'])) {
				$return['General - Individual'][] = $row;
			} else {
				$return[$row['precedence_set']][] = $row;
			}
		}

		return $return;
	}

	public function unit_award_details() {
		$return = array();
		$res = mysqli_query($this->dbh, "SELECT * FROM ribbons WHERE FIND_IN_SET('{$this->organization}', organization) > 0 AND unit = 1 AND enabled = 1 ORDER BY display_order ASC");

		while ($row = mysqli_fetch_assoc($res)) {
			if (empty($row['precedence_set'])) {
				$return['General - Unit'][] = $row;
			} else {
				$return[$row['precedence_set']][] = $row;
			}
		}

		return $return;
	}

	public function render_ribbon($count = 1, $filename = false, $board = false) {
		if ($count > 1) {
			$this->generic_multi_device($this->multi_device, $count - 1);
		}

		if ($board == false) {
			if ($filename == false) {
				imagepng($this->ribbon, null, 9);
			} else {
				imagepng($this->ribbon, $filename, 9);
			}
			imagedestroy($this->ribbon);
		}
	}

	public function render_board($ribbons, $ribbon_width, $ribbon_height, $cache_file = null) {
		$this->init($ribbon_width, $ribbon_height);

		$check_string = implode(",", array_keys($ribbons));

		$res = mysqli_query($this->dbh, $query = "SELECT * FROM ribbons r1 WHERE id IN (".$check_string.") AND IF(precedence_set IS NULL, 1, IF(display_order = (SELECT MIN(display_order) FROM ribbons r2 WHERE id IN (".$check_string.") AND r1.precedence_set = r2.precedence_set), 1, 0)) AND enabled=1 ORDER BY IFNULL(display_order, 999) ASC");

		if (!empty($_GET['debug'])) {
			echo $query;
		}

		$new_ribbons = array();
		while ($row = mysqli_fetch_assoc($res)) {
			$new_ribbons[] = $row['id'];
		}

		if (count($new_ribbons) > 12) {
			$columns = 4;
		} else {
			$columns = 3;
		}

		$rows = ceil(count($new_ribbons) / $columns);

		$h_spacer = $this->width / $this->base_width;
		$v_spacer = $this->height / $this->base_height;

		$width = ($columns * $this->width) + (($columns + 7) * ($this->width / $this->base_width));
		$height = ($rows * $this->height) + (($rows + 7) * ($this->height / $this->base_height));

		$board = imagecreatetruecolor($width, $height);

		$this->rmn_board_color	= imagecolorallocate($board,  26,  39,  50);
		$this->gsn_board_color	= imagecolorallocate($board, 155, 196, 226);
		$this->rma_board_color	= imagecolorallocate($board,  35,  79,  51);
		$this->civilian_board_color	= imagecolorallocate($board,  255,  255,  255);

		$color_prop = $this->organization.'_board_color';
		imagefilledrectangle($board, 0, 0, $width, $height, $this->{$color_prop});

		imagecopyresampled($board, $this->board_texture, 0, 0, mt_rand(0, imagesx($this->board_texture) - $width), mt_rand(0, imagesy($this->board_texture) - $height), $width, $height, $width, $height);

		$row = 0;
		if ((count($new_ribbons) % $columns) != 0) {
			$row = 1;
			$extras = count($new_ribbons) % $columns;

			$left_padding = $h_spacer * 3 + (($columns - $extras) * ($ribbon_width + $h_spacer)) / 2;

			$i = 0;
			while ($extras > 0) {
				$ribbon = array_shift($new_ribbons);
				$res = mysqli_query($this->dbh, $query = "SELECT * FROM ribbons WHERE id = {$ribbon}");
				$data = mysqli_fetch_assoc($res);

				$this->init($ribbon_width, $ribbon_height);
				$this->{$data['method_name']}();

				$this->render_ribbon($ribbons[$ribbon], false, true);

				$dest_x = $left_padding + $h_spacer + (($h_spacer + $ribbon_width) * ($i % $columns));
				$dest_y = $v_spacer*4 + (($v_spacer + $ribbon_height) * ($row - 1));

				imagecopyresampled($board, $this->ribbon, $dest_x, $dest_y, 0, 0, $ribbon_width, $ribbon_height, $ribbon_width, $ribbon_height);
				imagedestroy($this->ribbon);

				$extras--;
				$i++;
			}
		}

		for ($i = 0; $i < count($new_ribbons); $i++) {
			if (($i % $columns) == 0) {
				$row++;
			}

			$ribbon = $new_ribbons[$i];
			$res = mysqli_query($this->dbh, $query = "SELECT * FROM ribbons WHERE id = {$ribbon}");
			$data = mysqli_fetch_assoc($res);

			$this->init($ribbon_width, $ribbon_height);
			$this->{$data['method_name']}();

			$this->render_ribbon($ribbons[$ribbon], false, true);

			$dest_x = $h_spacer*4 + (($h_spacer + $ribbon_width) * ($i % $columns));
			$dest_y = $v_spacer*4 + (($v_spacer + $ribbon_height) * ($row - 1));

			imagecopyresampled($board, $this->ribbon, $dest_x, $dest_y, 0, 0, $ribbon_width, $ribbon_height, $ribbon_width, $ribbon_height);
			imagedestroy($this->ribbon);
		}

		// Create indexed version, to see if the palette will fit
		$indexed = imagecreate($width, $height);
		imagecopy($indexed, $board, 0, 0, 0, 0, $width, $height);

		if (imagecolorstotal($indexed) < 256) {
			imagepng($indexed, $cache_file, 9);
		} else {
			imagepng($board, $cache_file, 9);
		}
	}

	public function render_test_board($ribbons, $faction, $ribbon_width, $ribbon_height) {
		$this->init($ribbon_width, $ribbon_height);

		$check_string = "'".implode("','", $ribbons)."'";

		$res = mysqli_query($this->dbh, $query = "SELECT * FROM ribbons r1 WHERE method_name IN (".$check_string.") AND IF(precedence_set IS NULL, 1, IF(display_order = (SELECT MIN(display_order) FROM ribbons r2 WHERE method_name IN (".$check_string.") AND r1.precedence_set = r2.precedence_set), 1, 0)) AND enabled=1 AND unit=0 ORDER BY IFNULL(display_order, 999) ASC");

		if (!empty($_GET['debug'])) {
			echo $query;
		}

		$new_ribbons = array();
		while ($row = mysqli_fetch_assoc($res)) {
			$new_ribbons[] = $row['method_name'];
		}
		$ribbons = $new_ribbons;

		if (count($ribbons) > 12) {
			$columns = 4;
		} else {
			$columns = 3;
		}

		$rows = ceil(count($ribbons) / $columns);

		$h_spacer = $this->width / $this->base_width;
		$v_spacer = $this->height / $this->base_height;

		$width = ($columns * $this->width) + (($columns + 1) * ($this->width / $this->base_width));
		$height = ($rows * $this->height) + (($rows + 1) * ($this->height / $this->base_height));

		$board = imagecreatetruecolor($width, $height);

		$this->rmn_board_color = imagecolorallocate($board,  26,  39,  50);
		$this->gsn_board_color = imagecolorallocate($board, 155, 196, 226);
		$this->rma_board_color = imagecolorallocate($board,  35,  79,  51);

		$color_prop = $faction.'_board_color';
		imagefilledrectangle($board, 0, 0, $width, $height, $this->{$color_prop});

		imagecopyresampled($board, $this->board_texture, 0, 0, mt_rand(0, imagesx($this->board_texture) - $width), mt_rand(0, imagesy($this->board_texture) - $height), $width, $height, $width, $height);

		$row = 0;
		if ((count($ribbons) % $columns) != 0) {
			$row = 1;
			$extras = count($ribbons) % $columns;

			$left_padding = (($columns - $extras) * ($ribbon_width + $h_spacer)) / 2;

			$i = 0;
			while ($extras > 0) {
				$ribbon_name = array_shift($ribbons);

				$this->init($ribbon_width, $ribbon_height);
				$this->{$ribbon_name}();

				$res = mysqli_query($this->dbh, $query = "SELECT * FROM ribbons WHERE method_name = '".$ribbon_name."' AND multiple = 1");

				$count = 1;
				if (mysqli_num_rows($res)) {
					$count = mt_rand(1, 5);
				}

				$this->render_ribbon($count, false, true);

				$dest_x = $left_padding + $h_spacer + (($h_spacer + $ribbon_width) * ($i % $columns));
				$dest_y = $v_spacer + (($v_spacer + $ribbon_height) * ($row - 1));

				imagecopyresampled($board, $this->ribbon, $dest_x, $dest_y, 0, 0, $ribbon_width, $ribbon_height, $ribbon_width, $ribbon_height);
				imagedestroy($this->ribbon);

				$extras--;
				$i++;
			}
		}

		for ($i = 0; $i < count($ribbons); $i++) {
			if (($i % $columns) == 0) {
				$row++;
			}

			$ribbon_name = $ribbons[$i];

			$this->init($ribbon_width, $ribbon_height);
			$this->{$ribbon_name}();

			$res = mysqli_query($this->dbh, $query = "SELECT * FROM ribbons WHERE method_name = '".$ribbon_name."' AND multiple = 1");

			$count = 1;
			if (mysqli_num_rows($res)) {
				$count = mt_rand(1, 5);
			}

			$this->render_ribbon($count, false, true);

			$dest_x = $h_spacer + (($h_spacer + $ribbon_width) * ($i % $columns));
			$dest_y = $v_spacer + (($v_spacer + $ribbon_height) * ($row - 1));

			imagecopyresampled($board, $this->ribbon, $dest_x, $dest_y, 0, 0, $ribbon_width, $ribbon_height, $ribbon_width, $ribbon_height);
			imagedestroy($this->ribbon);
		}

		imagepng($board);
	}

	protected function generic_vertical_bars($bars) {
		$line = $this->width / $this->base_width;
		$start_x = 0;

		foreach ($bars as $bar) {
			$color = $bar['color'];
			$width = $bar['width'];
			imagefilledrectangle($this->ribbon, $start_x, 0, $start_x + ($line * $width), $this->height, $this->{$color});
			$start_x += ($line * $width);
		}
	}

	protected function generic_center_device($device_file) {
		$factor = $this->base_device_height / $this->base_height;
		$device_height = $this->height * $factor;

		$device = imagecreatefrompng($device_file);
		$start_width = imagesx($device);
		$start_height = imagesy($device);

		$resize_factor = $device_height / $start_height;

		$device_width = $start_width * $resize_factor;

		$dest_x = ($this->width / 2) - ($device_width / 2);
		$dest_y = ($this->height / 2) - ($device_height / 2);

		imagecopyresampled($this->ribbon, $device, $dest_x, $dest_y, 0, 0, $device_width, $device_height, $start_width, $start_height);
	}

	protected function generic_multi_device($device_file, $count) {
		if ($count == 1) {
			$this->generic_center_device($device_file);
		} else {
			$factor = $this->base_device_height / $this->base_height;
			$device_height = $this->height * $factor;

			$device = imagecreatefrompng($device_file);

			$start_width = imagesx($device);
			$start_height = imagesy($device);

			$resize_factor = $device_height / $start_height;

			$device_width = $start_width * $resize_factor;

			$divider = $count + 1;
			$dest_y = ($this->height / 2) - ($device_height / 2);

			for ($i = 1; $i <= $count; $i++) {
				$dest_x = (($this->width / $divider) * $i) - ($device_width / 2);

				imagecopyresampled($this->ribbon, $device, $dest_x, $dest_y, 0, 0, $device_width, $device_height, $start_width, $start_height);
			}
		}
	}

	protected function generic_border($border_file) {
		$border = imagecreatefrompng($border_file);
		$start_width = imagesx($border);
		$start_height = imagesy($border);

		imagecopyresampled($this->ribbon, $border, 0, 0, 0, 0, $this->width, $this->height, $start_width, $start_height);
	}
}
