<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&appId=1427393740832731";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container navfix">

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

                echo '<div class="col-md-3 col-sm-3 hidden-xs">';
                echo '<a href="' . $link . '" class="thumbnail">';
                if ($row->pictureURL) {
                    echo '<img src="' . base_url() . 'assets/img/articles/' . $row->pictureURL . '" alt="">';
                } else {
                    echo '<img src="http://placehold.it/260x180" alt="">';
                }
                echo '</a>';
                echo '</div>';

                echo '<div class="col-md-9 col-sm-9 col-xs-12">';
                echo '<h4><strong><a href="' . $link . '">' . $row->title . '</a></strong></h4>';
                echo '<p>';
                echo shortenString($row->article, 300);
                echo '</p>';

                echo '<div class="well well-sm clearfix">';
                echo '<p class="text-articledesc small">';
                echo '<span class="glyphicon glyphicon-user"></span> '.$row->firstName.' '.$row->lastName.' | ';
                echo '<span class="glyphicon glyphicon-calendar"></span> '.$row->shortdate.' | ';
                echo '<span class="glyphicon glyphicon-tag"></span> '.$cat .'</p>';
                echo '<div class="text-articleshare fb-share-button" data-href="'.$link.'" data-type="button"></div>';
                echo '</div>';

                echo '</div>';

                echo '</div>';

                echo '<hr>';

            }

            echo '<div class="text-center">';
            echo $links;
            echo '</div>';

            if ($links) {
                echo '<hr>';
            }
            ?>

        </div>
        <div class="col-md-3 hidden-xs">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">Kategorien</h3>
                </div>

                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">alles anzeigen</a>
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
                        <a href="#" class="list-group-item active">alles anzeigen</a>
                        <a href="#" class="list-group-item">Salvatore Mulas</a>
                        <a href="#" class="list-group-item">Philippe Feller</a>
                        <a href="#" class="list-group-item">Celine Feller</a>
                    </div>
                </div>


            </div>

        </div>

    </div>
    
</div>