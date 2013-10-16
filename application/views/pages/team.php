<div class="container">

    <div class="row">

        <div class="span8">

            <div class="tabbable">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">

                        <?php

                        $data['goalkeeper'] = $goalkeeper;
                        $data['defense'] = $defense;
                        $data['midfield'] = $midfield;
                        $data['striker'] = $striker;

                        $this->load->view('elements/kaderTable');

                        ?>

                    </div>
                    <div class="tab-pane" id="tab2">
                        <?php
                        $data['teamNumber'] = $teamID;
                        $data['spieler'] = $spieler;
                        $this->load->view('elements/playerTable', $data);
                        ?>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <?php
                        $data['match'] = $match;
                        $this->load->view('elements/teamCalendar', $data);
                        ?>
                    </div>
                    <div class="tab-pane" id="tab4">
                        <?php
                        $data['reports'] = $reports;
                        $this->load->view('elements/teamReports', $data);
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="span4">

            <div class="well">
                <h4>Staff</h4>
                <hr>

                <?php

                $data ['staff'] = $staff;
                $this->load->view('elements/staffTable', $data);

                ?>


            </div>
            <div class="well">
                <h4>Tabelle</h4>

                <?php

                $data['teamNumber'] = $teamID;
                $data['rankTables'] = $rankTables;
                $this->load->view('elements/rankingTable', $data);
                ?>

            </div>
            <div class="well">
                <h4>N&auml;chstes Spiel</h4>

                <div class="row-fluid">
                    <div class="span3">
                        <img src="<?php echo base_url(); ?>assets/img/wappen.png" style="width: 150px;">
                    </div>
                    <div class="span9">
                        <?php
                        
                        if ($nextMatch->num_rows > 0) {
                            foreach ($nextMatch->result() as $row) {

                                echo '<h5>'.$row->gameType.'</h5>';
                                echo '<p><strong>vs </strong>'.$row->opponent.'</p>';
                                echo '<p>'.$row->location.'</p>';
                                echo '<p>'.$row->complex.'</p>';
                                echo '<p>'.$row->date.' um '.$row->time.' Uhr</p>';
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