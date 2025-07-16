<?php
$tdataservicios = array();
$tdataservicios[".searchableFields"] = array();
$tdataservicios[".ShortName"] = "servicios";
$tdataservicios[".OwnerID"] = "";
$tdataservicios[".OriginalTable"] = "servicios";


$tdataservicios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataservicios[".originalPagesByType"] = $tdataservicios[".pagesByType"];
$tdataservicios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataservicios[".originalPages"] = $tdataservicios[".pages"];
$tdataservicios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataservicios[".originalDefaultPages"] = $tdataservicios[".defaultPages"];

//	field labels
$fieldLabelsservicios = array();
$fieldToolTipsservicios = array();
$pageTitlesservicios = array();
$placeHoldersservicios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsservicios["Spanish"] = array();
	$fieldToolTipsservicios["Spanish"] = array();
	$placeHoldersservicios["Spanish"] = array();
	$pageTitlesservicios["Spanish"] = array();
	$fieldLabelsservicios["Spanish"]["id_Servicio"] = "Id Servicio";
	$fieldToolTipsservicios["Spanish"]["id_Servicio"] = "";
	$placeHoldersservicios["Spanish"]["id_Servicio"] = "";
	$fieldLabelsservicios["Spanish"]["Nombre_Servicio"] = "Nombre Servicio";
	$fieldToolTipsservicios["Spanish"]["Nombre_Servicio"] = "";
	$placeHoldersservicios["Spanish"]["Nombre_Servicio"] = "";
	$fieldLabelsservicios["Spanish"]["Tipolog_a"] = "Tipología";
	$fieldToolTipsservicios["Spanish"]["Tipolog_a"] = "";
	$placeHoldersservicios["Spanish"]["Tipolog_a"] = "";
	$fieldLabelsservicios["Spanish"]["fk_laboratorio"] = "Fk Laboratorio";
	$fieldToolTipsservicios["Spanish"]["fk_laboratorio"] = "";
	$placeHoldersservicios["Spanish"]["fk_laboratorio"] = "";
	if (count($fieldToolTipsservicios["Spanish"]))
		$tdataservicios[".isUseToolTips"] = true;
}


	$tdataservicios[".NCSearch"] = true;



$tdataservicios[".shortTableName"] = "servicios";
$tdataservicios[".nSecOptions"] = 0;

$tdataservicios[".mainTableOwnerID"] = "";
$tdataservicios[".entityType"] = 0;
$tdataservicios[".connId"] = "project_pst_sena_at_localhost";


$tdataservicios[".strOriginalTableName"] = "servicios";

	



$tdataservicios[".showAddInPopup"] = false;

$tdataservicios[".showEditInPopup"] = false;

$tdataservicios[".showViewInPopup"] = false;

$tdataservicios[".listAjax"] = false;
//	temporary
//$tdataservicios[".listAjax"] = false;

	$tdataservicios[".audit"] = false;

	$tdataservicios[".locking"] = false;


$pages = $tdataservicios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataservicios[".edit"] = true;
	$tdataservicios[".afterEditAction"] = 1;
	$tdataservicios[".closePopupAfterEdit"] = 1;
	$tdataservicios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataservicios[".add"] = true;
$tdataservicios[".afterAddAction"] = 3;
$tdataservicios[".closePopupAfterAdd"] = 0;
$tdataservicios[".afterAddActionDetTable"] = "calibracion";
}

if( $pages[PAGE_LIST] ) {
	$tdataservicios[".list"] = true;
}



$tdataservicios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataservicios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataservicios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataservicios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataservicios[".printFriendly"] = true;
}



$tdataservicios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataservicios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataservicios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataservicios[".isUseAjaxSuggest"] = true;



						

$tdataservicios[".ajaxCodeSnippetAdded"] = false;

$tdataservicios[".buttonsAdded"] = false;

$tdataservicios[".addPageEvents"] = true;

// use timepicker for search panel
$tdataservicios[".isUseTimeForSearch"] = false;


$tdataservicios[".badgeColor"] = "b22222";


$tdataservicios[".allSearchFields"] = array();
$tdataservicios[".filterFields"] = array();
$tdataservicios[".requiredSearchFields"] = array();

$tdataservicios[".googleLikeFields"] = array();
$tdataservicios[".googleLikeFields"][] = "id_Servicio";
$tdataservicios[".googleLikeFields"][] = "Tipología";
$tdataservicios[".googleLikeFields"][] = "Nombre_Servicio";
$tdataservicios[".googleLikeFields"][] = "fk_laboratorio";



$tdataservicios[".tableType"] = "list";

$tdataservicios[".printerPageOrientation"] = 0;
$tdataservicios[".nPrinterPageScale"] = 100;

$tdataservicios[".nPrinterSplitRecords"] = 40;

$tdataservicios[".geocodingEnabled"] = false;










$tdataservicios[".pageSize"] = 20;

$tdataservicios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataservicios[".strOrderBy"] = $tstrOrderBy;

$tdataservicios[".orderindexes"] = array();


$tdataservicios[".sqlHead"] = "SELECT id_Servicio,  	`Tipología`,  	Nombre_Servicio,  	fk_laboratorio";
$tdataservicios[".sqlFrom"] = "FROM servicios";
$tdataservicios[".sqlWhereExpr"] = "";
$tdataservicios[".sqlTail"] = "";

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
$tdataservicios[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataservicios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataservicios[".arrGroupsPerPage"] = $arrGPP;

$tdataservicios[".highlightSearchResults"] = true;

$tableKeysservicios = array();
$tableKeysservicios[] = "id_Servicio";
$tdataservicios[".Keys"] = $tableKeysservicios;


$tdataservicios[".hideMobileList"] = array();




//	id_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Servicio";
	$fdata["GoodName"] = "id_Servicio";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","id_Servicio");
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


	$tdataservicios["id_Servicio"] = $fdata;
		$tdataservicios[".searchableFields"][] = "id_Servicio";
//	Tipología
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tipología";
	$fdata["GoodName"] = "Tipolog_a";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Tipolog_a");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Tipología";

		$fdata["sourceSingle"] = "Tipología";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipología`";

	
	
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


	$tdataservicios["Tipología"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Tipología";
//	Nombre_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Nombre_Servicio";
	$fdata["GoodName"] = "Nombre_Servicio";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Nombre_Servicio");
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


	$tdataservicios["Nombre_Servicio"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Nombre_Servicio";
//	fk_laboratorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fk_laboratorio";
	$fdata["GoodName"] = "fk_laboratorio";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","fk_laboratorio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_laboratorio";

		$fdata["sourceSingle"] = "fk_laboratorio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_laboratorio";

	
	
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


	$tdataservicios["fk_laboratorio"] = $fdata;
		$tdataservicios[".searchableFields"][] = "fk_laboratorio";


$tables_data["servicios"]=&$tdataservicios;
$field_labels["servicios"] = &$fieldLabelsservicios;
$fieldToolTips["servicios"] = &$fieldToolTipsservicios;
$placeHolders["servicios"] = &$placeHoldersservicios;
$page_titles["servicios"] = &$pageTitlesservicios;


changeTextControlsToDate( "servicios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["servicios"] = array();
//	detalles_cotizacion
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalles_cotizacion";
		$detailsParam["dOriginalTable"] = "detalles_cotizacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalles_cotizacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalles_cotizacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["servicios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["servicios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["masterKeys"][]="id_Servicio";

				$detailsTablesData["servicios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["detailKeys"][]="fk_id_Servicio";
//	ofertas
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ofertas";
		$detailsParam["dOriginalTable"] = "ofertas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ofertas";
	$detailsParam["dCaptionTable"] = GetTableCaption("ofertas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["servicios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["servicios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["masterKeys"][]="id_Servicio";

				$detailsTablesData["servicios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["detailKeys"][]="fk_id_Servicio";
//	ensayo
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ensayo";
		$detailsParam["dOriginalTable"] = "ensayo";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ensayo";
	$detailsParam["dCaptionTable"] = GetTableCaption("ensayo");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["servicios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["servicios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["masterKeys"][]="id_Servicio";

				$detailsTablesData["servicios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["detailKeys"][]="fk_id_Servicio";
//	calibracion
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="calibracion";
		$detailsParam["dOriginalTable"] = "calibracion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "calibracion";
	$detailsParam["dCaptionTable"] = GetTableCaption("calibracion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["servicios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["servicios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["masterKeys"][]="id_Servicio";

				$detailsTablesData["servicios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["detailKeys"][]="fk_id_Servicio";
//	detalles_servico
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detalles_servico";
		$detailsParam["dOriginalTable"] = "detalles_servico";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detalles_servico";
	$detailsParam["dCaptionTable"] = GetTableCaption("detalles_servico");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["servicios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["servicios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["masterKeys"][]="id_Servicio";

				$detailsTablesData["servicios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["detailKeys"][]="fk_T_Servicio";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["servicios"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="laboratorio";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="laboratorio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "laboratorio";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["servicios"][0] = $masterParams;
				$masterTablesData["servicios"][0]["masterKeys"] = array();
	$masterTablesData["servicios"][0]["masterKeys"][]="id_Laboratorio";
				$masterTablesData["servicios"][0]["detailKeys"] = array();
	$masterTablesData["servicios"][0]["detailKeys"][]="fk_laboratorio";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_servicios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Servicio,  	`Tipología`,  	Nombre_Servicio,  	fk_laboratorio";
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
	"m_srcTableName" => "servicios"
));

$proto6["m_sql"] = "id_Servicio";
$proto6["m_srcTableName"] = "servicios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipología",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto8["m_sql"] = "`Tipología`";
$proto8["m_srcTableName"] = "servicios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Servicio",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto10["m_sql"] = "Nombre_Servicio";
$proto10["m_srcTableName"] = "servicios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_laboratorio",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto12["m_sql"] = "fk_laboratorio";
$proto12["m_srcTableName"] = "servicios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "servicios";
$proto15["m_srcTableName"] = "servicios";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_Servicio";
$proto15["m_columns"][] = "Tipología";
$proto15["m_columns"][] = "Nombre_Servicio";
$proto15["m_columns"][] = "fk_laboratorio";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "servicios";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "servicios";
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
$proto0["m_srcTableName"]="servicios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_servicios = createSqlQuery_servicios();


	
		;

				

$tdataservicios[".sqlquery"] = $queryData_servicios;



include_once(getabspath("include/servicios_events.php"));
$tdataservicios[".hasEvents"] = true;

$query = &$queryData_servicios;
$table = "servicios";
// here goes EVENT_INIT_TABLE event

$user=$_SESSION['UserID'];
$permiso=Security::getUserGroup();
if($permiso=='SuperAdmin'){


}else if($permiso=='LabAdmin'){
$rs = DB::Query("select id_User FROM usuario WHERE Usuario='".$user."'");
$data=$rs->fetchAssoc();

$rs2 = DB::Query("select id_Laboratorio FROM laboratorio WHERE fk_id_User='".$data['id_User']."'");
$data2=$rs2->fetchAssoc();

$query->addWhere('fk_laboratorio='.$data2['id_Laboratorio']);
} else if($permiso == 'Cliente') {


}


;
unset($query);
?>