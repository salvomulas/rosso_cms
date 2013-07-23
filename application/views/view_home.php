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
                            <p>Dies ist ein Test des Carousels über Twitter Bootstrap</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?php echo base_url(); ?>assets/img/frauen.jpg" alt="Mannschaftsfoto">
                        <div class="carousel-caption">
                            <h4>Herzlich willkommen</h4>
                            <p>Dies ist ein Test des Carousels über Twitter Bootstrap</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?php echo base_url(); ?>assets/img/zwei.jpg" alt="Mannschaftsfoto">
                        <div class="carousel-caption">
                            <h4>Herzlich willkommen</h4>
                            <p>Dies ist ein Test des Carousels über Twitter Bootstrap</p>
                        </div>
                    </div>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>

            <div class="row">

                <div class="span4">
                    <div class="well">
                        <h4>Letzte News</h4>

                        <table class="table table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>Datum</th>
                                    <th>Titel</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>23.02.2013</td>
                                    <td>Neuer Webautritt fertig</td>
                                    <td><i class="icon-play"></td>
                                </tr>
                                <tr>
                                    <td>27.02.2013</td>
                                    <td>Generalversammlung am 11.07</td>
                                    <td><i class="icon-play"></td>
                                </tr>
                                <tr>
                                    <td>04.03.2013</td>
                                    <td>Brief des Pr&auml;sidenten</td>
                                    <td><i class="icon-play"></td>
                                </tr>
                                <tr>
                                    <td>10.03.2013</td>
                                    <td>Ein tolles Fest</td>
                                    <td><i class="icon-play"></td>
                                </tr>
                                <tr>
                                    <td>29.03.2013</td>
                                    <td>R&uuml;ckblick auf das letzte...</td>
                                    <td><i class="icon-play"></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class="span4">
                    <div class="well">
                        <h4>Letzte Matchberichte</h4>

                        <table class="table table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th>Datum</th>
                                    <th>Titel</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>23.02.2013</td>
                                    <td>Erste Mannschaft gewinnt in...</td>
                                    <td><i class="icon-play"></td>
                                </tr>
                                <tr>
                                    <td>27.02.2013</td>
                                    <td>Hoffnungsfunken Dersim reicht...</td>
                                    <td><i class="icon-play"></td>
                                </tr>
                                <tr>
                                    <td>04.03.2013</td>
                                    <td>Davide Branca Show in Basel</td>
                                    <td><i class="icon-play"></td>
                                </tr>
                                <tr>
                                    <td>10.03.2013</td>
                                    <td>Zweite Mannschaft kurz vor...</td>
                                    <td><i class="icon-play"></td>
                                </tr>
                                <tr>
                                    <td>29.03.2013</td>
                                    <td>Neuer Trainer f&uuml;r die erste...</td>
                                    <td><i class="icon-play"></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>

        </div>
        <div class="span4">
            <div class="well">

                <h4>Tabelle</h4>

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">4. Liga</a></li>
                        <li><a href="#tab2" data-toggle="tab">5. Liga (a)</a></li>
                        <li><a href="#tab3" data-toggle="tab">5. Liga (b)</a></li>
                        <li><a href="#tab4" data-toggle="tab">Senioren</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <?php
                                $this->load->view('elements/rankingTable', $ranking);
                            ?>

                        </div>
                        <div class="tab-pane" id="tab2">

                            <?php
                            $ranking2 = $ranking;
                                $this->load->view('elements/rankingTable', $ranking);
                            ?>

                        </div>
                        <div class="tab-pane" id="tab3">
                            <p>Howdy, I'm in Section 3.</p>
                        </div>
                        <div class="tab-pane" id="tab4">
                            <p>Howdy, I'm in Section 3.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="well">
                <h4>N&auml;chstes Spiel</h4>
            </div>


        </div>

    </div>

</div>