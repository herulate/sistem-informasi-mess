<?php
class M_karyawan extends CI_Model
{

    public function data_tampil()
    {
        $this->db->order_by('nik');
        $query = $this->db->get('karyawan');
        return $query->result();
    }
    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function delete_data($delete, $table)
    {
        $this->db->where($delete);
        $this->db->delete($table, $delete);
    }
    function get_data_karyawan($nik)
    {
        $query = $this->db->query('select * from karyawan where nik=' . $nik);
        return $query->result();
    }
    public function update($nik, $data)
    {
        $this->db->where('nik', $nik);
        $this->db->update('karyawan', $data);
    }
}
