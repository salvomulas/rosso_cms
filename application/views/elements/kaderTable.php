<?php

function printPosition ($role, $title) {

    if ($role->num_rows > 0) {
    
        $counter = 1;

        echo '<h4>'.$title.'</h4>';
        echo '<hr>';

        foreach ($role->result() as $row) {

            if ($counter == 1 || is_int(($counter+2)/3)) {
                echo '<div class="row-fluid">';
            }

            echo '<div class="span4 text-center">';
            if ($row->pictureURL != NULL) {
                echo '<a href="'.base_url().'spieler/aktiv/'.$row->id.'"><img class="img-rounded" src="'.base_url().'assets/img/member/'.$row->pictureURL.'" style="height: 150px; width: 150px;"></a>';
            } else {
                echo '<a href="'.base_url().'spieler/aktiv/'.$row->id.'"><img class="img-rounded" src="'.base_url().'assets/img/dummy_person.jpg" style="height: 150px; width: 150px;"></a>';
            }
            echo '<h4>'.$row->trikot.'</h4><h5>'.$row->firstName.' '.$row->lastName.'</h5>';
            echo '</div>';

            if (is_int($counter/3) || $counter == $role->num_rows()) {
                echo '</div>';
            }

            $counter++;

        }

        echo '<hr>';
    
    } 

}

printPosition($goalkeeper, "Torhüter");
printPosition($defense, "Verteidigung");
printPosition($midfield, "Mittelfeld");
printPosition($striker, "Sturm");