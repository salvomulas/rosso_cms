<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Verein extends MY_Controller {

    public function vorstand() {
        $this->drawWrapper("Vorstand", "view_vorstand");
    }

    public function clubhaus() {
        $this->drawWrapper("Clubhaus", "view_clubhaus");
    }

}