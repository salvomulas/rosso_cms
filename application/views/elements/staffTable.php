<?php

if ($staff->num_rows > 0) {

    foreach ($staff->result() as $row) {

        echo '<div class="row-fluid">';
        echo '<div class="span2">';
        if ($row->pictureURL != NULL) {
            echo '<img class="img-rounded" src="'.base_url().'assets/img/staff'.$row->pictureURL.'" style="height: 70px;">';
        } else {
            echo '<img class="img-rounded" src="'.base_url().'assets/img/dummy_person.jpg" style="height: 60px;">';
        }
        echo '</div>';
        echo '<div class="span10">';
        echo '<h5>'.$row->function.'</h5>';
        echo '<p>'.$row->lastName.' '.$row->firstName.'<h5>';
        echo '</div>';
        echo '</div>';
        echo '<hr>';

    }
    
    } else {
        echo '<p>Wird noch zugeteilt</p>';
    }