<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Konsumen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('group') != '1') {
			$this->session->set_flashdata('error', 'Anda Bukan Admin!');
			redirect('login');
		}
		$this->load->model('konsumen_model');
	}
	public function index()
	{
		$data['users'] = $this->konsumen_model->getAll();
		$this->load->view('admin/dashboard/users', $data);
	}
	public function detail($id = null)
	{
		if (!isset($id)) redirect('admin/penjualan');
		$data['orders']  = $this->konsumen_model->get_detail_by_id($id);
		$this->load->view('admin/dashboard/invoices/view_invoice_detail', $data);
	}

	public function edit($id = null)
	{

		if (!isset($id)) redirect('admin/users');



		$validation = $this->form_validation;

		$validation->set_rules($this->konsumen_model->rulesupdate());



		if ($validation->run()) {

			$this->konsumen_model->update();

			$this->session->set_flashdata('success', 'Berhasil Disimpan');
		}



		$data["konsumen"] = $this->konsumen_model->getById($id);

		if (!$data["konsumen"]) show_404();



		$this->load->view("admin/dashboard/konsumen_edit", $data);
	}

	public function hapus($id = null)
	{

		if (!isset($id)) show_404();



		if ($this->konsumen_model->delete($id)) {

			redirect(site_url('admin/konsumen'));
		}
	}
}
