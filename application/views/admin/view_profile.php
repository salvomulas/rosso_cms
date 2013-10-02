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
                                <span class="input-xlarge uneditable-input"><?php echo $actualUser->row()->username; ?></span>
                                <label>Nachname</label>
                                <input type="text" value="<?php echo $actualUser->row()->lastName; ?>" class="input-xlarge">
                                <label>Vorname</label>
                                <input type="text" value="<?php echo $actualUser->row()->firstName; ?>" class="input-xlarge">
                                <label>Email</label>
                                <input type="text" value="<?php echo $actualUser->row()->email; ?>" class="input-xlarge">
                            </div>

                            <div class="span4">
                                <label>Facebook</label>
                                <input type="text" value="<?php echo $actualUser->row()->facebook; ?>" class="input-xlarge">
                                <label>Google+</label>
                                <input type="text" value="<?php echo $actualUser->row()->twitter; ?>" class="input-xlarge">
                                <label>Twitter</label>
                                <input type="text" value="<?php echo $actualUser->row()->gplus; ?>" class="input-xlarge">
                                <label>YouTube</label>
                                <input type="text" value="<?php echo $actualUser->row()->youtube; ?>" class="input-xlarge">                                    
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="span4">
                                <label>Addresse</label>
                                <input type="text" value="<?php echo $actualUser->row()->address; ?>" class="input-xlarge">
                                <label>PLZ / Ort</label>
                                <input type="text" value="<?php echo $actualUser->row()->plz; ?>" class="input-xlarge">      
                                <label>Land</label>
                                <input type="text" value="<?php echo $actualUser->row()->country; ?>" class="input-xlarge">   
                            </div>

                            <div class="span4">
                                <label>Telefon privat</label>
                                <input type="text" value="<?php echo $actualUser->row()->phone; ?>" class="input-xlarge">      
                                <label>Telefon mobil</label>
                                <input type="text" value="<?php echo $actualUser->row()->mobile; ?>" class="input-xlarge">
                                <label>Fax</label>
                                <input type="text" value="<?php echo $actualUser->row()->fax; ?>" class="input-xlarge">   
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