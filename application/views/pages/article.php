<div class="container">
    
    <h3><?php echo $article->title; ?></h3>
    
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
            ?>

            <?php

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
      
            <div class="well">
                
                <h4>Infos</h4>
                
                <table class="table table-condensed">
                    <tr>
                        <th>Autor</th>
                        <td>Salvatore Mulas</td>
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