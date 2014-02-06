<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sandbox extends CI_Controller {

    private $firstID = 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl01_tbRangliste';
    private $secondID = 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl03_tbRangliste';
    private $thirdID = 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl05_tbRangliste';
    private $seniorenID = 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl07_tbRangliste';
    private $frauenID = 'ctl01_ctl00_ctl00_sfvVereinRanglisten_ctl09_tbRangliste';
    
    private $ranking = array();
    
    public function __construct() {
        parent::__construct();
        require_once('system/libraries/DomParser.php');
    }
    
    public function index() {

       $this->parseRanking($this->firstID);

    }
    
    public function parseRanking($teamID) {
        
        $html = new dom_parser();
        $html->load_file('http://www.football.ch/fvnws/Fussballverband-Nordwestschweiz/Vereine-FVNWS/Verein-FVNWS.aspx/v-508/a-rr/');
        $loopCounter = -1;
        
        foreach($html->find('table[id='.$teamID.']') as $table) {
            foreach($table->find('tr[class=nisRanRowSP]') as $element) {
                array_push($this->ranking, array());
                $loopCounter++;
                foreach ($element->find('td') as $detail) {
                    array_push($this->ranking[$loopCounter], $detail->plaintext);
                }

            }
        }
        
        print_r($this->ranking);
        
        $count = sizeof($this->ranking);
        echo $count;
        

        echo '<table>';
            for ($i=0; $i<sizeof($this->ranking); $i++) {
                echo '<tr>';
                for ($s=0; $s<sizeof($this->ranking[$i]); $s++) {
                    echo '<td>'.$this->ranking[$i][$s].'</td>';
                }
                echo '</tr>';
            }
        echo '</table>';

    }

}