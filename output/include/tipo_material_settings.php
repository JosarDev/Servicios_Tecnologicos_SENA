<?php
$tdatatipo_material = array();
$tdatatipo_material[".searchableFields"] = array();
$tdatatipo_material[".ShortName"] = "tipo_material";
$tdatatipo_material[".OwnerID"] = "";
$tdatatipo_material[".OriginalTable"] = "tipo_material";


$tdatatipo_material[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatipo_material[".originalPagesByType"] = $tdatatipo_material[".pagesByType"];
$tdatatipo_material[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatipo_material[".originalPages"] = $tdatatipo_material[".pages"];
$tdatatipo_material[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatipo_material[".originalDefaultPages"] = $tdatatipo_material[".defaultPages"];

//	field labels
$fieldLabelstipo_material = array();
$fieldToolTipstipo_material = array();
$pageTitlestipo_material = array();
$placeHolderstipo_material = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_material["Spanish"] = array();
	$fieldToolTipstipo_material["Spanish"] = array();
	$placeHolderstipo_material["Spanish"] = array();
	$pageTitlestipo_material["Spanish"] = array();
	$fieldLabelstipo_material["Spanish"]["id_Material"] = "Id Material";
	$fieldToolTipstipo_material["Spanish"]["id_Material"] = "";
	$placeHolderstipo_material["Spanish"]["id_Material"] = "";
	$fieldLabelstipo_material["Spanish"]["Nombre_Mat"] = "Nombre Del Tipo de Material";
	$fieldToolTipstipo_material["Spanish"]["Nombre_Mat"] = "";
	$placeHolderstipo_material["Spanish"]["Nombre_Mat"] = "";
	if (count($fieldToolTipstipo_material["Spanish"]))
		$tdatatipo_material[".isUseToolTips"] = true;
}


	$tdatatipo_material[".NCSearch"] = true;



$tdatatipo_material[".shortTableName"] = "tipo_material";
$tdatatipo_material[".nSecOptions"] = 0;

$tdatatipo_material[".mainTableOwnerID"] = "";
$tdatatipo_material[".entityType"] = 0;
$tdatatipo_material[".connId"] = "project_pst_sena_at_localhost";


$tdatatipo_material[".strOriginalTableName"] = "tipo_material";

	



$tdatatipo_material[".showAddInPopup"] = false;

$tdatatipo_material[".showEditInPopup"] = false;

$tdatatipo_material[".showViewInPopup"] = false;

$tdatatipo_material[".listAjax"] = false;
//	temporary
//$tdatatipo_material[".listAjax"] = false;

	$tdatatipo_material[".audit"] = false;

	$tdatatipo_material[".locking"] = false;


$pages = $tdatatipo_material[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_material[".edit"] = true;
	$tdatatipo_material[".afterEditAction"] = 1;
	$tdatatipo_material[".closePopupAfterEdit"] = 1;
	$tdatatipo_material[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_material[".add"] = true;
$tdatatipo_material[".afterAddAction"] = 1;
$tdatatipo_material[".closePopupAfterAdd"] = 1;
$tdatatipo_material[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_material[".list"] = true;
}



$tdatatipo_material[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_material[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_material[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_material[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_material[".printFriendly"] = true;
}



$tdatatipo_material[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_material[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_material[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_material[".isUseAjaxSuggest"] = true;



			

$tdatatipo_material[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_material[".buttonsAdded"] = false;

$tdatatipo_material[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_material[".isUseTimeForSearch"] = false;


$tdatatipo_material[".badgeColor"] = "5F9EA0";


$tdatatipo_material[".allSearchFields"] = array();
$tdatatipo_material[".filterFields"] = array();
$tdatatipo_material[".requiredSearchFields"] = array();

$tdatatipo_material[".googleLikeFields"] = array();
$tdatatipo_material[".googleLikeFields"][] = "id_Material";
$tdatatipo_material[".googleLikeFields"][] = "Nombre_Mat";



$tdatatipo_material[".tableType"] = "list";

$tdatatipo_material[".printerPageOrientation"] = 0;
$tdatatipo_material[".nPrinterPageScale"] = 100;

$tdatatipo_material[".nPrinterSplitRecords"] = 40;

$tdatatipo_material[".geocodingEnabled"] = false;










$tdatatipo_material[".pageSize"] = 20;

$tdatatipo_material[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipo_material[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_material[".orderindexes"] = array();


$tdatatipo_material[".sqlHead"] = "SELECT id_Material,  	Nombre_Mat";
$tdatatipo_material[".sqlFrom"] = "FROM tipo_material";
$tdatatipo_material[".sqlWhereExpr"] = "";
$tdatatipo_material[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_material[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_material[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_material[".highlightSearchResults"] = true;

$tableKeystipo_material = array();
$tableKeystipo_material[] = "id_Material";
$tdatatipo_material[".Keys"] = $tableKeystipo_material;


$tdatatipo_material[".hideMobileList"] = array();




//	id_Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Material";
	$fdata["GoodName"] = "id_Material";
	$fdata["ownerTable"] = "tipo_material";
	$fdata["Label"] = GetFieldLabel("tipo_material","id_Material");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Material";

		$fdata["sourceSingle"] = "id_Material";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Material";

	
	
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


	$tdatatipo_material["id_Material"] = $fdata;
		$tdatatipo_material[".searchableFields"][] = "id_Material";
//	Nombre_Mat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre_Mat";
	$fdata["GoodName"] = "Nombre_Mat";
	$fdata["ownerTable"] = "tipo_material";
	$fdata["Label"] = GetFieldLabel("tipo_material","Nombre_Mat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre_Mat";

		$fdata["sourceSingle"] = "Nombre_Mat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre_Mat";

	
	
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


	$tdatatipo_material["Nombre_Mat"] = $fdata;
		$tdatatipo_material[".searchableFields"][] = "Nombre_Mat";


$tables_data["tipo_material"]=&$tdatatipo_material;
$field_labels["tipo_material"] = &$fieldLabelstipo_material;
$fieldToolTips["tipo_material"] = &$fieldToolTipstipo_material;
$placeHolders["tipo_material"] = &$placeHolderstipo_material;
$page_titles["tipo_material"] = &$pageTitlestipo_material;


changeTextControlsToDate( "tipo_material" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tipo_material"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tipo_material"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipo_material()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Material,  	Nombre_Mat";
$proto0["m_strFrom"] = "FROM tipo_material";
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
	"m_strName" => "id_Material",
	"m_strTable" => "tipo_material",
	"m_srcTableName" => "tipo_material"
));

$proto6["m_sql"] = "id_Material";
$proto6["m_srcTableName"] = "tipo_material";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Mat",
	"m_strTable" => "tipo_material",
	"m_srcTableName" => "tipo_material"
));

$proto8["m_sql"] = "Nombre_Mat";
$proto8["m_srcTableName"] = "tipo_material";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tipo_material";
$proto11["m_srcTableName"] = "tipo_material";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_Material";
$proto11["m_columns"][] = "Nombre_Mat";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tipo_material";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tipo_material";
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
$proto0["m_srcTableName"]="tipo_material";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_material = createSqlQuery_tipo_material();


	
		;

		

$tdatatipo_material[".sqlquery"] = $queryData_tipo_material;



$tdatatipo_material[".hasEvents"] = false;

?>