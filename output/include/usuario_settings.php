<?php
$tdatausuario = array();
$tdatausuario[".searchableFields"] = array();
$tdatausuario[".ShortName"] = "usuario";
$tdatausuario[".OwnerID"] = "";
$tdatausuario[".OriginalTable"] = "usuario";


$tdatausuario[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatausuario[".originalPagesByType"] = $tdatausuario[".pagesByType"];
$tdatausuario[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausuario[".originalPages"] = $tdatausuario[".pages"];
$tdatausuario[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatausuario[".originalDefaultPages"] = $tdatausuario[".defaultPages"];

//	field labels
$fieldLabelsusuario = array();
$fieldToolTipsusuario = array();
$pageTitlesusuario = array();
$placeHoldersusuario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuario["Spanish"] = array();
	$fieldToolTipsusuario["Spanish"] = array();
	$placeHoldersusuario["Spanish"] = array();
	$pageTitlesusuario["Spanish"] = array();
	$fieldLabelsusuario["Spanish"]["id_User"] = "Id User";
	$fieldToolTipsusuario["Spanish"]["id_User"] = "";
	$placeHoldersusuario["Spanish"]["id_User"] = "";
	$fieldLabelsusuario["Spanish"]["Usuario"] = "Ingrese su Usuario o Correo";
	$fieldToolTipsusuario["Spanish"]["Usuario"] = "";
	$placeHoldersusuario["Spanish"]["Usuario"] = "";
	$fieldLabelsusuario["Spanish"]["Password"] = "Ingrese su Contraseña";
	$fieldToolTipsusuario["Spanish"]["Password"] = "";
	$placeHoldersusuario["Spanish"]["Password"] = "";
	$fieldLabelsusuario["Spanish"]["Rol"] = "Rol";
	$fieldToolTipsusuario["Spanish"]["Rol"] = "";
	$placeHoldersusuario["Spanish"]["Rol"] = "";
	if (count($fieldToolTipsusuario["Spanish"]))
		$tdatausuario[".isUseToolTips"] = true;
}


	$tdatausuario[".NCSearch"] = true;



$tdatausuario[".shortTableName"] = "usuario";
$tdatausuario[".nSecOptions"] = 0;

$tdatausuario[".mainTableOwnerID"] = "";
$tdatausuario[".entityType"] = 0;
$tdatausuario[".connId"] = "project_pst_sena_at_localhost";


$tdatausuario[".strOriginalTableName"] = "usuario";

	



$tdatausuario[".showAddInPopup"] = false;

$tdatausuario[".showEditInPopup"] = false;

$tdatausuario[".showViewInPopup"] = false;

$tdatausuario[".listAjax"] = false;
//	temporary
//$tdatausuario[".listAjax"] = false;

	$tdatausuario[".audit"] = false;

	$tdatausuario[".locking"] = false;


$pages = $tdatausuario[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuario[".edit"] = true;
	$tdatausuario[".afterEditAction"] = 1;
	$tdatausuario[".closePopupAfterEdit"] = 1;
	$tdatausuario[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuario[".add"] = true;
$tdatausuario[".afterAddAction"] = 1;
$tdatausuario[".closePopupAfterAdd"] = 1;
$tdatausuario[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuario[".list"] = true;
}



$tdatausuario[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuario[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuario[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuario[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuario[".printFriendly"] = true;
}



$tdatausuario[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuario[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuario[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuario[".isUseAjaxSuggest"] = true;



			

$tdatausuario[".ajaxCodeSnippetAdded"] = false;

$tdatausuario[".buttonsAdded"] = false;

$tdatausuario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuario[".isUseTimeForSearch"] = false;


$tdatausuario[".badgeColor"] = "2F4F4F";


$tdatausuario[".allSearchFields"] = array();
$tdatausuario[".filterFields"] = array();
$tdatausuario[".requiredSearchFields"] = array();

$tdatausuario[".googleLikeFields"] = array();
$tdatausuario[".googleLikeFields"][] = "id_User";
$tdatausuario[".googleLikeFields"][] = "Usuario";
$tdatausuario[".googleLikeFields"][] = "Password";
$tdatausuario[".googleLikeFields"][] = "Rol";



$tdatausuario[".tableType"] = "list";

$tdatausuario[".printerPageOrientation"] = 0;
$tdatausuario[".nPrinterPageScale"] = 100;

$tdatausuario[".nPrinterSplitRecords"] = 40;

$tdatausuario[".geocodingEnabled"] = false;










$tdatausuario[".pageSize"] = 20;

$tdatausuario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausuario[".strOrderBy"] = $tstrOrderBy;

$tdatausuario[".orderindexes"] = array();


$tdatausuario[".sqlHead"] = "SELECT id_User,  	Usuario,  	Password,  	Rol";
$tdatausuario[".sqlFrom"] = "FROM usuario";
$tdatausuario[".sqlWhereExpr"] = "";
$tdatausuario[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuario[".arrGroupsPerPage"] = $arrGPP;

$tdatausuario[".highlightSearchResults"] = true;

$tableKeysusuario = array();
$tableKeysusuario[] = "id_User";
$tdatausuario[".Keys"] = $tableKeysusuario;


$tdatausuario[".hideMobileList"] = array();




//	id_User
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_User";
	$fdata["GoodName"] = "id_User";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","id_User");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_User";

		$fdata["sourceSingle"] = "id_User";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_User";

	
	
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


	$tdatausuario["id_User"] = $fdata;
		$tdatausuario[".searchableFields"][] = "id_User";
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Usuario");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Usuario";

		$fdata["sourceSingle"] = "Usuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Usuario";

	
	
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


	$tdatausuario["Usuario"] = $fdata;
		$tdatausuario[".searchableFields"][] = "Usuario";
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Password");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Password";

		$fdata["sourceSingle"] = "PASSWORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
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


	$tdatausuario["Password"] = $fdata;
		$tdatausuario[".searchableFields"][] = "Password";
//	Rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Rol";
	$fdata["GoodName"] = "Rol";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Rol");
	$fdata["FieldType"] = 129;


	
	
			

		$fdata["strField"] = "Rol";

		$fdata["sourceSingle"] = "Rol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rol";

	
	
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
	$edata["LookupValues"][] = "SuperAdmin";
	$edata["LookupValues"][] = "LabAdmin";
	$edata["LookupValues"][] = "Cliente";

	
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


	$tdatausuario["Rol"] = $fdata;
		$tdatausuario[".searchableFields"][] = "Rol";


$tables_data["usuario"]=&$tdatausuario;
$field_labels["usuario"] = &$fieldLabelsusuario;
$fieldToolTips["usuario"] = &$fieldToolTipsusuario;
$placeHolders["usuario"] = &$placeHoldersusuario;
$page_titles["usuario"] = &$pageTitlesusuario;


changeTextControlsToDate( "usuario" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["usuario"] = array();
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


		
	$detailsTablesData["usuario"][$dIndex] = $detailsParam;

	
		$detailsTablesData["usuario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["masterKeys"][]="id_User";

				$detailsTablesData["usuario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["detailKeys"][]="fk_id_User";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["usuario"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_User,  	Usuario,  	Password,  	Rol";
$proto0["m_strFrom"] = "FROM usuario";
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
	"m_strName" => "id_User",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto6["m_sql"] = "id_User";
$proto6["m_srcTableName"] = "usuario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto8["m_sql"] = "Usuario";
$proto8["m_srcTableName"] = "usuario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto10["m_sql"] = "Password";
$proto10["m_srcTableName"] = "usuario";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Rol",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto12["m_sql"] = "Rol";
$proto12["m_srcTableName"] = "usuario";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "usuario";
$proto15["m_srcTableName"] = "usuario";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_User";
$proto15["m_columns"][] = "Usuario";
$proto15["m_columns"][] = "Password";
$proto15["m_columns"][] = "Rol";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "usuario";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "usuario";
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
$proto0["m_srcTableName"]="usuario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuario = createSqlQuery_usuario();


	
		;

				

$tdatausuario[".sqlquery"] = $queryData_usuario;



$tdatausuario[".hasEvents"] = false;

?>