<?php
$dalTableusuario = array();
$dalTableusuario["id_User"] = array("type"=>3,"varname"=>"id_User", "name" => "id_User", "autoInc" => "1");
$dalTableusuario["Usuario"] = array("type"=>200,"varname"=>"Usuario", "name" => "Usuario", "autoInc" => "0");
$dalTableusuario["Password"] = array("type"=>3,"varname"=>"Password", "name" => "Password", "autoInc" => "0");
$dalTableusuario["Rol"] = array("type"=>129,"varname"=>"Rol", "name" => "Rol", "autoInc" => "0");
$dalTableusuario["id_User"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__usuario"] = &$dalTableusuario;
?>