<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class API extends API_Controller {

	public function food($type = "") {
		$output = [];

		if ($type == "") {
			$output = array(
				"food" => $this->food_model->find_all()
			);
		} else {
			$types = $this->food_type_model->find_by_name($type);

			if (count($types) != 0) {
				$type_id = $types[0]->id;
				$output = array(
					"food" => $this->food_model->find_by_type($type_id)
				);
			} else {
				$output['error'] = 'INVALID_FOOD_TYPE';
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($output));
	}

	public function cart() {
		$method = $this->input->server('REQUEST_METHOD');

		if ($method == 'POST') {
			$this->add_to_cart();
		} else {
			$this->json_error('METHOD_NOT_ALLOWED');
		}
	}

	private function add_to_cart() {
		$output = [];

		// Check for required POST inputs
		if ($this->input->post('food_id') == FALSE) {
			$this->json_error('INVALID_REQUEST');
			return;
		}

		// Get variables from input
		$food_id = $this->input->post('food_id');

		// Get the cart order
		$order = null;
		if ($this->session->userdata('cart_order_id') == FALSE) {
			$order = new stdClass();
			$order->state = 1;
			$order->final_price = 0;

			$order_id = $this->order_model->insert($order);
			$order->id = $order_id;
			$this->session->set_userdata('cart_order_id', $order_id);
		} else {
			$order = $this->order_model->find(
				$this->session->userdata('cart_order_id')
			)[0];
		}

		// Get the food to be added to the cart
		$food = $this->food_model->find($food_id);
		if (count($food) == 0) {
			$this->json_error('INVALID_FOOD_ID');
			return;
		} else {
			$food = $food[0];
		}

		// Check if the food is already in the cart
		$order_food = $this->order_food_model->find_where(array(
			'order_id' => $order->id,
			'food_id'  => $food_id
		));

		if (count($order_food) > 0) {
			// Increment the amount if food already in the cart
			$order_food = $order_food[0];
			$order_food->amount++;
			$this->order_food_model->save($order_food);
		} else {
			// Add a new order_food row, if the food is not already in the cart
			$order_food = array(
				"amount"   => 1,
				"order_id" => $order->id,
				"food_id"  => $food_id
			);
			$this->order_food_model->insert($order_food);
		}

		// Update the order price
		$order->final_price += $food->price;
		$this->order_model->save($order);

		$this->json_success('FOOD_ADDED');
	}
}
