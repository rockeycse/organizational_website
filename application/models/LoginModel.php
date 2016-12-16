<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model
{ // Application Info Model
    public function check_login_info($admin_email_address,$admin_password)
    {
            $this->db->select('*');
            $this->db->from('tbl_admin');
            $this->db->where('admin_email', $admin_email_address);
            $this->db->where('admin_password', $admin_password);

            $query_result = $this->db->get();
            $result = $query_result->row();
            return $result;

    }

}
