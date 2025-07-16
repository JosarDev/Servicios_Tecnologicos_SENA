<?php
$tdatafabricante = array();
$tdatafabricante[".searchableFields"] = array();
$tdatafabricante[".ShortName"] = "fabricante";
$tdatafabricante[".OwnerID"] = "";
$tdatafabricante[".OriginalTable"] = "fabricante";


$tdatafabricante[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafabricante[".originalPagesByType"] = $tdatafabricante[".pagesByType"];
$tdatafabricante[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafabricante[".originalPages"] = $tdatafabricante[".pages"];
$tdatafabricante[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafabricante[".originalDefaultPages"] = $tdatafabricante[".defaultPages"];

//	field labels
$fieldLabelsfabricante = array();
$fieldToolTipsfabricante = array();
$pageTitlesfabricante = array();
$placeHoldersfabricante = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfabricante["Spanish"] = array();
	$fieldToolTipsfabricante["Spanish"] = array();
	$placeHoldersfabricante["Spanish"] = array();
	$pageTitlesfabricante["Spanish"] = array();
	$fieldLabelsfabricante["Spanish"]["id_Fabricante"] = "Id Fabricante";
	$fieldToolTipsfabricante["Spanish"]["id_Fabricante"] = "";
	$placeHoldersfabricante["Spanish"]["id_Fabricante"] = "";
	$fieldLabelsfabricante["Spanish"]["Nombre_Fab"] = "Nombre Fabricante";
	$fieldToolTipsfabricante["Spanish"]["Nombre_Fab"] = "";
	$placeHoldersfabricante["Spanish"]["Nombre_Fab"] = "";
	if (count($fieldToolTipsfabricante["Spanish"]))
		$tdatafabricante[".isUseToolTips"] = true;
}


	$tdatafabricante[".NCSearch"] = true;



$tdatafabricante[".shortTableName"] = "fabricante";
$tdatafabricante[".nSecOptions"] = 0;

$tdatafabricante[".mainTableOwnerID"] = "";
$tdatafabricante[".entityType"] = 0;
$tdatafabricante[".connId"] = "project_pst_sena_at_localhost";


$tdatafabricante[".strOriginalTableName"] = "fabricante";

	



$tdatafabricante[".showAddInPopup"] = false;

$tdatafabricante[".showEditInPopup"] = false;

$tdatafabricante[".showViewInPopup"] = false;

$tdatafabricante[".listAjax"] = false;
//	temporary
//$tdatafabricante[".listAjax"] = false;

	$tdatafabricante[".audit"] = false;

	$tdatafabricante[".locking"] = false;


$pages = $tdatafabricante[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafabricante[".edit"] = true;
	$tdatafabricante[".afterEditAction"] = 1;
	$tdatafabricante[".closePopupAfterEdit"] = 1;
	$tdatafabricante[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafabricante[".add"] = true;
$tdatafabricante[".afterAddAction"] = 1;
$tdatafabricante[".closePopupAfterAdd"] = 1;
$tdatafabricante[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafabricante[".list"] = true;
}



$tdatafabricante[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafabricante[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafabricante[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafabricante[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafabricante[".printFriendly"] = true;
}



$tdatafabricante[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafabricante[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafabricante[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafabricante[".isUseAjaxSuggest"] = true;



			

$tdatafabricante[".ajaxCodeSnippetAdded"] = false;

$tdatafabricante[".buttonsAdded"] = false;

$tdatafabricante[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafabricante[".isUseTimeForSearch"] = false;


$tdatafabricante[".badgeColor"] = "2F4F4F";


$tdatafabricante[".allSearchFields"] = array();
$tdatafabricante[".filterFields"] = array();
$tdatafabricante[".requiredSearchFields"] = array();

$tdatafabricante[".googleLikeFields"] = array();
$tdatafabricante[".googleLikeFields"][] = "id_Fabricante";
$tdatafabricante[".googleLikeFields"][] = "Nombre_Fab";



$tdatafabricante[".tableType"] = "list";

$tdatafabricante[".printerPageOrientation"] = 0;
$tdatafabricante[".nPrinterPageScale"] = 100;

$tdatafabricante[".nPrinterSplitRecords"] = 40;

$tdatafabricante[".geocodingEnabled"] = false;










$tdatafabricante[".pageSize"] = 20;

$tdatafabricante[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafabricante[".strOrderBy"] = $tstrOrderBy;

$tdatafabricante[".orderindexes"] = array();


$tdatafabricante[".sqlHead"] = "SELECT id_Fabricante,  	Nombre_Fab";
$tdatafabricante[".sqlFrom"] = "FROM fabricante";
$tdatafabricante[".sqlWhereExpr"] = "";
$tdatafabricante[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafabricante[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafabricante[".arrGroupsPerPage"] = $arrGPP;

$tdatafabricante[".highlightSearchResults"] = true;

$tableKeysfabricante = array();
$tableKeysfabricante[] = "id_Fabricante";
$tdatafabricante[".Keys"] = $tableKeysfabricante;


$tdatafabricante[".hideMobileList"] = array();




//	id_Fabricante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Fabricante";
	$fdata["GoodName"] = "id_Fabricante";
	$fdata["ownerTable"] = "fabricante";
	$fdata["Label"] = GetFieldLabel("fabricante","id_Fabricante");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Fabricante";

		$fdata["sourceSingle"] = "id_Fabricante";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Fabricante";

	
	
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


	$tdatafabricante["id_Fabricante"] = $fdata;
		$tdatafabricante[".searchableFields"][] = "id_Fabricante";
//	Nombre_Fab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre_Fab";
	$fdata["GoodName"] = "Nombre_Fab";
	$fdata["ownerTable"] = "fabricante";
	$fdata["Label"] = GetFieldLabel("fabricante","Nombre_Fab");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre_Fab";

		$fdata["sourceSingle"] = "Nombre_Fab";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre_Fab";

	
	
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


	$tdatafabricante["Nombre_Fab"] = $fdata;
		$tdatafabricante[".searchableFields"][] = "Nombre_Fab";


$tables_data["fabricante"]=&$tdatafabricante;
$field_labels["fabricante"] = &$fieldLabelsfabricante;
$fieldToolTips["fabricante"] = &$fieldToolTipsfabricante;
$placeHolders["fabricante"] = &$placeHoldersfabricante;
$page_titles["fabricante"] = &$pageTitlesfabricante;


changeTextControlsToDate( "fabricante" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["fabricante"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["fabricante"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_fabricante()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Fabricante,  	Nombre_Fab";
$proto0["m_strFrom"] = "FROM fabricante";
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
	"m_strName" => "id_Fabricante",
	"m_strTable" => "fabricante",
	"m_srcTableName" => "fabricante"
));

$proto6["m_sql"] = "id_Fabricante";
$proto6["m_srcTableName"] = "fabricante";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Fab",
	"m_strTable" => "fabricante",
	"m_srcTableName" => "fabricante"
));

$proto8["m_sql"] = "Nombre_Fab";
$proto8["m_srcTableName"] = "fabricante";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "fabricante";
$proto11["m_srcTableName"] = "fabricante";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_Fabricante";
$proto11["m_columns"][] = "Nombre_Fab";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "fabricante";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "fabricante";
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
$proto0["m_srcTableName"]="fabricante";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fabricante = createSqlQuery_fabricante();


	
		;

		

$tdatafabricante[".sqlquery"] = $queryData_fabricante;



$tdatafabricante[".hasEvents"] = false;

?>