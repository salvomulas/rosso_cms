<div class="container">

    <div class="row">
        <div class="col-md-9">

            <?php

            function shortenString($string, $width) {
                if (strlen($string) > $width) {
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
                    case 1: $link = base_url() . 'aktuelles/article/' . $row->id;
                        $cat = "News";
                        break;
                    case 2: $link = base_url() . 'aktuelles/match/' . $row->id;
                        $cat = "Matchbericht";
                        break;
                    case 3: $link = base_url() . 'aktuelles/article/' . $row->id;
                        $cat = "Highlights";
                        break;
                    default: $link = NULL;
                        $cat = NULL;
                }

                // Print article body
                echo '<div class="row">';
                echo '<div class="col-md-3">';
                echo '<a href="' . $link . '" class="thumbnail">';
                if ($row->pictureURL) {
                    echo '<img src="' . base_url() . 'assets/img/articles/' . $row->pictureURL . '" alt="">';
                } else {
                    echo '<img src="http://placehold.it/260x180" alt="">';
                }
                echo '</a>';
                echo '</div>';

                echo '<div class="col-md-9">';
                echo '<h4><strong><a href="' . $link . '">' . $row->title . '</a></strong></h4>';
                echo '<p>';
                echo shortenString($row->article, 300);
                echo '</p>';
                echo '<a href="' . $link . '">Weiterlesen...</a>';
                echo '</div>';
                echo '</div>';

                // Print article information
                echo '<div class="row">';
                echo '<div class="col-md-12">';
                echo '<p></p>';
                echo '<p>';
                echo '<span class="glyphicon glyphicon-user"></span> von ' . $row->firstName . ' ' . $row->lastName;
                echo ' | <span class="glyphicon glyphicon-calendar"></span> ' . $row->fulldate;
                echo ' | <span class="glyphicon glyphicon-share"></span> 0 Shares';
                echo ' | <span class="glyphicon glyphicon-tag"></span> Kategorie : <a href="#"><span class="label label-primary">' . $cat . '</span></a>';
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
        <div class="col-md-3">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">Kategorien</h3>
                </div>

                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">alles anzeigen</a>
                        <a href="#" class="list-group-item">News</a>
                        <a href="#" class="list-group-item">Matchberichte</a>
                        <a href="#" class="list-group-item">Highlights</a>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">Autoren</h3>
                </div>

                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item">alles anzeigen</a>
                        <a href="#" class="list-group-item">Salvatore Mulas</a>
                        <a href="#" class="list-group-item">Philippe Feller</a>
                        <a href="#" class="list-group-item">Celine Feller</a>
                    </div>
                </div>


            </div>

        </div>

    </div>
    
</div>