<?php
$constante = "casaflor";
?>
<div class="wrap">
	<header class="primary">
		<h1><?php _e( 'Planilla de Tarifas y Temporadas', $constante ) ?></h1>
	</header>
	<form action="options.php" method="post">
		<table class="wp-list-table widefat fixed striped media">
			<caption>
				<h3><?php _e('Colocar los títulos y tipos de Habitaciones', $constante);?></h3>
			</caption>
			<thead>
				<th>Habitaciones o Cabañas</th>
				<th>
					<label for="temporada_alta">Título</label>
					<input class="input-search" type="text" name="temporada_alta" id="temporada_alta" placeholder="temporadita" />
				</th>
				<th>
					<label for="temporada_media">Título</label>
					<input class="input-search" type="text" name="temporada_media" id="temporada_meida" placeholder="temporadita" />
				</th>
				<th>
					<label for="temporada_baja">Título</label>
					<input type="text" name="temporada_baja" id="temporada_baja" placeholder="temporadita" />
				</th>
				<th>
					<label for="temporada__">Título</label>
					<input type="text" name="temporada__" id="temporada__" placeholder="temporadita" />
				</th>
			</thead>
			<tbody>
				<tr>
					<td>1 Persona</td>
					<td>$23</td>
					<td>$23</td>
					<td>$23</td>
					<td>$2387</td>
				</tr>
				<tr>
					<td>2 Personas</td>
					<td>$23</td>
					<td>$23</td>
					<td>$23</td>
					<td>$987</td>
				</tr>
			</tbody>
		</table>

		<div>
			<hr />
			<input type="submit" class="button-primary" name="update" value="<?php esc_attr_e( 'Guardar Opciones', 'text_domain' ); ?>" />
		</div>
	</form>
</div>