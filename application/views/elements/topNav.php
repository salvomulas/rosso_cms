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
            if (!$(e.target).is('.navbar-nav a') && !$(e.target).is('.nav-secondary') && $('.nav-secondary').has(e.target).length === 0) {
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
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="primary-navbar">
            <ul class="nav navbar-nav">
                <?php menuObject("Home", ""); ?>
                <li><a data-target="#aktuelles-navbar">Aktuelles <b class="caret"></b></a></li>
                <li><a data-target="#verein-navbar">Verein <b class="caret"></b></a></li>
                <li><a data-target="#spielbetrieb-navbar">Spielbetrieb <b class="caret"></b></a></li>

                <?php
                if ($this->session->userdata('is_logged_in')) {
                    $user = $user->row();
                    echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> ' . $user->firstName . ' ' . $user->lastName . ' <b class="caret"></b></a>';
                    echo '<ul class="dropdown-menu">';
                    echo '<li class="nav-header">Benutzerverwaltung</li>';
                    echo '<li><a href="' . base_url() . 'admin/my_profile"><i class="icon-cog"></i> Mein Profil</a></li>';
                    echo '<li><a href="' . base_url() . 'admin/groups"><i class="icon-wrench"></i> Rechte und Gruppen</a></li>';
                    echo '<li><a href=""><i class="icon-inbox"></i> Postfach <span class="badge badge-important">6</span></a></li>';
                    echo '<li class="nav-header">Vereinsadministration</li>';
                    echo '<li><a href="' . base_url() . 'admin/edit_vorstand"><i class="icon-user"></i> Vorstandmitglieder</a></li>';
                    echo '<li><a href=""><i class="icon-star"></i> Sponsoren</a></li>';
                    echo '<li><a href=""><i class="icon-map-marker"></i> Clubhausverwaltung</a></li>';
                    echo '<li class="nav-header">Sportadministration</li>';
                    echo '<li><a href="' . base_url() . 'admin/edit_spieler"><i class="icon-tasks"></i> Spielerverwaltung</a></li>';
                    echo '<li><a href=""><i class="icon-th-large"></i> Mannschaftsverwaltung</a></li>';
                    echo '<li><a href=""><i class="icon-calendar"></i> Spielkalender</a></li>';
                    echo '<li><a href=""><i class="icon-list-alt"></i> Tabellenverwaltung</a></li>';
                    echo '<li><a href=""><i class="icon-eye-open"></i> Schiedsrichterverwaltung</a></li>';
                    echo '<li class="nav-header">Inhaltsverwaltung</li>';
                    echo '<li><a href="' . base_url() . 'admin/match/show"><i class="icon-file"></i> Matchberichte</a></li>';
                    echo '<li><a href=""><i class="icon-envelope"></i> Mitteilungen und News</a></li>';
                    echo '<li><a href=""><i class="icon-calendar"></i> Eventverwaltung</a></li>';
                    echo '<li><a href=""><i class="icon-bookmark"></i> Highlights</a></li>';
                    echo '<li class="divider"></li>';
                    echo '<li><a href="' . base_url() . 'site/logout"><i class="icon-off"></i> Logout</a></li>';
                    echo '</ul>';
                } else {

                    echo '<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-lock"></i> Login <strong class="caret"></strong></a>';
                    echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px; margin-bottom: 15px;">';

                    echo form_open('site/login_validation');
                    echo form_hidden('form_name', 'form_login');

                    // Display the dropdown login form again if this form's validation failed
                    if (validation_errors() && $this->input->post('form_name') === 'form_login') {
                        echo '<script type="text/javascript">$("#login_dropdown").addClass("open");</script>';
                        echo '<div class="alert alert-error">' . validation_errors() . '</div>';
                    }

                    $username = array(
                        'name' => 'username',
                        'id' => 'username',
                        'placeholder' => 'Username',
                        'class' => 'form-control',
                        'style' => 'margin-bottom: 15px;',
                    );

                    $password = array(
                        'name' => 'password',
                        'id' => 'password',
                        'placeholder' => 'Password',
                        'class' => 'form-control',
                        'style' => 'margin-bottom: 15px;',
                    );

                    $submit = array(
                        'value' => 'Login',
                        'id' => 'sign_in',
                        'class' => 'btn btn-primary',
                    );

                    if (validation_errors()) {
                        echo '<div class="alert alert-error">' . validation_errors() . '</div>';
                    }

                    echo form_input($username);
                    echo form_password($password);
                    echo form_submit($submit);

                    echo form_close();

                    echo '</div>';
                    echo '</li>';
                }
                ?>
            </ul>
            <!-- /.navbar-collapse -->
    </nav>

    <!-- SPIELBETRIEB NAVIGATION -->
    <div class="nav-secondary" id="spielbetrieb-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Spielbetrieb</h3>
                    <p>S&auml;mtliche Informationen zum Spielbetrieb des AC Rossoneri</p>
                </div>
                <div class="col-md-6">
                    <h4>Mannschaften</h4>
                    <hr>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                <div class="col-md-3">
                    <h4>Diverses</h4>
                    <hr>
                    <div class="col-md-12">
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
                <div class="col-md-3">
                    <h3>Verein</h3>
                    <p>Alles &uuml;ber den AC Rossoneri 1962</p>
                </div>
                <div class="col-md-6">
                    <h4>Allgemeines</h4>
                    <hr>
                    <div class="col-md-6">
                        <h5>Verwaltung</h5>
                        <div class="list-group">
                            <?php menuList ("Vorstand","verein/vorstand"); ?>
                            <?php menuList ("Organigramm","verein/organigramm"); ?>
                            <?php menuList ("Statuten","verein/statuten"); ?>
                            <?php menuList ("Leitbild","verein/leitbild"); ?>
                            <?php menuList ("Geschichte","verein/geschichte"); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Supporter</h5>
                        <div class="list-group">
                            <?php menuList ("Sponsoren","verein/sponsoren"); ?>
                            <a href="#" class="list-group-item">Sponsoringkonzept</a>
                            <a href="#" class="list-group-item">Passivmitgliedschaft</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Diverses</h4>
                    <hr>
                    <div class="col-md-12">
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
                <div class="col-md-3">
                    <h3>Aktuelles</h3>
                    <p>Aktuelle Mitteilungen, News und Matchberichte</p>
                </div>
                <div class="col-md-6">
                    <h4>News und Mitteilungen</h4>
                    <hr>
                    <div class="col-md-6">
                        <h5>Aktuelles</h5>
                        <div class="list-group">
                            <?php menuList ("Newsarchiv","aktuelles"); ?>
                            <a href="#" class="list-group-item">Bildergalerie</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Events</h5>
                        <div class="list-group">
                            <?php menuList ("Sommerturnier 2014","aktuelles/sommerturnier"); ?>
                            <a href="#" class="list-group-item">Anstehende Events</a>
                            <?php menuList ("Kalender","aktuelles/kalender"); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Externes</h4>
                    <hr>
                    <div class="col-md-12">
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