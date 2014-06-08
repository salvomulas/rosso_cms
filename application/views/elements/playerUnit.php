<?php

$row = $playerInfo->row();

?>

<div class="breadcrumb-unit">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <h3><?php echo $row->firstName; ?> <strong><?php echo $row->lastName; ?></strong></h3>
                <?php
                switch ($row->toPosition) {
                    case 1: $pos = "Torwart";
                        break;
                    case 2: $pos = "Verteidiger";
                        break;
                    case 3: $pos = "Mittelfeldspieler";
                        break;
                    case 4: $pos = "Stürmer";
                        break;
                    default: $pos = "";
                }
                echo '<strong>', $row->name, '</strong> | ', $pos;
                ?>

            </div>
            <div class="col-md-4 text-right">
                <h1><?php echo $row->trikot; ?></h1>
            </div>
        </div>
    </div>
</div>