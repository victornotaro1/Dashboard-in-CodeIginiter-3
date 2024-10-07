<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $data["title"] = "Login - CodeIgniter";
        $this->load->view('pages/login', $data);
    }

    public function store()
    {
     $email = $_POST["email"];
     $password = $_POST["password"];
     $user = $this->login_model->store($email, $password);

     if($user){
        $this->session->set_userdata("logged_user", $user);
        redirect("dashboard");
     } else {
        redirect("login");
     }
    }
}
