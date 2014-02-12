<?php

$row = $playerInfo->row();

?>

<div class="player-unit">
    <div id="map-canvas" style="width: 100%; padding: 0;"></div>
        
    
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-5 player-box">
                    <div class="row">
                        <div class="col-md-4">
                            <?php
                            if ($row->pictureURL != NULL) {
                                echo '<img src="'.base_url().'assets/img/member/'.$row->pictureURL.'" style="width: 100%;">';
                            } else {
                                echo '<img src="'.base_url().'assets/img/dummy_person.jpg'.$row->pictureURL.'" style="width: 100%;">';
                            }
                            ?>
                        </div>
                        <div class="col-md-8">
                            <h3><?php echo $row->trikot.' - '.$row->firstName.' '.$row->lastName; ?></h3>
                            <?php echo '<h4>'.$row->name.'</h4>'; ?>
                            <?
                                switch ($row->toPosition) {
                                case 1: echo '<p>Torwart</p>';
                                break;
                                case 2: echo '<p>Verteidiger</p>';
                                break;
                                case 3: echo '<p>Mittelfeldspieler</p>';
                                break;
                                case 4: echo '<p>St&uuml;rmer</p>';
                                break;
                                default: echo '<p></p>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</div>