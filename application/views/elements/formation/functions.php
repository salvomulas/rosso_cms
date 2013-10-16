<?php

function showPlayer ($data, $id) {
    
    $jsID = str_replace(' ','',$data->row($id)->firstName.$data->row($id)->lastName);

    if (!$data->row($id)->pictureURL) {
        echo '<img href="#'.$jsID.'"  data-toggle="modal" id="'.$id.'" data-placement="bottom" rel="popover" data-original-title="'.$data->row($id)->firstName.' '.$data->row($id)->lastName.'" class="img-circle" src="'.base_url().'assets/img/dummy_person.jpg" style="width:70px;">';
    } else {
        echo '<img href="#'.$jsID.'"  data-toggle="modal" id="'.$id.'" data-placement="bottom" rel="popover" data-original-title="'.$data->row($id)->firstName.' '.$data->row($id)->lastName.'" class="img-circle" src="'.base_url().'assets/img/member/'.$data->row($id)->pictureURL.'" style="width:70px;">';
    }

}

function writeJS () {

    echo '<script>';
    echo '$(function() {';

    for ($i = 0; $i < 11; $i++) {

       echo ' $("#'.$i.'").tooltip();';

    }

    echo '});';
    echo '</script>';

}

function resPlayer ($data) {

    if ($data->num_rows > 11) {

        for ($id = 11; $id < $data->num_rows; $id++) {

            echo '<tr>';
            echo '<td>'.$data->row($id)->firstName.'</td>';
            echo '<td>'.$data->row($id)->lastName.'</td>';
            echo '</tr>';

        }

    } else {

        echo '<tr>';
        echo '<td>Keine Ersatzspieler</td>';
        echo '</tr>';

    }

}

function drawModal ($data) {

    for ($id = 0; $id < $data->num_rows; $id++) {
        
        $jsID = str_replace(' ','',$data->row($id)->firstName.$data->row($id)->lastName);

        echo '<div id="'.$jsID.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
        echo '<div class="modal-header">';
        echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
        echo '<h3 id="myModalLabel">'.$data->row($id)->firstName.' '.$data->row($id)->lastName.'</h3>';
        echo '</div>';
        echo '<div class="modal-body">';
        echo '<div class="row-fluid">';
        echo '<div class="span4">';
        if ($data->row($id)->pictureURL) {
            echo '<img src="'.base_url().'assets/img/member/'.$data->row($id)->pictureURL.'" style="width:150px;">';
        } else {
            echo '<img src="'.base_url().'assets/img/dummy_person.jpg" style="width:150px;">';
        }
        echo '<hr>';
        echo '<a href="" class="btn btn-info btn-small">zum Spielerprofil</a>';
        echo '</div>';
        echo '<div class="span8">';
        echo '<h4>Erste Mannschaft</h4>';
        echo '<h5>Pers&ouml;nliche Daten</h5>';
        echo '<table class="table table-condensed table-hover">';
        echo '<tr>';
        echo '<th>Vorname</th>';
        echo '<td>'.$data->row($id)->firstName.'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<td>'.$data->row($id)->lastName.'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Alter</th>';
        echo '<td>23</td>';
        echo '</tr>';
        echo '</table>';
        echo '<h5>Statistische Werte</h5>';
        echo '<table class="table table-condensed table-hover">';
        echo '<tr>';
        echo '<th>Eins&auml;tze</th>';
        echo '<td>12</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Tore (gesamt)</th>';
        echo '<td>0 (0)</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Assist (gesamt)</th>';
        echo '<td>0 (1)</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Gelbe Karten (gesamt)</th>';
        echo '<td>1 (2)</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Rote Karten (gesamt)</th>';
        echo '<td>0 (0)</td>';
        echo '</tr>';
        echo '</table>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="modal-footer">';
        echo '<button class="btn" data-dismiss="modal" aria-hidden="true">Schliessen</button>';
        echo '</div>';
        echo '</div>';

    }

}