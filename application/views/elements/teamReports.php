<?php

// Past matches

echo '<h4>Matchberichte</h4>';

if ($reports->num_rows > 0) {

    echo '<table class="table table-condensed table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Titel</th>';
    echo '<th>Spiel</th>';
    echo '<th>Resultat</th>';
    echo '<th>Spieldatum</th>';
    echo '<th></th>';
    echo '</tr>';
    echo '<tbody>';

    foreach ($reports->result() as $row) {

        echo '<tr>';
        echo '<td>'.$row->title.'</td>';
        if ($row->isHome == 1) {
            echo '<td>AC Rossoneri - '.$row->opponent.'</td>';
        } else {
            echo '<td>'.$row->opponent.' - AC Rossoneri</td>';
        }
        echo '<td>'.$row->pointsHome.':'.$row->pointsAway.'</td>';
        echo '<td>'.$row->mDate.'</td>';
        echo '<td><a href="'.base_url().'aktuelles/match/'.$row->id.'"><i class="icon-play"></i></a></td>';
        echo '</tr>';

    }

    echo '</tbody>';
    echo '</table>';

} else {
    
    echo '<p>Noch keine Matchberichte verfasst</p>';
    
}