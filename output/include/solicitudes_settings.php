<?php
$tdatasolicitudes = array();
$tdatasolicitudes[".searchableFields"] = array();
$tdatasolicitudes[".ShortName"] = "solicitudes";
$tdatasolicitudes[".OwnerID"] = "";
$tdatasolicitudes[".OriginalTable"] = "solicitudes";


$tdatasolicitudes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasolicitudes[".originalPagesByType"] = $tdatasolicitudes[".pagesByType"];
$tdatasolicitudes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasolicitudes[".originalPages"] = $tdatasolicitudes[".pages"];
$tdatasolicitudes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasolicitudes[".originalDefaultPages"] = $tdatasolicitudes[".defaultPages"];

//	field labels
$fieldLabelssolicitudes = array();
$fieldToolTipssolicitudes = array();
$pageTitlessolicitudes = array();
$placeHolderssolicitudes = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssolicitudes["Spanish"] = array();
	$fieldToolTipssolicitudes["Spanish"] = array();
	$placeHolderssolicitudes["Spanish"] = array();
	$pageTitlessolicitudes["Spanish"] = array();
	$fieldLabelssolicitudes["Spanish"]["id_Solicitudes"] = "Id Solicitudes";
	$fieldToolTipssolicitudes["Spanish"]["id_Solicitudes"] = "";
	$placeHolderssolicitudes["Spanish"]["id_Solicitudes"] = "";
	$fieldLabelssolicitudes["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipssolicitudes["Spanish"]["Fecha"] = "";
	$placeHolderssolicitudes["Spanish"]["Fecha"] = "";
	$fieldLabelssolicitudes["Spanish"]["Hora"] = "Hora";
	$fieldToolTipssolicitudes["Spanish"]["Hora"] = "";
	$placeHolderssolicitudes["Spanish"]["Hora"] = "";
	$fieldLabelssolicitudes["Spanish"]["Estado"] = "Estado";
	$fieldToolTipssolicitudes["Spanish"]["Estado"] = "";
	$placeHolderssolicitudes["Spanish"]["Estado"] = "";
	$fieldLabelssolicitudes["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipssolicitudes["Spanish"]["Cantidad"] = "";
	$placeHolderssolicitudes["Spanish"]["Cantidad"] = "";
	$fieldLabelssolicitudes["Spanish"]["TipoSolicitud"] = "Tipo Solicitud";
	$fieldToolTipssolicitudes["Spanish"]["TipoSolicitud"] = "";
	$placeHolderssolicitudes["Spanish"]["TipoSolicitud"] = "";
	$fieldLabelssolicitudes["Spanish"]["fk_id_Servicio"] = "Seleccione el Servicio a solicitar";
	$fieldToolTipssolicitudes["Spanish"]["fk_id_Servicio"] = "";
	$placeHolderssolicitudes["Spanish"]["fk_id_Servicio"] = "";
	$fieldLabelssolicitudes["Spanish"]["fk_id_Cliente"] = "Cliente que realiza la Solicitud";
	$fieldToolTipssolicitudes["Spanish"]["fk_id_Cliente"] = "";
	$placeHolderssolicitudes["Spanish"]["fk_id_Cliente"] = "";
	$fieldLabelssolicitudes["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipssolicitudes["Spanish"]["Observaciones"] = "";
	$placeHolderssolicitudes["Spanish"]["Observaciones"] = "";
	if (count($fieldToolTipssolicitudes["Spanish"]))
		$tdatasolicitudes[".isUseToolTips"] = true;
}


	$tdatasolicitudes[".NCSearch"] = true;



$tdatasolicitudes[".shortTableName"] = "solicitudes";
$tdatasolicitudes[".nSecOptions"] = 0;

$tdatasolicitudes[".mainTableOwnerID"] = "";
$tdatasolicitudes[".entityType"] = 0;
$tdatasolicitudes[".connId"] = "project_pst_sena_at_localhost";


$tdatasolicitudes[".strOriginalTableName"] = "solicitudes";

	



$tdatasolicitudes[".showAddInPopup"] = false;

$tdatasolicitudes[".showEditInPopup"] = false;

$tdatasolicitudes[".showViewInPopup"] = false;

$tdatasolicitudes[".listAjax"] = false;
//	temporary
//$tdatasolicitudes[".listAjax"] = false;

	$tdatasolicitudes[".audit"] = false;

	$tdatasolicitudes[".locking"] = false;


$pages = $tdatasolicitudes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasolicitudes[".edit"] = true;
	$tdatasolicitudes[".afterEditAction"] = 1;
	$tdatasolicitudes[".closePopupAfterEdit"] = 1;
	$tdatasolicitudes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasolicitudes[".add"] = true;
$tdatasolicitudes[".afterAddAction"] = 1;
$tdatasolicitudes[".closePopupAfterAdd"] = 1;
$tdatasolicitudes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasolicitudes[".list"] = true;
}



$tdatasolicitudes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasolicitudes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasolicitudes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasolicitudes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasolicitudes[".printFriendly"] = true;
}



$tdatasolicitudes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasolicitudes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasolicitudes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasolicitudes[".isUseAjaxSuggest"] = true;



						

$tdatasolicitudes[".ajaxCodeSnippetAdded"] = false;

$tdatasolicitudes[".buttonsAdded"] = false;

$tdatasolicitudes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasolicitudes[".isUseTimeForSearch"] = false;


$tdatasolicitudes[".badgeColor"] = "3cb371";


$tdatasolicitudes[".allSearchFields"] = array();
$tdatasolicitudes[".filterFields"] = array();
$tdatasolicitudes[".requiredSearchFields"] = array();

$tdatasolicitudes[".googleLikeFields"] = array();
$tdatasolicitudes[".googleLikeFields"][] = "id_Solicitudes";
$tdatasolicitudes[".googleLikeFields"][] = "Fecha";
$tdatasolicitudes[".googleLikeFields"][] = "Hora";
$tdatasolicitudes[".googleLikeFields"][] = "Estado";
$tdatasolicitudes[".googleLikeFields"][] = "Cantidad";
$tdatasolicitudes[".googleLikeFields"][] = "Observaciones";
$tdatasolicitudes[".googleLikeFields"][] = "TipoSolicitud";
$tdatasolicitudes[".googleLikeFields"][] = "fk_id_Servicio";
$tdatasolicitudes[".googleLikeFields"][] = "fk_id_Cliente";



$tdatasolicitudes[".tableType"] = "list";

$tdatasolicitudes[".printerPageOrientation"] = 0;
$tdatasolicitudes[".nPrinterPageScale"] = 100;

$tdatasolicitudes[".nPrinterSplitRecords"] = 40;

$tdatasolicitudes[".geocodingEnabled"] = false;










$tdatasolicitudes[".pageSize"] = 20;

$tdatasolicitudes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasolicitudes[".strOrderBy"] = $tstrOrderBy;

$tdatasolicitudes[".orderindexes"] = array();


$tdatasolicitudes[".sqlHead"] = "SELECT id_Solicitudes,  	Fecha,  	Hora,  	Estado,  	Cantidad,  	Observaciones,  	TipoSolicitud,  	fk_id_Servicio,  	fk_id_Cliente";
$tdatasolicitudes[".sqlFrom"] = "FROM solicitudes";
$tdatasolicitudes[".sqlWhereExpr"] = "";
$tdatasolicitudes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasolicitudes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasolicitudes[".arrGroupsPerPage"] = $arrGPP;

$tdatasolicitudes[".highlightSearchResults"] = true;

$tableKeyssolicitudes = array();
$tableKeyssolicitudes[] = "id_Solicitudes";
$tdatasolicitudes[".Keys"] = $tableKeyssolicitudes;


$tdatasolicitudes[".hideMobileList"] = array();




//	id_Solicitudes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Solicitudes";
	$fdata["GoodName"] = "id_Solicitudes";
	$fdata["ownerTable"] = "solicitudes";
	$fdata["Label"] = GetFieldLabel("solicitudes","id_Solicitudes");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Solicitudes";

		$fdata["sourceSingle"] = "id_Solicitudes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Solicitudes";

	
	
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


	$tdatasolicitudes["id_Solicitudes"] = $fdata;
		$tdatasolicitudes[".searchableFields"][] = "id_Solicitudes";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "solicitudes";
	$fdata["Label"] = GetFieldLabel("solicitudes","Fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasolicitudes["Fecha"] = $fdata;
		$tdatasolicitudes[".searchableFields"][] = "Fecha";
//	Hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Hora";
	$fdata["GoodName"] = "Hora";
	$fdata["ownerTable"] = "solicitudes";
	$fdata["Label"] = GetFieldLabel("solicitudes","Hora");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "Hora";

		$fdata["sourceSingle"] = "Hora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hora";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasolicitudes["Hora"] = $fdata;
		$tdatasolicitudes[".searchableFields"][] = "Hora";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "solicitudes";
	$fdata["Label"] = GetFieldLabel("solicitudes","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

		$fdata["sourceSingle"] = "Estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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


	$tdatasolicitudes["Estado"] = $fdata;
		$tdatasolicitudes[".searchableFields"][] = "Estado";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "solicitudes";
	$fdata["Label"] = GetFieldLabel("solicitudes","Cantidad");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatasolicitudes["Cantidad"] = $fdata;
		$tdatasolicitudes[".searchableFields"][] = "Cantidad";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "solicitudes";
	$fdata["Label"] = GetFieldLabel("solicitudes","Observaciones");
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


	$tdatasolicitudes["Observaciones"] = $fdata;
		$tdatasolicitudes[".searchableFields"][] = "Observaciones";
//	TipoSolicitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TipoSolicitud";
	$fdata["GoodName"] = "TipoSolicitud";
	$fdata["ownerTable"] = "solicitudes";
	$fdata["Label"] = GetFieldLabel("solicitudes","TipoSolicitud");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "TipoSolicitud";

		$fdata["sourceSingle"] = "TipoSolicitud";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoSolicitud";

	
	
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
	$edata["LookupValues"][] = "SERVICIO";
	$edata["LookupValues"][] = "COTIZACIÓN";
	$edata["LookupValues"][] = "CONTACTO";

	
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


	$tdatasolicitudes["TipoSolicitud"] = $fdata;
		$tdatasolicitudes[".searchableFields"][] = "TipoSolicitud";
//	fk_id_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fk_id_Servicio";
	$fdata["GoodName"] = "fk_id_Servicio";
	$fdata["ownerTable"] = "solicitudes";
	$fdata["Label"] = GetFieldLabel("solicitudes","fk_id_Servicio");
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

	
		
	$edata["LinkField"] = "id_Servicio";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre_Servicio";

	

	
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
		$fdata["filterTotalFields"] = "id_Solicitudes";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasolicitudes["fk_id_Servicio"] = $fdata;
		$tdatasolicitudes[".searchableFields"][] = "fk_id_Servicio";
//	fk_id_Cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fk_id_Cliente";
	$fdata["GoodName"] = "fk_id_Cliente";
	$fdata["ownerTable"] = "solicitudes";
	$fdata["Label"] = GetFieldLabel("solicitudes","fk_id_Cliente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_Cliente";

		$fdata["sourceSingle"] = "fk_id_Cliente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_Cliente";

	
	
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


	$tdatasolicitudes["fk_id_Cliente"] = $fdata;
		$tdatasolicitudes[".searchableFields"][] = "fk_id_Cliente";


$tables_data["solicitudes"]=&$tdatasolicitudes;
$field_labels["solicitudes"] = &$fieldLabelssolicitudes;
$fieldToolTips["solicitudes"] = &$fieldToolTipssolicitudes;
$placeHolders["solicitudes"] = &$placeHolderssolicitudes;
$page_titles["solicitudes"] = &$pageTitlessolicitudes;


changeTextControlsToDate( "solicitudes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["solicitudes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["solicitudes"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cliente";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cliente";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cliente";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["solicitudes"][0] = $masterParams;
				$masterTablesData["solicitudes"][0]["masterKeys"] = array();
	$masterTablesData["solicitudes"][0]["masterKeys"][]="id_Cliente";
				$masterTablesData["solicitudes"][0]["detailKeys"] = array();
	$masterTablesData["solicitudes"][0]["detailKeys"][]="fk_id_Cliente";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_solicitudes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Solicitudes,  	Fecha,  	Hora,  	Estado,  	Cantidad,  	Observaciones,  	TipoSolicitud,  	fk_id_Servicio,  	fk_id_Cliente";
$proto0["m_strFrom"] = "FROM solicitudes";
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
	"m_strName" => "id_Solicitudes",
	"m_strTable" => "solicitudes",
	"m_srcTableName" => "solicitudes"
));

$proto6["m_sql"] = "id_Solicitudes";
$proto6["m_srcTableName"] = "solicitudes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "solicitudes",
	"m_srcTableName" => "solicitudes"
));

$proto8["m_sql"] = "Fecha";
$proto8["m_srcTableName"] = "solicitudes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Hora",
	"m_strTable" => "solicitudes",
	"m_srcTableName" => "solicitudes"
));

$proto10["m_sql"] = "Hora";
$proto10["m_srcTableName"] = "solicitudes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "solicitudes",
	"m_srcTableName" => "solicitudes"
));

$proto12["m_sql"] = "Estado";
$proto12["m_srcTableName"] = "solicitudes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "solicitudes",
	"m_srcTableName" => "solicitudes"
));

$proto14["m_sql"] = "Cantidad";
$proto14["m_srcTableName"] = "solicitudes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "solicitudes",
	"m_srcTableName" => "solicitudes"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "solicitudes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoSolicitud",
	"m_strTable" => "solicitudes",
	"m_srcTableName" => "solicitudes"
));

$proto18["m_sql"] = "TipoSolicitud";
$proto18["m_srcTableName"] = "solicitudes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Servicio",
	"m_strTable" => "solicitudes",
	"m_srcTableName" => "solicitudes"
));

$proto20["m_sql"] = "fk_id_Servicio";
$proto20["m_srcTableName"] = "solicitudes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Cliente",
	"m_strTable" => "solicitudes",
	"m_srcTableName" => "solicitudes"
));

$proto22["m_sql"] = "fk_id_Cliente";
$proto22["m_srcTableName"] = "solicitudes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "solicitudes";
$proto25["m_srcTableName"] = "solicitudes";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_Solicitudes";
$proto25["m_columns"][] = "Fecha";
$proto25["m_columns"][] = "Hora";
$proto25["m_columns"][] = "Estado";
$proto25["m_columns"][] = "Cantidad";
$proto25["m_columns"][] = "Observaciones";
$proto25["m_columns"][] = "TipoSolicitud";
$proto25["m_columns"][] = "fk_id_Servicio";
$proto25["m_columns"][] = "fk_id_Cliente";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "solicitudes";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "solicitudes";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="solicitudes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_solicitudes = createSqlQuery_solicitudes();


	
		;

									

$tdatasolicitudes[".sqlquery"] = $queryData_solicitudes;



include_once(getabspath("include/solicitudes_events.php"));
$tdatasolicitudes[".hasEvents"] = true;

?>