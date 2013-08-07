<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Team extends MY_Controller {

    public function index() {
        $this->aktive(1);
    }

    public function sandbox() {
        $this->load->model('teams');
        $this->load->model('player');

        $data['teamName'] = $this->teams->getTeamName(1);
        $data['spieler'] = $this->player->getPlayers(1);
        $data ['page_title'] = "Sandbox Mannschaften";

        $this->load->view("meta/metadata", $data);
        $this->load->view("elements/topNav");
        $this->load->view("elements/teamUnit", $data);
        $this->load->view("pages/team");
        $this->load->view("elements/footer");
        }

    public function aktive($teamID) {
        $this->load->model('teams');
        $this->load->model('player');

        $data['teamName'] = $this->teams->getTeamName($teamID);
        $data['spieler'] = $this->player->getPlayers($teamID);

        echo $data['teamName'];

        foreach ($data['spieler'] as $row) {
            echo $row->lastName;
            echo $row->firstName;
        }

    }

}