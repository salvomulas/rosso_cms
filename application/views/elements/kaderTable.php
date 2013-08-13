<h4>Torh&uuml;ter</h4>
<hr>
<?php

$counter = 0;

foreach ($goalkeeper as $row) {

    if ($counter == 0) {
        echo '<div class="row-fluid">';
    }
    echo '<div class="span4 text-center">';
    if ($row->pictureURL != NULL) {
        echo '<img class="img-rounded" src="'.base_url().'assets/img/member/'.$row->pictureURL.'" style="height: 150px; width: 150px;">';
    } else {
        echo '<img class="img-rounded" src="'.base_url().'assets/img/dummy_person.jpg" style="height: 150px; width: 150px;">';
    }
    echo '<h4>'.$row->trikot.'</h4><h5>'.$row->firstName.' '.$row->lastName.'</h5>';
    echo '</div>';
    echo '</div>';

}

?>