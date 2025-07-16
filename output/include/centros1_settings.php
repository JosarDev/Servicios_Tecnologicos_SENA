<?php
$tdatacentros1 = array();
$tdatacentros1[".searchableFields"] = array();
$tdatacentros1[".ShortName"] = "centros1";
$tdatacentros1[".OwnerID"] = "";
$tdatacentros1[".OriginalTable"] = "centros";


$tdatacentros1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacentros1[".originalPagesByType"] = $tdatacentros1[".pagesByType"];
$tdatacentros1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacentros1[".originalPages"] = $tdatacentros1[".pages"];
$tdatacentros1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacentros1[".originalDefaultPages"] = $tdatacentros1[".defaultPages"];

//	field labels
$fieldLabelscentros1 = array();
$fieldToolTipscentros1 = array();
$pageTitlescentros1 = array();
$placeHolderscentros1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscentros1["Spanish"] = array();
	$fieldToolTipscentros1["Spanish"] = array();
	$placeHolderscentros1["Spanish"] = array();
	$pageTitlescentros1["Spanish"] = array();
	$fieldLabelscentros1["Spanish"]["id_centro"] = "Id Centro";
	$fieldToolTipscentros1["Spanish"]["id_centro"] = "";
	$placeHolderscentros1["Spanish"]["id_centro"] = "";
	$fieldLabelscentros1["Spanish"]["nom_centro"] = "Nom Centro";
	$fieldToolTipscentros1["Spanish"]["nom_centro"] = "";
	$placeHolderscentros1["Spanish"]["nom_centro"] = "";
	$fieldLabelscentros1["Spanish"]["id_municipio"] = "Id Municipio";
	$fieldToolTipscentros1["Spanish"]["id_municipio"] = "";
	$placeHolderscentros1["Spanish"]["id_municipio"] = "";
	$fieldLabelscentros1["Spanish"]["barrio_centro"] = "Barrio Centro";
	$fieldToolTipscentros1["Spanish"]["barrio_centro"] = "";
	$placeHolderscentros1["Spanish"]["barrio_centro"] = "";
	$fieldLabelscentros1["Spanish"]["direc_centro"] = "Direc Centro";
	$fieldToolTipscentros1["Spanish"]["direc_centro"] = "";
	$placeHolderscentros1["Spanish"]["direc_centro"] = "";
	$fieldLabelscentros1["Spanish"]["img_centro"] = "Img Centro";
	$fieldToolTipscentros1["Spanish"]["img_centro"] = "";
	$placeHolderscentros1["Spanish"]["img_centro"] = "";
	$fieldLabelscentros1["Spanish"]["fecha_reg_centro"] = "Fecha Reg Centro";
	$fieldToolTipscentros1["Spanish"]["fecha_reg_centro"] = "";
	$placeHolderscentros1["Spanish"]["fecha_reg_centro"] = "";
	$fieldLabelscentros1["Spanish"]["extension"] = "Extension";
	$fieldToolTipscentros1["Spanish"]["extension"] = "";
	$placeHolderscentros1["Spanish"]["extension"] = "";
	$fieldLabelscentros1["Spanish"]["id_regional"] = "Id Regional";
	$fieldToolTipscentros1["Spanish"]["id_regional"] = "";
	$placeHolderscentros1["Spanish"]["id_regional"] = "";
	$fieldLabelscentros1["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipscentros1["Spanish"]["departamento"] = "";
	$placeHolderscentros1["Spanish"]["departamento"] = "";
	if (count($fieldToolTipscentros1["Spanish"]))
		$tdatacentros1[".isUseToolTips"] = true;
}


	$tdatacentros1[".NCSearch"] = true;



$tdatacentros1[".shortTableName"] = "centros1";
$tdatacentros1[".nSecOptions"] = 0;

$tdatacentros1[".mainTableOwnerID"] = "";
$tdatacentros1[".entityType"] = 1;
$tdatacentros1[".connId"] = "project_pst_sena_at_localhost";


$tdatacentros1[".strOriginalTableName"] = "centros";

	



$tdatacentros1[".showAddInPopup"] = false;

$tdatacentros1[".showEditInPopup"] = false;

$tdatacentros1[".showViewInPopup"] = false;

$tdatacentros1[".listAjax"] = false;
//	temporary
//$tdatacentros1[".listAjax"] = false;

	$tdatacentros1[".audit"] = false;

	$tdatacentros1[".locking"] = false;


$pages = $tdatacentros1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacentros1[".edit"] = true;
	$tdatacentros1[".afterEditAction"] = 1;
	$tdatacentros1[".closePopupAfterEdit"] = 1;
	$tdatacentros1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacentros1[".add"] = true;
$tdatacentros1[".afterAddAction"] = 1;
$tdatacentros1[".closePopupAfterAdd"] = 1;
$tdatacentros1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacentros1[".list"] = true;
}



$tdatacentros1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacentros1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacentros1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacentros1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacentros1[".printFriendly"] = true;
}



$tdatacentros1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacentros1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacentros1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacentros1[".isUseAjaxSuggest"] = true;



			

$tdatacentros1[".ajaxCodeSnippetAdded"] = false;

$tdatacentros1[".buttonsAdded"] = false;

$tdatacentros1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacentros1[".isUseTimeForSearch"] = false;


$tdatacentros1[".badgeColor"] = "6B8E23";


$tdatacentros1[".allSearchFields"] = array();
$tdatacentros1[".filterFields"] = array();
$tdatacentros1[".requiredSearchFields"] = array();

$tdatacentros1[".googleLikeFields"] = array();
$tdatacentros1[".googleLikeFields"][] = "id_centro";
$tdatacentros1[".googleLikeFields"][] = "nom_centro";
$tdatacentros1[".googleLikeFields"][] = "id_municipio";
$tdatacentros1[".googleLikeFields"][] = "barrio_centro";
$tdatacentros1[".googleLikeFields"][] = "direc_centro";
$tdatacentros1[".googleLikeFields"][] = "fecha_reg_centro";
$tdatacentros1[".googleLikeFields"][] = "extension";
$tdatacentros1[".googleLikeFields"][] = "id_regional";
$tdatacentros1[".googleLikeFields"][] = "departamento";



$tdatacentros1[".tableType"] = "list";

$tdatacentros1[".printerPageOrientation"] = 0;
$tdatacentros1[".nPrinterPageScale"] = 100;

$tdatacentros1[".nPrinterSplitRecords"] = 40;

$tdatacentros1[".geocodingEnabled"] = false;










$tdatacentros1[".pageSize"] = 20;

$tdatacentros1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacentros1[".strOrderBy"] = $tstrOrderBy;

$tdatacentros1[".orderindexes"] = array();


$tdatacentros1[".sqlHead"] = "SELECT id_centro,  	nom_centro,  	id_municipio,  	barrio_centro,  	direc_centro,  	img_centro,  	fecha_reg_centro,  	extension,  	id_regional,  	departamento";
$tdatacentros1[".sqlFrom"] = "FROM centros";
$tdatacentros1[".sqlWhereExpr"] = "";
$tdatacentros1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacentros1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacentros1[".arrGroupsPerPage"] = $arrGPP;

$tdatacentros1[".highlightSearchResults"] = true;

$tableKeyscentros1 = array();
$tableKeyscentros1[] = "id_centro";
$tdatacentros1[".Keys"] = $tableKeyscentros1;


$tdatacentros1[".hideMobileList"] = array();




//	id_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_centro";
	$fdata["GoodName"] = "id_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros1","id_centro");
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


	$tdatacentros1["id_centro"] = $fdata;
		$tdatacentros1[".searchableFields"][] = "id_centro";
//	nom_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nom_centro";
	$fdata["GoodName"] = "nom_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros1","nom_centro");
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


	$tdatacentros1["nom_centro"] = $fdata;
		$tdatacentros1[".searchableFields"][] = "nom_centro";
//	id_municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_municipio";
	$fdata["GoodName"] = "id_municipio";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros1","id_municipio");
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


	$tdatacentros1["id_municipio"] = $fdata;
		$tdatacentros1[".searchableFields"][] = "id_municipio";
//	barrio_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "barrio_centro";
	$fdata["GoodName"] = "barrio_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros1","barrio_centro");
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


	$tdatacentros1["barrio_centro"] = $fdata;
		$tdatacentros1[".searchableFields"][] = "barrio_centro";
//	direc_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "direc_centro";
	$fdata["GoodName"] = "direc_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros1","direc_centro");
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


	$tdatacentros1["direc_centro"] = $fdata;
		$tdatacentros1[".searchableFields"][] = "direc_centro";
//	img_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "img_centro";
	$fdata["GoodName"] = "img_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros1","img_centro");
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


	$tdatacentros1["img_centro"] = $fdata;
	//	fecha_reg_centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_reg_centro";
	$fdata["GoodName"] = "fecha_reg_centro";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros1","fecha_reg_centro");
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


	$tdatacentros1["fecha_reg_centro"] = $fdata;
		$tdatacentros1[".searchableFields"][] = "fecha_reg_centro";
//	extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "extension";
	$fdata["GoodName"] = "extension";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros1","extension");
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


	$tdatacentros1["extension"] = $fdata;
		$tdatacentros1[".searchableFields"][] = "extension";
//	id_regional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_regional";
	$fdata["GoodName"] = "id_regional";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros1","id_regional");
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


	$tdatacentros1["id_regional"] = $fdata;
		$tdatacentros1[".searchableFields"][] = "id_regional";
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "centros";
	$fdata["Label"] = GetFieldLabel("centros1","departamento");
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


	$tdatacentros1["departamento"] = $fdata;
		$tdatacentros1[".searchableFields"][] = "departamento";


$tables_data["centros1"]=&$tdatacentros1;
$field_labels["centros1"] = &$fieldLabelscentros1;
$fieldToolTips["centros1"] = &$fieldToolTipscentros1;
$placeHolders["centros1"] = &$placeHolderscentros1;
$page_titles["centros1"] = &$pageTitlescentros1;


changeTextControlsToDate( "centros1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["centros1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["centros1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_centros1()
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
	"m_srcTableName" => "centros1"
));

$proto6["m_sql"] = "id_centro";
$proto6["m_srcTableName"] = "centros1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_centro",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros1"
));

$proto8["m_sql"] = "nom_centro";
$proto8["m_srcTableName"] = "centros1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_municipio",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros1"
));

$proto10["m_sql"] = "id_municipio";
$proto10["m_srcTableName"] = "centros1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "barrio_centro",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros1"
));

$proto12["m_sql"] = "barrio_centro";
$proto12["m_srcTableName"] = "centros1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "direc_centro",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros1"
));

$proto14["m_sql"] = "direc_centro";
$proto14["m_srcTableName"] = "centros1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "img_centro",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros1"
));

$proto16["m_sql"] = "img_centro";
$proto16["m_srcTableName"] = "centros1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_reg_centro",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros1"
));

$proto18["m_sql"] = "fecha_reg_centro";
$proto18["m_srcTableName"] = "centros1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "extension",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros1"
));

$proto20["m_sql"] = "extension";
$proto20["m_srcTableName"] = "centros1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id_regional",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros1"
));

$proto22["m_sql"] = "id_regional";
$proto22["m_srcTableName"] = "centros1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "centros",
	"m_srcTableName" => "centros1"
));

$proto24["m_sql"] = "departamento";
$proto24["m_srcTableName"] = "centros1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "centros";
$proto27["m_srcTableName"] = "centros1";
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
$proto26["m_srcTableName"] = "centros1";
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
$proto0["m_srcTableName"]="centros1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_centros1 = createSqlQuery_centros1();


	
		;

										

$tdatacentros1[".sqlquery"] = $queryData_centros1;



$tdatacentros1[".hasEvents"] = false;

?>