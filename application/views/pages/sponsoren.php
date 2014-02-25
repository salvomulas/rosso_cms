<div class="container navfix">

	<h3>Sponsoren</h3>
	<hr>

	<div class="row">
		<div class="col-md-3 col-md-push-9">
			<div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Supporter</h3>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <a class="list-group-item active" href="<?php echo base_url(); ?>verein/sponsoren">Sponsoren</a>
                        <a class="list-group-item" href="<?php echo base_url(); ?>">Sponsoringkonzept</a>
                        <a class="list-group-item" href="<?php echo base_url(); ?>verein/passivmitglied">Passivmitgliedschaft</a>
                    </div>
                </div>
            </div>
		</div>
		<div class="col-md-9 col-md-pull-3">

		<?php

		foreach ($sponsors->result() as $row) {

			echo '<div class="well well-lg">';
			echo '<div class="row">';
			echo '<div class="col-md-3 col-sm-3 col-xs-3">';
			echo '<a hreF="http://'.$row->webpage.'/" target="_blank" alt="'.$row->name.'"><img src="'.base_url().'assets/img/sponsors/'.$row->pictureURL.'.png" style="width: 100%; padding-bottom: 10px;"></a>';
			echo '</div>';
			echo '<div class="col-md-9 col-sm-9 col-xs-9">';
			echo '<address>';
			echo '<strong>'.$row->name.'</strong><br>';
			echo $row->address.'<br>';
			echo $row->zipCity.'<br>';
			echo '<a href="http://'.$row->webpage.'" target="_blank">'.$row->webpage.'</a>';
			echo '</address>';
			echo '</div>';
			echo '</div>';
			echo '</div>';

		}

		?>
		
		</div>
	</div>

</div>