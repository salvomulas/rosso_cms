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
                echo '<img src="http://placehold.it/260x180" alt="" style="width: 260px; height: 180px;">';
                echo '</div>';
                echo '<hr>';
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
                        <td><a href="#"><span class="label label-important">News</span></a></td>
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