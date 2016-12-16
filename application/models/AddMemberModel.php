<?php
class AddMemberModel extends CI_Model{
    public function addmembers()
    {
        $new_member_data=array(
            'new_member_name' => $this->input->post('new_member_name'),
            'new_member_fath_or_hasband_name' => $this->input->post('new_member_fath_or_hasband_name'),
            'new_member_email' => $this->input->post('new_member_email'),
            'new_member_mobile' => $this->input->post('new_member_mobile'),
            'new_member_age' => $this->input->post('new_member_age'),
            'new_member_education' => $this->input->post('new_member_education'),

            'new_member_street_address' => $this->input->post('new_member_street_address'),
            'new_member_house_no' => $this->input->post('new_member_house_no'),
            'new_member_vill_colony' => $this->input->post('new_member_vill_colony'),
            'new_member_word' => $this->input->post('new_member_word'),
            'new_member_post_office' => $this->input->post('new_member_post_office'),
            'new_member_post_code' => $this->input->post('new_member_post_code'),
            'new_member_union' => $this->input->post('new_member_union'),
            'new_member_sub_dis' => $this->input->post('new_member_sub_dis'),
            'new_member_dis' => $this->input->post('new_member_dis'),
            'new_member_country' => $this->input->post('new_member_country')

        );

        $this->db->insert('tbl_new_member',$new_member_data);

        return TRUE;

    }
}