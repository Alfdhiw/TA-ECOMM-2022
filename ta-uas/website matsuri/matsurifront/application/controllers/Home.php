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

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');


		$this->load->helper(array('url', 'download'));
	}

	public function index()
	{
		$data['result'] = $this->home_model->getAll();
		$this->load->view('user/home_view', $data);
	}

	//halaman detail
	public function detail($id)
	{
		$data['productsDetail'] = $this->home_model->getById($id);
		$data['products'] = $this->home_model->getAll();

		$this->load->view('user/detail_view', $data);
	}

	//fungsi add to cart
	public function add_to_cart($product_id)
	{
		$qty = $this->input->post('qty');
		$product = $this->home_model->getById($product_id);
		$data = array(
			'id'      => $product->kd_barang,
			'qty'     => $qty,
			'price'   => $product->harga,
			'name'    => $product->nm_barang,
			'option'	 => array('gambar' => $product->gambar)
		);

		$this->cart->insert($data);
		$this->session->set_flashdata('success', '<small>Barang Berhasil Ditambahkan</small>');
		redirect('home/detail/' . $product_id);
	}

	//halaman keranjang
	public function cart()
	{
		$this->load->model('shipping_model');
		$data['province'] = $this->shipping_model->getAllProvince();

		$this->load->view('user/cart_view', $data);
	}
	function show_cart()
	{
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .= '
				<tr><small>
					<td >' . $no . '</td>
					<td><img src="' . base_url() . 'assets/img/upload/' . $items['option']['gambar'] . '" height="75" class="mx-auto d-block"/></td>
					<td>' . $items['name'] . '</td>
					<td>' . $items['qty'] . '</td>
					<td class="text-right">Rp. ' . number_format($items['price']) . '</td>
					<td class="text-right">Rp. ' . number_format($items['subtotal']) . '</td>
					<td class="text-center" style="width: 10%"> <button type="button" id="' . $items['rowid'] . '" class="hapus_cart btn btn-danger btn-sm"> Hapus </button> </td>
				</small></tr>
			';
		}
		$output .= '<tr>
			<th class="text-right" colspan="5">Total </th>
			<th class="text-right"><span id="total">Rp. ' . number_format($this->cart->total()) . '</span></th>
			<th class="text-center">' . anchor('produk/clear_cart', 'Clear Cart', ['class' => 'btn btn-sm btn-danger']) . ' </th>
		</tr>';
		return $output;
	}
	//refresh ulang
	function load_cart()
	{
		echo $this->show_cart();
	}

	//fungsi hapus, tambah, kurang jumlah barang
	function hapus_cart()
	{
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty' => 0,
		);
		$this->cart->update($data);
		echo $this->load_cart();
	}

	//hapus semua data di keranjang
	public function clear_cart()
	{
		$this->cart->destroy();
		redirect(base_url());
	}

	//mengambil kabupaten/kota berdasarkan provinsi
	function load_kabKota()
	{
		$this->load->model('shipping_model');

		return $this->shipping_model->getKabKota($this->input->post('id', TRUE));
	}

	//mengambil ongkir berdasarkan kab dan kurir
	function load_ongkir()
	{
		$this->load->model('shipping_model');

		return $this->shipping_model->getOngkir($this->input->post('kab', TRUE), $this->input->post('kurir', TRUE));
	}
}
