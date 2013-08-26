<div class="container">

    <div class="row">
        <div class="span9">
            <p>Es wurden noch keine Artikel verfasst.</p>
            <?php
            /*
            foreach ($articles->result() as $row) {

                // Print article title
                echo '<div class="row">';
                echo '<div class="span8">';
                echo '<h4><strong><a href="#">'.$row->title.'</a></strong></h4>';
                echo '</div>';
                echo '</div>';

                // Print article body
                echo '<div class="row">';
                echo '<div class="span2">';
                echo '<a href="#" class="thumbnail">';
                echo '<img src="http://placehold.it/260x180" alt="">';
                echo '</a>';
                echo '</div>';

                echo '<div class="span6">';
                echo '<p>';
                echo $row->article;
                echo '</p>';
                echo '<a href="">Weiterlesen...</a>';
                echo '</div>';
                echo '</div>';

                // Print article information

                echo '<div class="row">';
                echo '<div class="span8">';
                echo '<p></p>';
                echo '<p>';
                echo '<i class="icon-user"></i> von Salvatore Mulas';
                echo '<i class="icon-calendar"></i> '.$row->date;
                echo '<i class="icon-share"></i> 0 Shares';
                echo '<i class="icon-tags"></i> Kategorie : <a href="#"><span class="label label-important">News</span></a>';
                echo '</p>';
                echo '</div>';
                echo '</div>';
                echo '<hr>';

            }
*/
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