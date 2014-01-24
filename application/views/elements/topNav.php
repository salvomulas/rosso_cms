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
?>

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
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php menuObject("Home", ""); ?>
                <li><a data-toggle="collapse" data-target="#secondary-navbar">MenuTest</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Aktuelles<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php menuObject("Newsarchiv", "aktuelles"); ?>
                        <li class="divider"></li>
                        <li class="nav-header disabled"><a>Anl&auml;sse</a></li>
                        <li class="disabled"><a href="">Keine Events</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Verein<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php menuObject("Vorstand", "verein/vorstand"); ?>
                        <?php menuObject("Statuten", "verein/statuten"); ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Spielbetrieb<b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li class="nav-header disabled"><a>Aktive</a></li>
                        <?php
                        foreach ($teamsActive->result() as $row) {
                            echo '<li><a href="' . base_url() . 'team/aktive/' . $row->id . '">' . $row->name . '</a></li>';
                        }
                        ?>
                        <li class="divider"></li>
                        <li class="nav-header disabled"><a>Kinderfussball</a></li>
                        <?php
                        foreach ($teamsKifu->result() as $row) {
                            echo '<li><a href="' . base_url() . 'team/junioren/' . $row->id . '">' . $row->name . '</a></li>';
                        }
                        ?>

                        <li class="divider"></li>
                        <li class="nav-header disabled"><a>Diverses</a></li>
                        <!--<li><a href="">Schiedsrichter</a></li>-->
                        <li><a href="<?php echo base_url(); ?>sportanlage">Sportanlage</a></li>

                    </ul>
                </li>
                <!--
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Interaktiv<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url(); ?>site/verein">Fotogalerie</a></li>
                        <li><a href="<?php echo base_url(); ?>guestbook">G&auml;stebuch</a></li>
                    </ul>
                </li>
                -->
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
    echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">';

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
        'style' => 'margin-bottom: 15px;',
    );

    $password = array(
        'name' => 'password',
        'id' => 'password',
        'placeholder' => 'Password',
        'style' => 'margin-bottom: 15px;',
    );

    $submit = array(
        'value' => 'Login',
        'id' => 'sign_in',
        'class' => 'btn btn-danger btn-block',
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
    
    <div class="nav-secondary collapse" id="secondary-navbar">
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
                            <a href="#" class="list-group-item">1. Mannschaft</a>
                            <a href="#" class="list-group-item">2. Mannschaft</a>
                            <a href="#" class="list-group-item">3. Mannschaft</a>
                            <a href="#" class="list-group-item">Senioren</a>
                            <a href="#" class="list-group-item">Frauen</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h5>Kinderfussball</h5>
                        <div class="list-group">
                            <a href="#" class="list-group-item">Junioren Fa</a>
                            <a href="#" class="list-group-item">Junioren Fb</a>
                            <a href="#" class="list-group-item">Junioren G</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h4>Diverses</h4>
                    <hr>
                    <div class="col-md-12">
                        <h5>Diverses</h5>
                        <div class="list-group">
                            <a href="#" class="list-group-item">Sportpl&auml;tze</a>
                            <a href="#" class="list-group-item">Schiedsrichter</a>
                            <a href="#" class="list-group-item">Resultate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
</header>