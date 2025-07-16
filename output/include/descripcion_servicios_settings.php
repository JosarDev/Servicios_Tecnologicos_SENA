<?php
$tdatadescripcion_servicios = array();
$tdatadescripcion_servicios[".searchableFields"] = array();
$tdatadescripcion_servicios[".ShortName"] = "descripcion_servicios";
$tdatadescripcion_servicios[".OwnerID"] = "";
$tdatadescripcion_servicios[".OriginalTable"] = "descripcion_servicios";


$tdatadescripcion_servicios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadescripcion_servicios[".originalPagesByType"] = $tdatadescripcion_servicios[".pagesByType"];
$tdatadescripcion_servicios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadescripcion_servicios[".originalPages"] = $tdatadescripcion_servicios[".pages"];
$tdatadescripcion_servicios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadescripcion_servicios[".originalDefaultPages"] = $tdatadescripcion_servicios[".defaultPages"];

//	field labels
$fieldLabelsdescripcion_servicios = array();
$fieldToolTipsdescripcion_servicios = array();
$pageTitlesdescripcion_servicios = array();
$placeHoldersdescripcion_servicios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdescripcion_servicios["Spanish"] = array();
	$fieldToolTipsdescripcion_servicios["Spanish"] = array();
	$placeHoldersdescripcion_servicios["Spanish"] = array();
	$pageTitlesdescripcion_servicios["Spanish"] = array();
	$fieldLabelsdescripcion_servicios["Spanish"]["id_desdripcion_servicio"] = "Id Desdripcion Servicio";
	$fieldToolTipsdescripcion_servicios["Spanish"]["id_desdripcion_servicio"] = "";
	$placeHoldersdescripcion_servicios["Spanish"]["id_desdripcion_servicio"] = "";
	$fieldLabelsdescripcion_servicios["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsdescripcion_servicios["Spanish"]["descripcion"] = "";
	$placeHoldersdescripcion_servicios["Spanish"]["descripcion"] = "";
	$fieldLabelsdescripcion_servicios["Spanish"]["precio"] = "Precio";
	$fieldToolTipsdescripcion_servicios["Spanish"]["precio"] = "";
	$placeHoldersdescripcion_servicios["Spanish"]["precio"] = "";
	if (count($fieldToolTipsdescripcion_servicios["Spanish"]))
		$tdatadescripcion_servicios[".isUseToolTips"] = true;
}


	$tdatadescripcion_servicios[".NCSearch"] = true;



$tdatadescripcion_servicios[".shortTableName"] = "descripcion_servicios";
$tdatadescripcion_servicios[".nSecOptions"] = 0;

$tdatadescripcion_servicios[".mainTableOwnerID"] = "";
$tdatadescripcion_servicios[".entityType"] = 0;
$tdatadescripcion_servicios[".connId"] = "project_pst_sena_at_localhost";


$tdatadescripcion_servicios[".strOriginalTableName"] = "descripcion_servicios";

	



$tdatadescripcion_servicios[".showAddInPopup"] = false;

$tdatadescripcion_servicios[".showEditInPopup"] = false;

$tdatadescripcion_servicios[".showViewInPopup"] = false;

$tdatadescripcion_servicios[".listAjax"] = false;
//	temporary
//$tdatadescripcion_servicios[".listAjax"] = false;

	$tdatadescripcion_servicios[".audit"] = false;

	$tdatadescripcion_servicios[".locking"] = false;


$pages = $tdatadescripcion_servicios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadescripcion_servicios[".edit"] = true;
	$tdatadescripcion_servicios[".afterEditAction"] = 1;
	$tdatadescripcion_servicios[".closePopupAfterEdit"] = 1;
	$tdatadescripcion_servicios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadescripcion_servicios[".add"] = true;
$tdatadescripcion_servicios[".afterAddAction"] = 1;
$tdatadescripcion_servicios[".closePopupAfterAdd"] = 1;
$tdatadescripcion_servicios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadescripcion_servicios[".list"] = true;
}



$tdatadescripcion_servicios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadescripcion_servicios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadescripcion_servicios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadescripcion_servicios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadescripcion_servicios[".printFriendly"] = true;
}



$tdatadescripcion_servicios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadescripcion_servicios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadescripcion_servicios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadescripcion_servicios[".isUseAjaxSuggest"] = true;



			

$tdatadescripcion_servicios[".ajaxCodeSnippetAdded"] = false;

$tdatadescripcion_servicios[".buttonsAdded"] = false;

$tdatadescripcion_servicios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadescripcion_servicios[".isUseTimeForSearch"] = false;


$tdatadescripcion_servicios[".badgeColor"] = "DAA520";


$tdatadescripcion_servicios[".allSearchFields"] = array();
$tdatadescripcion_servicios[".filterFields"] = array();
$tdatadescripcion_servicios[".requiredSearchFields"] = array();

$tdatadescripcion_servicios[".googleLikeFields"] = array();
$tdatadescripcion_servicios[".googleLikeFields"][] = "id_desdripcion_servicio";
$tdatadescripcion_servicios[".googleLikeFields"][] = "descripcion";
$tdatadescripcion_servicios[".googleLikeFields"][] = "precio";



$tdatadescripcion_servicios[".tableType"] = "list";

$tdatadescripcion_servicios[".printerPageOrientation"] = 0;
$tdatadescripcion_servicios[".nPrinterPageScale"] = 100;

$tdatadescripcion_servicios[".nPrinterSplitRecords"] = 40;

$tdatadescripcion_servicios[".geocodingEnabled"] = false;










$tdatadescripcion_servicios[".pageSize"] = 20;

$tdatadescripcion_servicios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadescripcion_servicios[".strOrderBy"] = $tstrOrderBy;

$tdatadescripcion_servicios[".orderindexes"] = array();


$tdatadescripcion_servicios[".sqlHead"] = "SELECT id_desdripcion_servicio,  	descripcion,  	precio";
$tdatadescripcion_servicios[".sqlFrom"] = "FROM descripcion_servicios";
$tdatadescripcion_servicios[".sqlWhereExpr"] = "";
$tdatadescripcion_servicios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadescripcion_servicios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadescripcion_servicios[".arrGroupsPerPage"] = $arrGPP;

$tdatadescripcion_servicios[".highlightSearchResults"] = true;

$tableKeysdescripcion_servicios = array();
$tableKeysdescripcion_servicios[] = "id_desdripcion_servicio";
$tdatadescripcion_servicios[".Keys"] = $tableKeysdescripcion_servicios;


$tdatadescripcion_servicios[".hideMobileList"] = array();




//	id_desdripcion_servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_desdripcion_servicio";
	$fdata["GoodName"] = "id_desdripcion_servicio";
	$fdata["ownerTable"] = "descripcion_servicios";
	$fdata["Label"] = GetFieldLabel("descripcion_servicios","id_desdripcion_servicio");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_desdripcion_servicio";

		$fdata["sourceSingle"] = "id_desdripcion_servicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_desdripcion_servicio";

	
	
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


	$tdatadescripcion_servicios["id_desdripcion_servicio"] = $fdata;
		$tdatadescripcion_servicios[".searchableFields"][] = "id_desdripcion_servicio";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "descripcion_servicios";
	$fdata["Label"] = GetFieldLabel("descripcion_servicios","descripcion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "descripcion";

		$fdata["sourceSingle"] = "descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatadescripcion_servicios["descripcion"] = $fdata;
		$tdatadescripcion_servicios[".searchableFields"][] = "descripcion";
//	precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "precio";
	$fdata["GoodName"] = "precio";
	$fdata["ownerTable"] = "descripcion_servicios";
	$fdata["Label"] = GetFieldLabel("descripcion_servicios","precio");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "precio";

		$fdata["sourceSingle"] = "precio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "precio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatadescripcion_servicios["precio"] = $fdata;
		$tdatadescripcion_servicios[".searchableFields"][] = "precio";


$tables_data["descripcion_servicios"]=&$tdatadescripcion_servicios;
$field_labels["descripcion_servicios"] = &$fieldLabelsdescripcion_servicios;
$fieldToolTips["descripcion_servicios"] = &$fieldToolTipsdescripcion_servicios;
$placeHolders["descripcion_servicios"] = &$placeHoldersdescripcion_servicios;
$page_titles["descripcion_servicios"] = &$pageTitlesdescripcion_servicios;


changeTextControlsToDate( "descripcion_servicios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["descripcion_servicios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["descripcion_servicios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_descripcion_servicios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_desdripcion_servicio,  	descripcion,  	precio";
$proto0["m_strFrom"] = "FROM descripcion_servicios";
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
	"m_strName" => "id_desdripcion_servicio",
	"m_strTable" => "descripcion_servicios",
	"m_srcTableName" => "descripcion_servicios"
));

$proto6["m_sql"] = "id_desdripcion_servicio";
$proto6["m_srcTableName"] = "descripcion_servicios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "descripcion_servicios",
	"m_srcTableName" => "descripcion_servicios"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "descripcion_servicios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "precio",
	"m_strTable" => "descripcion_servicios",
	"m_srcTableName" => "descripcion_servicios"
));

$proto10["m_sql"] = "precio";
$proto10["m_srcTableName"] = "descripcion_servicios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "descripcion_servicios";
$proto13["m_srcTableName"] = "descripcion_servicios";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_desdripcion_servicio";
$proto13["m_columns"][] = "descripcion";
$proto13["m_columns"][] = "precio";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "descripcion_servicios";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "descripcion_servicios";
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
$proto0["m_srcTableName"]="descripcion_servicios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_descripcion_servicios = createSqlQuery_descripcion_servicios();


	
		;

			

$tdatadescripcion_servicios[".sqlquery"] = $queryData_descripcion_servicios;



$tdatadescripcion_servicios[".hasEvents"] = false;

?>