<hr>
<div class="container">

    <h3>Spieler bearbeiten</h3>
    <hr>

    <div class="row">
        <div class="span8">

            <?php

            if ($players->num_rows > 0) {
                ?>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Vorname</th>
                        <th>Mannschaft</th>
                        <th>Position</th>
                        <th style="width: 36px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($players->result() as $row) {
                        echo '<tr>';
                        echo '<td>'.$row->lastName.'</td>';
                        echo '<td>'.$row->firstName.'</td>';
                        echo '<td>'.$row->toTeam.'</td>';
                        echo '<td>'.$row->toPosition.'</td>';
                        echo '<td>';
                        echo '<a href="'.base_url().'admin/edit_vorstand_member"><i class="icon-pencil"></i></a> ';
                        echo '<a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>';
                        echo '</td>';
                        echo '</tr>';
                    }

                    ?>
                    </tbody>
                </table>
                <hr>

            <?php

            } else {
                echo "Keine Spieler vorhanden";
            }

            ?>

            <?php

            echo $links;
            if ($links) {
                echo '<hr>';
            }

            ?>

            <div class="btn-toolbar">
                <button class="btn btn-info">Neuer Spieler erfassen</button>
            </div>
            <hr>

            <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 id="myModalLabel">Diesen Spieler wirklich l&ouml;schen?</h3>
                </div>
                <div class="modal-body">
                    <p class="error-text">M&ouml;chtest du diese Person wirklich entfernen? Der damit verbundene Benutzeraccount wird ebenfalls entfernt!</p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Abbrechen</button>
                    <button class="btn btn-danger" data-dismiss="modal">Spieler entfernen</button>
                </div>
            </div>
        </div>

        <div class="span4">
            <div class="well">
                <div class="text-center">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-filter"></i></span>
                        <input class="span3" id="filter" type="text" placeholder="Filtern..." autocomplete="off" data-provide="typeahead">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>