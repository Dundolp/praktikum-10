<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	//Fungsi menampilkan data
	public function index()
	{
		//load model + bikin objek
        $this->load->model('mahasiswa_model', 'mhs');
        //array objek
        $list_mhs = $this->mhs->getAll();

        // data untuk dikirim ke view
        $data['list_mhs'] = $list_mhs;

        $this->load->view('layout/header');
        // untuk ngirim data + nampilin ke view
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');
	}
}