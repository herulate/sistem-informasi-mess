<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar extends CI_Controller
{
    public function index()
    {
        //menampilkan data mess
        $data['mstmess'] = $this->m_kamar->data_tampil_mess();
        // menampilkan data kamar
        $data['kamar'] = $this->m_kamar->data_tampil();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_kamar', $data);
        $this->load->view('template/footer');
    }
    public function tambah_data()
    {
        $mess = $this->input->post('mess');
        $max = $this->input->post('max');
        $blok = $this->input->post('blok');
        $nomor = $this->input->post('nomor');

        $data = array(
            'mess' => $mess,
            'blok' => $blok,
            'nomor' => $nomor,
            'max' => $max
        );
        $this->m_kamar->tambah_data($data, 'kamar');
        return redirect('kamar/index');
    }
    public function delete_data($id_kamar)
    {
        $delete = array('id_kamar' => $id_kamar);
        $this->m_kamar->delete_data($delete, 'kamar');
        return redirect('kamar/index');
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
        $id_kamar       = $this->input->post('id_kamar');
        $mess           = $this->input->post('mess');
        $max            = $this->input->post('max');
        $blok           = $this->input->post('blok');
        $nomor          = $this->input->post('nomor');
        $status_kamar   = $this->input->post('status_kamar');

        $data = array(
            'mess' => $mess,
            'max' => $max,
            'blok' => $blok,
            'nomor' => $nomor,
            'status_kamar' => $status_kamar
        );
        $result = $this->m_kamar->update($id_kamar, $data);
        return redirect('kamar/index');
    }
}
