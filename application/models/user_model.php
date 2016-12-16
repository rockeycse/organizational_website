<?php

class User_model extends CI_Model
{
    public function get_data($table)
    {
        $query = $this->db->get($table);
        return $query->result_array();
    }

    public function headline()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $this->db->join('tbl_breaking_news', 'tbl_breaking_news.breaking_news_admin_post_id = tbl_admin_post.admin_post_id');
        $result = $this->db->get();
        $result = $result->result_array();
        return $result;
    }

    public function latest_news()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $this->db->where('admin_post_type', 5);
        $this->db->where('admin_post_category', 1);
        $this->db->order_by('admin_post_id', 'desc');
        $this->db->limit(5);
        $result = $this->db->get();
        $result = $result->result();
        return $result;
    }

    public function latest_news1()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $this->db->where('admin_post_type', 5);
        $this->db->where('admin_post_category', 1);
        $this->db->order_by('admin_post_id', 'desc');
        $this->db->limit(5);
        $result = $this->db->get();
        $result = $result->result_array();
        return $result;
    }

    public function latest_news_details()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $this->db->limit(5);
        $this->db->where('admin_post_type', 5);
        $this->db->where('admin_post_category', 1);
        $this->db->order_by('admin_post_id', 'desc');

        $result = $this->db->get();
        $result = $result->result();
        return $result;
    }

    public function latest_news_briefing()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $this->db->limit(5);
        $this->db->where('admin_post_category', 3);
        $this->db->order_by('admin_post_id', 'desc');
        $result = $this->db->get();
        $result = $result->result_array();
        return $result;
    }

    public function headline_details($admin_post_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $this->db->where('admin_post_id', $admin_post_id);
        $result = $this->db->get();
        $result = $result->result_array();
        return $result;
    }

    public function all_news()
    {


        $this->db->select('*');
        $this->db->from('tbl_admin_post');
       $this->db->limit(12);
        $this->db->where('admin_post_type', 5);
//        $this->db->where('admin_post_category', 1);

        $this->db->order_by('admin_post_id', 'desc');

        $result = $this->db->get();
        $result = $result->result_array();
        return $result;
    }

    public function get_all_news($limit, $start)
    {
        $this->db->select('*');
        $this->db->limit($limit, $start);
        $this->db->where('admin_post_type', 5);
        $this->db->order_by("admin_post_id","desc");

        $this->db->from('tbl_admin_post');

        $compiled_query = $this->db->get_compiled_select();
        //echo $compiled_query;

        $query = $this->db->query($compiled_query);
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function news_count()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $this->db->where('admin_post_type',5);

        $query = $this->db->get();
        return $query->num_rows();
    }

    public function related_news($admin_post_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $this->db->where('admin_post_id',$admin_post_id);
        $result=$this->db->get();
        $result=$result->result_array();

        $news_type=$result[0]['admin_post_type'];
        $news_category=$result[0]['admin_post_category'];

        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $this->db->limit(5);
        $this->db->where('admin_post_type', $news_type);
        $this->db->where('admin_post_category', $news_category);
        $this->db->order_by('admin_post_id', 'desc');

        $result = $this->db->get();
        $result = $result->result();
        return $result;


    }

    public function articles()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $this->db->limit(5);
        $this->db->where('admin_post_type', 2);
        $this->db->order_by('admin_post_id', 'desc');
        $result = $this->db->get();
        $result = $result->result();
        return $result;
    }

    public function agenda($admin_post_id,$type)
    {
        echo $admin_post_id.$type;
    }

    public function all_agenda()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin_post');
        $this->db->limit(5);
        $this->db->where('admin_post_type', 7 );
        $this->db->order_by('admin_post_id', 'desc');
        $result = $this->db->get();
        $result = $result->result();
        return $result;
    }
}