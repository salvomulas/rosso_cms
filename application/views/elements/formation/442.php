<?php

require('functions.php');

writeJS();

$pos = array('TW','LV','IV','IV','RV','LF','ZDM','ZOM','ZDM','RF','ST');

?>

    <div class="match-unit hidden-xs hidden-sm">

        <div class="container">

            <div class="row">

                <div class="col-md-9">

                    <div class="row">
                        <!-- First -->
                        <div class="col-md-2 col-md-offset-3">
                            <?php showPlayer($players,1); ?>
                        </div>
                        <div class="col-md-2 col-md-offset-2">
                            <?php showPlayer($players,5); ?>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Second -->
                        <div class="col-md-2 col-md-offset-2">
                            <?php showPlayer($players,2); ?>
                        </div>
                        <div class="col-md-2 col-md-offset-2">
                            <?php showPlayer($players,6); ?>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <?php showPlayer($players,9); ?>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Third -->
                        <div class="col-md-2">
                            <?php showPlayer($players,0); ?>
                        </div>

                    </div>

                    <div class="row">
                        <!-- Fourth -->
                        <div class="col-md-2 col-md-offset-2">
                            <?php showPlayer($players,3); ?>
                        </div>
                        <div class="col-md-2 col-md-offset-2">
                            <?php showPlayer($players,7); ?>
                        </div>
                        <div class="col-md-2 col-md-offset-1">
                            <?php showPlayer($players,10); ?>
                        </div>

                    </div>

                    <div class="row">
                        <!-- Fifth -->
                        <div class="col-md-2 col-md-offset-3">
                            <?php showPlayer($players,4); ?>
                        </div>
                        <div class="col-md-2 col-md-offset-2">
                            <?php showPlayer($players,8); ?>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">


                    <h4 class="text-center">4 - 4 - 2</h4>
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

    <div class="container hidden-md hidden-lg">

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

                <?php

                showPlayerMobile($players,$pos);

                ?>

                </tbody>
            </table>

        </div>

    </div>

    <!-- Modal -->
<?php drawModal($players);