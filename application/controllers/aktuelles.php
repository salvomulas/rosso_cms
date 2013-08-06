<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aktuelles extends MY_Controller {

    public function index() {
        $this->drawWrapper("Aktuelles", "pages/aktuelles");
    }

}
