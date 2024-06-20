<?php
$tdatalaboratorio = array();
$tdatalaboratorio[".searchableFields"] = array();
$tdatalaboratorio[".ShortName"] = "laboratorio";
$tdatalaboratorio[".OwnerID"] = "";
$tdatalaboratorio[".OriginalTable"] = "laboratorio";


$tdatalaboratorio[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalaboratorio[".originalPagesByType"] = $tdatalaboratorio[".pagesByType"];
$tdatalaboratorio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalaboratorio[".originalPages"] = $tdatalaboratorio[".pages"];
$tdatalaboratorio[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalaboratorio[".originalDefaultPages"] = $tdatalaboratorio[".defaultPages"];

//	field labels
$fieldLabelslaboratorio = array();
$fieldToolTipslaboratorio = array();
$pageTitleslaboratorio = array();
$placeHolderslaboratorio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslaboratorio["Spanish"] = array();
	$fieldToolTipslaboratorio["Spanish"] = array();
	$placeHolderslaboratorio["Spanish"] = array();
	$pageTitleslaboratorio["Spanish"] = array();
	$fieldLabelslaboratorio["Spanish"]["id_Laboratorio"] = "Id Laboratorio";
	$fieldToolTipslaboratorio["Spanish"]["id_Laboratorio"] = "";
	$placeHolderslaboratorio["Spanish"]["id_Laboratorio"] = "";
	$fieldLabelslaboratorio["Spanish"]["Nombre_Laboratorio"] = "Nombre Laboratorio";
	$fieldToolTipslaboratorio["Spanish"]["Nombre_Laboratorio"] = "";
	$placeHolderslaboratorio["Spanish"]["Nombre_Laboratorio"] = "";
	$fieldLabelslaboratorio["Spanish"]["Tipologia"] = "Tipologia";
	$fieldToolTipslaboratorio["Spanish"]["Tipologia"] = "";
	$placeHolderslaboratorio["Spanish"]["Tipologia"] = "";
	$fieldLabelslaboratorio["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipslaboratorio["Spanish"]["Descripcion"] = "";
	$placeHolderslaboratorio["Spanish"]["Descripcion"] = "";
	$fieldLabelslaboratorio["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipslaboratorio["Spanish"]["Direccion"] = "";
	$placeHolderslaboratorio["Spanish"]["Direccion"] = "";
	$fieldLabelslaboratorio["Spanish"]["Mision"] = "Mision";
	$fieldToolTipslaboratorio["Spanish"]["Mision"] = "";
	$placeHolderslaboratorio["Spanish"]["Mision"] = "";
	$fieldLabelslaboratorio["Spanish"]["Vision"] = "Vision";
	$fieldToolTipslaboratorio["Spanish"]["Vision"] = "";
	$placeHolderslaboratorio["Spanish"]["Vision"] = "";
	$fieldLabelslaboratorio["Spanish"]["fk_Codigo_Centro"] = "Fk Codigo Centro";
	$fieldToolTipslaboratorio["Spanish"]["fk_Codigo_Centro"] = "";
	$placeHolderslaboratorio["Spanish"]["fk_Codigo_Centro"] = "";
	$fieldLabelslaboratorio["Spanish"]["fk_id_User"] = "Fk Id User";
	$fieldToolTipslaboratorio["Spanish"]["fk_id_User"] = "";
	$placeHolderslaboratorio["Spanish"]["fk_id_User"] = "";
	if (count($fieldToolTipslaboratorio["Spanish"]))
		$tdatalaboratorio[".isUseToolTips"] = true;
}


	$tdatalaboratorio[".NCSearch"] = true;



$tdatalaboratorio[".shortTableName"] = "laboratorio";
$tdatalaboratorio[".nSecOptions"] = 0;

$tdatalaboratorio[".mainTableOwnerID"] = "";
$tdatalaboratorio[".entityType"] = 0;
$tdatalaboratorio[".connId"] = "project_pst_sena_at_localhost";


$tdatalaboratorio[".strOriginalTableName"] = "laboratorio";

	



$tdatalaboratorio[".showAddInPopup"] = false;

$tdatalaboratorio[".showEditInPopup"] = false;

$tdatalaboratorio[".showViewInPopup"] = false;

$tdatalaboratorio[".listAjax"] = false;
//	temporary
//$tdatalaboratorio[".listAjax"] = false;

	$tdatalaboratorio[".audit"] = false;

	$tdatalaboratorio[".locking"] = false;


$pages = $tdatalaboratorio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalaboratorio[".edit"] = true;
	$tdatalaboratorio[".afterEditAction"] = 1;
	$tdatalaboratorio[".closePopupAfterEdit"] = 1;
	$tdatalaboratorio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalaboratorio[".add"] = true;
$tdatalaboratorio[".afterAddAction"] = 1;
$tdatalaboratorio[".closePopupAfterAdd"] = 1;
$tdatalaboratorio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalaboratorio[".list"] = true;
}



$tdatalaboratorio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalaboratorio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalaboratorio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalaboratorio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalaboratorio[".printFriendly"] = true;
}



$tdatalaboratorio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalaboratorio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalaboratorio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalaboratorio[".isUseAjaxSuggest"] = true;





$tdatalaboratorio[".ajaxCodeSnippetAdded"] = false;

$tdatalaboratorio[".buttonsAdded"] = false;

$tdatalaboratorio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalaboratorio[".isUseTimeForSearch"] = false;


$tdatalaboratorio[".badgeColor"] = "cd853f";


$tdatalaboratorio[".allSearchFields"] = array();
$tdatalaboratorio[".filterFields"] = array();
$tdatalaboratorio[".requiredSearchFields"] = array();

$tdatalaboratorio[".googleLikeFields"] = array();
$tdatalaboratorio[".googleLikeFields"][] = "id_Laboratorio";
$tdatalaboratorio[".googleLikeFields"][] = "Nombre_Laboratorio";
$tdatalaboratorio[".googleLikeFields"][] = "Tipologia";
$tdatalaboratorio[".googleLikeFields"][] = "Descripcion";
$tdatalaboratorio[".googleLikeFields"][] = "Direccion";
$tdatalaboratorio[".googleLikeFields"][] = "Mision";
$tdatalaboratorio[".googleLikeFields"][] = "Vision";
$tdatalaboratorio[".googleLikeFields"][] = "fk_Codigo_Centro";
$tdatalaboratorio[".googleLikeFields"][] = "fk_id_User";



$tdatalaboratorio[".tableType"] = "list";

$tdatalaboratorio[".printerPageOrientation"] = 0;
$tdatalaboratorio[".nPrinterPageScale"] = 100;

$tdatalaboratorio[".nPrinterSplitRecords"] = 40;

$tdatalaboratorio[".geocodingEnabled"] = false;










$tdatalaboratorio[".pageSize"] = 20;

$tdatalaboratorio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalaboratorio[".strOrderBy"] = $tstrOrderBy;

$tdatalaboratorio[".orderindexes"] = array();


$tdatalaboratorio[".sqlHead"] = "SELECT id_Laboratorio,  	Nombre_Laboratorio,  	Tipologia,  	Descripcion,  	Direccion,  	Mision,  	Vision,  	fk_Codigo_Centro,  	fk_id_User";
$tdatalaboratorio[".sqlFrom"] = "FROM laboratorio";
$tdatalaboratorio[".sqlWhereExpr"] = "";
$tdatalaboratorio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalaboratorio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalaboratorio[".arrGroupsPerPage"] = $arrGPP;

$tdatalaboratorio[".highlightSearchResults"] = true;

$tableKeyslaboratorio = array();
$tableKeyslaboratorio[] = "id_Laboratorio";
$tdatalaboratorio[".Keys"] = $tableKeyslaboratorio;


$tdatalaboratorio[".hideMobileList"] = array();




//	id_Laboratorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Laboratorio";
	$fdata["GoodName"] = "id_Laboratorio";
	$fdata["ownerTable"] = "laboratorio";
	$fdata["Label"] = GetFieldLabel("laboratorio","id_Laboratorio");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Laboratorio";

		$fdata["sourceSingle"] = "id_Laboratorio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Laboratorio";

	
	
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


	$tdatalaboratorio["id_Laboratorio"] = $fdata;
		$tdatalaboratorio[".searchableFields"][] = "id_Laboratorio";
//	Nombre_Laboratorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre_Laboratorio";
	$fdata["GoodName"] = "Nombre_Laboratorio";
	$fdata["ownerTable"] = "laboratorio";
	$fdata["Label"] = GetFieldLabel("laboratorio","Nombre_Laboratorio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre_Laboratorio";

		$fdata["sourceSingle"] = "Nombre_Laboratorio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre_Laboratorio";

	
	
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


	$tdatalaboratorio["Nombre_Laboratorio"] = $fdata;
		$tdatalaboratorio[".searchableFields"][] = "Nombre_Laboratorio";
//	Tipologia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Tipologia";
	$fdata["GoodName"] = "Tipologia";
	$fdata["ownerTable"] = "laboratorio";
	$fdata["Label"] = GetFieldLabel("laboratorio","Tipologia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipologia";

		$fdata["sourceSingle"] = "Tipologia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipologia";

	
	
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


	$tdatalaboratorio["Tipologia"] = $fdata;
		$tdatalaboratorio[".searchableFields"][] = "Tipologia";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "laboratorio";
	$fdata["Label"] = GetFieldLabel("laboratorio","Descripcion");
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


	$tdatalaboratorio["Descripcion"] = $fdata;
		$tdatalaboratorio[".searchableFields"][] = "Descripcion";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "laboratorio";
	$fdata["Label"] = GetFieldLabel("laboratorio","Direccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direccion";

		$fdata["sourceSingle"] = "Direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Direccion";

	
	
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


	$tdatalaboratorio["Direccion"] = $fdata;
		$tdatalaboratorio[".searchableFields"][] = "Direccion";
//	Mision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Mision";
	$fdata["GoodName"] = "Mision";
	$fdata["ownerTable"] = "laboratorio";
	$fdata["Label"] = GetFieldLabel("laboratorio","Mision");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Mision";

		$fdata["sourceSingle"] = "Mision";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mision";

	
	
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


	$tdatalaboratorio["Mision"] = $fdata;
		$tdatalaboratorio[".searchableFields"][] = "Mision";
//	Vision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Vision";
	$fdata["GoodName"] = "Vision";
	$fdata["ownerTable"] = "laboratorio";
	$fdata["Label"] = GetFieldLabel("laboratorio","Vision");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Vision";

		$fdata["sourceSingle"] = "Vision";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Vision";

	
	
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


	$tdatalaboratorio["Vision"] = $fdata;
		$tdatalaboratorio[".searchableFields"][] = "Vision";
//	fk_Codigo_Centro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fk_Codigo_Centro";
	$fdata["GoodName"] = "fk_Codigo_Centro";
	$fdata["ownerTable"] = "laboratorio";
	$fdata["Label"] = GetFieldLabel("laboratorio","fk_Codigo_Centro");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_Codigo_Centro";

		$fdata["sourceSingle"] = "fk_Codigo_Centro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_Codigo_Centro";

	
	
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


	$tdatalaboratorio["fk_Codigo_Centro"] = $fdata;
		$tdatalaboratorio[".searchableFields"][] = "fk_Codigo_Centro";
//	fk_id_User
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fk_id_User";
	$fdata["GoodName"] = "fk_id_User";
	$fdata["ownerTable"] = "laboratorio";
	$fdata["Label"] = GetFieldLabel("laboratorio","fk_id_User");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "fk_id_User";

		$fdata["sourceSingle"] = "fk_id_User";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fk_id_User";

	
	
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


	$tdatalaboratorio["fk_id_User"] = $fdata;
		$tdatalaboratorio[".searchableFields"][] = "fk_id_User";


$tables_data["laboratorio"]=&$tdatalaboratorio;
$field_labels["laboratorio"] = &$fieldLabelslaboratorio;
$fieldToolTips["laboratorio"] = &$fieldToolTipslaboratorio;
$placeHolders["laboratorio"] = &$placeHolderslaboratorio;
$page_titles["laboratorio"] = &$pageTitleslaboratorio;


changeTextControlsToDate( "laboratorio" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["laboratorio"] = array();
//	servicios
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="servicios";
		$detailsParam["dOriginalTable"] = "servicios";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "servicios";
	$detailsParam["dCaptionTable"] = GetTableCaption("servicios");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["laboratorio"][$dIndex] = $detailsParam;

	
		$detailsTablesData["laboratorio"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["laboratorio"][$dIndex]["masterKeys"][]="id_Laboratorio";

				$detailsTablesData["laboratorio"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["laboratorio"][$dIndex]["detailKeys"][]="fk_id_Laboratorio";
//	noticias
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="noticias";
		$detailsParam["dOriginalTable"] = "noticias";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "noticias";
	$detailsParam["dCaptionTable"] = GetTableCaption("noticias");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["laboratorio"][$dIndex] = $detailsParam;

	
		$detailsTablesData["laboratorio"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["laboratorio"][$dIndex]["masterKeys"][]="id_Laboratorio";

				$detailsTablesData["laboratorio"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["laboratorio"][$dIndex]["detailKeys"][]="fk_id_Laboratorio";
//	casos_exito
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="casos_exito";
		$detailsParam["dOriginalTable"] = "casos_exito";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "casos_exito";
	$detailsParam["dCaptionTable"] = GetTableCaption("casos_exito");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["laboratorio"][$dIndex] = $detailsParam;

	
		$detailsTablesData["laboratorio"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["laboratorio"][$dIndex]["masterKeys"][]="id_Laboratorio";

				$detailsTablesData["laboratorio"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["laboratorio"][$dIndex]["detailKeys"][]="fk_id_Laboratorio";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["laboratorio"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="centro";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="centro";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "centro";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["laboratorio"][0] = $masterParams;
				$masterTablesData["laboratorio"][0]["masterKeys"] = array();
	$masterTablesData["laboratorio"][0]["masterKeys"][]="Codigo_Centro";
				$masterTablesData["laboratorio"][0]["detailKeys"] = array();
	$masterTablesData["laboratorio"][0]["detailKeys"][]="fk_Codigo_Centro";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="usuario";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="usuario";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuario";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["laboratorio"][1] = $masterParams;
				$masterTablesData["laboratorio"][1]["masterKeys"] = array();
	$masterTablesData["laboratorio"][1]["masterKeys"][]="id_User";
				$masterTablesData["laboratorio"][1]["detailKeys"] = array();
	$masterTablesData["laboratorio"][1]["detailKeys"][]="fk_id_User";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_laboratorio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Laboratorio,  	Nombre_Laboratorio,  	Tipologia,  	Descripcion,  	Direccion,  	Mision,  	Vision,  	fk_Codigo_Centro,  	fk_id_User";
$proto0["m_strFrom"] = "FROM laboratorio";
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
	"m_strName" => "id_Laboratorio",
	"m_strTable" => "laboratorio",
	"m_srcTableName" => "laboratorio"
));

$proto6["m_sql"] = "id_Laboratorio";
$proto6["m_srcTableName"] = "laboratorio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_Laboratorio",
	"m_strTable" => "laboratorio",
	"m_srcTableName" => "laboratorio"
));

$proto8["m_sql"] = "Nombre_Laboratorio";
$proto8["m_srcTableName"] = "laboratorio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipologia",
	"m_strTable" => "laboratorio",
	"m_srcTableName" => "laboratorio"
));

$proto10["m_sql"] = "Tipologia";
$proto10["m_srcTableName"] = "laboratorio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "laboratorio",
	"m_srcTableName" => "laboratorio"
));

$proto12["m_sql"] = "Descripcion";
$proto12["m_srcTableName"] = "laboratorio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "laboratorio",
	"m_srcTableName" => "laboratorio"
));

$proto14["m_sql"] = "Direccion";
$proto14["m_srcTableName"] = "laboratorio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Mision",
	"m_strTable" => "laboratorio",
	"m_srcTableName" => "laboratorio"
));

$proto16["m_sql"] = "Mision";
$proto16["m_srcTableName"] = "laboratorio";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Vision",
	"m_strTable" => "laboratorio",
	"m_srcTableName" => "laboratorio"
));

$proto18["m_sql"] = "Vision";
$proto18["m_srcTableName"] = "laboratorio";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_Codigo_Centro",
	"m_strTable" => "laboratorio",
	"m_srcTableName" => "laboratorio"
));

$proto20["m_sql"] = "fk_Codigo_Centro";
$proto20["m_srcTableName"] = "laboratorio";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_User",
	"m_strTable" => "laboratorio",
	"m_srcTableName" => "laboratorio"
));

$proto22["m_sql"] = "fk_id_User";
$proto22["m_srcTableName"] = "laboratorio";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "laboratorio";
$proto25["m_srcTableName"] = "laboratorio";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_Laboratorio";
$proto25["m_columns"][] = "Nombre_Laboratorio";
$proto25["m_columns"][] = "Tipologia";
$proto25["m_columns"][] = "Descripcion";
$proto25["m_columns"][] = "Direccion";
$proto25["m_columns"][] = "Mision";
$proto25["m_columns"][] = "Vision";
$proto25["m_columns"][] = "fk_Codigo_Centro";
$proto25["m_columns"][] = "fk_id_User";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "laboratorio";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "laboratorio";
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
$proto0["m_srcTableName"]="laboratorio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_laboratorio = createSqlQuery_laboratorio();


	
		;

									

$tdatalaboratorio[".sqlquery"] = $queryData_laboratorio;



$tdatalaboratorio[".hasEvents"] = false;

?>