<?php

    $row = $teamInfo->row();

    if ($row->pictureURL != NULL) {
        echo '<img src="'.base_url().'assets/img/team/'.$row->pictureURL.'" style="width: 100%;">';
    } else {
        echo "Leider ist noch kein Bild vorhanden";
    }

?>
<hr>