<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

	public function index()
	{
		$this->load->view('common/common_header');
		$this->load->view('event');
		$this->load->view('common/footer');
	}
	public function eventDetails()
	{
		$this->load->view('common/common_header');
		$this->load->view('common/event_details_header');
		$this->load->view('eventDetails');
		$this->load->view('common/footer');
	}
}
