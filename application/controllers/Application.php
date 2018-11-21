<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

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

    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('form','url'));
        $this->load->model('AdminModel');	// loads admin model

    }
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('welcome_message');
		$this->load->view('layout/footer');
		

	}

    public function prospects() {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');

        $data['prospect_data'] = $this->AdminModel->getData('prospect');
        //echo '<pre>';print_r($data['prospect_data']); die;
        $this->load->view('prospects');
        $this->load->view('layout/footer');
    }


    public function add_prospects() {

         //echo '<pre>'; print_r($_REQUEST);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        if(isset($_POST['submit'])) {
            unset($_REQUEST['submit']);
            $this->db->insert('prospect',$_REQUEST);
             $this->prospects();
            return;
        } else {
            $this->load->view('add_prospects');

        }
        $this->load->view('layout/footer');
    }


	public function follw() {
      $data['follw_data'] = $this->AdminModel->getData('follow_up');

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('follow_up', $data);
        $this->load->view('layout/footer');

    }
    public function agencies() {
        $data['agencies_data'] = $this->AdminModel->getData('agency');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('agency',$data);    
        $this->load->view('layout/footer');


    }
    public function add_agencies() {
       if(isset($_POST['registration_no'])) { 
             $this->db->insert('agency',$_REQUEST);
            $this->agencies();
            return;
        } 


    }

    public function deleteRow() {

       echo $this->AdminModel->row_delete($_REQUEST['id'], 'agency');
    }

    public function agent() {

        $data['agencies_data'] = $this->AdminModel->getData('agency');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('agent',$data);    
        $this->load->view('layout/footer');
    }

    public function add_agent()  {
        if(isset($_POST['agency'])) { 
             $this->db->insert('agent',$_REQUEST);
            $this->agencies();
            return;
        } 
    }

}
