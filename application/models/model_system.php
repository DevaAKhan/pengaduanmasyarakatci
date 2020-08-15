<?php

    class model_system extends CI_Model{

        public function simpan_db()
        {
            $data = array (
                'id' => "",
                'name' => $this->input->post('nama'),
                'nik' => $this->input->post('nikk'),
                'email' => $this->input->post('emaill'),
                'password' => $this->input->post('pw'),
                'retype_password' => $this->input->post('rp')
                
            );
            $this->db->insert('table_user',$data);
            header("Location:".base_url().'Dashboard/index');
        }
        public function get_user()
        {
            $data = $this->db->get('table_user');
            return $data->result();
        }
        public function count_user()
        {
            $data = $this->db->get('table_user');
            return $data->num_rows();
        }
    

    //untuk mengecek login
    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    //untuk menghapus data
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

?>