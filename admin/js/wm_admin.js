// Mis scripts administrativos
(function()
{
	jQuery(document).ready(function($)
	{
		//you can now use $ as your jQuery object.
		var body = $( 'body' );
		
		// dentro de esta función $() funcionará como un álias de jQuery()
		$(document).on("ready", wm_edicion);

		function wm_edicion()
		{
			// variables de titulares
			let titular_columnas 	= $(".tabla_tarifas__input");
			let titular_filas 		= $(".tabla_tarifas__campo__texto");
			let datulis 			= $(".tabla_tarifas__campo__numero");
			let boton_edicion 		= $(".tabla_tarifa__boton_editar_titulo");
			
			// Edición de los titulares
			titular_columnas.prop("disabled", true);
			titular_filas.prop("disabled", true);
			datulis.prop("disabled", true);


			boton_edicion.on( "click", edicion )
			function edicion(ev)
			{
				ev.preventDefault();
				if( titular_columnas.hasAttribute != "disabled" )
				{
					titular_columnas.prop("disabled", false);
					datulis.prop("disabled", false);
					titular_filas.prop("disabled", false);
					titular_columnas.addClass("tabla_tarifas__input__habilitado");

					boton_edicion.off("click", edicion);
					boton_edicion.on("click", antiedicion);
					function antiedicion(ev)
					{
						ev.preventDefault();
						titular_columnas.prop("disabled", true);
						datulis.prop("disabled", true);
						titular_filas.prop("disabled", true);
						titular_columnas.removeClass("tabla_tarifas__input__habilitado");
						
						boton_edicion.off("click", antiedicion);
						boton_edicion.on("click", edicion);
					}
				}
			};
		}
	});
}())