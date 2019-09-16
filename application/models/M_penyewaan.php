<?php
class M_penyewaan extends CI_Model
{
    public function data_tampil_karyawan()
    {
        $query = $this->db->query('select * from karyawan where ss = 0');
        return $query->result();
    }
    public function data_tampil_kategori()
    {
        $query = $this->db->query('select * from kategori_mess');
        return $query->result();
    }
    public function get_mess($id_kategori)
    {
        $query = $this->db->query("select distinct(id_mess), nama_mess from ketersediaan where id_kategori = '$id_kategori' and status_kamar = 'Tersedia'");
        return $query;
    }
    public function get_kamar($id_mess)
    {
        $query = $this->db->query("select distinct(id_kamar),blok,nomor from ketersediaan where id_mess='$id_mess' and status_kamar = 'Tersedia' ");
        return $query;
    }
    public function tambah_data($data)
    {
        $this->db->insert('penyewaan', $data);
    }
    public function update_ss($karyawan)
    {
        $this->db->query("update karyawan set ss=1 where nik = '$karyawan'");
    }
    public function data_tampil_pengawas()
    {
        $query = $this->db->query('select * from pengawas');
        return $query->result();
    }
    public function data_tampil()
    {
        $query = $this->db->query('select * from penyewaan join karyawan on penyewaan.karyawan=karyawan.nik join kamar on penyewaan.kamar = kamar.id_kamar join mess on kamar.mess = mess.id_mess join kategori_mess on mess.kategori = kategori_mess.id_kategori');
        return $query->result();
    }
    public function upt_tanggal_keluar($upt)
    {
        $date = date('m-d-Y');
        $this->db->where($upt);
        $this->db->query("update penyewaan set tanggal_keluar = '$date', status_sewa = 0 where id_penyewaan = '$upt'");
    }
    public function delete_data($delete, $table)
    {
        $this->db->where($delete);
        $this->db->delete($table, $delete);
    }
}
