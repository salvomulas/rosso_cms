<?php

function menuObject ($name, $url) {
    if ($url == uri_string()) {
        echo '<li class="active"><a href="'.base_url().$url.'">'.$name.'</a></li>';
    } else {
        echo '<li><a href="'.base_url().$url.'">'.$name.'</a></li>';
    }
}

?>

<header>

    <div class="container">
        <div class="row">
            <div class="span5">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="AC Rossoneri">
            </div>
            <div class="span7">
                <div class="navbar">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav navbar-static-top nav-pills pull-right">
                            <?php menuObject("Home",""); ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Aktuelles<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php menuObject("Newsarchiv","aktuelles"); ?>
                                    <li class="divider"></li>
                                    <li class="nav-header">Anl&auml;sse</li>
                                    <?php menuObject("Silvester 13/14","silvester"); ?>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Verein<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <?php menuObject("Vorstand","verein/vorstand"); ?>
                                    <?php menuObject("Statuten","verein/statuten"); ?>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Spielbetrieb<b class="caret"></b></a>
                                <ul class="dropdown-menu">

                                    <li class="nav-header">Aktive</li>
                                    <?php
                                    foreach ($teamsActive->result() as $row) {
                                        echo '<li><a href="'.base_url().'team/aktive/'.$row->id.'">'.$row->name.'</a></li>';
                                    }
                                    ?>
                                    <li class="divider"></li>
                                    <li class="nav-header">Kinderfussball</li>
                                    <?php

                                    foreach ($teamsKifu->result() as $row) {
                                        echo '<li><a href="'.base_url().'team/junioren/'.$row->id.'">'.$row->name.'</a></li>';
                                    }

                                    ?>

                                    <li class="divider"></li>
                                    <li class="nav-header">Diverses</li>
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
                                echo '<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> '.$user->firstName.' '.$user->lastName.' <b class="caret"></b></a>';
                                echo '<ul class="dropdown-menu">';
                                echo '<li class="nav-header">Benutzerverwaltung</li>';
                                echo '<li><a href="'.base_url().'admin/my_profile"><i class="icon-cog"></i> Mein Profil</a></li>';
                                echo '<li><a href="'.base_url().'admin/groups"><i class="icon-wrench"></i> Rechte und Gruppen</a></li>';
                                echo '<li><a href=""><i class="icon-inbox"></i> Postfach <span class="badge badge-important">6</span></a></li>';
                                echo '<li class="nav-header">Vereinsadministration</li>';
                                echo '<li><a href="'.base_url().'admin/edit_vorstand"><i class="icon-user"></i> Vorstandmitglieder</a></li>';
                                echo '<li><a href=""><i class="icon-star"></i> Sponsoren</a></li>';
                                echo '<li><a href=""><i class="icon-map-marker"></i> Clubhausverwaltung</a></li>';
                                echo '<li class="nav-header">Sportadministration</li>';
                                echo '<li><a href="'.base_url().'admin/edit_spieler"><i class="icon-tasks"></i> Spielerverwaltung</a></li>';
                                echo '<li><a href=""><i class="icon-th-large"></i> Mannschaftsverwaltung</a></li>';
                                echo '<li><a href=""><i class="icon-calendar"></i> Spielkalender</a></li>';
                                echo '<li><a href=""><i class="icon-list-alt"></i> Tabellenverwaltung</a></li>';
                                echo '<li><a href=""><i class="icon-eye-open"></i> Schiedsrichterverwaltung</a></li>';
                                echo '<li class="nav-header">Inhaltsverwaltung</li>';
                                echo '<li><a href="'.base_url().'admin/match/show"><i class="icon-file"></i> Matchberichte</a></li>';
                                echo '<li><a href=""><i class="icon-envelope"></i> Mitteilungen und News</a></li>';
                                echo '<li><a href=""><i class="icon-calendar"></i> Eventverwaltung</a></li>';
                                echo '<li><a href=""><i class="icon-bookmark"></i> Highlights</a></li>';
                                echo '<li class="divider"></li>';
                                echo '<li><a href="'.base_url().'site/logout"><i class="icon-off"></i> Logout</a></li>';
                                echo '</ul>';

                            } else {

                                echo '<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-lock"></i> Login <strong class="caret"></strong></a>';
                                echo '<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">';

                                echo form_open('site/login_validation');
                                echo form_hidden('form_name', 'form_login');
                                
                                // Display the dropdown login form again if this form's validation failed
                                if (validation_errors() && $this->input->post('form_name') === 'form_login') {
                                    echo '<script type="text/javascript">$("#login_dropdown").addClass("open");</script>';
                                    echo '<div class="alert alert-error">'.validation_errors().'</div>';
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
                    </div>
                </div>
            </div>
        </div>
</header>