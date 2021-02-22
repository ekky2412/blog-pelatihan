<?php
    class Database_model extends CI_Model {
        
        public function getDataByActive(){
            return $this->db
                        ->order_by('id DESC')
                        ->get_where('berita',array(
                            'status_aktif' => "1"
                        ))
                        ->result_array();
        }

        public function getDataByName($id){
            return $this->db
                        ->order_by('id DESC')
                        ->get_where('berita',array(
                            'author' => $id
                        ))
                        ->result_array();
        }

        public function getDataById($id,$table){
            return $this->db
                        ->get_where($table,array(
                            'id' => $id
                        ))
                        ->row_array();
        }

        public function insert($table, $data){
            $this->db->insert($table,$data);
        }

        public function delete($id,$table){
            $this->db->where($id)
                    ->delete($table);
        }

        public function editAktif($id,$status){
            $this->db->where(array(
                'id' => $id
            ))
            ->update('berita',array(
                'status_aktif' => $status
            ));
        }

        public function update($id,$data){
            $this->db->where('id',$id)
                    ->update('berita',$data);
        }
        
    }
?>
