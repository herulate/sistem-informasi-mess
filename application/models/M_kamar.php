<?php
class M_kamar extends CI_Model
{
    public function data_tampil_mess()
    {
        $query = $this->db->query('select * from mess join kategori_mess on mess.kategori=kategori_mess.id_kategori');
        return $query->result();
    }
    public function data_tampil()
    {
        $query = $this->db->query('select * from kamar join mess on kamar.mess = mess.id_mess join kategori_mess on mess.kategori=kategori_mess.id_kategori order by id_kamar asc');
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
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where)->result();
    }
    function get_data_kamar($id)
    {
        $query = $this->db->query('select * from kamar join mess on kamar.mess = mess.id_mess join kategori_mess on mess.kategori=kategori_mess.id_kategori where kamar.id_kamar=' . $id);
        return $query->result();
    }
    public function update($id_kamar, $data)
    {
        $this->db->where('id_kamar', $id_kamar);
        $this->db->update('kamar', $data);
    }
}
