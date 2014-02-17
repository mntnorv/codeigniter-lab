<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends Base_Controller {

	protected $local_stylesheets = array(
		"cart.css"
	);

	protected $local_javascripts = array(
		"cart.js"
	);

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', '');
	}

	public function index() {
		$cart_items = $this->get_cart_contents();
		$food_items = [];
		$total_price = 0;

		if ($this->session->userdata('cart_order_id') != FALSE) {
			$cart_order_id = $this->session->userdata('cart_order_id');
			$total_price = $this->order_model->find($cart_order_id)[0]->final_price;
		}

		if (count($cart_items) > 0) {
			$cart_food_ids = [];
			foreach ($cart_items as $item) {
				array_push($cart_food_ids, $item->food_id);
			}

			$food = $this->food_model->find_by_id_list($cart_food_ids);
			foreach ($food as $item) {
				$food_items[$item->id] = $item;
			}
		}

		$this->render('cart', array(
			'cart_items'  => $cart_items,
			'food_items'  => $food_items,
			'total_price' => $total_price
		));
	}

	public function delivery() {
		$method = $this->input->server('REQUEST_METHOD');

		if ($method == 'GET') {
			$this->show_delivery();
		} else {
			$this->handle_delivery();
		}
	}

	public function confirm() {
		$this->render('confirm');
	}

	private function show_delivery() {
		$order_id = $this->session->userdata('cart_order_id');
		$order    = $this->order_model->find($order_id)[0];
		$cities   = $this->city_model->find_all();

		$cities_assoc = [];
		foreach ($cities as $city) {
			$cities_assoc[$city->id] = $city->name;
		}

		$this->render('delivery', array(
			'order'  => $order,
			'cities' => $cities_assoc
		));
	}

	private function handle_delivery() {
		$this->form_validation->set_rules('city',        'City',         'required');
		$this->form_validation->set_rules('street',      'Street',       'required|max_length[255]');
		$this->form_validation->set_rules('building_no', 'Building No.', 'required|alpha_numeric|max_length[16]');
		$this->form_validation->set_rules('flat_no',     'Flat No.',     'alpha_numeric|max_length[16]');
		$this->form_validation->set_rules('door_code',   'Door code',    'max_length[16]');
		$this->form_validation->set_rules('phone',       'Phone No.',    'min_length[6]|max_length[16]');
		$this->form_validation->set_rules('comment',     'Comment',      'min_length[1024]');

		$order_data = new stdClass();
		$order_data->city        = $this->input->post('city');
		$order_data->street      = $this->input->post('street');
		$order_data->building_no = $this->input->post('building_no');
		$order_data->flat_no     = $this->input->post('flat_no');
		$order_data->door_code   = $this->input->post('door_code');
		$order_data->phone       = $this->input->post('phone');
		$order_data->comment     = $this->input->post('comment');

		if ($this->form_validation->run() == FALSE) {
			$cities = $this->city_model->find_all();

			$cities_assoc = [];
			foreach ($cities as $city) {
				$cities_assoc[$city->id] = $city->name;
			}

			$this->render('delivery', array(
				'order'  => $order_data,
				'cities' => $cities_assoc
			));
		} else {
			$order_id = $this->session->userdata('cart_order_id');
			$order    = $this->order_model->find($order_id)[0];

			$order->city        = $order_data->city;
			$order->street      = $order_data->street;
			$order->building_no = $order_data->building_no;
			$order->flat_no     = $order_data->flat_no;
			$order->door_code   = $order_data->door_code;
			$order->phone       = $order_data->phone;
			$order->comment     = $order_data->comment;

			$this->order_model->save($order);
			redirect('cart/confirm');
		}
	}
}
