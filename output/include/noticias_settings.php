<?php
$tdatanoticias = array();
$tdatanoticias[".searchableFields"] = array();
$tdatanoticias[".ShortName"] = "noticias";
$tdatanoticias[".OwnerID"] = "";
$tdatanoticias[".OriginalTable"] = "noticias";


$tdatanoticias[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanoticias[".originalPagesByType"] = $tdatanoticias[".pagesByType"];
$tdatanoticias[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanoticias[".originalPages"] = $tdatanoticias[".pages"];
$tdatanoticias[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanoticias[".originalDefaultPages"] = $tdatanoticias[".defaultPages"];

//	field labels
$fieldLabelsnoticias = array();
$fieldToolTipsnoticias = array();
$pageTitlesnoticias = array();
$placeHoldersnoticias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnoticias["Spanish"] = array();
	$fieldToolTipsnoticias["Spanish"] = array();
	$placeHoldersnoticias["Spanish"] = array();
	$pageTitlesnoticias["Spanish"] = array();
	$fieldLabelsnoticias["Spanish"]["id_Noticia"] = "Id Noticia";
	$fieldToolTipsnoticias["Spanish"]["id_Noticia"] = "";
	$placeHoldersnoticias["Spanish"]["id_Noticia"] = "";
	$fieldLabelsnoticias["Spanish"]["Imagen"] = "Imagen";
	$fieldToolTipsnoticias["Spanish"]["Imagen"] = "";
	$placeHoldersnoticias["Spanish"]["Imagen"] = "";
	$fieldLabelsnoticias["Spanish"]["Titulo"] = "Título";
	$fieldToolTipsnoticias["Spanish"]["Titulo"] = "";
	$placeHoldersnoticias["Spanish"]["Titulo"] = "";
	$fieldLabelsnoticias["Spanish"]["Fecha_Publicacion"] = "Fecha Publicación";
	$fieldToolTipsnoticias["Spanish"]["Fecha_Publicacion"] = "";
	$placeHoldersnoticias["Spanish"]["Fecha_Publicacion"] = "";
	$fieldLabelsnoticias["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipsnoticias["Spanish"]["Descripcion"] = "";
	$placeHoldersnoticias["Spanish"]["Descripcion"] = "";
	$fieldLabelsnoticias["Spanish"]["fk_id_Laboratorio"] = "Laboratorio al que pertenece";
	$fieldToolTipsnoticias["Spanish"]["fk_id_Laboratorio"] = "";
	$placeHoldersnoticias["Spanish"]["fk_id_Laboratorio"] = "";
	if (count($fieldToolTipsnoticias["Spanish"]))
		$tdatanoticias[".isUseToolTips"] = true;
}


	$tdatanoticias[".NCSearch"] = true;



$tdatanoticias[".shortTableName"] = "noticias";
$tdatanoticias[".nSecOptions"] = 0;

$tdatanoticias[".mainTableOwnerID"] = "";
$tdatanoticias[".entityType"] = 0;
$tdatanoticias[".connId"] = "project_pst_sena_at_localhost";


$tdatanoticias[".strOriginalTableName"] = "noticias";

	



$tdatanoticias[".showAddInPopup"] = false;

$tdatanoticias[".showEditInPopup"] = false;

$tdatanoticias[".showViewInPopup"] = false;

$tdatanoticias[".listAjax"] = false;
//	temporary
//$tdatanoticias[".listAjax"] = false;

	$tdatanoticias[".audit"] = false;

	$tdatanoticias[".locking"] = false;


$pages = $tdatanoticias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanoticias[".edit"] = true;
	$tdatanoticias[".afterEditAction"] = 1;
	$tdatanoticias[".closePopupAfterEdit"] = 1;
	$tdatanoticias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanoticias[".add"] = true;
$tdatanoticias[".afterAddAction"] = 1;
$tdatanoticias[".closePopupAfterAdd"] = 1;
$tdatanoticias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanoticias[".list"] = true;
}



$tdatanoticias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanoticias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanoticias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanoticias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanoticias[".printFriendly"] = true;
}



$tdatanoticias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanoticias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanoticias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanoticias[".isUseAjaxSuggest"] = true;



						

$tdatanoticias[".ajaxCodeSnippetAdded"] = false;

$tdatanoticias[".buttonsAdded"] = false;

$tdatanoticias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanoticias[".isUseTimeForSearch"] = false;


$tdatanoticias[".badgeColor"] = "008b8b";


$tdatanoticias[".allSearchFields"] = array();
$tdatanoticias[".filterFields"] = array();
$tdatanoticias[".requiredSearchFields"] = array();

$tdatanoticias[".googleLikeFields"] = array();
$tdatanoticias[".googleLikeFields"][] = "id_Noticia";
$tdatanoticias[".googleLikeFields"][] = "Imagen";
$tdatanoticias[".googleLikeFields"][] = "Titulo";
$tdatanoticias[".googleLikeFields"][] = "Fecha_Publicacion";
$tdatanoticias[".googleLikeFields"][] = "Descripcion";
$tdatanoticias[".googleLikeFields"][] = "fk_id_Laboratorio";



$tdatanoticias[".tableType"] = "list";

$tdatanoticias[".printerPageOrientation"] = 0;
$tdatanoticias[".nPrinterPageScale"] = 100;

$tdatanoticias[".nPrinterSplitRecords"] = 40;

$tdatanoticias[".geocodingEnabled"] = false;










$tdatanoticias[".pageSize"] = 20;

$tdatanoticias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanoticias[".strOrderBy"] = $tstrOrderBy;

$tdatanoticias[".orderindexes"] = array();


$tdatanoticias[".sqlHead"] = "SELECT id_Noticia,  	Imagen,  	Titulo,  	Fecha_Publicacion,  	Descripcion,  	fk_id_Laboratorio";
$tdatanoticias[".sqlFrom"] = "FROM noticias";
$tdatanoticias[".sqlWhereExpr"] = "";
$tdatanoticias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanoticias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanoticias[".arrGroupsPerPage"] = $arrGPP;

$tdatanoticias[".highlightSearchResults"] = true;

$tableKeysnoticias = array();
$tableKeysnoticias[] = "id_Noticia";
$tdatanoticias[".Keys"] = $tableKeysnoticias;


$tdatanoticias[".hideMobileList"] = array();




//	id_Noticia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Noticia";
	$fdata["GoodName"] = "id_Noticia";
	$fdata["ownerTable"] = "noticias";
	$fdata["Label"] = GetFieldLabel("noticias","id_Noticia");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Noticia";

		$fdata["sourceSingle"] = "id_Noticia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Noticia";

	
	
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


	$tdatanoticias["id_Noticia"] = $fdata;
		$tdatanoticias[".searchableFields"][] = "id_Noticia";
//	Imagen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Imagen";
	$fdata["GoodName"] = "Imagen";
	$fdata["ownerTable"] = "noticias";
	$fdata["Label"] = GetFieldLabel("noticias","Imagen");
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


	$tdatanoticias["Imagen"] = $fdata;
		$tdatanoticias[".searchableFields"][] = "Imagen";
//	Titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Titulo";
	$fdata["GoodName"] = "Titulo";
	$fdata["ownerTable"] = "noticias";
	$fdata["Label"] = GetFieldLabel("noticias","Titulo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Titulo";

		$fdata["sourceSingle"] = "Titulo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Titulo";

	
	
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


	$tdatanoticias["Titulo"] = $fdata;
		$tdatanoticias[".searchableFields"][] = "Titulo";
//	Fecha_Publicacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha_Publicacion";
	$fdata["GoodName"] = "Fecha_Publicacion";
	$fdata["ownerTable"] = "noticias";
	$fdata["Label"] = GetFieldLabel("noticias","Fecha_Publicacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha_Publicacion";

		$fdata["sourceSingle"] = "Fecha_Publicacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fecha_Publicacion";

	
	
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


	$tdatanoticias["Fecha_Publicacion"] = $fdata;
		$tdatanoticias[".searchableFields"][] = "Fecha_Publicacion";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "noticias";
	$fdata["Label"] = GetFieldLabel("noticias","Descripcion");
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


	$tdatanoticias["Descripcion"] = $fdata;
		$tdatanoticias[".searchableFields"][] = "Descripcion";
//	fk_id_Laboratorio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fk_id_Laboratorio";
	$fdata["GoodName"] = "fk_id_Laboratorio";
	$fdata["ownerTable"] = "noticias";
	$fdata["Label"] = GetFieldLabel("noticias","fk_id_Laboratorio");
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


	$tdatanoticias["fk_id_Laboratorio"] = $fdata;
		$tdatanoticias[".searchableFields"][] = "fk_id_Laboratorio";


$tables_data["noticias"]=&$tdatanoticias;
$field_labels["noticias"] = &$fieldLabelsnoticias;
$fieldToolTips["noticias"] = &$fieldToolTipsnoticias;
$placeHolders["noticias"] = &$placeHoldersnoticias;
$page_titles["noticias"] = &$pageTitlesnoticias;


changeTextControlsToDate( "noticias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["noticias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["noticias"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="laboratorio";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="laboratorio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "laboratorio";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["noticias"][0] = $masterParams;
				$masterTablesData["noticias"][0]["masterKeys"] = array();
	$masterTablesData["noticias"][0]["masterKeys"][]="id_Laboratorio";
				$masterTablesData["noticias"][0]["detailKeys"] = array();
	$masterTablesData["noticias"][0]["detailKeys"][]="fk_id_Laboratorio";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_noticias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Noticia,  	Imagen,  	Titulo,  	Fecha_Publicacion,  	Descripcion,  	fk_id_Laboratorio";
$proto0["m_strFrom"] = "FROM noticias";
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
	"m_strName" => "id_Noticia",
	"m_strTable" => "noticias",
	"m_srcTableName" => "noticias"
));

$proto6["m_sql"] = "id_Noticia";
$proto6["m_srcTableName"] = "noticias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Imagen",
	"m_strTable" => "noticias",
	"m_srcTableName" => "noticias"
));

$proto8["m_sql"] = "Imagen";
$proto8["m_srcTableName"] = "noticias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Titulo",
	"m_strTable" => "noticias",
	"m_srcTableName" => "noticias"
));

$proto10["m_sql"] = "Titulo";
$proto10["m_srcTableName"] = "noticias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha_Publicacion",
	"m_strTable" => "noticias",
	"m_srcTableName" => "noticias"
));

$proto12["m_sql"] = "Fecha_Publicacion";
$proto12["m_srcTableName"] = "noticias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "noticias",
	"m_srcTableName" => "noticias"
));

$proto14["m_sql"] = "Descripcion";
$proto14["m_srcTableName"] = "noticias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_Laboratorio",
	"m_strTable" => "noticias",
	"m_srcTableName" => "noticias"
));

$proto16["m_sql"] = "fk_id_Laboratorio";
$proto16["m_srcTableName"] = "noticias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "noticias";
$proto19["m_srcTableName"] = "noticias";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_Noticia";
$proto19["m_columns"][] = "Imagen";
$proto19["m_columns"][] = "Titulo";
$proto19["m_columns"][] = "Fecha_Publicacion";
$proto19["m_columns"][] = "Descripcion";
$proto19["m_columns"][] = "fk_id_Laboratorio";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "noticias";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "noticias";
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
$proto0["m_srcTableName"]="noticias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_noticias = createSqlQuery_noticias();


	
		;

						

$tdatanoticias[".sqlquery"] = $queryData_noticias;



$tdatanoticias[".hasEvents"] = false;

?>