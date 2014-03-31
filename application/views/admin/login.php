<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AC Rossoneri | Verwaltungskonsole</title>

    <!-- Core CSS - Include with every page -->
    <link href="assets/css/admin.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <img class="img-responsive" src="assets/img/offside_cms.png">
                </div>
                <div class="panel-body">
                    <form role="form">
                        <fieldset>
                            <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Warnung!</strong> Deine IP Adresse ist f&uuml;r den Login nicht freigeschaltet!
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Benutzername" name="user" type="user" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="remember">Erinnere dich an mich
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <a href="" class="btn btn-lg btn-success btn-block">Login</a>
                        </fieldset>
                    </form>
                </div>
            </div>
            <hr>
            <p class="small">pixEffect OffsideCMS v0.1 | Developed by Salvatore Mulas</p>
        </div>
    </div>
</div>

<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/js/sb-admin.js"></script>

</body>

</html>
