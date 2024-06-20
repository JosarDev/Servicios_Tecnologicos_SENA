<?php
$tdatacliente = array();
$tdatacliente[".searchableFields"] = array();
$tdatacliente[".ShortName"] = "cliente";
$tdatacliente[".OwnerID"] = "";
$tdatacliente[".OriginalTable"] = "cliente";


$tdatacliente[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacliente[".originalPagesByType"] = $tdatacliente[".pagesByType"];
$tdatacliente[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacliente[".originalPages"] = $tdatacliente[".pages"];
$tdatacliente[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacliente[".originalDefaultPages"] = $tdatacliente[".defaultPages"];

//	field labels
$fieldLabelscliente = array();
$fieldToolTipscliente = array();
$pageTitlescliente = array();
$placeHolderscliente = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscliente["Spanish"] = array();
	$fieldToolTipscliente["Spanish"] = array();
	$placeHolderscliente["Spanish"] = array();
	$pageTitlescliente["Spanish"] = array();
	$fieldLabelscliente["Spanish"]["id_Cliente"] = "Id Cliente";
	$fieldToolTipscliente["Spanish"]["id_Cliente"] = "";
	$placeHolderscliente["Spanish"]["id_Cliente"] = "";
	$fieldLabelscliente["Spanish"]["TipoCliente"] = "Tipo Cliente";
	$fieldToolTipscliente["Spanish"]["TipoCliente"] = "";
	$placeHolderscliente["Spanish"]["TipoCliente"] = "";
	$fieldLabelscliente["Spanish"]["Num_Identificacion"] = "Num Identificacion";
	$fieldToolTipscliente["Spanish"]["Num_Identificacion"] = "";
	$placeHolderscliente["Spanish"]["Num_Identificacion"] = "";
	$fieldLabelscliente["Spanish"]["Nombres"] = "Nombres";
	$fieldToolTipscliente["Spanish"]["Nombres"] = "";
	$placeHolderscliente["Spanish"]["Nombres"] = "";
	$fieldLabelscliente["Spanish"]["Apellidos"] = "Apellidos";
	$fieldToolTipscliente["Spanish"]["Apellidos"] = "";
	$placeHolderscliente["Spanish"]["Apellidos"] = "";
	$fieldLabelscliente["Spanish"]["Genero"] = "Genero";
	$fieldToolTipscliente["Spanish"]["Genero"] = "";
	$placeHolderscliente["Spanish"]["Genero"] = "";
	$fieldLabelscliente["Spanish"]["Celular"] = "Celular";
	$fieldToolTipscliente["Spanish"]["Celular"] = "";
	$placeHolderscliente["Spanish"]["Celular"] = "";
	$fieldLabelscliente["Spanish"]["Correo"] = "Correo";
	$fieldToolTipscliente["Spanish"]["Correo"] = "";
	$placeHolderscliente["Spanish"]["Correo"] = "";
	$fieldLabelscliente["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipscliente["Spanish"]["Direccion"] = "";
	$placeHolderscliente["Spanish"]["Direccion"] = "";
	$fieldLabelscliente["Spanish"]["NombreEmpresa"] = "Nombre Empresa";
	$fieldToolTipscliente["Spanish"]["NombreEmpresa"] = "";
	$placeHolderscliente["Spanish"]["NombreEmpresa"] = "";
	$fieldLabelscliente["Spanish"]["NombreEmprendimiento"] = "Nombre Emprendimiento";
	$fieldToolTipscliente["Spanish"]["NombreEmprendimiento"] = "";
	$placeHolderscliente["Spanish"]["NombreEmprendimiento"] = "";
	$fieldLabelscliente["Spanish"]["fk_id_User"] = "Fk Id User";
	$fieldToolTipscliente["Spanish"]["fk_id_User"] = "";
	$placeHolderscliente["Spanish"]["fk_id_User"] = "";
	if (count($fieldToolTipscliente["Spanish"]))
		$tdatacliente[".isUseToolTips"] = true;
}


	$tdatacliente[".NCSearch"] = true;



$tdatacliente[".shortTableName"] = "cliente";
$tdatacliente[".nSecOptions"] = 0;

$tdatacliente[".mainTableOwnerID"] = "";
$tdatacliente[".entityType"] = 0;
$tdatacliente[".connId"] = "project_pst_sena_at_localhost";


$tdatacliente[".strOriginalTableName"] = "cliente";

	



$tdatacliente[".showAddInPopup"] = false;

$tdatacliente[".showEditInPopup"] = false;

$tdatacliente[".showViewInPopup"] = false;

$tdatacliente[".listAjax"] = false;
//	temporary
//$tdatacliente[".listAjax"] = false;

	$tdatacliente[".audit"] = false;

	$tdatacliente[".locking"] = false;


$pages = $tdatacliente[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacliente[".edit"] = true;
	$tdatacliente[".afterEditAction"] = 1;
	$tdatacliente[".closePopupAfterEdit"] = 1;
	$tdatacliente[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacliente[".add"] = true;
$tdatacliente[".afterAddAction"] = 1;
$tdatacliente[".closePopupAfterAdd"] = 1;
$tdatacliente[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacliente[".list"] = true;
}



$tdatacliente[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacliente[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacliente[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacliente[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacliente[".printFriendly"] = true;
}



$tdatacliente[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacliente[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacliente[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacliente[".isUseAjaxSuggest"] = true;





$tdatacliente[".ajaxCodeSnippetAdded"] = false;

$tdatacliente[".buttonsAdded"] = false;

$tdatacliente[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacliente[".isUseTimeForSearch"] = false;


$tdatacliente[".badgeColor"] = "00C2C5";


$tdatacliente[".allSearchFields"] = array();
$tdatacliente[".filterFields"] = array();
$tdatacliente[".requiredSearchFields"] = array();

$tdatacliente[".googleLikeFields"] = array();
$tdatacliente[".googleLikeFields"][] = "id_Cliente";
$tdatacliente[".googleLikeFields"][] = "TipoCliente";
$tdatacliente[".googleLikeFields"][] = "Num_Identificacion";
$tdatacliente[".googleLikeFields"][] = "Nombres";
$tdatacliente[".googleLikeFields"][] = "Apellidos";
$tdatacliente[".googleLikeFields"][] = "Genero";
$tdatacliente[".googleLikeFields"][] = "Celular";
$tdatacliente[".googleLikeFields"][] = "Correo";
$tdatacliente[".googleLikeFields"][] = "Direccion";
$tdatacliente[".googleLikeFields"][] = "NombreEmpresa";
$tdatacliente[".googleLikeFields"][] = "NombreEmprendimiento";
$tdatacliente[".googleLikeFields"][] = "fk_id_User";



$tdatacliente[".tableType"] = "list";

$tdatacliente[".printerPageOrientation"] = 0;
$tdatacliente[".nPrinterPageScale"] = 100;

$tdatacliente[".nPrinterSplitRecords"] = 40;

$tdatacliente[".geocodingEnabled"] = false;










$tdatacliente[".pageSize"] = 20;

$tdatacliente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacliente[".strOrderBy"] = $tstrOrderBy;

$tdatacliente[".orderindexes"] = array();


$tdatacliente[".sqlHead"] = "SELECT id_Cliente,  	TipoCliente,  	Num_Identificacion,  	Nombres,  	Apellidos,  	Genero,  	Celular,  	Correo,  	Direccion,  	NombreEmpresa,  	NombreEmprendimiento,  	fk_id_User";
$tdatacliente[".sqlFrom"] = "FROM cliente";
$tdatacliente[".sqlWhereExpr"] = "";
$tdatacliente[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacliente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacliente[".arrGroupsPerPage"] = $arrGPP;

$tdatacliente[".highlightSearchResults"] = true;

$tableKeyscliente = array();
$tableKeyscliente[] = "id_Cliente";
$tdatacliente[".Keys"] = $tableKeyscliente;


$tdatacliente[".hideMobileList"] = array();




//	id_Cliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Cliente";
	$fdata["GoodName"] = "id_Cliente";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","id_Cliente");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Cliente";

		$fdata["sourceSingle"] = "id_Cliente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Cliente";

	
	
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


	$tdatacliente["id_Cliente"] = $fdata;
		$tdatacliente[".searchableFields"][] = "id_Cliente";
//	TipoCliente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TipoCliente";
	$fdata["GoodName"] = "TipoCliente";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","TipoCliente");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "TipoCliente";

		$fdata["sourceSingle"] = "TipoCliente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoCliente";

	
	
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
	$edata["LookupValues"][] = "Empresa";
	$edata["LookupValues"][] = "Emprendedor";
	$edata["LookupValues"][] = "Persona Natural";

	
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


	$tdatacliente["TipoCliente"] = $fdata;
		$tdatacliente[".searchableFields"][] = "TipoCliente";
//	Num_Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Num_Identificacion";
	$fdata["GoodName"] = "Num_Identificacion";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","Num_Identificacion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Num_Identificacion";

		$fdata["sourceSingle"] = "Num_Identificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Num_Identificacion";

	
	
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


	$tdatacliente["Num_Identificacion"] = $fdata;
		$tdatacliente[".searchableFields"][] = "Num_Identificacion";
//	Nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Nombres";
	$fdata["GoodName"] = "Nombres";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","Nombres");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombres";

		$fdata["sourceSingle"] = "Nombres";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombres";

	
	
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


	$tdatacliente["Nombres"] = $fdata;
		$tdatacliente[".searchableFields"][] = "Nombres";
//	Apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Apellidos";
	$fdata["GoodName"] = "Apellidos";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","Apellidos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Apellidos";

		$fdata["sourceSingle"] = "Apellidos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Apellidos";

	
	
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


	$tdatacliente["Apellidos"] = $fdata;
		$tdatacliente[".searchableFields"][] = "Apellidos";
//	Genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Genero";
	$fdata["GoodName"] = "Genero";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","Genero");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "Genero";

		$fdata["sourceSingle"] = "Genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Genero";

	
	
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
	$edata["LookupValues"][] = "Masculino";
	$edata["LookupValues"][] = "Femenino";
	$edata["LookupValues"][] = "Otro";

	
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


	$tdatacliente["Genero"] = $fdata;
		$tdatacliente[".searchableFields"][] = "Genero";
//	Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Celular";
	$fdata["GoodName"] = "Celular";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","Celular");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Celular";

		$fdata["sourceSingle"] = "Celular";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Celular";

	
	
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


	$tdatacliente["Celular"] = $fdata;
		$tdatacliente[".searchableFields"][] = "Celular";
//	Correo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Correo";
	$fdata["GoodName"] = "Correo";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","Correo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Correo";

		$fdata["sourceSingle"] = "Correo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Correo";

	
	
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


	$tdatacliente["Correo"] = $fdata;
		$tdatacliente[".searchableFields"][] = "Correo";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","Direccion");
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


	$tdatacliente["Direccion"] = $fdata;
		$tdatacliente[".searchableFields"][] = "Direccion";
//	NombreEmpresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "NombreEmpresa";
	$fdata["GoodName"] = "NombreEmpresa";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","NombreEmpresa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NombreEmpresa";

		$fdata["sourceSingle"] = "NombreEmpresa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NombreEmpresa";

	
	
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


	$tdatacliente["NombreEmpresa"] = $fdata;
		$tdatacliente[".searchableFields"][] = "NombreEmpresa";
//	NombreEmprendimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "NombreEmprendimiento";
	$fdata["GoodName"] = "NombreEmprendimiento";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","NombreEmprendimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NombreEmprendimiento";

		$fdata["sourceSingle"] = "NombreEmprendimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NombreEmprendimiento";

	
	
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


	$tdatacliente["NombreEmprendimiento"] = $fdata;
		$tdatacliente[".searchableFields"][] = "NombreEmprendimiento";
//	fk_id_User
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "fk_id_User";
	$fdata["GoodName"] = "fk_id_User";
	$fdata["ownerTable"] = "cliente";
	$fdata["Label"] = GetFieldLabel("cliente","fk_id_User");
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


	$tdatacliente["fk_id_User"] = $fdata;
		$tdatacliente[".searchableFields"][] = "fk_id_User";


$tables_data["cliente"]=&$tdatacliente;
$field_labels["cliente"] = &$fieldLabelscliente;
$fieldToolTips["cliente"] = &$fieldToolTipscliente;
$placeHolders["cliente"] = &$placeHolderscliente;
$page_titles["cliente"] = &$pageTitlescliente;


changeTextControlsToDate( "cliente" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cliente"] = array();
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


		
	$detailsTablesData["cliente"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cliente"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cliente"][$dIndex]["masterKeys"][]="id_Cliente";

				$detailsTablesData["cliente"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cliente"][$dIndex]["detailKeys"][]="fk_id_Cliente";
//	cotizacion
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cotizacion";
		$detailsParam["dOriginalTable"] = "cotizacion";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cotizacion";
	$detailsParam["dCaptionTable"] = GetTableCaption("cotizacion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cliente"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cliente"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cliente"][$dIndex]["masterKeys"][]="id_Cliente";

				$detailsTablesData["cliente"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cliente"][$dIndex]["detailKeys"][]="fk_id_Cliente";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cliente"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cliente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Cliente,  	TipoCliente,  	Num_Identificacion,  	Nombres,  	Apellidos,  	Genero,  	Celular,  	Correo,  	Direccion,  	NombreEmpresa,  	NombreEmprendimiento,  	fk_id_User";
$proto0["m_strFrom"] = "FROM cliente";
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
	"m_strName" => "id_Cliente",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto6["m_sql"] = "id_Cliente";
$proto6["m_srcTableName"] = "cliente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoCliente",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto8["m_sql"] = "TipoCliente";
$proto8["m_srcTableName"] = "cliente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Num_Identificacion",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto10["m_sql"] = "Num_Identificacion";
$proto10["m_srcTableName"] = "cliente";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombres",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto12["m_sql"] = "Nombres";
$proto12["m_srcTableName"] = "cliente";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Apellidos",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto14["m_sql"] = "Apellidos";
$proto14["m_srcTableName"] = "cliente";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Genero",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto16["m_sql"] = "Genero";
$proto16["m_srcTableName"] = "cliente";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto18["m_sql"] = "Celular";
$proto18["m_srcTableName"] = "cliente";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Correo",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto20["m_sql"] = "Correo";
$proto20["m_srcTableName"] = "cliente";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto22["m_sql"] = "Direccion";
$proto22["m_srcTableName"] = "cliente";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreEmpresa",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto24["m_sql"] = "NombreEmpresa";
$proto24["m_srcTableName"] = "cliente";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "NombreEmprendimiento",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto26["m_sql"] = "NombreEmprendimiento";
$proto26["m_srcTableName"] = "cliente";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "fk_id_User",
	"m_strTable" => "cliente",
	"m_srcTableName" => "cliente"
));

$proto28["m_sql"] = "fk_id_User";
$proto28["m_srcTableName"] = "cliente";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "cliente";
$proto31["m_srcTableName"] = "cliente";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id_Cliente";
$proto31["m_columns"][] = "TipoCliente";
$proto31["m_columns"][] = "Num_Identificacion";
$proto31["m_columns"][] = "Nombres";
$proto31["m_columns"][] = "Apellidos";
$proto31["m_columns"][] = "Genero";
$proto31["m_columns"][] = "Celular";
$proto31["m_columns"][] = "Correo";
$proto31["m_columns"][] = "Direccion";
$proto31["m_columns"][] = "NombreEmpresa";
$proto31["m_columns"][] = "NombreEmprendimiento";
$proto31["m_columns"][] = "fk_id_User";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "cliente";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "cliente";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cliente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cliente = createSqlQuery_cliente();


	
		;

												

$tdatacliente[".sqlquery"] = $queryData_cliente;



$tdatacliente[".hasEvents"] = false;

?>