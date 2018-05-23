<?php

class Login extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->verify_session();
  }

  private function verify_session(){
    if($this->session->userdata('email')){
      redirect(base_url('dashboard'));
    }
  }

  public function index(){
    $data = array('title_page' => 'Dashboard', 'active' => 'dashboard');
    // cargas de vistas
    $this->load->view('includes/head', $data)
               ->view('login/login_view', $data)
               ->view('includes/footer_view');
  }

  public function login(){
    $login = $this->input->post();

    $q = $this->db->select('*')
                  ->where('username' , $login['username'])
                  ->where('password', md5($login['password']))
                  ->get('administrator');

    if($q->num_rows() > 0){

      $this->session->set_userdata('username', $q->row()->username);
      $this->session->set_userdata('email', $q->row()->email);

      echo json_encode(array('status'=>'ok'));
    }else{
      echo json_encode(array('status'=>'error'));
    }
  }

  public function logout(){

    $this->session->sess_destroy();
    redirect(base_url('login'));

  }
}
?>
