<?php

require('functions.php');

writeJS();

?>

<div class="match-unit visible-desktop">

    <div class="container">

        <div class="row">

            <div class="span9">

                <div class="row-fluid">
                    <!-- First -->
                    <div class="span2 offset4">
                        <?php showPlayer($players,1); ?>
                    </div>
                    <div class="span2 offset2">
                        <?php showPlayer($players,5); ?>
                    </div>
                </div>

                <div class="row-fluid">
                    <!-- Second -->
                    <div class="span2 offset2">
                        <?php showPlayer($players,2); ?>
                    </div>
                    <div class="span2 offset2">
                        <?php showPlayer($players,6); ?>
                    </div>
                </div>

                <div class="row-fluid">
                    <!-- Third -->
                    <div class="span2">
                        <?php showPlayer($players,0); ?>
                    </div>
                    <div class="span2 offset6">
                        <?php showPlayer($players,7); ?>
                    </div>
                    <div class="span2">
                        <?php showPlayer($players,10); ?>
                    </div>

                </div>

                <div class="row-fluid">
                    <!-- Fourth -->
                    <div class="span2 offset2">
                        <?php showPlayer($players,3); ?>
                    </div>
                    <div class="span2 offset2">
                        <?php showPlayer($players,8); ?>
                    </div>

                </div>

                <div class="row-fluid">
                    <!-- Fifth -->
                    <div class="span2 offset4">
                        <?php showPlayer($players,4); ?>
                    </div>
                    <div class="span2 offset2">
                        <?php showPlayer($players,9); ?>
                    </div>
                </div>

            </div>

            <div class="span3">


                <h4 class="text-center">4 - 5 - 1</h4>
                <hr>


                <div class="well">
                    <h4>zur Verfügung</h4>
                    <table class="table table-condensed table-hover">
                        <?php resPlayer($players); ?>
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
<?php drawModal($players);