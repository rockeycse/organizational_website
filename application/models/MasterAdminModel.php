<?php

class MasterAdminModel extends CI_Model
{


    public function insert_admin_data($admin_data)
    {
        $this->db->insert('tbl_admin', $admin_data);

        return TRUE;
    }

    public function get_all_admin($limit, $start)
    {
        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->from('tbl_admin');

        $compiled_query = $this->db->get_compiled_select();
        //echo $compiled_query;

        $query = $this->db->query($compiled_query);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function admin_count()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function update_admin_data($admin_data)
    {
        $admin_id = $this->input->post('admin_id');

        $this->db->where('admin_id', $admin_id);
        $this->db->update('tbl_admin', $admin_data);
        return true;
    }

    public function get_img_path($img)
    {
        $this->db->select("*");

        $this->db->from("tbl_admin");

        $this->db->where('admin_id', $this->input->post('admin_id'));

        $query = $this->db->get();

        $mdata = $query->result_array();

        // print_r($mdata[0][$img]);

        // die();

        return $mdata[0][$img];
    }

    public function delete_admin($admin_id)
    {
        $this->db->where('admin_id', $admin_id);
        $this->db->delete('tbl_admin');
        return true;
    }

    public function insert_category($category_data)
    {
        $this->db->insert('tbl_post_category', $category_data);
        return true;
    }

    public function post_category_count()
    {
        $this->db->select('*');
        $this->db->from('tbl_post_category');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_all_category($limit, $start)
    {
        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->from('tbl_post_category');

        $compiled_query = $this->db->get_compiled_select();
        //echo $compiled_query;

        $query = $this->db->query($compiled_query);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function update_category($category_data)
    {
        $post_category_id = $this->input->post('post_category_id');

        $this->db->where('post_category_id', $post_category_id);
        $this->db->update('tbl_post_category', $category_data);
        return true;
    }

    public function delete_category($post_category_id)
    {
        $this->db->where('post_category_id', $post_category_id);
        $this->db->delete('tbl_post_category');
        return true;
    }

    public function insert_type($type_data)
    {
        $this->db->insert('tbl_post_type', $type_data);
        return true;
    }

    public function get_all_type($limit, $start)
    {
        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->from('tbl_post_type');

        $compiled_query = $this->db->get_compiled_select();
        //echo $compiled_query;

        $query = $this->db->query($compiled_query);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function get_all_post_type()
    {
        $this->db->select('*');
        $this->db->from('tbl_post_type');

        $query = $this->db->get();

        return $query->result();
    }

    public function update_type($type_data)
    {
        $post_type_id = $this->input->post('post_type_id');

        $this->db->where('post_type_id', $post_type_id);
        $this->db->update('tbl_post_type', $type_data);
        return true;
    }

    public function delete_type($post_type_id)
    {
        $this->db->where('post_type_id', $post_type_id);
        $this->db->delete('tbl_post_type');
        return true;
    }

    public function post_type_count()
    {
        $this->db->select('*');
        $this->db->from('tbl_post_type');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_all_post_category()
    {
        $this->db->select('*');
        $this->db->from('tbl_post_category');

        $query = $this->db->get();

        return $query->result();
    }

    public function insert_post_data($post_data)
    {
        $this->db->insert('tbl_admin_post', $post_data);
        return true;
    }

    public function post_count()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function get_all_post($limit, $start)
    {
        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->order_by("admin_post_id","desc");
        $this->db->from('tbl_admin_post');

        $compiled_query = $this->db->get_compiled_select();
        //echo $compiled_query;

        $query = $this->db->query($compiled_query);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function get_all_post_data($post_id)
    {
        $this->db->select('*');
        $this->db->where('admin_post_id', $post_id);

        $this->db->from('tbl_admin_post');
        $this->db->order_by('desc');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_post_img_path($img)
    {
        $this->db->select("*");

        $this->db->from("tbl_admin_post");

        $this->db->where('admin_post_id', $this->input->post('admin_post_id'));

        $query = $this->db->get();

        $mdata = $query->result_array();

        // print_r($mdata[0][$img]);

        // die();

        return $mdata[0][$img];
    }

    public function update_post_data($post_data)
    {
        $admin_post_id = $this->input->post('admin_post_id');

        $this->db->where('admin_post_id', $admin_post_id);
        $this->db->update('tbl_admin_post', $post_data);
        return true;
    }

    public function delete_admin_post($admin_post_id)
    {
        $this->db->where('admin_post_id', $admin_post_id);
        $this->db->delete('tbl_admin_post');
        return true;
    }

    public function insert_breaking_news_data($breaking_data)
    {
        $this->db->where('breaking_news_id',1);
        $this->db->update('tbl_breaking_news',$breaking_data);
        return true;
    }
}