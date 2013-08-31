<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sandbox extends CI_Controller {

	public function index() {

        // Aufstellung zum Testen hier eingeben
        $aufstellung = array (4,4,1,1);

        // Berechne die Array-Grösse
        $anzahl = sizeof($aufstellung);

        // Variableninitialisierung für Gültigkeit
        $validity = false;

        // Gültigkeitsrechnung falls nicht 10 Spieler
        if (array_sum($aufstellung) == 10) {
            $validity = true;
        } else {
            $validity = false;
        }

        // Wenn gültig fahre fort
        if ($validity) {

            switch ($anzahl) {

                case 3:
                    echo "Verteidiger: ".$aufstellung[0]."<br />";
                    echo "Mittelfeld: ".$aufstellung[1]."<br />";
                    echo "Sturm: ".$aufstellung[2]."<br />";
                break;
                case 4:
                    echo "Verteidiger: ".$aufstellung[0]."<br />";
                    echo "Defensiv Mittelfeld: ".$aufstellung[1]."<br />";
                    echo "Offensiv Mittelfeld: ".$aufstellung[2]."<br />";
                    echo "Sturm: ".$aufstellung[3]."<br />";
                break;
                default:
                    echo "Ung&uuml;ltige Aufstellung";

            }

        } else {

            echo "Ung&uuml;ltige Aufstellung";

        }

    }
	
}