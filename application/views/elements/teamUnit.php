<?php

$row = $teamInfo->row();

?>

<div class="breadcrumb-unit">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
                <h3><?php echo $row->name; ?></h3>
                <p><?php echo $row->ligaDesc; ?></p>

            </div>
            <div class="col-md-8 text-right hidden-xs">
                <ul class="pagination">
                    <li class="active"><a href="#tab1" data-toggle="tab">Team</a></li>
                    <li><a href="#tab2" data-toggle="tab">Kader</a></li>
                    <li><a href="#tab3" data-toggle="tab">Staff</a></li>
                    <li><a href="#tab4" data-toggle="tab">Rangliste</a></li>
                    <li><a href="#tab5" data-toggle="tab">Spielkalender</a></li>
                    <li><a href="#tab6" data-toggle="tab">Matchberichte</a></li>
                </ul>
            </div>
            <div class="col-xs-12 text-center visible-xs">
                <ul class="nav nav-tabs nav-stacked">
                    <li class="active"><a href="#tab1" data-toggle="tab">Team</a></li>
                    <li><a href="#tab2" data-toggle="tab">Kader</a></li>
                    <li><a href="#tab3" data-toggle="tab">Staff</a></li>
                    <li><a href="#tab4" data-toggle="tab">Rangliste</a></li>
                    <li><a href="#tab5" data-toggle="tab">Spielkalender</a></li>
                    <li><a href="#tab6" data-toggle="tab">Matchberichte</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>