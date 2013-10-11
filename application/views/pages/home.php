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
    });
</script>

<div class="container">

    <div class="row">
        <div class="span8">

            <div id="myCarousel" class="carousel slide">
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
                        echo '<img src="'.base_url().'assets/img/articles/highlights/'.$row->pictureURL.'">';
                        echo '<div class="carousel-caption">';
                        echo '<h4><a href="'.base_url().'aktuelles/article/'.$row->id.'">'.$row->title.'</a></h4>';
                        echo '<p>'.shortenString($row->article,300).'</p>';
                        echo '</div>';
                        echo '</div>';
                        $counter++;
                        
                    }           
                    ?>
                    
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
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

                // Print article title
                echo '<div class="row">';
                echo '<div class="span8">';

                echo '</div>';
                echo '</div>';

                // Print article body
                echo '<div class="row">';
                echo '<div class="span2">';
                echo '<a href="' . $link . '" class="thumbnail">';
                if ($row->pictureURL) {
                    echo '<img src="'.base_url().'assets/img/articles/'.$row->pictureURL.'" alt="">';
                } else {
                    echo '<img src="http://placehold.it/260x180" alt="">';
                }
                echo '</a>';
                echo '</div>';

                echo '<div class="span6">';
                echo '<h4><strong><a href="' . $link . '">' . $row->title . '</a></strong></h4>';
                echo '<p>';
                echo '<span class="label">' . $row->shortdate . '</span> ';
                echo '<a href="#"><span class="label label-important">' . $cat . '</span></a> ';
                echo shortenString($row->article, 300);
                echo '</p>';
                echo '</div>';
                echo '</div>';


                echo '<hr>';
            }
            ?>
            
            <div class="pagination">
                <ul>
                    <li><a href="<?php echo base_url(); ?>aktuelles">Zum Newsarchiv</a></li>
                </ul>
            </div>

        </div>
        <div class="span4">

            <div class="well-small text-center">
                <a href="https://www.facebook.com/pages/AC-Rossoneri/238296652947602" target="_blank"><img class="social" src="<?php echo base_url(); ?>assets/img/icons/facebook.png"></a>
                <a href="https://twitter.com/ACRossoneri" target="_blank"><img class="social" src="<?php echo base_url(); ?>assets/img/icons/twitter.png"></a>
                <a href="https://plus.google.com/103733298786436902225" rel="publisher" target="_blank"><img class="social" src="<?php echo base_url(); ?>assets/img/icons/gplus.png"></a>
                <a href=""><img class="social" src="<?php echo base_url(); ?>assets/img/icons/youtube.png"></a>
                <a href=""><img class="social" src="<?php echo base_url(); ?>assets/img/icons/rss.png"></a>

                <hr>

            </div>

            <div class="well">

                <h4>Tabelle</h4>

                <div class="tabbable">

                    <ul class="nav nav-pills">
                        <li class="active"><a href="#tab1" data-toggle="tab">4. Liga</a></li>
                        <li><a href="#tab2" data-toggle="tab">5. Liga (a)</a></li>
                        <li><a href="#tab3" data-toggle="tab">5. Liga (b)</a></li>
                        <li><a href="#tab4" data-toggle="tab">Senioren</a></li>
                    </ul>

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

            <div class="well">
                <h4>N&auml;chstes Spiel der ersten Mannschaft</h4>

                <div class="row-fluid">
                    <div class="span3">
                        <img src="<?php echo base_url(); ?>assets/img/wappen.png" style="width: 150px;">
                    </div>
                    <div class="span9">
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

            <div class="well">
                <h4>N&auml;chste Spiele</h4>

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
                        echo '<td><a href="" id="'.$jsObject.'" rel="popover" class="btn btn-mini" data-placement="top" data-toggle="popover" title="" data-content="'.$location.'" data-original-title="'.$gameTitle.'"><i class="icon-info-sign"></i></i></a></td>';
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

    <hr>

    <div class="row">

        <div class="span4">
            <div class="well">
                <h4>Newsarchiv</h4>

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
                        echo '<td><a href="' . base_url() . 'aktuelles/article/' . $row->id . '"><i class="icon-play"></a></td>';
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

        <div class="span4">
            <div class="well">
                <h4>Matchberichte Archiv</h4>

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
                        echo '<td><a href="' . base_url() . 'aktuelles/match/' . $row->id . '"><i class="icon-play"></a></td>';
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

        <div class="span4">
            <div class="well">
                <h4>Letzte Spiele</h4>
                <table class="table table-condensed table-hover">
                    <tr>
                        <td><strong>AC Rossoneri (1)</strong></td>
                        <td class="text-center">8 : 0</td>
                        <td>SV Muttenz</td>
                    </tr>
                    <tr>
                        <td><strong>AC Rossoneri (2)</strong></td>
                        <td class="text-center">4 : 1</td>
                        <td>FC Lausen</td>
                    </tr>
                    <tr>
                        <td>FC Birsfelden</td>
                        <td class="text-center">3 : 4</td>
                        <td><strong>AC Rossoneri (Sen.)</strong></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

</div>