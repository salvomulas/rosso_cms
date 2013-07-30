<?php

function menuObject ($name, $url) {
    if ($url == uri_string()) {
        echo '<li class="active"><a href="'.base_url().$url.'">'.$name.'</a></li>';
    } else {
        echo '<li><a href="'.base_url().$url.'">'.$name.'</a></li>';
    }
}

?>

<div class="navbar navbar-static-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="masthead">
                <ul class="nav nav-pills pull-right">
                    <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>site/aktuelles">Aktuelles</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Verein<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>verein/vorstand">Vorstand</a></li>
                            <?php menuObject("Test","verein/vorstand"); ?>
                            <li><a href="<?php echo base_url(); ?>verein/clubhaus">Clubhaus</a></li>
                            <li><a href="#">Statuten</a></li>
                        </ul>
                        </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Spielbetrieb<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">Mannschaften</li>
                            <li><a href="#">Erste Mannschaft</a></li>
                            <li><a href="#">Zweite Mannschaft</a></li>
                            <li><a href="#">Senioren</a></li>
                            <li><a href="#">Frauen</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Kinderfussball</li>
                            <li><a href="#">Junioren G</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Diverses</li>
                            <li><a href="#">Schiedsrichter</a></li>
                            <li><a href="#">Sportanlagen</a></li>
                        </ul>
                        </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Interaktiv<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>site/verein">Fotogalerie</a></li>
                            <li><a href="#">G&auml;stebuch</a></li>
                        </ul>
                        </li>


                        <?php

                        if ($this->session->userdata('is_logged_in')) {

                            echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Salvatore Mulas <b class="caret"></b></a>';
                            echo '<ul class="dropdown-menu">';
                            echo '<li class="nav-header">Benutzerverwaltung</li>';
                            echo '<li><a href="<?php echo base_url(); ?>admin/my_profile"><i class="icon-cog"></i> Mein Profil</a></li>';
                            echo '<li><a href="<?php echo base_url(); ?>admin/groups"><i class="icon-wrench"></i> Rechte und Gruppen</a></li>';
                            echo '<li><a href=""><i class="icon-inbox"></i> Postfach <span class="badge badge-important">6</span></a></li>';
                            echo '<li class="nav-header">Vereinsadministration</li>';
                            echo '<li><a href="<?php echo base_url(); ?>admin/edit_vorstand"><i class="icon-user"></i> Vorstandmitglieder</a></li>';
                            echo '<li><a href=""><i class="icon-star"></i> Sponsoren</a></li>';
                            echo '<li><a href=""><i class="icon-map-marker"></i> Clubhausverwaltung</a></li>';
                            echo '<li class="nav-header">Sportadministration</li>';
                            echo '<li><a href=""><i class="icon-tasks"></i> Spielerverwaltung</a></li>';
                            echo '<li><a href=""><i class="icon-th-large"></i> Mannschaftsverwaltung</a></li>';
                            echo '<li><a href=""><i class="icon-eye-open"></i> Schiedsrichterverwaltung</a></li>';
                            echo '<li class="nav-header">Inhaltsverwaltung</li>';
                            echo '<li><a href=""><i class="icon-file"></i> Matchberichte</a></li>';
                            echo '<li><a href=""><i class="icon-envelope"></i> Mitteilungen und News</a></li>';
                            echo '<li><a href=""><i class="icon-calendar"></i> Eventverwaltung</a></li>';
                            echo '<li><a href=""><i class="icon-bookmark"></i> Highlights</a></li>';
                            echo '<li class="divider"></li>';
                            echo '<li><a href=""><i class="icon-off"></i> Logout</a></li>';
                            echo '</ul>';

                        } else {

                            echo '<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-lock"></i> Login <strong class="caret"></strong></a>';
                            echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">';
                            echo '<form method="post" action="login" accept-charset="UTF-8">';

                            echo form_open('admin/login_validation');

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

                            echo '</form>';
                            echo '</div>';
                            echo '</li>';

                        }

                        ?>

                </ul>
                </ul>
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="AC Rossoneri">
                <!--
                      <h3 class="muted">AC Rossoneri</h3>
                -->
            </div>

        </div>
    </div>
</div>