<div class="container">

    <div class="row">
        <div class="span9">

            <?php

            function shortenString ($string, $width) {
                if (strlen($string) > $width)
                {
                    $string = wordwrap($string, $width);
                    $i = strpos($string, "\n");
                    if ($i) {
                        $string = substr($string, 0, $i);
                    }
                }
                return $string;
            }
            
            foreach ($articles->result() as $row) {

                switch ($row->category) {
                    case 1: $link = base_url().'aktuelles/article/'.$row->id;
                            $cat = "News";
                    break;
                    case 2: $link = base_url().'aktuelles/match/'.$row->id;
                            $cat = "Matchbericht";
                    break;
                    default: $link = NULL;
                             $cat = NULL;
                }

                // Print article title
                echo '<div class="row">';
                echo '<div class="span8">';
                echo '<h4><strong><a href="'.$link.'">'.$row->title.'</a></strong></h4>';
                echo '</div>';
                echo '</div>';

                // Print article body
                echo '<div class="row">';
                echo '<div class="span2">';
                echo '<a href="'.$link.'" class="thumbnail">';
                echo '<img src="http://placehold.it/260x180" alt="">';
                echo '</a>';
                echo '</div>';

                echo '<div class="span6">';
                echo '<p>';
                echo shortenString($row->article, 300);
                echo '</p>';
                echo '<a href="'.$link.'">Weiterlesen...</a>';
                echo '</div>';
                echo '</div>';

                // Print article information
                echo '<div class="row">';
                echo '<div class="span8">';
                echo '<p></p>';
                echo '<p>';
                echo '<i class="icon-user"></i> von Salvatore Mulas';
                echo ' | <i class="icon-calendar"></i> '.$row->fulldate;
                echo ' | <i class="icon-share"></i> 0 Shares';
                echo ' | <i class="icon-tags"></i> Kategorie : <a href="#"><span class="label label-important">'.$cat.'</span></a>';
                echo '</p>';
                echo '</div>';
                echo '</div>';
                echo '<hr>';

            }
            
            echo $links;
            if ($links) {
                echo '<hr>';
            }

            ?>

        </div>
        <div class="span3">
            <div class="well">
                <h4>Kategorien</h4>
                <ul class="nav nav-list">
                    <li class="active"><a href="#">alle</a></li>
                    <li><a href="#">Matchberichte</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Mitteilungen</a></li>
                </ul>
            </div>

            <div class="well">
                <h4>Autoren</h4>
                <ul class="nav nav-list">
                    <li class="active"><a href="#">alle</a></li>
                    <li><a href="#">Salvatore Mulas</a></li>
                </ul>
            </div>


        </div>

    </div>

</div>