<?php
class M_mess extends CI_Model
{
    public function data_tampil_kategori()
    {
        $query = $this->db->query('select * from kategori_mess');
        return $query->result();
    }
    public function data_tampil_edit()
    {
        $query = $this->db->query('select * from kategori_mess');
        return $query->result();
    }
    public function data_tampil()
    {
        return $this->db->query('select * from mess join kategori_mess on mess.kategori=kategori_mess.id_kategori');
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
    function get_data_mess($id)
    {
        $query = $this->db->query('select * from mess join kategori_mess on mess.kategori = kategori_mess.id_kategori where mess.id_mess=' . $id);
        return $query->result();
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update($id_mess, $data)
    {
        $this->db->where('id_mess', $id_mess);
        $this->db->update('mess', $data);
    }
}
