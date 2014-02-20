<?php

// Load HTML helper
$this->load->helper('html');

// Generate HTML5 doctype dynamically
echo doctype('html5');

?>

<html>
<head>

<title>AC Rossoneri<?php if(!empty($page_title)) { echo ' | '.$page_title; } ?></title>

<?php

// Dynamic META-tag generation
$meta = array(
        array('name' => 'robots', 'content' => 'no-cache'),
	    array('name' => 'author', 'content' => 'Salvatore Mulas'),
	    array('name' => 'generator', 'content' => 'pixEffect'),
        array('name' => 'description', 'content' => 'AC Rossoneri Lausen'),
        array('name' => 'keywords', 'content' => 'acrossoneri, acr, rossoneri, lausen, acrlausen, rosso, neri'),
        array('name' => 'robots', 'content' => 'no-cache'),
	    array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0'),
        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
    );
	
echo meta($meta);

// Dynamic stylesheet implementation
$css = array(
          'href' => base_url().'assets/css/bootstrap.css',
          'rel' => 'stylesheet',
          'type' => 'text/css',
          'media' => 'screen'
);

$css_summernote = array(
          'href' => base_url().'assets/css/summernote-bootstrap.css',
          'rel' => 'stylesheet',
          'type' => 'text/css'
);

$css_calendar = array(
          'href' => base_url().'assets/css/calendar.css',
          'rel' => 'stylesheet',
          'type' => 'text/css'
);

echo link_tag($css);
echo link_tag($css_summernote);
echo link_tag($css_calendar);

?>

</head>

<body>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/summernote.js"></script>

<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">