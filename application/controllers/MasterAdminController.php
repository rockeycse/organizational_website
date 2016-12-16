<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterAdminController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        // $admin_email = $this->session->userdata('admin_email');
        $admin_designation = $this->session->userdata('admin_designation');
        if (!$admin_designation == 'master_admin') {
            redirect('LoginController', 'refresh');
        }
    }

    public function index()
    {
        $data['title'] = "Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $data);
        $this->load->view('admin_panel_content/ad_body/dashboard');
        $this->load->view('admin_panel_content/ad_footer/footer');
    }

    public function add_admin()
    {
        $data['title'] = "Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $data);
        $this->load->view('admin_panel_content/ad_body/add_admin');
        $this->load->view('admin_panel_content/ad_footer/footer');
    }

    public function add_admin_data()
    {
        $image_name_for_db = $this->do_upload_insert();

        $this->form_validation->set_rules('admin_name', 'Admin name', 'required');
        $this->form_validation->set_rules('admin_email', 'Admin email', 'required');
        $this->form_validation->set_rules('admin_designation', 'Admin designation', 'required');

        $this->form_validation->set_rules('admin_password', 'Admin Password', 'required');

        //$this->form_validation->set_rules('admin_image', 'Admin image', 'required');

        if ($this->form_validation->run() == true) {

            $admin_data = array(
                'admin_name' => $this->input->post('admin_name'),
                'admin_image' => $image_name_for_db,
                'admin_email' => $this->input->post('admin_email'),
                'admin_password' => $this->input->post('admin_password'),
                'admin_designation' => $this->input->post('admin_designation')
            );
            $result = $this->MasterAdminModel->insert_admin_data($admin_data);
            if ($result) {
                $this->session->set_flashdata('msg', "Data has been submitted successfully.");
                redirect('MasterAdminController/add_admin');
            }
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
            $datatitle['title'] = "Organizational Website";
            $this->load->view('admin_panel_content/ad_header/header', $datatitle);
            $this->load->view('admin_panel_content/ad_body/add_admin', $this->data);
            $this->load->view('admin_panel_content/ad_footer/footer');
        }

    }

    public function admin_list()
    {
        $admin_name = $this->uri->segment(3);
        $admin_email = $this->uri->segment(4);
        $admin_designation = $this->uri->segment(5);
        $admin_image = $this->uri->segment(6);

        $admin_name = 'default';
        $admin_email = 'default';
        $admin_designation = 'default';
        $admin_image = 'default';


        // echo "<br>Search_Project Called with $union_pouroshova/$economical_year/$implementar/$sector";

        $data['title'] = 'Search Result';


        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";

        $args = array();
        $args['admin_name'] = 'default';
        $args['admin_email'] = 'default';
        $args['admin_designation'] = 'default';
        $args['admin_image'] = 'default';

        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";


        $config = array();
        $config['base_url'] = site_url("MasterAdminController/admin_list/$admin_name/$admin_email/$admin_designation/$admin_image/");
        $config['total_rows'] = $this->MasterAdminModel->admin_count();
        $config['per_page'] = 15;
        $config['uri_segment'] = 7;


        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

        $data['admin_data'] = $this->MasterAdminModel->get_all_admin($config['per_page'], $data['page']);

        $data['links'] = $this->pagination->create_links();

        $data['title'] = "অ্যাডমিন । Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $data);
        $this->load->view('admin_panel_content/ad_body/admin_list');
        $this->load->view('admin_panel_content/ad_footer/footer');

    }

    public function admin_update($admin_id)
    {

        $this->db->from('tbl_admin');
        $this->db->where('admin_id', $admin_id);
        $query = $this->db->get();
        $results = $query->result_array();
        $data['admin_data'] = $results;

        $data['title'] = "অ্যাডমিন । Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $data);
        $this->load->view('admin_panel_content/ad_body/admin_update');
        $this->load->view('admin_panel_content/ad_footer/footer');

    }

    public function update_admin_data()
    {
        $image_name_for_db = $this->do_upload();

        $this->form_validation->set_rules('admin_name', 'Admin name', 'required');
        $this->form_validation->set_rules('admin_email', 'Admin email', 'required');
        $this->form_validation->set_rules('admin_designation', 'Admin designation', 'required');

        $this->form_validation->set_rules('admin_password', 'Admin Password', 'required');

        $this->form_validation->set_rules('admin_image', 'Admin image', 'required');

        if ($this->form_validation->run() == true) {

            $admin_data = array(
                'admin_name' => $this->input->post('admin_name'),
                'admin_image' => $image_name_for_db,
                'admin_email' => $this->input->post('admin_email'),
                'admin_password' => $this->input->post('admin_password'),
                'admin_designation' => $this->input->post('admin_designation')
            );
            $result = $this->MasterAdminModel->update_admin_data($admin_data);
            if ($result) {
                $this->session->set_flashdata('msg', "Data has been updated successfully.");
                redirect('MasterAdminController/admin_list');
            }
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
            $datatitle['title'] = "অ্যাডমিন । Organizational Website";
            $this->load->view('admin_panel_content/ad_header/header', $datatitle);
            $this->load->view('admin_panel_content/ad_body/admin_update', $this->data);
            $this->load->view('admin_panel_content/ad_footer/footer');
        }
    }

    public function do_upload_insert()
    {
        $config['upload_path'] = 'uploads';

        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        $this->upload->initialize($config);
        $input_name = "admin_image";
        $image_name_for_db = 'N/A';

        if (!$this->upload->do_upload($input_name)) {

        } else {
            $imageData = $this->upload->data();
            $image_name_for_db = $imageData["file_name"];
        }

        return $image_name_for_db;
    }

    public function do_upload()
    {
        $config['upload_path'] = './uploads/';
        // $config['upload_path'] = $up_path;
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $image_name_for_db = array();

        $input_name = "admin_image";

        //$result = $this->load->Tree_model->get_img_path($input_name);
        $_POST["admin_image"] = $this->MasterAdminModel->get_img_path($input_name);

        if (!$this->upload->do_upload($input_name)) {
            // $error = array('error' => $this->uploads->display_errors());
            // echo "error";
        } else {

            if (file_exists(FCPATH . "uploads/" . $_POST["admin_image"])) {
                unlink(FCPATH . "uploads/" . $_POST["admin_image"]);
            }

            $imageData = $this->upload->data();

            $image_name_for_db = $imageData["file_name"];

            $_POST["admin_image"] = $image_name_for_db;

        }

        return $image_name_for_db;
    }

    public function delete_admin_image($admin_id)
    {
        $this->db->from('tbl_admin');
        $this->db->where('admin_id', $admin_id);
        $query = $this->db->get();
        $results = $query->result();

        foreach ($results as $r) {
            if (!$r->admin_image == NULL) {
                unlink(FCPATH . "uploads/" . $r->admin_image);
            }
        }
    }

    public function delete_admin($admin_id)
    {
        $this->delete_admin_image($admin_id);
        $data_delete = $this->MasterAdminModel->delete_admin($admin_id);
        if ($data_delete == true) {
            $this->session->set_flashdata('msg', "The admin has been deleted successfully.");
            redirect('MasterAdminController/admin_list');
        }
    }

    public function add_category()
    {
        $this->form_validation->set_rules('post_category_name', 'Post Category Name', 'required');

        if ($this->form_validation->run() == true) {

            $category_data = array(
                'post_category_name' => $this->input->post('post_category_name')
            );
            $result = $this->MasterAdminModel->insert_category($category_data);
            if ($result) {
                $this->session->set_flashdata('msg', "Data has been submitted successfully.");
                redirect('MasterAdminController/category_list');
            }
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
            $datatitle['title'] = "অ্যাডমিন । Organizational Website";
            $this->load->view('admin_panel_content/ad_header/header', $datatitle);
            $this->load->view('admin_panel_content/ad_body/add_category', $this->data);
            $this->load->view('admin_panel_content/ad_footer/footer');
        }

    }

    public function category_list()
    {
        $admin_name = $this->uri->segment(3);
        $admin_email = $this->uri->segment(4);
        $admin_designation = $this->uri->segment(5);
        $admin_image = $this->uri->segment(6);

        $admin_name = 'default';
        $admin_email = 'default';
        $admin_designation = 'default';
        $admin_image = 'default';


        // echo "<br>Search_Project Called with $union_pouroshova/$economical_year/$implementar/$sector";

        $data['title'] = 'Post Category List';


        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";

        $args = array();
        $args['admin_name'] = 'default';
        $args['admin_email'] = 'default';
        $args['admin_designation'] = 'default';
        $args['admin_image'] = 'default';

        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";


        $config = array();
        $config['base_url'] = site_url("MasterAdminController/category_list/$admin_name/$admin_email/$admin_designation/$admin_image/");
        $config['total_rows'] = $this->MasterAdminModel->post_category_count();
        $config['per_page'] = 15;
        $config['uri_segment'] = 7;


        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

        $data['category_data'] = $this->MasterAdminModel->get_all_category($config['per_page'], $data['page']);

        $data['links'] = $this->pagination->create_links();

        $data['title'] = "অ্যাডমিন ।Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $data);
        $this->load->view('admin_panel_content/ad_body/category_list');
        $this->load->view('admin_panel_content/ad_footer/footer');
    }

    public function update_category($post_category_id)
    {
        $this->db->from('tbl_post_category');
        $this->db->where('post_category_id', $post_category_id);
        $query = $this->db->get();
        $results = $query->result_array();
        $data['post_category_data'] = $results;

        $data['title'] = "অ্যাডমিন । Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $data);
        $this->load->view('admin_panel_content/ad_body/update_category');
        $this->load->view('admin_panel_content/ad_footer/footer');
    }

    public function update_category_data()
    {
        $this->form_validation->set_rules('post_category_name', 'Post Category Name', 'required');

        if ($this->form_validation->run() == true) {

            $category_data = array(
                'post_category_name' => $this->input->post('post_category_name')
            );
            $result = $this->MasterAdminModel->update_category($category_data);
            if ($result) {
                $this->session->set_flashdata('msg', "Data has been updated successfully.");
                redirect('MasterAdminController/category_list');
            }
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
            $datatitle['title'] = "অ্যাডমিন । Organizational Website";
            $this->load->view('admin_panel_content/ad_header/header', $datatitle);
            $this->load->view('admin_panel_content/ad_body/update_category', $this->data);
            $this->load->view('admin_panel_content/ad_footer/footer');
        }

    }

    public function delete_category($post_category_id)
    {
        $data_delete = $this->MasterAdminModel->delete_category($post_category_id);
        if ($data_delete == true) {
            $this->session->set_flashdata('msg', "The category has been deleted successfully.");
            redirect('MasterAdminController/category_list');
        }
    }

    public function add_post_type()
    {
        $datatitle['title'] = "অ্যাডমিন । Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $datatitle);
        $this->load->view('admin_panel_content/ad_body/add_type');
        $this->load->view('admin_panel_content/ad_footer/footer');
    }

    public function add_post_type_data()
    {
        $this->form_validation->set_rules('post_type_name', 'Post Type Name', 'required');

        if ($this->form_validation->run() == true) {

            $type_data = array(
                'post_type_name' => $this->input->post('post_type_name')
            );
            $result = $this->MasterAdminModel->insert_type($type_data);
            if ($result) {
                $this->session->set_flashdata('msg', "Data has been submitted successfully.");
                redirect('MasterAdminController/post_type_list');
            }
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
            $datatitle['title'] = "অ্যাডমিন । Organizational Website";
            $this->load->view('admin_panel_content/ad_header/header', $datatitle);
            $this->load->view('admin_panel_content/ad_body/add_post_type', $this->data);
            $this->load->view('admin_panel_content/ad_footer/footer');
        }

    }

    public function post_type_list()
    {

        $data['title'] = 'Post Type List';


        $admin_name = $this->uri->segment(3);
        $admin_email = $this->uri->segment(4);
        $admin_designation = $this->uri->segment(5);
        $admin_image = $this->uri->segment(6);

        $admin_name = 'default';
        $admin_email = 'default';
        $admin_designation = 'default';
        $admin_image = 'default';


        // echo "<br>Search_Project Called with $union_pouroshova/$economical_year/$implementar/$sector";

        $data['title'] = 'Post Type List';


        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";

        $args = array();
        $args['admin_name'] = 'default';
        $args['admin_email'] = 'default';
        $args['admin_designation'] = 'default';
        $args['admin_image'] = 'default';

        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";


        $config = array();
        $config['base_url'] = site_url("MasterAdminController/category_list/$admin_name/$admin_email/$admin_designation/$admin_image/");
        $config['total_rows'] = $this->MasterAdminModel->post_type_count();
        $config['per_page'] = 15;
        $config['uri_segment'] = 7;


        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

        $data['post_type_data'] = $this->MasterAdminModel->get_all_type($config['per_page'], $data['page']);
        $data['links'] = $this->pagination->create_links();

        $data['title'] = "অ্যাডমিন । Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $data);
        $this->load->view('admin_panel_content/ad_body/type_list');
        $this->load->view('admin_panel_content/ad_footer/footer');
    }

    public function update_post_type($post_type_id)
    {
        $this->db->from('tbl_post_type');
        $this->db->where('post_type_id', $post_type_id);
        $query = $this->db->get();
        $results = $query->result_array();
        $data['post_type_data'] = $results;

        $data['title'] = "অ্যাডমিন । Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $data);
        $this->load->view('admin_panel_content/ad_body/update_type');
        $this->load->view('admin_panel_content/ad_footer/footer');
    }

    public function update_post_type_data()
    {
        $this->form_validation->set_rules('post_type_name', 'Post Type Name', 'required');

        if ($this->form_validation->run() == true) {

            $type_data = array(
                'post_type_name' => $this->input->post('post_type_name')
            );
            $result = $this->MasterAdminModel->update_type($type_data);
            if ($result) {
                $this->session->set_flashdata('msg', "Data has been updated successfully.");
                redirect('MasterAdminController/post_type_list');
            }
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
            $datatitle['title'] = "অ্যাডমিন । Organizational Website";
            $this->load->view('admin_panel_content/ad_header/header', $datatitle);
            $this->load->view('admin_panel_content/ad_body/update_type', $this->data);
            $this->load->view('admin_panel_content/ad_footer/footer');
        }

    }

    public function delete_post_type($post_type_id)
    {
        $data_delete = $this->MasterAdminModel->delete_type($post_type_id);
        if ($data_delete == true) {
            $this->session->set_flashdata('msg', "The category has been deleted successfully.");
            redirect('MasterAdminController/post_type_list');
        }
    }

    public function add_post()
    {
        $datatitle['admin_name'] = $this->session->userdata('username');
        $datatitle['post_type'] = $this->MasterAdminModel->get_all_post_type();
        $datatitle['post_category'] = $this->MasterAdminModel->get_all_post_category();
        $datatitle['title'] = "অ্যাডমিন । Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $datatitle);
        $this->load->view('admin_panel_content/ad_body/add_post');
        $this->load->view('admin_panel_content/ad_footer/footer');
    }

    public function do_upload_insert_post_image()
    {
        $config['upload_path'] = 'post_images';

        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        $this->upload->initialize($config);
        $input_name = "admin_post_thumb_img";
        $image_name_for_db = 'N/A';

        if (!$this->upload->do_upload($input_name)) {

        } else {
            $imageData = $this->upload->data();
            $image_name_for_db = $imageData["file_name"];
        }

        return $image_name_for_db;
    }

    public function update_post_image()
    {
        $config['upload_path'] = './post_images/';
        // $config['upload_path'] = $up_path;
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $image_name_for_db = array();

        $input_name = "admin_post_thumb_img";

        //$result = $this->load->Tree_model->get_img_path($input_name);
        $_POST["admin_post_thumb_img"] = $this->MasterAdminModel->get_post_img_path($input_name);

        if (!$this->upload->do_upload($input_name)) {
            // $error = array('error' => $this->uploads->display_errors());
            // echo "error";
        } else {

            if (file_exists(FCPATH . "post_images/" . $_POST["admin_post_thumb_img"])) {
                unlink(FCPATH . "post_images/" . $_POST["admin_post_thumb_img"]);
            }

            $imageData = $this->upload->data();

            $image_name_for_db = $imageData["file_name"];

            $_POST["admin_post_thumb_img"] = $image_name_for_db;

        }

        return $image_name_for_db;
    }

    public function delete_post_image($admin_post_id)
    {
        $this->db->from('tbl_admin_post');
        $this->db->where('admin_post_id', $admin_post_id);
        $query = $this->db->get();
        $results = $query->result();

        foreach ($results as $r) {
            if (!$r->admin_post_thumb_img == NULL) {
                unlink(FCPATH . "post_images/" . $r->admin_post_thumb_img);
            }
        }
    }

    public function add_post_data()
    {
        $image_name_for_db = $this->do_upload_insert_post_image();

        $this->form_validation->set_rules('admin_post_title', 'Post Title', 'required');
        $this->form_validation->set_rules('admin_post_description', 'Post Description', 'required');
        $this->form_validation->set_rules('admin_post_type', 'Post Type', 'required');
        $this->form_validation->set_rules('admin_post_date', 'Post Date', 'required');
        $this->form_validation->set_rules('admin_post_category', 'Post Category', 'required');
        $this->form_validation->set_rules('admin_post_author', 'Author Name', 'required');

        if ($this->form_validation->run() == true) {

            $post_data = array(
                'admin_post_title' => $this->input->post('admin_post_title'),
                'admin_post_description' => $this->input->post('admin_post_description'),
                'admin_post_type' => $this->input->post('admin_post_type'),
                'admin_post_date' => $this->input->post('admin_post_date'),
                'admin_post_category' => $this->input->post('admin_post_category'),
                'admin_post_author' => $this->input->post('admin_post_author'),
                'admin_post_thumb_img' => $image_name_for_db
            );
            $result = $this->MasterAdminModel->insert_post_data($post_data);
            if ($result) {
                $this->session->set_flashdata('msg', "Data has been submitted successfully.");
                redirect('MasterAdminController/add_post');
            }
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
            $datatitle['title'] = "অ্যাডমিন । Organizational Website";
            $this->load->view('admin_panel_content/ad_header/header', $datatitle);
            $this->load->view('admin_panel_content/ad_body/add_post', $this->data);
            $this->load->view('admin_panel_content/ad_footer/footer');
        }

    }

    public function post_list()
    {
        $admin_name = $this->uri->segment(3);
        $admin_email = $this->uri->segment(4);
        $admin_designation = $this->uri->segment(5);
        $admin_image = $this->uri->segment(6);

        $admin_name = 'default';
        $admin_email = 'default';
        $admin_designation = 'default';
        $admin_image = 'default';


        // echo "<br>Search_Project Called with $union_pouroshova/$economical_year/$implementar/$sector";

        $data['title'] = 'Search Result';


        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";

        $args = array();
        $args['admin_name'] = 'default';
        $args['admin_email'] = 'default';
        $args['admin_designation'] = 'default';
        $args['admin_image'] = 'default';

        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";


        $config = array();
        $config['base_url'] = site_url("MasterAdminController/admin_list/$admin_name/$admin_email/$admin_designation/$admin_image/");
        $config['total_rows'] = $this->MasterAdminModel->post_count();
        $config['per_page'] = 15;
        $config['uri_segment'] = 7;


        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

        $data['post_data'] = $this->MasterAdminModel->get_all_post($config['per_page'], $data['page']);

        $data['links'] = $this->pagination->create_links();

        $data['title'] = "অ্যাডমিন । Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $data);
        $this->load->view('admin_panel_content/ad_body/post_list');
        $this->load->view('admin_panel_content/ad_footer/footer');

    }

    public function update_post($post_id)
    {
        $this->db->from('tbl_admin_post');
        $this->db->where('admin_post_id', $post_id);
        $query = $this->db->get();
        $results = $query->result_array();
        $datatitle['post_data'] = $results;

        $datatitle['admin_name'] = $this->session->userdata('username');
        $datatitle['post_type'] = $this->MasterAdminModel->get_all_post_type();
        $datatitle['post_category'] = $this->MasterAdminModel->get_all_post_category();

        $datatitle['title'] = "অ্যাডমিন । Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $datatitle);
        $this->load->view('admin_panel_content/ad_body/update_post');
        $this->load->view('admin_panel_content/ad_footer/footer');
    }

    public function update_post_data()
    {
        $image_name_for_db = $this->update_post_image();

        $this->form_validation->set_rules('admin_post_title', 'Post Title', 'required');
        $this->form_validation->set_rules('admin_post_description', 'Post Description', 'required');
        $this->form_validation->set_rules('admin_post_type', 'Post Type', 'required');
        $this->form_validation->set_rules('admin_post_date', 'Post Date', 'required');
        $this->form_validation->set_rules('admin_post_category', 'Post Category', 'required');
        $this->form_validation->set_rules('admin_post_author', 'Author Name', 'required');

        if ($this->form_validation->run() == true) {

            $post_data = array(
                'admin_post_title' => $this->input->post('admin_post_title'),
                'admin_post_description' => $this->input->post('admin_post_description'),
                'admin_post_type' => $this->input->post('admin_post_type'),
                'admin_post_date' => $this->input->post('admin_post_date'),
                'admin_post_category' => $this->input->post('admin_post_category'),
                'admin_post_author' => $this->input->post('admin_post_author'),
                'admin_post_thumb_img' => $image_name_for_db
            );
            $result = $this->MasterAdminModel->update_post_data($post_data);
            if ($result) {
                $this->session->set_flashdata('msg', "Data has been submitted successfully.");
                redirect('MasterAdminController/post_list');
            }
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
            $datatitle['title'] = "অ্যাডমিন । Organizational Website";
            $this->load->view('admin_panel_content/ad_header/header', $datatitle);
            $this->load->view('admin_panel_content/ad_body/post_list', $this->data);
            $this->load->view('admin_panel_content/ad_footer/footer');
        }

    }

    public function delete_post($admin_post_id)
    {
        $this->delete_post_image($admin_post_id);
        $data_delete = $this->MasterAdminModel->delete_admin_post($admin_post_id);
        if ($data_delete == true) {
            $this->session->set_flashdata('msg', "The admin has been deleted successfully.");
            redirect('MasterAdminController/post_list');
        }
    }

    public function add_breaking_news()
    {
        $admin_name = $this->uri->segment(3);
        $admin_email = $this->uri->segment(4);
        $admin_designation = $this->uri->segment(5);
        $admin_image = $this->uri->segment(6);

        $admin_name = 'default';
        $admin_email = 'default';
        $admin_designation = 'default';
        $admin_image = 'default';


        // echo "<br>Search_Project Called with $union_pouroshova/$economical_year/$implementar/$sector";

        $data['title'] = 'Search Result';


        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";

        $args = array();
        $args['admin_name'] = 'default';
        $args['admin_email'] = 'default';
        $args['admin_designation'] = 'default';
        $args['admin_image'] = 'default';

        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";


        $config = array();
        $config['base_url'] = site_url("MasterAdminController/admin_list/$admin_name/$admin_email/$admin_designation/$admin_image/");
        $config['total_rows'] = $this->MasterAdminModel->post_count();
        $config['per_page'] = 15;
        $config['uri_segment'] = 7;


        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);

        $data['page'] = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;

        $data['post_data'] = $this->MasterAdminModel->get_all_post($config['per_page'], $data['page']);

        $data['links'] = $this->pagination->create_links();

        $data['title'] = "অ্যাডমিন । Organizational Website";
        $this->load->view('admin_panel_content/ad_header/header', $data);
        $this->load->view('admin_panel_content/ad_body/add_breaking_news');
        $this->load->view('admin_panel_content/ad_footer/footer');

    }

    public function add_breaking_news_data()
    {

        $this->form_validation->set_rules('admin_post_id', 'At list 1 news selection is ', 'required');

        if ($this->form_validation->run() == true) {

            $breaking_data = array(
                'breaking_news_admin_post_id' => $this->input->post('admin_post_id')
            );
            $result = $this->MasterAdminModel->insert_breaking_news_data($breaking_data);
            if ($result) {
                $this->session->set_flashdata('msg', "Breaking News Has Added successfully.");
                redirect('MasterAdminController/add_breaking_news');
            }
        } else {
            $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
            $datatitle['title'] = "অ্যাডমিন । Organizational Website";
            $this->load->view('admin_panel_content/ad_header/header', $datatitle);
            $this->load->view('admin_panel_content/ad_body/add_breaking_news', $this->data);
            $this->load->view('admin_panel_content/ad_footer/footer');
        }

    }
}
