<?php
$tdatainstrumento = array();
$tdatainstrumento[".searchableFields"] = array();
$tdatainstrumento[".ShortName"] = "instrumento";
$tdatainstrumento[".OwnerID"] = "";
$tdatainstrumento[".OriginalTable"] = "instrumento";


$tdatainstrumento[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainstrumento[".originalPagesByType"] = $tdatainstrumento[".pagesByType"];
$tdatainstrumento[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainstrumento[".originalPages"] = $tdatainstrumento[".pages"];
$tdatainstrumento[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainstrumento[".originalDefaultPages"] = $tdatainstrumento[".defaultPages"];

//	field labels
$fieldLabelsinstrumento = array();
$fieldToolTipsinstrumento = array();
$pageTitlesinstrumento = array();
$placeHoldersinstrumento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinstrumento["Spanish"] = array();
	$fieldToolTipsinstrumento["Spanish"] = array();
	$placeHoldersinstrumento["Spanish"] = array();
	$pageTitlesinstrumento["Spanish"] = array();
	$fieldLabelsinstrumento["Spanish"]["id_Instrumento"] = "Id Instrumento";
	$fieldToolTipsinstrumento["Spanish"]["id_Instrumento"] = "";
	$placeHoldersinstrumento["Spanish"]["id_Instrumento"] = "";
	$fieldLabelsinstrumento["Spanish"]["Nombre_Inst"] = "Nombre Instrumento";
	$fieldToolTipsinstrumento["Spanish"]["Nombre_Inst"] = "";
	$placeHoldersinstrumento["Spanish"]["Nombre_Inst"] = "";
	if (count($fieldToolTipsinstrumento["Spanish"]))
		$tdatainstrumento[".isUseToolTips"] = true;
}


	$tdatainstrumento[".NCSearch"] = true;



$tdatainstrumento[".shortTableName"] = "instrumento";
$tdatainstrumento[".nSecOptions"] = 0;

$tdatainstrumento[".mainTableOwnerID"] = "";
$tdatainstrumento[".entityType"] = 0;
$tdatainstrumento[".connId"] = "project_pst_sena_at_localhost";


$tdatainstrumento[".strOriginalTableName"] = "instrumento";

	



$tdatainstrumento[".showAddInPopup"] = false;

$tdatainstrumento[".showEditInPopup"] = false;

$tdatainstrumento[".showViewInPopup"] = false;

$tdatainstrumento[".listAjax"] = false;
//	temporary
//$tdatainstrumento[".listAjax"] = false;

	$tdatainstrumento[".audit"] = false;

	$tdatainstrumento[".locking"] = false;


$pages = $tdatainstrumento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainstrumento[".edit"] = true;
	$tdatainstrumento[".afterEditAction"] = 1;
	$tdatainstrumento[".closePopupAfterEdit"] = 1;
	$tdatainstrumento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainstrumento[".add"] = true;
$tdatainstrumento[".afterAddAction"] = 1;
$tdatainstrumento[".closePopupAfterAdd"] = 1;
$tdatainstrumento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainstrumento[".list"] = true;
}



$tdatainstrumento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainstrumento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainstrumento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainstrumento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainstrumento[".printFriendly"] = true;
}



$tdatainstrumento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainstrumento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainstrumento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainstrumento[".isUseAjaxSuggest"] = true;



			

$tdatainstrumento[".ajaxCodeSnippetAdded"] = false;

$tdatainstrumento[".buttonsAdded"] = false;

$tdatainstrumento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainstrumento[".isUseTimeForSearch"] = false;


$tdatainstrumento[".badgeColor"] = "CD5C5C";


$tdatainstrumento[".allSearchFields"] = array();
$tdatainstrumento[".filterFields"] = array();
$tdatainstrumento[".requiredSearchFields"] = array();

$tdatainstrumento[".googleLikeFields"] = array();
$tdatainstrumento[".googleLikeFields"][] = "id_Instrumento";
$tdatainstrumento[".googleLikeFields"][] = "Nombre_Inst";



$tdatainstrumento[".tableType"] = "list";

$tdatainstrumento[".printerPageOrientation"] = 0;
$tdatainstrumento[".nPrinterPageScale"] = 100;

$tdatainstrumento[".nPrinterSplitRecords"] = 40;

$tdatainstrumento[".geocodingEnabled"] = false;










$tdatainstrumento[".pageSize"] = 20;

$tdatainstrumento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainstrumento[".strOrderBy"] = $tstrOrderBy;

$tdatainstrumento[".orderindexes"] = array();


$tdatainstrumento[".sqlHead"] = "SELECT id_Instrumento,  	Nombre_Inst";
$tdatainstrumento[".sqlFrom"] = "FROM instrumento";
$tdatainstrumento[".sqlWhereExpr"] = "";
$tdatainstrumento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainstrumento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainstrumento[".arrGroupsPerPage"] = $arrGPP;

$tdatainstrumento[".highlightSearchResults"] = true;

$tableKeysinstrumento = array();
$tableKeysinstrumento[] = "id_Instrumento";
$tdatainstrumento[".Keys"] = $tableKeysinstrumento;


$tdatainstrumento[".hideMobileList"] = array();




//	id_Instrumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Instrumento";
	$fdata["GoodName"] = "id_Instrumento";
	$fdata["ownerTable"] = "instrumento";
	$fdata["Label"] = GetFieldLabel("instrumento","id_Instrumento");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Instrumento";

		$fdata["sourceSingle"] = "id_Instrumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Instrumento";

	
	
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


	$tdatainstrumento["id_Instrumento"] = $fdata;
		$tdatainstrumento[".searchableFields"][] = "id_Instrumento";
//	Nombre_Inst
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre_Inst";
	$fdata["GoodName"] = "Nombre_Inst";
	$fdata["ownerTable"] = "instrumento";
	$fdata["Label"] = GetFieldLabel("instrumento","Nombre_Inst");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre_Inst";

		$fdata["sourceSingle"] = "Nombre_Inst";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre_Inst";

	
	
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


	$tdatainstrumento["Nombre_Inst"] = $fdata;
		$tdatainstrumento[".searchableFields"][] = "Nombre_Inst";


$tables_data["instrumento"]=&$tdatainstrumento;
$field_labels["instrumento"] = &$fieldLabelsinstrumento;
$fieldToolTips["instrumento"] = &$fieldToolTipsinstrumento;
$placeHolders["instrumento"] = &$placeHoldersinstrumento;
$page_titles["instrumento"] = &$pageTitlesinstrumento;


changeTextControlsToDate( "instrumento" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["instrumento"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["instrumento"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_instrumento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Instrumento,  	Nombre_Inst";
$proto0["m_strFrom"] = "FROM instrumento";
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
	"m_strName" => "id_Instrumento",
	"m_strTable" => "instrumento",
	"m_srcTableName" => "instrumento"
));

$proto6["m_sql"] = "id_Instrumento";
$proto6["m_srcTableName"] = "instrumento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Inst",
	"m_strTable" => "instrumento",
	"m_srcTableName" => "instrumento"
));

$proto8["m_sql"] = "Nombre_Inst";
$proto8["m_srcTableName"] = "instrumento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "instrumento";
$proto11["m_srcTableName"] = "instrumento";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_Instrumento";
$proto11["m_columns"][] = "Nombre_Inst";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "instrumento";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "instrumento";
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
$proto0["m_srcTableName"]="instrumento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_instrumento = createSqlQuery_instrumento();


	
		;

		

$tdatainstrumento[".sqlquery"] = $queryData_instrumento;



$tdatainstrumento[".hasEvents"] = false;

?>