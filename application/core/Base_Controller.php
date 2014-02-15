<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_Controller extends CI_Controller {
	protected $layout = 'application';

	protected $stylesheets = array(
		'tooltips.css', 'alerts.css', 'app.css'
	);

	protected $javascripts = array(
		'libs/handlebars.runtime-v1.3.0.js', 'hbs/templates.js', 'tooltips.js',
		'alerts.js', 'app.js'
	);

	protected $local_stylesheets = array();
	protected $local_javascripts = array();

	private $cart_contents;

	public function __construct() {
		parent::__construct();

		$this->load->database();
		$this->load->library("session");

		$this->cart_contents = null;
	}

	protected function render($content, $additional_data = []) {
		$base_data = array(
			// Assets
			"stylesheets"   => $this->get_stylesheets(),
			"javascripts"   => $this->get_javascripts(),

			// User data
			"logged_in"     => $this->session->userdata('logged_in'),
			"user_data"     => $this->session->all_userdata(),
			"cart_size"     => $this->count_cart_items($this->get_cart_contents()),

			// Alerts
			"alert_error"   => $this->session->flashdata('error'),
			"alert_info"    => $this->session->flashdata('info'),
			"alert_success" => $this->session->flashdata('success')
		);

		$data = array_merge($base_data, $additional_data);
		$this->template->load($this->layout, $content, $data);
	}

	protected function get_stylesheets() {
		$styles = array_merge($this->stylesheets, $this->local_stylesheets);
		$style_string = "";

		foreach ($styles as $style) {
			$style_string .= css($style);
		}

		return $style_string;
	}

	protected function get_javascripts() {
		$javascripts = array_merge($this->javascripts, $this->local_javascripts);
		$js_string = "";

		foreach ($javascripts as $javascript) {
			$js_string .= js($javascript);
		}

		return $js_string;
	}

	protected function get_cart_contents() {
		if ($this->cart_contents == null) {
			if ($this->session->userdata('cart_order_id') != NULL) {
				$this->cart_contents = $this->order_food_model->find_by_order_id(
					$this->session->userdata('cart_order_id')
				);
			} else {
				$this->cart_contents = [];
			}
		}

		return $this->cart_contents;
	}

	protected function count_cart_items($cart_items) {
		$cart_size = 0;

		foreach ($cart_items as $item) {
			$cart_size += $item->amount;
		}

		return $cart_size;
	}
}
