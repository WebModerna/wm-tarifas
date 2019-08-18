// Mis scripts administrativos
(function()
{
	jQuery(document).ready(function($){
		//you can now use $ as your jQuery object.
		var body = $( 'body' );
		
		// dentro de esta función $() funcionará como un álias de jQuery()
		$(document).on("ready", wm_edicion);

		function wm_edicion()
		{
			$(".tabla_tarifas__campo__numero").prop("disabled", true);
			$(".tabla_tarifa__boton_editar_fila").on("click", function(e)
			{
				e.preventDefault;
				$(".tabla_tarifas__campo__numero").prop("disabled", false);
			});
		}
	});
}())