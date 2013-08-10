<div class="container">

    <div class="row">
        <div class="span4">
            <div class="well">
                <h4>Staff</h4>
                <div class="row-fluid">
                    <div class="span2">
                        <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="height: 60px;">
                    </div>
                    <div class="span10">
                        <h5>Trainer</h5>
                        <p>Roberti Alessandro</p>
                    </div>
                </div>
                <hr>
                <div class="row-fluid">
                    <div class="span2">
                        <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="height: 60px;">
                    </div>
                    <div class="span10">
                        <h5>Co-Trainer</h5>
                        <p>Schreiber Pascal</p>
                    </div>
                </div>
                <hr>
                <div class="row-fluid">
                    <div class="span2">
                        <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="height: 60px;">
                    </div>
                    <div class="span10">
                        <h5>Torwart-Trainer</h5>
                        <p>Mazza Antonio</p>
                    </div>
                </div>
            </div>
            <div class="well">
                <h4>Tabelle</h4>
                <?php
                $data['teamNumber'] = 1;
                $data['rankTables'] = $rankTables;
                $this->load->view('elements/rankingTable', $data);
                ?>
            </div>
            <div class="well">
                <h4>Spiele</h4>
            </div>
        </div>
        <div class="span8">
            <img src="<?php echo base_url(); ?>assets/img/mannschaft.jpg">
            <hr>
            <div class="tabbable">
                <ul class="nav nav-pills">
                    <li class="active"><a href="#tab1" data-toggle="tab">Kader</a></li>
                    <li><a href="#tab2" data-toggle="tab">Spielerliste</a></li>
                    <li><a href="#tab3" data-toggle="tab">Spiele</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">

                        <h4>Torh&uuml;ter</h4>
                        <hr>
                        <div class="row-fluid">
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00100.jpg" style="height: 150px; width: 150px;">
                                <h4>1</h4><h5>Stefan Gubser</h5>
                            </div>
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00101.jpg" style="height: 150px; width: 150px;">
                                <h4>12</h4><h5>Gaetano Ciraolo</h5>
                            </div>
                        </div>

                        <h4>Verteidigung</h4>
                        <hr>
                        <div class="row-fluid">
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="height: 150px; width: 150px;">
                                <h4>3</h4><h5>Luca Lo Presti</h5>
                            </div>
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00102.jpg" style="height: 150px; width: 150px;">
                                <h4>5</h4><h5>Andrea Mulas</h5>
                            </div>
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00103.jpg" style="height: 150px; width: 150px;">
                                <p><span class="label label-important">Captain</span> 6</p><h5>Fabrizio Santoni</h5>
                            </div>
                        </div>
                        <p></p>
                        <div class="row-fluid">
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00104.jpg" style="height: 150px; width: 150px;">
                                <h4>8</h4><h5>Sebastian Werisch</h5>
                            </div>
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00105.jpg" style="height: 150px; width: 150px;">
                                <h4>13</h4><h5>Stefano Pilia</h5>
                            </div>
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00106.jpg" style="height: 150px; width: 150px;">
                                <h4>15</h4><h5>Lukas Rickenbacher</h5>
                            </div>
                        </div>
                        <p></p>
                        <div class="row-fluid">
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="height: 150px; width: 150px;">
                                <h4>21</h4><h5>Alessandro Gatti</h5>
                            </div>
                        </div>
                        <hr>

                        <h4>Mittelfeld</h4>
                        <hr>
                        <div class="row-fluid">
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00107.jpg" style="height: 150px; width: 150px;">
                                <h4>7</h4><h5>Flavio R&uuml;edi</h5>
                            </div>
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00108.jpg" style="height: 150px; width: 150px;">
                                <h4>9</h4><h5>Danilo Cordeiro</h5>
                            </div>
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00109.jpg" style="height: 150px; width: 150px;">
                                <h4>10</h4><h5>Davide Branca</h5>
                            </div>
                        </div>
                        <p></p>
                        <div class="row-fluid">
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="height: 150px; width: 150px;">
                                <h4><11</h4><h5>David Tettey</h5>
                            </div>
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/dummy_person.jpg" style="height: 150px; width: 150px;">
                                <h4>14</h4><h5>Berat Argun</h5>
                            </div>
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00110.jpg" style="height: 150px; width: 150px;">
                                <h4>16</h4><h5>Domenico Chiriaco</h5>
                            </div>
                        </div>
                        <p></p>
                        <div class="row-fluid">
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00111.jpg" style="height: 150px; width: 150px;">
                                <h4>17</h4><h5>Denis Sahin</h5>
                            </div>
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00112.jpg" style="height: 150px; width: 150px;">
                                <h4>18</h4><h5>Salvatore Mulas</h5>
                            </div>
                            <div class="span4 text-center">
                                <img class="img-rounded" src="<?php echo base_url(); ?>assets/img/member/00113.jpg" style="height: 150px; width: 150px;">
                                <h4>20</h4><h5>Alessandro Branca</h5>
                            </div>
                        </div>
                        <hr>


                    </div>
                    <div class="tab-pane" id="tab2">
                        <?php
                        $data['teamNumber'] = 1;
                        $data['spieler'] = $spieler;
                        $this->load->view('elements/playerTable', $data);
                        ?>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <p>Howdy, I'm in Section 2.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>