<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagesController extends CI_Controller {


    public function index()
    {

        $data['title']="Organizational Website";
        $data['headline']=$this->user_model->headline();
        $data['latest_news']=$this->user_model->latest_news();
        $data['latest_news1']=$this->user_model->latest_news1();
        $data['latest_news_details']=$this->user_model->latest_news_details();
        $data['latest_news_briefing']=$this->user_model->latest_news_briefing();
        $data['articles']=$this->user_model->articles();
        $data['all_agenda']=$this->user_model->all_agenda();
        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/MainPageHeader');
        $this->load->view('WebContent/Body/MainPageBody');
        $this->load->view('WebContent/Footer/MainPageFooter');
//        $this->load->view('WebContent/MainPage');
    }

    public function aboutus()
    {
        $data['title']="Organizational Website | আমাদের সম্পর্কে";

        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/AboutUsPage');
        $this->load->view('WebContent/Footer/GeneralFooter');
    }

    public function organization()
    {
        $data['title']="Organizational Website | সংগঠন";

        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/Organization');
        $this->load->view('WebContent/Footer/GeneralFooter');
    }

    public function policy()
    {
        $data['title']="Organizational Website | নীতিমালা";

        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/Policy');
        $this->load->view('WebContent/Footer/GeneralFooter');
    }

    public function article()
    {
        $data['title']="Organizational Website | নিবন্ধ";

        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/Article');
        $this->load->view('WebContent/Footer/GeneralFooter');
    }

    public function islamic_education()
    {
        $data['title']="Organizational Website | ইসলামী শিক্ষা";

        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/Islamic_education');
        $this->load->view('WebContent/Footer/GeneralFooter');
    }

    public function news()
    {
        $data['title']="Organizational Website | সংবাদ";

        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/Policy');
        $this->load->view('WebContent/Footer/GeneralFooter');
    }

    public function advertiesment()
    {
        $data['title']="Organizational Website | বিজ্ঞপ্তি";

        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/Policy');
        $this->load->view('WebContent/Footer/GeneralFooter');
    }

    public function media()
    {
        $data['title']="Organizational Website | মিডিয়া";

        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/Policy');
        $this->load->view('WebContent/Footer/GeneralFooter');
    }

    public function communication()
    {
        $data['title']="বাংলাদেশ জামায়াতে ইসলামী -ঢাকা মহানগরী | যোগাযোগ";

        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/Policy');
        $this->load->view('WebContent/Footer/GeneralFooter');
    }

    public function join_us()
    {
        $data['title']="Organizational Website | যোগাযোগ";

        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/Join-Us');
        $this->load->view('WebContent/Footer/GeneralFooter');
    }

    public function addnewmembers()
    {
        $this->form_validation->set_rules('new_member_name', 'new_member_name', 'trim|required');
        $this->form_validation->set_rules('new_member_fath_or_hasband_name', 'new_member_fath_or_hasband_name', 'trim|required');
        $this->form_validation->set_rules('new_member_email', 'new_member_email', 'trim|required');
        $this->form_validation->set_rules('new_member_mobile', 'new_member_mobile', 'trim|required');
        $this->form_validation->set_rules('new_member_age', 'new_member_age', 'trim|required');
        $this->form_validation->set_rules('new_member_education', 'new_member_education', 'trim|required');

        $this->form_validation->set_rules('new_member_street_address', 'new_member_street_address', 'trim|required');
        $this->form_validation->set_rules('new_member_house_no', 'new_member_house_no', 'trim|required');
        $this->form_validation->set_rules('new_member_vill_colony', 'new_member_vill_colony', 'trim|required');
        $this->form_validation->set_rules('new_member_word', 'new_member_word', 'trim|required');
        $this->form_validation->set_rules('new_member_post_office', 'new_member_post_office', 'trim|required');
        $this->form_validation->set_rules('new_member_post_code', 'new_member_post_code', 'trim|required');
        $this->form_validation->set_rules('new_member_union', 'new_member_union', 'trim|required');
        $this->form_validation->set_rules('new_member_sub_dis', 'new_member_sub_dis', 'trim|required');
        $this->form_validation->set_rules('new_member_dis', 'new_member_dis', 'trim|required');
        $this->form_validation->set_rules('new_member_country', 'new_member_country', 'trim|required');

        if ($this->form_validation->run()==TRUE)
        {
            $result=$this->AddMemberModel->addmembers();
            if ($result == TRUE) {
                $this->session->set_flashdata('msg', "Data has been submitted successfully.");
                redirect('PagesController/join_us');
            }
        }
        else{
            $this->data['message'] = (validation_errors() ? validation_errors() : $this->session->flashdata('message'));

            $data['title']="Organizational Website | যোগাযোগ";

            $this->load->view('WebContent/Head/Head',$data);
            $this->load->view('WebContent/Header/GeneralHeader');
            $this->load->view('WebContent/Body/Join-Us',$this->data);
            $this->load->view('WebContent/Footer/GeneralFooter');
        }
    }

    public function headline_details($admin_post_id)
    {
        $data['title']="Organizational Website";
        $data['headline_details']=$this->user_model->headline_details($admin_post_id);
        $data['latest_news1']=$this->user_model->latest_news1();
        $data['latest_news']=$this->user_model->latest_news();
        $data['related_news']=$this->user_model->related_news($admin_post_id);
        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/news_details');
        $this->load->view('WebContent/Footer/GeneralFooter');
    }

    public function all_news()
    {
        $admin_name = $this->uri->segment(3);
        $admin_email = $this->uri->segment(4);
        $admin_designation = $this->uri->segment(5);
        $admin_image = $this->uri->segment(6);

        $admin_name = 'default';
        $admin_email = 'default';
        $admin_designation = 'default';
        $admin_image = 'default';

        $args = array();
        $args['admin_name'] = 'default';
        $args['admin_email'] = 'default';
        $args['admin_designation'] = 'default';
        $args['admin_image'] = 'default';

        //echo "<br>After re evaluate: $family_name/$genus_name/$species_name/$local_name";


        $config = array();
        $config['base_url'] = site_url("MasterAdminController/admin_list/$admin_name/$admin_email/$admin_designation/$admin_image/");
        $config['total_rows'] = $this->user_model->news_count();
        $config['per_page'] = 6;
        $config['uri_segment'] = 7;


        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] ='First';
        $config['last_link'] = 'Last';
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

        $data['all_news'] = $this->user_model->get_all_news($config['per_page'], $data['page']);

        $data['links'] = $this->pagination->create_links();


        $data['title']="Organizational Website";
        $data['headline']=$this->user_model->headline();
        $data['latest_news']=$this->user_model->latest_news();
//        $data['all_news']=$this->user_model->all_news();
        $data['latest_news_details']=$this->user_model->latest_news_details();
        $data['latest_news_briefing']=$this->user_model->latest_news_briefing();
        $this->load->view('WebContent/Head/Head',$data);
        $this->load->view('WebContent/Header/GeneralHeader');
        $this->load->view('WebContent/Body/News');
        $this->load->view('WebContent/Footer/GeneralFooter');
}

}
