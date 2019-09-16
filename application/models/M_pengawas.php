<?php
class M_pengawas extends CI_Model
{

    public function data_tampil()
    {
        $query = $this->db->get('pengawas');
        return $query->result();
    }
    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table, $where);
    }
    function get_data_pengawas($id)
    {
        $query = $this->db->query('select * from pengawas where id_pengawas=' . $id);
        return $query->result();
    }
    public function update($id, $data)
    {
        $this->db->where('id_pengawas', $id);
        $this->db->update('pengawas', $data);
    }
}
