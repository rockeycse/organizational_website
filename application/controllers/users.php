<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {


    /**
     * Users constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index(){

        $data['title'] = 'Fetch Database Info';
        $data['users'] = $this->user_model->get_data('users');
        $this->load->view('users',$data);
    }

    public function create()
    {
        $data['title'] = 'Create New User';
        if($this->input->post('submit')){
            $username = $this->input->post('username',TRUE);
            $email = $this->input->post('email',TRUE);
            $about = $this->input->post('about',TRUE);
            $user = array(
                'username' => $username,
                'email' => $email,
                'about' => $about
            );
            $this->db->insert('users',$user);
            redirect('users');
        }
        $this->load->view('create', $data);
    }
}