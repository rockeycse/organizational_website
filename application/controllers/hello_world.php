<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hello_world extends CI_Controller{
    function index(){
        $data['title']='My first application created with Code Igniter';
        $data['message']='Hello world!';
// load 'helloworld' view


        $query=$this->db->select('id,email,about')->from('users')->order_by('id','desc')->get();
        $data['query'] = $query->result();
        $this->load->view('helloworld',$data);
    }
}
?>