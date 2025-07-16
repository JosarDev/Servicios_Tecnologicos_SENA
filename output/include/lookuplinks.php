<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["laboratorio"] ) ) {
			$lookupTableLinks["laboratorio"] = array();
		}
		if( !isset( $lookupTableLinks["laboratorio"]["casos_exito.fk_id_Laboratorio"] )) {
			$lookupTableLinks["laboratorio"]["casos_exito.fk_id_Laboratorio"] = array();
		}
		$lookupTableLinks["laboratorio"]["casos_exito.fk_id_Laboratorio"]["edit"] = array("table" => "casos_exito", "field" => "fk_id_Laboratorio", "page" => "edit");
		if( !isset( $lookupTableLinks["usuario"] ) ) {
			$lookupTableLinks["usuario"] = array();
		}
		if( !isset( $lookupTableLinks["usuario"]["cliente.fk_id_User"] )) {
			$lookupTableLinks["usuario"]["cliente.fk_id_User"] = array();
		}
		$lookupTableLinks["usuario"]["cliente.fk_id_User"]["edit"] = array("table" => "cliente", "field" => "fk_id_User", "page" => "edit");
		if( !isset( $lookupTableLinks["cotizacion"] ) ) {
			$lookupTableLinks["cotizacion"] = array();
		}
		if( !isset( $lookupTableLinks["cotizacion"]["detalles_cotizacion.fk_id_Cotizacion"] )) {
			$lookupTableLinks["cotizacion"]["detalles_cotizacion.fk_id_Cotizacion"] = array();
		}
		$lookupTableLinks["cotizacion"]["detalles_cotizacion.fk_id_Cotizacion"]["edit"] = array("table" => "detalles_cotizacion", "field" => "fk_id_Cotizacion", "page" => "edit");
		if( !isset( $lookupTableLinks["servicios"] ) ) {
			$lookupTableLinks["servicios"] = array();
		}
		if( !isset( $lookupTableLinks["servicios"]["detalles_cotizacion.fk_id_Servicio"] )) {
			$lookupTableLinks["servicios"]["detalles_cotizacion.fk_id_Servicio"] = array();
		}
		$lookupTableLinks["servicios"]["detalles_cotizacion.fk_id_Servicio"]["edit"] = array("table" => "detalles_cotizacion", "field" => "fk_id_Servicio", "page" => "edit");
		if( !isset( $lookupTableLinks["centros"] ) ) {
			$lookupTableLinks["centros"] = array();
		}
		if( !isset( $lookupTableLinks["centros"]["laboratorio.fk_Regional"] )) {
			$lookupTableLinks["centros"]["laboratorio.fk_Regional"] = array();
		}
		$lookupTableLinks["centros"]["laboratorio.fk_Regional"]["edit"] = array("table" => "laboratorio", "field" => "fk_Regional", "page" => "edit");
		if( !isset( $lookupTableLinks["centros"] ) ) {
			$lookupTableLinks["centros"] = array();
		}
		if( !isset( $lookupTableLinks["centros"]["laboratorio.fk_id_centro"] )) {
			$lookupTableLinks["centros"]["laboratorio.fk_id_centro"] = array();
		}
		$lookupTableLinks["centros"]["laboratorio.fk_id_centro"]["edit"] = array("table" => "laboratorio", "field" => "fk_id_centro", "page" => "edit");
		if( !isset( $lookupTableLinks["usuario"] ) ) {
			$lookupTableLinks["usuario"] = array();
		}
		if( !isset( $lookupTableLinks["usuario"]["laboratorio.fk_id_User"] )) {
			$lookupTableLinks["usuario"]["laboratorio.fk_id_User"] = array();
		}
		$lookupTableLinks["usuario"]["laboratorio.fk_id_User"]["edit"] = array("table" => "laboratorio", "field" => "fk_id_User", "page" => "edit");
		if( !isset( $lookupTableLinks["laboratorio"] ) ) {
			$lookupTableLinks["laboratorio"] = array();
		}
		if( !isset( $lookupTableLinks["laboratorio"]["noticias.fk_id_Laboratorio"] )) {
			$lookupTableLinks["laboratorio"]["noticias.fk_id_Laboratorio"] = array();
		}
		$lookupTableLinks["laboratorio"]["noticias.fk_id_Laboratorio"]["edit"] = array("table" => "noticias", "field" => "fk_id_Laboratorio", "page" => "edit");
		if( !isset( $lookupTableLinks["servicios"] ) ) {
			$lookupTableLinks["servicios"] = array();
		}
		if( !isset( $lookupTableLinks["servicios"]["ofertas.fk_id_Servicio"] )) {
			$lookupTableLinks["servicios"]["ofertas.fk_id_Servicio"] = array();
		}
		$lookupTableLinks["servicios"]["ofertas.fk_id_Servicio"]["edit"] = array("table" => "ofertas", "field" => "fk_id_Servicio", "page" => "edit");
		if( !isset( $lookupTableLinks["tiposervicio"] ) ) {
			$lookupTableLinks["tiposervicio"] = array();
		}
		if( !isset( $lookupTableLinks["tiposervicio"]["servicios.Tipología"] )) {
			$lookupTableLinks["tiposervicio"]["servicios.Tipología"] = array();
		}
		$lookupTableLinks["tiposervicio"]["servicios.Tipología"]["edit"] = array("table" => "servicios", "field" => "Tipología", "page" => "edit");
		if( !isset( $lookupTableLinks["servicios"] ) ) {
			$lookupTableLinks["servicios"] = array();
		}
		if( !isset( $lookupTableLinks["servicios"]["solicitudes.fk_id_Servicio"] )) {
			$lookupTableLinks["servicios"]["solicitudes.fk_id_Servicio"] = array();
		}
		$lookupTableLinks["servicios"]["solicitudes.fk_id_Servicio"]["edit"] = array("table" => "solicitudes", "field" => "fk_id_Servicio", "page" => "edit");
		if( !isset( $lookupTableLinks["departamento"] ) ) {
			$lookupTableLinks["departamento"] = array();
		}
		if( !isset( $lookupTableLinks["departamento"]["centros.id_regional"] )) {
			$lookupTableLinks["departamento"]["centros.id_regional"] = array();
		}
		$lookupTableLinks["departamento"]["centros.id_regional"]["edit"] = array("table" => "centros", "field" => "id_regional", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_material"] ) ) {
			$lookupTableLinks["tipo_material"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_material"]["ensayo.Tipo_Material"] )) {
			$lookupTableLinks["tipo_material"]["ensayo.Tipo_Material"] = array();
		}
		$lookupTableLinks["tipo_material"]["ensayo.Tipo_Material"]["edit"] = array("table" => "ensayo", "field" => "Tipo_Material", "page" => "edit");
		if( !isset( $lookupTableLinks["instrumento"] ) ) {
			$lookupTableLinks["instrumento"] = array();
		}
		if( !isset( $lookupTableLinks["instrumento"]["calibracion.Instrumento"] )) {
			$lookupTableLinks["instrumento"]["calibracion.Instrumento"] = array();
		}
		$lookupTableLinks["instrumento"]["calibracion.Instrumento"]["edit"] = array("table" => "calibracion", "field" => "Instrumento", "page" => "edit");
		if( !isset( $lookupTableLinks["fabricante"] ) ) {
			$lookupTableLinks["fabricante"] = array();
		}
		if( !isset( $lookupTableLinks["fabricante"]["calibracion.Fabricante"] )) {
			$lookupTableLinks["fabricante"]["calibracion.Fabricante"] = array();
		}
		$lookupTableLinks["fabricante"]["calibracion.Fabricante"]["edit"] = array("table" => "calibracion", "field" => "Fabricante", "page" => "edit");
		if( !isset( $lookupTableLinks["servicios"] ) ) {
			$lookupTableLinks["servicios"] = array();
		}
		if( !isset( $lookupTableLinks["servicios"]["calibracion.fk_id_Servicio"] )) {
			$lookupTableLinks["servicios"]["calibracion.fk_id_Servicio"] = array();
		}
		$lookupTableLinks["servicios"]["calibracion.fk_id_Servicio"]["edit"] = array("table" => "calibracion", "field" => "fk_id_Servicio", "page" => "edit");
		if( !isset( $lookupTableLinks["tiposervicio"] ) ) {
			$lookupTableLinks["tiposervicio"] = array();
		}
		if( !isset( $lookupTableLinks["tiposervicio"]["detalles_servico.fk_T_Servicio"] )) {
			$lookupTableLinks["tiposervicio"]["detalles_servico.fk_T_Servicio"] = array();
		}
		$lookupTableLinks["tiposervicio"]["detalles_servico.fk_T_Servicio"]["edit"] = array("table" => "detalles_servico", "field" => "fk_T_Servicio", "page" => "edit");
		if( !isset( $lookupTableLinks["descripcion_servicios"] ) ) {
			$lookupTableLinks["descripcion_servicios"] = array();
		}
		if( !isset( $lookupTableLinks["descripcion_servicios"]["detalles_servico.Nombre_Servicio"] )) {
			$lookupTableLinks["descripcion_servicios"]["detalles_servico.Nombre_Servicio"] = array();
		}
		$lookupTableLinks["descripcion_servicios"]["detalles_servico.Nombre_Servicio"]["edit"] = array("table" => "detalles_servico", "field" => "Nombre_Servicio", "page" => "edit");
		if( !isset( $lookupTableLinks["descripcion_servicios"] ) ) {
			$lookupTableLinks["descripcion_servicios"] = array();
		}
		if( !isset( $lookupTableLinks["descripcion_servicios"]["detalles_servico.Valor_Servicio"] )) {
			$lookupTableLinks["descripcion_servicios"]["detalles_servico.Valor_Servicio"] = array();
		}
		$lookupTableLinks["descripcion_servicios"]["detalles_servico.Valor_Servicio"]["edit"] = array("table" => "detalles_servico", "field" => "Valor_Servicio", "page" => "edit");
		if( !isset( $lookupTableLinks["laboratorio"] ) ) {
			$lookupTableLinks["laboratorio"] = array();
		}
		if( !isset( $lookupTableLinks["laboratorio"]["detalles_servico.fk_id_Laboratorio"] )) {
			$lookupTableLinks["laboratorio"]["detalles_servico.fk_id_Laboratorio"] = array();
		}
		$lookupTableLinks["laboratorio"]["detalles_servico.fk_id_Laboratorio"]["edit"] = array("table" => "detalles_servico", "field" => "fk_id_Laboratorio", "page" => "edit");
}

?>