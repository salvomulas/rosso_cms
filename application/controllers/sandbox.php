<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sandbox extends CI_Controller {

    private $firstID = 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl01_tbRangliste';
    private $secondID = 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl03_tbRangliste';
    private $thirdID = 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl05_tbRangliste';
    private $seniorenID = 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl07_tbRangliste';
    private $frauenID = 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl09_tbRangliste';

    public function __construct() {
        parent::__construct();
        require_once('system/libraries/DomParser.php');
    }

    public function index() {

        $data ['page_title'] = "FVNWS Parser";
        $this->load->view("meta/metadata", $data);

        $this->parseRanking($this->firstID);
        //$this->parseRanking($this->secondID);
        //$this->parseRanking($this->thirdID);
        //$this->parseRanking($this->seniorenID);
        //$this->parseRanking($this->frauenID);
    }

    public function parseRanking($teamID) {

        $ranking = array();

        $html = new dom_parser();
        $html->load_file('http://www.football.ch/fvnws/Fussballverband-Nordwestschweiz/Vereine-FVNWS/Verein-FVNWS.aspx/v-508/a-rr/');
        $loopCounter = -1;

        foreach ($html->find('table[id=' . $teamID . ']') as $table) {
            foreach ($table->find('tr[class=nisRanRowSP]') as $element) {
                array_push($ranking, array());
                $loopCounter++;
                foreach ($element->find('td') as $detail) {
                    array_push($ranking[$loopCounter], $detail->plaintext);
                }
            }
        }

        echo '<div class="container">';
        echo '<h1>FVNWS Ranking Parser</h1>';
        echo '<h4>Developed by Salvatore Mulas</h4>';
        echo '<hr>';

        echo '<div class="row">';
        echo '<div class="col-md-2 text-center">';
        echo '<button type="button" class="btn btn-default">Start Parser</button>';
        echo '</div>';

        echo '<div class="col-md-10">';
        echo '<div class="progress progress-striped active"><div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div></div>';
        echo '</div>';

        echo '</div><hr>';

        echo '<div class="col-md-6">';
        echo '<table class="table table-condensed table-hover">';
        for ($i = 0; $i < sizeof($ranking); $i++) {
            echo '<tr>';
            for ($s = 0; $s < sizeof($ranking[$i]); $s++) {
                echo '<td>' . $ranking[$i][$s] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
        echo '</div>';
    }

    public function interval() {

        //@ini_set("output_buffering", "Off");
        //@ini_set('implicit_flush', 1);
        //@ini_set('zlib.output_compression', 0);
        //@ini_set('max_execution_time', 1200);

        for ($i = 0; $i < 100; $i++) {
            echo "I am counting..." . $i . "<br />";
            if(sleep(1)!=0)
            {
                echo "sleep failed script terminating"; 
                break;
            }
            flush();
            ob_flush();
        }
    }

}