<?php

class Tmdb_test extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('tmdb');
	}

	function index() {
		$id = "tt0088247";
		$json = $this->tmdb->movieInfo($id);
		print_r(json_decode($json));
	}
}

?>