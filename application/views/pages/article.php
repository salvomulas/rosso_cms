<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=1427393740832731";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="container">
    
    <h3><?php echo $article->title; ?></h3>
    
    <div class="row">
        
        <div class="col-md-8">
            
            <p><?php echo $article->article; ?></p>

            <hr>

            <h4>Kommentar hinterlassen</h4>

            <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-numposts="5" data-colorscheme="dark"></div>
            
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
                            <td><span class="label label-primary"><?php echo $cat; ?></span></td>
                        </tr>
                    </table>
                    
                </div>
                
            </div>
            
            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">Teilen</h3>
                </div>

                <div class="panel-body text-center">
                    <div class="fb-share-button" data-href="<?php echo current_url(); ?>" data-type="box_count"></div>
                </div>
                
            </div>
            
        </div>
        
    </div>
    
    <hr>
    
    
</div>