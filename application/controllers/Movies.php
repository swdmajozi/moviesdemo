<?php
	class Movies extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->library('tmdb');
		}

		function index() {	
		$json= $this->tmdb->getUpcomingMovies();	


	//	foreach($json[''])
print_r(json_encode($json));


		$json['data'] = $json ;
	      $this->load->view('Movies',$json);		
		}


		function GetMovies(){
			$json = $this->tmdb->getUpcomingMovies();		
			echo json_encode($json);

		}
	}
?>