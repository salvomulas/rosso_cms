<?php

$row = $playerInfo->row();

function get_age($birth_date){

    return floor((time() - strtotime($birth_date))/31556926);

}


?>

<div class="container">

    <div class="row">

        <div class="span6 pull-right">

            <div class="well">

                <h4>Biographische Daten</h4>

                <table class="table table-condensed table-hover">

                    <tr>
                        <td><strong>Vorname</strong></td>
                        <td><? echo $row->firstName; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Nachname</strong></td>
                        <td><? echo $row->lastName; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Spitzname</strong></td>
                        <td><? echo $row->nickName; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Geburtsdatum</strong></td>
                        <td><? if ($row->bDay != 0) { echo $row->bDay; } else { echo ""; } ?></td>
                    </tr>
                    <tr>
                        <td><strong>Alter</strong></td>
                        <td>
                            <?php
                            if ($row->bDay != 0) {
                                echo get_age($row->bDay);
                            } else {
                                echo "";
                            }
                            ?>
                        </td>
                    </tr>

                </table>

            </div>

            <div class="well">

                <h4>Fussballerische Kuriosit&auml;ten</h4>
                <table class="table table-condensed table-hover">

                    <tr>
                        <td><strong>Lieblingsspieler</strong></td>
                        <td>(keine Angabe)</td>
                    </tr>
                    <tr>
                        <td><strong>Lieblingsverein</strong></td>
                        <td>(keine Angabe)</td>
                    </tr>
                    <tr>
                        <td><strong>Lieblingsposition</strong></td>
                        <td>(keine Angabe)</td>
                    </tr>

                </table>

            </div>

            <div class="well">

                <h4>Bisherige Vereine</h4>
                <p>(keine Angabe)</p>

            </div>

        </div>

        <div class="span6">

            <h4>Spielerinformationen</h4>
            <hr>

            <table class="table table-condensed table-hover">

                <tr>
                    <td><strong>Beim AC Rossoneri seit</strong></td>
                    <td>(keine Angabe)</td>
                </tr>
                <tr>
                    <td><strong>Eins&auml;tze (seit Saison 13/14)</strong></td>
                    <td>0</td>
                </tr>
                <tr>
                    <td><strong>Tore</strong></td>
                    <td>0</td>
                </tr>
                <tr>
                    <td><strong>Assists</strong></td>
                    <td>0</td>
                </tr>
                <tr>
                    <td><strong>Gelbe Karten</strong></td>
                    <td>0</td>
                </tr>
                <tr>
                    <td><strong>Rote Karten</strong></td>
                    <td>0</td>
                </tr>

            </table>

            <hr>

            <h4><?php echo $row->firstName.' '.$row->lastName.' im Einsatz' ?></h4>
            <hr>
            <p><?php echo $row->firstName. ' '.$row->lastName.' ist zur Zeit auf keinem Foto zu sehen' ?></p>
            
            <!--
            <div class="row-fluid">

                <div class="span4">
                    <img src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 150px; height: 150px;">
                </div>

                <div class="span4">
                    <img src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 150px; height: 150px;">
                </div>

                <div class="span4">
                    <img src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 150px; height: 150px;">
                </div>

            </div>

            <hr>

            <div class="row-fluid">

                <div class="span4">
                    <img src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 150px; height: 150px;">
                </div>

                <div class="span4">
                    <img src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 150px; height: 150px;">
                </div>

                <div class="span4">
                    <img src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 150px; height: 150px;">
                </div>

            </div>

            <hr>
-->
        </div>

    </div>

</div>