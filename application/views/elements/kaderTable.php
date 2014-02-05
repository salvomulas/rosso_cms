<?php

function printPosition ($role, $title) {

    if ($role->num_rows > 0) {
    
        $counter = 1;

        echo '<h4>'.$title.'</h4>';
        echo '<hr>';

        foreach ($role->result() as $row) {

            if ($counter == 1 || is_int(($counter+2)/3)) {
                echo '<div class="row">';
            }

            echo '<div class="col-md-4 col-sm-6">';
            
            echo '<div class="panel panel-success">';
            echo '<div class="panel-body">';
            echo '<div class="row">';
            echo '<div class="col-md-4 col-sm-4 col-xs-4">';
            
            if ($row->pictureURL != NULL) {
                echo '<a href="'.base_url().'spieler/aktiv/'.$row->id.'"><img class="img-rounded" src="'.base_url().'assets/img/member/'.$row->pictureURL.'" style="width: 100%;"></a>';
            } else {
                echo '<a href="'.base_url().'spieler/aktiv/'.$row->id.'"><img class="img-rounded" src="'.base_url().'assets/img/dummy_person.jpg" style="width: 100%;"></a>';
            }
            
            echo '</div>';
            
            echo '<div class="col-md-8 col-sm-8 col-xs-8">';
            echo '<h5 class="trikot">'.$row->trikot.'</h5>';
            echo '<h4>'.$row->firstName.' '.$row->lastName.'</h4>';

            echo '</div>';


            if (is_int($counter/3) || $counter == $role->num_rows()) {
                echo '</div>';
            }
            
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            $counter++;

        }


    
    } 

}

printPosition($goalkeeper, "Torhüter");
printPosition($defense, "Verteidigung");
printPosition($midfield, "Mittelfeld");
printPosition($striker, "Sturm");