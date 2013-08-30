<?php

echo '<table class="table table-condensed table-hover">';
echo '<thead>';
echo '<tr>';
echo '<th>Typ</th>';
echo '<th>Datum</th>';
echo '<th>Zeit</th>';
echo '<th>Gegner</th>';
echo '<th>Ort</th>';
echo '</tr>';
echo '<tbody>';

foreach ($match->result() as $row) {
    
    echo '<tr>';
    echo '<td>'.$row->gameType.'</td>';
    echo '<td>'.$row->date.'</td>';
    if ($row->time == 0) {
        echo '<td></td>';
    } else {
        echo '<td>'.$row->time.'</td>';
    }
    echo '<td>'.$row->opponent.'</td>';
    echo '<td>'.$row->plz.'</td>';
    echo '</tr>';
    
}

echo '</tbody>';
echo '</table>';

?>
