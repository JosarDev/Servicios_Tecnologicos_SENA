<?php
$tdatacentros = array();
$tdatacentros[".searchableFields"] = array();
$tdatacentros[".ShortName"] = "centros";
$tdatacentros[".OwnerID"] = "";
$tdatacentros[".OriginalTable"] = "centros";


$tdatacentros[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacentros[".originalPagesByType"] = $tdatacentros[".pagesByType"];
$tdatacentros[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacentros[".originalPages"] = $tdatacentros[".pages"];
$tdatacentros[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacentros[".originalDefaultPages"] = $tdatacentros[".defaultPages"];

//	field labels
$fieldLabelscentros = array();
$fieldToolTipscentros = array();
$pageTitlescentros = array();
$placeHolderscentros = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscentros["Spanish"] = array();
	$fieldToolTipscentros["Spanish"] = array();
	$placeHolderscentros["Spanish"] = array();
	$pageTitlescentros["Spanish"] = array();
	$fieldLabelscentros["Spanish"]["id_centro"] = "Id Centro";
	$fieldToolTipscentros["Spanish"]["id_centro"] = "";
	$placeHolderscentros["Spanish"]["id_centro"] = "";
	$fieldLabelscentros["Spanish"]["nom_centro"] = "Nombre Centro";
	$fieldToolTipscentros["Spanish"]["nom_centro"] = "";
	$placeHolderscentros["Spanish"]["nom_centro"] = "";
	$fieldLabelscentros["Spanish"]["id_municipio"] = "Municipio";
	$fieldToolTipscentros["Spanish"]["id_municipio"] = "";
	$placeHolderscentros["Spanish"]["id_municipio"] = "";
	$fieldLabelscentros["Spanish"]["barrio_centro"] = "Barrio Centro";
	$fieldToolTipscentros["Spanish"]["barrio_centro"] = "";
	$placeHolderscentros["Spanish"]["barrio_centro"] = "";
	$fieldLabelscentros["Spanish"]["direc_centro"] = "Dirección Centro";
	$fieldToolTipscentros["Spanish"]["direc_centro"] = "";
	$placeHolderscentros["Spanish"]["direc_centro"] = "";
	$fieldLabelscentros["Spanish"]["img_centro"] = "Imagen de Centro";
	$fieldToolTipscentros["Spanish"]["img_centro"] = "";
	$placeHolderscentros["Spanish"]["img_centro"] = "";
	$fieldLabelscentros["Spanish"]["fecha_reg_centro"] = "Fecha de Registro";
	$fieldToolTipscentros["Spanish"]["fecha_reg_centro"] = "";
	$placeHolderscentros["Spanish"]["fecha_reg_centro"] = "";
	$fieldLabelscentros["Spanish"]["extension"] = "Extensión";
	$fieldToolTipscentros["Spanish"]["extension"] = "";
	$placeHolderscentros["Spanish"]["extension"] = "";
	$fieldLabelscentros["Spanish"]["id_regional"] = "Regional";
	$fieldToolTipscentros["Spanish"]["id_regional"] = "";
	$placeHolderscentros["Spanish"]["id_regional"] = "";
	$fieldLabelscentros["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipscentros["Spanish"]["departamento"] = "";
	$placeHolderscentros["Spanish"]["departamento"] = "";
	if (count($fieldToolTipscentros["Spanish"]))
		$tdatacentros[".isUseToolTips"] = true;
}


	$tdatacentros[".NCSearch"] = true;



$tdatacentros[".shortTableName"] = "centros";
$tdatacentros[".nSecOptions"] = 0;

$tdatacentros[".mainTableOwnerID"] = "";
$tdatacentros[".entityType"] = 0;
$tdatacentros[".connId"] = "project_pst_sena_at_localhost";


$tdatacentros[".strOriginalTableName"] = "centros";

	



$tdatacentros[".showAddInPopup"] = false;

$tdatacentros[".showEditInPopup"] = false;

$tdatacentros[".showViewInPopup"] = false;

$tdatacentros[".listAjax"] = false;
//	temporary
//$tdatacentros[".listAjax"] = false;

	$tdatacentros[".audit"] = false;

	$tdatacentros[".locking"] = false;


$pages = $tdatacentros[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacentros[".edit"] = true;
	$tdatacentros[".afterEditAction"] = 1;
	$tdatacentros[".closePopupAfterEdit"] = 1;
	$tdatacentros[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacentros[".add"] = true;
$tdatacentros[".afterAddAction"] = 1;
$tdatacentros[".closePopupAfterAdd"] = 1;
$tdatacentros[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacentros[".list"] = true;
}



$tdatacentros[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacentros[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacentros[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacentros[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacentros[".printFriendly"] = true;
}



$tdatacentros[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacentros[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacentros[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacentros[".isUseAjaxSuggest"] = true;



			

$tdatacentros[".ajaxCodeSnippetAdded"] = false;

$tdatacentros[".buttonsAdded"] = false;

$tdatacentros[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacentros[".isUseTimeForSearch"] = false;


$tdatacentros[".badgeColor"] = "E8926F";


$tdatacentros[".allSearchFields"] = array();
$tdatacentros[".filterFields"] = array();
$tdatacentros[".requiredSearchFields"] = array();

$tdatacentros[".googleLikeFields"] = array();
$tdatacentros[".googleLikeFields"][] = "id_centro";
$tdatacentros[".googleLikeFields"][] = "nom_centro";
$tdatacentros[".googleLikeFields"][] = "id_municipio";
$tdatacentros[".googleLikeFields"][] = "barrio_centro";
$tdatacentros[".googleLikeFields"][] = "direc_centro";
$tdatacentros[".googleLikeFields"][] = "fecha_reg_centro";
$tdatacentros[".googleLikeFields"][] = "extension";
$tdatacentros[".googleLikeFields"][] = "id_regional";
$tdatacentros[".googleLikeFields"][] = "departamento";



$tdatacentros[".tableType"] = "list";

$tdatacentros[".printerPageOrientation"] = 0;
$tdatacentros[".nPrinterPageScale"] = 100;

$tdatacentros[".nPrinterSplitRecords"] = 40;

$tdatacentros[".geocodingEnabled"] = false;










$tdatacentros[".pageSize"] = 20;

$tdatacentros[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacentros[".strOrderBy"] = $tstrOrderBy;

$tdatacentros[".orderindexes"] = array();


$tdatacentros[".sqlHead"] = "SELECT id_centro,  	nom_centro,  	id_municipio,  	barrio_centro,  	direc_centro,  	img_centro,  	fecha_reg_centro,  	extension,  	id_regional,  	departamento";
$tdatacentros[".sqlFrom"] = "FROM centros";
$tdatacentros[".sqlWhereExpr"] = "";
$tdatacentros[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacentros[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacentros[".arrGroupsPerPage"] = $arrGPP;

$tdatacentros[".highlightSearchResults"] = true;

$tableKeyscentros = array();
$tableKeyscentros[] = "id_centro";
$tdatacentros[".Keys"] = $tableKeyscentros;


$tdatacentros[".hideMobileList"] = array();




//	id_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_centro";
	$fdata["GoodName"] = "id_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros","id_centro");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatacentros["id_centro"] = $fdata;
		$tdatacentros[".searchableFields"][] = "id_centro";
//	nom_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom_centro";
	$fdata["GoodName"] = "nom_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros","nom_centro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_centro";

		$fdata["sourceSingle"] = "nom_centro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_centro";

	
	
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


	$tdatacentros["nom_centro"] = $fdata;
		$tdatacentros[".searchableFields"][] = "nom_centro";
//	id_municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_municipio";
	$fdata["GoodName"] = "id_municipio";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros","id_municipio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_municipio";

		$fdata["sourceSingle"] = "id_municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_municipio";

	
	
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


	$tdatacentros["id_municipio"] = $fdata;
		$tdatacentros[".searchableFields"][] = "id_municipio";
//	barrio_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "barrio_centro";
	$fdata["GoodName"] = "barrio_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros","barrio_centro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "barrio_centro";

		$fdata["sourceSingle"] = "barrio_centro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "barrio_centro";

	
	
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


	$tdatacentros["barrio_centro"] = $fdata;
		$tdatacentros[".searchableFields"][] = "barrio_centro";
//	direc_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "direc_centro";
	$fdata["GoodName"] = "direc_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros","direc_centro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "direc_centro";

		$fdata["sourceSingle"] = "direc_centro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direc_centro";

	
	
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


	$tdatacentros["direc_centro"] = $fdata;
		$tdatacentros[".searchableFields"][] = "direc_centro";
//	img_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "img_centro";
	$fdata["GoodName"] = "img_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros","img_centro");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "img_centro";

		$fdata["sourceSingle"] = "img_centro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "img_centro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatacentros["img_centro"] = $fdata;
	//	fecha_reg_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_reg_centro";
	$fdata["GoodName"] = "fecha_reg_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros","fecha_reg_centro");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_reg_centro";

		$fdata["sourceSingle"] = "fecha_reg_centro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_reg_centro";

	
	
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


	$tdatacentros["fecha_reg_centro"] = $fdata;
		$tdatacentros[".searchableFields"][] = "fecha_reg_centro";
//	extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "extension";
	$fdata["GoodName"] = "extension";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros","extension");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "extension";

		$fdata["sourceSingle"] = "extension";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "extension";

	
	
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


	$tdatacentros["extension"] = $fdata;
		$tdatacentros[".searchableFields"][] = "extension";
//	id_regional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_regional";
	$fdata["GoodName"] = "id_regional";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros","id_regional");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_regional";

		$fdata["sourceSingle"] = "id_regional";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_regional";

	
	
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
	$edata["LookupTable"] = "departamento";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_Departamento";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Departamento";

	

	
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


	$tdatacentros["id_regional"] = $fdata;
		$tdatacentros[".searchableFields"][] = "id_regional";
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros","departamento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "departamento";

		$fdata["sourceSingle"] = "departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamento";

	
	
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


	$tdatacentros["departamento"] = $fdata;
		$tdatacentros[".searchableFields"][] = "departamento";


$tables_data["centros"]=&$tdatacentros;
$field_labels["centros"] = &$fieldLabelscentros;
$fieldToolTips["centros"] = &$fieldToolTipscentros;
$placeHolders["centros"] = &$placeHolderscentros;
$page_titles["centros"] = &$pageTitlescentros;


changeTextControlsToDate( "centros" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["centros"] = array();
//	laboratorio
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="laboratorio";
		$detailsParam["dOriginalTable"] = "laboratorio";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "laboratorio";
	$detailsParam["dCaptionTable"] = GetTableCaption("laboratorio");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["centros"][$dIndex] = $detailsParam;

	
		$detailsTablesData["centros"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["centros"][$dIndex]["masterKeys"][]="id_centro";

				$detailsTablesData["centros"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["centros"][$dIndex]["detailKeys"][]="fk_id_centro";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["centros"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_centros()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_centro,  	nom_centro,  	id_municipio,  	barrio_centro,  	direc_centro,  	img_centro,  	fecha_reg_centro,  	extension,  	id_regional,  	departamento";
$proto0["m_strFrom"] = "FROM centros";
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
	"m_strName" => "id_centro",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros"
));

$proto6["m_sql"] = "id_centro";
$proto6["m_srcTableName"] = "centros";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_centro",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros"
));

$proto8["m_sql"] = "nom_centro";
$proto8["m_srcTableName"] = "centros";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_municipio",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros"
));

$proto10["m_sql"] = "id_municipio";
$proto10["m_srcTableName"] = "centros";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "barrio_centro",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros"
));

$proto12["m_sql"] = "barrio_centro";
$proto12["m_srcTableName"] = "centros";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "direc_centro",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros"
));

$proto14["m_sql"] = "direc_centro";
$proto14["m_srcTableName"] = "centros";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "img_centro",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros"
));

$proto16["m_sql"] = "img_centro";
$proto16["m_srcTableName"] = "centros";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_reg_centro",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros"
));

$proto18["m_sql"] = "fecha_reg_centro";
$proto18["m_srcTableName"] = "centros";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "extension",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros"
));

$proto20["m_sql"] = "extension";
$proto20["m_srcTableName"] = "centros";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id_regional",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros"
));

$proto22["m_sql"] = "id_regional";
$proto22["m_srcTableName"] = "centros";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros"
));

$proto24["m_sql"] = "departamento";
$proto24["m_srcTableName"] = "centros";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "centros";
$proto27["m_srcTableName"] = "centros";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id_centro";
$proto27["m_columns"][] = "nom_centro";
$proto27["m_columns"][] = "id_municipio";
$proto27["m_columns"][] = "barrio_centro";
$proto27["m_columns"][] = "direc_centro";
$proto27["m_columns"][] = "img_centro";
$proto27["m_columns"][] = "fecha_reg_centro";
$proto27["m_columns"][] = "extension";
$proto27["m_columns"][] = "id_regional";
$proto27["m_columns"][] = "departamento";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "centros";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "centros";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="centros";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_centros = createSqlQuery_centros();


	
		;

										

$tdatacentros[".sqlquery"] = $queryData_centros;



$tdatacentros[".hasEvents"] = false;

?>