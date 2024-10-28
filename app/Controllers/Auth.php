<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model'); // Load User_model
    }

    public function login() {
        // Load the login view
        $this->load->view('login_view'); // Create this view file
    }

    public function login_process() {
        $email = $this->input->post('txt_Email');
        $password = $this->input->post('txt_Password');
        $role = $this->input->post('role');

        // Check login credentials
        $user = $this->User_model->check_login($email, $password);
        if ($user) {
            // Set session data
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('role', $role);

            // Redirect to dashboard or another page
            redirect('dashboard'); // Change this to your dashboard controller/method
        } else {
            // Redirect back with error message
            $this->session->set_flashdata('error', 'Invalid login credentials');
            redirect('auth/login');
        }
    }
}
