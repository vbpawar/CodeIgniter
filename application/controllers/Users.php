<?php
 class Users extends CI_Controller{
     public function register(){
         $data['title'] = 'Sign Up';

         $this->form_validation->set_rules('name','Name','required');
         $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
         $this->form_validation->set_rules('email','Email','required|valid_email|callback_check_email_exists');
         $this->form_validation->set_rules('password','Password','required');
         $this->form_validation->set_rules('zipcode','Zipcode','required');
         $this->form_validation->set_rules('password2','Confirm Password','matches[password]');

         if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('users/register',$data);
            $this->load->view('templates/footer');
         }else{
           $this->user_model->register();
           $this->session->set_flashdata('user_registered','You are now Registerd and login');
           redirect('posts');
         }
     }
     function check_username_exists($username){
         $this->form_validation->set_message('check_username_exists','That is username taken.please choose different one');
         if($this->user_model->check_username_exists($username)){
             return true;
         }else{
             return false;
         }
     }
     function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists','That is Email taken.please choose different one');
        if($this->user_model->check_email_exists($email)){
            return true;
        }else{
            return false;
        }
    }
    public function login(){
        $data['title'] = 'Sign In';

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() === FALSE){
           $this->load->view('templates/header');
           $this->load->view('users/login',$data);
           $this->load->view('templates/footer');
        }else{
         $username = $this->input->post('username');
         $password = md5($this->input->post('password'));
         $user_id  = $this->user_model->login($username,$password);
         if($user_id){
            $this->session->set_flashdata('user_logged_in','User is login');
            $user_data = array(
                'username' => $username,
                'user_id' => $user_id,
                'logged_in' => true
            );
            $this->session->set_userdata($user_data);
            redirect('posts');
         }else{
             $this->session->set_flashdata('login_failed','Login is invalid');
             redirect('users/login');
         }
        }
    }
    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('logged_in');
        $this->session->set_flashdata('user_logged_out','User Logout');
        redirect('users/login');
    }
 }