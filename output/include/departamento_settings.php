<?php
$tdatadepartamento = array();
$tdatadepartamento[".searchableFields"] = array();
$tdatadepartamento[".ShortName"] = "departamento";
$tdatadepartamento[".OwnerID"] = "";
$tdatadepartamento[".OriginalTable"] = "departamento";


$tdatadepartamento[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadepartamento[".originalPagesByType"] = $tdatadepartamento[".pagesByType"];
$tdatadepartamento[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadepartamento[".originalPages"] = $tdatadepartamento[".pages"];
$tdatadepartamento[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadepartamento[".originalDefaultPages"] = $tdatadepartamento[".defaultPages"];

//	field labels
$fieldLabelsdepartamento = array();
$fieldToolTipsdepartamento = array();
$pageTitlesdepartamento = array();
$placeHoldersdepartamento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdepartamento["Spanish"] = array();
	$fieldToolTipsdepartamento["Spanish"] = array();
	$placeHoldersdepartamento["Spanish"] = array();
	$pageTitlesdepartamento["Spanish"] = array();
	$fieldLabelsdepartamento["Spanish"]["id_Departamento"] = "Id Departamento";
	$fieldToolTipsdepartamento["Spanish"]["id_Departamento"] = "";
	$placeHoldersdepartamento["Spanish"]["id_Departamento"] = "";
	$fieldLabelsdepartamento["Spanish"]["Departamento"] = "Departamento";
	$fieldToolTipsdepartamento["Spanish"]["Departamento"] = "";
	$placeHoldersdepartamento["Spanish"]["Departamento"] = "";
	if (count($fieldToolTipsdepartamento["Spanish"]))
		$tdatadepartamento[".isUseToolTips"] = true;
}


	$tdatadepartamento[".NCSearch"] = true;



$tdatadepartamento[".shortTableName"] = "departamento";
$tdatadepartamento[".nSecOptions"] = 0;

$tdatadepartamento[".mainTableOwnerID"] = "";
$tdatadepartamento[".entityType"] = 0;
$tdatadepartamento[".connId"] = "project_pst_sena_at_localhost";


$tdatadepartamento[".strOriginalTableName"] = "departamento";

	



$tdatadepartamento[".showAddInPopup"] = false;

$tdatadepartamento[".showEditInPopup"] = false;

$tdatadepartamento[".showViewInPopup"] = false;

$tdatadepartamento[".listAjax"] = false;
//	temporary
//$tdatadepartamento[".listAjax"] = false;

	$tdatadepartamento[".audit"] = false;

	$tdatadepartamento[".locking"] = false;


$pages = $tdatadepartamento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadepartamento[".edit"] = true;
	$tdatadepartamento[".afterEditAction"] = 1;
	$tdatadepartamento[".closePopupAfterEdit"] = 1;
	$tdatadepartamento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadepartamento[".add"] = true;
$tdatadepartamento[".afterAddAction"] = 1;
$tdatadepartamento[".closePopupAfterAdd"] = 1;
$tdatadepartamento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadepartamento[".list"] = true;
}



$tdatadepartamento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadepartamento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadepartamento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadepartamento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadepartamento[".printFriendly"] = true;
}



$tdatadepartamento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadepartamento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadepartamento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadepartamento[".isUseAjaxSuggest"] = true;



			

$tdatadepartamento[".ajaxCodeSnippetAdded"] = false;

$tdatadepartamento[".buttonsAdded"] = false;

$tdatadepartamento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartamento[".isUseTimeForSearch"] = false;


$tdatadepartamento[".badgeColor"] = "E07878";


$tdatadepartamento[".allSearchFields"] = array();
$tdatadepartamento[".filterFields"] = array();
$tdatadepartamento[".requiredSearchFields"] = array();

$tdatadepartamento[".googleLikeFields"] = array();
$tdatadepartamento[".googleLikeFields"][] = "id_Departamento";
$tdatadepartamento[".googleLikeFields"][] = "Departamento";



$tdatadepartamento[".tableType"] = "list";

$tdatadepartamento[".printerPageOrientation"] = 0;
$tdatadepartamento[".nPrinterPageScale"] = 100;

$tdatadepartamento[".nPrinterSplitRecords"] = 40;

$tdatadepartamento[".geocodingEnabled"] = false;










$tdatadepartamento[".pageSize"] = 20;

$tdatadepartamento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadepartamento[".strOrderBy"] = $tstrOrderBy;

$tdatadepartamento[".orderindexes"] = array();


$tdatadepartamento[".sqlHead"] = "SELECT id_Departamento,  	Departamento";
$tdatadepartamento[".sqlFrom"] = "FROM departamento";
$tdatadepartamento[".sqlWhereExpr"] = "";
$tdatadepartamento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepartamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartamento[".arrGroupsPerPage"] = $arrGPP;

$tdatadepartamento[".highlightSearchResults"] = true;

$tableKeysdepartamento = array();
$tableKeysdepartamento[] = "id_Departamento";
$tdatadepartamento[".Keys"] = $tableKeysdepartamento;


$tdatadepartamento[".hideMobileList"] = array();




//	id_Departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Departamento";
	$fdata["GoodName"] = "id_Departamento";
	$fdata["ownerTable"] = "departamento";
	$fdata["Label"] = GetFieldLabel("departamento","id_Departamento");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Departamento";

		$fdata["sourceSingle"] = "id_Departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Departamento";

	
	
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


	$tdatadepartamento["id_Departamento"] = $fdata;
		$tdatadepartamento[".searchableFields"][] = "id_Departamento";
//	Departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Departamento";
	$fdata["GoodName"] = "Departamento";
	$fdata["ownerTable"] = "departamento";
	$fdata["Label"] = GetFieldLabel("departamento","Departamento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Departamento";

		$fdata["sourceSingle"] = "Departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Departamento";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatadepartamento["Departamento"] = $fdata;
		$tdatadepartamento[".searchableFields"][] = "Departamento";


$tables_data["departamento"]=&$tdatadepartamento;
$field_labels["departamento"] = &$fieldLabelsdepartamento;
$fieldToolTips["departamento"] = &$fieldToolTipsdepartamento;
$placeHolders["departamento"] = &$placeHoldersdepartamento;
$page_titles["departamento"] = &$pageTitlesdepartamento;


changeTextControlsToDate( "departamento" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["departamento"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["departamento"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_departamento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Departamento,  	Departamento";
$proto0["m_strFrom"] = "FROM departamento";
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
	"m_strName" => "id_Departamento",
	"m_strTable" => "departamento",
	"m_srcTableName" => "departamento"
));

$proto6["m_sql"] = "id_Departamento";
$proto6["m_srcTableName"] = "departamento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Departamento",
	"m_strTable" => "departamento",
	"m_srcTableName" => "departamento"
));

$proto8["m_sql"] = "Departamento";
$proto8["m_srcTableName"] = "departamento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "departamento";
$proto11["m_srcTableName"] = "departamento";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_Departamento";
$proto11["m_columns"][] = "Departamento";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "departamento";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "departamento";
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
$proto0["m_srcTableName"]="departamento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_departamento = createSqlQuery_departamento();


	
		;

		

$tdatadepartamento[".sqlquery"] = $queryData_departamento;



$tdatadepartamento[".hasEvents"] = false;

?>