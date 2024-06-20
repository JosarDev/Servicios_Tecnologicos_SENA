<?php
$dalTablecliente = array();
$dalTablecliente["id_Cliente"] = array("type"=>3,"varname"=>"id_Cliente", "name" => "id_Cliente", "autoInc" => "1");
$dalTablecliente["TipoCliente"] = array("type"=>129,"varname"=>"TipoCliente", "name" => "TipoCliente", "autoInc" => "0");
$dalTablecliente["Num_Identificacion"] = array("type"=>3,"varname"=>"Num_Identificacion", "name" => "Num_Identificacion", "autoInc" => "0");
$dalTablecliente["Nombres"] = array("type"=>200,"varname"=>"Nombres", "name" => "Nombres", "autoInc" => "0");
$dalTablecliente["Apellidos"] = array("type"=>200,"varname"=>"Apellidos", "name" => "Apellidos", "autoInc" => "0");
$dalTablecliente["Genero"] = array("type"=>129,"varname"=>"Genero", "name" => "Genero", "autoInc" => "0");
$dalTablecliente["Celular"] = array("type"=>3,"varname"=>"Celular", "name" => "Celular", "autoInc" => "0");
$dalTablecliente["Correo"] = array("type"=>200,"varname"=>"Correo", "name" => "Correo", "autoInc" => "0");
$dalTablecliente["Direccion"] = array("type"=>200,"varname"=>"Direccion", "name" => "Direccion", "autoInc" => "0");
$dalTablecliente["NombreEmpresa"] = array("type"=>200,"varname"=>"NombreEmpresa", "name" => "NombreEmpresa", "autoInc" => "0");
$dalTablecliente["NombreEmprendimiento"] = array("type"=>200,"varname"=>"NombreEmprendimiento", "name" => "NombreEmprendimiento", "autoInc" => "0");
$dalTablecliente["fk_id_User"] = array("type"=>3,"varname"=>"fk_id_User", "name" => "fk_id_User", "autoInc" => "0");
$dalTablecliente["id_Cliente"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__cliente"] = &$dalTablecliente;
?>