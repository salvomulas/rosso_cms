<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sandbox extends CI_Controller {

	public function index() {

        $test = array(35,109,57,69,79,99,103,139,93,101,96,17,100,33,67,59,120,112);

        echo serialize($test);


    }
	
}