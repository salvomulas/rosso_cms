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
    <h4 class="text-center"><?php echo $article->name.' | '.$loc; ?></h4>
    <hr>
    
    <div class="row">
        
        <div class="span8">
            
            <p><?php echo $article->article; ?></p>

        </div>
        
        <div class="span4">
            
            <?php
            if ($article->pictureURL) {
                echo '<div class="text-center">';
                echo '<img src="'.base_url().'assets/img/articles/'.$article->pictureURL.'" alt="">';
                echo '</div>';
                echo '<hr>';
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

            <div clasS="well">

                <h4>Spielereignisse</h4>

                <table class="table table-condensed">
                    <tr>
                        <td>75°</td>
                        <td>Tor Davide Branca</td>
                    </tr>
                </table>
            </div>

            <div class="well">
                
                <h4>Infos</h4>
                
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
                        <td><a href="#"><span class="label label-important"><?php echo $cat; ?></span></a></td>
                    </tr>
                </table>
                
            </div>
            
            <div class="well">
                
                <h4>Teilen</h4>
                
            </div>
            
        </div>
        
    </div>
    
    <hr>
    
    
</div>