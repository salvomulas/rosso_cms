<div class="container navfix">
            <h3>Vorstand</h3>
            <p>An der letzten Generalversammlung wurde folgender Vorstand gew&auml;hlt:</p>
            <hr>

            <?
            
            echo '<div class="row">';

            foreach ($management->result() as $row) {

                echo '<div class="col-md-4 col-sm-6 col-xs-12">';
            
                echo '<div class="panel panel-success">';
                echo '<div class="panel-body">';
                echo '<div class="row">';
                echo '<div class="col-md-4 col-sm-4 col-xs-3">';

                if ($row->picURL != NULL) {
                    echo '<a href="'.base_url().'spieler/aktiv/'.$row->id.'"><img class="img-rounded" src="'.base_url().'assets/img/management/'.$row->pictureURL.'" style="width: 100%;"></a>';
                } else {
                    echo '<a href="'.base_url().'spieler/aktiv/'.$row->id.'"><img class="img-rounded" src="'.base_url().'assets/img/dummy_person.jpg" style="width: 100%;"></a>';
                }

                echo '</div>';

                echo '<div class="col-md-8 col-sm-8 col-xs-9">';
                echo '<h5 class="trikot">'.$row->function.'</h5>';
                echo '<h4><a href="#'.$row->firstName.'-'.$row->lastName.'" data-toggle="modal">'.$row->firstName.' '.$row->lastName.'</a></h4>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                
            }

            echo '</div>';

            ?>

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
    
