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
			$("#boton_editar_titulo").on("click", puchito);
			$(".boton_editar").on("click", puchito2);

			function puchito()
			{
				if( $(".room_title").attr("disabled", true) )
				{
					$(".room_title").attr("disabled", false);
					console.log("lo habilite");
				}
				else
				{
					console.log("lo deshabilite");
					$(".room_title").attr("disabled", true);
				}
			}
			function puchito2()
			{
				if( $(".campos_tarifas").attr("disabled", true) )
				{
					$(".campos_tarifas").attr("disabled", false);
					console.log("lo habilite");
				}
			}
		}
	});
}())