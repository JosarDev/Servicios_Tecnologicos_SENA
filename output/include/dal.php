<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblproject_pst_sena_at_localhost__calibracion;
	var $tblproject_pst_sena_at_localhost__casos_exito;
	var $tblproject_pst_sena_at_localhost__centros;
	var $tblproject_pst_sena_at_localhost__cliente;
	var $tblproject_pst_sena_at_localhost__cotizacion;
	var $tblproject_pst_sena_at_localhost__departamento;
	var $tblproject_pst_sena_at_localhost__descripcion_servicios;
	var $tblproject_pst_sena_at_localhost__detalles_cotizacion;
	var $tblproject_pst_sena_at_localhost__detalles_servico;
	var $tblproject_pst_sena_at_localhost__ensayo;
	var $tblproject_pst_sena_at_localhost__fabricante;
	var $tblproject_pst_sena_at_localhost__instrumento;
	var $tblproject_pst_sena_at_localhost__laboratorio;
	var $tblproject_pst_sena_at_localhost__nodos;
	var $tblproject_pst_sena_at_localhost__noticias;
	var $tblproject_pst_sena_at_localhost__ofertas;
	var $tblproject_pst_sena_at_localhost__servicios;
	var $tblproject_pst_sena_at_localhost__solicitudes;
	var $tblproject_pst_sena_at_localhost__tipo_material;
	var $tblproject_pst_sena_at_localhost__tiposervicio;
	var $tblproject_pst_sena_at_localhost__usuario;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "calibracion", "varname" => "project_pst_sena_at_localhost__calibracion", "altvarname" => "calibracion", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "casos_exito", "varname" => "project_pst_sena_at_localhost__casos_exito", "altvarname" => "casos_exito", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "centros", "varname" => "project_pst_sena_at_localhost__centros", "altvarname" => "centros", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "cliente", "varname" => "project_pst_sena_at_localhost__cliente", "altvarname" => "cliente", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "cotizacion", "varname" => "project_pst_sena_at_localhost__cotizacion", "altvarname" => "cotizacion", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "departamento", "varname" => "project_pst_sena_at_localhost__departamento", "altvarname" => "departamento", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "descripcion_servicios", "varname" => "project_pst_sena_at_localhost__descripcion_servicios", "altvarname" => "descripcion_servicios", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "detalles_cotizacion", "varname" => "project_pst_sena_at_localhost__detalles_cotizacion", "altvarname" => "detalles_cotizacion", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "detalles_servico", "varname" => "project_pst_sena_at_localhost__detalles_servico", "altvarname" => "detalles_servico", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "ensayo", "varname" => "project_pst_sena_at_localhost__ensayo", "altvarname" => "ensayo", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "fabricante", "varname" => "project_pst_sena_at_localhost__fabricante", "altvarname" => "fabricante", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "instrumento", "varname" => "project_pst_sena_at_localhost__instrumento", "altvarname" => "instrumento", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "laboratorio", "varname" => "project_pst_sena_at_localhost__laboratorio", "altvarname" => "laboratorio", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "nodos", "varname" => "project_pst_sena_at_localhost__nodos", "altvarname" => "nodos", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "noticias", "varname" => "project_pst_sena_at_localhost__noticias", "altvarname" => "noticias", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "ofertas", "varname" => "project_pst_sena_at_localhost__ofertas", "altvarname" => "ofertas", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "servicios", "varname" => "project_pst_sena_at_localhost__servicios", "altvarname" => "servicios", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "solicitudes", "varname" => "project_pst_sena_at_localhost__solicitudes", "altvarname" => "solicitudes", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "tipo_material", "varname" => "project_pst_sena_at_localhost__tipo_material", "altvarname" => "tipo_material", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "tiposervicio", "varname" => "project_pst_sena_at_localhost__tiposervicio", "altvarname" => "tiposervicio", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
		$this->lstTables[] = array("name" => "usuario", "varname" => "project_pst_sena_at_localhost__usuario", "altvarname" => "usuario", "connId" => "project_pst_sena_at_localhost", "schema" => "", "connName" => "project_pst_sena at localhost");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>