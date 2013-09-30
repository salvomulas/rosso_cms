<hr>
<div class="container">
    <div class="row">
        <div class="span8">
            <h2>Vorstand bearbeiten</h2>

            <?php
            
            if ($management->num_rows > 0) {
                ?>
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Vorname</th>
                        <th>Funktion</th>
                        <th style="width: 36px;"></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($management->result() as $row) {
                        echo '<tr>';
                        echo '<td>'.$row->id.'</td>';
                        echo '<td>'.$row->lastName.'</td>';
                        echo '<td>'.$row->firstName.'</td>';
                        echo '<td>'.$row->function.'</td>';
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
                    echo "Keine Vorstandsmitglieder vorhanden";
                }

                ?>
            


            <div class="btn-toolbar">
                <button class="btn btn-info">Neues Vorstandsmitglied erfassen</button>
            </div>

            <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 id="myModalLabel">Dieses Vorstandsmitglied wirklich l&ouml;schen?</h3>
                </div>
                <div class="modal-body">
                    <p class="error-text">M&ouml;chtest du diese Person wirklich entfernen? Der damit verbundene Benutzeraccount wird ebenfalls entfernt!</p>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Abbrechen</button>
                    <button class="btn btn-danger" data-dismiss="modal">Gruppe entfernen</button>
                </div>
            </div>

        </div>
        <div class="span4">
            <?php $this->load->view('sidebar_profile'); ?>
        </div>
    </div>
</div>