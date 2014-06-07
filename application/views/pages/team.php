<div class="container">

    <div class="tabbable">
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <?php
                $data['teamInfo'] = $teamInfo;

                $this->load->view('elements/teamTable');
                ?>
            </div>
            <div class="tab-pane" id="tab2">
                <?php
                $data['goalkeeper'] = $goalkeeper;
                $data['defense'] = $defense;
                $data['midfield'] = $midfield;
                $data['striker'] = $striker;

                $this->load->view('elements/kaderTable');
                ?>
            </div>
            <div class="tab-pane" id="tab3">
                <?php
                $data ['staff'] = $staff;
                $this->load->view('elements/staffTable', $data);
                ?>
            </div>
            <div class="tab-pane" id="tab4">
                <?php
                $data['teamNumber'] = $teamID;
                $data['rankTables'] = $rankTables;
                $data['nextMatch'] = $nextMatch;
                $this->load->view('elements/rankingTableFull', $data);
                ?>
            </div>
            <div class="tab-pane" id="tab5">
                <?php
                $data['match'] = $match;
                $this->load->view('elements/teamCalendar', $data);
                ?>
            </div>
            <div class="tab-pane" id="tab6">
                <?php
                $data['reports'] = $reports;
                $this->load->view('elements/teamReports', $data);
                ?>
            </div>
        </div>
    </div>
</div>