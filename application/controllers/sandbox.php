<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sandbox extends CI_Controller {

	public function index() {

		$array = array (1,2,3,4,5);

        var_dump($array);

        echo serialize($array);

	}
	
}