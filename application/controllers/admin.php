<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Base_Controller {

	public function index() {
		if (!$this->is_admin()) {
			redirect('/');
			return;
		}

		$orders = $this->order_model->find_where(array(
			'state !=' => 1,
			'state !=' => 5
		));

		$cities = $this->city_model->find_all();
		$cities_assoc = [];
		foreach ($cities as $city) {
			$cities_assoc[$city->id] = $city->name;
		}

		$states = $this->order_state_model->find_all();
		$states_assoc = [];
		foreach ($states as $state) {
			$states_assoc[$state->id] = $state->name;
		}

		foreach ($orders as $order) {
			$address = "";
			$address = $order->street . " " . $order->building_no;
			if ($order->flat_no != NULL && $order->building_no != "") {
				$address .= " - " . $order->flat_no;
			}
			$address .= ", " . $cities_assoc[$order->city];
			$order->address = $address;
		}

		$this->render('orders', array(
			'orders' => $orders,
			'cities' => $cities_assoc,
			'states' => $states_assoc
		));
	}
}
