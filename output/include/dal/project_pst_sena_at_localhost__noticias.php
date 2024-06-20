<?php
$dalTablenoticias = array();
$dalTablenoticias["id_Noticia"] = array("type"=>3,"varname"=>"id_Noticia", "name" => "id_Noticia", "autoInc" => "1");
$dalTablenoticias["Imagen"] = array("type"=>200,"varname"=>"Imagen", "name" => "Imagen", "autoInc" => "0");
$dalTablenoticias["Titulo"] = array("type"=>200,"varname"=>"Titulo", "name" => "Titulo", "autoInc" => "0");
$dalTablenoticias["Fecha_Publicacion"] = array("type"=>7,"varname"=>"Fecha_Publicacion", "name" => "Fecha_Publicacion", "autoInc" => "0");
$dalTablenoticias["Descripcion"] = array("type"=>201,"varname"=>"Descripcion", "name" => "Descripcion", "autoInc" => "0");
$dalTablenoticias["fk_id_Laboratorio"] = array("type"=>3,"varname"=>"fk_id_Laboratorio", "name" => "fk_id_Laboratorio", "autoInc" => "0");
$dalTablenoticias["id_Noticia"]["key"]=true;

$dal_info["project_pst_sena_at_localhost__noticias"] = &$dalTablenoticias;
?>