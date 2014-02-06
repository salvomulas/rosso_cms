<h4>Staff</h4>
<hr>

<?php

if ($staff->num_rows > 0) {

    $counter = 1;

    foreach ($staff->result() as $row) {

        if ($counter == 1 || is_int(($counter + 2) / 3)) {
            echo '<div class="row">';
        }

        echo '<div class="col-md-4 col-sm-6">';

        echo '<div class="panel panel-success">';
        echo '<div class="panel-body">';
        echo '<div class="row">';
        echo '<div class="col-md-4 col-sm-4 col-xs-4">';

        if ($row->pictureURL != NULL) {
            echo '<img class="img-rounded" src="' . base_url() . 'assets/img/staff/' . $row->pictureURL . '" style="width: 100%;">';
        } else {
            echo '<img class="img-rounded" src="' . base_url() . 'assets/img/dummy_person.jpg" style="width: 100%;">';
        }

        echo '</div>';

        echo '<div class="col-md-8 col-sm-8 col-xs-8">';
        echo '<h5 class="trikot">' . $row->function . '</h5>';
        echo '<h4>' . $row->firstName . ' ' . $row->lastName . '</h4>';

        echo '</div>';


        if (is_int($counter / 3) || $counter == $staff->num_rows()) {
            echo '</div>';
        }

        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';

        $counter++;
    }
} 