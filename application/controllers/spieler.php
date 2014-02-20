<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Spieler extends MY_Controller {

    public function index() {

        echo "Spieler nicht spezifiziert";

    }

    public function aktiv($playerID) {

        // Load necessary models
        $this->load->model('teams');
        $this->load->model('player');
        $this->load->model('staff');

        // Load player-specific information
        $data['playerInfo'] = $this->player->getPlayer($playerID);
        $data['playerName'] = $this->player->getPlayerName($playerID);

        // Set Page Title
        $data ['page_title'] = $data['playerName'];

        // Load views with all the loaded data
        $this->load->view("meta/metadata", $data);
        $this->load->view("meta/gmaps");
        $this->drawNavigation();
        $this->load->view("elements/playerUnit", $data);
        $this->load->view("pages/player");
        $this->drawFooter();
    }

}