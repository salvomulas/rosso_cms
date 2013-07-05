<hr>
<div class="container">
    <div class="row">
        <div class="span8">
            <h2>Rechte und Gruppen</h2>



            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kurzname</th>
                        <th>Bezeichnung</th>
                        <th style="width: 36px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>admin</td>
                        <td>Administrator</td>
                        <td>
                            <a href="user.html"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>lead_sport</td>
                        <td>Sportchef</td>
                        <td>
                            <a href="user.html"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>redacteur</td>
                        <td>Redakteur</td>
                        <td>
                            <a href="user.html"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>manager</td>
                        <td>Verwalter</td>
                        <td>
                            <a href="user.html"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr>

            <div class="btn-toolbar">
                <button class="btn btn-info">Neue Gruppe erstellen</button>
            </div>

            <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h3 id="myModalLabel">Die Gruppe wirklich l&ouml;schen?</h3>
                </div>
                <div class="modal-body">
                    <p class="error-text">M&ouml;chtest du diese Gruppe wirklich entfernen? Benutzer, welche dieser Gruppe zugewiesen wurden verlieren somit s&auml;mtliche Berechtigungen!</p>
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