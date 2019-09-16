<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengawas extends CI_Controller
{
    public function index()
    {
        // menampilkan data pengawas
        $data['pengawas'] = $this->m_pengawas->data_tampil();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_pengawas', $data);
        $this->load->view('template/footer');
    }
    public function tambah_data()
    {
        $nama_pengawas = $this->input->post('nama_pengawas');
        $jenis_kelamin = $this->input->post('jenis_kelamin');

        $data = array(
            'nama_pengawas' => $nama_pengawas,
            'jenis_kelamin' => $jenis_kelamin

        );
        $this->m_pengawas->tambah_data($data, 'pengawas');
        return redirect('pengawas/index');
    }
    public function delete_data($id)
    {
        $where = array('id_pengawas' => $id);
        $this->m_pengawas->delete_data($where, 'pengawas');
        return redirect('pengawas/index');
    }
    public function edit_data()
    {
        $id = $this->uri->segment(3);
        $data['pengawas'] = $this->m_pengawas->get_data_pengawas($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_edit_pengawas', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $id = $this->input->post('id_pengawas');
        $nama_pengawas = $this->input->post('nama_pengawas');
        $jenis_kelamin = $this->input->post('jenis_kelamin');

        $data = array(
            'nama_pengawas' => $nama_pengawas,
            'jenis_kelamin' => $jenis_kelamin
        );
        $result = $this->m_pengawas->update($id, $data);
        return redirect('pengawas/index');
    }
}
