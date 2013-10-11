<script>

    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300
        });
    });

</script>

<hr>
<div class="container">
    <h2>Matchbericht bearbeiten</h2>
    <hr>
    <div class="row">
        <div class="span4 pull-right">
            <div class="well">
                <h4>Sichern</h4>
            </div>
        </div>

        <div class="span8">
            <input class="input-xxxlarge" type="text" value="<?php echo $matchReport->title; ?>">

            <div id="summernote"></div>

        </div>

    </div>
</div>