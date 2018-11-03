
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('Login_model');
        }

     

        public function index()
        {
        	if($this->session->userdata('level')=="Users") {
        		redirect('Users_C/index');
        	}
                $this->load->view('login');
        	
        }
        public function cek_login()
        {
        	$username = $this->input->post('email');
        	$password = $this->input->post('password');

        	$this->load->model('login_model');
        	// $login_admin = $this->login_model->login_admin($username, $password);
        	$login_users = $this->login_model->login_users($username, $password);
                $users = $login_users->result()[0];

        	// kondisi ketika login admin dan users
        	if ($login_users) {
                if ($login_users->num_rows()==0) {                    
                   redirect('Login/index');  
                }else {     
                    $tht=$login_users->result();          
                    $sess_data = array(
                    'logged_in' => "Sudah Login",
                    'id_users' => $users->id_users,
                    'username' => $tht[0]->username,
                    'nama' => $tht[0]->nama,
                    'email' => $tht[0]->email,
                    'level' => "Users",
                    'Konsumen' => $item['konsumen']
                    );
                    $this->session->set_userdata($sess_data);



                    redirect('Home/index');
                }
      		 	


       		 }
        }  
            
}