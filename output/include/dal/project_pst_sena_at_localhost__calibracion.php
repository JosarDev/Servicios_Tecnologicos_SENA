<?php
$dalTablecalibracion = array();
$dalTablecalibracion["id_Calibracion"] = array("type"=>3,"varname"=>"id_Calibracion", "name" => "id_Calibracion", "autoInc" => "1");
$dalTablecalibracion["Instrumento"] = array("type"=>200,"varname"=>"Instrumento", "name" => "Instrumento", "autoInc" => "0");
$dalTablecalibracion["Fabricante"] = array("type"=>200,"varname"=>"Fabricante", "name" => "Fabricante", "autoInc" => "0");
$dalTablecalibracion["Modelo"] = array("type"=>200,"varname"=>"Modelo", "name" => "Modelo", "autoInc" => "0");
$dalTablecalibracion["Serie"] = array("type"=>200,"varname"=>"Serie", "name" => "Serie", "autoInc" => "0");
$dalTablecalibracion["Cog_Interno"] = array("type"=>3,"varname"=>"Cog_Interno", "name" => "Cog_Interno", "autoInc" => "0");
$dalTablecalibracion["IRPC"] = array("type"=>200,"varname"=>"IRPC", "name" => "IRPC", "autoInc" => "0");
$dalTablecalibracion["fk_id_Servicio"] = array("type"=>3,"varname"=>"fk_id_Servicio", "name" => "fk_id_Servicio", "autoInc" => "0");
$dalTablecalibracion["id_Calibracion"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__calibracion"] = &$dalTablecalibracion;
?>