<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends Base_Controller {

	protected $local_stylesheets = array(
		"cart.css"
	);

	public function index() {
		$cart_items = [];
		$food_items = [];
		$total_price = 0;

		if ($this->session->userdata('cart_order_id') != FALSE) {
			$cart_order_id = $this->session->userdata('cart_order_id');

			$cart_items = $this->order_food_model->find_by_order_id($cart_order_id);

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
}
