<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{


    public function index()
    {
        $data['title'] = "অ্যাডমিন লগইন";
        $this->load->view('Login', $data);
    }

    public function check_login_data()
    {
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == true) {
            $admin_email_address = $this->input->post('username', true);
            $admin_password = $this->input->post('password', true);

            $result = $this->LoginModel->check_login_info($admin_email_address, $admin_password);
            $sdata = array();

            if ($result) {

                $sdata['user_email'] = $result->admin_email;
                $sdata['username'] = $result->admin_name;
                $sdata['admin_designation'] = $result->admin_designation;
                $sdata['admin_image'] = $result->admin_image;
                $this->session->set_userdata($sdata);
                if ($result->admin_designation == 'master_admin') {
                    redirect('MasterAdminController');
                } else if ($result->designation == 'admin') {
                    redirect('PagesController');
                }
            } else {
                $data['exception'] = " User id or password is invalid";
                $this->session->set_userdata($data);
                redirect('LoginController');
            }
        } else {
//            $data['msg']="ব্যবহারকারীর নাম এবং পাসওয়ার্ড দুটোই দিতে হবে";
//            $this->load->view("Login",$data);
            $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
            $this->load->view('Login', $this->data);
        }
    }
}
