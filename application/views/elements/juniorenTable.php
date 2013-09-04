<table class="table table-hover table-condensed">
    <thead>
        <tr>
            <th>Nachname</th>
            <th>Vorname</th>
            <th>Geb. Datum</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($spieler->num_rows > 0) {
            foreach ($spieler->result() as $row) {
                echo '<tr>';
                echo '<td>' . $row->lastName . '</td>';
                echo '<td>' . $row->firstName . '</td>';
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