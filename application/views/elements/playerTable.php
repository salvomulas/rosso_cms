<table class="table table-hover table-condensed">
    <thead>
        <tr>
            <th>Nachname</th>
            <th>Vornamename</th>
            <th>Position</th>
            <th>Geb. Datum</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($spieler as $row) {
            echo '<tr>';
            echo '<td>' . $row->lastName . '</td>';
            echo '<td>' . $row->firstName . '</td>';
            echo '<td></td>';
            echo '<td>' . $row->bDay . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>