<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Team extends MY_Controller {

    public function index() {
        $this->aktive(1);
    }

    public function sandbox() {

        // Load necessary models
        $this->load->model('teams');
        $this->load->model('player');
        $this->load->model('ranking');
        $this->load->model('staff');

        // Load Ranking Tables
        $data ['showTeams'] = array(1);
        $data ['rankTables'] = $this->ranking->getTables($data['showTeams']);

        // Load team-specific information
        $data['teamInfo'] = $this->teams->getTeamInfo(1);
        $data['teamName'] = $this->teams->getTeamName(1);

        // Load player information
        $data['spieler'] = $this->player->getPlayers(1);
        $data['goalkeeper'] = $this->player->getPlayersPosition(1,1);
        $data['defense'] = $this->player->getPlayersPosition(1,2);
        $data['midfield'] = $this->player->getPlayersPosition(1,3);
        $data['striker'] = $this->player->getPlayersPosition(1,4);

        // Load staff members
        $data['staff'] = $this->staff->getTeamStaff(1);

        // Set Page Title
        $data ['page_title'] = $data['teamName'];

        // Load views with all the loaded data
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