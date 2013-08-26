<div class="container">
    <div class="row">
        <div class="span9">
            <h3>Vorstand</h3>
            <p>An der letzten Generalversammlung wurde folgender Vorstand gew&auml;hlt:</p>
            <hr>

            <?

            $counter = 1;

            foreach ($management->result() as $row) {

                if ($counter == 1 || is_int(($counter+2)/3)) {
                    echo '<div class="row-fluid">';
                }

                echo '<ul class="thumbnails">';
                echo '<li class="span3">';
                echo '<div class="thumbnail">';
                if ($row->picURL != NULL) {
                    echo '<img href="#'.$row->firstName.' data-toggle="modal" src="'.base_url().'assets/img/management'.$row->picURL.'" style="width: 300px; height: 200px;">';
                } else {
                    echo '<img href="#'.$row->firstName.' data-toggle="modal" src="'.base_url().'assets/img/dummy_person.jpg" style="width: 300px; height: 200px;">';
                }
                echo '<div class="caption">';
                echo '<h4><a href="#'.$row->firstName.'" data-toggle="modal">'.$row->firstName.' '.$row->lastName.'</a></h4>';
                echo '<p>'.$row->function.'</p>';
                echo '</div>';
                echo '</div>';
                echo '</li>';

                if (is_int($counter/4) || $counter == $management->num_rows()) {
                    echo '</ul>';
                    echo '</div>';
                }

                $counter++;

            }

            echo '<hr>';

            ?>

            <!-- BEGIN VORSTAND LISTE SPALTE -->
            <div class="row-fluid">
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <img href="#dario" data-toggle="modal" src="<? echo base_url(); ?>assets/img/dario.jpg" style="width: 300px; height: 200px;">
                            <div class="caption">
                                <h4><a href="#dario" data-toggle="modal">Dario Mulas</a></h4>
                                <p>Pr&auml;sident</p>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <img src="<? echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 300px; height: 200px;">
                            <div class="caption">
                                <h4>Paolo Mulas</h4>
                                <p>Vize Pr&auml;sident</p>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <img src="<? echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 300px; height: 200px;">
                            <div class="caption">
                                <h4>Luca Mulas</h4>
                                <p>Spiko Pr&auml;sident / Sportchef</p>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <img src="<? echo base_url(); ?>assets/img/salvo.jpg" style="width: 300px; height: 200px;">
                            <div class="caption">
                                <h4>Salvatore Mulas</h4>
                                <p>Marketing und Webdesign</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- BEGIN VORSTAND LISTE SPALTE -->
            <div class="row-fluid">
                <ul class="thumbnails">
                    <li class="span3">
                        <div class="thumbnail">
                            <img src="<? echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 300px; height: 200px;">
                            <div class="caption">
                                <h4>Claudia Mulas</h4>
                                <p>Finanzen</p>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <img src="<? echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 300px; height: 200px;">
                            <div class="caption">
                                <h4>Francesca De Nuccio</h4>
                                <p>Sekretariat</p>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <img src="<? echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 300px; height: 200px;">
                            <div class="caption">
                                <h4>Lorena Faga</h4>
                                <p>Sekretariat</p>
                            </div>
                        </div>
                    </li>
                    <li class="span3">
                        <div class="thumbnail">
                            <img src="<? echo base_url(); ?>assets/img/dummy_person.jpg" style="width: 300px; height: 200px;">
                            <div class="caption">
                                <h4>Giuseppe Roberti</h4>
                                <p>Materialchef</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>


        </div>
        <div class="span3">
            <div class="well">

                <h4>Verein</h4>
                <ul class="nav nav-list">
                    <li class="active"><a href="#">Vorstand</a></li>
                    <li><a href="#">Clubhaus</a></li>
                    <li><a href="#">Statuten</a></li>

                </ul>



            </div>

            <div class="well">
                <h4>N&auml;chstes Spiel</h4>
            </div>


        </div>

    </div>

</div>

<!-- Modal Windows -->

<!-- Dario Mulas -->
<div id="dario" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 id="myModalLabel">Dario Mulas</h3>
    </div>
    <div class="modal-body">
        <h4>Pr&auml;sident AC Rossoneri</h4>
        <table class="table table-condensed table-hover">
            <tbody>
            <tr>
                <td>Vorname</td>
                <td>Dario</td>
            </tr>
            <tr>
                <td>Name</td>
                <td>Mulas</td>
            </tr>
            <tr>
                <td>Geburtsdatum</td>
                <td>36. Juni 1989</td>
            </tr>
            <tr>
                <td>Telefonnummer</td>
                <td>+41 79 000 00 00</td>
            </tr>
            <tr>
                <td>eMail</td>
                <td><a href="mailto:info@dmhaustechnik.ch">info(at)dmhaustechnik.ch</a></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Schliessen</button>
    </div>
</div>
