<?php
class AuditTrailTable
{
	var $logTableName="";
	var $params;

	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $strUserinfo="change userinfo";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $attLogin=0;
	var $timeLogin=0;
	var $maxFieldLength;

	/**
	 * @type Connection
	 */
	protected $connection;

	function __construct()
	{
		global $cman;
		global $auditMaxFieldLength;

		$this->connection = $cman->getForAudit();
		$userid="";
		if( Security::getUserName())
			$userid = Security::getUserName();

		$this->params=array($_SERVER["REMOTE_ADDR"],$userid);

		$this->maxFieldLength = $auditMaxFieldLength;
	}

    function LogLogin($pUsername)
    {
    }

    function LogLoginFailed($pUsername)
    {
    }

    function LogLogout()
    {
    }

    function LogChPassword( $username )
    {
    }

    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [new]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;

			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strAdd, $str);
		}
		return $retval;
	}
	
	/**
	* not used yet 
	* format audit values as a string
	 * @param Array $newValues
	 * @param Array $oldValues
	 * @param Array include - list of fields to include into return value
	 * @return String
	 */
	function formatChangedValues( $pSet, $newValues, $oldValues, $include = null ) {
		
		$strings = array();
		foreach($newValues as $kefieldy => $value )
		{
			if( $include ) {
				//	ASP
				if( !isset( $include[ $field ] ) ) {
					continue;
				}
			}

			$type = $pSet->getFieldType( $field );
			if( IsBinaryType($type) )
				continue;
			
			if( IsDateFieldType($type) ) {
				$newValue = format_datetime_custom(db2time( $newValues[$field] ),"yyyy-MM-dd HH:mm:ss");
				$oldValue = format_datetime_custom(db2time( $oldValues[$field] ),"yyyy-MM-dd HH:mm:ss");
			} else {
				$newValue = $newValues[$field];
				$oldValue = $oldValues[$field];
			}
			
			if( $newValue == $oldValue ) {
				continue;
			}
			
			$strOld = $field . " [old]: " . $this->formatValue( $type, $oldValue );
			$strNew = $field . " [new]: " . $this->formatValue( $type, $newValue );
			$string[] = $strOld . "\r\n" . $strNew;

		}
		return implode( "\r\n", $strings );
	}

	function formatValue( $type, $value ) {
		if(IsBinaryType($type)) {
			return "<binary value>"; 
		} else {
			$value = str_replace(array("\r\n","\n","\t")," ", $value );
			return $this->getMaxLengthSubstr( $value );
		}
	}

    function LogEdit($str_table,$newvalues,$oldvalues, $keys )
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($newvalues as $idx=>$val)
				{
					if(array_key_exists($idx,$keys))
					{
						if($val!=$oldvalues[$idx])
						{
							$str.=$idx." [old]: ".$oldvalues[$idx]."\r\n";
							$str.=$idx." [new]: ".$val."\r\n";
						}
						else
							$str.=$idx." : ".$val."\r\n";
					}
				}
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";

						$strFields.=$idx." [new]: ";
						if(IsBinaryType($type))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$newvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
				$v="";
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;

			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strEdit, $str);
		}
		return $retval;
    }

    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$str="";
			if(count($keys)>0)
			{
				$str.=$this->strKeysHeader."\r\n";
				foreach($keys as $idx=>$val)
					$str.=$idx." : ".$val."\r\n";
			}
			$strFields="";
			if($this->logValueEnable($str_table))
			{
				$v="";
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$strFields.=$idx." [old]: ";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$strFields.=$v."\r\n";
					}
				}
			}
			if($strFields!="")
				$str.=$this->strFieldsHeader."\r\n".$strFields;

			$this->insert(now(), $this->params[0], $this->params[1], $str_table, $this->strDelete, $str);
		}
		return $retval;
    }

    function LogAddEvent($message,$description="",$stable="")
    {
		global $globalEvents;
		$retval=true;
		$table=$stable;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			$this->insert(now(), $this->params[0], $this->params[1], $stable, $message, $description);
		}
		return $retval;
    }

    function LoginSuccessful()
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]).
				" AND " .$this->connection->addFieldWrappers("action"). "=" .$this->connection->prepareString($this->strAccess);
			$sql = "DELETE FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where;

			$this->connection->exec( $sql );
		}

    }

    function LoginUnsuccessful($pUsername)
    {
		if($this->attLogin>0 && $this->timeLogin>0)
		{
			$this->insert(now(), $_SERVER["REMOTE_ADDR"], $pUsername, "", $this->strAccess, "");
		}
    }

	function LoginAccess()
	{
		if( $this->attLogin > 0 && $this->timeLogin > 0 )
		{
			$where = $this->connection->addFieldWrappers("ip"). "=" .$this->connection->prepareString($_SERVER["REMOTE_ADDR"]).
				" AND " .$this->connection->addFieldWrappers("action"). "=".$this->connection->prepareString("access");
			$orderBy = $this->connection->addFieldWrappers("id")." asc";
			$sql = "SELECT * FROM " .$this->connection->addTableWrappers( $this->logTableName ). " WHERE " .$where. " ORDER BY " .$orderBy;

			$qResult = $this->connection->query( $sql );

			$i = 0;
			while( $data = $qResult->fetchAssoc() )
			{
				if( secondsPassedFrom($data["datetime"]) / 60 <= $this->timeLogin )
				{
					if($i==0)
						$firstAccess=$data["datetime"];
					$i+=1;
				}
			}

			if( $i >= $this->attLogin )
				return ceil($this->timeLogin-secondsPassedFrom($firstAccess) / 60);
		}

		return false;
	}

	function logValueEnable($table)
	{
		if($table=="casos_exito")
		{
			return false;
		}
		if($table=="cliente")
		{
			return false;
		}
		if($table=="cotizacion")
		{
			return false;
		}
		if($table=="detalles_cotizacion")
		{
			return false;
		}
		if($table=="laboratorio")
		{
			return false;
		}
		if($table=="noticias")
		{
			return false;
		}
		if($table=="ofertas")
		{
			return false;
		}
		if($table=="servicios")
		{
			return false;
		}
		if($table=="solicitudes")
		{
			return false;
		}
		if($table=="usuario")
		{
			return false;
		}
		if($table=="nodos")
		{
			return false;
		}
		if($table=="centros")
		{
			return false;
		}
		if($table=="tipo_material")
		{
			return false;
		}
		if($table=="instrumento")
		{
			return false;
		}
		if($table=="fabricante")
		{
			return false;
		}
		if($table=="ensayo")
		{
			return false;
		}
		if($table=="calibracion")
		{
			return false;
		}
		if($table=="departamento")
		{
			return false;
		}
		if($table=="tiposervicio")
		{
			return false;
		}
		if($table=="detalles_servico")
		{
			return false;
		}
		if($table=="descripcion_servicios")
		{
			return false;
		}
	}

	protected function insert($datetime, $ip, $user, $table, $action, $description)
	{
		$sql = "INSERT INTO " .$this->connection->addTableWrappers( $this->logTableName ).
			" (" .$this->connection->addFieldWrappers("datetime").
			"," .$this->connection->addFieldWrappers("ip").
			"," .$this->connection->addFieldWrappers("user").
			"," .$this->connection->addFieldWrappers("table").
			"," .$this->connection->addFieldWrappers("action").
			"," .$this->connection->addFieldWrappers("description").
			") VALUES (" .$this->connection->addDateQuotes($datetime).
			"," .$this->connection->prepareString($ip).
			"," .$this->connection->prepareString($user).
			"," .$this->connection->prepareString($table).
			"," .$this->connection->prepareString($action).
			"," .$this->connection->prepareString($description).
			")";

		return $this->connection->exec( $sql );
	}

	protected function getMaxLengthSubstr( $value )
	{
		if( $this->maxFieldLength && strlen($value) > $this->maxFieldLength )
			return runner_substr($value, 0, $this->maxFieldLength);

		return $value;
	}
}

class AuditTrailFile
{
	var $logfile="audit.log";
	var $strLogin="login";
	var $strFailLogin="failed login";
	var $strLogout="logout";
	var $strChPass="change password";
	var $strAdd="add";
	var $strEdit="edit";
	var $strDelete="delete";
	var $strAccess="access";
	var $strKeysHeader="---Keys";
	var $strFieldsHeader="---Fields";
	var $columnDate="Date";
	var $columnTime="Time";
	var $columnIP="IP";
	var $columnUser="User";
	var $columnTable="Table";
	var $columnAction="Action";
	var $columnKey="Key field";
	var $columnField="Field";
	var $columnOldValue="Old value";
	var $columnNewValue="New value";
	var $params;
	var $maxFieldLength;

	function __construct()
	{
		global $auditMaxFieldLength;

		$userid = "";
		if(@Security::getUserName())
			$userid = Security::getUserName();

		$this->params = array($_SERVER["REMOTE_ADDR"], $userid);

		$this->maxFieldLength = $auditMaxFieldLength;
	}

    function LogLogin($pUsername)
    {
		    }

    function LogLoginFailed($pUsername)
    {
		    }

    function LogLogout()
    {
    }

    function LogChPassword( $username )
    {
    }

    function LogAdd($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strAdd, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strAdd.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					if($val!="" && !array_key_exists($idx,$keys))
					{
						$v="";
						if(IsBinaryType($pSet->getFieldType($idx)))
							$v="<binary value>"."\r\n";
						else
						{
							$v = str_replace(array("\r\n","\n","\t")," ",$val);
							$v = $this->getMaxLengthSubstr( $v );
						}
						$str_add.=$str.chr(9).$idx.chr(9).chr(9).$v."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";

			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }

    function LogEdit($str_table,$newvalues,$oldvalues,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strEdit, $this->params, $table, $keys, $newvalues, $oldvalues);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}

			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strEdit.chr(9).$key;
			$putsValue=true;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($newvalues as $idx=>$val)
				{
					$type=$pSet->getFieldType($idx);
					if(IsBinaryType($type))
						continue;
					if(IsDateFieldType($type))
					{
						$newvalue=format_datetime_custom(db2time($newvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
						$oldvalue=format_datetime_custom(db2time($oldvalues[$idx]),"yyyy-MM-dd HH:mm:ss");
					}
					else
					{
						$newvalue=$newvalues[$idx];
						$oldvalue=$oldvalues[$idx];
					}
					if($newvalue!=$oldvalue)
					{
						$v1="";
						if(IsBinaryType($type))
							$v1="<binary value>";
						else
						{
							$v1 = str_replace(array("\r\n","\n","\t")," ",$oldvalue);
							$v = $this->getMaxLengthSubstr( $v );
						}

						$v2="";
						if(IsBinaryType($type))
							$v2="<binary value>";
						else
						{
							$v2 = str_replace(array("\r\n","\n","\t")," ",$newvalue);
							$v2 = $this->getMaxLengthSubstr( $v2 );
						}
						$str_add.=$str.chr(9).$idx.chr(9).$v1.chr(9).$v2."\r\n";
					}
				}
			}
			else
				$str_add.=$str."\r\n";
			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }

    function LogDelete($str_table,$values,$keys)
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$pSet = new ProjectSettings($str_table);
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($this->strDelete, $this->params, $table, $keys, $values, $arr);
		if($retval)
		{
			if(count($keys)>0)
			{
				$key="";
				foreach($keys as $idx=>$val)
				{
					if($key!="")
						$key.=",";
					$key.=$val;
				}
			}
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$this->params[0].chr(9).$this->params[1].chr(9).$table.chr(9).$this->strDelete.chr(9).$key;
			$str_add="";
			if($this->logValueEnable($str_table))
			{
				foreach($values as $idx=>$val)
				{
					$v="";
					if(IsBinaryType($pSet->getFieldType($idx)))
						$v="<binary value>";
					else
					{
						$v = str_replace(array("\r\n","\n","\t")," ",$val);
						$v = $this->getMaxLengthSubstr( $v );
					}
					$str_add.=$str.chr(9).$idx.chr(9).$v."\r\n";
				}
			}
			else
				$str_add=$str."\r\n";

			$this->writeToLogFile( $str_add );
		}
		return $retval;
    }

	function writeToLogFile( $str )
	{
		$p=strrpos($this->logfile,".");
		$logfileName=runner_substr($this->logfile,0,$p);
		$logfileExt=runner_substr($this->logfile,$p+1, strlen($this->logfile)-1);
		$tn=$logfileName."_".format_datetime_custom(db2time(now()),"yyyyMMdd").".".$logfileExt;

		$fullname = getabspath($tn);
		$fsize = 0;
		if (file_exists($fullname)){
			$fsize = filesize($fullname);
		}
		$str_to_append = "";
		if( !$fsize )
		{
			$str_to_append = $this->columnDate.chr(9).$this->columnTime.chr(9).$this->columnIP.chr(9).$this->columnUser.chr(9).$this->columnTable.chr(9).$this->columnAction.chr(9).$this->columnKey.chr(9).$this->columnField.chr(9).$this->columnOldValue.chr(9).$this->columnNewValue."\r\n";
		}
		$str_to_append .= $str;
		append_to_file( $fullname, $str_to_append );

	}

	function LogAddEvent($message,$description="",$str_table="")
    {
		global $globalEvents;
		$retval=true;
		$table=$str_table;
		$arr=array();
		if($globalEvents->exists("OnAuditLog"))
			$retval=$globalEvents->OnAuditLog($message, $this->params, $table, $arr, $arr, $arr);
		if($retval)
		{
			$str=format_datetime_custom(db2time(now()),"MMM dd,yyyy").chr(9).format_datetime_custom(db2time(now()),"HH:mm:ss").chr(9).$params[0].chr(9).$params[1].chr(9).$table.chr(9).$message.chr(9).$description."\r\n";
			$this->writeToLogFile( $str );
		}
		return $retval;
    }

    function LoginAccess()
	{
		return false;
	}

	function LoginSuccessful()
    {
		return true;
    }

    function LoginUnsuccessful($pUsername)
    {
		return true;
	}

	function logValueEnable($table)
	{
		if($table=="casos_exito")
		{
			return false;
		}
		if($table=="cliente")
		{
			return false;
		}
		if($table=="cotizacion")
		{
			return false;
		}
		if($table=="detalles_cotizacion")
		{
			return false;
		}
		if($table=="laboratorio")
		{
			return false;
		}
		if($table=="noticias")
		{
			return false;
		}
		if($table=="ofertas")
		{
			return false;
		}
		if($table=="servicios")
		{
			return false;
		}
		if($table=="solicitudes")
		{
			return false;
		}
		if($table=="usuario")
		{
			return false;
		}
		if($table=="nodos")
		{
			return false;
		}
		if($table=="centros")
		{
			return false;
		}
		if($table=="tipo_material")
		{
			return false;
		}
		if($table=="instrumento")
		{
			return false;
		}
		if($table=="fabricante")
		{
			return false;
		}
		if($table=="ensayo")
		{
			return false;
		}
		if($table=="calibracion")
		{
			return false;
		}
		if($table=="departamento")
		{
			return false;
		}
		if($table=="tiposervicio")
		{
			return false;
		}
		if($table=="detalles_servico")
		{
			return false;
		}
		if($table=="descripcion_servicios")
		{
			return false;
		}
	}

	protected function getMaxLengthSubstr( $value )
	{
		if( $this->maxFieldLength && strlen($value) > $this->maxFieldLength )
			return runner_substr($value, 0, $this->maxFieldLength);

		return $value;
	}
}
?>