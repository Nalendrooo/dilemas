<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contrl_dilemas extends CI_Controller
{

    public function index()
    {
        $this->load->view('navbar');
        $this->load->view('form');
        $this->load->view('footer');
    }

    public function tabel()
    {
        $data['nama'] = $this->input->post('nama');
        $data['nim'] = $this->input->post('nim');
        $data['kelas'] = $this->input->post('kelas');
        $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
        $data['tempat_lahir'] = $this->input->post('tempat_lahir');
        $data['alamat'] = $this->input->post('alamat');
        $data['jenkel'] = $this->input->post('jenkel');
        $data['agama'] = $this->input->post('agama');


        $this->load->view('navbar', $data);
        $this->load->view('tabel', $data);
        $this->load->view('footer', $data);
    }
}
