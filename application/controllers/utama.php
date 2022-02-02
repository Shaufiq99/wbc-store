<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	

	// Function Index / Methode Index
	public function index()
	{
		if ($this->session->userdata('level')) {
			redirect('admin');
		}	
		$this->load->view('utama', ['title' => 'Home']);
	}

	// Function tentang / Method tentang
	public function tentang()
	{
		if ($this->session->userdata('level') == 'admin') {
			return redirect('admin');
		} elseif ($this->session->userdata('level') == 'kasir') {
			redirect('transaksi', 'refresh');
		}
		$this->load->view('tentang', ['title' => 'Tentang']);
	}

	// Function Info / Method Info
	public function info()
	{
		if ($this->session->userdata('level') == 'admin') {
			return redirect('admin');
		} elseif ($this->session->userdata('level') == 'kasir') {
			redirect('transaksi', 'refresh');
		}
		$this->load->view('info', ['title' => 'Info']);
	}

	// Function Kontak / Method Kontak
	public function kontak()
	{
		$this->form_validation->set_rules('nama', 'Nama ', 'trim|required');
		$this->form_validation->set_rules('email', 'Email ', 'trim|required');
		$this->form_validation->set_rules('subjek', 'Subjek ', 'trim|required');
		$this->form_validation->set_rules('pesan', 'Pesan ', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			if ($this->session->userdata('level') == 'admin') {
				return redirect('admin');
			} elseif ($this->session->userdata('level') == 'kasir') {
				redirect('transaksi', 'refresh');
			}
			$this->load->view('kontak', ['title' => 'Kontak']);
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama')),
				'email' => htmlspecialchars($this->input->post('email')),
				'subjek' => htmlspecialchars($this->input->post('subjek')),
				'pesan' => htmlspecialchars($this->input->post('pesan')),
			];
			$this->db->insert('kontak', $data);
			$this->session->set_flashdata('alert', '<script>alert("Pesan anda telah dikirim!");</script>');
			$this->load->view('kontak', ['title' => 'Kontak']);
		}
		
	}
}

/* End of file utama.php */
/* Location: ./application/controllers/utama.php */