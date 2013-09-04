<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Team extends MY_Controller {
    
    public function __construct() {
        
        parent::__construct();
        
        // Load necessary models
        $this->load->model('teams');
        $this->load->model('junioren');
        $this->load->model('player');
        $this->load->model('ranking');
        $this->load->model('staff');
        $this->load->model('match');
        
    }

    public function index() {
        $this->aktive(1);
    }

    public function aktive($teamID) {

        // Load Ranking Tables
        $data['teamID'] = $teamID;
        $data['showTeams'] = array($teamID);
        $data['rankTables'] = $this->ranking->getTables($data['showTeams']);
        $data['teamScores'] = $this->ranking->getTeamScores($data['showTeams']);

        // Load team-specific information
        $data['teamInfo'] = $this->teams->getTeamInfo($teamID);
        $data['teamName'] = $this->teams->getTeamName($teamID);

        // Load player information
        $data['spieler'] = $this->player->getPlayers($teamID);
        $data['goalkeeper'] = $this->player->getPlayersPosition($teamID,1);
        $data['defense'] = $this->player->getPlayersPosition($teamID,2);
        $data['midfield'] = $this->player->getPlayersPosition($teamID,3);
        $data['striker'] = $this->player->getPlayersPosition($teamID,4);

        // Load staff members
        $data['staff'] = $this->staff->getTeamStaff($teamID);

        // Load team calendar
        $data['match'] = $this->match->getTeamCalendar($teamID);
        $data['matchDone'] = $this->match->getTeamCalendarPast($teamID);
        $data['nextMatch'] = $this->match->getNextGameTeam($teamID);
        
        // Set Page Title
        $data['page_title'] = $data['teamName'];

        // Load views with all the loaded data
        $data ['type'] = $this->teams->getTeamType($teamID);
        if ($data['type']->type == 1) {
            $this->load->view("meta/metadata", $data);
            $this->drawNavigation();
            $this->load->view("elements/teamUnit", $data);
            $this->load->view("pages/team");
            $this->load->view("elements/footer");
        } else {
            redirect ("error/PageNotFound");
            }
        }
        
        public function junioren($teamID) {

        // Load Ranking Tables
        $data['teamID'] = $teamID;

        // Load team-specific information
        $data['teamInfo'] = $this->teams->getTeamInfo($teamID);
        $data['teamName'] = $this->teams->getTeamName($teamID);

        // Load player information
        $data['spieler'] = $this->junioren->getPlayers($teamID);

        // Load staff members
        $data['staff'] = $this->staff->getTeamStaff($teamID);

        // Load team calendar
        $data['match'] = $this->match->getTeamCalendar($teamID);
        $data['matchDone'] = $this->match->getTeamCalendarPast($teamID);
        $data['nextMatch'] = $this->match->getNextGameTeam($teamID);
        
        // Set Page Title
        $data['page_title'] = $data['teamName'];

        // Load views with all the loaded data
        $data ['type'] = $this->teams->getTeamType($teamID);
        if ($data['type']->type == 2) {
            $this->load->view("meta/metadata", $data);
            $this->drawNavigation();
            $this->load->view("elements/juniorenUnit", $data);
            $this->load->view("pages/junioren");
            $this->load->view("elements/footer");
        } else {
            redirect ("error/PageNotFound");
            }
        }

}