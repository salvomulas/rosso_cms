<div class="hero-unit">
    <div class="container">
        <div class="row-fluid">
            <div class="span8">
                <?php
                switch(uri_string())
                {
                    case "site/aktuelles":
                        $title = "Aktuelles";
                        $slogan = "Aktuelle Matchberichte, News oder Eventmitteilungen des AC Rossoneri";
                        break;
                    case "site/verein/vorstand":
                        $title = "Verein";
                        $slogan = "Alles &uuml;ber den AC Rossoneri 1962";
                        break;
                    case "site/verein/clubhaus":
                        $title = "Cantina AC Rossoneri";
                        $slogan = "Alles &uuml;ber unser Clubhaus";
                        break;
                    case "":
                        $title = "Willkommen";
                        $slogan = "Willkommen auf der offiziellen Webseite der AC Rossoneri";
                        break;
                    default:
                        $title = "nichts";
                        $slogan = "Undefinierter Inhalt";
                        break;
                }
                ?>
                <h3><?php echo $title; ?></h3>
                <p><?php echo $slogan; ?></p>
            </div>
            <div class="span4">

            </div>
        </div>
    </div>
</div>