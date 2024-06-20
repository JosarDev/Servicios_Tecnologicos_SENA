<?php
$dalTablecotizacion = array();
$dalTablecotizacion["id_Cotizacion"] = array("type"=>3,"varname"=>"id_Cotizacion", "name" => "id_Cotizacion", "autoInc" => "1");
$dalTablecotizacion["Valor_Total_Cot"] = array("type"=>14,"varname"=>"Valor_Total_Cot", "name" => "Valor_Total_Cot", "autoInc" => "0");
$dalTablecotizacion["fk_id_Cliente"] = array("type"=>3,"varname"=>"fk_id_Cliente", "name" => "fk_id_Cliente", "autoInc" => "0");
$dalTablecotizacion["id_Cotizacion"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__cotizacion"] = &$dalTablecotizacion;
?>