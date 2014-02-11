<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_Controller extends CI_Controller {
	protected $layout = 'application';

	protected function render($content, $data = NULL) {
		$this->template->load($this->layout, $content, $data);
	}
}
