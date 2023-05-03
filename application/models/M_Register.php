<?php

class M_Register extends CI_Model{
    
//    public function save_register_info($data){
//        return $this->db->insert('tb_user', $data);
//    }

//    public function get_all_level(){
//       return $this->db->get('tb_level')->result(); // Tampilkan semua data yang ada di tabel level
//    }
        public function simpan($data)
        {
            $this->db->insert('users', $data);
        }
}