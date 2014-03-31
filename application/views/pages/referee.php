<div class="navfix container">

    <h3>Schiedsrichter</h3>
    <hr>
    <div class="row">

        <div class="col-md-8 col-md-push-4">

            <p>Was w&auml;re der Fussball ohne einen Unparteiischen? Pures Chaos! Der Schiedsrichter ist f&uuml;r die Erhaltung des Fussballs genauso wichtig, wie die Spieler selbst - aus diesem Grund ist der AC Rossoneri bestrebt,
            ein gutes Schiri-Team zur Verf&uuml;gung zu haben und pflegt stets das Interesse, dieses Team zu erweitern.<br/><br/>
            Der AC Rossoneri ist stets auf der Suche nach neuen Schiedsrichtern, welche f&uuml;r unseren Verein in die Rolle des Unparteiischen schl&uuml;pfen m&ouml;chten. Gesucht sind motivierte Frauen und M&auml;nner,
            welche auf der Suche nach einer neuen Herausforderung sind – aber nat&uuml;rlich auch Leute mit Erfahrung.<br/><br/>
            Haben wir dein Interesse geweckt? Bitte kontaktiere unseren Sportchef Luca Mulas entweder per e-Mail (<a href="mailto:luca.mulas@acrossoneri.ch">luca.mulas@acrossoneri.ch</a>) oder direkt per Telefon unter der
            Handynummer +41 79 761 05 94. Wir freuen uns auf dich!<br/><br/></p>

        </div>

        <div class="col-md-4 col-md-pull-8">

            <h4>Aktuelle Schiedsrichter</h4>
            <hr>

                <?php

                if ($referee->num_rows > 0) {

                    echo '<div class="row">';

                    foreach ($referee->result() as $row) {

                        echo '<div class="col-md-12">';

                        echo '<div class="panel panel-success">';
                        echo '<div class="panel-body">';
                        echo '<div class="row">';
                        echo '<div class="col-md-4 col-sm-4 col-xs-3">';

                        if ($row->pictureURL != NULL) {
                            echo '<img class="img-rounded img-responsive" src="' . base_url() . 'assets/img/referee/' . $row->pictureURL . '">';
                        } else {
                            echo '<img class="img-rounded img-responsive" src="' . base_url() . 'assets/img/dummy_person.jpg">';
                        }

                        echo '</div>';

                        echo '<div class="col-md-8 col-sm-8 col-xs-9">';
                        echo '<h5 class="trikot">Schiedsrichter</h5>';
                        echo '<h4>' . $row->firstName . ' ' . $row->lastName . '</h4>';

                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';

                    }

                    echo '</div>';

                }

                ?>

        </div>

    </div>

</div>