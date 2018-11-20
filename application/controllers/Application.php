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
        $this->load->helper('form','url');
        $this->load->model('AdminModel');	// loads admin model

    }
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('welcome_message');
		$this->load->view('layout/footer');
		if(isset($_POST['submit'])) {

            $this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[users.email]');
            if ($this->form_validation->run() === FALSE) {
                $this->index();
                return;
            } else  {

                $session_data=array(
                    'name'=>$this->input->post('first_name') . ' '. $this->input->post('last_name'),
                    'email'=>$this->input->post('email'),
                    'source'=>'website',
                    'sess_logged_in'=>1
                );
                $this->db->insert('users',$session_data);
                $this->session->set_userdata($session_data);

            }

        }

	}

	public function follw() {
        die('follow ');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('follow');
        $this->load->view('layout/footer');

    }
    public function agencies() { die('rere');
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('agencies');
        $this->load->view('layout/footer');


    }




}
