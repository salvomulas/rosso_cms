<div class="container">

    <div class="row">
        <div class="span4">
            <div class="well">
                <h4>Staff</h4>
                <div class="row-fluid">
                    <div class="span2">
                        <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="height: 60px;">
                    </div>
                    <div class="span10">
                        <h5>Trainer</h5>
                        <p>Roberti Alessandro</p>
                    </div>
                </div>
                <hr>
                <div class="row-fluid">
                    <div class="span2">
                        <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="height: 60px;">
                    </div>
                    <div class="span10">
                        <h5>Co-Trainer</h5>
                        <p>Schreiber Pascal</p>
                    </div>
                </div>
                <hr>
                <div class="row-fluid">
                    <div class="span2">
                        <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="height: 60px;">
                    </div>
                    <div class="span10">
                        <h5>Torwart-Trainer</h5>
                        <p>Mazza Antonio</p>
                    </div>
                </div>
            </div>
            <div class="well">
                <h4>Tabelle</h4>
                <?php
                $data['teamNumber'] = 1;
                $data['rankTables'] = $rankTables;
                $this->load->view('elements/rankingTable', $data);
                ?>
            </div>
            <div class="well">
                <h4>Spiele</h4>
            </div>
        </div>
        <div class="span8">
            <img src="<?php echo base_url(); ?>assets/img/mannschaft.jpg">
            <hr>
            <div class="tabbable">
                <ul class="nav nav-pills">
                    <li class="active"><a href="#tab1" data-toggle="tab">Kader</a></li>
                    <li><a href="#tab2" data-toggle="tab">Spielerliste</a></li>
                    <li><a href="#tab3" data-toggle="tab">Spiele</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">

                        <div class="row-fluid">

                        </div>

                    </div>
                    <div class="tab-pane" id="tab2">
                        <?php
                        $data['teamNumber'] = 1;
                        $data['spieler'] = $spieler;
                        $this->load->view('elements/playerTable', $data);
                        ?>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <p>Howdy, I'm in Section 2.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>