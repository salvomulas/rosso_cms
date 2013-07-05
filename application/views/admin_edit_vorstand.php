<hr>
<div class="container">
    <div class="row">
        <div class="span8">
            <h2>Vorstandsmitglied bearbeiten</h2>

            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Pers&ouml;nliche Daten</a></li>
                <li><a href="#profile" data-toggle="tab">Zugangsdaten</a></li>
                <li><a href="#group" data-toggle="tab">Gruppenzugeh&ouml;rigkeit</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home">
                    <form id="tab">
                        <div class="row">
                            <div class="span4">
                                <label>ID</label>
                                <input type="text" value="1" class="input-xlarge">
                                <label>Nachname</label>
                                <input type="text" value="Mulas" class="input-xlarge">
                                <label>Vorname</label>
                                <input type="text" value="Dario" class="input-xlarge">
                                <label>Email</label>
                                <input type="text" value="dario.mulas@acrossoneri.ch" class="input-xlarge">
                            </div>

                            <div class="span4">
                                <label>Facebook</label>
                                <input type="text" value="" class="input-xlarge">
                                <label>Google+</label>
                                <input type="text" value="" class="input-xlarge">
                                <label>Twitter</label>
                                <input type="text" value="" class="input-xlarge">
                                <label>YouTube</label>
                                <input type="text" value="" class="input-xlarge">                                    
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="span4">
                                <label>Addresse</label>
                                <textarea value="Smith" rows="3" class="input-xlarge">Peterhansstrasse 5b</textarea>
                                <label>PLZ / Ort</label>
                                <input type="text" value="4415 Lausen" class="input-xlarge">      
                                <label>Land</label>
                                <input type="text" value="Schweiz" class="input-xlarge">   
                            </div>

                            <div class="span4">
                                <label>Telefon privat</label>
                                <input type="text" value="061 921 22 88" class="input-xlarge">      
                                <label>Telefon mobil</label>
                                <input type="text" value="079 232 13 84" class="input-xlarge">
                                <label>Fax</label>
                                <input type="text" value="" class="input-xlarge">   
                            </div>
                        </div>

                        <hr>
                        <div>
                            <button class="btn btn-info">Daten aktualisieren</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile">
                    <form id="tab2">
                        <div class="row">
                            <div class="span4">
                                <label>neues Kennwort</label>
                                <input type="password" value="" class="input-xlarge">
                                <label>Wiederholen</label>
                                <input type="password" value="" class="input-xlarge">                                
                            </div>
                        </div>
                        <hr>
                        <div>
                            <button class="btn btn-info">Kennwort &auml;ndern</button>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="group">
                    <form id="tab2">
                        <div class="row">
                            <div class="span4">
                                <label>Gruppe</label>
                                <select name="DropDownGroups" id="DropDownGroup" class="input-xlarge">
                                    <option value="">Administrator</option>
                                    <option value="">Sportchef</option>
                                    <option value="">Verwalter</option>
                                    <option value="">Redakteur</option>
                                </select>
                            </div>

                            <div class="span4">
                                <label>Ausnahmepr&auml;fix</label>
                                <input type="text" value="backend,management,controls" class="input-xlarge">                    
                            </div>
                        </div>
                        <hr>
                        <div>
                            <button class="btn btn-info">Gruppe migrieren</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <?php $this->load->view('sidebar_active_profile'); ?>
    </div>

    <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 id="myModalLabel">Neues Bild hochladen</h3>
        </div>
        <div class="modal-body">
            <p class="error-text">Bitte w&auml;hle ein Bild von deiner Festplatte aus um das momentane zu ersetzen.</p>
            <div class="input-append">
                <input class="span2" id="appendedInputButton" type="text">
                <button class="btn" type="button">Durchsuchen...</button>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Abbrechen</button>
            <button class="btn btn-danger" data-dismiss="modal">Hochladen</button>
        </div>
    </div>

</div>