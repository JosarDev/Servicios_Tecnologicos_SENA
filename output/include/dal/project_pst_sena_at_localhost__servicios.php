<?php
$dalTableservicios = array();
$dalTableservicios["id_Servicio"] = array("type"=>3,"varname"=>"id_Servicio", "name" => "id_Servicio", "autoInc" => "1");
$dalTableservicios["Nombre_Servicio"] = array("type"=>200,"varname"=>"Nombre_Servicio", "name" => "Nombre_Servicio", "autoInc" => "0");
$dalTableservicios["Normatividad"] = array("type"=>200,"varname"=>"Normatividad", "name" => "Normatividad", "autoInc" => "0");
$dalTableservicios["Descripcion"] = array("type"=>201,"varname"=>"Descripcion", "name" => "Descripcion", "autoInc" => "0");
$dalTableservicios["Valor_Servicio"] = array("type"=>14,"varname"=>"Valor_Servicio", "name" => "Valor_Servicio", "autoInc" => "0");
$dalTableservicios["TipoServicio"] = array("type"=>129,"varname"=>"TipoServicio", "name" => "TipoServicio", "autoInc" => "0");
$dalTableservicios["Instrumento"] = array("type"=>200,"varname"=>"Instrumento", "name" => "Instrumento", "autoInc" => "0");
$dalTableservicios["Fabricante"] = array("type"=>200,"varname"=>"Fabricante", "name" => "Fabricante", "autoInc" => "0");
$dalTableservicios["Modelo"] = array("type"=>200,"varname"=>"Modelo", "name" => "Modelo", "autoInc" => "0");
$dalTableservicios["Serie"] = array("type"=>200,"varname"=>"Serie", "name" => "Serie", "autoInc" => "0");
$dalTableservicios["Cog_Interno"] = array("type"=>3,"varname"=>"Cog_Interno", "name" => "Cog_Interno", "autoInc" => "0");
$dalTableservicios["IRPC"] = array("type"=>200,"varname"=>"IRPC", "name" => "IRPC", "autoInc" => "0");
$dalTableservicios["Nom_Material"] = array("type"=>200,"varname"=>"Nom_Material", "name" => "Nom_Material", "autoInc" => "0");
$dalTableservicios["Tipo_Material"] = array("type"=>200,"varname"=>"Tipo_Material", "name" => "Tipo_Material", "autoInc" => "0");
$dalTableservicios["Report_Results"] = array("type"=>200,"varname"=>"Report_Results", "name" => "Report_Results", "autoInc" => "0");
$dalTableservicios["Cantidad"] = array("type"=>201,"varname"=>"Cantidad", "name" => "Cantidad", "autoInc" => "0");
$dalTableservicios["Tipo_Probeta"] = array("type"=>200,"varname"=>"Tipo_Probeta", "name" => "Tipo_Probeta", "autoInc" => "0");
$dalTableservicios["fk_id_Laboratorio"] = array("type"=>3,"varname"=>"fk_id_Laboratorio", "name" => "fk_id_Laboratorio", "autoInc" => "0");
$dalTableservicios["id_Servicio"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__servicios"] = &$dalTableservicios;
?>