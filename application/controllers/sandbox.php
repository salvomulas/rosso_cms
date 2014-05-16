<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sandbox extends CI_Controller {

    private $rankSource = 'http://www.football.ch/fvnws/Fussballverband-Nordwestschweiz/Vereine-FVNWS/Verein-FVNWS.aspx/v-508/a-rr/';

    public function __construct() {
        parent::__construct();
        require_once('system/libraries/DomParser.php');
        $this->load->model('teams');
        $this->load->model('ranking');
    }

    public function playerarray () {

        $play = array (35,99,69,33,101,19,103,9,96,144,120,17,112,57,79,8,109,104);

        echo serialize($play);

    }

    public function parse ($id) {

        $data ['page_title'] = "FVNWS Parser";
        $this->load->view("meta/metadata", $data);

        $this->parseRanking($id);
        //$this->parseRanking($this->secondID);
        //$this->parseRanking($this->thirdID);
        //$this->parseRanking($this->seniorenID);
        //$this->parseRanking($this->frauenID);
    }

    protected function parseRanking($tID) {

        $teamID = $this->teams->getParserObject($tID)->row()->parserObject;

        $structure = array ("team","gamePlayed","gameWon","gameDraw","gameLost","fairplay","goalsMade","goalsAgainst","points","teamID");
        $exception = array (0, 8, 11);
        $ranking = array();

        $html = new dom_parser();
        $html->load_file($this->rankSource);

        $loopCounter = -1;

        foreach ($html->find('table[id=' . $teamID . ']') as $table) {
            foreach ($table->find('tr[class=nisRanRowSP]') as $element) {
                $loopCounter++;
                $descCounter = 0;
                $excCounter = 0;
                foreach ($element->find('td') as $detail) {
                    if (!in_array($excCounter,$exception)) {
                        $content = htmlentities(trim($detail->plaintext), ENT_QUOTES, 'UTF-8');
                        $ranking[$loopCounter][$structure[$descCounter]] = $content;
                        $descCounter++;
                    }
                    $excCounter++;
                }
                $ranking[$loopCounter][$structure[$descCounter]] = $tID;
            }
        }

        for ($i = 0; $i<sizeof($ranking);$i++) {
            if(!is_int($ranking[$i]['fairplay'])) {
                $ranking[$i]['fairplay'] = substr($ranking[$i]['fairplay'],1, -1);
            }
        }

        //$this->ranking->truncateRanking();
        //$this->ranking->insertTeamRanking($ranking);

        echo '<div class="container">';
        echo '<h1>FVNWS Ranking Parser</h1>';
        echo '<h4>Developed by Salvatore Mulas</h4>';
        echo '<hr>';

        echo '<div class="row">';
        echo '<div class="col-md-2 text-center">';
        echo '<button type="button" class="btn btn-default">Start Parser</button>';
        echo '</div>';

        echo '<div class="col-md-10">';
        echo '<div class="progress progress-striped active"><div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div></div>';
        echo '</div>';

        echo '</div><hr>';

        echo '<div class="col-md-6">';
        echo '<table class="table table-condensed table-hover">';
        echo '<h4>Ranking table</h4>';

        for ($i = 0; $i < sizeof($ranking); $i++) {
            $desc = 0;
            echo '<tr>';
            for ($s = 0; $s < sizeof($ranking[$i])-1; $s++) {
                echo '<td>' . $ranking[$i][$structure[$desc]] . '</td>';
                $desc++;
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';

        echo '<div class="col-md-6">';
        echo '<div class="well">';
        echo '<h4>$ranking dump</h4>';
        print_r($ranking);
        echo '</div>';
        echo '</div>';

        echo '</div>';

        echo '<hr>';
    }

    protected function delete ($teamID) {
        //$this->load->model('ranking');
        //$this->ranking->emptyTeamRanking($teamID);

    }

}