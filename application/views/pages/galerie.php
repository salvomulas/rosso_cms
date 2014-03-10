<div class="container navfix">

<?php

for ($i = 0; $i<sizeof($object->data); $i++) {

	echo '<div class="col-md-4 col-sm-6 col-xs-12">';
	echo '<div class="well">';
	echo '<img src="https://graph.facebook.com/'.$object->data[$i]->cover_photo.'/picture" style="width: 100%; max-height: 200px;">';
	echo '<h4>'.$object->data[$i]->name.'</h4>';
	echo '<h5>'.$object->data[$i]->description.'</h5>';
	print_r ($object->data[$i]);
	echo '</div></div>';
}

?>

	<div class="col-md-4 col-sm-6 col-xs-12">

		<

	</div>

</div>