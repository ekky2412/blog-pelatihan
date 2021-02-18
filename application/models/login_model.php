<?php
    class Login_model extends CI_Model{
        public function getAllData(){
            return $this->db
                        ->get_where('login')
                        ->result_array();
        }

        public function getDataLogin($data){
            return $this->db
                        ->get_where('login',$data)
                        ->row_array();
        }

        public function register(){
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password1')
            );
            return $this->db->insert('login',$data);
        }
    }
?>