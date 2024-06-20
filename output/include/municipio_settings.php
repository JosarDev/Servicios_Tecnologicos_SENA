<?php
$tdatamunicipio = array();
$tdatamunicipio[".searchableFields"] = array();
$tdatamunicipio[".ShortName"] = "municipio";
$tdatamunicipio[".OwnerID"] = "";
$tdatamunicipio[".OriginalTable"] = "municipio";


$tdatamunicipio[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamunicipio[".originalPagesByType"] = $tdatamunicipio[".pagesByType"];
$tdatamunicipio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamunicipio[".originalPages"] = $tdatamunicipio[".pages"];
$tdatamunicipio[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamunicipio[".originalDefaultPages"] = $tdatamunicipio[".defaultPages"];

//	field labels
$fieldLabelsmunicipio = array();
$fieldToolTipsmunicipio = array();
$pageTitlesmunicipio = array();
$placeHoldersmunicipio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmunicipio["Spanish"] = array();
	$fieldToolTipsmunicipio["Spanish"] = array();
	$placeHoldersmunicipio["Spanish"] = array();
	$pageTitlesmunicipio["Spanish"] = array();
	$fieldLabelsmunicipio["Spanish"]["id"] = "Id";
	$fieldToolTipsmunicipio["Spanish"]["id"] = "";
	$placeHoldersmunicipio["Spanish"]["id"] = "";
	$fieldLabelsmunicipio["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsmunicipio["Spanish"]["departamento"] = "";
	$placeHoldersmunicipio["Spanish"]["departamento"] = "";
	$fieldLabelsmunicipio["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsmunicipio["Spanish"]["municipio"] = "";
	$placeHoldersmunicipio["Spanish"]["municipio"] = "";
	$fieldLabelsmunicipio["Spanish"]["orden"] = "Orden";
	$fieldToolTipsmunicipio["Spanish"]["orden"] = "";
	$placeHoldersmunicipio["Spanish"]["orden"] = "";
	if (count($fieldToolTipsmunicipio["Spanish"]))
		$tdatamunicipio[".isUseToolTips"] = true;
}


	$tdatamunicipio[".NCSearch"] = true;



$tdatamunicipio[".shortTableName"] = "municipio";
$tdatamunicipio[".nSecOptions"] = 0;

$tdatamunicipio[".mainTableOwnerID"] = "";
$tdatamunicipio[".entityType"] = 0;
$tdatamunicipio[".connId"] = "project_pst_sena_at_localhost";


$tdatamunicipio[".strOriginalTableName"] = "municipio";

	



$tdatamunicipio[".showAddInPopup"] = false;

$tdatamunicipio[".showEditInPopup"] = false;

$tdatamunicipio[".showViewInPopup"] = false;

$tdatamunicipio[".listAjax"] = false;
//	temporary
//$tdatamunicipio[".listAjax"] = false;

	$tdatamunicipio[".audit"] = false;

	$tdatamunicipio[".locking"] = false;


$pages = $tdatamunicipio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamunicipio[".edit"] = true;
	$tdatamunicipio[".afterEditAction"] = 1;
	$tdatamunicipio[".closePopupAfterEdit"] = 1;
	$tdatamunicipio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamunicipio[".add"] = true;
$tdatamunicipio[".afterAddAction"] = 1;
$tdatamunicipio[".closePopupAfterAdd"] = 1;
$tdatamunicipio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamunicipio[".list"] = true;
}



$tdatamunicipio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamunicipio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamunicipio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamunicipio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamunicipio[".printFriendly"] = true;
}



$tdatamunicipio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamunicipio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamunicipio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamunicipio[".isUseAjaxSuggest"] = true;





$tdatamunicipio[".ajaxCodeSnippetAdded"] = false;

$tdatamunicipio[".buttonsAdded"] = false;

$tdatamunicipio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamunicipio[".isUseTimeForSearch"] = false;


$tdatamunicipio[".badgeColor"] = "DB7093";


$tdatamunicipio[".allSearchFields"] = array();
$tdatamunicipio[".filterFields"] = array();
$tdatamunicipio[".requiredSearchFields"] = array();

$tdatamunicipio[".googleLikeFields"] = array();
$tdatamunicipio[".googleLikeFields"][] = "id";
$tdatamunicipio[".googleLikeFields"][] = "departamento";
$tdatamunicipio[".googleLikeFields"][] = "municipio";
$tdatamunicipio[".googleLikeFields"][] = "orden";



$tdatamunicipio[".tableType"] = "list";

$tdatamunicipio[".printerPageOrientation"] = 0;
$tdatamunicipio[".nPrinterPageScale"] = 100;

$tdatamunicipio[".nPrinterSplitRecords"] = 40;

$tdatamunicipio[".geocodingEnabled"] = false;










$tdatamunicipio[".pageSize"] = 20;

$tdatamunicipio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamunicipio[".strOrderBy"] = $tstrOrderBy;

$tdatamunicipio[".orderindexes"] = array();


$tdatamunicipio[".sqlHead"] = "SELECT id,  	departamento,  	municipio,  	orden";
$tdatamunicipio[".sqlFrom"] = "FROM municipio";
$tdatamunicipio[".sqlWhereExpr"] = "";
$tdatamunicipio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamunicipio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamunicipio[".arrGroupsPerPage"] = $arrGPP;

$tdatamunicipio[".highlightSearchResults"] = true;

$tableKeysmunicipio = array();
$tableKeysmunicipio[] = "id";
$tdatamunicipio[".Keys"] = $tableKeysmunicipio;


$tdatamunicipio[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = GetFieldLabel("municipio","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatamunicipio["id"] = $fdata;
		$tdatamunicipio[".searchableFields"][] = "id";
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = GetFieldLabel("municipio","departamento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "departamento";

		$fdata["sourceSingle"] = "departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamento";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatamunicipio["departamento"] = $fdata;
		$tdatamunicipio[".searchableFields"][] = "departamento";
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = GetFieldLabel("municipio","municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "municipio";

		$fdata["sourceSingle"] = "municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatamunicipio["municipio"] = $fdata;
		$tdatamunicipio[".searchableFields"][] = "municipio";
//	orden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "orden";
	$fdata["GoodName"] = "orden";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = GetFieldLabel("municipio","orden");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "orden";

		$fdata["sourceSingle"] = "orden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "orden";

	
	
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


	$tdatamunicipio["orden"] = $fdata;
		$tdatamunicipio[".searchableFields"][] = "orden";


$tables_data["municipio"]=&$tdatamunicipio;
$field_labels["municipio"] = &$fieldLabelsmunicipio;
$fieldToolTips["municipio"] = &$fieldToolTipsmunicipio;
$placeHolders["municipio"] = &$placeHoldersmunicipio;
$page_titles["municipio"] = &$pageTitlesmunicipio;


changeTextControlsToDate( "municipio" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["municipio"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["municipio"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_municipio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	departamento,  	municipio,  	orden";
$proto0["m_strFrom"] = "FROM municipio";
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
	"m_strName" => "id",
	"m_strTable" => "municipio",
	"m_srcTableName" => "municipio"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "municipio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "municipio",
	"m_srcTableName" => "municipio"
));

$proto8["m_sql"] = "departamento";
$proto8["m_srcTableName"] = "municipio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "municipio",
	"m_srcTableName" => "municipio"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "municipio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "orden",
	"m_strTable" => "municipio",
	"m_srcTableName" => "municipio"
));

$proto12["m_sql"] = "orden";
$proto12["m_srcTableName"] = "municipio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "municipio";
$proto15["m_srcTableName"] = "municipio";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "departamento";
$proto15["m_columns"][] = "municipio";
$proto15["m_columns"][] = "orden";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "municipio";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "municipio";
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
$proto0["m_srcTableName"]="municipio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_municipio = createSqlQuery_municipio();


	
		;

				

$tdatamunicipio[".sqlquery"] = $queryData_municipio;



$tdatamunicipio[".hasEvents"] = false;

?>