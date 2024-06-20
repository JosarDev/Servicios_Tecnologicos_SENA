<?php
$dalTableofertas = array();
$dalTableofertas["id_Oferta"] = array("type"=>3,"varname"=>"id_Oferta", "name" => "id_Oferta", "autoInc" => "1");
$dalTableofertas["Imagen"] = array("type"=>200,"varname"=>"Imagen", "name" => "Imagen", "autoInc" => "0");
$dalTableofertas["Fecha_Inicio"] = array("type"=>7,"varname"=>"Fecha_Inicio", "name" => "Fecha_Inicio", "autoInc" => "0");
$dalTableofertas["Fecha_Fin"] = array("type"=>7,"varname"=>"Fecha_Fin", "name" => "Fecha_Fin", "autoInc" => "0");
$dalTableofertas["Valor_Oferta"] = array("type"=>14,"varname"=>"Valor_Oferta", "name" => "Valor_Oferta", "autoInc" => "0");
$dalTableofertas["fk_id_Servicio"] = array("type"=>3,"varname"=>"fk_id_Servicio", "name" => "fk_id_Servicio", "autoInc" => "0");
$dalTableofertas["id_Oferta"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__ofertas"] = &$dalTableofertas;
?>