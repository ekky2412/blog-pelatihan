<?php
    class Admin extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model('database_model','model');
        }

        public function index(){
            $session = $this->session->userdata('nama');
            if(!empty($session)){
                redirect(base_url());
            }

            else{
            $header['judul'] = 'Halaman Admin';
            
            $namaAuthor = $this->session->userdata('nama');
            $tabel['data'] = $this->model->getDataByName($namaAuthor); 
            $this->load->view('templates/header',$header);
            $this->load->view('admin/index',$tabel);
            $this->load->view('templates/footer');
            }
            
        }

        public function tambah(){
            $header['judul'] = 'Tambah Data';

            $this->load->view('templates/header',$header);
            $this->load->view('admin/tambah');
            $this->load->view('templates/footer');
        }

        public function tambahProses(){
            $data = array(
                'pesan' => $this->input->post('pesan'),
                'judul' => $this->input->post('judul'),
                'author' => $this->session->userdata('nama'),
                'status_aktif' => '0'
            );

            $this->model->insert('berita',$data);
            $this->session->set_flashdata('pesan','Data Berhasil Ditambahkan!');
            redirect(base_url('Admin'));
        }

        public function edit($id){
            $header['judul'] = 'Edit Data';

            $isi['data'] = $this->model->getDataById($id,'berita');

            $this->load->view('templates/header',$header);
            $this->load->view('admin/edit',$isi);
            $this->load->view('templates/footer');
        }

        public function hapus($id){
            $this->model->delete(array('id' => $id),'berita');
            $this->session->set_flashdata('pesan','Data Berhasil dihapus!');
            redirect(base_url('admin'));
        }

        public function editAktif($id,$status){
            $this->model->editAktif($id,$status);
            redirect('admin');
        }

        public function logout(){
            $data = array('id','nama','login');
            $this->session->unset_userdata($data);
            $this->session->set_flashdata('pesan','Anda berhasil Logout!');
            redirect(base_url());
        }
    }
?>