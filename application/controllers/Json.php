<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends BD_Controller {
	public function index()
	{
		$data['test'] = 'hello world';

		$this->response($data);
	}
}
