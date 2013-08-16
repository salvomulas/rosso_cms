<?php

$row = $playerInfo->row();

?>

<div class="hero-unit">
    <div class="container">
        <div class="row">
            <div class="span3">
                <?php
                if ($row->pictureURL != NULL) {
                    echo '<img src="'.base_url().'assets/img/member/'.$row->pictureURL.'" style="width: 240px;">';
                } else {
                    echo '<img src="'.base_url().'assets/img/dummy_person.jpg'.$row->pictureURL.'" style="width: 240px;">';
                }
                ?>
            </div>
            <div class="span9">
                <h3><?php echo $row->trikot.' - '.$row->firstName.' '.$row->lastName; ?></h3>
                <h4><?php echo $row->toTeam; ?></h4>
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