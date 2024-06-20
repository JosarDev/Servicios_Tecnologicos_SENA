<?php
$tdataservicios = array();
$tdataservicios[".searchableFields"] = array();
$tdataservicios[".ShortName"] = "servicios";
$tdataservicios[".OwnerID"] = "";
$tdataservicios[".OriginalTable"] = "servicios";


$tdataservicios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataservicios[".originalPagesByType"] = $tdataservicios[".pagesByType"];
$tdataservicios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataservicios[".originalPages"] = $tdataservicios[".pages"];
$tdataservicios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
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
	$fieldLabelsservicios["Spanish"]["Normatividad"] = "Normatividad";
	$fieldToolTipsservicios["Spanish"]["Normatividad"] = "";
	$placeHoldersservicios["Spanish"]["Normatividad"] = "";
	$fieldLabelsservicios["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipsservicios["Spanish"]["Descripcion"] = "";
	$placeHoldersservicios["Spanish"]["Descripcion"] = "";
	$fieldLabelsservicios["Spanish"]["Valor_Servicio"] = "Valor Servicio";
	$fieldToolTipsservicios["Spanish"]["Valor_Servicio"] = "";
	$placeHoldersservicios["Spanish"]["Valor_Servicio"] = "";
	$fieldLabelsservicios["Spanish"]["TipoServicio"] = "Tipo Servicio";
	$fieldToolTipsservicios["Spanish"]["TipoServicio"] = "";
	$placeHoldersservicios["Spanish"]["TipoServicio"] = "";
	$fieldLabelsservicios["Spanish"]["Instrumento"] = "Instrumento";
	$fieldToolTipsservicios["Spanish"]["Instrumento"] = "";
	$placeHoldersservicios["Spanish"]["Instrumento"] = "";
	$fieldLabelsservicios["Spanish"]["Fabricante"] = "Fabricante";
	$fieldToolTipsservicios["Spanish"]["Fabricante"] = "";
	$placeHoldersservicios["Spanish"]["Fabricante"] = "";
	$fieldLabelsservicios["Spanish"]["Modelo"] = "Modelo";
	$fieldToolTipsservicios["Spanish"]["Modelo"] = "";
	$placeHoldersservicios["Spanish"]["Modelo"] = "";
	$fieldLabelsservicios["Spanish"]["Serie"] = "Serie";
	$fieldToolTipsservicios["Spanish"]["Serie"] = "";
	$placeHoldersservicios["Spanish"]["Serie"] = "";
	$fieldLabelsservicios["Spanish"]["Cog_Interno"] = "Cog Interno";
	$fieldToolTipsservicios["Spanish"]["Cog_Interno"] = "";
	$placeHoldersservicios["Spanish"]["Cog_Interno"] = "";
	$fieldLabelsservicios["Spanish"]["IRPC"] = "IRPC";
	$fieldToolTipsservicios["Spanish"]["IRPC"] = "";
	$placeHoldersservicios["Spanish"]["IRPC"] = "";
	$fieldLabelsservicios["Spanish"]["Nom_Material"] = "Nom Material";
	$fieldToolTipsservicios["Spanish"]["Nom_Material"] = "";
	$placeHoldersservicios["Spanish"]["Nom_Material"] = "";
	$fieldLabelsservicios["Spanish"]["Tipo_Material"] = "Tipo Material";
	$fieldToolTipsservicios["Spanish"]["Tipo_Material"] = "";
	$placeHoldersservicios["Spanish"]["Tipo_Material"] = "";
	$fieldLabelsservicios["Spanish"]["Report_Results"] = "Report Results";
	$fieldToolTipsservicios["Spanish"]["Report_Results"] = "";
	$placeHoldersservicios["Spanish"]["Report_Results"] = "";
	$fieldLabelsservicios["Spanish"]["Cantidad"] = "Cantidad";
	$fieldToolTipsservicios["Spanish"]["Cantidad"] = "";
	$placeHoldersservicios["Spanish"]["Cantidad"] = "";
	$fieldLabelsservicios["Spanish"]["Tipo_Probeta"] = "Tipo Probeta";
	$fieldToolTipsservicios["Spanish"]["Tipo_Probeta"] = "";
	$placeHoldersservicios["Spanish"]["Tipo_Probeta"] = "";
	$fieldLabelsservicios["Spanish"]["fk_id_Laboratorio"] = "Fk Id Laboratorio";
	$fieldToolTipsservicios["Spanish"]["fk_id_Laboratorio"] = "";
	$placeHoldersservicios["Spanish"]["fk_id_Laboratorio"] = "";
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
$tdataservicios[".afterAddAction"] = 1;
$tdataservicios[".closePopupAfterAdd"] = 1;
$tdataservicios[".afterAddActionDetTable"] = "";
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

$tdataservicios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataservicios[".isUseTimeForSearch"] = false;


$tdataservicios[".badgeColor"] = "b22222";


$tdataservicios[".allSearchFields"] = array();
$tdataservicios[".filterFields"] = array();
$tdataservicios[".requiredSearchFields"] = array();

$tdataservicios[".googleLikeFields"] = array();
$tdataservicios[".googleLikeFields"][] = "id_Servicio";
$tdataservicios[".googleLikeFields"][] = "Nombre_Servicio";
$tdataservicios[".googleLikeFields"][] = "Normatividad";
$tdataservicios[".googleLikeFields"][] = "Descripcion";
$tdataservicios[".googleLikeFields"][] = "Valor_Servicio";
$tdataservicios[".googleLikeFields"][] = "TipoServicio";
$tdataservicios[".googleLikeFields"][] = "Instrumento";
$tdataservicios[".googleLikeFields"][] = "Fabricante";
$tdataservicios[".googleLikeFields"][] = "Modelo";
$tdataservicios[".googleLikeFields"][] = "Serie";
$tdataservicios[".googleLikeFields"][] = "Cog_Interno";
$tdataservicios[".googleLikeFields"][] = "IRPC";
$tdataservicios[".googleLikeFields"][] = "Nom_Material";
$tdataservicios[".googleLikeFields"][] = "Tipo_Material";
$tdataservicios[".googleLikeFields"][] = "Report_Results";
$tdataservicios[".googleLikeFields"][] = "Cantidad";
$tdataservicios[".googleLikeFields"][] = "Tipo_Probeta";
$tdataservicios[".googleLikeFields"][] = "fk_id_Laboratorio";



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


$tdataservicios[".sqlHead"] = "SELECT id_Servicio,  	Nombre_Servicio,  	Normatividad,  	Descripcion,  	Valor_Servicio,  	TipoServicio,  	Instrumento,  	Fabricante,  	Modelo,  	Serie,  	Cog_Interno,  	IRPC,  	Nom_Material,  	Tipo_Material,  	Report_Results,  	Cantidad,  	Tipo_Probeta,  	fk_id_Laboratorio";
$tdataservicios[".sqlFrom"] = "FROM servicios";
$tdataservicios[".sqlWhereExpr"] = "";
$tdataservicios[".sqlTail"] = "";










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
//	Nombre_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
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
//	Normatividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Normatividad";
	$fdata["GoodName"] = "Normatividad";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Normatividad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Normatividad";

		$fdata["sourceSingle"] = "Normatividad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Normatividad";

	
	
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


	$tdataservicios["Normatividad"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Normatividad";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Descripcion");
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


	$tdataservicios["Descripcion"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Descripcion";
//	Valor_Servicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valor_Servicio";
	$fdata["GoodName"] = "Valor_Servicio";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Valor_Servicio");
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


	$tdataservicios["Valor_Servicio"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Valor_Servicio";
//	TipoServicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TipoServicio";
	$fdata["GoodName"] = "TipoServicio";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","TipoServicio");
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


	$tdataservicios["TipoServicio"] = $fdata;
		$tdataservicios[".searchableFields"][] = "TipoServicio";
//	Instrumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Instrumento";
	$fdata["GoodName"] = "Instrumento";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Instrumento");
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


	$tdataservicios["Instrumento"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Instrumento";
//	Fabricante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Fabricante";
	$fdata["GoodName"] = "Fabricante";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Fabricante");
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


	$tdataservicios["Fabricante"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Fabricante";
//	Modelo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Modelo";
	$fdata["GoodName"] = "Modelo";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Modelo");
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


	$tdataservicios["Modelo"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Modelo";
//	Serie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Serie";
	$fdata["GoodName"] = "Serie";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Serie");
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


	$tdataservicios["Serie"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Serie";
//	Cog_Interno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Cog_Interno";
	$fdata["GoodName"] = "Cog_Interno";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Cog_Interno");
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


	$tdataservicios["Cog_Interno"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Cog_Interno";
//	IRPC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "IRPC";
	$fdata["GoodName"] = "IRPC";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","IRPC");
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


	$tdataservicios["IRPC"] = $fdata;
		$tdataservicios[".searchableFields"][] = "IRPC";
//	Nom_Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Nom_Material";
	$fdata["GoodName"] = "Nom_Material";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Nom_Material");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nom_Material";

		$fdata["sourceSingle"] = "Nom_Material";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nom_Material";

	
	
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


	$tdataservicios["Nom_Material"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Nom_Material";
//	Tipo_Material
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Tipo_Material";
	$fdata["GoodName"] = "Tipo_Material";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Tipo_Material");
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


	$tdataservicios["Tipo_Material"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Tipo_Material";
//	Report_Results
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Report_Results";
	$fdata["GoodName"] = "Report_Results";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Report_Results");
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


	$tdataservicios["Report_Results"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Report_Results";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Cantidad");
	$fdata["FieldType"] = 201;


	
	
			

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


	$tdataservicios["Cantidad"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Cantidad";
//	Tipo_Probeta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Tipo_Probeta";
	$fdata["GoodName"] = "Tipo_Probeta";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","Tipo_Probeta");
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


	$tdataservicios["Tipo_Probeta"] = $fdata;
		$tdataservicios[".searchableFields"][] = "Tipo_Probeta";
//	fk_id_Laboratorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "fk_id_Laboratorio";
	$fdata["GoodName"] = "fk_id_Laboratorio";
	$fdata["ownerTable"] = "servicios";
	$fdata["Label"] = GetFieldLabel("servicios","fk_id_Laboratorio");
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


	$tdataservicios["fk_id_Laboratorio"] = $fdata;
		$tdataservicios[".searchableFields"][] = "fk_id_Laboratorio";


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
//	solicitudes
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="solicitudes";
		$detailsParam["dOriginalTable"] = "solicitudes";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "solicitudes";
	$detailsParam["dCaptionTable"] = GetTableCaption("solicitudes");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["servicios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["servicios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["masterKeys"][]="id_Servicio";

				$detailsTablesData["servicios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["servicios"][$dIndex]["detailKeys"][]="fk_id_Servicio";
//	detalles_cotizacion
	
	

		$dIndex = 1;
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
	
	

		$dIndex = 2;
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
	$masterTablesData["servicios"][0]["detailKeys"][]="fk_id_Laboratorio";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_servicios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Servicio,  	Nombre_Servicio,  	Normatividad,  	Descripcion,  	Valor_Servicio,  	TipoServicio,  	Instrumento,  	Fabricante,  	Modelo,  	Serie,  	Cog_Interno,  	IRPC,  	Nom_Material,  	Tipo_Material,  	Report_Results,  	Cantidad,  	Tipo_Probeta,  	fk_id_Laboratorio";
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
	"m_strName" => "Nombre_Servicio",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto8["m_sql"] = "Nombre_Servicio";
$proto8["m_srcTableName"] = "servicios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Normatividad",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto10["m_sql"] = "Normatividad";
$proto10["m_srcTableName"] = "servicios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto12["m_sql"] = "Descripcion";
$proto12["m_srcTableName"] = "servicios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_Servicio",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto14["m_sql"] = "Valor_Servicio";
$proto14["m_srcTableName"] = "servicios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoServicio",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto16["m_sql"] = "TipoServicio";
$proto16["m_srcTableName"] = "servicios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Instrumento",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto18["m_sql"] = "Instrumento";
$proto18["m_srcTableName"] = "servicios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Fabricante",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto20["m_sql"] = "Fabricante";
$proto20["m_srcTableName"] = "servicios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Modelo",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto22["m_sql"] = "Modelo";
$proto22["m_srcTableName"] = "servicios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Serie",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto24["m_sql"] = "Serie";
$proto24["m_srcTableName"] = "servicios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Cog_Interno",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto26["m_sql"] = "Cog_Interno";
$proto26["m_srcTableName"] = "servicios";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "IRPC",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto28["m_sql"] = "IRPC";
$proto28["m_srcTableName"] = "servicios";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Nom_Material",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto30["m_sql"] = "Nom_Material";
$proto30["m_srcTableName"] = "servicios";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo_Material",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto32["m_sql"] = "Tipo_Material";
$proto32["m_srcTableName"] = "servicios";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Report_Results",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto34["m_sql"] = "Report_Results";
$proto34["m_srcTableName"] = "servicios";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto36["m_sql"] = "Cantidad";
$proto36["m_srcTableName"] = "servicios";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo_Probeta",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto38["m_sql"] = "Tipo_Probeta";
$proto38["m_srcTableName"] = "servicios";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Laboratorio",
	"m_strTable" => "servicios",
	"m_srcTableName" => "servicios"
));

$proto40["m_sql"] = "fk_id_Laboratorio";
$proto40["m_srcTableName"] = "servicios";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "servicios";
$proto43["m_srcTableName"] = "servicios";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id_Servicio";
$proto43["m_columns"][] = "Nombre_Servicio";
$proto43["m_columns"][] = "Normatividad";
$proto43["m_columns"][] = "Descripcion";
$proto43["m_columns"][] = "Valor_Servicio";
$proto43["m_columns"][] = "TipoServicio";
$proto43["m_columns"][] = "Instrumento";
$proto43["m_columns"][] = "Fabricante";
$proto43["m_columns"][] = "Modelo";
$proto43["m_columns"][] = "Serie";
$proto43["m_columns"][] = "Cog_Interno";
$proto43["m_columns"][] = "IRPC";
$proto43["m_columns"][] = "Nom_Material";
$proto43["m_columns"][] = "Tipo_Material";
$proto43["m_columns"][] = "Report_Results";
$proto43["m_columns"][] = "Cantidad";
$proto43["m_columns"][] = "Tipo_Probeta";
$proto43["m_columns"][] = "fk_id_Laboratorio";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "servicios";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "servicios";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

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



$tdataservicios[".hasEvents"] = false;

?>