<div class="container">

<!-- //BREAKING NEWS CONTAINER FOR EXCEPTIONAL CONTENT

    <div class="well">
      <div class="row-fluid">
        <div class="span9">
          <h1>Hello</h1>
        </div>
        <div class="span3">
          <button class="btn btn-block btn-primary" type="button">Follow us on Facebook</button>
          <button class="btn btn-block btn-primary" type="button">Follow us on Twitter</button>
        </div>
      </div>
    </div>
-->

<div class="row">
    <div class="span8">

        <div id="myCarousel" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item">
                    <img src="<?php echo base_url(); ?>assets/img/mannschaft.jpg" alt="Mannschaftsfoto">
                    <div class="carousel-caption">
                        <h4>Herzlich willkommen</h4>
                        <p>Herzlich willkommen auf der neuen Webseite der AC Rossoneri!</p>
                    </div>
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
        
        <hr>
        
        <?php

            function shortenString ($string, $width) {
                if (strlen($string) > $width)
                {
                    $string = wordwrap($string, $width);
                    $i = strpos($string, "\n");
                    if ($i) {
                        $string = substr($string, 0, $i);
                    }
                }
                return $string;
            }
            
            foreach ($articlesMain->result() as $row) {

                switch ($row->category) {
                    case 1: $link = base_url().'aktuelles/article/'.$row->id;
                            $cat = "News";
                    break;
                    case 2: $link = base_url().'aktuelles/match/'.$row->id;
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
                echo '<a href="'.$link.'" class="thumbnail">';
                echo '<img src="http://placehold.it/260x180" alt="">';
                echo '</a>';
                echo '</div>';

                echo '<div class="span6">';
                echo '<h4><strong><a href="'.$link.'">'.$row->title.'</a></strong></h4>';
                echo '<p>';
                echo '<a href="#"><span class="label label-important">'.$cat.'</span></a> ';
                echo shortenString($row->article, 300);
                echo '</p>';
                echo '</div>';
                echo '</div>';


                echo '<hr>';

            }
            
        ?>
        

        <div class="row">

            <div class="span4">
                <div class="well">
                    <h4>Newsarchiv</h4>

                    <?php
                    
                    if ($articles) {
                    
                        echo '<table class="table table-condensed table-hover">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>Datum</th>';
                        echo '<th>Titel</th>';
                        echo '<th></th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';

                        foreach ($articles->result() as $row) {

                            echo '<tr>';
                            echo '<td>'.$row->date.'</td>';
                            echo '<td>'.$row->title.'</td>';
                            echo '<td><a href="'.base_url().'aktuelles/article/'.$row->id.'"><i class="icon-play"></a></td>';
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
                    
                    if ($matchReport->num_rows > 0) {
                    
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
                            echo '<td>'.$row->date.'</td>';
                            echo '<td>'.$row->title.'</td>';
                            echo '<td><a href="'.base_url().'aktuelles/match/'.$row->id.'"><i class="icon-play"></a></td>';
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
                <h4>N&auml;chstes Spiel</h4>

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
                                
                                echo '<h5>'.$row->gameType.' - '.$row->name.'</h5>';
                                echo '<p><strong>vs </strong>'.$row->opponent.'</p>';
                                echo '<p>'.$row->location.'</p>';
                                echo '<p>'.$row->complex.'</p>';
                                echo '<p>'.$row->date.' um '.$row->time.' Uhr</p>';
                            }
                        } else {
                            echo '<p>Es sind noch keine Spiele angesetzt!</p>';
                        }
                       
                        ?>
                    </div>
                </div>

            </div>


    </div>

</div>

</div>