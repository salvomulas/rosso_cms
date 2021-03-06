<div class="container">
    
    <hr>

    <div class="row">
        
        <div class="col-md-8">
            <h3>Sportanlagen</h3>
            <p>Die Sportanlage Bifang in Lausen bietet zur Zeit insgesamt 3 Fussballfelder f&uuml;r die Aus&uuml;bung des sch&ouml;nsten Hobbies der Welt.
                Nebst der Fussballfelder, bietet die Sportanlage zwei moderne Mehrzweckhallen (Bifang und Stutz), zwei Hartpl&auml;tze, ein Beach-Volleyball-Feld und eine 400 Meter lange Finnenbahn.
                <br />
                Umziehen k&ouml;nnen sich die Spieler entweder im Lausner Feuerwehrmagazin, oder in der Mehrzweckhalle Stutz - beides befindet sich in unmittelbarer N&auml;he der Spielfelder.
                <br />
                Geb&uuml;hrenfreie Parkpl&auml;tze gibt es vor der Mehrzweckhalle Stutz. Ansonsten k&ouml;nnen auch die Parkpl&auml;tze vor der Mehrzweckhalle Bifang genutzt werden, welche ebenfalls unmittelbar in der N&auml;he des Hauptrasen liegen.</p>
            
        </div>
        
        <div class="col-md-4">
            
            <div class="well">
                <h4>Anlage Bifang</h4>
                <table class="table table-condensed table-hover">
                    <tr>
                        <th>Pl&auml;tze</th>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th>Ort</th>
                        <td>Lausen</td>
                    </tr>
                    <tr>
                        <th>Besitzer</th>
                        <td>Gemeinde Lausen</td>
                    </tr>
                </table>
            </div>
            
        </div>
        
    </div>
    
    <hr>
    
    <?php
    
    foreach ($field->result() as $row) {
        
        echo '<div class="well">';
        echo '<div class="row">';
        echo '<div class="col-md-3">';
        echo '<img src="'.base_url().'assets/img/fields/'.$row->pictureURL.'" style="max-width: 100%;">';
        echo '</div>';
        echo '<div class="col-md-9">';
        echo '<h4>'.$row->title.'</h4>';
        echo '<table class="table table-condensed table-hover">';
        
        echo '<tr>';
        echo '<th>Belag</th>';
        echo '<td>'.$row->belag.'</td>';
        echo '</tr>';
        
        echo '<tr>';
        echo '<th>Masse</th>';
        echo '<td>'.$row->masse.'</td>';
        echo '</tr>';
        
        if ($row->jahr > 0) {
        echo '<tr>';
        echo '<th>Erstellungsjahr</th>';
        echo '<td>'.$row->jahr.'</td>';
        echo '</tr>';
        }
        
        if ($row->sitze > 0) {
        echo '<tr>';
        echo '<th>Stehpl&auml;tze</th>';
        echo '<td>'.$row->sitze.'</td>';
        echo '</tr>';
        }
        
        echo '</table>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
        
    }
    
    ?>
    
</div>