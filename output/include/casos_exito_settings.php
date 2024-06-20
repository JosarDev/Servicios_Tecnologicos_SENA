<?php
$tdatacasos_exito = array();
$tdatacasos_exito[".searchableFields"] = array();
$tdatacasos_exito[".ShortName"] = "casos_exito";
$tdatacasos_exito[".OwnerID"] = "";
$tdatacasos_exito[".OriginalTable"] = "casos_exito";


$tdatacasos_exito[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacasos_exito[".originalPagesByType"] = $tdatacasos_exito[".pagesByType"];
$tdatacasos_exito[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacasos_exito[".originalPages"] = $tdatacasos_exito[".pages"];
$tdatacasos_exito[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacasos_exito[".originalDefaultPages"] = $tdatacasos_exito[".defaultPages"];

//	field labels
$fieldLabelscasos_exito = array();
$fieldToolTipscasos_exito = array();
$pageTitlescasos_exito = array();
$placeHolderscasos_exito = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscasos_exito["Spanish"] = array();
	$fieldToolTipscasos_exito["Spanish"] = array();
	$placeHolderscasos_exito["Spanish"] = array();
	$pageTitlescasos_exito["Spanish"] = array();
	$fieldLabelscasos_exito["Spanish"]["id_CAEX"] = "Id CAEX";
	$fieldToolTipscasos_exito["Spanish"]["id_CAEX"] = "";
	$placeHolderscasos_exito["Spanish"]["id_CAEX"] = "";
	$fieldLabelscasos_exito["Spanish"]["Video"] = "Video";
	$fieldToolTipscasos_exito["Spanish"]["Video"] = "";
	$placeHolderscasos_exito["Spanish"]["Video"] = "";
	$fieldLabelscasos_exito["Spanish"]["Titulo"] = "Titulo";
	$fieldToolTipscasos_exito["Spanish"]["Titulo"] = "";
	$placeHolderscasos_exito["Spanish"]["Titulo"] = "";
	$fieldLabelscasos_exito["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipscasos_exito["Spanish"]["Descripcion"] = "";
	$placeHolderscasos_exito["Spanish"]["Descripcion"] = "";
	$fieldLabelscasos_exito["Spanish"]["fk_id_Laboratorio"] = "Fk Id Laboratorio";
	$fieldToolTipscasos_exito["Spanish"]["fk_id_Laboratorio"] = "";
	$placeHolderscasos_exito["Spanish"]["fk_id_Laboratorio"] = "";
	if (count($fieldToolTipscasos_exito["Spanish"]))
		$tdatacasos_exito[".isUseToolTips"] = true;
}


	$tdatacasos_exito[".NCSearch"] = true;



$tdatacasos_exito[".shortTableName"] = "casos_exito";
$tdatacasos_exito[".nSecOptions"] = 0;

$tdatacasos_exito[".mainTableOwnerID"] = "";
$tdatacasos_exito[".entityType"] = 0;
$tdatacasos_exito[".connId"] = "project_pst_sena_at_localhost";


$tdatacasos_exito[".strOriginalTableName"] = "casos_exito";

	



$tdatacasos_exito[".showAddInPopup"] = false;

$tdatacasos_exito[".showEditInPopup"] = false;

$tdatacasos_exito[".showViewInPopup"] = false;

$tdatacasos_exito[".listAjax"] = false;
//	temporary
//$tdatacasos_exito[".listAjax"] = false;

	$tdatacasos_exito[".audit"] = false;

	$tdatacasos_exito[".locking"] = false;


$pages = $tdatacasos_exito[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacasos_exito[".edit"] = true;
	$tdatacasos_exito[".afterEditAction"] = 1;
	$tdatacasos_exito[".closePopupAfterEdit"] = 1;
	$tdatacasos_exito[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacasos_exito[".add"] = true;
$tdatacasos_exito[".afterAddAction"] = 1;
$tdatacasos_exito[".closePopupAfterAdd"] = 1;
$tdatacasos_exito[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacasos_exito[".list"] = true;
}



$tdatacasos_exito[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacasos_exito[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacasos_exito[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacasos_exito[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacasos_exito[".printFriendly"] = true;
}



$tdatacasos_exito[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacasos_exito[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacasos_exito[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacasos_exito[".isUseAjaxSuggest"] = true;





$tdatacasos_exito[".ajaxCodeSnippetAdded"] = false;

$tdatacasos_exito[".buttonsAdded"] = false;

$tdatacasos_exito[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacasos_exito[".isUseTimeForSearch"] = false;


$tdatacasos_exito[".badgeColor"] = "daa520";


$tdatacasos_exito[".allSearchFields"] = array();
$tdatacasos_exito[".filterFields"] = array();
$tdatacasos_exito[".requiredSearchFields"] = array();

$tdatacasos_exito[".googleLikeFields"] = array();
$tdatacasos_exito[".googleLikeFields"][] = "id_CAEX";
$tdatacasos_exito[".googleLikeFields"][] = "Video";
$tdatacasos_exito[".googleLikeFields"][] = "Titulo";
$tdatacasos_exito[".googleLikeFields"][] = "Descripcion";
$tdatacasos_exito[".googleLikeFields"][] = "fk_id_Laboratorio";



$tdatacasos_exito[".tableType"] = "list";

$tdatacasos_exito[".printerPageOrientation"] = 0;
$tdatacasos_exito[".nPrinterPageScale"] = 100;

$tdatacasos_exito[".nPrinterSplitRecords"] = 40;

$tdatacasos_exito[".geocodingEnabled"] = false;










$tdatacasos_exito[".pageSize"] = 20;

$tdatacasos_exito[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacasos_exito[".strOrderBy"] = $tstrOrderBy;

$tdatacasos_exito[".orderindexes"] = array();


$tdatacasos_exito[".sqlHead"] = "SELECT id_CAEX,  	Video,  	Titulo,  	Descripcion,  	fk_id_Laboratorio";
$tdatacasos_exito[".sqlFrom"] = "FROM casos_exito";
$tdatacasos_exito[".sqlWhereExpr"] = "";
$tdatacasos_exito[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacasos_exito[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacasos_exito[".arrGroupsPerPage"] = $arrGPP;

$tdatacasos_exito[".highlightSearchResults"] = true;

$tableKeyscasos_exito = array();
$tableKeyscasos_exito[] = "id_CAEX";
$tdatacasos_exito[".Keys"] = $tableKeyscasos_exito;


$tdatacasos_exito[".hideMobileList"] = array();




//	id_CAEX
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_CAEX";
	$fdata["GoodName"] = "id_CAEX";
	$fdata["ownerTable"] = "casos_exito";
	$fdata["Label"] = GetFieldLabel("casos_exito","id_CAEX");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_CAEX";

		$fdata["sourceSingle"] = "id_CAEX";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_CAEX";

	
	
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


	$tdatacasos_exito["id_CAEX"] = $fdata;
		$tdatacasos_exito[".searchableFields"][] = "id_CAEX";
//	Video
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Video";
	$fdata["GoodName"] = "Video";
	$fdata["ownerTable"] = "casos_exito";
	$fdata["Label"] = GetFieldLabel("casos_exito","Video");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Video";

		$fdata["sourceSingle"] = "Video";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Video";

	
	
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


	$tdatacasos_exito["Video"] = $fdata;
		$tdatacasos_exito[".searchableFields"][] = "Video";
//	Titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Titulo";
	$fdata["GoodName"] = "Titulo";
	$fdata["ownerTable"] = "casos_exito";
	$fdata["Label"] = GetFieldLabel("casos_exito","Titulo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Titulo";

		$fdata["sourceSingle"] = "Titulo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Titulo";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacasos_exito["Titulo"] = $fdata;
		$tdatacasos_exito[".searchableFields"][] = "Titulo";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "casos_exito";
	$fdata["Label"] = GetFieldLabel("casos_exito","Descripcion");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Descripcion";

		$fdata["sourceSingle"] = "Descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion";

	
	
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


	$tdatacasos_exito["Descripcion"] = $fdata;
		$tdatacasos_exito[".searchableFields"][] = "Descripcion";
//	fk_id_Laboratorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fk_id_Laboratorio";
	$fdata["GoodName"] = "fk_id_Laboratorio";
	$fdata["ownerTable"] = "casos_exito";
	$fdata["Label"] = GetFieldLabel("casos_exito","fk_id_Laboratorio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_Laboratorio";

		$fdata["sourceSingle"] = "fk_id_Laboratorio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_Laboratorio";

	
	
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


	$tdatacasos_exito["fk_id_Laboratorio"] = $fdata;
		$tdatacasos_exito[".searchableFields"][] = "fk_id_Laboratorio";


$tables_data["casos_exito"]=&$tdatacasos_exito;
$field_labels["casos_exito"] = &$fieldLabelscasos_exito;
$fieldToolTips["casos_exito"] = &$fieldToolTipscasos_exito;
$placeHolders["casos_exito"] = &$placeHolderscasos_exito;
$page_titles["casos_exito"] = &$pageTitlescasos_exito;


changeTextControlsToDate( "casos_exito" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["casos_exito"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["casos_exito"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="laboratorio";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="laboratorio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "laboratorio";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["casos_exito"][0] = $masterParams;
				$masterTablesData["casos_exito"][0]["masterKeys"] = array();
	$masterTablesData["casos_exito"][0]["masterKeys"][]="id_Laboratorio";
				$masterTablesData["casos_exito"][0]["detailKeys"] = array();
	$masterTablesData["casos_exito"][0]["detailKeys"][]="fk_id_Laboratorio";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_casos_exito()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_CAEX,  	Video,  	Titulo,  	Descripcion,  	fk_id_Laboratorio";
$proto0["m_strFrom"] = "FROM casos_exito";
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
	"m_strName" => "id_CAEX",
	"m_strTable" => "casos_exito",
	"m_srcTableName" => "casos_exito"
));

$proto6["m_sql"] = "id_CAEX";
$proto6["m_srcTableName"] = "casos_exito";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Video",
	"m_strTable" => "casos_exito",
	"m_srcTableName" => "casos_exito"
));

$proto8["m_sql"] = "Video";
$proto8["m_srcTableName"] = "casos_exito";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Titulo",
	"m_strTable" => "casos_exito",
	"m_srcTableName" => "casos_exito"
));

$proto10["m_sql"] = "Titulo";
$proto10["m_srcTableName"] = "casos_exito";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "casos_exito",
	"m_srcTableName" => "casos_exito"
));

$proto12["m_sql"] = "Descripcion";
$proto12["m_srcTableName"] = "casos_exito";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Laboratorio",
	"m_strTable" => "casos_exito",
	"m_srcTableName" => "casos_exito"
));

$proto14["m_sql"] = "fk_id_Laboratorio";
$proto14["m_srcTableName"] = "casos_exito";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "casos_exito";
$proto17["m_srcTableName"] = "casos_exito";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_CAEX";
$proto17["m_columns"][] = "Video";
$proto17["m_columns"][] = "Titulo";
$proto17["m_columns"][] = "Descripcion";
$proto17["m_columns"][] = "fk_id_Laboratorio";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "casos_exito";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "casos_exito";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="casos_exito";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_casos_exito = createSqlQuery_casos_exito();


	
		;

					

$tdatacasos_exito[".sqlquery"] = $queryData_casos_exito;



$tdatacasos_exito[".hasEvents"] = false;

?>