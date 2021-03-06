<table class="table table-hover table-condensed">
    <thead>
        <tr>
            <th>Nr.</th>
            <th>Nachname</th>
            <th>Vorname</th>
            <th>Position</th>
            <th>Geb. Datum</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($spieler->num_rows > 0) {
            foreach ($spieler->result() as $row) {
                echo '<tr>';
                echo '<td>' . $row->trikot . '</td>';
                echo '<td>' . $row->lastName . '</td>';
                echo '<td>' . $row->firstName . '</td>';
                switch ($row->toPosition) {
                    case 1: echo '<td>Torwart</td>';
                    break;
                    case 2: echo '<td>Verteidiger</td>';
                    break;
                    case 3: echo '<td>Mittelfeldspieler</td>';
                    break;
                    case 4: echo '<td>St&uuml;rmer</td>';
                    break;
                    default: echo '<td></td>';
                }
                if ($row->bDay == 0) {
                    echo '<td></td>';
                } else {
                    echo '<td>' . $row->bDay . '</td>';
                }
                echo '</tr>';
            }
        }
        ?>
    </tbody>
</table>