<?php

$row = $teamInfo->row();

?>

<div class="hero-unit">
    <div class="container">
        <div class="row">
            <div class="span8 pull-right">
                <?php
                    if ($row->pictureURL != NULL) {
                        echo '<img src="'.base_url().'assets/img/team/'.$row->pictureURL.'">';
                    } else {
                        echo "Leider ist noch kein Bild vorhanden";
                    }
                ?>
            </div>
            <div class="span4">
                <h3><?php echo $row->name; ?></h3>
                <p><?php echo $row->ligaDesc; ?></p>
                <ul class="nav nav-tabs nav-stacked">
                    <li class="active"><a href="#tab1" data-toggle="tab">Kader</a></li>
                    <li><a href="#tab2" data-toggle="tab">Spielerliste</a></li>
                    <li><a href="#tab3" data-toggle="tab">Spielkalender</a></li>
                    <li><a href="#tab4" data-toggle="tab">Matchberichte</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>