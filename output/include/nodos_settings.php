<?php
$tdatanodos = array();
$tdatanodos[".searchableFields"] = array();
$tdatanodos[".ShortName"] = "nodos";
$tdatanodos[".OwnerID"] = "";
$tdatanodos[".OriginalTable"] = "nodos";


$tdatanodos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanodos[".originalPagesByType"] = $tdatanodos[".pagesByType"];
$tdatanodos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanodos[".originalPages"] = $tdatanodos[".pages"];
$tdatanodos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanodos[".originalDefaultPages"] = $tdatanodos[".defaultPages"];

//	field labels
$fieldLabelsnodos = array();
$fieldToolTipsnodos = array();
$pageTitlesnodos = array();
$placeHoldersnodos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnodos["Spanish"] = array();
	$fieldToolTipsnodos["Spanish"] = array();
	$placeHoldersnodos["Spanish"] = array();
	$pageTitlesnodos["Spanish"] = array();
	$fieldLabelsnodos["Spanish"]["id_nodo"] = "Id Nodo";
	$fieldToolTipsnodos["Spanish"]["id_nodo"] = "";
	$placeHoldersnodos["Spanish"]["id_nodo"] = "";
	$fieldLabelsnodos["Spanish"]["nom_nodo"] = "Nombre del Nodo";
	$fieldToolTipsnodos["Spanish"]["nom_nodo"] = "";
	$placeHoldersnodos["Spanish"]["nom_nodo"] = "";
	$fieldLabelsnodos["Spanish"]["id_centro"] = "Id Centro";
	$fieldToolTipsnodos["Spanish"]["id_centro"] = "";
	$placeHoldersnodos["Spanish"]["id_centro"] = "";
	$fieldLabelsnodos["Spanish"]["matricula_inmobiliario"] = "Matricula Inmobiliario";
	$fieldToolTipsnodos["Spanish"]["matricula_inmobiliario"] = "";
	$placeHoldersnodos["Spanish"]["matricula_inmobiliario"] = "";
	$fieldLabelsnodos["Spanish"]["barrio_nodo"] = "Barrio Nodo";
	$fieldToolTipsnodos["Spanish"]["barrio_nodo"] = "";
	$placeHoldersnodos["Spanish"]["barrio_nodo"] = "";
	$fieldLabelsnodos["Spanish"]["direc_nodo"] = "Direcció de Nodo";
	$fieldToolTipsnodos["Spanish"]["direc_nodo"] = "";
	$placeHoldersnodos["Spanish"]["direc_nodo"] = "";
	$fieldLabelsnodos["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipsnodos["Spanish"]["localidad"] = "";
	$placeHoldersnodos["Spanish"]["localidad"] = "";
	$fieldLabelsnodos["Spanish"]["img_nodo"] = "Imagen del Nodo";
	$fieldToolTipsnodos["Spanish"]["img_nodo"] = "";
	$placeHoldersnodos["Spanish"]["img_nodo"] = "";
	$fieldLabelsnodos["Spanish"]["fecha_reg_nodo"] = "Fecha de Registro";
	$fieldToolTipsnodos["Spanish"]["fecha_reg_nodo"] = "";
	$placeHoldersnodos["Spanish"]["fecha_reg_nodo"] = "";
	if (count($fieldToolTipsnodos["Spanish"]))
		$tdatanodos[".isUseToolTips"] = true;
}


	$tdatanodos[".NCSearch"] = true;



$tdatanodos[".shortTableName"] = "nodos";
$tdatanodos[".nSecOptions"] = 0;

$tdatanodos[".mainTableOwnerID"] = "";
$tdatanodos[".entityType"] = 0;
$tdatanodos[".connId"] = "project_pst_sena_at_localhost";


$tdatanodos[".strOriginalTableName"] = "nodos";

	



$tdatanodos[".showAddInPopup"] = false;

$tdatanodos[".showEditInPopup"] = false;

$tdatanodos[".showViewInPopup"] = false;

$tdatanodos[".listAjax"] = false;
//	temporary
//$tdatanodos[".listAjax"] = false;

	$tdatanodos[".audit"] = false;

	$tdatanodos[".locking"] = false;


$pages = $tdatanodos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanodos[".edit"] = true;
	$tdatanodos[".afterEditAction"] = 1;
	$tdatanodos[".closePopupAfterEdit"] = 1;
	$tdatanodos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanodos[".add"] = true;
$tdatanodos[".afterAddAction"] = 1;
$tdatanodos[".closePopupAfterAdd"] = 1;
$tdatanodos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanodos[".list"] = true;
}



$tdatanodos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanodos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanodos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanodos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanodos[".printFriendly"] = true;
}



$tdatanodos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanodos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanodos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanodos[".isUseAjaxSuggest"] = true;



			

$tdatanodos[".ajaxCodeSnippetAdded"] = false;

$tdatanodos[".buttonsAdded"] = false;

$tdatanodos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanodos[".isUseTimeForSearch"] = false;


$tdatanodos[".badgeColor"] = "CFAE83";


$tdatanodos[".allSearchFields"] = array();
$tdatanodos[".filterFields"] = array();
$tdatanodos[".requiredSearchFields"] = array();

$tdatanodos[".googleLikeFields"] = array();
$tdatanodos[".googleLikeFields"][] = "id_nodo";
$tdatanodos[".googleLikeFields"][] = "nom_nodo";
$tdatanodos[".googleLikeFields"][] = "id_centro";
$tdatanodos[".googleLikeFields"][] = "matricula_inmobiliario";
$tdatanodos[".googleLikeFields"][] = "barrio_nodo";
$tdatanodos[".googleLikeFields"][] = "direc_nodo";
$tdatanodos[".googleLikeFields"][] = "localidad";
$tdatanodos[".googleLikeFields"][] = "img_nodo";
$tdatanodos[".googleLikeFields"][] = "fecha_reg_nodo";



$tdatanodos[".tableType"] = "list";

$tdatanodos[".printerPageOrientation"] = 0;
$tdatanodos[".nPrinterPageScale"] = 100;

$tdatanodos[".nPrinterSplitRecords"] = 40;

$tdatanodos[".geocodingEnabled"] = false;










$tdatanodos[".pageSize"] = 20;

$tdatanodos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanodos[".strOrderBy"] = $tstrOrderBy;

$tdatanodos[".orderindexes"] = array();


$tdatanodos[".sqlHead"] = "SELECT id_nodo,  	nom_nodo,  	id_centro,  	matricula_inmobiliario,  	barrio_nodo,  	direc_nodo,  	localidad,  	img_nodo,  	fecha_reg_nodo";
$tdatanodos[".sqlFrom"] = "FROM nodos";
$tdatanodos[".sqlWhereExpr"] = "";
$tdatanodos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanodos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanodos[".arrGroupsPerPage"] = $arrGPP;

$tdatanodos[".highlightSearchResults"] = true;

$tableKeysnodos = array();
$tableKeysnodos[] = "id_nodo";
$tdatanodos[".Keys"] = $tableKeysnodos;


$tdatanodos[".hideMobileList"] = array();




//	id_nodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_nodo";
	$fdata["GoodName"] = "id_nodo";
	$fdata["ownerTable"] = "nodos";
	$fdata["Label"] = GetFieldLabel("nodos","id_nodo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_nodo";

		$fdata["sourceSingle"] = "id_nodo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_nodo";

	
	
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


	$tdatanodos["id_nodo"] = $fdata;
		$tdatanodos[".searchableFields"][] = "id_nodo";
//	nom_nodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom_nodo";
	$fdata["GoodName"] = "nom_nodo";
	$fdata["ownerTable"] = "nodos";
	$fdata["Label"] = GetFieldLabel("nodos","nom_nodo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_nodo";

		$fdata["sourceSingle"] = "nom_nodo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_nodo";

	
	
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


	$tdatanodos["nom_nodo"] = $fdata;
		$tdatanodos[".searchableFields"][] = "nom_nodo";
//	id_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_centro";
	$fdata["GoodName"] = "id_centro";
	$fdata["ownerTable"] = "nodos";
	$fdata["Label"] = GetFieldLabel("nodos","id_centro");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_centro";

		$fdata["sourceSingle"] = "id_centro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_centro";

	
	
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


	$tdatanodos["id_centro"] = $fdata;
		$tdatanodos[".searchableFields"][] = "id_centro";
//	matricula_inmobiliario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "matricula_inmobiliario";
	$fdata["GoodName"] = "matricula_inmobiliario";
	$fdata["ownerTable"] = "nodos";
	$fdata["Label"] = GetFieldLabel("nodos","matricula_inmobiliario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "matricula_inmobiliario";

		$fdata["sourceSingle"] = "matricula_inmobiliario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "matricula_inmobiliario";

	
	
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


	$tdatanodos["matricula_inmobiliario"] = $fdata;
		$tdatanodos[".searchableFields"][] = "matricula_inmobiliario";
//	barrio_nodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "barrio_nodo";
	$fdata["GoodName"] = "barrio_nodo";
	$fdata["ownerTable"] = "nodos";
	$fdata["Label"] = GetFieldLabel("nodos","barrio_nodo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "barrio_nodo";

		$fdata["sourceSingle"] = "barrio_nodo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "barrio_nodo";

	
	
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


	$tdatanodos["barrio_nodo"] = $fdata;
		$tdatanodos[".searchableFields"][] = "barrio_nodo";
//	direc_nodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "direc_nodo";
	$fdata["GoodName"] = "direc_nodo";
	$fdata["ownerTable"] = "nodos";
	$fdata["Label"] = GetFieldLabel("nodos","direc_nodo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "direc_nodo";

		$fdata["sourceSingle"] = "direc_nodo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direc_nodo";

	
	
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


	$tdatanodos["direc_nodo"] = $fdata;
		$tdatanodos[".searchableFields"][] = "direc_nodo";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "nodos";
	$fdata["Label"] = GetFieldLabel("nodos","localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "localidad";

		$fdata["sourceSingle"] = "localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "localidad";

	
	
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


	$tdatanodos["localidad"] = $fdata;
		$tdatanodos[".searchableFields"][] = "localidad";
//	img_nodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "img_nodo";
	$fdata["GoodName"] = "img_nodo";
	$fdata["ownerTable"] = "nodos";
	$fdata["Label"] = GetFieldLabel("nodos","img_nodo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "img_nodo";

		$fdata["sourceSingle"] = "img_nodo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "img_nodo";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatanodos["img_nodo"] = $fdata;
		$tdatanodos[".searchableFields"][] = "img_nodo";
//	fecha_reg_nodo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha_reg_nodo";
	$fdata["GoodName"] = "fecha_reg_nodo";
	$fdata["ownerTable"] = "nodos";
	$fdata["Label"] = GetFieldLabel("nodos","fecha_reg_nodo");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_reg_nodo";

		$fdata["sourceSingle"] = "fecha_reg_nodo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_reg_nodo";

	
	
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


	$tdatanodos["fecha_reg_nodo"] = $fdata;
		$tdatanodos[".searchableFields"][] = "fecha_reg_nodo";


$tables_data["nodos"]=&$tdatanodos;
$field_labels["nodos"] = &$fieldLabelsnodos;
$fieldToolTips["nodos"] = &$fieldToolTipsnodos;
$placeHolders["nodos"] = &$placeHoldersnodos;
$page_titles["nodos"] = &$pageTitlesnodos;


changeTextControlsToDate( "nodos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["nodos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["nodos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_nodos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_nodo,  	nom_nodo,  	id_centro,  	matricula_inmobiliario,  	barrio_nodo,  	direc_nodo,  	localidad,  	img_nodo,  	fecha_reg_nodo";
$proto0["m_strFrom"] = "FROM nodos";
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
	"m_strName" => "id_nodo",
	"m_strTable" => "nodos",
	"m_srcTableName" => "nodos"
));

$proto6["m_sql"] = "id_nodo";
$proto6["m_srcTableName"] = "nodos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_nodo",
	"m_strTable" => "nodos",
	"m_srcTableName" => "nodos"
));

$proto8["m_sql"] = "nom_nodo";
$proto8["m_srcTableName"] = "nodos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_centro",
	"m_strTable" => "nodos",
	"m_srcTableName" => "nodos"
));

$proto10["m_sql"] = "id_centro";
$proto10["m_srcTableName"] = "nodos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "matricula_inmobiliario",
	"m_strTable" => "nodos",
	"m_srcTableName" => "nodos"
));

$proto12["m_sql"] = "matricula_inmobiliario";
$proto12["m_srcTableName"] = "nodos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "barrio_nodo",
	"m_strTable" => "nodos",
	"m_srcTableName" => "nodos"
));

$proto14["m_sql"] = "barrio_nodo";
$proto14["m_srcTableName"] = "nodos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "direc_nodo",
	"m_strTable" => "nodos",
	"m_srcTableName" => "nodos"
));

$proto16["m_sql"] = "direc_nodo";
$proto16["m_srcTableName"] = "nodos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "nodos",
	"m_srcTableName" => "nodos"
));

$proto18["m_sql"] = "localidad";
$proto18["m_srcTableName"] = "nodos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "img_nodo",
	"m_strTable" => "nodos",
	"m_srcTableName" => "nodos"
));

$proto20["m_sql"] = "img_nodo";
$proto20["m_srcTableName"] = "nodos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_reg_nodo",
	"m_strTable" => "nodos",
	"m_srcTableName" => "nodos"
));

$proto22["m_sql"] = "fecha_reg_nodo";
$proto22["m_srcTableName"] = "nodos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "nodos";
$proto25["m_srcTableName"] = "nodos";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_nodo";
$proto25["m_columns"][] = "nom_nodo";
$proto25["m_columns"][] = "id_centro";
$proto25["m_columns"][] = "matricula_inmobiliario";
$proto25["m_columns"][] = "barrio_nodo";
$proto25["m_columns"][] = "direc_nodo";
$proto25["m_columns"][] = "localidad";
$proto25["m_columns"][] = "img_nodo";
$proto25["m_columns"][] = "fecha_reg_nodo";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "nodos";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "nodos";
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
$proto0["m_srcTableName"]="nodos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nodos = createSqlQuery_nodos();


	
		;

									

$tdatanodos[".sqlquery"] = $queryData_nodos;



$tdatanodos[".hasEvents"] = false;

?>