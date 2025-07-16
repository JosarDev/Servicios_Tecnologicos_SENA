<?php
$tdataservicios1 = array();
$tdataservicios1[".searchableFields"] = array();
$tdataservicios1[".ShortName"] = "servicios1";
$tdataservicios1[".OwnerID"] = "";
$tdataservicios1[".OriginalTable"] = "servicios";


$tdataservicios1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataservicios1[".originalPagesByType"] = $tdataservicios1[".pagesByType"];
$tdataservicios1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataservicios1[".originalPages"] = $tdataservicios1[".pages"];
$tdataservicios1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataservicios1[".originalDefaultPages"] = $tdataservicios1[".defaultPages"];

//	field labels
$fieldLabelsservicios1 = array();
$fieldToolTipsservicios1 = array();
$pageTitlesservicios1 = array();
$placeHoldersservicios1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsservicios1["Spanish"] = array();
	$fieldToolTipsservicios1["Spanish"] = array();
	$placeHoldersservicios1["Spanish"] = array();
	$pageTitlesservicios1["Spanish"] = array();
	$fieldLabelsservicios1["Spanish"]["id_Servicio"] = "Id Servicio";
	$fieldToolTipsservicios1["Spanish"]["id_Servicio"] = "";
	$placeHoldersservicios1["Spanish"]["id_Servicio"] = "";
	$fieldLabelsservicios1["Spanish"]["Nombre_Servicio"] = "Nombre Servicio";
	$fieldToolTipsservicios1["Spanish"]["Nombre_Servicio"] = "";
	$placeHoldersservicios1["Spanish"]["Nombre_Servicio"] = "";
	$fieldLabelsservicios1["Spanish"]["Norma_Requerida"] = "Norma Requerida";
	$fieldToolTipsservicios1["Spanish"]["Norma_Requerida"] = "";
	$placeHoldersservicios1["Spanish"]["Norma_Requerida"] = "";
	$fieldLabelsservicios1["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsservicios1["Spanish"]["Observaciones"] = "";
	$placeHoldersservicios1["Spanish"]["Observaciones"] = "";
	$fieldLabelsservicios1["Spanish"]["Valor_Servicio"] = "Valor Servicio";
	$fieldToolTipsservicios1["Spanish"]["Valor_Servicio"] = "";
	$placeHoldersservicios1["Spanish"]["Valor_Servicio"] = "";
	$fieldLabelsservicios1["Spanish"]["TipoServicio"] = "Tipo Servicio";
	$fieldToolTipsservicios1["Spanish"]["TipoServicio"] = "";
	$placeHoldersservicios1["Spanish"]["TipoServicio"] = "";
	$fieldLabelsservicios1["Spanish"]["fk_id_Laboratorio"] = "Fk Id Laboratorio";
	$fieldToolTipsservicios1["Spanish"]["fk_id_Laboratorio"] = "";
	$placeHoldersservicios1["Spanish"]["fk_id_Laboratorio"] = "";
	if (count($fieldToolTipsservicios1["Spanish"]))
		$tdataservicios1[".isUseToolTips"] = true;
}


	$tdataservicios1[".NCSearch"] = true;



$tdataservicios1[".shortTableName"] = "servicios1";
$tdataservicios1[".nSecOptions"] = 0;

$tdataservicios1[".mainTableOwnerID"] = "";
$tdataservicios1[".entityType"] = 1;
$tdataservicios1[".connId"] = "project_pst_sena_at_localhost";


$tdataservicios1[".strOriginalTableName"] = "servicios";

	



$tdataservicios1[".showAddInPopup"] = false;

$tdataservicios1[".showEditInPopup"] = false;

$tdataservicios1[".showViewInPopup"] = false;

$tdataservicios1[".listAjax"] = false;
//	temporary
//$tdataservicios1[".listAjax"] = false;

	$tdataservicios1[".audit"] = false;

	$tdataservicios1[".locking"] = false;


$pages = $tdataservicios1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataservicios1[".edit"] = true;
	$tdataservicios1[".afterEditAction"] = 1;
	$tdataservicios1[".closePopupAfterEdit"] = 1;
	$tdataservicios1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataservicios1[".add"] = true;
$tdataservicios1[".afterAddAction"] = 1;
$tdataservicios1[".closePopupAfterAdd"] = 1;
$tdataservicios1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataservicios1[".list"] = true;
}



$tdataservicios1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataservicios1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataservicios1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataservicios1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataservicios1[".printFriendly"] = true;
}



$tdataservicios1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataservicios1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataservicios1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataservicios1[".isUseAjaxSuggest"] = true;



			

$tdataservicios1[".ajaxCodeSnippetAdded"] = false;

$tdataservicios1[".buttonsAdded"] = false;

$tdataservicios1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataservicios1[".isUseTimeForSearch"] = false;


$tdataservicios1[".badgeColor"] = "1E90FF";


$tdataservicios1[".allSearchFields"] = array();
$tdataservicios1[".filterFields"] = array();
$tdataservicios1[".requiredSearchFields"] = array();

$tdataservicios1[".googleLikeFields"] = array();
$tdataservicios1[".googleLikeFields"][] = "id_Servicio";
$tdataservicios1[".googleLikeFields"][] = "Nombre_Servicio";
$tdataservicios1[".googleLikeFields"][] = "Norma_Requerida";
$tdataservicios1[".googleLikeFields"][] = "Observaciones";
$tdataservicios1[".googleLikeFields"][] = "Valor_Servicio";
$tdataservicios1[".googleLikeFields"][] = "TipoServicio";
$tdataservicios1[".googleLikeFields"][] = "fk_id_Laboratorio";



$tdataservicios1[".tableType"] = "list";

$tdataservicios1[".printerPageOrientation"] = 0;
$tdataservicios1[".nPrinterPageScale"] = 100;

$tdataservicios1[".nPrinterSplitRecords"] = 40;

$tdataservicios1[".geocodingEnabled"] = false;










$tdataservicios1[".pageSize"] = 20;

$tdataservicios1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataservicios1[".strOrderBy"] = $tstrOrderBy;

$tdataservicios1[".orderindexes"] = array();


$tdataservicios1[".sqlHead"] = "SELECT id_Servicio,  	Nombre_Servicio,  	Norma_Requerida,  	Observaciones,  	Valor_Servicio,  	TipoServicio,  	fk_id_Laboratorio";
$tdataservicios1[".sqlFrom"] = "FROM servicios";
$tdataservicios1[".sqlWhereExpr"] = "";
$tdataservicios1[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdataservicios1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataservicios1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataservicios1[".arrGroupsPerPage"] = $arrGPP;

$tdataservicios1[".highlightSearchResults"] = true;

$tableKeysservicios1 = array();
$tableKeysservicios1[] = "id_Servicio";
$tdataservicios1[".Keys"] = $tableKeysservicios1;


$tdataservicios1[".hideMobileList"] = array();




//	id_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Servicio";
	$fdata["GoodName"] = "id_Servicio";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios1","id_Servicio");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Servicio";

		$fdata["sourceSingle"] = "id_Servicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Servicio";

	
	
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


	$tdataservicios1["id_Servicio"] = $fdata;
		$tdataservicios1[".searchableFields"][] = "id_Servicio";
//	Nombre_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre_Servicio";
	$fdata["GoodName"] = "Nombre_Servicio";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios1","Nombre_Servicio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre_Servicio";

		$fdata["sourceSingle"] = "Nombre_Servicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre_Servicio";

	
	
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


	$tdataservicios1["Nombre_Servicio"] = $fdata;
		$tdataservicios1[".searchableFields"][] = "Nombre_Servicio";
//	Norma_Requerida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Norma_Requerida";
	$fdata["GoodName"] = "Norma_Requerida";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios1","Norma_Requerida");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Norma_Requerida";

		$fdata["sourceSingle"] = "Norma_Requerida";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Norma_Requerida";

	
	
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


	$tdataservicios1["Norma_Requerida"] = $fdata;
		$tdataservicios1[".searchableFields"][] = "Norma_Requerida";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios1","Observaciones");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observaciones";

	
	
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


	$tdataservicios1["Observaciones"] = $fdata;
		$tdataservicios1[".searchableFields"][] = "Observaciones";
//	Valor_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valor_Servicio";
	$fdata["GoodName"] = "Valor_Servicio";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios1","Valor_Servicio");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor_Servicio";

		$fdata["sourceSingle"] = "Valor_Servicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor_Servicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataservicios1["Valor_Servicio"] = $fdata;
		$tdataservicios1[".searchableFields"][] = "Valor_Servicio";
//	TipoServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TipoServicio";
	$fdata["GoodName"] = "TipoServicio";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios1","TipoServicio");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "TipoServicio";

		$fdata["sourceSingle"] = "TipoServicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoServicio";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "CALIBRACION";
	$edata["LookupValues"][] = "ENSAYO";

	
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


	$tdataservicios1["TipoServicio"] = $fdata;
		$tdataservicios1[".searchableFields"][] = "TipoServicio";
//	fk_id_Laboratorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fk_id_Laboratorio";
	$fdata["GoodName"] = "fk_id_Laboratorio";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios1","fk_id_Laboratorio");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "laboratorio";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_Laboratorio";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre_Laboratorio";

	

	
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


	$tdataservicios1["fk_id_Laboratorio"] = $fdata;
		$tdataservicios1[".searchableFields"][] = "fk_id_Laboratorio";


$tables_data["servicios1"]=&$tdataservicios1;
$field_labels["servicios1"] = &$fieldLabelsservicios1;
$fieldToolTips["servicios1"] = &$fieldToolTipsservicios1;
$placeHolders["servicios1"] = &$placeHoldersservicios1;
$page_titles["servicios1"] = &$pageTitlesservicios1;


changeTextControlsToDate( "servicios1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["servicios1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["servicios1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_servicios1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Servicio,  	Nombre_Servicio,  	Norma_Requerida,  	Observaciones,  	Valor_Servicio,  	TipoServicio,  	fk_id_Laboratorio";
$proto0["m_strFrom"] = "FROM servicios";
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
	"m_strName" => "id_Servicio",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios1"
));

$proto6["m_sql"] = "id_Servicio";
$proto6["m_srcTableName"] = "servicios1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Servicio",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios1"
));

$proto8["m_sql"] = "Nombre_Servicio";
$proto8["m_srcTableName"] = "servicios1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Norma_Requerida",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios1"
));

$proto10["m_sql"] = "Norma_Requerida";
$proto10["m_srcTableName"] = "servicios1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios1"
));

$proto12["m_sql"] = "Observaciones";
$proto12["m_srcTableName"] = "servicios1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_Servicio",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios1"
));

$proto14["m_sql"] = "Valor_Servicio";
$proto14["m_srcTableName"] = "servicios1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoServicio",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios1"
));

$proto16["m_sql"] = "TipoServicio";
$proto16["m_srcTableName"] = "servicios1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Laboratorio",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios1"
));

$proto18["m_sql"] = "fk_id_Laboratorio";
$proto18["m_srcTableName"] = "servicios1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "servicios";
$proto21["m_srcTableName"] = "servicios1";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_Servicio";
$proto21["m_columns"][] = "Nombre_Servicio";
$proto21["m_columns"][] = "Norma_Requerida";
$proto21["m_columns"][] = "Observaciones";
$proto21["m_columns"][] = "Valor_Servicio";
$proto21["m_columns"][] = "TipoServicio";
$proto21["m_columns"][] = "fk_id_Laboratorio";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "servicios";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "servicios1";
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
$proto0["m_srcTableName"]="servicios1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_servicios1 = createSqlQuery_servicios1();


	
		;

							

$tdataservicios1[".sqlquery"] = $queryData_servicios1;



include_once(getabspath("include/servicios1_events.php"));
$tdataservicios1[".hasEvents"] = true;

?>