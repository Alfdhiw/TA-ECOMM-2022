<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
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
    function __construct()
    {
        parent::__construct();

        // Load user model 
        $this->load->model('user');
        $this->load->model('konsumen_model');
    }
    public function index()
    {
        $validation = $this->form_validation;
        $validation->set_rules($this->konsumen_model->rulesLogin());
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/login_out/templates/auth_header');
            $this->load->view('admin/login_out/login');
            $this->load->view('admin/login_out/templates/auth_footer');
        } else {
            $valid_user = $this->konsumen_model->check_credential();
            if ($valid_user == FALSE) {
                $this->session->set_flashdata('error', 'Username atau Password salah');
                $this->load->view('admin/login_out/templates/auth_header');
                $this->load->view('admin/login_out/login');
                $this->load->view('admin/login_out/templates/auth_footer');
            } else {
                // jika password benar
                $this->session->set_userdata('id', $valid_user->kd_konsumen);
                $this->session->set_userdata('username', $valid_user->username);
                $this->session->set_userdata('group', $valid_user->group);
                switch ($valid_user->group) {
                    case 1: //admin
                        redirect('admin/produk');
                        break;
                    case 2: //member
                        redirect(base_url());
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()

    {

        $this->session->sess_destroy();

        redirect('home');
    }
}
