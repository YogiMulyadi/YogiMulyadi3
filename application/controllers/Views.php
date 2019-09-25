<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Views extends CI_Controller {
	function index()
	{
        $this->load->view('template/header');
        $this->load->view('frontend/index');
        $this->load->view('template/footer');
    }
    public function profile()
    {
        $this->load->view('frontend/profile');
    }
    public function identitas()
    {
        $this->load->view('frontend/identitas');
    }
    public function visi_misi()
    {
        $this->load->view('frontend/visi_misi');
    }
    public function struktur()
    {
        $this->load->view('frontend/struktur');
    }
    public function kepala_sekolah()
    {
        $this->load->view('frontend/kepala_sekolah');
    }
    public function hubungan_industri()
    {
        $this->load->view('frontend/hubungan_industri');
    }
    public function kerjasama_pembelajaran()
    {
        $this->load->view('frontend/kerjasama_pembelajaran');
    }
    public function teknik_mesin()
    {
        $this->load->view('frontend/teknik_mesin');
    }
    public function teknik_komputer()
    {
        $this->load->view('frontend/teknik_komputer');
    }
    public function animasi()
    {
        $this->load->view('frontend/animasi');
    }
      

}
