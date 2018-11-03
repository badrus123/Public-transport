<?php

class Register extends CI_Controller {

        function __construct(){
                parent::__construct();		
                        $this->load->model('Register_model');
                        $this->load->helper('url');
        }
 
        function index(){
                $this->load->view('register');
        }
 
        function register(){
			$username = $this->input->post('username');
            $nama = $this->input->post('nama');
			$password = $this->input->post('password');
			$gender = $this->input->post('gender');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$question = $this->input->post('question');
            $data = array(
					'username' => $username,
					'nama' => $nama,
					'password' => $password,
                    'gender' => $gender,
                    'email' => $email,
					'phone' => $phone,
					'question' => $question
                    );
            $this->Register_model->input_data($data,'user');
            redirect('Home/index');
            
        }
}