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
        foreach ($ranking as $row) {
            $diffPoints = ($row->points - 0);
            echo '<tr>';
            echo '<td>' . $row->team . '</td>';
            echo '<td>' . $row->points . '</td>';
            echo '<td>' . $diffPoints . '</td>';
            echo '</tr>';
        }
        ?>

    </tbody>
</table>