<hr>
<div class="container">
    <div class="row">
        <div class="span8">
            <h2>Vorstand bearbeiten</h2>



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
                    <tr>
                        <td>1</td>
                        <td>Mulas</td>
                        <td>Dario</td>
                        <td>Pr&auml;sident</td>
                        <td>
                            <a href="<?php echo base_url(); ?>admin/edit_vorstand_member"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mulas</td>
                        <td>Luca</td>
                        <td>Sportchef</td>
                        <td>
                            <a href="<?php echo base_url(); ?>admin/edit_vorstand_member"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mulas</td>
                        <td>Paolo</td>
                        <td>Vize-Pr&auml;sident</td>
                        <td>
                            <a href="<?php echo base_url(); ?>admin/edit_vorstand_member"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mulas</td>
                        <td>Salvatore</td>
                        <td>Marketing und Sponsoring</td>
                        <td>
                            <a href="<?php echo base_url(); ?>admin/edit_vorstand_member"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                                        <tr>
                        <td>5</td>
                        <td>Roberti</td>
                        <td>Giuseppe</td>
                        <td>Materialchef</td>
                        <td>
                            <a href="<?php echo base_url(); ?>admin/edit_vorstand_member"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Mulas-Badella</td>
                        <td>Claudia</td>
                        <td>Finanzen</td>
                        <td>
                            <a href="<?php echo base_url(); ?>admin/edit_vorstand_member"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>De Nuccio</td>
                        <td>Francesca</td>
                        <td>Sekretariat</td>
                        <td>
                            <a href="<?php echo base_url(); ?>admin/edit_vorstand_member"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Ceniviva</td>
                        <td>Giuseppe</td>
                        <td>Beisitzer</td>
                        <td>
                            <a href="<?php echo base_url(); ?>admin/edit_vorstand_member"><i class="icon-pencil"></i></a>
                            <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr>

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