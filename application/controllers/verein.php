<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Verein extends MY_Controller {

    public function vorstand() {
        $this->load->model('management');
        $data ['management'] = $this->management->getManagement();
        $this->drawWrapper("Vorstand", "view_vorstand");
        var_dump($data ['management']->result());
    }

    public function clubhaus() {
        $this->drawWrapper("Clubhaus", "view_clubhaus");
    }

}