<?php
$tdatadetalles_cotizacion = array();
$tdatadetalles_cotizacion[".searchableFields"] = array();
$tdatadetalles_cotizacion[".ShortName"] = "detalles_cotizacion";
$tdatadetalles_cotizacion[".OwnerID"] = "";
$tdatadetalles_cotizacion[".OriginalTable"] = "detalles_cotizacion";


$tdatadetalles_cotizacion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadetalles_cotizacion[".originalPagesByType"] = $tdatadetalles_cotizacion[".pagesByType"];
$tdatadetalles_cotizacion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadetalles_cotizacion[".originalPages"] = $tdatadetalles_cotizacion[".pages"];
$tdatadetalles_cotizacion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadetalles_cotizacion[".originalDefaultPages"] = $tdatadetalles_cotizacion[".defaultPages"];

//	field labels
$fieldLabelsdetalles_cotizacion = array();
$fieldToolTipsdetalles_cotizacion = array();
$pageTitlesdetalles_cotizacion = array();
$placeHoldersdetalles_cotizacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalles_cotizacion["Spanish"] = array();
	$fieldToolTipsdetalles_cotizacion["Spanish"] = array();
	$placeHoldersdetalles_cotizacion["Spanish"] = array();
	$pageTitlesdetalles_cotizacion["Spanish"] = array();
	$fieldLabelsdetalles_cotizacion["Spanish"]["id_Det_Cot"] = "Id Det Cot";
	$fieldToolTipsdetalles_cotizacion["Spanish"]["id_Det_Cot"] = "";
	$placeHoldersdetalles_cotizacion["Spanish"]["id_Det_Cot"] = "";
	$fieldLabelsdetalles_cotizacion["Spanish"]["fk_id_Cotizacion"] = "Fk Id Cotizacion";
	$fieldToolTipsdetalles_cotizacion["Spanish"]["fk_id_Cotizacion"] = "";
	$placeHoldersdetalles_cotizacion["Spanish"]["fk_id_Cotizacion"] = "";
	$fieldLabelsdetalles_cotizacion["Spanish"]["fk_id_Servicio"] = "Fk Id Servicio";
	$fieldToolTipsdetalles_cotizacion["Spanish"]["fk_id_Servicio"] = "";
	$placeHoldersdetalles_cotizacion["Spanish"]["fk_id_Servicio"] = "";
	if (count($fieldToolTipsdetalles_cotizacion["Spanish"]))
		$tdatadetalles_cotizacion[".isUseToolTips"] = true;
}


	$tdatadetalles_cotizacion[".NCSearch"] = true;



$tdatadetalles_cotizacion[".shortTableName"] = "detalles_cotizacion";
$tdatadetalles_cotizacion[".nSecOptions"] = 0;

$tdatadetalles_cotizacion[".mainTableOwnerID"] = "";
$tdatadetalles_cotizacion[".entityType"] = 0;
$tdatadetalles_cotizacion[".connId"] = "project_pst_sena_at_localhost";


$tdatadetalles_cotizacion[".strOriginalTableName"] = "detalles_cotizacion";

	



$tdatadetalles_cotizacion[".showAddInPopup"] = false;

$tdatadetalles_cotizacion[".showEditInPopup"] = false;

$tdatadetalles_cotizacion[".showViewInPopup"] = false;

$tdatadetalles_cotizacion[".listAjax"] = false;
//	temporary
//$tdatadetalles_cotizacion[".listAjax"] = false;

	$tdatadetalles_cotizacion[".audit"] = false;

	$tdatadetalles_cotizacion[".locking"] = false;


$pages = $tdatadetalles_cotizacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadetalles_cotizacion[".edit"] = true;
	$tdatadetalles_cotizacion[".afterEditAction"] = 1;
	$tdatadetalles_cotizacion[".closePopupAfterEdit"] = 1;
	$tdatadetalles_cotizacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadetalles_cotizacion[".add"] = true;
$tdatadetalles_cotizacion[".afterAddAction"] = 1;
$tdatadetalles_cotizacion[".closePopupAfterAdd"] = 1;
$tdatadetalles_cotizacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadetalles_cotizacion[".list"] = true;
}



$tdatadetalles_cotizacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadetalles_cotizacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadetalles_cotizacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadetalles_cotizacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadetalles_cotizacion[".printFriendly"] = true;
}



$tdatadetalles_cotizacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadetalles_cotizacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadetalles_cotizacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadetalles_cotizacion[".isUseAjaxSuggest"] = true;





$tdatadetalles_cotizacion[".ajaxCodeSnippetAdded"] = false;

$tdatadetalles_cotizacion[".buttonsAdded"] = false;

$tdatadetalles_cotizacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalles_cotizacion[".isUseTimeForSearch"] = false;


$tdatadetalles_cotizacion[".badgeColor"] = "6da5c8";


$tdatadetalles_cotizacion[".allSearchFields"] = array();
$tdatadetalles_cotizacion[".filterFields"] = array();
$tdatadetalles_cotizacion[".requiredSearchFields"] = array();

$tdatadetalles_cotizacion[".googleLikeFields"] = array();
$tdatadetalles_cotizacion[".googleLikeFields"][] = "id_Det_Cot";
$tdatadetalles_cotizacion[".googleLikeFields"][] = "fk_id_Cotizacion";
$tdatadetalles_cotizacion[".googleLikeFields"][] = "fk_id_Servicio";



$tdatadetalles_cotizacion[".tableType"] = "list";

$tdatadetalles_cotizacion[".printerPageOrientation"] = 0;
$tdatadetalles_cotizacion[".nPrinterPageScale"] = 100;

$tdatadetalles_cotizacion[".nPrinterSplitRecords"] = 40;

$tdatadetalles_cotizacion[".geocodingEnabled"] = false;










$tdatadetalles_cotizacion[".pageSize"] = 20;

$tdatadetalles_cotizacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadetalles_cotizacion[".strOrderBy"] = $tstrOrderBy;

$tdatadetalles_cotizacion[".orderindexes"] = array();


$tdatadetalles_cotizacion[".sqlHead"] = "SELECT id_Det_Cot,  	fk_id_Cotizacion,  	fk_id_Servicio";
$tdatadetalles_cotizacion[".sqlFrom"] = "FROM detalles_cotizacion";
$tdatadetalles_cotizacion[".sqlWhereExpr"] = "";
$tdatadetalles_cotizacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalles_cotizacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalles_cotizacion[".arrGroupsPerPage"] = $arrGPP;

$tdatadetalles_cotizacion[".highlightSearchResults"] = true;

$tableKeysdetalles_cotizacion = array();
$tableKeysdetalles_cotizacion[] = "id_Det_Cot";
$tdatadetalles_cotizacion[".Keys"] = $tableKeysdetalles_cotizacion;


$tdatadetalles_cotizacion[".hideMobileList"] = array();




//	id_Det_Cot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Det_Cot";
	$fdata["GoodName"] = "id_Det_Cot";
	$fdata["ownerTable"] = "detalles_cotizacion";
	$fdata["Label"] = GetFieldLabel("detalles_cotizacion","id_Det_Cot");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Det_Cot";

		$fdata["sourceSingle"] = "id_Det_Cot";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Det_Cot";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalles_cotizacion["id_Det_Cot"] = $fdata;
		$tdatadetalles_cotizacion[".searchableFields"][] = "id_Det_Cot";
//	fk_id_Cotizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_id_Cotizacion";
	$fdata["GoodName"] = "fk_id_Cotizacion";
	$fdata["ownerTable"] = "detalles_cotizacion";
	$fdata["Label"] = GetFieldLabel("detalles_cotizacion","fk_id_Cotizacion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_Cotizacion";

		$fdata["sourceSingle"] = "fk_id_Cotizacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_Cotizacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalles_cotizacion["fk_id_Cotizacion"] = $fdata;
		$tdatadetalles_cotizacion[".searchableFields"][] = "fk_id_Cotizacion";
//	fk_id_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_Servicio";
	$fdata["GoodName"] = "fk_id_Servicio";
	$fdata["ownerTable"] = "detalles_cotizacion";
	$fdata["Label"] = GetFieldLabel("detalles_cotizacion","fk_id_Servicio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_Servicio";

		$fdata["sourceSingle"] = "fk_id_Servicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_Servicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadetalles_cotizacion["fk_id_Servicio"] = $fdata;
		$tdatadetalles_cotizacion[".searchableFields"][] = "fk_id_Servicio";


$tables_data["detalles_cotizacion"]=&$tdatadetalles_cotizacion;
$field_labels["detalles_cotizacion"] = &$fieldLabelsdetalles_cotizacion;
$fieldToolTips["detalles_cotizacion"] = &$fieldToolTipsdetalles_cotizacion;
$placeHolders["detalles_cotizacion"] = &$placeHoldersdetalles_cotizacion;
$page_titles["detalles_cotizacion"] = &$pageTitlesdetalles_cotizacion;


changeTextControlsToDate( "detalles_cotizacion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["detalles_cotizacion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["detalles_cotizacion"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cotizacion";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cotizacion";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cotizacion";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalles_cotizacion"][0] = $masterParams;
				$masterTablesData["detalles_cotizacion"][0]["masterKeys"] = array();
	$masterTablesData["detalles_cotizacion"][0]["masterKeys"][]="id_Cotizacion";
				$masterTablesData["detalles_cotizacion"][0]["detailKeys"] = array();
	$masterTablesData["detalles_cotizacion"][0]["detailKeys"][]="fk_id_Cotizacion";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="servicios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="servicios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "servicios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalles_cotizacion"][1] = $masterParams;
				$masterTablesData["detalles_cotizacion"][1]["masterKeys"] = array();
	$masterTablesData["detalles_cotizacion"][1]["masterKeys"][]="id_Servicio";
				$masterTablesData["detalles_cotizacion"][1]["detailKeys"] = array();
	$masterTablesData["detalles_cotizacion"][1]["detailKeys"][]="fk_id_Servicio";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_detalles_cotizacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Det_Cot,  	fk_id_Cotizacion,  	fk_id_Servicio";
$proto0["m_strFrom"] = "FROM detalles_cotizacion";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_Det_Cot",
	"m_strTable" => "detalles_cotizacion",
	"m_srcTableName" => "detalles_cotizacion"
));

$proto6["m_sql"] = "id_Det_Cot";
$proto6["m_srcTableName"] = "detalles_cotizacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Cotizacion",
	"m_strTable" => "detalles_cotizacion",
	"m_srcTableName" => "detalles_cotizacion"
));

$proto8["m_sql"] = "fk_id_Cotizacion";
$proto8["m_srcTableName"] = "detalles_cotizacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Servicio",
	"m_strTable" => "detalles_cotizacion",
	"m_srcTableName" => "detalles_cotizacion"
));

$proto10["m_sql"] = "fk_id_Servicio";
$proto10["m_srcTableName"] = "detalles_cotizacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "detalles_cotizacion";
$proto13["m_srcTableName"] = "detalles_cotizacion";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_Det_Cot";
$proto13["m_columns"][] = "fk_id_Cotizacion";
$proto13["m_columns"][] = "fk_id_Servicio";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "detalles_cotizacion";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "detalles_cotizacion";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="detalles_cotizacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detalles_cotizacion = createSqlQuery_detalles_cotizacion();


	
		;

			

$tdatadetalles_cotizacion[".sqlquery"] = $queryData_detalles_cotizacion;



$tdatadetalles_cotizacion[".hasEvents"] = false;

?>