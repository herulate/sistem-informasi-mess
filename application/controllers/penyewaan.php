<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyewaan extends CI_Controller
{
    public function index()
    {
        //menampilkan data mess
        $data = array(
            'mstkaryawan' => $this->m_penyewaan->data_tampil_karyawan(),
            'mstpengawas' => $this->m_penyewaan->data_tampil_pengawas(),
            'mstkategori' => $this->m_penyewaan->data_tampil_kategori(),

            'mstkategori_selected' => '',
            'mstmess_selected' => '',
            'mstkamar_selected' => ''
        );
        // menampilkan data kamar
        $data['penyewaan'] = $this->m_penyewaan->data_tampil();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_penyewaan', $data);
        $this->load->view('template/footer');
    }
    public function get_mess()
    {
        $id_kategori = $this->input->get('kategori');
        $data = $this->m_penyewaan->get_mess($id_kategori);
        echo json_encode(array('data' => $data->result_array()));
    }
    public function get_kamar()
    {
        $id_mess = $this->input->get('mess');
        $data = $this->m_penyewaan->get_kamar($id_mess);
        echo json_encode(array('data' => $data->result_array()));
    }
    //  public function get_isimax()
    //{
    //  $id_kamar = $this->input->get('id_kamar');
    //$data = $this->m_penyewaan->get_isimax($id_kamar);
    //echo json_encode(array('data' => $data->result_array()));
    //}
    public function tambah_data()
    {
        $tanggal_masuk = $this->input->post('tanggal_masuk');
        $karyawan = $this->input->post('karyawan');
        $kamar = $this->input->post('kamar');
        $pengawas = $this->input->post('pengawas');

        $data = array(
            'tanggal_masuk' => $tanggal_masuk,
            'karyawan' => $karyawan,
            'kamar' => $kamar,
            'pengawas' => $pengawas,
            'status_sewa' => 1
        );
        $this->m_penyewaan->tambah_data($data, 'penyewaan');
        $this->m_penyewaan->update_ss($karyawan);
        return redirect('penyewaan/index');
    }
    public function keluar()
    {
        $upt = $this->uri->segment(3);
        $this->m_penyewaan->upt_tanggal_keluar($upt);
        return redirect('penyewaan/index');
    }
    public function hapus($id_penyewaan)
    {
        $delete = array('id_penyewaan' => $id_penyewaan);
        $this->m_penyewaan->delete_data($delete, 'penyewaan');
        return redirect('penyewaan/index');
    }
    public function edit_data()
    {
        $id = $this->uri->segment(3);
        $data['kamar'] = $this->m_kamar->get_data_kamar($id);
        $data['mstmess'] = $this->m_kamar->data_tampil_mess();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_edit_kamar', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id_kamar = $this->input->post('id_kamar');
        $mess = $this->input->post('mess');
        $kapasitas = $this->input->post('kapasitas');
        $blok = $this->input->post('blok');
        $nomor = $this->input->post('nomor');

        $data = array(
            'mess' => $mess,
            'kapasitas' => $kapasitas,
            'blok' => $blok,
            'nomor' => $nomor
        );
        $result = $this->m_kamar->update($id_kamar, $data);
        return redirect('kamar/index');
    }
}
