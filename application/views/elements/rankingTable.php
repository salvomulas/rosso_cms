<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Team</th>
            <th>P</th>
            <th>Diff</th>
        </tr>
    </thead>
    <tbody>

        <?php
        
        foreach ($teamScores[$teamNumber] as $points) {
            $homePoints = $points->points;
        }
        
        foreach ($rankTables[$teamNumber] as $row) {
            $diffPoints = ($row->points - $homePoints);
            if ((strpos($row->team,"Rossoneri")) === false) {
                echo '<tr>';
            } else {
                echo '<tr class="info">';
            }
            echo '<td>' . $row->team . '</td>';
            echo '<td>' . $row->points . '</td>';
            if ((strpos($row->team,"Rossoneri")) === false) {
                if ($diffPoints > 0) {
                    echo '<td>+' . $diffPoints . '</td>';
                } else {
                    echo '<td>' . $diffPoints . '</td>';
                }
            } else {
                echo '<td></td>';
            }
            echo '</tr>';
        }

        
        
        ?>

    </tbody>
</table>