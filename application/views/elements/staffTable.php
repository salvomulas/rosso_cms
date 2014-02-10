<h4>Staff</h4>
<hr>

<?php

if ($staff->num_rows > 0) {

    echo '<div class="row">';
    
    foreach ($staff->result() as $row) {

        echo '<div class="col-md-4 col-sm-6 col-xs-12">';

        echo '<div class="panel panel-success">';
        echo '<div class="panel-body">';
        echo '<div class="row">';
        echo '<div class="col-md-4 col-sm-4 col-xs-3">';

        if ($row->pictureURL != NULL) {
            echo '<img class="img-rounded" src="' . base_url() . 'assets/img/staff/' . $row->pictureURL . '" style="width: 100%;">';
        } else {
            echo '<img class="img-rounded" src="' . base_url() . 'assets/img/dummy_person.jpg" style="width: 100%;">';
        }

        echo '</div>';

        echo '<div class="col-md-8 col-sm-8 col-xs-9">';
        echo '<h5 class="trikot">' . $row->function . '</h5>';
        echo '<h4>' . $row->firstName . ' ' . $row->lastName . '</h4>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

    }
    
    echo '</div>';
    
} 