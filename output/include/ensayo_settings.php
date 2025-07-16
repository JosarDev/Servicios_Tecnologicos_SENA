<?php
$tdataensayo = array();
$tdataensayo[".searchableFields"] = array();
$tdataensayo[".ShortName"] = "ensayo";
$tdataensayo[".OwnerID"] = "";
$tdataensayo[".OriginalTable"] = "ensayo";


$tdataensayo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataensayo[".originalPagesByType"] = $tdataensayo[".pagesByType"];
$tdataensayo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataensayo[".originalPages"] = $tdataensayo[".pages"];
$tdataensayo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataensayo[".originalDefaultPages"] = $tdataensayo[".defaultPages"];

//	field labels
$fieldLabelsensayo = array();
$fieldToolTipsensayo = array();
$pageTitlesensayo = array();
$placeHoldersensayo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsensayo["Spanish"] = array();
	$fieldToolTipsensayo["Spanish"] = array();
	$placeHoldersensayo["Spanish"] = array();
	$pageTitlesensayo["Spanish"] = array();
	$fieldLabelsensayo["Spanish"]["id_Ensayo"] = "Id Ensayo";
	$fieldToolTipsensayo["Spanish"]["id_Ensayo"] = "";
	$placeHoldersensayo["Spanish"]["id_Ensayo"] = "";
	$fieldLabelsensayo["Spanish"]["Tipo_Material"] = "Tipo De Material";
	$fieldToolTipsensayo["Spanish"]["Tipo_Material"] = "";
	$placeHoldersensayo["Spanish"]["Tipo_Material"] = "";
	$fieldLabelsensayo["Spanish"]["Numeral"] = "Numeral";
	$fieldToolTipsensayo["Spanish"]["Numeral"] = "";
	$placeHoldersensayo["Spanish"]["Numeral"] = "";
	$fieldLabelsensayo["Spanish"]["Report_Results"] = "Resultados a Reportar";
	$fieldToolTipsensayo["Spanish"]["Report_Results"] = "";
	$placeHoldersensayo["Spanish"]["Report_Results"] = "";
	$fieldLabelsensayo["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsensayo["Spanish"]["Cantidad"] = "";
	$placeHoldersensayo["Spanish"]["Cantidad"] = "";
	$fieldLabelsensayo["Spanish"]["Tipo_Probeta"] = "Tipo De Probeta";
	$fieldToolTipsensayo["Spanish"]["Tipo_Probeta"] = "";
	$placeHoldersensayo["Spanish"]["Tipo_Probeta"] = "";
	$fieldLabelsensayo["Spanish"]["fk_id_Servicio"] = "Fk Id Servicio";
	$fieldToolTipsensayo["Spanish"]["fk_id_Servicio"] = "";
	$placeHoldersensayo["Spanish"]["fk_id_Servicio"] = "";
	if (count($fieldToolTipsensayo["Spanish"]))
		$tdataensayo[".isUseToolTips"] = true;
}


	$tdataensayo[".NCSearch"] = true;



$tdataensayo[".shortTableName"] = "ensayo";
$tdataensayo[".nSecOptions"] = 0;

$tdataensayo[".mainTableOwnerID"] = "";
$tdataensayo[".entityType"] = 0;
$tdataensayo[".connId"] = "project_pst_sena_at_localhost";


$tdataensayo[".strOriginalTableName"] = "ensayo";

	



$tdataensayo[".showAddInPopup"] = false;

$tdataensayo[".showEditInPopup"] = false;

$tdataensayo[".showViewInPopup"] = false;

$tdataensayo[".listAjax"] = false;
//	temporary
//$tdataensayo[".listAjax"] = false;

	$tdataensayo[".audit"] = false;

	$tdataensayo[".locking"] = false;


$pages = $tdataensayo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataensayo[".edit"] = true;
	$tdataensayo[".afterEditAction"] = 1;
	$tdataensayo[".closePopupAfterEdit"] = 1;
	$tdataensayo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataensayo[".add"] = true;
$tdataensayo[".afterAddAction"] = 1;
$tdataensayo[".closePopupAfterAdd"] = 1;
$tdataensayo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataensayo[".list"] = true;
}



$tdataensayo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataensayo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataensayo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataensayo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataensayo[".printFriendly"] = true;
}



$tdataensayo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataensayo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataensayo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataensayo[".isUseAjaxSuggest"] = true;



						

$tdataensayo[".ajaxCodeSnippetAdded"] = false;

$tdataensayo[".buttonsAdded"] = false;

$tdataensayo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataensayo[".isUseTimeForSearch"] = false;


$tdataensayo[".badgeColor"] = "cd5c5c";


$tdataensayo[".allSearchFields"] = array();
$tdataensayo[".filterFields"] = array();
$tdataensayo[".requiredSearchFields"] = array();

$tdataensayo[".googleLikeFields"] = array();
$tdataensayo[".googleLikeFields"][] = "id_Ensayo";
$tdataensayo[".googleLikeFields"][] = "Tipo_Material";
$tdataensayo[".googleLikeFields"][] = "Numeral";
$tdataensayo[".googleLikeFields"][] = "Report_Results";
$tdataensayo[".googleLikeFields"][] = "Cantidad";
$tdataensayo[".googleLikeFields"][] = "Tipo_Probeta";
$tdataensayo[".googleLikeFields"][] = "fk_id_Servicio";



$tdataensayo[".tableType"] = "list";

$tdataensayo[".printerPageOrientation"] = 0;
$tdataensayo[".nPrinterPageScale"] = 100;

$tdataensayo[".nPrinterSplitRecords"] = 40;

$tdataensayo[".geocodingEnabled"] = false;










$tdataensayo[".pageSize"] = 20;

$tdataensayo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataensayo[".strOrderBy"] = $tstrOrderBy;

$tdataensayo[".orderindexes"] = array();


$tdataensayo[".sqlHead"] = "SELECT id_Ensayo,  	Tipo_Material,  	Numeral,  	Report_Results,  	Cantidad,  	Tipo_Probeta,  	fk_id_Servicio";
$tdataensayo[".sqlFrom"] = "FROM ensayo";
$tdataensayo[".sqlWhereExpr"] = "";
$tdataensayo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataensayo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataensayo[".arrGroupsPerPage"] = $arrGPP;

$tdataensayo[".highlightSearchResults"] = true;

$tableKeysensayo = array();
$tableKeysensayo[] = "id_Ensayo";
$tdataensayo[".Keys"] = $tableKeysensayo;


$tdataensayo[".hideMobileList"] = array();




//	id_Ensayo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Ensayo";
	$fdata["GoodName"] = "id_Ensayo";
	$fdata["ownerTable"] = "ensayo";
	$fdata["Label"] = GetFieldLabel("ensayo","id_Ensayo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Ensayo";

		$fdata["sourceSingle"] = "id_Ensayo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Ensayo";

	
	
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


	$tdataensayo["id_Ensayo"] = $fdata;
		$tdataensayo[".searchableFields"][] = "id_Ensayo";
//	Tipo_Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tipo_Material";
	$fdata["GoodName"] = "Tipo_Material";
	$fdata["ownerTable"] = "ensayo";
	$fdata["Label"] = GetFieldLabel("ensayo","Tipo_Material");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo_Material";

		$fdata["sourceSingle"] = "Tipo_Material";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo_Material";

	
	
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
	$edata["LookupTable"] = "tipo_material";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_Material";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre_Mat";

	

	
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


	$tdataensayo["Tipo_Material"] = $fdata;
		$tdataensayo[".searchableFields"][] = "Tipo_Material";
//	Numeral
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Numeral";
	$fdata["GoodName"] = "Numeral";
	$fdata["ownerTable"] = "ensayo";
	$fdata["Label"] = GetFieldLabel("ensayo","Numeral");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numeral";

		$fdata["sourceSingle"] = "Numeral";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Numeral";

	
	
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


	$tdataensayo["Numeral"] = $fdata;
		$tdataensayo[".searchableFields"][] = "Numeral";
//	Report_Results
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Report_Results";
	$fdata["GoodName"] = "Report_Results";
	$fdata["ownerTable"] = "ensayo";
	$fdata["Label"] = GetFieldLabel("ensayo","Report_Results");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Report_Results";

		$fdata["sourceSingle"] = "Report_Results";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Report_Results";

	
	
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


	$tdataensayo["Report_Results"] = $fdata;
		$tdataensayo[".searchableFields"][] = "Report_Results";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "ensayo";
	$fdata["Label"] = GetFieldLabel("ensayo","Cantidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cantidad";

		$fdata["sourceSingle"] = "Cantidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cantidad";

	
	
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


	$tdataensayo["Cantidad"] = $fdata;
		$tdataensayo[".searchableFields"][] = "Cantidad";
//	Tipo_Probeta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Tipo_Probeta";
	$fdata["GoodName"] = "Tipo_Probeta";
	$fdata["ownerTable"] = "ensayo";
	$fdata["Label"] = GetFieldLabel("ensayo","Tipo_Probeta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo_Probeta";

		$fdata["sourceSingle"] = "Tipo_Probeta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo_Probeta";

	
	
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


	$tdataensayo["Tipo_Probeta"] = $fdata;
		$tdataensayo[".searchableFields"][] = "Tipo_Probeta";
//	fk_id_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fk_id_Servicio";
	$fdata["GoodName"] = "fk_id_Servicio";
	$fdata["ownerTable"] = "ensayo";
	$fdata["Label"] = GetFieldLabel("ensayo","fk_id_Servicio");
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


	$tdataensayo["fk_id_Servicio"] = $fdata;
		$tdataensayo[".searchableFields"][] = "fk_id_Servicio";


$tables_data["ensayo"]=&$tdataensayo;
$field_labels["ensayo"] = &$fieldLabelsensayo;
$fieldToolTips["ensayo"] = &$fieldToolTipsensayo;
$placeHolders["ensayo"] = &$placeHoldersensayo;
$page_titles["ensayo"] = &$pageTitlesensayo;


changeTextControlsToDate( "ensayo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ensayo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ensayo"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="servicios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="servicios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "servicios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ensayo"][0] = $masterParams;
				$masterTablesData["ensayo"][0]["masterKeys"] = array();
	$masterTablesData["ensayo"][0]["masterKeys"][]="id_Servicio";
				$masterTablesData["ensayo"][0]["detailKeys"] = array();
	$masterTablesData["ensayo"][0]["detailKeys"][]="fk_id_Servicio";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ensayo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Ensayo,  	Tipo_Material,  	Numeral,  	Report_Results,  	Cantidad,  	Tipo_Probeta,  	fk_id_Servicio";
$proto0["m_strFrom"] = "FROM ensayo";
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
	"m_strName" => "id_Ensayo",
	"m_strTable" => "ensayo",
	"m_srcTableName" => "ensayo"
));

$proto6["m_sql"] = "id_Ensayo";
$proto6["m_srcTableName"] = "ensayo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo_Material",
	"m_strTable" => "ensayo",
	"m_srcTableName" => "ensayo"
));

$proto8["m_sql"] = "Tipo_Material";
$proto8["m_srcTableName"] = "ensayo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Numeral",
	"m_strTable" => "ensayo",
	"m_srcTableName" => "ensayo"
));

$proto10["m_sql"] = "Numeral";
$proto10["m_srcTableName"] = "ensayo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Report_Results",
	"m_strTable" => "ensayo",
	"m_srcTableName" => "ensayo"
));

$proto12["m_sql"] = "Report_Results";
$proto12["m_srcTableName"] = "ensayo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "ensayo",
	"m_srcTableName" => "ensayo"
));

$proto14["m_sql"] = "Cantidad";
$proto14["m_srcTableName"] = "ensayo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo_Probeta",
	"m_strTable" => "ensayo",
	"m_srcTableName" => "ensayo"
));

$proto16["m_sql"] = "Tipo_Probeta";
$proto16["m_srcTableName"] = "ensayo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Servicio",
	"m_strTable" => "ensayo",
	"m_srcTableName" => "ensayo"
));

$proto18["m_sql"] = "fk_id_Servicio";
$proto18["m_srcTableName"] = "ensayo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "ensayo";
$proto21["m_srcTableName"] = "ensayo";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_Ensayo";
$proto21["m_columns"][] = "Tipo_Material";
$proto21["m_columns"][] = "Numeral";
$proto21["m_columns"][] = "Report_Results";
$proto21["m_columns"][] = "Cantidad";
$proto21["m_columns"][] = "Tipo_Probeta";
$proto21["m_columns"][] = "fk_id_Servicio";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "ensayo";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "ensayo";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ensayo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ensayo = createSqlQuery_ensayo();


	
		;

							

$tdataensayo[".sqlquery"] = $queryData_ensayo;



$tdataensayo[".hasEvents"] = false;

?>