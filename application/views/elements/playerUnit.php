<?php

$row = $playerInfo->row();

?>

<div class="breadcrumb-unit">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <h3><?php echo $row->firstName; ?> <strong><?php echo $row->lastName; ?></strong></h3>
                <?php
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