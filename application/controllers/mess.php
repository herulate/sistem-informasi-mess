<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mess extends CI_Controller
{
    public function index()
    {
        $data['kat'] = $this->m_mess->data_tampil_kategori();

        $data['mess'] = $this->m_mess->data_tampil()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_mess', $data);
        $this->load->view('template/footer');
    }
    public function tambah_data()
    {
        $nama_mess = $this->input->post('nama_mess');
        $alamat_mess = $this->input->post('alamat_mess');
        $kategori = $this->input->post('kategori');

        $data = array(
            'nama_mess' => $nama_mess,
            'alamat_mess' => $alamat_mess,
            'kategori' => $kategori
        );
        $this->m_mess->tambah_data($data, 'mess');
        return redirect('mess/index');
    }
    public function delete_data($id_mess)
    {
        $delete = array('id_mess' => $id_mess);
        $this->m_mess->delete_data($delete, 'mess');
        return redirect('mess/index');
    }
    public function edit_data()
    {
        $id = $this->uri->segment(3);
        $data['mess'] = $this->m_mess->get_data_mess($id);
        $data['kat'] = $this->m_mess->data_tampil_kategori();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_edit_mess', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id_mess = $this->input->post('id_mess');
        $nama_mess = $this->input->post('nama_mess');
        $alamat_mess = $this->input->post('alamat_mess');
        $kategori = $this->input->post('kategori');

        $data = array(
            'nama_mess' => $nama_mess,
            'alamat_mess' => $alamat_mess,
            'kategori' => $kategori
        );
        $result = $this->m_mess->update($id_mess, $data);
        return redirect('mess/index');
    }
}
