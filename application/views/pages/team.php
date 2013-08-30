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
                        <p>Es wurden noch keine Matchberichte verfasst.</p>
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
                        <p>Zur Zeit sind noch keine Spieldaten hinterlegt.</p>
                        <!--
                        <h5>Erste Mannschaft</h5>

                        <p><strong>vs</strong> FC Bubendorf a</p>

                        <p>Sportplatz Bifang, Lausen</p>

                        <p>Dienstag, 25. August 2013 um 10:00Uhr</p>
                        -->
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>