<?php

class awal extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('model_system');
    }

    //login
    public function index()
{
    $this->load->view('login');
}

//register
public function register()
{
    $data['user'] = $this->model_system->get_user();
    $data['c_user'] = $this->model_system->count_user();
    $this->load->view('register', $data);
}


//simpan data
public function simpan_data()
{
    $this->model_system->simpan_db();
}

public function login()
{
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $where = array(
        'Email' => $email,
        'password' => $password
    );
    $cek = $this->model_system->cek_login("tabel_user", $where)->num_rows();

    if ($cek > 0) {
        $data_session = array(
            'email' => $email,
            'status' => 'signin'
        );
 

$this->session->set_userdata($data_session);
if ($this->session->userdata('status') == 'signin') {
    header("location:" . base_url() . 'awal/dashboard');
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
public function dasboard(){
    $this->load->view('Dashboard');
}

}
