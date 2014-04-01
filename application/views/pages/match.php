<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=1427393740832731";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="container">

    <?php

    if ($article->isHome == 1) {
        $loc = "Heimspiel";
        $home = "AC Rossoneri";
        $guest = $article->opponent;
    } else {
        $loc = "Ausw&auml;rts";
        $home = $article->opponent;
        $guest = "AC Rossoneri";
    }

    ?>
    
    <h2 class="text-center"><?php echo $article->title; ?></h2>
    <h4 class="text-center"><?php echo $article->name.' | '.$loc; ?> | <div class="fb-share-button" data-href="<?php echo current_url(); ?>" data-type="button"></div></h4>
    <hr>
    
    <div class="row">
        
        <div class="col-md-4 col-md-push-8">

            <div class="row">
            
                <?php
                if ($article->pictureURL) {
                    echo '<div class="col-md-12 text-center hidden-sm hidden-xs">';
                    echo '<img src="'.base_url().'assets/img/articles/'.$article->pictureURL.'" alt="" class="img-responsive">';
                    echo '<hr>';
                    echo '</div>';
                }

                switch ($article->category) {

                    case 1: $cat = "News";
                        break;
                    case 2: $cat = "Matchbericht";
                        break;
                    case 3: $cat = "Highlight";
                        break;
                    default: $cat = NULL;
                        break;

                }

                ?>

                <div class="col-md-12 col-sm-12">

                    <div clasS="well">

                        <table class="table table-condensed">
                            <tr>
                                <th><p class="text-center"><?php echo $home; ?></p></th>
                                <th><p class="text-center"></p></th>
                                <th><p class="text-center"><?php echo $guest; ?></p></th>
                            </tr>
                            <tr>
                                <th><h2 class="text-center"><?php echo $article->pointsHome; ?></h2></th>
                                <td><h2 class="text-center">-</h2></td>
                                <td><h2 class="text-center"><?php echo $article->pointsAway; ?></h2></td>
                            </tr>
                        </table>
                        <hr>
                        <p class="text-center"><?php echo $article->mDate.' | '.$article->mTime.' Uhr'; ?></p>
                        <p class="text-center"><?php echo $article->gameType; ?></p>
                        <?php
                        if ($article->gameType == "Meisterschaft") {
                            echo '<p class="text-center">'.$article->ligaDesc.'</p>';
                        }
                        ?>

                    </div>

                </div>

                <div class="col-md-12 hidden-sm hidden-xs">

                    <div class="panel panel-primary">

                        <div class="panel-heading">
                            <h3 class="panel-title">Infos zum Matchbericht</h3>
                        </div>

                        <div class="panel-body">

                            <table class="table table-condensed">
                                <tr>
                                    <th>Autor</th>
                                    <td><?php echo $article->firstName.' '.$article->lastName; ?></td>
                                </tr>
                                <tr>
                                    <th>Datum</th>
                                    <td><?php echo $article->aDate; ?></td>
                                </tr>
                                <tr>
                                    <th>Zeit</th>
                                    <td><?php echo $article->aTime; ?> Uhr</td>
                                </tr>
                                <tr>
                                    <th>Kategorie</th>
                                    <td><a href="#"><span class="label label-primary"><?php echo $cat; ?></span></a></td>
                                </tr>
                            </table>

                        </div>

                    </div>

                </div>

            </div>
            
        </div>

        <div class="col-md-8 col-md-pull-4">

            <p><?php echo $article->article; ?></p>

            <hr>

            <h4>Kommentar hinterlassen</h4>

            <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-numposts="5" data-colorscheme="dark"></div>

        </div>
        
    </div>
    
    <hr>
    
    
</div>