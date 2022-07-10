<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    /**public function __construct()
	{

		parent::__construct();



		if ($this->session->userdata('group') != '1') {

			$this->session->set_flashdata('error', 'Anda Bukan Admin!');

			redirect('login');
		}

		$this->load->model("product_model");
	}*/

    public function __construct()
    {
        parent::__construct();
        $this->load->model('detail_model');

        $this->load->helper(array('url', 'download'));
    }

    public function index($id)
    {
        $data['productsDetail'] = $this->detail_model->getById($id);
        $data['products'] = $this->detail_model->getAll();

        $this->load->view('user/detail_view');
    }
}
