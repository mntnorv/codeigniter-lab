<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_Controller extends CI_Controller {
	protected $layout = 'application';

	protected $stylesheets = array(
		'app.css'
	);

	protected $javascripts = array(
		'libs/handlebars.runtime-v1.3.0.js', 'hbs/templates.js', 'app.js'
	);

	protected $local_stylesheets = array();
	protected $local_javascripts = array();

	protected function render($content, $data = []) {
		$assets = array(
			"stylesheets" => $this->get_stylesheets(),
			"javascripts" => $this->get_javascripts()
		);

		$final_data = array_merge($assets, $data);
		$this->template->load($this->layout, $content, $final_data);
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
}
