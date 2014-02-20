<footer>
    <div class="container text-center">

    <?php

    foreach ($sponsors->result() as $row) {

        echo '<div class="col-md-3 hidden-xs hidden-sm">';
        echo '<a hreF="http://'.$row->webpage.'" target="_blank" alt="'.$row->name.'"><img src="'.base_url().'assets/img/sponsors/'.$row->pictureURL.'.png" style="margin-bottom: 20px;"></a>';
        echo '</div>';

        echo '<div class="row hidden-md hidden-lg">';
        echo '<a hreF="http://'.$row->webpage.'" target="_blank" alt="'.$row->name.'"><img src="'.base_url().'assets/img/sponsors/'.$row->pictureURL.'.png" style="margin-bottom: 30px;"></a>';
        echo '</div>';

    }

    ?>

    </div>

</footer>

</body>

</html>