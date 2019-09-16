<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function index()
    {
        // menampilkan data kamar
        $data['karyawan'] = $this->m_karyawan->data_tampil();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_karyawan', $data);
        $this->load->view('template/footer');
    }
    public function tambah_data()
    {
        $nama_karyawan = $this->input->post('nama_karyawan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $dept = $this->input->post('dept');
        $agama = $this->input->post('agama');
        $status = $this->input->post('status');

        $data = array(
            'nama_karyawan' => $nama_karyawan,
            'jenis_kelamin' => $jenis_kelamin,
            'dept' => $dept,
            'agama' => $agama,
            'status' => $status,
            'ss' => 0
        );
        $this->m_karyawan->tambah_data($data, 'karyawan');
        return redirect('karyawan/index');
    }
    public function delete_data($nik)
    {
        $delete = array('nik' => $nik);
        $this->m_karyawan->delete_data($delete, 'karyawan');
        return redirect('karyawan/index');
    }
    public function edit_data()
    {
        $nik = $this->uri->segment(3);
        $data['karyawan'] = $this->m_karyawan->get_data_karyawan($nik);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('v_edit_karyawan', $data);
        $this->load->view('template/footer');
    }
    public function update()
    {
        $nik = $this->input->post('nik');
        $nama_karyawan = $this->input->post('nama_karyawan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $dept = $this->input->post('dept');
        $agama = $this->input->post('agama');
        $status = $this->input->post('status');
        $ss = $this->input->post('ss');

        $data = array(
            'nama_karyawan' => $nama_karyawan,
            'jenis_kelamin' => $jenis_kelamin,
            'dept' => $dept,
            'agama' => $agama,
            'status' => $status,
            'ss' => $ss
        );
        $result = $this->m_karyawan->update($nik, $data);
        return redirect('karyawan/index');
    }
}
