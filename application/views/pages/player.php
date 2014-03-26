<?php

$row = $playerInfo->row();

function get_age($birth_date){

    return floor((time() - strtotime($birth_date))/31556926);

}

?>

<div class="container navfix">

    <div class="row">

        <div class="col-md-6 col-sm-6">

            <?php

            $path = base_url().'assets/img/member/fullsize/'.$row->pictureURL;

            if ($row->pictureURL != NULL) {
                if (file_exists('assets/img/member/fullsize/'.$row->pictureURL)) {
                    echo '<img src="'.$path.'" style="width: 100%;">';
                } else {
                    echo '<img src="'.base_url().'assets/img/member/'.$row->pictureURL.'" style="width: 100%;">';
                }
            } else {
                echo '<img src="'.base_url().'assets/img/dummy_person.jpg" style="width: 100%;">';
            }
            ?>

        </div>

        <div class="col-md-6 col-sm-6">

            <div class="well">

                <h3><?php echo $row->trikot; ?> | <?php echo $row->firstName.' '.$row->lastName; ?></h3>

            </div>

            <hr>

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

    </div>

</div>