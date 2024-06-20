<?php
$tdataofertas = array();
$tdataofertas[".searchableFields"] = array();
$tdataofertas[".ShortName"] = "ofertas";
$tdataofertas[".OwnerID"] = "";
$tdataofertas[".OriginalTable"] = "ofertas";


$tdataofertas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataofertas[".originalPagesByType"] = $tdataofertas[".pagesByType"];
$tdataofertas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataofertas[".originalPages"] = $tdataofertas[".pages"];
$tdataofertas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataofertas[".originalDefaultPages"] = $tdataofertas[".defaultPages"];

//	field labels
$fieldLabelsofertas = array();
$fieldToolTipsofertas = array();
$pageTitlesofertas = array();
$placeHoldersofertas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsofertas["Spanish"] = array();
	$fieldToolTipsofertas["Spanish"] = array();
	$placeHoldersofertas["Spanish"] = array();
	$pageTitlesofertas["Spanish"] = array();
	$fieldLabelsofertas["Spanish"]["id_Oferta"] = "Id Oferta";
	$fieldToolTipsofertas["Spanish"]["id_Oferta"] = "";
	$placeHoldersofertas["Spanish"]["id_Oferta"] = "";
	$fieldLabelsofertas["Spanish"]["Imagen"] = "Imagen";
	$fieldToolTipsofertas["Spanish"]["Imagen"] = "";
	$placeHoldersofertas["Spanish"]["Imagen"] = "";
	$fieldLabelsofertas["Spanish"]["Fecha_Inicio"] = "Fecha Inicio";
	$fieldToolTipsofertas["Spanish"]["Fecha_Inicio"] = "";
	$placeHoldersofertas["Spanish"]["Fecha_Inicio"] = "";
	$fieldLabelsofertas["Spanish"]["Fecha_Fin"] = "Fecha Fin";
	$fieldToolTipsofertas["Spanish"]["Fecha_Fin"] = "";
	$placeHoldersofertas["Spanish"]["Fecha_Fin"] = "";
	$fieldLabelsofertas["Spanish"]["Valor_Oferta"] = "Valor Oferta";
	$fieldToolTipsofertas["Spanish"]["Valor_Oferta"] = "";
	$placeHoldersofertas["Spanish"]["Valor_Oferta"] = "";
	$fieldLabelsofertas["Spanish"]["fk_id_Servicio"] = "Fk Id Servicio";
	$fieldToolTipsofertas["Spanish"]["fk_id_Servicio"] = "";
	$placeHoldersofertas["Spanish"]["fk_id_Servicio"] = "";
	if (count($fieldToolTipsofertas["Spanish"]))
		$tdataofertas[".isUseToolTips"] = true;
}


	$tdataofertas[".NCSearch"] = true;



$tdataofertas[".shortTableName"] = "ofertas";
$tdataofertas[".nSecOptions"] = 0;

$tdataofertas[".mainTableOwnerID"] = "";
$tdataofertas[".entityType"] = 0;
$tdataofertas[".connId"] = "project_pst_sena_at_localhost";


$tdataofertas[".strOriginalTableName"] = "ofertas";

	



$tdataofertas[".showAddInPopup"] = false;

$tdataofertas[".showEditInPopup"] = false;

$tdataofertas[".showViewInPopup"] = false;

$tdataofertas[".listAjax"] = false;
//	temporary
//$tdataofertas[".listAjax"] = false;

	$tdataofertas[".audit"] = false;

	$tdataofertas[".locking"] = false;


$pages = $tdataofertas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataofertas[".edit"] = true;
	$tdataofertas[".afterEditAction"] = 1;
	$tdataofertas[".closePopupAfterEdit"] = 1;
	$tdataofertas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataofertas[".add"] = true;
$tdataofertas[".afterAddAction"] = 1;
$tdataofertas[".closePopupAfterAdd"] = 1;
$tdataofertas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataofertas[".list"] = true;
}



$tdataofertas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataofertas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataofertas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataofertas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataofertas[".printFriendly"] = true;
}



$tdataofertas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataofertas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataofertas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataofertas[".isUseAjaxSuggest"] = true;





$tdataofertas[".ajaxCodeSnippetAdded"] = false;

$tdataofertas[".buttonsAdded"] = false;

$tdataofertas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataofertas[".isUseTimeForSearch"] = false;


$tdataofertas[".badgeColor"] = "edca00";


$tdataofertas[".allSearchFields"] = array();
$tdataofertas[".filterFields"] = array();
$tdataofertas[".requiredSearchFields"] = array();

$tdataofertas[".googleLikeFields"] = array();
$tdataofertas[".googleLikeFields"][] = "id_Oferta";
$tdataofertas[".googleLikeFields"][] = "Imagen";
$tdataofertas[".googleLikeFields"][] = "Fecha_Inicio";
$tdataofertas[".googleLikeFields"][] = "Fecha_Fin";
$tdataofertas[".googleLikeFields"][] = "Valor_Oferta";
$tdataofertas[".googleLikeFields"][] = "fk_id_Servicio";



$tdataofertas[".tableType"] = "list";

$tdataofertas[".printerPageOrientation"] = 0;
$tdataofertas[".nPrinterPageScale"] = 100;

$tdataofertas[".nPrinterSplitRecords"] = 40;

$tdataofertas[".geocodingEnabled"] = false;










$tdataofertas[".pageSize"] = 20;

$tdataofertas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataofertas[".strOrderBy"] = $tstrOrderBy;

$tdataofertas[".orderindexes"] = array();


$tdataofertas[".sqlHead"] = "SELECT id_Oferta,  	Imagen,  	Fecha_Inicio,  	Fecha_Fin,  	Valor_Oferta,  	fk_id_Servicio";
$tdataofertas[".sqlFrom"] = "FROM ofertas";
$tdataofertas[".sqlWhereExpr"] = "";
$tdataofertas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataofertas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataofertas[".arrGroupsPerPage"] = $arrGPP;

$tdataofertas[".highlightSearchResults"] = true;

$tableKeysofertas = array();
$tableKeysofertas[] = "id_Oferta";
$tdataofertas[".Keys"] = $tableKeysofertas;


$tdataofertas[".hideMobileList"] = array();




//	id_Oferta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Oferta";
	$fdata["GoodName"] = "id_Oferta";
	$fdata["ownerTable"] = "ofertas";
	$fdata["Label"] = GetFieldLabel("ofertas","id_Oferta");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Oferta";

		$fdata["sourceSingle"] = "id_Oferta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Oferta";

	
	
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


	$tdataofertas["id_Oferta"] = $fdata;
		$tdataofertas[".searchableFields"][] = "id_Oferta";
//	Imagen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Imagen";
	$fdata["GoodName"] = "Imagen";
	$fdata["ownerTable"] = "ofertas";
	$fdata["Label"] = GetFieldLabel("ofertas","Imagen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Imagen";

		$fdata["sourceSingle"] = "Imagen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Imagen";

	
	
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


	$tdataofertas["Imagen"] = $fdata;
		$tdataofertas[".searchableFields"][] = "Imagen";
//	Fecha_Inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fecha_Inicio";
	$fdata["GoodName"] = "Fecha_Inicio";
	$fdata["ownerTable"] = "ofertas";
	$fdata["Label"] = GetFieldLabel("ofertas","Fecha_Inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha_Inicio";

		$fdata["sourceSingle"] = "Fecha_Inicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha_Inicio";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdataofertas["Fecha_Inicio"] = $fdata;
		$tdataofertas[".searchableFields"][] = "Fecha_Inicio";
//	Fecha_Fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha_Fin";
	$fdata["GoodName"] = "Fecha_Fin";
	$fdata["ownerTable"] = "ofertas";
	$fdata["Label"] = GetFieldLabel("ofertas","Fecha_Fin");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha_Fin";

		$fdata["sourceSingle"] = "Fecha_Fin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha_Fin";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdataofertas["Fecha_Fin"] = $fdata;
		$tdataofertas[".searchableFields"][] = "Fecha_Fin";
//	Valor_Oferta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valor_Oferta";
	$fdata["GoodName"] = "Valor_Oferta";
	$fdata["ownerTable"] = "ofertas";
	$fdata["Label"] = GetFieldLabel("ofertas","Valor_Oferta");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor_Oferta";

		$fdata["sourceSingle"] = "Valor_Oferta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor_Oferta";

	
	
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


	$tdataofertas["Valor_Oferta"] = $fdata;
		$tdataofertas[".searchableFields"][] = "Valor_Oferta";
//	fk_id_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_id_Servicio";
	$fdata["GoodName"] = "fk_id_Servicio";
	$fdata["ownerTable"] = "ofertas";
	$fdata["Label"] = GetFieldLabel("ofertas","fk_id_Servicio");
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


	$tdataofertas["fk_id_Servicio"] = $fdata;
		$tdataofertas[".searchableFields"][] = "fk_id_Servicio";


$tables_data["ofertas"]=&$tdataofertas;
$field_labels["ofertas"] = &$fieldLabelsofertas;
$fieldToolTips["ofertas"] = &$fieldToolTipsofertas;
$placeHolders["ofertas"] = &$placeHoldersofertas;
$page_titles["ofertas"] = &$pageTitlesofertas;


changeTextControlsToDate( "ofertas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ofertas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ofertas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="servicios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="servicios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "servicios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ofertas"][0] = $masterParams;
				$masterTablesData["ofertas"][0]["masterKeys"] = array();
	$masterTablesData["ofertas"][0]["masterKeys"][]="id_Servicio";
				$masterTablesData["ofertas"][0]["detailKeys"] = array();
	$masterTablesData["ofertas"][0]["detailKeys"][]="fk_id_Servicio";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ofertas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Oferta,  	Imagen,  	Fecha_Inicio,  	Fecha_Fin,  	Valor_Oferta,  	fk_id_Servicio";
$proto0["m_strFrom"] = "FROM ofertas";
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
	"m_strName" => "id_Oferta",
	"m_strTable" => "ofertas",
	"m_srcTableName" => "ofertas"
));

$proto6["m_sql"] = "id_Oferta";
$proto6["m_srcTableName"] = "ofertas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Imagen",
	"m_strTable" => "ofertas",
	"m_srcTableName" => "ofertas"
));

$proto8["m_sql"] = "Imagen";
$proto8["m_srcTableName"] = "ofertas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha_Inicio",
	"m_strTable" => "ofertas",
	"m_srcTableName" => "ofertas"
));

$proto10["m_sql"] = "Fecha_Inicio";
$proto10["m_srcTableName"] = "ofertas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha_Fin",
	"m_strTable" => "ofertas",
	"m_srcTableName" => "ofertas"
));

$proto12["m_sql"] = "Fecha_Fin";
$proto12["m_srcTableName"] = "ofertas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_Oferta",
	"m_strTable" => "ofertas",
	"m_srcTableName" => "ofertas"
));

$proto14["m_sql"] = "Valor_Oferta";
$proto14["m_srcTableName"] = "ofertas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Servicio",
	"m_strTable" => "ofertas",
	"m_srcTableName" => "ofertas"
));

$proto16["m_sql"] = "fk_id_Servicio";
$proto16["m_srcTableName"] = "ofertas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "ofertas";
$proto19["m_srcTableName"] = "ofertas";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_Oferta";
$proto19["m_columns"][] = "Imagen";
$proto19["m_columns"][] = "Fecha_Inicio";
$proto19["m_columns"][] = "Fecha_Fin";
$proto19["m_columns"][] = "Valor_Oferta";
$proto19["m_columns"][] = "fk_id_Servicio";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "ofertas";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "ofertas";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ofertas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ofertas = createSqlQuery_ofertas();


	
		;

						

$tdataofertas[".sqlquery"] = $queryData_ofertas;



$tdataofertas[".hasEvents"] = false;

?>