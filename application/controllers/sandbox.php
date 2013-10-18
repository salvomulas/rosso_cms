<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sandbox extends CI_Controller {

	public function index() {

        $test = array(35,102,33,69,79,99,103,96,93,101,19,57,113,100,139,109,120,104);

        echo serialize($test);

    }
	
}