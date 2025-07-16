<?php
$tdatatiposervicio = array();
$tdatatiposervicio[".searchableFields"] = array();
$tdatatiposervicio[".ShortName"] = "tiposervicio";
$tdatatiposervicio[".OwnerID"] = "";
$tdatatiposervicio[".OriginalTable"] = "tiposervicio";


$tdatatiposervicio[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatiposervicio[".originalPagesByType"] = $tdatatiposervicio[".pagesByType"];
$tdatatiposervicio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatiposervicio[".originalPages"] = $tdatatiposervicio[".pages"];
$tdatatiposervicio[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatiposervicio[".originalDefaultPages"] = $tdatatiposervicio[".defaultPages"];

//	field labels
$fieldLabelstiposervicio = array();
$fieldToolTipstiposervicio = array();
$pageTitlestiposervicio = array();
$placeHolderstiposervicio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstiposervicio["Spanish"] = array();
	$fieldToolTipstiposervicio["Spanish"] = array();
	$placeHolderstiposervicio["Spanish"] = array();
	$pageTitlestiposervicio["Spanish"] = array();
	$fieldLabelstiposervicio["Spanish"]["id_ts"] = "Id Tipo de servicio";
	$fieldToolTipstiposervicio["Spanish"]["id_ts"] = "";
	$placeHolderstiposervicio["Spanish"]["id_ts"] = "";
	$fieldLabelstiposervicio["Spanish"]["Tipolog_a"] = "Tipología";
	$fieldToolTipstiposervicio["Spanish"]["Tipolog_a"] = "";
	$placeHolderstiposervicio["Spanish"]["Tipolog_a"] = "";
	if (count($fieldToolTipstiposervicio["Spanish"]))
		$tdatatiposervicio[".isUseToolTips"] = true;
}


	$tdatatiposervicio[".NCSearch"] = true;



$tdatatiposervicio[".shortTableName"] = "tiposervicio";
$tdatatiposervicio[".nSecOptions"] = 0;

$tdatatiposervicio[".mainTableOwnerID"] = "";
$tdatatiposervicio[".entityType"] = 0;
$tdatatiposervicio[".connId"] = "project_pst_sena_at_localhost";


$tdatatiposervicio[".strOriginalTableName"] = "tiposervicio";

	



$tdatatiposervicio[".showAddInPopup"] = false;

$tdatatiposervicio[".showEditInPopup"] = false;

$tdatatiposervicio[".showViewInPopup"] = false;

$tdatatiposervicio[".listAjax"] = false;
//	temporary
//$tdatatiposervicio[".listAjax"] = false;

	$tdatatiposervicio[".audit"] = false;

	$tdatatiposervicio[".locking"] = false;


$pages = $tdatatiposervicio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatiposervicio[".edit"] = true;
	$tdatatiposervicio[".afterEditAction"] = 1;
	$tdatatiposervicio[".closePopupAfterEdit"] = 1;
	$tdatatiposervicio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatiposervicio[".add"] = true;
$tdatatiposervicio[".afterAddAction"] = 1;
$tdatatiposervicio[".closePopupAfterAdd"] = 1;
$tdatatiposervicio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatiposervicio[".list"] = true;
}



$tdatatiposervicio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatiposervicio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatiposervicio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatiposervicio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatiposervicio[".printFriendly"] = true;
}



$tdatatiposervicio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatiposervicio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatiposervicio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatiposervicio[".isUseAjaxSuggest"] = true;



			

$tdatatiposervicio[".ajaxCodeSnippetAdded"] = false;

$tdatatiposervicio[".buttonsAdded"] = false;

$tdatatiposervicio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatiposervicio[".isUseTimeForSearch"] = false;


$tdatatiposervicio[".badgeColor"] = "00C2C5";


$tdatatiposervicio[".allSearchFields"] = array();
$tdatatiposervicio[".filterFields"] = array();
$tdatatiposervicio[".requiredSearchFields"] = array();

$tdatatiposervicio[".googleLikeFields"] = array();
$tdatatiposervicio[".googleLikeFields"][] = "id_ts";
$tdatatiposervicio[".googleLikeFields"][] = "Tipología";



$tdatatiposervicio[".tableType"] = "list";

$tdatatiposervicio[".printerPageOrientation"] = 0;
$tdatatiposervicio[".nPrinterPageScale"] = 100;

$tdatatiposervicio[".nPrinterSplitRecords"] = 40;

$tdatatiposervicio[".geocodingEnabled"] = false;










$tdatatiposervicio[".pageSize"] = 20;

$tdatatiposervicio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatiposervicio[".strOrderBy"] = $tstrOrderBy;

$tdatatiposervicio[".orderindexes"] = array();


$tdatatiposervicio[".sqlHead"] = "SELECT id_ts,  	`Tipología`";
$tdatatiposervicio[".sqlFrom"] = "FROM tiposervicio";
$tdatatiposervicio[".sqlWhereExpr"] = "";
$tdatatiposervicio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatiposervicio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatiposervicio[".arrGroupsPerPage"] = $arrGPP;

$tdatatiposervicio[".highlightSearchResults"] = true;

$tableKeystiposervicio = array();
$tableKeystiposervicio[] = "id_ts";
$tdatatiposervicio[".Keys"] = $tableKeystiposervicio;


$tdatatiposervicio[".hideMobileList"] = array();




//	id_ts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ts";
	$fdata["GoodName"] = "id_ts";
	$fdata["ownerTable"] = "tiposervicio";
	$fdata["Label"] = GetFieldLabel("tiposervicio","id_ts");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_ts";

		$fdata["sourceSingle"] = "id_ts";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_ts";

	
	
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


	$tdatatiposervicio["id_ts"] = $fdata;
		$tdatatiposervicio[".searchableFields"][] = "id_ts";
//	Tipología
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tipología";
	$fdata["GoodName"] = "Tipolog_a";
	$fdata["ownerTable"] = "tiposervicio";
	$fdata["Label"] = GetFieldLabel("tiposervicio","Tipolog_a");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipología";

		$fdata["sourceSingle"] = "Tipología";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipología`";

	
	
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


	$tdatatiposervicio["Tipología"] = $fdata;
		$tdatatiposervicio[".searchableFields"][] = "Tipología";


$tables_data["tiposervicio"]=&$tdatatiposervicio;
$field_labels["tiposervicio"] = &$fieldLabelstiposervicio;
$fieldToolTips["tiposervicio"] = &$fieldToolTipstiposervicio;
$placeHolders["tiposervicio"] = &$placeHolderstiposervicio;
$page_titles["tiposervicio"] = &$pageTitlestiposervicio;


changeTextControlsToDate( "tiposervicio" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tiposervicio"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tiposervicio"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tiposervicio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_ts,  	`Tipología`";
$proto0["m_strFrom"] = "FROM tiposervicio";
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
	"m_strName" => "id_ts",
	"m_strTable" => "tiposervicio",
	"m_srcTableName" => "tiposervicio"
));

$proto6["m_sql"] = "id_ts";
$proto6["m_srcTableName"] = "tiposervicio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipología",
	"m_strTable" => "tiposervicio",
	"m_srcTableName" => "tiposervicio"
));

$proto8["m_sql"] = "`Tipología`";
$proto8["m_srcTableName"] = "tiposervicio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tiposervicio";
$proto11["m_srcTableName"] = "tiposervicio";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_ts";
$proto11["m_columns"][] = "Tipología";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tiposervicio";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tiposervicio";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tiposervicio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tiposervicio = createSqlQuery_tiposervicio();


	
		;

		

$tdatatiposervicio[".sqlquery"] = $queryData_tiposervicio;



$tdatatiposervicio[".hasEvents"] = false;

?>