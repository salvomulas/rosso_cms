<?php ?>

<script>
    $(function()
    {
        $("#gubser").tooltip();
        $("#branca").tooltip();
    });
</script>

<div class="match-unit visible-desktop">

    <div class="container">

        <div class="row">

            <div class="span9">

                <div class="row-fluid">
                    <!-- First -->
                    <div class="span2 offset4">
                        <img class="img-circle" src="<?php echo base_url(); ?>assets/img/member/00120.jpg" style="width:70px;">
                    </div>
                    <div class="span2 offset2">
                        <img class="img-circle" src="<?php echo base_url(); ?>assets/img/member/00122.jpg" style="width:70px;">
                    </div>
                </div>

                <div class="row-fluid">
                    <!-- Second -->
                    <div class="span2 offset2">
                        <img class="img-circle" src="<?php echo base_url(); ?>assets/img/member/00102.jpg" style="width:70px;">
                    </div>
                    <div class="span2 offset2">
                        <img class="img-circle" src="<?php echo base_url(); ?>assets/img/member/00119.jpg" style="width:70px;">
                    </div>
                </div>

                <div class="row-fluid">
                    <!-- Third -->
                    <div class="span2">
                        <img href="#1" data-toggle="modal" id="gubser" data-placement="bottom" rel="popover" data-original-title="TW - Stefan Gubser" class="img-circle" src="<?php echo base_url(); ?>assets/img/member/00100.jpg" style="width:70px;">
                    </div>
                    <div class="span2 offset6">
                        <img href="#" id="branca" data-placement="bottom" rel="popover" data-original-title="ZOM - Alessandro Branca" class="img-circle" src="<?php echo base_url(); ?>assets/img/member/00113.jpg" style="width:70px;">
                    </div>
                    <div class="span2">
                        <img class="img-circle" src="<?php echo base_url(); ?>assets/img/member/00108.jpg" style="width:70px;">
                    </div>

                </div>

                <div class="row-fluid">
                    <!-- Fourth -->
                    <div class="span2 offset2">
                        <img class="img-circle" src="<?php echo base_url(); ?>assets/img/member/00106.jpg" style="width:70px;">
                    </div>
                    <div class="span2 offset2">
                        <img class="img-circle" src="<?php echo base_url(); ?>assets/img/member/00109.jpg" style="width:70px;">
                    </div>

                </div>

                <div class="row-fluid">
                    <!-- Fifth -->
                    <div class="span2 offset4">
                        <img class="img-circle" src="<?php echo base_url(); ?>assets/img/member/00103.jpg" style="width:70px;">
                    </div>
                    <div class="span2 offset2">
                        <img class="img-circle" src="<?php echo base_url(); ?>assets/img/member/00118.jpg" style="width:70px;">
                    </div>
                </div>

            </div>

            <div class="span3">

                <div class="well">
                    <h4>zur Verfügung</h4>
                    <table class="table table-condensed table-hover">
                        <tr>
                            <td>Gaetano</td>
                            <td>Ciraolo</td>
                        </tr>
                        <tr>
                            <td>Vedran</td>
                            <td>Batista</td>
                        </tr>
                        <tr>
                            <td>Stefano</td>
                            <td>Pilia</td>
                        </tr>
                        <tr>
                            <td>Martin</td>
                            <td>Thommen</td>
                        </tr>
                        <tr>
                            <td>Sandro</td>
                            <td>Zollinger</td>
                        </tr>
                        <tr>
                            <td>Salvatore</td>
                            <td>Mulas</td>
                        </tr>

                    </table>
                </div>

            </div>

        </div>

    </div>

</div>

<div class="container hidden-desktop">

    <div class="well">

        <table class="table table-condensed table-hover">
            <thead>
                <tr>
                    <th>Pos</th>
                    <th>Vorname</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>TW</td>
                    <td>Stefan</td>
                    <td>Gubser</td>
                </tr>
                <tr>
                    <td>IV</td>
                    <td>Lukas</td>
                    <td>Rickenbacher</td>
                </tr>
                <tr>
                    <td>IV</td>
                    <td>Andrea</td>
                    <td>Mulas</td>
                </tr>
                <tr>
                    <td>LV</td>
                    <td>Luca</td>
                    <td>Lo Presti</td>
                </tr>
                <tr>
                    <td>RV</td>
                    <td>Fabrizio</td>
                    <td>Santoni</td>
                </tr>
                <tr>
                    <td>ZDM</td>
                    <td>Berat</td>
                    <td>Argun</td>
                </tr>
                <tr>
                    <td>ZDM</td>
                    <td>Davide</td>
                    <td>Branca</td>
                </tr>
                <tr>
                    <td>LF</td>
                    <td>Giuseppe</td>
                    <td>Colangelo</td>
                </tr>
                <tr>
                    <td>ZOM</td>
                    <td>Alessandro</td>
                    <td>Branca</td>
                </tr>
                <tr>
                    <td>RF</td>
                    <td>David Prince</td>
                    <td>Tettey</td>
                </tr>
                <tr>
                    <td>ST</td>
                    <td>Danilo</td>
                    <td>Cordeiro</td>
                </tr>
            </tbody>
        </table>

    </div>

</div>

<!-- Modal -->
<div id="1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Stefan Gubser</h3>
  </div>
  <div class="modal-body">
      <div class="row-fluid">
          <div class="span4">
              <img src="<?php echo base_url(); ?>assets/img/member/00100.jpg" style="width:150px;">
              <hr>
              <a href="" class="btn btn-info btn-small">zum Spielerprofil</a>
          </div>
          <div class="span8">
              <h4>Erste Mannschaft</h4>
              <h5>Pers&ouml;nliche Daten</h5>
              <table class="table table-condensed table-hover">
                  <tr>
                      <th>Vorname</th>
                      <td>Stefan</td>
                  </tr>
                  <tr>
                      <th>Name</th>
                      <td>Gubser</td>
                  </tr>
                  <tr>
                      <th>Alter</th>
                      <td>23</td>
                  </tr>
              </table>
              <h5>Statistische Werte</h5>
              <table class="table table-condensed table-hover">
                  <tr>
                      <th>Eins&auml;tze</th>
                      <td>12</td>
                  </tr>
                  <tr>
                      <th>Tore (gesamt)</th>
                      <td>0 (0)</td>
                  </tr>
                  <tr>
                      <th>Assist (gesamt)</th>
                      <td>0 (1)</td>
                  </tr>
                  <tr>
                      <th>Gelbe Karten (gesamt)</th>
                      <td>1 (2)</td>
                  </tr>
                  <tr>
                      <th>Rote Karten (gesamt)</th>
                      <td>0 (0)</td>
                  </tr>
              </table>
          </div>
      </div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Schliessen</button>
  </div>
</div>