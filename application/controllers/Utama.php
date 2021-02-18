<?php
    class Utama extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('database_model','model');
        }

        public function index(){
            $data['judul'] = "Selamat Datang di Web Mantap";
            $isi['data'] = $this->model->getDataByActive();

            $this->load->view('templates/header',$data);
            $this->load->view('index',$isi);
            $this->load->view('templates/footer');
        }

        public function berita($id){
            $isi['data'] = $this->model->getDataById($id,'berita');
            // var_dump($isi['data']);
            $data['judul'] = $isi['data']['judul'];
            $this->load->view('templates/header',$data);
            $this->load->view('isiPesan',$isi);
            $this->load->view('templates/footer');
        }

        public function login(){
            $data['judul'] = "Login";

            $this->load->view('templates/header',$data);
            $this->load->view('login');
            $this->load->view('templates/footer');
        }

        public function daftar(){
            $this->load->model('login_model','login');
            $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[login.email]');
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]', [
                'matches' => 'Password does not match!',
                'min_length' => 'Password too short'
                ]);
            $this->form_validation->set_rules('password2', 'Confirm Password', 'required|trim|matches[password1]');

            if ($this->form_validation->run() == false) {
                $data['judul'] = "Daftar Akun";
            
                $this->load->view('templates/header',$data);
                $this->load->view('daftar');
                $this->load->view('templates/footer');
            }

            else{
                $cek = $this->login->register();
                if($cek == true){
                    $this->session->set_flashdata('pesan','Anda berhasil Daftar!');
                    redirect(base_url('Utama/login'));
                }
                else{
                    $this->session->set_flashdata('pesan','Anda gagal mendaftar!');
                    redirect(base_url('Utama/daftar'));
                }
                
            }

        }

        public function prosesLogin(){
            $this->load->model('login_model','login');

            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $login = array(
                'email' => $email,
                'password' => $password
            );
            $data = $this->login->getDataLogin($login);
            if(is_array($data)){
                $dataLogin = array(
                    'nama' => $data['nama'],
                    'id' => $data['id'],
                    'login' => TRUE 
                );
                $this->session->set_userdata($dataLogin);

                redirect(base_url('Admin')); 
            }
            else{
                $this->session->set_flashdata('pesan','Email atau Password Salah!');
                redirect(base_url('Utama/login'));
            }
            
        }

    }
?>