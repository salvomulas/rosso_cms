<?php

function menuObject($name, $url, $active = true) {
    if ($url == uri_string()) {
        echo '<li class="active"><a href="' . base_url() . $url . '">' . $name . '</a></li>';
    } else {
        if ($active == true) {
            echo '<li><a href="' . base_url() . $url . '">' . $name . '</a></li>';
        } else {
            echo '<li class="disabled"><a href="' . base_url() . $url . '">' . $name . '</a></li>';
        }
    }
}

function menuList($name, $url, $active = true) {
    if ($url == uri_string()) {
        echo '<a href="' . base_url() . $url . '" class="list-group-item active">' . $name . '</a>';
    } else {
        if ($active == true) {
            echo '<a href="' . base_url() . $url . '" class="list-group-item">' . $name . '</a>';
        } else {
            echo '<a href="' . base_url() . $url . '" class="list-group-item">' . $name . '</a>';
        }
    }
}

?>

<script>

    $(function () {
        var toggles    = $('.navbar-nav').find('a');

        $(document).click(function (e) {
            if (!$(e.target).is('.resp a') && !$(e.target).is('.nav-secondary') && $('.nav-secondary').has(e.target).length === 0) {
                $.each(toggles, function (index, value) {
                    var self = $(value);
                    var target = $(this).data('target');
                    if (self.hasClass('enabled')) {
                        $(target).slideUp();
                        self.removeClass('enabled');
                    }
                });
            }
        });

        toggles.click(function (e) {
            //e.preventDefault();

            var toggle = $(this);
            var target = $(this).data('target');
            $.each(toggles, function (index, value) {
                var self = $(value);
                if (self.is(toggle) && !self.hasClass('enabled')) {
                    $(target).slideDown();
                    self.addClass('enabled');
                } else {
                    var container = self.data('target');
                    $(container).slideUp();
                    self.removeClass('enabled');
                }
            });
        });
    });
</script>

<header>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="<?php echo base_url(); ?>assets/img/wappen.png" alt="AC Rossoneri" style="width: 150px; height: 150px;">
            </div>
        </div>
    </div>


    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand visible-xs hidden-desktop" href="#">Navigation</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav resp">
                <?php menuObject("Home", ""); ?>
                <li><a data-target="#aktuelles-navbar">Aktuelles <b class="caret"></b></a></li>
                <li><a data-target="#verein-navbar">Verein <b class="caret"></b></a></li>
                <li><a data-target="#spielbetrieb-navbar">Spielbetrieb <b class="caret"></b></a></li>
                <li><a href="">Login</a></li>
            </ul>

        </div>

        <div class="hidden-sm hidden-md hidden-lg">
            <div class="collapse navbar-collapse" id="primary-navbar">
                <div class="row">
                    <div class="tabbable">
                        <div class="col-xs-4">
                            <ul class="nav navbar-nav text-left">
                                <?php menuObject("Home", ""); ?>
                                <li><a href="#aktuelles" data-toggle="tab">Aktuelles <b class="caret"></b></a></li>
                                <li><a href="#verein" data-toggle="tab">Verein <b class="caret"></b></a></li>
                                <li><a href="#spielbetrieb" data-toggle="tab">Spielbetrieb <b class="caret"></b></a></li>
                                <li><a href="">Login</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-8 navbar-res">
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">

                                </div>
                                <div class="tab-pane" id="aktuelles">
                                    <ul class="nav navbar-nav text-left">
                                        <?php menuObject ("Newsarchiv","aktuelles"); ?>
                                        <?php menuObject ("Bildergalerie","aktuelles/galerie"); ?>
                                        <hr>
                                        <?php menuObject ("Sommerturnier 2014","aktuelles/sommerturnier"); ?>
                                        <?php menuObject ("Kalender","aktuelles/kalender"); ?>

                                    </ul>
                                </div>
                                <div class="tab-pane" id="verein">
                                    <ul class="nav navbar-nav text-left">
                                        <?php menuObject ("Vorstand","verein/vorstand"); ?>
                                        <?php menuObject ("Organigramm","verein/organigramm"); ?>
                                        <?php menuObject ("Statuten","verein/statuten"); ?>
                                        <?php menuObject ("Leitbild","verein/leitbild"); ?>
                                        <hr>
                                        <?php menuObject ("Sponsoren","verein/sponsoren"); ?>
                                        <?php /*menuObject ("Sponsoringkonzept","verein/sponsoringkonzept"); */?>
                                        <?php menuObject ("Passivmitgliedschaft","verein/passivmitglied"); ?>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="spielbetrieb">
                                    <ul class="nav navbar-nav text-left">
                                        <?php
                                        foreach ($teamsActive->result() as $row) {
                                            menuObject($row->name, 'team/aktive/'.$row->id);
                                            //echo '<a href="' . base_url() . 'team/aktive/' . $row->id . '" class="list-group-item">' . $row->name . '</a>';
                                        }
                                        echo '<hr>';
                                        foreach ($teamsKifu->result() as $row) {
                                            menuObject($row->name, 'team/junioren/'.$row->id);
                                            //echo '<a href="' . base_url() . 'team/aktive/' . $row->id . '" class="list-group-item">' . $row->name . '</a>';
                                        }
                                        echo '<hr>';
                                        menuObject ("Sportanlage","sportanlage");
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.navbar-collapse -->
    </nav>



    <!-- SPIELBETRIEB NAVIGATION -->
    <div class="nav-secondary" id="spielbetrieb-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 hidden-sm hidden-xs">
                    <h3>Spielbetrieb</h3>
                    <p>S&auml;mtliche Informationen zum Spielbetrieb des AC Rossoneri</p>
                </div>
                <div class="col-md-6 col-sm-8">
                    <h4>Mannschaften</h4>
                    <hr>
                    <div class="col-md-6 col-sm-6">
                        <h5>Aktive</h5>
                        <div class="list-group">
                            <?php
                            foreach ($teamsActive->result() as $row) {
                                menuList($row->name, 'team/aktive/'.$row->id);
                                //echo '<a href="' . base_url() . 'team/aktive/' . $row->id . '" class="list-group-item">' . $row->name . '</a>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5>Kinderfussball</h5>
                        <div class="list-group">
                            <?php
                            foreach ($teamsKifu->result() as $row) {
                                menuList($row->name, 'team/junioren/'.$row->id);
                                //echo '<a href="' . base_url() . 'team/aktive/' . $row->id . '" class="list-group-item">' . $row->name . '</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <h4>Diverses</h4>
                    <hr>
                    <div class="col-md-12 col-sm-12">
                        <h5>Diverses</h5>
                        <div class="list-group">
                            <?php menuList ("Sportanlage","sportanlage"); ?>
                            <a href="#" class="list-group-item">Schiedsrichter</a>
                            <a href="#" class="list-group-item">Resultate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ENDE SUBNAVIGATION -->
    
    <!-- VEREIN NAVIGATION -->
    <div class="nav-secondary" id="verein-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 hidden-sm hidden-xs">
                    <h3>Verein</h3>
                    <p>Alles &uuml;ber den AC Rossoneri 1962</p>
                </div>
                <div class="col-md-6 col-sm-8">
                    <h4>Allgemeines</h4>
                    <hr>
                    <div class="col-md-6 col-sm-6">
                        <h5>Verwaltung</h5>
                        <div class="list-group">
                            <?php menuList ("Vorstand","verein/vorstand"); ?>
                            <?php menuList ("Organigramm","verein/organigramm"); ?>
                            <?php menuList ("Statuten","verein/statuten"); ?>
                            <?php menuList ("Leitbild","verein/leitbild"); ?>
                            <?php /*menuList ("Geschichte","verein/geschichte"); */?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5>Supporter</h5>
                        <div class="list-group">
                            <?php menuList ("Sponsoren","verein/sponsoren"); ?>
                            <?php /*menuList ("Sponsoringkonzept","verein/sponsoringkonzept"); */?>
                            <?php menuList ("Passivmitgliedschaft","verein/passivmitglied"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <h4>Diverses</h4>
                    <hr>
                    <div class="col-md-12 col-sm-12">
                        <h5>Diverses</h5>
                        <div class="list-group">
                            <a href="#" class="list-group-item">Webmaster</a>
                            <a href="#" class="list-group-item">Aktuelle OKs</a>
                            <a href="#" class="list-group-item">Social Media</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ENDE SUBNAVIGATION -->
    
    <!-- AKTUELLES NAVIGATION -->
    <div class="nav-secondary" id="aktuelles-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 hidden-sm hidden-xs">
                    <h3>Aktuelles</h3>
                    <p>Aktuelle Mitteilungen, News und Matchberichte</p>
                </div>
                <div class="col-md-6 col-sm-8">
                    <h4>News und Mitteilungen</h4>
                    <hr>
                    <div class="col-md-6 col-sm-6">
                        <h5>Aktuelles</h5>
                        <div class="list-group">
                            <?php menuList ("Newsarchiv","aktuelles"); ?>
                            <?php menuList ("Bildergalerie","aktuelles/galerie"); ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h5>Events</h5>
                        <div class="list-group">
                            <?php menuList ("Sommerturnier 2014","aktuelles/sommerturnier"); ?>
                            <?php menuList ("Kalender","aktuelles/kalender"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <h4>Externes</h4>
                    <hr>
                    <div class="col-md-12 col-sm-12">
                        <h5>Links</h5>
                        <div class="list-group">
                            <a href="#" class="list-group-item">Fussballverband NWS</a>
                            <a href="#" class="list-group-item">ACR Facebook Timeline</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ENDE SUBNAVIGATION -->

</div>
</header>