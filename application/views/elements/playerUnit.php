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
                <?
                    switch ($row->toTeam) {
                    case 1: echo '<h4>Erste Mannschaft</h4>';
                    break;
                    case 2: echo '<h4>Zweite Mannschaft</h4>';
                    break;
                    case 3: echo '<h4>Dritte Mannschaft</h4>';
                    break;
                    case 10: echo '<h4>Senioren</h4>';
                    break;
                    case 15: echo '<h4>Frauen</h4>';
                    break;
                    case 20: echo '<h4>Junioren G</h4>';
                    break;
                    case 22: echo '<h4>Junioren F</h4>';
                    break;
                    default: echo '<h4></h4>';
                    }
                ?>
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