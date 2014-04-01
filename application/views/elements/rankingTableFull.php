<div class="row">
    
    <div class="col-md-8">
        <div class="table-responsive">
            <table class="table table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Pos.</th>
                        <th>Team</th>
                        <th></th>
                        <th>G</th>
                        <th>U</th>
                        <th>V</th>
                        <th class="text-center">Fairplay</th>
                        <th class="text-center">Goals</th>
                        <th>P</th>
                        <th>Diff</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($teamScores[$teamNumber] as $points) {
                        $homePoints = $points->points;
                    }

                    $count = 1;

                    foreach ($rankTables[$teamNumber] as $row) {
                        $diffPoints = ($row->points - $homePoints);
                        if ((strpos($row->team, "Rossoneri")) === false) {
                            echo '<tr>';
                        } else {
                            echo '<tr class="danger">';
                        }
                        echo '<td>' . $count . '.</td>';
                        echo '<td>' . $row->team . '</td>';
                        echo '<td>' . $row->gamePlayed . '</td>'; //Anzahl Spiele
                        echo '<td>' . $row->gameWon . '</td>'; //Gewonnen
                        echo '<td>' . $row->gameDraw . '</td>'; //Unentschieden
                        echo '<td>' . $row->gameLost . '</td>'; //Verloren
                        echo '<td class="text-center">(' . $row->fairplay . ')</td>';
                        echo '<td class="text-center">' . $row->goalsMade . ' : ' . $row->goalsAgainst . '</td>';
                        echo '<td>' . $row->points . '</td>';
                        if ((strpos($row->team, "Rossoneri")) === false) {
                            if ($diffPoints > 0) {
                                echo '<td>+' . $diffPoints . '</td>';
                            } else {
                                echo '<td>' . $diffPoints . '</td>';
                            }
                        } else {
                            echo '<td></td>';
                        }
                        echo '</tr>';
                        $count++;
                    }
                    ?>

                </tbody>
            </table>
        </div>
        
    </div>
    
    <div class="col-md-4">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">N&auml;chstes Spiel</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <img src="<?php echo base_url(); ?>assets/img/wappen.png" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9">
                        <?php
                        if ($nextMatch->num_rows > 0) {
                            foreach ($nextMatch->result() as $row) {

                                echo '<h5>' . $row->gameType . '</h5>';
                                echo '<p><strong>vs </strong>' . $row->opponent . '</p>';
                                echo '<p>' . $row->location . '</p>';
                                echo '<p>' . $row->complex . '</p>';
                                echo '<p>' . $row->date . ' um ' . $row->time . ' Uhr</p>';
                            }
                        } else {
                            echo '<p>Es sind noch keine Spiele angesetzt!</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>