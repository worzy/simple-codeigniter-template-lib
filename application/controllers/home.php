<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		
		parent::__construct();
	}

	public function index() {

		$this->data['title'] = "Home meta title";
		$this->data['description'] = "Home meta description";

		$this->template->render('home/index', $this->data);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */