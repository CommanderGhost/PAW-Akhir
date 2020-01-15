<?php

class model_wisata extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('tb_wisata')->result();
    }
    public function tambah_wisata($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_wisata($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find($id_wisata)
    {
        $result = $this->db->where('id_wisata', $id_wisata)
            ->limit(1)
            ->get('tb_wisata');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
