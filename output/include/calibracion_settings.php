<?php
$tdatacalibracion = array();
$tdatacalibracion[".searchableFields"] = array();
$tdatacalibracion[".ShortName"] = "calibracion";
$tdatacalibracion[".OwnerID"] = "";
$tdatacalibracion[".OriginalTable"] = "calibracion";


$tdatacalibracion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacalibracion[".originalPagesByType"] = $tdatacalibracion[".pagesByType"];
$tdatacalibracion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacalibracion[".originalPages"] = $tdatacalibracion[".pages"];
$tdatacalibracion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacalibracion[".originalDefaultPages"] = $tdatacalibracion[".defaultPages"];

//	field labels
$fieldLabelscalibracion = array();
$fieldToolTipscalibracion = array();
$pageTitlescalibracion = array();
$placeHolderscalibracion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscalibracion["Spanish"] = array();
	$fieldToolTipscalibracion["Spanish"] = array();
	$placeHolderscalibracion["Spanish"] = array();
	$pageTitlescalibracion["Spanish"] = array();
	$fieldLabelscalibracion["Spanish"]["id_Calibracion"] = "Id Calibracion";
	$fieldToolTipscalibracion["Spanish"]["id_Calibracion"] = "";
	$placeHolderscalibracion["Spanish"]["id_Calibracion"] = "";
	$fieldLabelscalibracion["Spanish"]["Instrumento"] = "Instrumento";
	$fieldToolTipscalibracion["Spanish"]["Instrumento"] = "";
	$placeHolderscalibracion["Spanish"]["Instrumento"] = "";
	$fieldLabelscalibracion["Spanish"]["Fabricante"] = "Fabricante";
	$fieldToolTipscalibracion["Spanish"]["Fabricante"] = "";
	$placeHolderscalibracion["Spanish"]["Fabricante"] = "";
	$fieldLabelscalibracion["Spanish"]["Modelo"] = "Modelo";
	$fieldToolTipscalibracion["Spanish"]["Modelo"] = "";
	$placeHolderscalibracion["Spanish"]["Modelo"] = "";
	$fieldLabelscalibracion["Spanish"]["Serie"] = "Serie";
	$fieldToolTipscalibracion["Spanish"]["Serie"] = "";
	$placeHolderscalibracion["Spanish"]["Serie"] = "";
	$fieldLabelscalibracion["Spanish"]["Cog_Interno"] = "Código Interno";
	$fieldToolTipscalibracion["Spanish"]["Cog_Interno"] = "";
	$placeHolderscalibracion["Spanish"]["Cog_Interno"] = "";
	$fieldLabelscalibracion["Spanish"]["IRPC"] = "Intervalo, Resolución y Puntos de Calibración";
	$fieldToolTipscalibracion["Spanish"]["IRPC"] = "";
	$placeHolderscalibracion["Spanish"]["IRPC"] = "";
	$fieldLabelscalibracion["Spanish"]["fk_id_Servicio"] = "Fk Id Servicio";
	$fieldToolTipscalibracion["Spanish"]["fk_id_Servicio"] = "";
	$placeHolderscalibracion["Spanish"]["fk_id_Servicio"] = "";
	if (count($fieldToolTipscalibracion["Spanish"]))
		$tdatacalibracion[".isUseToolTips"] = true;
}


	$tdatacalibracion[".NCSearch"] = true;



$tdatacalibracion[".shortTableName"] = "calibracion";
$tdatacalibracion[".nSecOptions"] = 0;

$tdatacalibracion[".mainTableOwnerID"] = "";
$tdatacalibracion[".entityType"] = 0;
$tdatacalibracion[".connId"] = "project_pst_sena_at_localhost";


$tdatacalibracion[".strOriginalTableName"] = "calibracion";

	



$tdatacalibracion[".showAddInPopup"] = false;

$tdatacalibracion[".showEditInPopup"] = false;

$tdatacalibracion[".showViewInPopup"] = false;

$tdatacalibracion[".listAjax"] = false;
//	temporary
//$tdatacalibracion[".listAjax"] = false;

	$tdatacalibracion[".audit"] = false;

	$tdatacalibracion[".locking"] = false;


$pages = $tdatacalibracion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalibracion[".edit"] = true;
	$tdatacalibracion[".afterEditAction"] = 1;
	$tdatacalibracion[".closePopupAfterEdit"] = 1;
	$tdatacalibracion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalibracion[".add"] = true;
$tdatacalibracion[".afterAddAction"] = 1;
$tdatacalibracion[".closePopupAfterAdd"] = 1;
$tdatacalibracion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalibracion[".list"] = true;
}



$tdatacalibracion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalibracion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalibracion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalibracion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalibracion[".printFriendly"] = true;
}



$tdatacalibracion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalibracion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalibracion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalibracion[".isUseAjaxSuggest"] = true;



						

$tdatacalibracion[".ajaxCodeSnippetAdded"] = false;

$tdatacalibracion[".buttonsAdded"] = false;

$tdatacalibracion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalibracion[".isUseTimeForSearch"] = false;


$tdatacalibracion[".badgeColor"] = "4682b4";


$tdatacalibracion[".allSearchFields"] = array();
$tdatacalibracion[".filterFields"] = array();
$tdatacalibracion[".requiredSearchFields"] = array();

$tdatacalibracion[".googleLikeFields"] = array();
$tdatacalibracion[".googleLikeFields"][] = "id_Calibracion";
$tdatacalibracion[".googleLikeFields"][] = "Instrumento";
$tdatacalibracion[".googleLikeFields"][] = "Fabricante";
$tdatacalibracion[".googleLikeFields"][] = "Modelo";
$tdatacalibracion[".googleLikeFields"][] = "Serie";
$tdatacalibracion[".googleLikeFields"][] = "Cog_Interno";
$tdatacalibracion[".googleLikeFields"][] = "IRPC";
$tdatacalibracion[".googleLikeFields"][] = "fk_id_Servicio";



$tdatacalibracion[".tableType"] = "list";

$tdatacalibracion[".printerPageOrientation"] = 0;
$tdatacalibracion[".nPrinterPageScale"] = 100;

$tdatacalibracion[".nPrinterSplitRecords"] = 40;

$tdatacalibracion[".geocodingEnabled"] = false;










$tdatacalibracion[".pageSize"] = 20;

$tdatacalibracion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalibracion[".strOrderBy"] = $tstrOrderBy;

$tdatacalibracion[".orderindexes"] = array();


$tdatacalibracion[".sqlHead"] = "SELECT id_Calibracion,  	Instrumento,  	Fabricante,  	Modelo,  	Serie,  	Cog_Interno,  	IRPC,  	fk_id_Servicio";
$tdatacalibracion[".sqlFrom"] = "FROM calibracion";
$tdatacalibracion[".sqlWhereExpr"] = "";
$tdatacalibracion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalibracion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalibracion[".arrGroupsPerPage"] = $arrGPP;

$tdatacalibracion[".highlightSearchResults"] = true;

$tableKeyscalibracion = array();
$tableKeyscalibracion[] = "id_Calibracion";
$tdatacalibracion[".Keys"] = $tableKeyscalibracion;


$tdatacalibracion[".hideMobileList"] = array();




//	id_Calibracion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Calibracion";
	$fdata["GoodName"] = "id_Calibracion";
	$fdata["ownerTable"] = "calibracion";
	$fdata["Label"] = GetFieldLabel("calibracion","id_Calibracion");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Calibracion";

		$fdata["sourceSingle"] = "id_Calibracion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Calibracion";

	
	
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


	$tdatacalibracion["id_Calibracion"] = $fdata;
		$tdatacalibracion[".searchableFields"][] = "id_Calibracion";
//	Instrumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Instrumento";
	$fdata["GoodName"] = "Instrumento";
	$fdata["ownerTable"] = "calibracion";
	$fdata["Label"] = GetFieldLabel("calibracion","Instrumento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Instrumento";

		$fdata["sourceSingle"] = "Instrumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Instrumento";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "instrumento";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_Instrumento";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre_Inst";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacalibracion["Instrumento"] = $fdata;
		$tdatacalibracion[".searchableFields"][] = "Instrumento";
//	Fabricante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fabricante";
	$fdata["GoodName"] = "Fabricante";
	$fdata["ownerTable"] = "calibracion";
	$fdata["Label"] = GetFieldLabel("calibracion","Fabricante");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Fabricante";

		$fdata["sourceSingle"] = "Fabricante";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fabricante";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "fabricante";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_Fabricante";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre_Fab";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacalibracion["Fabricante"] = $fdata;
		$tdatacalibracion[".searchableFields"][] = "Fabricante";
//	Modelo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Modelo";
	$fdata["GoodName"] = "Modelo";
	$fdata["ownerTable"] = "calibracion";
	$fdata["Label"] = GetFieldLabel("calibracion","Modelo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Modelo";

		$fdata["sourceSingle"] = "Modelo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Modelo";

	
	
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


	$tdatacalibracion["Modelo"] = $fdata;
		$tdatacalibracion[".searchableFields"][] = "Modelo";
//	Serie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Serie";
	$fdata["GoodName"] = "Serie";
	$fdata["ownerTable"] = "calibracion";
	$fdata["Label"] = GetFieldLabel("calibracion","Serie");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Serie";

		$fdata["sourceSingle"] = "Serie";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Serie";

	
	
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


	$tdatacalibracion["Serie"] = $fdata;
		$tdatacalibracion[".searchableFields"][] = "Serie";
//	Cog_Interno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cog_Interno";
	$fdata["GoodName"] = "Cog_Interno";
	$fdata["ownerTable"] = "calibracion";
	$fdata["Label"] = GetFieldLabel("calibracion","Cog_Interno");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cog_Interno";

		$fdata["sourceSingle"] = "Cog_Interno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cog_Interno";

	
	
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


	$tdatacalibracion["Cog_Interno"] = $fdata;
		$tdatacalibracion[".searchableFields"][] = "Cog_Interno";
//	IRPC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "IRPC";
	$fdata["GoodName"] = "IRPC";
	$fdata["ownerTable"] = "calibracion";
	$fdata["Label"] = GetFieldLabel("calibracion","IRPC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IRPC";

		$fdata["sourceSingle"] = "IRPC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IRPC";

	
	
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


	$tdatacalibracion["IRPC"] = $fdata;
		$tdatacalibracion[".searchableFields"][] = "IRPC";
//	fk_id_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fk_id_Servicio";
	$fdata["GoodName"] = "fk_id_Servicio";
	$fdata["ownerTable"] = "calibracion";
	$fdata["Label"] = GetFieldLabel("calibracion","fk_id_Servicio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_Servicio";

		$fdata["sourceSingle"] = "fk_id_Servicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_Servicio";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "servicios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Nombre_Servicio";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre_Servicio";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacalibracion["fk_id_Servicio"] = $fdata;
		$tdatacalibracion[".searchableFields"][] = "fk_id_Servicio";


$tables_data["calibracion"]=&$tdatacalibracion;
$field_labels["calibracion"] = &$fieldLabelscalibracion;
$fieldToolTips["calibracion"] = &$fieldToolTipscalibracion;
$placeHolders["calibracion"] = &$placeHolderscalibracion;
$page_titles["calibracion"] = &$pageTitlescalibracion;


changeTextControlsToDate( "calibracion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["calibracion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["calibracion"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="servicios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="servicios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "servicios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["calibracion"][0] = $masterParams;
				$masterTablesData["calibracion"][0]["masterKeys"] = array();
	$masterTablesData["calibracion"][0]["masterKeys"][]="id_Servicio";
				$masterTablesData["calibracion"][0]["detailKeys"] = array();
	$masterTablesData["calibracion"][0]["detailKeys"][]="fk_id_Servicio";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calibracion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Calibracion,  	Instrumento,  	Fabricante,  	Modelo,  	Serie,  	Cog_Interno,  	IRPC,  	fk_id_Servicio";
$proto0["m_strFrom"] = "FROM calibracion";
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
	"m_strName" => "id_Calibracion",
	"m_strTable" => "calibracion",
	"m_srcTableName" => "calibracion"
));

$proto6["m_sql"] = "id_Calibracion";
$proto6["m_srcTableName"] = "calibracion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Instrumento",
	"m_strTable" => "calibracion",
	"m_srcTableName" => "calibracion"
));

$proto8["m_sql"] = "Instrumento";
$proto8["m_srcTableName"] = "calibracion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fabricante",
	"m_strTable" => "calibracion",
	"m_srcTableName" => "calibracion"
));

$proto10["m_sql"] = "Fabricante";
$proto10["m_srcTableName"] = "calibracion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Modelo",
	"m_strTable" => "calibracion",
	"m_srcTableName" => "calibracion"
));

$proto12["m_sql"] = "Modelo";
$proto12["m_srcTableName"] = "calibracion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Serie",
	"m_strTable" => "calibracion",
	"m_srcTableName" => "calibracion"
));

$proto14["m_sql"] = "Serie";
$proto14["m_srcTableName"] = "calibracion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cog_Interno",
	"m_strTable" => "calibracion",
	"m_srcTableName" => "calibracion"
));

$proto16["m_sql"] = "Cog_Interno";
$proto16["m_srcTableName"] = "calibracion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "IRPC",
	"m_strTable" => "calibracion",
	"m_srcTableName" => "calibracion"
));

$proto18["m_sql"] = "IRPC";
$proto18["m_srcTableName"] = "calibracion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Servicio",
	"m_strTable" => "calibracion",
	"m_srcTableName" => "calibracion"
));

$proto20["m_sql"] = "fk_id_Servicio";
$proto20["m_srcTableName"] = "calibracion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "calibracion";
$proto23["m_srcTableName"] = "calibracion";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_Calibracion";
$proto23["m_columns"][] = "Instrumento";
$proto23["m_columns"][] = "Fabricante";
$proto23["m_columns"][] = "Modelo";
$proto23["m_columns"][] = "Serie";
$proto23["m_columns"][] = "Cog_Interno";
$proto23["m_columns"][] = "IRPC";
$proto23["m_columns"][] = "fk_id_Servicio";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "calibracion";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "calibracion";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="calibracion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calibracion = createSqlQuery_calibracion();


	
		;

								

$tdatacalibracion[".sqlquery"] = $queryData_calibracion;



$tdatacalibracion[".hasEvents"] = false;

?>