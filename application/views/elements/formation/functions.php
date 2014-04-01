<?php

function showPlayer ($data, $id) {
    
    $jsID = str_replace(' ','',$data->row($id)->firstName.$data->row($id)->lastName);

    if (!$data->row($id)->pictureURL) {
        echo '<img href="#'.$jsID.'"  data-toggle="modal" id="'.$id.'" data-placement="bottom" rel="popover" data-original-title="'.$data->row($id)->firstName.' '.$data->row($id)->lastName.'" class="img-circle" src="'.base_url().'assets/img/dummy_person.jpg" style="width:70px;">';
    } else {
        echo '<img href="#'.$jsID.'"  data-toggle="modal" id="'.$id.'" data-placement="bottom" rel="popover" data-original-title="'.$data->row($id)->firstName.' '.$data->row($id)->lastName.'" class="img-circle" src="'.base_url().'assets/img/member/'.$data->row($id)->pictureURL.'" style="width:70px;">';
    }

}

function showPlayerMobile ($data, $pos) {

    ?>

    <div class="container navfix hidden-sm hidden-md hidden-lg">

        <div class="well">

            <table class="table table-condensed table-hover">
                <thead>
                <tr>
                    <th>Pos</th>
                    <th>Vorname</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>

    <?php

    for ($index=0;$index<11;$index++) {
                    
                    echo '<tr>';
                    echo '<td>'.$pos[$index].'</td>';
                    echo '<td>'.$data->row($index)->firstName.'</td>';
                    echo '<td>'.$data->row($index)->lastName.'</td>';
                    echo '</tr>';
                    
                }

    ?>

                    </tbody>
            </table>

        </div>

    </div>

    <?php

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

            $jsID = str_replace(' ','',$data->row($id)->firstName.$data->row($id)->lastName);
            
            echo '<tr>';
            echo '<td><button type="button" href="#'.$jsID.'" class="btn btn-primary btn-xs" data-toggle="modal"><span class="glyphicon glyphicon-info-sign"></span></button></td>';
            echo '<td>'.$data->row($id)->firstName.'</td>';
            echo '<td>'.$data->row($id)->lastName.'</td>';
            echo '</tr>';

        }

    } else {

        echo '<tr>';
        echo '<td>Keine Ersatzspieler erfasst</td>';
        echo '</tr>';

    }

}

function drawModal ($data) {

    for ($id = 0; $id < $data->num_rows; $id++) {
        
        $jsID = str_replace(' ','',$data->row($id)->firstName.$data->row($id)->lastName);

        echo '<div class="modal fade" id="'.$jsID.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
        echo '<div class="modal-dialog">';
        echo '<div class="modal-content">';
        echo '<div class="modal-header">';
        echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
        echo '<h3 id="myModalLabel">'.$data->row($id)->firstName.' '.$data->row($id)->lastName.'</h3>';
        echo '</div>';
        echo '<div class="modal-body">';
        echo '<div class="row">';
        echo '<div class="col-md-4 col-sm-5">';
        if ($data->row($id)->pictureURL) {
            echo '<img src="'.base_url().'assets/img/member/'.$data->row($id)->pictureURL.'" style="width:150px;">';
        } else {
            echo '<img src="'.base_url().'assets/img/dummy_person.jpg" style="width:150px;">';
        }
        echo '<hr>';
        echo '<a href="'.base_url().'spieler/aktiv/'.$data->row($id)->id.'" class="btn btn-default btn-small">zum Spielerprofil</a>';
        echo '</div>';
        echo '<div class="col-md-8 col-sm-7">';
        echo '<h4>'.$data->row($id)->name.'</h4>';
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
        if ($data->row($id)->bDay) {
            echo '<td>'.floor((time() - strtotime($data->row($id)->bDay))/31556926).'</td>';
        } else {
            echo '<td>(keine Angabe)</td>';
        }
        echo '</tr>';
        echo '</table>';
        echo '<h5>Statistische Werte</h5>';
        echo '<table class="table table-condensed table-hover">';
        echo '<tr>';
        echo '<th>Eins&auml;tze</th>';
        echo '<td>(keine Angabe)</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Tore (gesamt)</th>';
        echo '<td>(keine Angabe)</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Assist (gesamt)</th>';
        echo '<td>(keine Angabe)</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Gelbe Karten (gesamt)</th>';
        echo '<td>(keine Angabe)</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<th>Rote Karten (gesamt)</th>';
        echo '<td>(keine Angabe)</td>';
        echo '</tr>';
        echo '</table>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="modal-footer">';
        echo '<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Schliessen</button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

    }

}