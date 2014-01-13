<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Json extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index() {

        echo "json";

    }

    public function player($playerID = null) {

        // Load necessary models
        $this->load->model('player');
        
        if ($playerID) {

            // Load player-specific information
            $data['json'] = $this->player->getPlayer($playerID)->row_aray();

        } else {
        
            // Load all players
            $data['json'] = $this->player->getPlayers(1)->row();
        
        }
                
        // Load views with all the loaded data
        $this->load->view("meta/outputJson", $data);
        
    }

}