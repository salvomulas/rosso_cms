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
          'href' => base_url().'assets/css/bootstrap.dark.css',
          'rel' => 'stylesheet',
          'type' => 'text/css',
          'media' => 'screen'
);

$css_responsive = array(
          'href' => base_url().'assets/css/bootstrap-responsive.css',
          'rel' => 'stylesheet',
          'type' => 'text/css',
);

echo link_tag($css);
echo link_tag($css_responsive);

?>

</head>

<body>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>