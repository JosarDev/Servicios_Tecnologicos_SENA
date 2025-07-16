<?php
$tdatacotizacion = array();
$tdatacotizacion[".searchableFields"] = array();
$tdatacotizacion[".ShortName"] = "cotizacion";
$tdatacotizacion[".OwnerID"] = "";
$tdatacotizacion[".OriginalTable"] = "cotizacion";


$tdatacotizacion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacotizacion[".originalPagesByType"] = $tdatacotizacion[".pagesByType"];
$tdatacotizacion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacotizacion[".originalPages"] = $tdatacotizacion[".pages"];
$tdatacotizacion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacotizacion[".originalDefaultPages"] = $tdatacotizacion[".defaultPages"];

//	field labels
$fieldLabelscotizacion = array();
$fieldToolTipscotizacion = array();
$pageTitlescotizacion = array();
$placeHolderscotizacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscotizacion["Spanish"] = array();
	$fieldToolTipscotizacion["Spanish"] = array();
	$placeHolderscotizacion["Spanish"] = array();
	$pageTitlescotizacion["Spanish"] = array();
	$fieldLabelscotizacion["Spanish"]["id_Cotizacion"] = "Id Cotizacion";
	$fieldToolTipscotizacion["Spanish"]["id_Cotizacion"] = "";
	$placeHolderscotizacion["Spanish"]["id_Cotizacion"] = "";
	$fieldLabelscotizacion["Spanish"]["Valor_Total_Cot"] = "Valor total de la Cotización";
	$fieldToolTipscotizacion["Spanish"]["Valor_Total_Cot"] = "";
	$placeHolderscotizacion["Spanish"]["Valor_Total_Cot"] = "";
	$fieldLabelscotizacion["Spanish"]["fk_id_Cliente"] = "Cliente que realiza la Cotización";
	$fieldToolTipscotizacion["Spanish"]["fk_id_Cliente"] = "";
	$placeHolderscotizacion["Spanish"]["fk_id_Cliente"] = "";
	if (count($fieldToolTipscotizacion["Spanish"]))
		$tdatacotizacion[".isUseToolTips"] = true;
}


	$tdatacotizacion[".NCSearch"] = true;



$tdatacotizacion[".shortTableName"] = "cotizacion";
$tdatacotizacion[".nSecOptions"] = 0;

$tdatacotizacion[".mainTableOwnerID"] = "";
$tdatacotizacion[".entityType"] = 0;
$tdatacotizacion[".connId"] = "project_pst_sena_at_localhost";


$tdatacotizacion[".strOriginalTableName"] = "cotizacion";

	



$tdatacotizacion[".showAddInPopup"] = false;

$tdatacotizacion[".showEditInPopup"] = false;

$tdatacotizacion[".showViewInPopup"] = false;

$tdatacotizacion[".listAjax"] = false;
//	temporary
//$tdatacotizacion[".listAjax"] = false;

	$tdatacotizacion[".audit"] = false;

	$tdatacotizacion[".locking"] = false;


$pages = $tdatacotizacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacotizacion[".edit"] = true;
	$tdatacotizacion[".afterEditAction"] = 1;
	$tdatacotizacion[".closePopupAfterEdit"] = 1;
	$tdatacotizacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacotizacion[".add"] = true;
$tdatacotizacion[".afterAddAction"] = 1;
$tdatacotizacion[".closePopupAfterAdd"] = 1;
$tdatacotizacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacotizacion[".list"] = true;
}



$tdatacotizacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacotizacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacotizacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacotizacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacotizacion[".printFriendly"] = true;
}



$tdatacotizacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacotizacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacotizacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacotizacion[".isUseAjaxSuggest"] = true;



						

$tdatacotizacion[".ajaxCodeSnippetAdded"] = false;

$tdatacotizacion[".buttonsAdded"] = false;

$tdatacotizacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacotizacion[".isUseTimeForSearch"] = false;


$tdatacotizacion[".badgeColor"] = "e67349";


$tdatacotizacion[".allSearchFields"] = array();
$tdatacotizacion[".filterFields"] = array();
$tdatacotizacion[".requiredSearchFields"] = array();

$tdatacotizacion[".googleLikeFields"] = array();
$tdatacotizacion[".googleLikeFields"][] = "id_Cotizacion";
$tdatacotizacion[".googleLikeFields"][] = "Valor_Total_Cot";
$tdatacotizacion[".googleLikeFields"][] = "fk_id_Cliente";



$tdatacotizacion[".tableType"] = "list";

$tdatacotizacion[".printerPageOrientation"] = 0;
$tdatacotizacion[".nPrinterPageScale"] = 100;

$tdatacotizacion[".nPrinterSplitRecords"] = 40;

$tdatacotizacion[".geocodingEnabled"] = false;










$tdatacotizacion[".pageSize"] = 20;

$tdatacotizacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacotizacion[".strOrderBy"] = $tstrOrderBy;

$tdatacotizacion[".orderindexes"] = array();


$tdatacotizacion[".sqlHead"] = "SELECT id_Cotizacion,  	Valor_Total_Cot,  	fk_id_Cliente";
$tdatacotizacion[".sqlFrom"] = "FROM cotizacion";
$tdatacotizacion[".sqlWhereExpr"] = "";
$tdatacotizacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacotizacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacotizacion[".arrGroupsPerPage"] = $arrGPP;

$tdatacotizacion[".highlightSearchResults"] = true;

$tableKeyscotizacion = array();
$tableKeyscotizacion[] = "id_Cotizacion";
$tdatacotizacion[".Keys"] = $tableKeyscotizacion;


$tdatacotizacion[".hideMobileList"] = array();




//	id_Cotizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Cotizacion";
	$fdata["GoodName"] = "id_Cotizacion";
	$fdata["ownerTable"] = "cotizacion";
	$fdata["Label"] = GetFieldLabel("cotizacion","id_Cotizacion");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Cotizacion";

		$fdata["sourceSingle"] = "id_Cotizacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Cotizacion";

	
	
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


	$tdatacotizacion["id_Cotizacion"] = $fdata;
		$tdatacotizacion[".searchableFields"][] = "id_Cotizacion";
//	Valor_Total_Cot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Valor_Total_Cot";
	$fdata["GoodName"] = "Valor_Total_Cot";
	$fdata["ownerTable"] = "cotizacion";
	$fdata["Label"] = GetFieldLabel("cotizacion","Valor_Total_Cot");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor_Total_Cot";

		$fdata["sourceSingle"] = "Valor_Total_Cot";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor_Total_Cot";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatacotizacion["Valor_Total_Cot"] = $fdata;
		$tdatacotizacion[".searchableFields"][] = "Valor_Total_Cot";
//	fk_id_Cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fk_id_Cliente";
	$fdata["GoodName"] = "fk_id_Cliente";
	$fdata["ownerTable"] = "cotizacion";
	$fdata["Label"] = GetFieldLabel("cotizacion","fk_id_Cliente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_Cliente";

		$fdata["sourceSingle"] = "fk_id_Cliente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_Cliente";

	
	
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


	$tdatacotizacion["fk_id_Cliente"] = $fdata;
		$tdatacotizacion[".searchableFields"][] = "fk_id_Cliente";


$tables_data["cotizacion"]=&$tdatacotizacion;
$field_labels["cotizacion"] = &$fieldLabelscotizacion;
$fieldToolTips["cotizacion"] = &$fieldToolTipscotizacion;
$placeHolders["cotizacion"] = &$placeHolderscotizacion;
$page_titles["cotizacion"] = &$pageTitlescotizacion;


changeTextControlsToDate( "cotizacion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cotizacion"] = array();
//	detalles_cotizacion
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalles_cotizacion";
		$detailsParam["dOriginalTable"] = "detalles_cotizacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalles_cotizacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalles_cotizacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cotizacion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cotizacion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cotizacion"][$dIndex]["masterKeys"][]="id_Cotizacion";

				$detailsTablesData["cotizacion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cotizacion"][$dIndex]["detailKeys"][]="fk_id_Cotizacion";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cotizacion"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cliente";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cliente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cliente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cotizacion"][0] = $masterParams;
				$masterTablesData["cotizacion"][0]["masterKeys"] = array();
	$masterTablesData["cotizacion"][0]["masterKeys"][]="id_Cliente";
				$masterTablesData["cotizacion"][0]["detailKeys"] = array();
	$masterTablesData["cotizacion"][0]["detailKeys"][]="fk_id_Cliente";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cotizacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Cotizacion,  	Valor_Total_Cot,  	fk_id_Cliente";
$proto0["m_strFrom"] = "FROM cotizacion";
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
	"m_strName" => "id_Cotizacion",
	"m_strTable" => "cotizacion",
	"m_srcTableName" => "cotizacion"
));

$proto6["m_sql"] = "id_Cotizacion";
$proto6["m_srcTableName"] = "cotizacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_Total_Cot",
	"m_strTable" => "cotizacion",
	"m_srcTableName" => "cotizacion"
));

$proto8["m_sql"] = "Valor_Total_Cot";
$proto8["m_srcTableName"] = "cotizacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Cliente",
	"m_strTable" => "cotizacion",
	"m_srcTableName" => "cotizacion"
));

$proto10["m_sql"] = "fk_id_Cliente";
$proto10["m_srcTableName"] = "cotizacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "cotizacion";
$proto13["m_srcTableName"] = "cotizacion";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_Cotizacion";
$proto13["m_columns"][] = "Valor_Total_Cot";
$proto13["m_columns"][] = "fk_id_Cliente";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "cotizacion";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "cotizacion";
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
$proto0["m_srcTableName"]="cotizacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cotizacion = createSqlQuery_cotizacion();


	
		;

			

$tdatacotizacion[".sqlquery"] = $queryData_cotizacion;



$tdatacotizacion[".hasEvents"] = false;

?>