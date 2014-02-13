<?php

function shortenString($string, $width) {
    if (strlen($string) > $width) {
        $string = wordwrap($string, $width);
        $i = strpos($string, "\n");
        if ($i) {
            $string = substr($string, 0, $i);
        }
    }
    return $string;
}

?>

<script>

    $(function (){
        $("#1").popover().on('click', function(e) {e.preventDefault(); return true;});
        $("#2").popover().on('click', function(e) {e.preventDefault(); return true;});
        $("#3").popover().on('click', function(e) {e.preventDefault(); return true;});
        $("#4").popover().on('click', function(e) {e.preventDefault(); return true;});
        $("#5").popover().on('click', function(e) {e.preventDefault(); return true;});
        $("#fb").tooltip();
        $("#twitter").tooltip();
        $("#gplus").tooltip();
        $("#youtube").tooltip();
        $("#rss").tooltip();
    });

</script>

<div class="container navfix">

    <div class="row">
        <div class="col-md-8">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                    
                    for ($i = 0; $i <= ($highlights->num_rows - 1); $i++) {
                        
                        if ($i == 0) {
                            echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"></li>';
                        } else {
                            echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
                        }
                        
                    }
 
                    ?>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                    <?php
                    
                    $counter = 0;
                    
                    foreach ($highlights->result() as $row) {
                        
                        if ($counter == 0) {
                            echo '<div class="active item">';
                        } else {
                            echo '<div class="item">';
                        }
                        echo '<img class="carousel" src="'.base_url().'assets/img/articles/highlights/'.$row->pictureURL.'">';
                        echo '<div class="carousel-caption">';
                        echo '<h4><a href="'.base_url().'aktuelles/article/'.$row->id.'">'.$row->title.'</a></h4>';
                        echo '<p>'.shortenString($row->article,200).'</p>';
                        echo '</div>';
                        echo '</div>';
                        $counter++;
                        
                    }           
                    ?>
                    
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>

            <hr>

            <?php

            foreach ($blog->result() as $row) {

                switch ($row->category) {
                    case 1: $link = base_url() . 'aktuelles/article/' . $row->id;
                        $cat = "News";
                        break;
                    case 2: $link = base_url() . 'aktuelles/match/' . $row->id;
                        $cat = "Matchbericht";
                        break;
                    default: $link = NULL;
                        $cat = NULL;
                }

                // Print article body
                echo '<div class="row">';
                echo '<div class="col-md-3 col-sm-3 col-xs-3">';
                echo '<a href="' . $link . '" class="thumbnail">';
                if ($row->pictureURL) {
                    echo '<img src="'.base_url().'assets/img/articles/'.$row->pictureURL.'" alt="">';
                } else {
                    echo '<img src="http://placehold.it/260x180" alt="">';
                }
                echo '</a>';
                echo '</div>';

                echo '<div class="col-md-9 col-sm-9 col-xs-9">';
                echo '<h4><strong><a href="' . $link . '">' . $row->title . '</a></strong></h4>';
                
                echo '<p>';
                echo shortenString($row->article, 300);
                echo '</p>';
                
                echo '<div class="well well-sm">';
                echo '<p class="small" style="margin-bottom: 0px;">';
                echo '<span class="glyphicon glyphicon-user"></span> '.$row->firstName.' '.$row->lastName.' | ';
                echo '<span class="glyphicon glyphicon-calendar"></span> '.$row->shortdate.' | ';
                echo '<span class="glyphicon glyphicon-tag"></span> '.$cat .'</p>';
                echo '</div>';
                
                echo '</div>';
                
                echo '</div>';

                echo '<hr>';
            }
            ?>
            
            <div class="well well-sm text-right">
                <a href="<?php echo base_url(); ?>aktuelles" role="button" class="btn btn-default btn-xs">Zum Newsarchiv</a>
            </div>

        </div>
        <div class="col-md-4">

            <div class="well well-sm text-center hidden-sm hidden-xs">
                <a href="https://www.facebook.com/pages/AC-Rossoneri/238296652947602" target="_blank"><img class="social" src="<?php echo base_url(); ?>assets/img/icons/facebook.png" id="fb" data-toggle="tooltip" data-placement="top" title="Folge uns auf Facebook!"></a>
                <a href="https://twitter.com/ACRossoneri" target="_blank"><img class="social" src="<?php echo base_url(); ?>assets/img/icons/twitter.png" id="twitter" data-toggle="tooltip" data-placement="top" title="Werde ein Follower auf Twitter!"></a>
                <a href="https://plus.google.com/103733298786436902225" rel="publisher" target="_blank"><img class="social" src="<?php echo base_url(); ?>assets/img/icons/gplus.png" id="gplus" data-toggle="tooltip" data-placement="top" title="Folge uns auf Google+"></a>
                <a href=""><img class="social" src="<?php echo base_url(); ?>assets/img/icons/youtube.png" id="youtube" data-toggle="tooltip" data-placement="top" title="Abonniere unseren YouTube Kanal!"></a>
                <a href=""><img class="social" src="<?php echo base_url(); ?>assets/img/icons/rss.png" id="rss" data-toggle="tooltip" data-placement="top" title="Abonniere unseren RSS Feed"></a>

            </div>

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">Tabelle</h3>
                </div>

                    <div class="panel-body">

                    <div class="tabbable">

                        <div class="text-center">
                            <ul class="pagination">
                                <li class="active"><a href="#tab1" data-toggle="tab">4. Liga</a></li>
                                <li><a href="#tab2" data-toggle="tab">5. Liga (a)</a></li>
                                <li><a href="#tab3" data-toggle="tab">5. Liga (b)</a></li>
                                <li><a href="#tab4" data-toggle="tab">Senioren</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">

                            <?php
                            $data['teamNumber'] = 1;
                            $data['rankTables'] = $rankTables;
                            $data['teamScores'] = $teamScores;
                            $this->load->view('elements/rankingTable', $data);
                            ?>

                            </div>
                            <div class="tab-pane" id="tab2">

                            <?php
                            $data['teamNumber'] = 2;
                            $data['rankTables'] = $rankTables;
                            $data['teamScores'] = $teamScores;
                            $this->load->view('elements/rankingTable', $data);
                            ?>

                            </div>
                            <div class="tab-pane" id="tab3">

                            <?php
                            $data['teamNumber'] = 3;
                            $data['rankTables'] = $rankTables;
                            $data['teamScores'] = $teamScores;
                            $this->load->view('elements/rankingTable', $data);
                            ?>

                            </div>
                            <div class="tab-pane" id="tab4">

                            <?php
                            $data['teamNumber'] = 10;
                            $data['rankTables'] = $rankTables;
                            $data['teamScores'] = $teamScores;
                            $this->load->view('elements/rankingTable', $data);
                            ?>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">N&auml;chstes Spiel der ersten Mannschaft</h3>
                </div>

                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <img src="<?php echo base_url(); ?>assets/img/wappen.png" style="width: 76px;">
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <?php
                        if ($nextMatch->num_rows > 0) {
                            foreach ($nextMatch->result() as $row) {

                                switch ($row->teamID) {
                                    case 1:
                                }

                                echo '<h5>' . $row->gameType .'</h5>';
                                echo '<p><strong>vs </strong>' . $row->opponent . '</p>';
                                echo '<p>' . $row->location . '</p>';
                                echo '<p>' . $row->complex . '</p>';
                                echo '<p>' . $row->date . ' um ' . $row->time . ' Uhr</p>';
                            }
                        } else {
                            echo '<p>Es sind noch keine Spiele angesetzt!</p>';
                        }
                        ?>
                        </div>
                        <hr>
                        <p></p>
                    </div>
                    
                    </div>

            </div>

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">N&auml;chste Spiele</h3>
                </div>

                <div class="panel-body">

                <?php

                if ($nextMatches) {

                    echo '<table class="table table-hover table-condensed">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>Team</th>';
                    echo '<th>Gegner</th>';
                    echo '<th>Datum</th>';
                    echo '<th>Zeit</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';

                    $jsObject = 1;

                    foreach ($nextMatches->result() as $row) {

                        switch ($row->teamID) {

                            case 1: $team = "Erste";
                            break;
                            case 2: $team = "Zweite";
                            break;
                            case 3: $team = "Dritte";
                            break;
                            case 10: $team = "Senioren";
                            break;
                            case 15: $team = "Frauen";
                            break;
                            default: $team = NULL;
                            break;

                        }

                        if ($row->isHome == 1) {
                            $gameTitle = "AC Rossoneri - ".$row->opponent;
                        } else {
                            $gameTitle = $row->opponent." - AC Rossoneri";
                        }

                        $location = $row->time.' Uhr: '.$row->location.' | '.$row->plz;

                        echo '<tr>';
                        echo '<td>'.$team.'</td>';
                        echo '<td>'.$row->opponent.'</td>';
                        echo '<td>'.$row->date.'</td>';
                        echo '<td><button type="button" href="" id="'.$jsObject.'" rel="popover" class="btn btn-primary btn-xs" data-placement="top" data-toggle="popover" title="" data-content="'.$location.'" data-original-title="'.$gameTitle.'"><span class="glyphicon glyphicon glyphicon-info-sign"></span></button></td>';
                        echo '</tr>';

                        $jsObject++;

                    }

                    echo '</tbody>';
                    echo '</table>';

                } else {

                    echo "Keine Spiele angesetzt";

                }

                ?>

            </div>
        </div>

        </div>

    </div>

    <hr>

    <div class="row">

        <div class="col-md-4">
            
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">Newsarchiv</h3>
                </div>

                <div class="panel-body">

                    <?php
                    if ($newsArchive) {

                        echo '<table class="table table-condensed table-hover">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>Datum</th>';
                        echo '<th>Titel</th>';
                        echo '<th></th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';

                        foreach ($newsArchive->result() as $row) {

                            echo '<tr>';
                            echo '<td>' . $row->fulldate . '</td>';
                            echo '<td>' . $row->title . '</td>';
                            echo '<td><a href="' . base_url() . 'aktuelles/article/' . $row->id . '"><span class="glyphicon glyphicon-chevron-right"></span></a></td>';
                            echo '</tr>';
                        }

                        echo '</tbody>';
                        echo '</table>';
                    } else {

                        echo '<p>Es wurden noch keine News verfasst';
                    }
                    ?>
                    
                </div>

            </div>
        </div>

        <div class="col-md-4">
            
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">Matchberichte Archiv</h3>
                </div>

                <div class="panel-body">

                    <?php
                    if ($matchReport) {

                        echo '<table class="table table-condensed table-hover">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>Datum</th>';
                        echo '<th>Titel</th>';
                        echo '<th></th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';

                        foreach ($matchReport->result() as $row) {

                            echo '<tr>';
                            echo '<td>' . $row->fulldate . '</td>';
                            echo '<td>' . $row->title . '</td>';
                            echo '<td><a href="' . base_url() . 'aktuelles/match/' . $row->id . '"><span class="glyphicon glyphicon-chevron-right"></span></a></td>';
                            echo '</tr>';
                        }

                        echo '</tbody>';
                        echo '</table>';
                    } else {

                        echo '<p>Es wurden noch keine Matchberichte verfasst';
                    }
                    ?>
                    
                </div>

            </div>
        </div>

        <div class="col-md-4">
            
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">Letzte Spiele</h3>
                </div>

                <div class="panel-body">

                    <?php

                    if ($lastMatches) {

                        echo '<table class="table table-condensed table-hover">';

                        foreach ($lastMatches->result() as $row) {

                            $team = substr($row->name,0,4);

                            echo '<tr>';
                            if ($row->isHome == 1) {
                                echo '<td><strong>ACR ('.$team.'.)</strong></td>';
                                echo '<td class="text-center">'.$row->pointsHome.':'.$row->pointsAway.'</td>';
                                echo '<td>'.$row->opponent.'</td>';
                            } else {
                                echo '<td>'.$row->opponent.'</td>';
                                echo '<td class="text-center">'.$row->pointsHome.':'.$row->pointsAway.'</td>';
                                echo '<td><strong>ACR ('.$team.'.)</strong></td>';
                            }
                            echo '</tr>';

                        }


                        echo '</table>';

                    } else {

                        echo '<p>Noch keine Spiele getätigt!';
                    }

                    ?>
                    
                </div>

            </div>
        </div>

    </div>

</div>