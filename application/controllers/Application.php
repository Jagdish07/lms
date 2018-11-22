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
        $this->load->view('prospects' , $data);
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

        if(isset($_POST['search_btn'])) {
echo '<pre>'; print_r($_REQUEST); die;

        }

        $data['agencies_data'] = $this->AdminModel->getData('agency');
        $agency =  array();
        foreach ($data['agencies_data'] as  $records) {
            $agency[$records['id']] = $records;

        }
        $data['agency'] =  $agency;
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

    public function edit_agencies() {


        if(isset($_POST['registration_no'])) {

            $table = 'agency';
            $where =  array('id'=> $_REQUEST['id']);

            unset($_REQUEST['id']);

            $data =  $_REQUEST;
            $this->AdminModel->updateData($where,$data,$table);
            $this->agencies();
            return;
        }
    }


    public function  update_agency(){

        $userrow =  urldecode($_REQUEST['obj']);
        $data['json_data'] =  json_decode($userrow);

        $abc =   $this->load->view('update', $data);

    }


    public function deleteRow() {

        $this->AdminModel->row_delete($_REQUEST['id'], $_REQUEST['table']);
    }

    public function agent() {
        $agent  =  array();
        $data['agencies_data'] = $this->AdminModel->getData('agency');

        $data['agent_data'] = $this->AdminModel->getData('agent');

        foreach ($data['agent_data'] as $agents) {

            $agent[$agents['id']] =   $agents;
        }
        $data['agents'] =$agent;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('agent',$data);    
        $this->load->view('layout/footer');
    }

    public function add_agent()  {

        if(isset($_POST['agency_id'])) {
             $this->db->insert('agent',$_REQUEST);
            $this->agent();
            return;
        } 
    }


    public  function  update_agent() {


        $userrow =  urldecode($_REQUEST['obj']);
        $data['json_data'] =  json_decode($userrow);

        $abc =   $this->load->view('agent_update', $data);

    }

    public function edit_agent() {

        echo '<pre>'; print_r($_REQUEST); die;
        if(isset($_POST['registration_no'])) {

            $table = 'agent';
            $where =  array('id'=> $_REQUEST['id']);

            unset($_REQUEST['id']);

            $data =  $_REQUEST;
            $this->AdminModel->updateData($where,$data,$table);
            $this->agencies();
            return;
        }
    }


}
