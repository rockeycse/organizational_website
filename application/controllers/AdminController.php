<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {


    /**
     * AdminController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        // $admin_email = $this->session->userdata('admin_email');
        $admin_designation = $this->session->userdata('admin_designation');
        if (!$admin_designation == 'admin' ||!$admin_designation=='master_admin') {
            redirect('LoginController', 'refresh');
        }
    }

    public function index()
    {
        $data['title']="Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header_admin',$data);
        $this->load->view('admin_panel_content/ad_body/dashboard');
        $this->load->view('admin_panel_content/ad_footer/footer');
    }
}
