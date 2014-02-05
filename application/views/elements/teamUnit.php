<?php

$row = $teamInfo->row();

?>

<div class="match-unit">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                
                <h3><?php echo $row->name; ?></h3>
                <p><?php echo $row->ligaDesc; ?></p>
                <hr>
                
                
                
                
            </div>
            
            <div class="col-md-6">
                <?php
                    if ($row->pictureURL != NULL) {
                        echo '<img src="'.base_url().'assets/img/team/'.$row->pictureURL.'" style="width: 100%;">';
                    } else {
                        echo "Leider ist noch kein Bild vorhanden";
                    }
                ?>
            </div>
            <div class="col-md-3">
                <div class="well text-center">
                    <a href="http://www.lenkgeometrie-center.ch" target="_blank" alt="Lenkgeometrie Center GmbH"><img src="http://localhost/rosso_cms/assets/img/sponsors/lenkgeometrie.png"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="pagination">
                    <li class="active"><a href="#tab1" data-toggle="tab">Kader</a></li>
                    <li><a href="#tab2" data-toggle="tab">Spielerliste</a></li>
                    <li><a href="#tab3" data-toggle="tab">Staff</a></li>
                    <li><a href="#tab4" data-toggle="tab">Rangliste</a></li>
                    <li><a href="#tab5" data-toggle="tab">Spielkalender</a></li>
                    <li><a href="#tab6" data-toggle="tab">Matchberichte</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>