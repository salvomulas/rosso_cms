<div class="container">
    
    <h2 class="text-center"><?php echo $article->title; ?></h2>
    <h4 class="text-center">Erste Mannschaft | auswärts</h4>
    <hr>
    
    <div class="row">
        
        <div class="span8">
            
            <p><?php echo $article->article; ?></p>
            
        </div>
        
        <div class="span4">
            
            <?php
            if ($article->pictureURL) {
                echo '<div class="text-center">';
                echo '<img src="http://placehold.it/260x180" alt="" style="width: 260px; height: 180px;">';
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
                        <th><p class="text-center">FC Arisdorf</p></th>
                        <th><p class="text-center"></p></th>
                        <th><p class="text-center">AC Rossoneri</p></th>
                    </tr>
                    <tr>
                        <th><h2 class="text-center">0</h2></th>
                        <td><h2 class="text-center">-</h2></td>
                        <td><h2 class="text-center">1</h2></td>
                    </tr>
                </table>
                <hr>
                <p class="text-center">Meisterschaftsspiel</p>
                <p class="text-center">4. Liga - Gruppe 2</p>

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
                        <td><?php echo $article->date; ?></td>
                    </tr>
                    <tr>
                        <th>Zeit</th>
                        <td><?php echo $article->time; ?> Uhr</td>
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