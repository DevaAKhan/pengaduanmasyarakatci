<?php

Class Dashboard extends CI_Controller{
    public function __construct(){
        parent ::__construct();
        $this->load->model('model_system');
    }
    

    public function index()
    {

        $this->load->view('login.php');
    }

    public function register()
    {
        $data['user'] = $this->model_system->get_user();
        $data['c_user'] = $this->model_system->count_user();

        $this->load->view('regist',$data);
    }

    public function simpan_data()
    {
        $this->model_system->simpan_db();
    }

    public function tmplhome(){
        $this->load->view('home.php');
    }
    public function login(){
        if($this->session->userdata('status') =='login') {
            redirect('Dashboard/home');
        }
        $this->load->view('login');
    }


    public function login_action(){

    $email = $this->input->post('Email');
    $password = $this->input->post('Password');
    $where = array(
        'Email' => $email,
        'password' => $password
    );
    $cek = $this->model_system->cek_login("table_user", $where)->num_rows();

    if ($cek > 0) {
        $data_session = array(
            'email' => $email,
            'status' => 'signin'
        );
 

$this->session->set_userdata($data_session);
if ($this->session->userdata('status') == 'signin') {
    header("location:" . base_url() . 'Dashboard/tmplhome');
} else{
    echo 'login gagal';
    }
} else {
    echo 'email dan password yang anda masukan salah!';
    }
}
public function signout()

{
    $this->session->sess_destroy();
    redirect(base_url());
}



}