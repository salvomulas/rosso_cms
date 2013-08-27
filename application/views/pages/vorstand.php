<div class="container">
    <div class="row">
        <div class="span9">
            <h3>Vorstand</h3>
            <p>An der letzten Generalversammlung wurde folgender Vorstand gew&auml;hlt:</p>
            <hr>

            <?

            $counter = 1;

            foreach ($management->result() as $row) {

                if ($counter == 1 || is_int(($counter+3)/4)) {
                    echo '<div class="row-fluid">';
                    echo '<ul class="thumbnails">';
                }

                echo '<li class="span3">';
                echo '<div class="thumbnail">';
                if ($row->picURL != NULL) {
                    echo '<img href="#" data-toggle="modal" src="'.base_url().'assets/img/management'.$row->picURL.'" style="width: 300px; height: 200px;">';
                } else {
                    echo '<img href="#" data-toggle="modal" src="'.base_url().'assets/img/dummy_person.jpg" style="width: 300px; height: 200px;">';
                }
                echo '<div class="caption">';
                echo '<h4><a href="#'.$row->firstName.'-'.$row->lastName.'" data-toggle="modal">'.$row->firstName.' '.$row->lastName.'</a></h4>';
                echo '<p>'.$row->function.'</p>';
                echo '</div>';
                echo '</div>';
                echo '</li>';

                if (is_int($counter/4) || $counter == $management->num_rows()) {
                    echo '</ul>';
                    echo '</div>';
                }

                $counter++;

            }

            echo '<hr>';

            ?>

        </div>
        <div class="span3">
            <div class="well">
                <h4>Verein</h4>
                <ul class="nav nav-list">
                    <li class="active"><a href="#">Vorstand</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal Windows -->

<?php

foreach ($management->result() as $row) {
    
    echo '<div id="'.$row->firstName.'-'.$row->lastName.'" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
    echo '<div class="modal-header">';
    echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>';
    echo '<h3 id="myModalLabel">'.$row->firstName.' '.$row->lastName.'</h3>';
    echo '</div>';
    echo '<div class="modal-body">';
    echo '<h4>'.$row->function.'</h4>';
    echo '<table class="table table-condensed table-hover">';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>Vorname</td>';
    echo '<td>'.$row->firstName.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Name</td>';
    echo '<td>'.$row->lastName.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Telefonnummer</td>';
    echo '<td>'.$row->phone.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Mobil</td>';
    echo '<td>'.$row->mobile.'</td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>eMail</td>';
    echo '<td>'.$row->email.'</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '<div class="modal-footer">';
    echo '<button class="btn" data-dismiss="modal" aria-hidden="true">Schliessen</button>';
    echo '</div>';
    echo '</div>';
    
}

?>
    
