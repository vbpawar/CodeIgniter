<?php
class Post_model extends CI_Model{
    public function __construct(){
    $this->load->database();
    }
    public function get_posts($slug=FALSE){
        if($slug==FALSE){
            $this->db->order_by('id','DESC');
            $query = $this->db->get('posts');
            return $query->result_array();
        }
        $query = $this->db->get_where('posts',array('slug'=>$slug));
        return $query->row_array();
    }

    public function create_post(){
        $slug = url_title($this->input->post('title'));
        $data = array(
            'title' => $this->input->post('title'),
            'slug'  => $slug,
            'body'  => $this->input->post('body')
        );
        //call procedure for insert data
        $insert_posts_data = "CALL insert_posts(?,?,?)"; 
        // return $this->db->insert('posts',$data);
        return $this->db->query($insert_posts_data,$data);
    }
    public function delete_post($id){
        $delete_post = "CALL delete_post(?)";
        $this->db->query($delete_post,$id);
        return true;
    }

    public function update_post(){
        $slug = url_title($this->input->post('title'));
        $id  = $this->input->post('id');
        $data = array(
            'title' => $this->input->post('title'),
            'slug'  => $slug,
            'body'  => $this->input->post('body')
        );
        $this->db->where('id',$id);
        return $this->db->update('posts',$data);
    }
}