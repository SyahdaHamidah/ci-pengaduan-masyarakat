<?php

class Home extends CI_Controller{
    public function base(){
        $data['title'] = "base";
        $data['regis'] = $this->modelsistem->get_user();
        $data['c_regis'] = $this->modelsistem->count_user();

        $this->load->view('hasil/hasil',$data);
    }
    public function __construct(){
        parent:: __construct();
        $this->load->model('modelsistem');
    }
    public function index(){
        $this->load->view('home/index');
    }
    public function login(){
        $this->load->view('login/login');
    }
    public function out(){
        $this->load->view('hasil/hasil');
    }
    public function regis(){
        $this->load->view('regis/register');
    }
    public function from(){
        $this->load->view('form/form');
    }
    public function simpan_data(){
        $this->modelsistem->simpan_db();
    }
    public function aksi_login(){
        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');
        $where = array(
            'username' => $usernames,
            'password' => md5($passwords)
        );
        $cek= $this->modelsistem->cek_login("user", $where)->num_rows();

        if($cek > 0) {
            $data_session = array(
                'usernama' => $usernames,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);

            if($this->session->userdata('status') == 'login') {
                header("Location:" .base_url(). 'sistem/home/'.$this->session->userdata('usernama') );
            } else {
                echo "Login Gagal";
            }
        } else {
            echo "Username dan Password Salah !";
        }
    }
    function logout(){
        $this->session->sess_destroy();
    }
    public function get_user(){
        $data = $this->db->get('regis');
        return $data->result();
    }
    public function count_user(){
        $data = $this->db->get('regis');
        return $data->num_rows();
    }
}