<div class="container">

    <div class="tabbable">
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">

                <?php
                $data['spieler'] = $spieler;

                $this->load->view('elements/juniorenKader');
                ?>

            </div>
            <div class="tab-pane" id="tab2">
                <?php
                $data['teamNumber'] = $teamID;
                $data['spieler'] = $spieler;
                $this->load->view('elements/juniorenTable', $data);
                ?>
            </div>
            <div class="tab-pane" id="tab3">
                <?php
                $data ['staff'] = $staff;
                $this->load->view('elements/staffTable', $data);
                ?>
            </div>
            <div class="tab-pane" id="tab4">
                <p>Es wurden noch keine Matchberichte verfasst.</p>
            </div>
        </div>
    </div>
</div>