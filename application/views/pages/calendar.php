<div class="container navfix">

<h3>Kalender</h3>

<div id="calendar"></div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/calendar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/underscore-min.js"></script>

<script type="text/javascript">

var calendar = $('#calendar').calendar({events_source: 'assets/api/events.json.php'});

</script>
   
</div>