<hr>
<div class="container">
    <div class="row">
        <div class="span8">
            <h2>Mein Profil</h2>

            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab">Pers&ouml;nliche Daten</a></li>
                <li><a href="#profile" data-toggle="tab">Kennwort &auml;ndern</a></li>
                <li><a href="#group" data-toggle="tab">Gruppenzugeh&ouml;rigkeit</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane active in" id="home">
                    <form id="tab">
                        <div class="row">
                            <div class="span4">
                                <label>Username</label>
                                <input type="text" value="salvo" class="input-xlarge">
                                <label>Nachname</label>
                                <input type="text" value="Mulas" class="input-xlarge">
                                <label>Vorname</label>
                                <input type="text" value="Salvatore" class="input-xlarge">
                                <label>Email</label>
                                <input type="text" value="marketing@acrossoneri.ch" class="input-xlarge">
                            </div>

                            <div class="span4">
                                <label>Facebook</label>
                                <input type="text" value="" class="input-xlarge">
                                <label>Google+</label>
                                <input type="text" value="" class="input-xlarge">
                                <label>Twitter</label>
                                <input type="text" value="twitter.com/salvomulas" class="input-xlarge">
                                <label>YouTube</label>
                                <input type="text" value="youtube.com/salvomulas" class="input-xlarge">                                    
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="span4">
                                <label>Addresse</label>
                                <textarea value="Smith" rows="3" class="input-xlarge">Geissbrunnenweg 22</textarea>
                                <label>PLZ / Ort</label>
                                <input type="text" value="4452 Itingen" class="input-xlarge">      
                                <label>Land</label>
                                <input type="text" value="Schweiz" class="input-xlarge">   
                            </div>

                            <div class="span4">
                                <label>Telefon privat</label>
                                <input type="text" value="061 921 04 89" class="input-xlarge">      
                                <label>Telefon mobil</label>
                                <input type="text" value="079 291 55 77" class="input-xlarge">
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
                                <label>altes Kennwort</label>
                                <input type="password" value="irgendetwas" class="input-xlarge">
                            </div>

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
                        <div class="alert alert-error">
                            <a class="close" data-dismiss="alert" href="#">x</a>Du kannst deine eigene Gruppenzugeh&ouml;rigkeit nicht &auml;ndern!
                        </div>
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
                                <input type="text" value="" class="input-xlarge">                    
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
        <?php $this->load->view('sidebar_profile'); ?>
    </div>

</div>