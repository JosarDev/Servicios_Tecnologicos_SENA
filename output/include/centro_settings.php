<?php
$tdatacentro = array();
$tdatacentro[".searchableFields"] = array();
$tdatacentro[".ShortName"] = "centro";
$tdatacentro[".OwnerID"] = "";
$tdatacentro[".OriginalTable"] = "centro";


$tdatacentro[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacentro[".originalPagesByType"] = $tdatacentro[".pagesByType"];
$tdatacentro[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacentro[".originalPages"] = $tdatacentro[".pages"];
$tdatacentro[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacentro[".originalDefaultPages"] = $tdatacentro[".defaultPages"];

//	field labels
$fieldLabelscentro = array();
$fieldToolTipscentro = array();
$pageTitlescentro = array();
$placeHolderscentro = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscentro["Spanish"] = array();
	$fieldToolTipscentro["Spanish"] = array();
	$placeHolderscentro["Spanish"] = array();
	$pageTitlescentro["Spanish"] = array();
	$fieldLabelscentro["Spanish"]["Codigo_Centro"] = "Codigo Centro";
	$fieldToolTipscentro["Spanish"]["Codigo_Centro"] = "";
	$placeHolderscentro["Spanish"]["Codigo_Centro"] = "";
	$fieldLabelscentro["Spanish"]["Nombre_Centro"] = "Nombre Centro";
	$fieldToolTipscentro["Spanish"]["Nombre_Centro"] = "";
	$placeHolderscentro["Spanish"]["Nombre_Centro"] = "";
	$fieldLabelscentro["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipscentro["Spanish"]["Direccion"] = "";
	$placeHolderscentro["Spanish"]["Direccion"] = "";
	$fieldLabelscentro["Spanish"]["Celular"] = "Celular";
	$fieldToolTipscentro["Spanish"]["Celular"] = "";
	$placeHolderscentro["Spanish"]["Celular"] = "";
	if (count($fieldToolTipscentro["Spanish"]))
		$tdatacentro[".isUseToolTips"] = true;
}


	$tdatacentro[".NCSearch"] = true;



$tdatacentro[".shortTableName"] = "centro";
$tdatacentro[".nSecOptions"] = 0;

$tdatacentro[".mainTableOwnerID"] = "";
$tdatacentro[".entityType"] = 0;
$tdatacentro[".connId"] = "project_pst_sena_at_localhost";


$tdatacentro[".strOriginalTableName"] = "centro";

	



$tdatacentro[".showAddInPopup"] = false;

$tdatacentro[".showEditInPopup"] = false;

$tdatacentro[".showViewInPopup"] = false;

$tdatacentro[".listAjax"] = false;
//	temporary
//$tdatacentro[".listAjax"] = false;

	$tdatacentro[".audit"] = false;

	$tdatacentro[".locking"] = false;


$pages = $tdatacentro[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacentro[".edit"] = true;
	$tdatacentro[".afterEditAction"] = 1;
	$tdatacentro[".closePopupAfterEdit"] = 1;
	$tdatacentro[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacentro[".add"] = true;
$tdatacentro[".afterAddAction"] = 1;
$tdatacentro[".closePopupAfterAdd"] = 1;
$tdatacentro[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacentro[".list"] = true;
}



$tdatacentro[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacentro[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacentro[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacentro[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacentro[".printFriendly"] = true;
}



$tdatacentro[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacentro[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacentro[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacentro[".isUseAjaxSuggest"] = true;





$tdatacentro[".ajaxCodeSnippetAdded"] = false;

$tdatacentro[".buttonsAdded"] = false;

$tdatacentro[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacentro[".isUseTimeForSearch"] = false;


$tdatacentro[".badgeColor"] = "E8926F";


$tdatacentro[".allSearchFields"] = array();
$tdatacentro[".filterFields"] = array();
$tdatacentro[".requiredSearchFields"] = array();

$tdatacentro[".googleLikeFields"] = array();
$tdatacentro[".googleLikeFields"][] = "Codigo_Centro";
$tdatacentro[".googleLikeFields"][] = "Nombre_Centro";
$tdatacentro[".googleLikeFields"][] = "Direccion";
$tdatacentro[".googleLikeFields"][] = "Celular";



$tdatacentro[".tableType"] = "list";

$tdatacentro[".printerPageOrientation"] = 0;
$tdatacentro[".nPrinterPageScale"] = 100;

$tdatacentro[".nPrinterSplitRecords"] = 40;

$tdatacentro[".geocodingEnabled"] = false;










$tdatacentro[".pageSize"] = 20;

$tdatacentro[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacentro[".strOrderBy"] = $tstrOrderBy;

$tdatacentro[".orderindexes"] = array();


$tdatacentro[".sqlHead"] = "SELECT Codigo_Centro,  	Nombre_Centro,  	Direccion,  	Celular";
$tdatacentro[".sqlFrom"] = "FROM centro";
$tdatacentro[".sqlWhereExpr"] = "";
$tdatacentro[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacentro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacentro[".arrGroupsPerPage"] = $arrGPP;

$tdatacentro[".highlightSearchResults"] = true;

$tableKeyscentro = array();
$tableKeyscentro[] = "Codigo_Centro";
$tdatacentro[".Keys"] = $tableKeyscentro;


$tdatacentro[".hideMobileList"] = array();




//	Codigo_Centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Codigo_Centro";
	$fdata["GoodName"] = "Codigo_Centro";
	$fdata["ownerTable"] = "centro";
	$fdata["Label"] = GetFieldLabel("centro","Codigo_Centro");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Codigo_Centro";

		$fdata["sourceSingle"] = "Codigo_Centro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Codigo_Centro";

	
	
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


	$tdatacentro["Codigo_Centro"] = $fdata;
		$tdatacentro[".searchableFields"][] = "Codigo_Centro";
//	Nombre_Centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre_Centro";
	$fdata["GoodName"] = "Nombre_Centro";
	$fdata["ownerTable"] = "centro";
	$fdata["Label"] = GetFieldLabel("centro","Nombre_Centro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre_Centro";

		$fdata["sourceSingle"] = "Nombre_Centro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre_Centro";

	
	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatacentro["Nombre_Centro"] = $fdata;
		$tdatacentro[".searchableFields"][] = "Nombre_Centro";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "centro";
	$fdata["Label"] = GetFieldLabel("centro","Direccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direccion";

		$fdata["sourceSingle"] = "Direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Direccion";

	
	
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
			$edata["EditParams"].= " maxlength=40";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatacentro["Direccion"] = $fdata;
		$tdatacentro[".searchableFields"][] = "Direccion";
//	Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Celular";
	$fdata["GoodName"] = "Celular";
	$fdata["ownerTable"] = "centro";
	$fdata["Label"] = GetFieldLabel("centro","Celular");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Celular";

		$fdata["sourceSingle"] = "Celular";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Celular";

	
	
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


	$tdatacentro["Celular"] = $fdata;
		$tdatacentro[".searchableFields"][] = "Celular";


$tables_data["centro"]=&$tdatacentro;
$field_labels["centro"] = &$fieldLabelscentro;
$fieldToolTips["centro"] = &$fieldToolTipscentro;
$placeHolders["centro"] = &$placeHolderscentro;
$page_titles["centro"] = &$pageTitlescentro;


changeTextControlsToDate( "centro" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["centro"] = array();
//	laboratorio
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="laboratorio";
		$detailsParam["dOriginalTable"] = "laboratorio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "laboratorio";
	$detailsParam["dCaptionTable"] = GetTableCaption("laboratorio");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["centro"][$dIndex] = $detailsParam;

	
		$detailsTablesData["centro"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["centro"][$dIndex]["masterKeys"][]="Codigo_Centro";

				$detailsTablesData["centro"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["centro"][$dIndex]["detailKeys"][]="fk_Codigo_Centro";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["centro"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_centro()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Codigo_Centro,  	Nombre_Centro,  	Direccion,  	Celular";
$proto0["m_strFrom"] = "FROM centro";
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
	"m_strName" => "Codigo_Centro",
	"m_strTable" => "centro",
	"m_srcTableName" => "centro"
));

$proto6["m_sql"] = "Codigo_Centro";
$proto6["m_srcTableName"] = "centro";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Centro",
	"m_strTable" => "centro",
	"m_srcTableName" => "centro"
));

$proto8["m_sql"] = "Nombre_Centro";
$proto8["m_srcTableName"] = "centro";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "centro",
	"m_srcTableName" => "centro"
));

$proto10["m_sql"] = "Direccion";
$proto10["m_srcTableName"] = "centro";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "centro",
	"m_srcTableName" => "centro"
));

$proto12["m_sql"] = "Celular";
$proto12["m_srcTableName"] = "centro";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "centro";
$proto15["m_srcTableName"] = "centro";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Codigo_Centro";
$proto15["m_columns"][] = "Nombre_Centro";
$proto15["m_columns"][] = "Direccion";
$proto15["m_columns"][] = "Celular";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "centro";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "centro";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="centro";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_centro = createSqlQuery_centro();


	
		;

				

$tdatacentro[".sqlquery"] = $queryData_centro;



$tdatacentro[".hasEvents"] = false;

?>