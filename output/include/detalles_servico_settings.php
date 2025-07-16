<?php
$tdatadetalles_servico = array();
$tdatadetalles_servico[".searchableFields"] = array();
$tdatadetalles_servico[".ShortName"] = "detalles_servico";
$tdatadetalles_servico[".OwnerID"] = "";
$tdatadetalles_servico[".OriginalTable"] = "detalles_servico";


$tdatadetalles_servico[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadetalles_servico[".originalPagesByType"] = $tdatadetalles_servico[".pagesByType"];
$tdatadetalles_servico[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadetalles_servico[".originalPages"] = $tdatadetalles_servico[".pages"];
$tdatadetalles_servico[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadetalles_servico[".originalDefaultPages"] = $tdatadetalles_servico[".defaultPages"];

//	field labels
$fieldLabelsdetalles_servico = array();
$fieldToolTipsdetalles_servico = array();
$pageTitlesdetalles_servico = array();
$placeHoldersdetalles_servico = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdetalles_servico["Spanish"] = array();
	$fieldToolTipsdetalles_servico["Spanish"] = array();
	$placeHoldersdetalles_servico["Spanish"] = array();
	$pageTitlesdetalles_servico["Spanish"] = array();
	$fieldLabelsdetalles_servico["Spanish"]["fk_T_Servicio"] = "Tipo Servicio";
	$fieldToolTipsdetalles_servico["Spanish"]["fk_T_Servicio"] = "";
	$placeHoldersdetalles_servico["Spanish"]["fk_T_Servicio"] = "";
	$fieldLabelsdetalles_servico["Spanish"]["fk_id_Laboratorio"] = "Laboratorio";
	$fieldToolTipsdetalles_servico["Spanish"]["fk_id_Laboratorio"] = "";
	$placeHoldersdetalles_servico["Spanish"]["fk_id_Laboratorio"] = "";
	$fieldLabelsdetalles_servico["Spanish"]["id"] = "Id";
	$fieldToolTipsdetalles_servico["Spanish"]["id"] = "";
	$placeHoldersdetalles_servico["Spanish"]["id"] = "";
	$fieldLabelsdetalles_servico["Spanish"]["Nombre_Servicio"] = "Nombre Servicio";
	$fieldToolTipsdetalles_servico["Spanish"]["Nombre_Servicio"] = "";
	$placeHoldersdetalles_servico["Spanish"]["Nombre_Servicio"] = "";
	$fieldLabelsdetalles_servico["Spanish"]["Norma_Requerida"] = "Norma Requerida";
	$fieldToolTipsdetalles_servico["Spanish"]["Norma_Requerida"] = "";
	$placeHoldersdetalles_servico["Spanish"]["Norma_Requerida"] = "";
	$fieldLabelsdetalles_servico["Spanish"]["Valor_Servicio"] = "Valor Servicio";
	$fieldToolTipsdetalles_servico["Spanish"]["Valor_Servicio"] = "";
	$placeHoldersdetalles_servico["Spanish"]["Valor_Servicio"] = "";
	$fieldLabelsdetalles_servico["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsdetalles_servico["Spanish"]["Observaciones"] = "";
	$placeHoldersdetalles_servico["Spanish"]["Observaciones"] = "";
	if (count($fieldToolTipsdetalles_servico["Spanish"]))
		$tdatadetalles_servico[".isUseToolTips"] = true;
}


	$tdatadetalles_servico[".NCSearch"] = true;



$tdatadetalles_servico[".shortTableName"] = "detalles_servico";
$tdatadetalles_servico[".nSecOptions"] = 0;

$tdatadetalles_servico[".mainTableOwnerID"] = "";
$tdatadetalles_servico[".entityType"] = 0;
$tdatadetalles_servico[".connId"] = "project_pst_sena_at_localhost";


$tdatadetalles_servico[".strOriginalTableName"] = "detalles_servico";

	



$tdatadetalles_servico[".showAddInPopup"] = false;

$tdatadetalles_servico[".showEditInPopup"] = false;

$tdatadetalles_servico[".showViewInPopup"] = false;

$tdatadetalles_servico[".listAjax"] = false;
//	temporary
//$tdatadetalles_servico[".listAjax"] = false;

	$tdatadetalles_servico[".audit"] = false;

	$tdatadetalles_servico[".locking"] = false;


$pages = $tdatadetalles_servico[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadetalles_servico[".edit"] = true;
	$tdatadetalles_servico[".afterEditAction"] = 1;
	$tdatadetalles_servico[".closePopupAfterEdit"] = 1;
	$tdatadetalles_servico[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadetalles_servico[".add"] = true;
$tdatadetalles_servico[".afterAddAction"] = 1;
$tdatadetalles_servico[".closePopupAfterAdd"] = 1;
$tdatadetalles_servico[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadetalles_servico[".list"] = true;
}



$tdatadetalles_servico[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadetalles_servico[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadetalles_servico[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadetalles_servico[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadetalles_servico[".printFriendly"] = true;
}



$tdatadetalles_servico[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadetalles_servico[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadetalles_servico[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadetalles_servico[".isUseAjaxSuggest"] = true;



						

$tdatadetalles_servico[".ajaxCodeSnippetAdded"] = false;

$tdatadetalles_servico[".buttonsAdded"] = false;

$tdatadetalles_servico[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadetalles_servico[".isUseTimeForSearch"] = false;


$tdatadetalles_servico[".badgeColor"] = "4682b4";


$tdatadetalles_servico[".allSearchFields"] = array();
$tdatadetalles_servico[".filterFields"] = array();
$tdatadetalles_servico[".requiredSearchFields"] = array();

$tdatadetalles_servico[".googleLikeFields"] = array();
$tdatadetalles_servico[".googleLikeFields"][] = "id";
$tdatadetalles_servico[".googleLikeFields"][] = "fk_T_Servicio";
$tdatadetalles_servico[".googleLikeFields"][] = "Nombre_Servicio";
$tdatadetalles_servico[".googleLikeFields"][] = "Norma_Requerida";
$tdatadetalles_servico[".googleLikeFields"][] = "Valor_Servicio";
$tdatadetalles_servico[".googleLikeFields"][] = "Observaciones";
$tdatadetalles_servico[".googleLikeFields"][] = "fk_id_Laboratorio";



$tdatadetalles_servico[".tableType"] = "list";

$tdatadetalles_servico[".printerPageOrientation"] = 0;
$tdatadetalles_servico[".nPrinterPageScale"] = 100;

$tdatadetalles_servico[".nPrinterSplitRecords"] = 40;

$tdatadetalles_servico[".geocodingEnabled"] = false;










$tdatadetalles_servico[".pageSize"] = 20;

$tdatadetalles_servico[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadetalles_servico[".strOrderBy"] = $tstrOrderBy;

$tdatadetalles_servico[".orderindexes"] = array();


$tdatadetalles_servico[".sqlHead"] = "SELECT id,  	fk_T_Servicio,  	Nombre_Servicio,  	Norma_Requerida,  	Valor_Servicio,  	Observaciones,  	fk_id_Laboratorio";
$tdatadetalles_servico[".sqlFrom"] = "FROM detalles_servico";
$tdatadetalles_servico[".sqlWhereExpr"] = "";
$tdatadetalles_servico[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetalles_servico[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetalles_servico[".arrGroupsPerPage"] = $arrGPP;

$tdatadetalles_servico[".highlightSearchResults"] = true;

$tableKeysdetalles_servico = array();
$tableKeysdetalles_servico[] = "id";
$tdatadetalles_servico[".Keys"] = $tableKeysdetalles_servico;


$tdatadetalles_servico[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "detalles_servico";
	$fdata["Label"] = GetFieldLabel("detalles_servico","id");
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


	$tdatadetalles_servico["id"] = $fdata;
		$tdatadetalles_servico[".searchableFields"][] = "id";
//	fk_T_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fk_T_Servicio";
	$fdata["GoodName"] = "fk_T_Servicio";
	$fdata["ownerTable"] = "detalles_servico";
	$fdata["Label"] = GetFieldLabel("detalles_servico","fk_T_Servicio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_T_Servicio";

		$fdata["sourceSingle"] = "fk_T_Servicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_T_Servicio";

	
	
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
	$edata["LookupTable"] = "tiposervicio";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_ts";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Tipología";

	

	
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


	$tdatadetalles_servico["fk_T_Servicio"] = $fdata;
		$tdatadetalles_servico[".searchableFields"][] = "fk_T_Servicio";
//	Nombre_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nombre_Servicio";
	$fdata["GoodName"] = "Nombre_Servicio";
	$fdata["ownerTable"] = "detalles_servico";
	$fdata["Label"] = GetFieldLabel("detalles_servico","Nombre_Servicio");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "descripcion_servicios";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_desdripcion_servicio";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Valor_Servicio";

	
		$edata["Multiselect"] = true;

	
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


	$tdatadetalles_servico["Nombre_Servicio"] = $fdata;
		$tdatadetalles_servico[".searchableFields"][] = "Nombre_Servicio";
//	Norma_Requerida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Norma_Requerida";
	$fdata["GoodName"] = "Norma_Requerida";
	$fdata["ownerTable"] = "detalles_servico";
	$fdata["Label"] = GetFieldLabel("detalles_servico","Norma_Requerida");
	$fdata["FieldType"] = 201;


	
	
			

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


	$tdatadetalles_servico["Norma_Requerida"] = $fdata;
		$tdatadetalles_servico[".searchableFields"][] = "Norma_Requerida";
//	Valor_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valor_Servicio";
	$fdata["GoodName"] = "Valor_Servicio";
	$fdata["ownerTable"] = "detalles_servico";
	$fdata["Label"] = GetFieldLabel("detalles_servico","Valor_Servicio");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "descripcion_servicios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "precio";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "precio";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Nombre_Servicio", "lookup" => "id_desdripcion_servicio" );

	
	

	
	
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


	$tdatadetalles_servico["Valor_Servicio"] = $fdata;
		$tdatadetalles_servico[".searchableFields"][] = "Valor_Servicio";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "detalles_servico";
	$fdata["Label"] = GetFieldLabel("detalles_servico","Observaciones");
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


	$tdatadetalles_servico["Observaciones"] = $fdata;
		$tdatadetalles_servico[".searchableFields"][] = "Observaciones";
//	fk_id_Laboratorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fk_id_Laboratorio";
	$fdata["GoodName"] = "fk_id_Laboratorio";
	$fdata["ownerTable"] = "detalles_servico";
	$fdata["Label"] = GetFieldLabel("detalles_servico","fk_id_Laboratorio");
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


	$tdatadetalles_servico["fk_id_Laboratorio"] = $fdata;
		$tdatadetalles_servico[".searchableFields"][] = "fk_id_Laboratorio";


$tables_data["detalles_servico"]=&$tdatadetalles_servico;
$field_labels["detalles_servico"] = &$fieldLabelsdetalles_servico;
$fieldToolTips["detalles_servico"] = &$fieldToolTipsdetalles_servico;
$placeHolders["detalles_servico"] = &$placeHoldersdetalles_servico;
$page_titles["detalles_servico"] = &$pageTitlesdetalles_servico;


changeTextControlsToDate( "detalles_servico" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["detalles_servico"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["detalles_servico"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="servicios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="servicios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "servicios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detalles_servico"][0] = $masterParams;
				$masterTablesData["detalles_servico"][0]["masterKeys"] = array();
	$masterTablesData["detalles_servico"][0]["masterKeys"][]="id_Servicio";
				$masterTablesData["detalles_servico"][0]["detailKeys"] = array();
	$masterTablesData["detalles_servico"][0]["detailKeys"][]="fk_T_Servicio";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_detalles_servico()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	fk_T_Servicio,  	Nombre_Servicio,  	Norma_Requerida,  	Valor_Servicio,  	Observaciones,  	fk_id_Laboratorio";
$proto0["m_strFrom"] = "FROM detalles_servico";
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
	"m_strTable" => "detalles_servico",
	"m_srcTableName" => "detalles_servico"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "detalles_servico";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_T_Servicio",
	"m_strTable" => "detalles_servico",
	"m_srcTableName" => "detalles_servico"
));

$proto8["m_sql"] = "fk_T_Servicio";
$proto8["m_srcTableName"] = "detalles_servico";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Servicio",
	"m_strTable" => "detalles_servico",
	"m_srcTableName" => "detalles_servico"
));

$proto10["m_sql"] = "Nombre_Servicio";
$proto10["m_srcTableName"] = "detalles_servico";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Norma_Requerida",
	"m_strTable" => "detalles_servico",
	"m_srcTableName" => "detalles_servico"
));

$proto12["m_sql"] = "Norma_Requerida";
$proto12["m_srcTableName"] = "detalles_servico";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_Servicio",
	"m_strTable" => "detalles_servico",
	"m_srcTableName" => "detalles_servico"
));

$proto14["m_sql"] = "Valor_Servicio";
$proto14["m_srcTableName"] = "detalles_servico";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "detalles_servico",
	"m_srcTableName" => "detalles_servico"
));

$proto16["m_sql"] = "Observaciones";
$proto16["m_srcTableName"] = "detalles_servico";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Laboratorio",
	"m_strTable" => "detalles_servico",
	"m_srcTableName" => "detalles_servico"
));

$proto18["m_sql"] = "fk_id_Laboratorio";
$proto18["m_srcTableName"] = "detalles_servico";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "detalles_servico";
$proto21["m_srcTableName"] = "detalles_servico";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "fk_T_Servicio";
$proto21["m_columns"][] = "Nombre_Servicio";
$proto21["m_columns"][] = "Norma_Requerida";
$proto21["m_columns"][] = "Valor_Servicio";
$proto21["m_columns"][] = "Observaciones";
$proto21["m_columns"][] = "fk_id_Laboratorio";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "detalles_servico";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "detalles_servico";
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
$proto0["m_srcTableName"]="detalles_servico";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detalles_servico = createSqlQuery_detalles_servico();


	
		;

							

$tdatadetalles_servico[".sqlquery"] = $queryData_detalles_servico;



include_once(getabspath("include/detalles_servico_events.php"));
$tdatadetalles_servico[".hasEvents"] = true;

?>