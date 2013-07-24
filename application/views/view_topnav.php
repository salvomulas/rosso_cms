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
                            <li><a href="<?php echo base_url(); ?>verein/clubhaus">Clubhaus</a></li>
                            <li><a href="#">Statuten</a></li>
                        </ul>
                        </ll>
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
                        </ll>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Interaktiv<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>site/verein">Fotogalerie</a></li>
                            <li><a href="#">G&auml;stebuch</a></li>
                        </ul>
                        </ll>


                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i> Salvatore Mulas <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">Benutzerverwaltung</li>
                            <li><a href="<?php echo base_url(); ?>admin/my_profile"><i class="icon-cog"></i> Mein Profil</a></li>
                            <li><a href="<?php echo base_url(); ?>admin/groups"><i class="icon-wrench"></i> Rechte und Gruppen</a></li>
                            <li><a href=""><i class="icon-inbox"></i> Postfach <span class="badge badge-important">6</span></a></li>
                            <li class="nav-header">Vereinsadministration</li>
                            <li><a href="<?php echo base_url(); ?>admin/edit_vorstand"><i class="icon-user"></i> Vorstandmitglieder</a></li>
                            <li><a href=""><i class="icon-star"></i> Sponsoren</a></li>
                            <li><a href=""><i class="icon-map-marker"></i> Clubhausverwaltung</a></li>
                            <li class="nav-header">Sportadministration</li>
                            <li><a href=""><i class="icon-tasks"></i> Spielerverwaltung</a></li>
                            <li><a href=""><i class="icon-th-large"></i> Mannschaftsverwaltung</a></li>
                            <li><a href=""><i class="icon-eye-open"></i> Schiedsrichterverwaltung</a></li>
                            <li class="nav-header">Inhaltsverwaltung</li>
                            <li><a href=""><i class="icon-file"></i> Matchberichte</a></li>
                            <li><a href=""><i class="icon-envelope"></i> Mitteilungen und News</a></li>
                            <li><a href=""><i class="icon-calendar"></i> Eventverwaltung</a></li>
                            <li><a href=""><i class="icon-bookmark"></i> Highlights</a></li>
                            <li class="divider"></li>
                            <li><a href=""><i class="icon-off"></i> Logout</a></li>
                        </ul>


                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-lock"></i> Login <strong class="caret"></strong></a>
                        <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                            <form method="post" action="login" accept-charset="UTF-8">
                                <input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
                                <input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
                                <input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
                                <label class="string optional" for="user_remember_me"> Eingeloggt bleiben</label>
                                <input class="btn btn-danger btn-block" type="submit" id="sign-in" value="Login">
                            </form>
                        </div>
                    </li>
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