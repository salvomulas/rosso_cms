<div class="container">
    
    <h3><?php echo $article->title; ?></h3>
    
    <div class="row">
        
        <div class="col-md-8">
            
            <p><?php echo $article->article; ?></p>
            
        </div>
        
        <div class="col-md-4">
            
            <?php
            if ($article->pictureURL) {
                echo '<div class="text-center">';
                echo '<img src="'.base_url().'assets/img/articles/'.$article->pictureURL.'" alt="" style="max-width: 100%;">';
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
      
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">Infos</h3>
                </div>

                <div class="panel-body">
                
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
                            <td><a href="#"><span class="label label-primary"><?php echo $cat; ?></span></a></td>
                        </tr>
                    </table>
                    
                </div>
                
            </div>
            
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">Teilen</h3>
                </div>

                <div class="panel-body">
                
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    <hr>
    
    
</div>