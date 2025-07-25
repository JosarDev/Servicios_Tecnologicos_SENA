<?php
include_once(getabspath("classes/files.php"));

/**
 * Abstract base class for all pages. Contains main functionality
 */
class RunnerPage
{
	/**
     * Id on page.
     * @var integer
     * @intellisense
     */
	public $id = 1;


	/**
     * Page Designer-assigned page id
     */
	public $pageName = "";

	/**
	 * If use Ajax Suggest js file or not
	 * @var bool
	 * @intellisense
	 */
	protected $isUseAjaxSuggest = true;

	/**
     * Type of page
     * @var string
     * @intellisense
     */
	public $pageType = "";

	/**
     * Mode of page
     * @var integer
     * @intellisense
     */
	public $mode = 0;

	/**
 	 * If use display loading or not
	 * @var bool
	 * @intellisense
	 */
	public $isDisplayLoading = false;

	/**
     * Original table name
     * @var string
     * @intellisense
     */
	public $strOriginalTableName = ""; //fix it

	/**
	 * String caption of table
	 * @var string
	 * @intellisense
	 */
	protected $strCaption = "";

	/**
     * Short table name
     * @var string
     * @intellisense
     */
	public $shortTableName = '';

	/**
     * Prefix for session variable
     * @var integer
     * @intellisense
     */
	public $sessionPrefix = "";

	/**
     * Name of current table
     * @var string
     * @intellisense
     */
	public $tName = "";


	/**
     * String of OrderBy for query
     * @var string
     * @intellisense
     */
	public $gstrOrderBy = "";

	/**
     * Instance of class Xtempl
     * @var object
     * @objtype{XTempl}
     * @intellisense
     */
	public $xt = null;

	/**
	 * Instance of SearchClause class
	 * @var object
	 * @objtype{SearchClause}
	 * @intellisense
	 */
	public $searchClauseObj = null;

	/**
     * Need use search clause object or not
     * @var boolean
     * @intellisense
     */
	public $needSearchClauseObj = true;

	public $flyId = 1;

	/**
	 *	The list of including js files
	 * @intellisense
	 */
	public $includes_js = array();

	/**
	 *	The list of including js files
	 * @intellisense
	 */
	public $includes_jsreq = array();

	/**
	 *	The list of including css files
	 * @intellisense
	 */
	public $includes_css = array();

	/**
	 * Id of record
	 * @var integer
	 * @intellisense
	 */
	public $recId = 0;

	/**
	 * Google maps default settings
	 * @var array
	 * @intellisense
	 */
	public $googleMapCfg = array();

	/**
	 * Recaptcha default settings
	 * @var array
	 * @intellisense
	 */
	public $reCaptchaCfg = array();

	/**
	 * Captcha Value
	 * @var string
	 * @intellisense
	 */
	public $captchaValue = '';

	public $captchaName = 'captcha';

	/**
	 * Is captcha ok after submit or not
	 * @var boolean
	 * @intellisense
	 */
	public $isCaptchaOk = true;

	/**
	 * How many CAPTCHAs to skip after a successful
	 * @var integer
	 * @intellisense
	 */
	public $captchaPassesCount = 5;

	/**
	 * Array of permissions for pages
	 * @var array
	 * @intellisense
	 */
	public $permis = array();

	/**
	 * If use group scurity or not
	 * @var bool
	 * @intellisense
	 */
	public $isGroupSecurity = true;

	/**
	 * Use or not debug mode for js
	 * @var bool
	 * @intellisense
	 */
	protected $debugJSMode = false;

	/**
	 * Array of record ??? for lookup with search
	 * @var array
	 */
	protected $recIds = array();

	/**
	 * Use mode ajax for simple listPage
	 * @var boolean
	 * @intellisense
	 */
	public $listAjax = false;

	/**
	 * Array of body begin, end code and body attributs
	 * @var array
	 * @intellisense
	 */
	public $body = array('begin' => '', 'end'=> '');

	/**
	 * Master table name
	 * @var string
	 * @intellisense
	 */
	public $masterTable = "";

	/**
	 * Master page name
	 * @var string
	 * @intellisense
	 */
	public $masterPage = "";

	/**
	 * Master table record data
	 * @var object
	 * @intellisense
	 */
	public $masterRecordData = array();

	/**
	 * Array of all details tables data
	 * @var array
	 * @intellisense
	 */
	public $allDetailsTablesArr = array();

	/**
	 * Array of java script settings for page
	 * @var array
	 * @intellisense
	 */
	public $jsSettings = array();

	/**
	 * Array of controls HTML map
	 * @var array
	 * @intellisense
	 */
	public $controlsHTMLMap = array();

	/**
	 * Array of view controls HTML map
	 * @var array
	 * @intellisense
	 */
	public $viewControlsHTMLMap = array();

	/**
	 * Array of controls map
	 * @var array
	 * @intellisense
	 */
	public $controlsMap = array();

	/**
	 * Page data to pass to JS code. Link to an element in the  global $pagesData array
	 * @var array
	 * @intellisense
	 */
	public $pageData = array();

	/**
	 * Array of view controls map
	 * @var array
	 * @intellisense
	 */
	public $viewControlsMap = array();

	/**
	 * Array of field settings for use it in javascript settings
	 * @var array
	 * @intellisense
	 */
	public $settingsMap = array();

	/**
	 * Array of records per page for list and report without group fields
	 * @var array
	 * @intellisense
	 */
	public $arrRecsPerPage = array();

	/**
	 * Number of page size
	 * @var integer
	 * @intellisense
	 */
	public $pageSize = 0;

	/**
	 * The page's table type: list, report or chart
	 * @var string
	 * @intellisense
	 */
	protected $tableType = "";

	/**
	 * Events object for the current table
	 * @var object
	 * @intellisense
	 */
	public $eventsObject;

	/**
	 * Master table requested keys
	 * @var array
	 */
	public $masterKeysReq = array();

	/**
	 * Detail keys by master table
	 * @var array
	 * @intellisense
	 */
	public $detailKeysByM = array();

	/**
	 * Locking object
	 * @var object
	 * @intellisense
	 */
	public $lockingObj = null;

	/**
	 * Is use Video player or not
	 * @var boolean
	 * @intellisense
	 */
	protected $isUseVideo = false;

	/**
	 * Is columns will be resizable or not
	 * @var boolean
	 * @intellisense
	 */
	protected $isResizeColumns = false;

	/**
	 * Is use CKeditor or not
	 * @var boolean
	 * @intellisense
	 */
	protected $isUseCK = false;

	/**
	 * Is display detail data on page or not
	 * @var boolean
	 * @intellisense
	 */

	//	delete this variable
	 public $isShowDetailTables = true;

	/**
	 * arrays of files to process after adding or editing a record
	 * @intellisense
	 */
    public $filesToSave = array(); //FileFieldSingle
	public $filesToMove = array();
	public $filesToDelete = array();

	/**
	 * Master keys by detail table
	 * @var array
	 * @intellisense
	 */
	protected $masterKeysByD = array();

	/**
	 * If nedd add web report or not
	 * @var bool
	 * @intellisense
	 */
	protected $isAddWebRep = true;

	/**
	 * Indicator, is used section 508
	 * @var bool
	 * @intellisense
	 */
	protected $is508 = false;

	/**
	 * Instance of Cypher class for encoding/decoding fields values
	 * @var object
	 * @intellisense
	 */
	public $cipherer = null;

	/**
	 * Project settings
	 * @type ProjectSettings
	 * @intellisense
	 */
	public $pSet = null;

	/**
	 * Project settings for the users table. This var is used in global pages
	 * @type ProjectSettings
	 * @intellisense
	 */
	public $pSetUsers = null;

	/**
	 * Project settings for edit controls
	 * @type ProjectSettings
	 * @intellisense
	 */
	public $pSetEdit = null;

	/**
	 * Number of rows
	 * @var integer
	 * @intellisense
	 */
	public $numRowsFromSQL = 0;

	/**
	 * Index of my page
	 * @var integer
	 * @intellisense
	 */
	protected $myPage = 0;

	protected $mapProvider = 0;

	protected $recordsOnPage = 0;

	/**
	 * Number of records per row list
	 * @var integer
	 * @intellisense
	 */
	public $recsPerRowList = 0;

	/**
	 * Number of records per row print
	 * @var integer
	 * @intellisense
	 */
	public $recsPerRowPrint = 0;

	/**
	 * grid layout - gltHORIZONTAL, gltVERTICAL or gltCOLUMNS
	 * @type bool
	 */
	public $listGridLayout = false;

	/**
	 * grid layout - gltHORIZONTAL, gltVERTICAL or gltCOLUMNS
	 * @type bool
	 */
	public $printGridLayout = false;

	/**
	 *
	 * @type array
	 */
	public $gridTabs = array();

	/**
	 * An array that keys are different field's css rules
	 * @type array
	 */
	protected $fieldCssRules = array();

	/**
	 * Cells' custom css rules
	 * @type string
	 */
	protected $cell_css_rules = "";

	/**
	 * Rows' custom css rules
	 * @type string
	 */
	protected $row_css_rules = "";

	/**
	 * css rules to hide fields on mobile devices columns
	 * It could be also applied to the desktop version
	 * @type string
	 */
	protected $mobile_css_rules = "";

	protected $colsOnPage = 1;

	/**
	 * Array of field names that used for totals
	 * @type array
	 * array['totalsFields']= array('fName'=>"@f.strName s", 'totalsType'=>'@f.strTotalsType', 'viewFormat'=>"@f.strViewFormat");
	 */
	public $totalsFields = array();


	/**
	 * Number of founed rows
	 * @var bool
	 * @intellisense
	 */
	public $rowsFound = false;

	/**
	 * Constructor, set initial params
	 * @param array $params
	 * @intellisense
	 */
	protected $deleteMessage = '';

	/**
	 * Number of maximum pages
	 * @var integer
	 * @intellisense
	 */
	protected $maxPages = 1;

	/**
	 * Name of the templete file
	 * @var string
	 * @intellisense
	 */
	public $templatefile = "";

	/**
	 * Array of menu nodes
	 * @var array
	 * @intellisense
	 */
	public $menuNodes = array();

	/**
	 * Refferense to sqlquery object
	 * @var object
	 * @intellisense
	 */
	protected $gQuery = null;

	/**
	 * Flag. True if fillSetCntrlMaps already called
	 * @intellisense
	 */
	protected $isControlsMapFilled = false;

	/**
	 * Instance of EditControlsContainer
	 * @var {object}
	 * @intellisense
	 */
	protected $controls = null;

	/**
	 * Instance of ViewControlsContainer
	 * @var {object}
	 * @intellisense
	 */
	public $viewControls = null;

	/**
	 * Associative array of readonly fields for add, edit and register page
	 * @var array
	 * @intellisense
	 */
	public $readOnlyFields = array();

	/**
	 * An array of edit page's fields
	 */
	public $editFields = array();

	/**
	 * It indicates if the searchpanel brick id added to the page's layout
	 */
	protected $searchPanelActivated = false;

	/**
	 * the instance of the "projectSettings" object
	 * It differs from the pSet (and is set as a pSet for the Search panel's searh table)
	 * in case the Search panel is activated on the non table page
	 * @type ProjectSettings
	 */
	public $pSetSearch = null;

	/**
	 * The real Search panel's searh table name.
	 * It differs from the tName in case the Search panel is activated on the non table page
	 */
	public $searchTableName = "";

	/**
	 * Page layout object
	 */
	protected $pageLayout = null;

	protected $warnLeavingPages = null;

	/**
	 * Indicator showing if It's neccessary to add the search panel fields's settings
	 * It's set equal to true when the Search panel is added on the non table page
	 */
	public $tableBasedSearchPanelAdded = false;

	public $mainTable = ""; //fix it
	public $mainField = ""; //fix it

	/**
	 * Cached results of getWhereComponents function
	 */
	protected $_cachedWhereComponents = null;

	/**
	 * the local time format regexp
	 * @type String
	 */
	protected $timeRegexp;

	protected $dispNoneStyle = 'style="display: none;"';

	/**
	 * Detail keys by detail table
	 */
	protected $detailKeysByD = array();

	/**
	 * The page's searchParamsLogger class instance
	 * @type Object
	 */
	public $searchLogger = null;

	/**
	 * @type Boolean
	 */
	public $searchSavingEnabled = false;

	/**
	 * @type Boolean
	 */
	public $pageHasSavedSearches = false;


	/**
	 * The 'form' logic elements
	 * @type Array
	 */
	protected $formBricks = array();

	protected $headerForms = array();
	protected $footerForms = array();
	protected $bodyForms = array();

	/**
	 * The instance of class representing a db connection
	 * @type Connection
	 */
	public $connection = null;

	/**
	 * Dashboard name
	 * @type string
	 */
	public $dashTName = '';

	/**
	 * Dashboard page id
	 * @type string
	 */
	public $dashPage = '';

	/**
	 * Element from dashboard
	 * @type string
	 */
	public $dashElementName = '';

	/**
	 * @type ProjectSettings
	 */
	protected $dashSet;

	/**
	 * @type Array
	 */
	protected $dashElementData = array();

	/**
	 *	PDF rendering mode.
	 *  empty - regular page display
	 * 	"build" - build page and return PDF
	 * 	"prepare" - build page and return HTML for browser post-processing
	 *	"convert" - convert post-processed HTML to PDF
	 */
	public $pdfMode = "";

	/**
	 * In a multistepped layout the step number
	 * @type Integer
	 */
	public $initialStep = 0;

	/**
	 *	This property is used by ReportPrint page only to indicate that export to Word/Excel is in progress.
	 *	@type String
	 */
	public $format = "";

	public $message = "";


	/**
	 * @type Boolean
	 */
	public $mapRefresh = false;

	/**
	 * @type Array
	 */
	public $vpCoordinates = array();

	public $querySQL = "";

	/**
	 * When the page is Details Preview, masterPageType has master table page type
	 * @type String
	 */
	public $masterPageType = "";


	public $masterPSet;


	/**
	 * View page data
	 * @type array
	 */
	protected $data = null;

	/**
	 * errorFields
	 */
	public $errorFields = array();

	protected $detailsTableObjects = array();

	/**
	 * If use body scroll for grid
	 * @type bool
	 */
	public $isScrollGridBody = false;

	/**
	 * Suppress Post/Redirect/Get pattern after submitting the form on Add/Edit/Register/Delete pages
	 * With $this->stopPRG=false the page will not be redirected.
	 */
	public $stopPRG = false;

	/**
	 * Override default page title
	 * @type String
	 */
	public $pageTitle = null;

	/**
	 * Indicates if the page should save its context in the global stack.
	 * If true, destructor must pop context from global stack
	 * @type Boolean
	 */
	public $pushContext = true;

	/**
	 * Standalone context for using in page events
	 * This should be used with pushContext=false only
	 * @type Object
	 */
	public $standaloneContext = null;

	/**
	 * Key field values of current or newly added record on Add/Edit/View pages
	 */
	public $keys = array();

	/**
	 * Array of selected record ids used on Print, Export and Edit Selected pages
	 * @type Array
	 */
	public $selection = array();

	/**
	 *	This is a hack, sorry.
	 *	Temporary substitute the WHERE tab name to calculate number of records in a tab
	 *	Used in getCurrentTabWhere function
	 *
	 *	@type String - substitute the tab id. Set to NULL to use current tab
	 */
	public $tabChangeling = null;

	/**
	 *	One more hack
	 *	Temporary skip coordinates WHERE clause to calculate number of records in a tab
	 *	Used in getWhereByMap function
	 *
	 *	@type Boolean
	 */
	public $skipMapFilter = false;

	public $changeDetailsTabTitles = true;

	/**
	 * See auxTable comments in ProjectSettings
	 */
	public $pageTable = "";

	/**
	 * Embedded details preview variables
	 */
	var $renderedBody = "";
	var $renderedButtons = "";

	var $pdfBackgroundImage = "";

	public $addRawFieldValues = false;

	/**
	 * DataSource
	 */
	protected $dataSource = null;

	protected $queryCommand = null;

	public $listPagePSet = null;


	/**
	 * @constructor
	 * @param &Array params
	 */
	function __construct(&$params)
	{
		global $locale_info, $cCharset, $page_layouts, $projectBuildKey, $wizardBuildKey;

		// copy properties to object
		RunnerApply($this, $params);

		if( $this->pushContext )
			RunnerContext::pushPageContext( $this );
		else
			$this->standaloneContext = new RunnerContextItem( CONTEXT_PAGE, array( "pageObj" => $this ));

		// Sanitize input. It must be checked before that, but just in case add it here.
		$this->id = (int)$this->id;

		if( !$this->id )
			$this->id = 1;

		//	see how this converts to ASP & ASP.NET
		global $pagesData;
		$pagesData[$this->id] = &$this->pageData;
		$this->pageData["proxy"] = array();

		$this->xt->pageId = $this->id;
		$this->xt->setPage( $this );
		$this->xt->assign( "pageid", $this->id );
		$this->xt->assign( "id", $this->id );
		$this->setTableConnection();

		if( $this->pageTable == "" ) {
			$this->pageTable = $this->tName;
		}
		$this->createProjectSettings();
		$this->setDataSource();

		$this->checkOauthLogin();

		$this->pageName = $this->pSet->pageName();
		$this->pageData["pageName"] = $this->pageName;
		$this->pageData["helperFormItems"] = $this->pSet->helperFormItems();
		$this->pageData["helperItemsByType"] = $this->pSet->helperItemsByType();
		$this->pageData["helperFieldItems"] = $this->pSet->allFieldItems();
		$this->pageData["buttons"] = $this->pSet->buttons();
		$this->pageData["fieldItems"] = $this->pSet->allFieldItems();

		foreach( $this->pSet->buttons() as $b ) {
			$this->AddJSFile( "include/button_".$b.".js" );
		}
		$this->pageData["renderedMediaType"] = getMediaType();

		$this->pSetEdit = $this->pSet;
		$this->pSetSearch = new ProjectSettings($this->tName, PAGE_SEARCH, $this->pageName, $this->pageTable );
		$this->searchTableName = $this->tName;

		if( $this->dashTName )
		{
			$this->dashSet = new ProjectSettings( $this->dashTName, "dashboard", $this->dashPage );
			if( $this->isDashboardElement() )
				$this->dashElementData = $this->dashSet->getDashboardElementData( $this->dashElementName );
		}

		$this->assignCipherer();
		$this->prepareCharts();

		include_once getabspath("classes/controls/EditControlsContainer.php");
		$this->controls = new EditControlsContainer($this, $this->pSetEdit, $this->pageType);
		include_once getabspath("classes/controls/ViewControlsContainer.php");
		$this->viewControls = new ViewControlsContainer($this->pSet, $this->pageType, $this);

		$this->gQuery = $this->pSet->getSQLQuery();

		//set google map configuration
		$this->googleMapCfg = array(
			'id' => $this->id,
			'isUseMainMaps'=>false,
			'isUseFieldsMaps'=> false,
			'isUseGoogleMap'=>false,
			'APIcode'=>GetGlobalData("apiGoogleMapsCode",""),
			'mainMapIds'=>array(),
			'fieldMapsIds'=>array(),
			'mapsData'=>array(),
			'useEmbedMapsAPI' => GetGlobalData("useEmbedMapsAPI", false) && getMapProvider() == GOOGLE_MAPS
		);

		//set recaptcha configuration
		$captchaSettings = GetGlobalData("CaptchaSettings", "");
		$this->captchaPassesCount = $captchaSettings["captchaPassesCount"];
		if ( $captchaSettings["type"] == RE_CAPTCHA ) {
			$this->reCaptchaCfg = array('siteKey' => $captchaSettings["siteKey"],  'inputCaptchaId' => "");
		}

		$this->debugJSMode = false;

		if($this->flyId < $this->id+1)
			$this->flyId = $this->id+1;

		// get permissions
		if ($this->tName)
		{
			$this->permis[$this->tName]= $this->getPermissions();
			$this->eventsObject = getEventObject($this->tName);
		}

		if( !$this->sessionPrefix )
			$this->assignSessionPrefix();

		$this->isDisplayLoading = $this->pSet->displayLoading();

		$this->shortTableName = GetTableURL($this->tName);
		// set layout


		$this->pageLayout = GetPageLayout($this->pageTable, $this->pageName );


		//init settingMap globalSettings
		$this->settingsMap["globalSettings"] = array();
		$this->settingsMap["globalSettings"]["shortTNames"] = array();

		$this->searchPanelActivated = $this->checkIfSearchPanelActivated();
		//global settings including "shortTNames" might be updated
		$this->setParamsForSearchPanel();

		$this->searchSavingEnabled = $this->isSearchSavingEnabled() && $this->needSearchClauseObj;

		if( $this->masterTable && !$this->getMasterTableInfo() ) {
			// drop a wrong master table name param
			$this->masterTable = "";
		}
		
		if ( $this->mode != LIST_MASTER && $this->mode != PRINT_MASTER )
			$this->setSessionVariables();

		//	get locking object
		$this->lockingObj = $this->getLockingObject();
		$this->warnLeavingPages = $this->pSet->warnLeavingPages();
		$this->is508 = isEnableSection508() && !$this->pdfJsonMode();
		$this->mapProvider = getMapProvider();
		$this->isUseVideo = $this->pSet->isUseVideo();
		$this->strCaption = GetTableCaption(GoodFieldName($this->tName));

		$this->tableType = $this->pSet->getTableType();
		$this->isAddWebRep = GetGlobalData("isAddWebRep",false);
		//	get details keys by master table
		$this->detailKeysByM = $this->getDetailKeysByMasterTable();


		$this->isResizeColumns = $this->pSet->isResizeColumns();
		$this->isUseAjaxSuggest = $this->pSetSearch->isUseAjaxSuggest();
		//	get all details table for current table
		if ( $this->mode != LIST_MASTER )
			$this->allDetailsTablesArr = $this->pSet->getDetailTablesArr();


		//	set template file
		$this->setTemplateFile();


		if($this->pageLayout)
		{
			$this->jsSettings['tableSettings'][$this->tName]['pageSkinStyle'] = array();
			$this->jsSettings['tableSettings'][$this->tName]['pageSkinStyle'][ $this->pageType ] = $this->pageLayout->style." page-".$this->pageLayout->name;
			$this->AddCSSFile( $this->pageLayout->getCSSFiles(isRTL(), isPageLayoutMobile( $this->templatefile ), $this->pdfMode != "" ) );

			//	show all forms by default
			$helper =& $this->pSet->helperFormItems();
			$formItems =& $helper["formItems"];
			foreach( array_keys($formItems) as $l ) {
				$this->xt->assign( $l . "_block", true );
				$this->xt->assign( $l . "_outerblock", true );
			}

		}

		if( $this->mobileTemplateMode() )
		{
			$this->recsPerRowList = 1;
			$this->isScrollGridBody = false;
			$this->listAjax = false;
			$this->isUseAjaxSuggest = false;
		}


		//	init jsSettings
		$this->jsSettings = array();
		$this->jsSettings["tableSettings"] = array();
		$this->jsSettings["tableSettings"][$this->tName] = array();
		$this->jsSettings["tableSettings"][$this->tName]["proxy"] = array("proxy" => "");
		$this->jsSettings["tableSettings"][$this->tName]['fieldSettings'] = array();


		$this->settingsMap["globalSettings"]["webRootPath"] = projectPath();

		//	projectRoot is used for cookies and local storage
		$this->settingsMap["globalSettings"]["projectRoot"] = projectPath();

		$this->settingsMap["globalSettings"]["ext"] = "php";
		$this->settingsMap["globalSettings"]["charSet"] = $cCharset;
		$this->settingsMap["globalSettings"]["curretLang"] = mlang_getcurrentlang(); // need for Runner.getGoogleLanguage() see Issue #10990
		$this->settingsMap["globalSettings"]["debugMode"] = $this->debugJSMode;
		$this->settingsMap["globalSettings"]["googleMapsApiCode"] = GetGlobalData("apiGoogleMapsCode","");
		$this->settingsMap["globalSettings"]["shortTNames"][$this->tName] = $this->shortTableName;
		$this->settingsMap["globalSettings"]["useCookieBanner"] = $this->isPD() && GetGlobalData("useCookieBanner", false );
		$this->settingsMap["globalSettings"]["cookieBanner"] = Labels::getCookieBanner();

		$this->settingsMap["globalSettings"]["projectBuildKey"] = $projectBuildKey;
		$this->settingsMap["globalSettings"]["wizardBuildKey"] = $wizardBuildKey;

		//Active Directory
		$this->settingsMap["globalSettings"]["isAD"] = Security::currentProviderType() == stAD;

		$this->settingsMap["globalSettings"]["isMobile"] = $this->mobileTemplateMode();
		$this->settingsMap["globalSettings"]["mobileDeteced"] = detectMobileDevice();

		// s508 must be in global settings
		$this->settingsMap['globalSettings']['s508'] = $this->is508;
		$this->settingsMap['globalSettings']['mapProvider'] = $this->mapProvider;
		$this->settingsMap['globalSettings']['staticMapsOnly'] = $this->pageType == PAGE_PRINT;
		$this->settingsMap["globalSettings"]["locale"] = array();
		$this->settingsMap["globalSettings"]["locale"]["dateFormat"] = $locale_info["LOCALE_IDATE"];
		$this->settingsMap["globalSettings"]["locale"]["langName"] = $locale_info["LOCALE_LANGNAME"];
		$this->settingsMap["globalSettings"]["locale"]["ctryName"] = $locale_info["LOCALE_CTRYNAME"];
		$this->settingsMap["globalSettings"]["locale"]["startWeekDay"] = $locale_info["LOCALE_IFIRSTDAYOFWEEK"];
		$this->settingsMap["globalSettings"]["locale"]["dateDelimiter"] = $locale_info["LOCALE_SDATE"];

		$this->settingsMap["globalSettings"]["locale"]["is24hoursFormat"] = $locale_info["LOCALE_ITIME"];
		$this->settingsMap["globalSettings"]["locale"]["leadingZero"] = $locale_info["LOCALE_ITLZERO"];
		$this->settingsMap["globalSettings"]["locale"]["timeDelimiter"] = $locale_info["LOCALE_STIME"];
		$this->settingsMap["globalSettings"]["locale"]["timePmLetter"] = $locale_info["LOCALE_S2359"];
		$this->settingsMap["globalSettings"]["locale"]["timeAmLetter"] = $locale_info["LOCALE_S1159"];

		$this->settingsMap["globalSettings"]["showDetailedError"] = GetGlobalData("showDetailedError", true);
		$this->settingsMap["globalSettings"]["customErrorMessage"] = GetGlobalData("customErrorMessage", "");

		global $resizeImagesOnClient;
		$this->settingsMap["globalSettings"]["resizeImagesOnClient"] = $resizeImagesOnClient;


		if( Security::hasLogin() && ( isLogged() && !Security::isGuest() || $this->pageType == PAGE_REGISTER ) ) {
			$this->settingsMap["globalSettings"]["sessionControl"] = $this->getSessionContolSettings();
		}


		$this->settingsMap["tableSettings"] = array();
		$this->settingsMap['tableSettings']['entityType'] = array("default"=> 0 , "jsName"=>"entityType" );
		$this->settingsMap['tableSettings']['hasEvents'] = array("default"=>false,"jsName"=>"hasEvents");
		$this->settingsMap["tableSettings"]["strCaption"] = array("default"=>"","jsName"=>"strCaption");
		$this->settingsMap["tableSettings"]["isUseAudio"] = array("default"=>false,"jsName"=>"isUseAudio"); //fix it
		$this->settingsMap["tableSettings"]["isUseVideo"] = array("default"=>false,"jsName"=>"isUseVideo");
		$this->settingsMap['tableSettings']['listGridLayout'] = array("default"=> gltHORIZONTAL, "jsName"=>"listGridLayout");
		$this->settingsMap["tableSettings"]["rowHighlite"] = array("default"=>false,"jsName"=>"isUseHighlite");

		$this->settingsMap['tableSettings']['recsPerRowList'] = array("default"=>1,"jsName"=>"recsPerRowList");
		$this->settingsMap["tableSettings"]["showAddInPopup"] = array("default"=>false, "jsName"=>"showAddInPopup");
		$this->settingsMap["tableSettings"]["showEditInPopup"] = array("default"=>false,"jsName"=>"showEditInPopup");
		$this->settingsMap["tableSettings"]["showViewInPopup"] = array("default"=>false,"jsName"=>"showViewInPopup");
		$this->settingsMap["tableSettings"]["updateSelected"] = array("default"=>false,"jsName"=>"updateSelected");
		$this->settingsMap["tableSettings"]["isResizeColumns"] = array("default"=>false,"jsName"=>"isUseResize");
		$this->settingsMap["tableSettings"]["detailsLinksOnList"] = array("default"=>DL_SINGLE,"jsName"=>"detailsLinksOnList");
		$this->settingsMap["tableSettings"]["isDisplayLoading"] = array("default"=>false, "jsName"=>"displayLoading");

		//if the Search panel added to the non table based page ajax suggests should be configured according to the search table's settings
		$ajaxSuggestDefault = $this->tableBasedSearchPanelAdded ? !$this->isUseAjaxSuggest : true;
		$this->settingsMap["tableSettings"]["isUseAjaxSuggest"] = array("default"=>$ajaxSuggestDefault,"jsName"=>"ajaxSuggest");
		$this->settingsMap["tableSettings"]["pages"] = array("default"=>array(),"jsName"=>"pages");
		$this->settingsMap["tableSettings"]["Keys"] = array("default"=>array(),"jsName"=>"keyFields");



		$this->controlsMap["oldLayout"] = $this->isOldLayout();
		$this->controlsMap["layoutVersion"] = $this->getLayoutVersion();
		$this->controlsMap["layoutName"] = $this->getLayoutName();
		$this->controlsMap["pageTable"] = $this->pSet->pageTable();

		$this->settingsMap["fieldSettings"] = array();
		$this->settingsMap["fieldSettings"]["UseTimestamp"] = array("default"=>false,"jsName"=>"isUseTimeStamp");
		$this->settingsMap["fieldSettings"]["strName"] = array("default"=>"","jsName"=>"strName");
		$this->settingsMap["fieldSettings"]["ShowTime"] = array("default"=>false,"jsName"=>"showTime");
		$this->settingsMap["fieldSettings"]["EditFormat"] = array("default"=>"","jsName"=>"editFormat");
		$this->settingsMap["fieldSettings"]["DateEditType"] = array("default"=>EDIT_DATE_SIMPLE,"jsName"=>"dateEditType");
		$this->settingsMap["fieldSettings"]["RTEType"] = array("default"=>"","jsName"=>"RTEType");
		$this->settingsMap["fieldSettings"]["ViewFormat"] = array("default"=>"","jsName"=>"viewFormat");
		$this->settingsMap["fieldSettings"]["validateAs"] = array("default"=>null,"jsName"=>"validation");
		$this->settingsMap["fieldSettings"]["strEditMask"] = array("default"=>null,"jsName"=>"mask");
		$this->settingsMap["fieldSettings"]["LastYearFactor"] = array("default"=>10,"jsName"=>"lastYear");
		$this->settingsMap["fieldSettings"]["InitialYearFactor"] = array("default"=>100,"jsName"=>"initialYear");
		$this->settingsMap["fieldSettings"]["ShowListOfThumbnails"] = array("default"=>false,"jsName"=>"showListOfThumbnails");
		$this->settingsMap["fieldSettings"]["ImageWidth"] = array("default"=>0,"jsName"=>"imageWidth");
		$this->settingsMap["fieldSettings"]["ImageHeight"] = array("default"=>0,"jsName"=>"imageHeight");
		$this->settingsMap["fieldSettings"]["ResizeImage"] = array("default"=>false,"jsName"=>"resizeImage");
		$this->settingsMap["fieldSettings"]["NewSize"] = array("default" => 0,"jsName"=>"resizeImageSize");

		$this->settingsMap["fieldSettings"]["weekdays"] = array("default"=>"","jsName"=>"weekdays");
		$this->settingsMap["fieldSettings"]["weekdayMessage"] = array("default"=>"","jsName"=>"weekdayMessage");

		if( $this->pageType == PAGE_VIEW )
			$this->settingsMap["fieldSettings"]["fieldViewEvents"] = array("default"=>false,"jsName"=>"events");
		else
			$this->settingsMap["fieldSettings"]["fieldEvents"] = array("default"=>false,"jsName"=>"events");

		$this->jsSettings["tableSettings"][$this->tName]["strCaption"] = $this->strCaption;
		$this->jsSettings["tableSettings"][$this->tName]["pageMode"] = $this->mode;

		$this->jsSettings["tableSettings"][$this->tName]["defaultPages"] = $this->pSet->getDefaultPages();

		if ($this->listAjax)
			$this->jsSettings['tableSettings'][$this->tName]['pageMode'] = LIST_AJAX;

		if($this->lockingObj)
			$this->jsSettings['tableSettings'][$this->tName]['locking'] = true;

		if( $this->warnLeavingPages && ($this->pageType ==PAGE_REGISTER || $this->pageType ==PAGE_ADD || $this->pageType ==PAGE_EDIT) )
			$this->jsSettings['tableSettings'][$this->tName]['warnOnLeaving'] = true;

		//If current table has detail tables
		if( count($this->allDetailsTablesArr) )
		{
			if($this->pageType==PAGE_LIST)
				$this->jsSettings['tableSettings'][$this->tName]['detailTables'] = array();

			$this->jsSettings['tableSettings'][$this->tName]['isShowDetails'] = $this->isShowDetailTables;

			for($i = 0; $i < count($this->allDetailsTablesArr); $i ++)
			{
				$dTable = $this->allDetailsTablesArr[$i]['dDataSourceTable'];
				$dPset = new ProjectSettings( $dTable, $this->allDetailsTablesArr[$i]['dType'], $this->pSet->detailsPageId( $dTable ) );
				$this->settingsMap["globalSettings"]['shortTNames'][ $this->allDetailsTablesArr[$i]['dDataSourceTable'] ] = $this->allDetailsTablesArr[$i]['dShortTable'];
				$dPermission = $this->getPermissions( $this->allDetailsTablesArr[$i]['dDataSourceTable'] );
				$this->permis[$this->allDetailsTablesArr[$i]['dDataSourceTable']] = $dPermission;

				// field names of master keys of current table for passed details table name
				$this->masterKeysByD[$i] = $this->allDetailsTablesArr[$i]['masterKeys'];

				if(($this->pageType == PAGE_LIST) || ($this->pageType == PAGE_REPORT) || ($this->pageType == PAGE_CHART))
				{
					unset($_SESSION[$this->allDetailsTablesArr[$i]['dDataSourceTable'].'_advsearch']);

					$dPermission = $this->getPermissions( $this->allDetailsTablesArr[$i]['dDataSourceTable'] );
					if( $dPermission["search"] )
					{
						$this->jsSettings['tableSettings'][$this->tName]['detailTables'][ $this->allDetailsTablesArr[$i]['dDataSourceTable'] ] =
							array(
								'pageType' => $this->allDetailsTablesArr[$i]['dType'],
								'dispChildCount' => $this->pSet->detailsShowCount( $dTable ),
								'hideChild' => $this->pSet->detailsHideEmpty( $dTable ),
								'listShowType'=> $this->pSet->detailsPreview( $dTable ),
								'addShowType' => $this->pSet->detailsPreview( $dTable ),
								'editShowType' => $this->pSet->detailsPreview( $dTable ),
								'viewShowType' => $this->pSet->detailsPreview( $dTable ),
								'proceedLink' => $this->proceedLinkAvailable( $dTable ),
								'label'=> GetTableCaption( GoodFieldName( $dTable ) ),
								'title'=> $this->getPageTitle( $this->pSet->detailsPageId( $dTable ), GoodFieldName( $dTable ), null, $dPset ),
								'pageId' => $this->pSet->detailsPageId( $dTable ),
								'hideEmptyPreview' => $this->pSet->detailsHideEmptyPreview( $dTable ),
								'detailsHrefAvailable' => $this->detailsHrefAvailable(),
							);
					}

					if( $this->pSet->detailsPreview( $dTable ) == DP_POPUP )
						$this->jsSettings['tableSettings'][$this->tName]['isUsePopUp'] = true;

				}
			}

			if( ($this->pageType==PAGE_ADD || $this->pageType==PAGE_EDIT) && $this->isShowDetailTables )
				$this->controlsMap["dControlsMap"] = array();
		}
		$this->controlsMap['toolTips'] = array();
		$this->addLookupSettings();
		$this->addMultiUploadSettings();

		$this->controlsMap["searchPanelActivated"] = $this->searchPanelActivated;

		$this->controlsMap["controls"] = array();
		if( !($this->pageType == PAGE_ADD && $this->mode == ADD_INLINE) && !($this->pageType == PAGE_EDIT && $this->mode == EDIT_INLINE) )
		{
			if( $this->getLayoutVersion() === PD_BS_LAYOUT )
				$allSearchFields = $this->pSet->getAllSearchFields();
			else
				$allSearchFields = $this->pSetSearch->getAllSearchFields();

			$this->controlsMap["search"] = array();
			$this->controlsMap["search"]["searchBlocks"] = array();
			$this->controlsMap["search"]["allSearchFields"] = $allSearchFields;
			$this->controlsMap["search"]["allSearchFieldsLabels"] = $this->getSearchFieldsLabels( $allSearchFields );
			$this->controlsMap["search"]["panelSearchFields"] = $this->pSet->getPanelSearchFields();
			$this->controlsMap["search"]["googleLikeFields"] = $this->pSet->getGoogleLikeFields();
			$this->controlsMap["search"]["inflexSearchPanel"] = !$this->pSet->isFlexibleSearch();
			$this->controlsMap["search"]["requiredSearchFields"] = $this->pSet->getSearchRequiredFields();
			$this->controlsMap["search"]["isSearchRequired"] = $this->pSet->noRecordsOnFirstPage();
			$this->controlsMap["search"]["searchTableName"] = $this->searchTableName;
			$this->controlsMap["search"]["shortSearchTableName"] = $this->pSetSearch->getShortTableName();

			if($this->pageType!=PAGE_SEARCH)
				$this->controlsMap["search"]["submitPageType"] = $this->pageType;
			else
			{
				if(postvalue("rname")){
					$this->controlsMap["search"]["submitPageType"] = "dreport";
					/*$this->controlsMap["search"]["baseParams"]["rname"] = postvalue("rname");*/
				}elseif(postvalue("cname")){
					$this->controlsMap["search"]["submitPageType"] = "dchart";
					$this->controlsMap["search"]["baseParams"]["cname"] = postvalue("cname");
				}else{
					$this->controlsMap["search"]["submitPageType"] = $this->tableType;
				}
			}
		}

		$this->googleMapCfg["APIcode"] = GetGlobalData("apiGoogleMapsCode","");


		$this->processMasterKeyValue();
		if ( $this->masterTable )
		{
			$this->pageData[ "masterTable" ] = $this->masterTable;
			$this->pageData[ "masterKeys" ] = $this->getMasterKeysParams();
			$this->pageData[ "masterPageName" ] = $this->getMasterPageName();
		}

		// set default grid tabs - They can be changed in events
		$this->gridTabs = $this->pSet->getGridTabs();

		$this->assignSearchLogger();

		$this->checkFSProviders();
		$this->pageData["notifications"] = $this->getNotifications();
		$this->pageData["mobileSub"] = $this->pSet->getMobileSub();

		$this->assignMenus();
	}

	/**
	 * limit row count
	 *
	 * @param Integer $rowCount
	 * @param  Object $pSet
	 * @return Integer
	 */
	function limitRowCount( $rowCount, $pSet = null ) {
		if ( is_null($pSet) )
			$pSet = $this->pSet;

		return $pSet->getRecordsLimit() && $rowCount > $pSet->getRecordsLimit() ? $pSet->getRecordsLimit() : $rowCount;
	}

	/**
	 * Get tab by tabId
	 *
	 * @param String $tabId
	 * @return Array
	 */
	function getGridTab($tabId)
	{
		foreach ( $this->gridTabs as $tab )
		{
			if ( $tab["tabId"] === $tabId )
				return $tab;
		}
		return false;
	}

	function getCurrentTab()
	{
		if( !$this->gridTabs )
			return false;

		//	find tab with current id
		$tab = $this->getGridTab( $_SESSION[ $this->sessionPrefix . "_currentTab" ] );
		if( $tab )
		{
			if( !$tab['hidden'] )
				return $tab;
		}

		//	find tab with empty id
		$tab = $this->getGridTab( "" );
		if( $tab )
		{
			if( !$tab['hidden'] )
				return $tab;
		}

		// return first available tab
		for( $i=0; $i< count( $this->gridTabs ); ++$i )
		{
			if( !$this->gridTabs[$i]['hidden'] )
				return $this->gridTabs[$i];
		}

		return $this->gridTabs[0];
	}

	function getCurrentTabWhere()
	{
		if( $this->tabChangeling === null )
			$currentTab = $this->getCurrentTab();
		else
			$currentTab = $this->getGridTab( $this->tabChangeling );

		if( $currentTab ) {
			return DB::PrepareSQL( $currentTab["where"] );
		}
		return "";
	}

	function getCurrentTabId()
	{
		$currentTab = $this->getCurrentTab();
		if( $currentTab ) {
			return $currentTab["tabId"];
		}
		return "";
	}

	function setCurrentTabId( $tabId )
	{
		$_SESSION[ $this->sessionPrefix . "_currentTab" ] = $tabId;
	}

	function prepareGridTabs()
	{
		//	delete master-dependent tabs
		if( !$this->masterTable )
		{
			foreach ( array_keys( $this->gridTabs ) as $key )
			{
				$tab = $this->gridTabs[ $key ];
				$masterTokent = DB::readMasterTokens( $tab["where"] );
				if (  count($masterTokent) > 0 )
					unset($this->gridTabs[$key]);
			}
		}

		//	calculate row counts. Mark tabs as hidden
		if( $this->gridTabsAvailable() )
		{
			$tabIndices = array_keys( $this->gridTabs );
			foreach ( $tabIndices as $i )
			{
				$tab = $this->gridTabs[$i];
				if ( $tab['showRowCount'] || $tab['hideEmpty'] )
				{
					$this->gridTabs[$i][ 'count' ] = $this->getRowCountByTab( $tab["tabId"] );
					if( $tab['hideEmpty'] && !$this->gridTabs[$i][ 'count' ] )
						$this->gridTabs[$i][ 'hidden' ] = true;
				}
			}
		}
	}

	function getTabsHtml()
	{
		$currentTab = $this->getCurrentTab();

		$tabs = array();
		foreach ($this->gridTabs as $key => $tab )
		{
			$linkAttrs = array();

			$getParams = array();
			$getParams[] = "tab=" . $tab["tabId"];
			$getParams[] = $this->getStateUrlParams();
			if( $this->pageName != $defaultPage  )
				$getParams[] = "page=" . $this->pageName;


			$linkAttrs[] = 'href="' . GetTableLink($this->shortTableName, $this->pageType, implode( '&', $getParams ) ) . '"';
			$linkAttrs[] = 'data-pageid="' . $this->id . '"';
			$linkAttrs[] = 'data-tabid="' . $tab["tabId"] . '"';

			$tabAttrs = array();
			if( $currentTab["tabId"] === $tab["tabId"] )
				$tabAttrs[] = 'class="active"';

			if ( $tab['hidden'] )
			{
				$tabAttrs[] = 'data-hidden';
			}
			$countRowHtml = $tab['showRowCount'] ? "&nbsp;(" . $tab['count'] . ")" : "";

			$tabs[] = '<li '. implode( ' ', $tabAttrs ) .'><a '. implode( ' ', $linkAttrs ) .'>'.$this->getTabTitle($tab['tabId']) . $countRowHtml . '</a></li>';
		}
		return implode("", $tabs);
	}

	/**
	 * 	Returns number of visible grid tabs
	 *	@return Integer
	 */
	public function getGridTabsCount()
	{
		$tcount = 0;
		foreach ($this->gridTabs as $key => $tab )
		{
			if ( !$tab['hidden'] )
				++$tcount;
		}
		return $tcount;
	}

	/**
	 * Process grid tabs
	 *
	 */
	function processGridTabs()
	{
		$this->pageData['gridTabs'] = "";

		$tabId = $this->getCurrentTabId();

		$this->prepareGridTabs();
		if ( count($this->gridTabs) <= 1 )
			return;

		$html = $this->getTabsHtml();

		$this->pageData['gridTabs'] = $html;
		$this->pageData['tabId'] = $this->getCurrentTabId();

		if( $this->displayTabsInPage() )
		{
			$this->xt->assign('grid_tabs', true);
			$this->xt->assign('grid_tabs_content', $html );
		}

		return $tabId != $this->pageData['tabId'];
	}


	function addTab($where, $title, $tabId)
	{
		if ( $this->getGridTab($tabId) !== false )
			return false;

		$this->gridTabs[] = array(
			'tabId' => $tabId,
			'name' => $title,
			'nameType' => "Text",
			'where' => $where
		);

		return true;
	}

	function deleteTab($tabId)
	{
		$deleteKey = false;
		foreach ($this->gridTabs as $key => $tab)
		{
			if ( $tab["tabId"] === $tabId )
			{
				$deleteKey = $key;
				break;
			}
		}
		if( $deleteKey !== false)
			unset( $this->gridTabs[ $deleteKey ] );

	}

	function setTabTitle($tabId, $title)
	{
		foreach ($this->gridTabs as $key => $tab)
		{
			if ( $tab["tabId"] === $tabId )
			{
				$this->gridTabs[$key]['name'] = $title;
				$this->gridTabs[$key]['nameType'] = "Text";

				return true;
			}
		}
		return false;
	}

	function setTabWhere($tabId, $where)
	{
		foreach ($this->gridTabs as $key => $tab)
		{
			if ( $tab["tabId"] === $tabId )
			{
				$this->gridTabs[$key]['where'] = $where;

				return true;
			}
		}
		return false;
	}

	function getTabTitle($tabId)
	{
		$tab = $this->getTabInfo( $tabId );
		if( !$tab )
			return false;

		if ( $tab['nameType'] !== "Text" )
			return GetCustomLabel($tab['name']);
		return $tab['name'];
	}

	function getTabInfo( $tabId )
	{
		foreach ($this->gridTabs as $key => $tab)
		{
			if ( $tab["tabId"] === $tabId )
				return $tab;
		}
		return null;
	}

	function getTabFlags($tabId)
	{
		$flags = array();
		$tab = $this->getGridTab($tabId);
		if ( !$tab )
			return false;

		$flags["showCount"] = $tab["showRowCount"];
		$flags["hideEmpty"] = $tab["hideEmpty"];

		return $flags;
	}

	function setTabFlags($tabId, $flags)
	{
		foreach ($this->gridTabs as $key => $tab)
		{
			if ( $tab["tabId"] === $tabId )
			{
				if ( isset($flags["showCount"]) )
					$this->gridTabs[$key]['showRowCount'] = $flags["showCount"];
				if ( isset($flags["showCount"]) )
					$this->gridTabs[$key]['hideEmpty'] = $flags["hideEmpty"];

				return true;
			}
		}
		return false;

	}

	/**
	 * get locking object
	 * @retunr Mixed
	 */
	protected function getLockingObject()
	{
		return GetLockingObject( $this->tName );
	}

	/**
	 * Check is dashboard element
	 */
	function isDashboardElement()
	{
		if ( $this->dashElementName == "" )
		{
			return false;
		}

		return true;
	}

	/**
	 * Init the page's functionality.
	 * The method is invoked just after the constructor has been called
	 */
	function init()
	{
		if( $this->xt )
			$this->xt->assign("pagetitle", $this->getPageTitle(
				$this->pageName,
				$this->tName == GLOBAL_PAGES ? "" : GoodFieldName($this->tName),
				null,
				null,
				false
			));

		//build the Search panel if the "searchpanel" brick is added to the page's layout
		$this->buildAddedSearchPanel();

		if( Security::hasLogin() ) {
			$this->initLogin();
		}

		if( $this->pageType == PAGE_LIST && ($this->mode == LIST_AJAX || $this->mode == LIST_SIMPLE || $this->mode == LIST_LOOKUP)
			|| $this->pageType == PAGE_DASHBOARD
			|| ( $this->pageType == PAGE_REPORT && $this->mode === REPORT_SIMPLE
			|| $this->pageType == PAGE_CHART && $this->mode == CHART_SIMPLE ) )
		{
			if( $this->pSet->getFilterFields() )
				$this->prepareGridTabs();

			$filterPanelVisible = $this->buildFilterPanel();
			if( !$filterPanelVisible ) {
				$this->hideElement("filterpanel");
			}
		}
	}

	/**
	 * Set the 'connection' property if the table is page based #9875
	 */
	protected function setTableConnection()
	{
		global $cman;
		if( $this->tName != GLOBAL_PAGES )
			$this->connection = $cman->byTable( $this->tName );
	}

	protected function setDataSource()
	{
		$this->dataSource = getDataSource( $this->tName, $this->pSet, $this->connection );
	}

	public function getDataSource()
	{
		return $this->dataSource;
	}


	/**
	 * Set the 'cipherer' property
	 */
	protected function assignCipherer()
	{
		$this->cipherer = new RunnerCipherer($this->tName, $this->pSet);
	}

	/**
	 * Init login form
	 */
	function initLogin()
	{
		$this->settingsMap["globalSettings"]["twoFactorAuth"] = Security::twoFactorSettings();

		$this->settingsMap["globalSettings"]["loginFormType"] = $this->pSet->getLoginFormType();
		if( $this->mobileTemplateMode() )
			$this->settingsMap["globalSettings"]["loginFormType"] = LOGIN_SEPARATE;

		$this->settingsMap["globalSettings"]["loginTName"] = Security::loginTable();

		$this->xt->assign("security_block", true);
		// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
		$this->xt->assign("username", $_SESSION["UserName"]);
		if( Security::showUserPic() ) {
			$this->xt->assign(
				"userbutton_image",
				'<span class="r-user-image"><img src="'.GetTableLink(' file', '', 'userpic='. rawurldecode( Security::getUserName() ) ).'"></span>'
			);
		} else {
			$this->xt->assign( "userbutton_icon", true );
		}
		$this->xt->assign("logoutlink_attrs", 'id="logoutButton'.$this->id.'"');

		$loggedAsGuest = Security::isGuest();
		$this->xt->assign("loggedas_message", !$loggedAsGuest);
		$this->xt->assign("guestloginbutton", $loggedAsGuest);

		$this->xt->assign("userinfo_link", Security::currentUserInDatabase() );
		$this->xt->assign("logoutbutton", Security::logoutAvailable() );

		if( $this->isPD() )
		{
			$this->xt->assign("guest_register", $loggedAsGuest);
		}

		if($this->mobileTemplateMode())
		{
			$this->xt->assign("guestloginlink_attrs", 'id="loginButton'.$this->id.'"');
			return;
		}

		$this->xt->assign("guestloginlink_attrs", 'id="loginButton'.$this->id.'"');

		if( $this->pSet->getLoginFormType() == LOGIN_EMBEDED ) {
			if( !$this->mobileTemplateMode() )
			{
				$this->xt->assign("embeded_log_fields", true);
				$this->xt->assign("embeded_log_ctrls", true);

				if( $this->isPD() )
				{
					$this->xt->assign("embeded_username", $loggedAsGuest);
					$this->xt->assign("embeded_password", $loggedAsGuest);

					if( $loggedAsGuest )
					{
						$this->xt->assign("username_attrs", 'id="username'.$this->id.'" placeholder="login"');
						$this->xt->assign("password_attrs", 'id="password'.$this->id.'" placeholder="password"');
					}
				}
				else
				{
					$this->xt->assign("username_attrs", 'id="username" placeholder="login"');
					$this->xt->assign("password_attrs", 'id="password" placeholder="password"');
				}

			}
			else
			{
				$this->xt->assign("embeded_log_fields", false);
				$this->xt->assign("embeded_log_ctrls", false);

				if( $this->isPD() )
				{
					$this->xt->assign("embeded_username", false);
					$this->xt->assign("embeded_password", false);
				}
			}
		}
	}

	/**
	 * @param String strPassword
	 * @return String
	 */
	public function getPasswordHash( $strPassword )
	{
		return getPasswordHash( $strPassword );
	}

	/**
	 * Makes assigns for admin
	 */
	function assignAdmin()
	{
		if($this->isAdminTable())
		{
			$this->xt->assign("exitadminarea_link", true);
			$this->xt->assign("exitaalink_attrs", "id=\"exitAdminArea".$this->id."\"");
		}

		if( Security::isAdmin() )
		{
			$this->xt->assign("adminarea_link", true);
			$this->xt->assign("adminarealink_attrs", "id=\"adminArea".$this->id."\"");
		}
	}

	protected function assignSessionPrefix()
	{
		$this->sessionPrefix = $this->tName;
	}

	/**
	 * Check if the 'Search saving' is enabled basing on
	 * the project settings and the current page's type
	 * @return Boolean
	 */
	public function isSearchSavingEnabled()
	{
		$searchSavingEnabled = $this->pSet->isSearchSavingEnabled();

		if( !$searchSavingEnabled )
			return false;

		return $this->pageType == PAGE_LIST && ($this->mode == LIST_AJAX || $this->mode == LIST_SIMPLE)
			   || $this->pageType == PAGE_REPORT && $this->mode == REPORT_SIMPLE
			   || $this->pageType == PAGE_CHART && $this->mode == CHART_SIMPLE;
	}

	/**
	 * Assign the page's 'searchLogger' object
	 * if the 'Search saving' is enabled
	 */
	protected function assignSearchLogger()
	{
		if( !$this->searchSavingEnabled || !$this->searchClauseObj )
			return;

		include_once getabspath("classes/searchParamsLogger.php");
		$this->searchLogger = new searchParamsLogger( $this->tName );

		$this->jsSettings['tableSettings'][$this->tName]['searchSaving'] = true;
		$savedSearches = $this->searchLogger->getSavedSeachesParams();
		if( count($savedSearches) )
		{
			$this->pageHasSavedSearches = true;
			$this->controlsMap["search"]["savedSearches"] = $savedSearches;
			$this->controlsMap["search"]["savedSearchIsRun"] = $this->searchClauseObj->savedSearchIsRun;
		}

		$this->assignSearchSavingButtons();
	}

	/**
	 * @return Boolean
	 */
	public function processSaveSearch()
	{
		// Read Search parameters from the request
		if( postvalue("saveSearch") && postvalue("searchName") && !is_null($this->searchLogger) )
		{
			$searchName = postvalue("searchName");
			$searchParams = $this->getSearchParamsForSaving();
			$this->searchLogger->saveSearch( $searchName, $searchParams );

			$this->searchClauseObj->savedSearchIsRun = true;
			$_SESSION[$this->sessionPrefix.'_advsearch'] = serialize( $this->searchClauseObj );

			echo my_json_encode( $searchParams );
			return true;
		}

		// Delete the saved search
		if( postvalue("deleteSearch") && postvalue("searchName") && !is_null($this->searchLogger) )
		{
			$searchName = postvalue("searchName");
			$this->searchLogger->deleteSearch( $searchName );

			echo my_json_encode( array() );
			return true;
		}

		return false;
	}

	/**
	 * Assign search saving buttons block
	 */
	protected function assignSearchSavingButtons()
	{
		$this->xt->assign('searchsaving_block', true);

		if( $this->listAjax ) {
			$this->xt->assign("saveSeachButton", true);
		}

		if( $this->searchClauseObj->isSearchFunctionalityActivated() ) {
			$this->xt->assign("saveSeachButton", true);
			if( $this->searchClauseObj->savedSearchIsRun ) {
				$this->hideItemType( 'save_search' );
			}
		} elseif( $this->listAjax ) {
			$this->hideItemType( 'save_search' );
		}

		$this->xt->assign("savedSeachesButton", true);

		if( !$this->pageHasSavedSearches )
		{
			if( $this->isPD() )
				$this->hideItemType('saved_searches');
			else
				$this->xt->assign('saveSearchButtonAttrs', $this->dispNoneStyle);
		}
	}

	/**
	 * The searchClauseObj method wrapper
	 * @return Array
	 */
	public function getSearchParamsForSaving()
	{
		return $this->searchClauseObj->getSearchParamsForSaving();
	}

	/**
	 * Get the search fields labels array
	 * @param Array
	 * @return Array
	 */
	protected function getSearchFieldsLabels($searchFields)
	{
		$sFieldLabels = array();
		foreach($searchFields as $sField)
		{
			$sFieldLabels[ $sField ] = $this->pSetSearch->label($sField);
		}
		return $sFieldLabels;
	}

	/**
	 * Add css rules
	 * Wrapper function
	 *
	 * @param &Array data
	 * @param &Array row
	 * @param &Array record
	 */
	function spreadRowStyles(&$data, &$row, &$record)
	{
		$this->spreadRowStyle($data, $row, $record);
		$this->spreadRowCssStyle($data, $row, $record);
	}

	/**
	 * Add css rules to the record fields' "_style" elements if the row's "rowstyle" attribute is set
	 *
	 * @param &Array data
	 * @param &Array row
	 * @param &Array record
	 */
	protected function spreadRowStyle(&$data, &$row, &$record)
	{
		if(!array_key_exists("rowstyle",$row))
			return;
		$style = extractStyle($row["rowstyle"]);
		if($style=="")
			return;
		foreach(array_keys($data) as $field)
		{
			$record[GoodFieldName($field)."_style"] = injectStyle($record[GoodFieldName($field)."_style"], $style);
		}
	}

	/**
	 * Add css rules to the record fields' "_css" elements if the row's "style" attribute is set
	 *
	 * @param &Array data
	 * @param &Array row
	 * @param &Array record
	 */
	protected function spreadRowCssStyle(&$data, &$row, &$record)
	{
		if( !isset($row["style"]) )
			return;

		$style = $row["style"];
		if( trim($style) == "" )
		{
			return;
		}
		foreach(array_keys($data) as $field)
		{
			$record[GoodFieldName($field)."_css"] = $style."; ".$record[GoodFieldName($field)."_css"];
		}
	}

	/**
	 * Set the custom css rules for the current record in process adding
	 * corresponding css rules to the "row_css_rules" string property
	 *
	 * @param string $rowCssRule
	 */
	protected function setRowCssRule($rowCssRule)
	{
		$tdSelector = '[data-record-id="'.$this->recId.'"][data-pageid="' . $this->id . '"]';
		$selectors = ' td'.$tdSelector.$tdSelector;
		if( $this->listGridLayout == gltVERTICAL )
			$selectors.= ' td';

		$this->row_css_rules.= $selectors.'{'.$this->getCustomCSSRule( $rowCssRule ).'}';
	}

	/**
	 * Form a cell's custom css rule string
	 * @param String unprocessedCss
	 * @return String
	 */
	protected function getCustomCSSRule($unprocessedCss)
	{
		$cssRules = array();
		$rules = explode(";", $unprocessedCss);

		for($i = 0; $i < count($rules); $i++)
		{
			if(trim($rules[$i]) != "")
				$cssRules[] = $rules[$i] . " !important" ;
		}

		return implode(";", $cssRules);
	}

	/**
	 * Check whether such a css rule exists. If It does get the existing class's name.
	 * If It doesn't form a new class name, add a rule to the "fieldCssRules" array and
	 * add a prepared css rule to the "cell_css_rules" string property
	 *
	 * @param String fieldCssRule
	 * @param String fieldName
	 * @return String
	 */
	protected function setFieldCssRule($fieldCssRule, $fieldName)
	{
		if( isset($this->fieldCssRules[ $fieldCssRule ]) )
			return $this->fieldCssRules[ $fieldCssRule ];

		$className = 'rnr-style'.$this->recId.'-'.$fieldName;
		$this->fieldCssRules[ $fieldCssRule ] = $className;

		if( $this->listGridLayout == gltVERTICAL )
			$selectors = ' td[data-record-id][data-record-id][data-record-id][data-record-id] td.'.$className.', .'.$className . ':not([data-label-col])';
		else
			$selectors = ' td[data-record-id][data-record-id][data-record-id][data-record-id].'.$className.', .'.$className;

		$this->cell_css_rules.= $selectors.'{'.$this->getCustomCSSRule( $fieldCssRule ).'}';

		return $className;
	}

	/**
	 * Add a cells' custom style block at the beginning of grid_block
	 */
	function addCustomCss()
	{
		if( !$this->cell_css_rules && !$this->row_css_rules && !$this->mobile_css_rules )
			return;

		$gbl = $this->xt->getVar("grid_block");
		if( $gbl )
		{
			$rules = $this->row_css_rules.$this->cell_css_rules."\n".$this->mobile_css_rules;

			if( !is_array($gbl) )
				$gbl = array("begin" => '<style class="rnr-cells-css" type="text/css"> '.$rules.' </style>');
			else
				$gbl["begin"] = $gbl["begin"]. '<style class="rnr-cells-css" type="text/css"> '.$rules.' </style>';

			$this->xt->assign("grid_block", $gbl);
		}
	}

	/**
	 * Set row css rules
	 *
	 * @param &Array $record
	 */
	function setRowCssRules(&$record)
	{
		if( $record["css"] )
			$this->setRowCssRule( $record["css"] );

		if( $record["hovercss"] )
			$this->setRowHoverCssRule( $record["hovercss"] );
	}

	/**
	 * Set row class names
	 *
	 * @param &Array $record
	 * @param string $field
	 */
	function setRowClassNames(&$record, $field)
	{
		$gFieldName = GoodFieldName( $field );
		$record[ $gFieldName."_class" ] .= $this->fieldClass( $field );

		if( $record[ $gFieldName."_css" ] )
		{
			$className = $this->setFieldCssRule( $record[ $gFieldName."_css" ], $gFieldName );
			$record[ $gFieldName."_class" ] .= " ".$className;
		}

		if( $record[ $gFieldName."_hovercss" ] )
		{
			$classNameHover = $this->setRowHoverCssRule( $record[ $gFieldName."_hovercss" ], $gFieldName );
			if( $classNameHover !== $className)
				$record[ $gFieldName."_class" ] .= " ".$classNameHover;
		}
	}

	/**
	 * Get the page layout's name
	 * @return string
	 */
	function getLayoutName()
	{
		if($this->pageLayout)
			return $this->pageLayout->style;
		else
			return "";
	}

	function getLayoutVersion()
	{
		if($this->pageLayout)
			return $this->pageLayout->version;
		else
			return 2;	//	modern, non-bootstrap layout
	}

	function isBootstrap()
	{
		return $this->getLayoutVersion() >= BOOTSTRAP_LAYOUT;
	}

	function isPD()
	{
		return $this->getLayoutVersion() == PD_BS_LAYOUT;
	}

	/**
	 * addMultiUploadSettings
	 * Adding js-settings for FileField
	 * @intellisense
	 */
	function addMultiUploadSettings()
	{
		$this->settingsMap["fieldSettings"]["autoUpload"] = array("default"=>false, "jsName"=>"autoUpload");
		$this->settingsMap["fieldSettings"]["acceptFileTypes"] = array("default"=>".+$", "jsName"=>"acceptFileTypes");
		$this->settingsMap["fieldSettings"]["CompatibilityMode"] = array("default"=>false, "jsName"=>"compatibilityMode");
		$this->settingsMap["fieldSettings"]["maxFileSize"] = array("default"=>null, "jsName"=>"maxFileSize");
		$this->settingsMap["fieldSettings"]["maxTotalFilesSize"] = array("default"=>null, "jsName"=>"maxTotalFilesSize");
		$this->settingsMap["fieldSettings"]["maxNumberOfFiles"] = array("default"=>1, "jsName"=>"maxNumberOfFiles");

		$this->settingsMap["fieldSettings"]["fileStorageProvider"] = array("default"=>0, "jsName"=>"fileStorageProvider");
	}

	/**
	 * Process master key value.
	 * Copy master keys values to SESSION
	 */
	function processMasterKeyValue()
	{
		// legacy #14869
		if(count($this->masterKeysReq))
		{
			//	copy keys to session
			for($i = 1; $i <= count($this->masterKeysReq); $i++)
			{
				$_SESSION[$this->sessionPrefix."_masterkey".$i] = $this->masterKeysReq[$i];
			}

			if( isset($_SESSION[$this->sessionPrefix."_masterkey".$i]) )
				unset($_SESSION[$this->sessionPrefix."_masterkey".$i]);
		}
		else
		{
			//	read masterKeysReq from session
			$this->masterKeysReq = array();
			$i = 1;
			while( isset( $_SESSION[$this->sessionPrefix."_masterkey".$i] ) ) {
				$this->masterKeysReq[ $i ] = $_SESSION[$this->sessionPrefix."_masterkey".$i];
				++$i;
			}
		}

		if( $this->masterTable )
		{
			$_SESSION[ $this->masterTable . "_masterRecordData" ] = $this->getMasterRecord();
		}
	}

	/**
	 * Display the 'Back to Master' link and master table info
	 */
	public function displayMasterTableInfo()
	{
		$masterTableData = $this->getMasterTableInfo();
		if( !$masterTableData )
			return;

		$backButtonHref = GetTableLink( $masterTableData['mShortTable'], $masterTableData["type"], "a=return" );

		if( !$this->pSet->masterPreview($masterTableData['mDataSourceTable']) )
			return;

		if( ( $this->pageType == PAGE_PRINT || $this->pageType == PAGE_RPRINT || $this->pdfJsonMode() ) && $masterTableData["type"] == PAGE_CHART )
			return;

		$this->pageData["hasMasterList"] = true;

		$detailKeys = $masterTableData['detailKeys'];
		$masterKeys = array();
		for($j = 0; $j < count($detailKeys); $j ++)
		{
			//$masterKeys[]= @$_SESSION[$this->sessionPrefix."_masterkey".($j + 1)];
			$masterKeys[] = $this->masterKeysReq[ $j + 1 ];
		}

		$this->addMasterInfoJSAndCSS( $masterTableData["type"], $masterTableData["mDataSourceTable"], $masterTableData["mShortTable"] );

		$master = array();
		$mrData = $this->getListMasterRecordData( $masterTableData['mDataSourceTable'], $masterKeys );
		$this->genId();
		$params = array("detailtable" => $this->tName, "keys" => $masterKeys, "recId" => $this->recId, "masterRecordData" => $mrData);

		$keys = array();
		foreach( $this->pSet->getTableKeys() as $kf ) {
			$keys[ $kf ] = @$this->masterRecordData[ $kf ];
		}
		$this->pageData["masterPageKeys"] = $keys;

		$xt = new Xtempl();
		//$xt->eventsObject = getEventObject( $masterTableData['mDataSourceTable'] ); //#13517 all snippets in  $globalEvents

		$mParams  = array();
		$mParams["xt"] = &$xt;
		$mParams["flyId"] = $params["recId"];
		$mParams["id"] = $params["recId"];
		$mParams["masterRecordData"] = $mrData;
		$mParams["pushContext"] = false;
		$mParams["masterPageType"] = $masterTableData["type"];
		$mPSet = new ProjectSettings( $mTName, PAGE_LIST );
		$mParams["pageName"] = $mPSet->getDefaultPage( $masterTableData["type"] );
		$mParams["tName"] = $masterTableData['mDataSourceTable'];

		if( $this->pdfJsonMode() )
			$mParams["pdfJson"] = true;

		if( $this->pageType == PAGE_PRINT || $this->pageType == PAGE_RPRINT )
		{
			$mParams["pageType"] = "masterprint";
			if( $mParams["masterPageType"] == PAGE_REPORT )
				$mParams["pageType"] = "masterrprint";

			$mParams["mode"] = PRINT_MASTER;

			include_once(getabspath('classes/printpage.php'));
			include_once(getabspath('classes/printpage_master.php'));
			$masterPage = new PrintPage_Master( $mParams );
		}
		else
		{
			if( $mParams["masterPageType"] == PAGE_CHART )
			{
				$mParams["pageType"] = "masterchart";
				$mParams["pageMode"] = 	CHART_SIMPLE;

				include_once(getabspath('classes/chartpage.php'));
				include_once(getabspath('classes/chartpage_master.php'));
				$masterPage = new ChartPage_Master( $mParams );
			}
			else
			{
				$mParams["pageType"] = "masterlist";

				if( $mParams["masterPageType"] == PAGE_REPORT )
					$mParams["pageType"] = "masterreport";

				$mParams["mode"] = LIST_MASTER;

				include_once(getabspath('classes/listpage.php'));
				include_once(getabspath('classes/listpage_simple.php'));
				include_once(getabspath('classes/listpage_master.php'));
				$masterPage = ListPage::createListPage($masterTableData['mDataSourceTable'], $mParams);
			}
		}
		RunnerContext::push( $masterPage->standaloneContext );

		$masterPage->init();
		if( !$masterPage->pSet->pageName() ) {
			return;
		}
		$masterPage->preparePage();

		foreach( $masterPage->pageData["buttons"] as $b ) {
			$this->AddJSFile( "include/button_".$b.".js" );
		}
		$this->pageData["buttons"] = array_merge( $this->pageData["buttons"], $masterPage->pageData["buttons"] );

		$this->xt->assign("mastertable_block", true);
		$backButtonHref = GetTableLink( $masterTableData['mShortTable'], $masterTableData["type"], "a=return" );

		$masterPage->xt->assign("backtomasterlink_attrs", "href=\"".$backButtonHref."\"");
		$masterPage->xt->assign("backtomasterlink_caption", GetTableCaption( GoodFieldName($masterTableData['mDataSourceTable']) ));

		if( $this->pageType == PAGE_VIEW || $this->pageType == PAGE_ADD || $this->pageType == PAGE_EDIT )
			$masterPage->hideItemType("back_master");

		//$this->xt->assign("master_heading", $masterPage->getMasterHeading() );

		$this->jsSettings["tableSettings"][$this->tName]["masterPageId"] = $masterPage->id;

		$this->xt->assign_method("showmasterfile", $masterPage, "showMaster",array());

		$this->addMasterMapsSettings( $masterTableData['mDataSourceTable'], $masterPage->recId, $mrData, $masterTableData["type"] );

		$this->genId();
		RunnerContext::pop();

	}

	/**
	 * Get master record data for display on master table info
	 * @param String mTName
	 * @param Array masterKeys
	 */
	public function getListMasterRecordData( $mTName, $masterKeys )
	{
		$detailtable = $this->tName;
		$mCiph =  new RunnerCipherer( $mTName );

		$mPSet = new ProjectSettings( $mTName, PAGE_LIST );
		$masterDs = getDataSource( $this->masterTable, $mPSet );
		$filters = array();
		$filters[] = Security::SelectCondition( "S", $mPSet );
		foreach($mPSet->getDetailTablesArr() as $dt)
		{
			if( $dt["dDataSourceTable"] == $detailtable )
			{
				foreach( $dt["masterKeys"] as $i=>$mk )
				{
					$filters[] = DataCondition::FieldEquals( $mk, $masterKeys[ $i ] );
				}
				break;
			}
		}
		$dc = new DsCommand;
		$dc->filter = DataCondition::_And( $filters );
		$dc->reccount = 1;
		return $mCiph->DecryptFetchedArray( $masterDs->getList( $dc )->fetchAssoc() );

	}

	/**
	 * Add master maps settings
	 * @param String mTName		master table name
	 * @param Number recId		master record id
	 * @param &Array data		master record data
	 */
	public function addMasterMapsSettings( $mTName, $recId, &$data, $mPageType )
	{
		if( $mPageType == PAGE_CHART )
			return;

		$masterType = "masterlist";
		if( $mPageType == PAGE_REPORT )
			$masterType = "masterreport";
		else if( $this->isPD() && ( $this->pageType == PAGE_PRINT || $this->pageType == PAGE_RPRINT ) )
			$masterType = "masterprint";

		$mPSet = new ProjectSettings( $mTName, $masterType );

		if( !$data )
			return;

		$haveMap = false;
		foreach( $mPSet->getMasterListFields() as $fName )
		{
			$fieldMapData = $mPSet->getMapData( $fName );
			if( !$fieldMapData )
				continue;

			$mapData = array();
			$mapData['fName'] = $fName;
			$mapData['zoom'] = isset( $fieldMapData['zoom'] ) ? $fieldMapData['zoom'] : '';
			$mapData['type'] = 'FIELD_MAP';
			$mapData['mapFieldValue'] = $data[ $fName ];

			$address = $data[ $fieldMapData['address'] ] ? $data[ $fieldMapData['address'] ] : "";
			$lat =  str_replace(",", ".", ( $data[ $fieldMapData['lat'] ] ? $data[ $fieldMapData['lat'] ] : ''));
			$lng =  str_replace(",", ".", ($data[ $fieldMapData['lng'] ] ? $data[ $fieldMapData['lng'] ] : ''));
			$desc = $data[ $fieldMapData['desc'] ] ? $data[ $fieldMapData['desc'] ] : $address;

			$mapData['markers'][] = array(
				'address' => $address,
				'lat' => $lat,
				'lng' => $lng,
				/*'link' => $viewLink,*/
				'desc' => $desc,
				'keys' => $keys,
				'mapIcon' => $mPSet->getMapIcon($fName, $data)
			);

			$mapId = 'littleMap_'.GoodFieldName( $fName ).'_'.$recId;
			$this->googleMapCfg['mapsData'][ $mapId ] = $mapData;
			$this->googleMapCfg['fieldMapsIds'][] = $mapId;

			$haveMap = true;
		}

		if( $haveMap )
		{
			$this->googleMapCfg['isUseGoogleMap'] = true;
			$this->googleMapCfg['isUseFieldsMaps'] = true;
		}
	}

	/**
	 * Add to the page master info page's extra js/css files
	 * @param String mPageType			the master page type
	 * @param String mTableName			the master page data source table name
	 * @param String mShortTableName	the master page short table name
	 */
	protected function addMasterInfoJSAndCSS( $mPageType, $mTableName, $mShortTableName )
	{
		if( $mPageType == PAGE_CHART )
			$mastertype = "masterchart";
		elseif( $mPageType == PAGE_REPORT )
			$mastertype = "masterreport";
		else
		{
			$mastertype = "masterlist";
			if( $this->isPD() && ( $this->pageType == PAGE_PRINT || $this->pageType == PAGE_RPRINT ) )
				$mastertype = "masterprint";
		}

		if( $mPageType != PAGE_CHART )
		{
			include_once getabspath('classes/controls/ViewControlsContainer.php');
			$viewControls = new ViewControlsContainer(new ProjectSettings($mTableName, $mastertype), $mastertype);

			$viewControls->addControlsJSAndCSS();
			$this->includes_js = array_merge($this->includes_js, $viewControls->includes_js);
			$this->includes_jsreq = array_merge($this->includes_jsreq, $viewControls->includes_jsreq);
			$this->includes_css = array_merge($this->includes_css, $viewControls->includes_css);

			$this->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;
		}

		$layout = GetPageLayout( $mTableName, $mastertype );
		if( $layout )
		{
			$layoutMobile = isPageLayoutMobile( GetTemplateName($mShortTableName, $mastertype) );
			$this->AddCSSFile( $layout->getCSSFiles(isRTL(), $layoutMobile, $this->pdfMode != "" ) );
		}
	}

	/**
	 * Get master record
	 * User API function
	 *
	 * @return Array
	 * @intellisense
	 */
	function getMasterRecord()
	{
		if( $this->masterRecordData )
			return $this->masterRecordData;

		if( !$this->masterTable )
			return null;

		$masterPSet = new ProjectSettings($this->masterTable, PAGE_LIST);

		$masterDs = getDataSource( $this->masterTable, $masterPSet );
		$filters = array();
		$filters[] = Security::SelectCondition( "S", $masterPSet );

		$masterTablesInfoArr = $this->pSet->getMasterTablesArr();
		for($i=0; $i < count($masterTablesInfoArr); $i++)
		{
			if( $this->masterTable == $masterTablesInfoArr[$i]['mDataSourceTable'] )
			{
				$masterKeys = $this->getActiveMasterKeys();
				if( !$masterKeys || count( $masterKeys ) != count( $masterTablesInfoArr[$i]['masterKeys'] ) )
					return array();

				for($j=0; $j < count($masterTablesInfoArr[$i]['masterKeys']); $j++)
				{
					$mKey = $masterTablesInfoArr[$i]['masterKeys'][$j];
					$filters[] = DataCondition::FieldEquals( $mKey, $masterKeys[$j] );
				}
				break;
			}
		}

		$dc = new DsCommand;
		$dc->filter = DataCondition::_And( $filters );
		$dc->reccount = 1;
		return $masterDs->getList( $dc )->fetchAssoc();

	}

	/**
	 * Returns the list of master key values read from either request or session
	 * @return Array
	 */
	function getActiveMasterKeys()
	{
		$i = 1;
		$ret = array();
		while(true)
		{
			if( isset( $this->masterKeysReq[$i] ) )
				$ret[] = $this->masterKeysReq[$i];
			/*else if( isset( $_SESSION[$this->sessionPrefix."_masterkey".$i] ) )
				$ret[] = $_SESSION[$this->sessionPrefix."_masterkey".$i];*/
			else
				break;
			++$i;
		}
		return $ret;
	}

	/**
	 * Set Proxy Value
	 * Fill array serverData for using in js OnLoad event
	 *
	 * User function
	 * Using only in events by users
	 *
	 * @param{string} name of data
	 * @param{string} value of data
	 * @intellisense
	 */
	function setProxyValue($name, $value)
	{
		if(!$name)
			return;
		$this->pageData["proxy"][$name] = $value;
	}

	/**
	 * Get Proxy Value
	 *
	 * User function
	 * Using only in events by users
	 *
	 * @param{string} name of data
	 * @return{}
	 * @intellisense
	 */
	function getProxyValue($name)
	{
		if(!$name)
			return null;
		return $this->pageData["proxy"][$name];
	}

	/**
	 * Set template file if it empty
	 * @intellisense
	 */
	function setTemplateFile()
	{
		if( isAdminPage( $this->pageTable) ) {
			$this->templatefile	= GetTemplateName( GetTableURL( $this->pageTable ), $this->pageType);
		}
		if(!$this->templatefile)
		{
			if( $this->pageName ) {
				$pageId = $this->pageName;
			} else {
				$pageId = $this->pSet->getDefaultPage( $this->pageType );
			}
			$this->templatefile	= GetTemplateName( GetTableURL( $this->pageTable ), $pageId);
		}
		$this->xt->set_template($this->templatefile);
	}

	/**
	 * Check is use menu on page
	 * @intellisense
	 */
	function menuAppearInLayout()
	{
		if( !$this->pageLayout )
			return false;
		$menuBricks = array('vmenu', 'vmenu_mobile', 'hmenu', 'bsmenu', 'quickjump');
		foreach( $menuBricks as $b )
		{
			if( $this->isBrickSet( $b ) )
				return true;
		}
		return false;
	}

	/**
	 * Check is need to show menu
	 * @intellisense
	 */
	function isShowMenu()
	{

		if( !$this->menuAppearInLayout() && $this->pageType != PAGE_MENU && $this->pageType != PAGE_ADD  && $this->pageType != PAGE_VIEW && $this->pageType != PAGE_EDIT )
			return false;

		$allowedMenuItems = $this->getAllowedMenuItems();
		if( $allowedMenuItems > 1 )
			return true;

			return false;
	}

	/**
	 * @param String menuName (optional)
	 * @return Number
	 */
	function getAllowedMenuItems( $menuName = "main" )
	{
		$menuNodes = loadMenuNodes( $menuName );
		if( !$menuNodes ) {
			return 0;
		}

		$allowedMenuItems = 0;
		for($i = 0; $i < count($menuNodes); $i++)
		{
			if( $menuNodes[$i]["linkType"] == "Internal" )
			{
				if( menuLinkAvailable($menuNodes[$i]["table"], $menuNodes[$i]["pageType"], $menuNodes[$i]["pageId"]) )
					$allowedMenuItems++;
			}
			elseif( $menuNodes[$i]["linkType"] != "None" || $menuNodes[$i]["type"] != "Group" )
				$allowedMenuItems++;
		}

		if( Security::isAdmin() && $this->pageType == PAGE_MENU )
			$allowedMenuItems++;

		if( $this->isAddWebRep )
			$allowedMenuItems++;

		return $allowedMenuItems;
	}

	/**
	 * Check if user have permission for link
	 * @param {string} table name
	 * @param {string} page type
	 * @return {boolean}
	 * @intellisense
	 */
	function isUserHaveTablePerm($tName, $pageType)
	{
		if( $tName === WEBREPORTS_TABLE )
			return true;
		if(!strlen($tName))
			return false;
		$type = $this->getPermisType($pageType);
		$strPerm = GetUserPermissions($tName);

		if( !strlen($type) ) //temporary #9784 fix
			return false;

		if(strpos($strPerm, $type) !== false)
			return true;

		return false;
	}

	/**
	 * Get type of permission
	 * @param String pageType
	 * @return String
	 * @intellisense
	 */
	function getPermisType($pageType)
	{
		$pageType = strtolower($pageType);
		$type = '';
		if ($pageType == "list" || $pageType == "view" || $pageType == "search" || $pageType == "report" || $pageType == "chart" || $pageType == "dashboard")
			$type = "S";
		elseif ($pageType == "add")
			$type = "A";
		elseif ($pageType == "edit")
			$type = "E";
		elseif ($pageType == "print" || $pageType == "export")
			$type = "P";
		elseif ($pageType == "import")
			$type = "I";
		return $type;
	}



	/**
	 * Clear session kyes
	 * @intellisense
	 */
	function clearSessionKeys()
	{
		if( ($this->pageType == PAGE_LIST || $this->pageType == PAGE_CHART || $this->pageType == PAGE_REPORT || $this->pageType == PAGE_DASHBOARD )
			&& !count($_POST)
			&& (
				IsEmptyRequest()
				|| @$_GET["editType"] == ADD_ONTHEFLY
			)
		)
		{
			$this->unsetAllPageSessionKeys();
		}

		if( $this->pageType == PAGE_LIST && ( $this->mode === LIST_DETAILS || $this->mode === LIST_LOOKUP )
			|| ( $this->pageType == PAGE_REPORT && $this->mode != REPORT_SIMPLE || $this->pageType == PAGE_CHART && $this->mode != CHART_SIMPLE ) )
		{
			unset( $_SESSION[$this->sessionPrefix."_filters"] );
		}
	}

	/**
	 * Unset all session keys started with the page's session prefix
	 * @param String sessionPrefix
	 */
	protected function unsetAllPageSessionKeys( $sessionPrefix = "" )
	{
		if( !$sessionPrefix )
			$sessionPrefix = $this->sessionPrefix;

		$prefixLength =	strlen($sessionPrefix);

		$sess_unset = array();

		foreach($_SESSION as $key => $value)
		{
			if( substr($key, 0, $prefixLength + 1) == $sessionPrefix."_" && strpos(substr($key, $prefixLength + 1), "_") === false )
				$sess_unset[] = $key;
		}

		foreach($sess_unset as $key)
		{
			unset( $_SESSION[ $key ] );
		}
	}

	/**
	 * Set session variables
	 * @intellisense
	 */
	function setSessionVariables()
	{
		//clear session keys
		$this->clearSessionKeys();

		// Process master table value
		//#14869 legacy
		if( $this->masterTable != "" ) {
			$_SESSION[$this->sessionPrefix."_mastertable"] = $this->masterTable;

		}  else if ( $this->masterTable == "" && IsSetKeyInRequest("mastertable") ) {
			$_SESSION[$this->sessionPrefix."_mastertable"] = "";
		} else {
			// #15114 !
			$this->masterTable = $_SESSION[$this->sessionPrefix."_mastertable"];
		}

		// SearchClause class stuff
		if( $this->needSearchClauseObj && !$this->searchClauseObj )
			$this->searchClauseObj = $this->getSearchObject();

		if( $this->searchSavingEnabled && $this->searchClauseObj )
			$this->searchClauseObj->storeSearchParamsForLogging();

		//set session page size
		if(@$_REQUEST["pagesize"])
		{
			$_SESSION[$this->sessionPrefix."_pagesize"] = @$_REQUEST["pagesize"];
			$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;
		}
		//set page size
		$this->pageSize = (integer) $_SESSION[$this->sessionPrefix."_pagesize"];

		if ( isset($_REQUEST["tab"]) )
		{
			$_SESSION[ $this->sessionPrefix . "_currentTab" ] = postvalue("tab");

			// keep page number for print pages #16522
			if( $this->pageType !== PAGE_PRINT && $this->pageType !== PAGE_RPRINT )
				$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;
		}
	}

	/**
	 * Add lookup settings to settings map
	 * Use on list and add pages
	 * @intellisense
	 */
	function addLookupSettings()
	{
		$this->settingsMap["fieldSettings"]["parentFields"] = array("default" => array(), "jsName" => "parentFields");
		$this->settingsMap["fieldSettings"]["LCType"] = array("default" => LCT_DROPDOWN, "jsName" => "lcType");
		$this->settingsMap["fieldSettings"]["LookupTable"] = array("default" => "", "jsName" => "lookupTable");
		$this->settingsMap["fieldSettings"]["SelectSize"] = array("default" => 1, "jsName" => "selectSize");
		$this->settingsMap["fieldSettings"]["Multiselect"] = array("default" => false, "jsName" => "Multiselect");
		$this->settingsMap["fieldSettings"]["LinkField"] = array("default" => "", "jsName" => "linkField");
		$this->settingsMap["fieldSettings"]["DisplayField"] = array("default" => "", "jsName" => "dispField");
		$this->settingsMap["fieldSettings"]["LookupOrderBy"] = array("default" => "", "jsName" => "lookupOrderBy");
		$this->settingsMap["fieldSettings"]["LookupDesc"] = array("default" => false, "jsName" => "lookupDesc");
		$this->settingsMap["fieldSettings"]["freeInput"] = array("default" => false, "jsName" => "freeInput");
		$this->settingsMap["fieldSettings"]["HorizontalLookup"] = array("default" => false, "jsName" => "HorizontalLookup");
		$this->settingsMap["fieldSettings"]["autoCompleteFields"] = array("default" => array(), "jsName" => "autoCompleteFields");
		$this->settingsMap["fieldSettings"]["listPageId"] = array("default" => array(), "jsName" => "listPageId");
		$this->settingsMap["fieldSettings"]["addPageId"] = array("default" => array(), "jsName" => "addPageId");
	}

	/**
	 * Fill global settings
	 * @intellisense
	 */
	function fillGlobalSettings()
	{
		$this->jsSettings["global"] = array();
		foreach($this->settingsMap["globalSettings"] as $key => $val)
			$this->jsSettings["global"][$key] = $val;
		// start augment id from this value
		$this->jsSettings["global"]['idStartFrom'] = $this->flyId;
	}

	/**
	 * Fill table settings
	 * @intellisense
	 */
	protected function fillTableSettings( $table = "", $pSet = null )
	{
		if( !$table )
		{
			$table = $this->tName;
			$pSet = $this->pSet;
		}

		foreach($this->settingsMap["tableSettings"] as $key => $val)
		{
			if( !isset( $val["option"] ) )
				$tData = $pSet->getTableData(".".$key);
			else
				$tData = $pSet->getPageOptionArray( $val["option"] );

			$isDefault = false;
			if(is_array($tData))
				$isDefault = !$tData;
			else if(!is_array($val['default']))
				$isDefault = ($tData == $val['default']);

			if(!$isDefault)
				$this->jsSettings['tableSettings'][ $table ][$val['jsName']] = $tData;
		}
		$this->jsSettings['global']['shortTNames'][ $table ] = GetTableURL( $table );
	}


	/**
	 * @param Array arrFields
	 * @param ProjectSettings pSet
	 * @param String pageType
	 */
	function addFieldsSettings( $arrFields, $pSet, $pageType ) {
		$tableJsSettings = & $this->jsSettings['tableSettings'][ $this->tName ];

		foreach( $arrFields as $fName ) {
			if( !array_key_exists( $fName, $tableJsSettings['fieldSettings'] ) )
				$tableJsSettings['fieldSettings'][ $fName ] = array();
			$fieldJsSettings = &$tableJsSettings['fieldSettings'][ $fName ];

			if( !array_key_exists( $pageType, $fieldJsSettings ) )
				$fieldJsSettings[ $pageType ] = array();
			$fieldPageJsSettings = &$fieldJsSettings[ $pageType ];

			foreach( $this->settingsMap["fieldSettings"] as $key => $val ) {
				$fData = $pSet->getFieldData( $fName, $key );

				if( $key == "weekdayMessage" ) {
					$fData = getCustomMessage( $fData );
				}

				if( $key == "acceptFileTypes" ) {
					if( !$fData ) {
						$fData = ".+$";
					} else {
						$fData = "(" . implode("|", $fData ) . ")$";
					}
				}

				if( $key == "DateEditType" ) {
					//	search panel control
					if( $pageType == PAGE_SEARCH && ( $this->pageType == PAGE_LIST || $this->pageType == PAGE_CHART || $this->pageType == PAGE_REPORT) ||
						$this->pageType == PAGE_SEARCH && $this->mode == SEARCH_LOAD_CONTROL )
					{
						//	show edit box date in search panel in Bootstrap layouts
						if( $fData == EDIT_DATE_DD )
							$fData = EDIT_DATE_SIMPLE;
						else if( $fData == EDIT_DATE_DD_DP )
							$fData = EDIT_DATE_SIMPLE_DP;
						else if( $fData == EDIT_DATE_DD_INLINE )
							$fData = EDIT_DATE_SIMPLE_INLINE;
					}
				}

				if( $key == "validateAs" && !$this->detailsKeyField( $fName ) ) {
					if ( in_array( $pageType, array( PAGE_ADD, PAGE_EDIT, PAGE_REGISTER , PAGE_LOGIN, PAGE_USERINFO ) ) ) {
						$this->fillValidation( $fData, $val, $fieldPageJsSettings );
					}
					continue;
				}

				if( $key == "EditFormat" ) {
					$fData = $this->getEditFormat( $fName, $pSet );
				} elseif( $key == "RTEType" ) {
					$fData = $pSet->getRTEType( $fName );

					if( $fData == "RTECK" ) {
						$this->isUseCK = true;
						$fieldPageJsSettings['nWidth'] = $pSet->getNCols( $fName );
						$fieldPageJsSettings['nHeight'] = $pSet->getNRows( $fName );
					}
				} elseif( $key == "autoCompleteFields" ) {
					$fData = $pSet->getAutoCompleteFields( $fName );
				} elseif( $key == "parentFields" ) {
					$fData = $pSet->getLookupParentFNames( $fName );
				}

				$isDefault = false;
				if( is_array($fData) )
					$isDefault = !$fData;
				else if( !is_array($val['default']) )
					$isDefault = $fData === $val['default'];

				if( !$isDefault )
					$fieldPageJsSettings[ $val['jsName'] ] = $fData;
			}

			$tableJsSettings['isUseCK'] = $this->isUseCK;

			if( count($this->googleMapCfg) != 0 && $this->googleMapCfg['isUseGoogleMap'] ) {
				$tableJsSettings['isUseGoogleMap'] = true;
				$tableJsSettings['googleMapCfg'] = $this->googleMapCfg;
			}

			$lookupTableName = $pSet->getLookupTable($fName);
			if( $lookupTableName )
				$this->jsSettings['global']['shortTNames'][ $lookupTableName ] = GetTableURL($lookupTableName);

			if( $pSet->getEditFormat($fName) == 'Time' )
				$this->fillTimePickSettings($fName, "", $pSet, $pageType);
		}
	}


	/**
	 * Fill field settings for current table
	 * @intellisense
	 */
	function fillFieldSettings()
	{
		$arrFields = $this->pSet->getFieldsList();
		$this->addFieldsSettings( $arrFields, $this->pSet, $this->pageType );

		$this->addExtraFieldsToFieldSettings();

		if( $this->searchPanelActivated && $this->permis[$this->searchTableName]["search"] )
		{
			$arrFields = $this->pSetSearch->getAllSearchFields();
			$this->addFieldsSettings( $arrFields, $this->pSetSearch, PAGE_SEARCH );
		}
	}

	/**
	 * @param String fName
	 * @return Boolean
	 */
	protected function detailsKeyField( $fName ) {
		$keyFields = $this->pSet->getDetailKeysByMasterTable( $this->masterTable );
		return in_array( $fName, $keyFields );
	}

	/**
	 * Fill preload array for js settings
	 * Use on Add, Edit, Register pages and for search fields only
	 *
	 * @param String fName
	 * @param Array pageFields
	 * @param Array values
	 * @param EditControlsContainer controls 	An instance of the 'EditControlsContainer' class OPTIONAL
	 *
	 * @return boolean|array
	 * @intellisense
	 */
	function fillPreload($fName, $pageFields, $values, $controls = null)
	{
		if( $this->detailsKeyField($fName) || !$this->pSet->useCategory($fName) )
			return false;

		$vals = $this->getRawPreloadData( $fName, $values, $pageFields );

		if( $this->pageType == PAGE_ADD || $this->pageType == PAGE_EDIT || $this->pageType == PAGE_REGISTER )
			return $this->getPreloadArr($fName, $vals);

		return $this->getSearchPreloadArr($fName, $vals, $controls);
	}

	/**
	 * Get parent fields data
	 * @param String fName
	 * @param Array values
	 * @param Array pageFields
	 * @return Array
	 */
	protected function getRawPreloadData( $fName, $values, $pageFields )
	{
		$vals = array();
		$vals[ $fName ] = @$values[ $fName ];


		if( $this->pageType != PAGE_ADD && $this->pageType != PAGE_EDIT && $this->pageType != PAGE_REGISTER )
			return $vals;

		foreach( $this->getLookupParentFieldsNames( $fName ) as $parentFName )
		{
			if( in_array($parentFName, $pageFields) )
				$vals[ $parentFName ] = @$values[ $parentFName ];
		}

		return $vals;
	}

	/**
	 * Get main lookup controls field names for the dependent lookup field
	 *
	 * @param string	$fName The field name
	 * @return Array 	An array of category control field names
	 * @intellisense
	 */
	function getLookupParentFieldsNames( $fName )
	{
		if( ($this->pSet->getEditFormat($fName) != EDIT_FORMAT_LOOKUP_WIZARD || $this->pSet->getEditFormat($fName) != EDIT_FORMAT_RADIO) && !$this->pSet->useCategory($fName) )
			return array();

		return  $this->pSet->getLookupParentFNames( $fName );
	}

	/**
	 * Get lookup display field with wrappers if needed
	 * Used only when we create SQL to access lookup table
	 *
	 * @param string	$field The field
	 * @param object	$connection The connection object
	 * @param object	$pSet The project settings object
	 *
	 * @return String
	 */
	static function sqlFormattedDisplayField($field, $connection, $pSet)
	{
		$displayField = $pSet->getDisplayField($field);
		$lookupType = $pSet->getLookupType( $field );

		if( 0 == strlen($displayField) || $pSet->getCustomDisplay( $field ) )
			return $displayField;

		if( $lookupType != LT_QUERY )
			return $connection->addFieldWrappers( $displayField );

		$lookupPSet = new ProjectSettings( $pSet->getLookupTable( $field ) );
		return RunnerPage::_getFieldSQL( $displayField, $connection, $lookupPSet );
	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 *
	 *
	 * @param string	$field The field name - can be NULL
	 * @param object	$connection The connection object - can be NULL
	 * @param object	$pSet The settings object - can be NULL
	 *
	 * @return string
	 */
	static function _getFieldSQL($field, $connection, $pSet)
	{
		$fname = "";
		if( $pSet )
			$fname = DB::PrepareSQL( $pSet->getFullFieldName($field) );
		global $cman;
		if( !$connection )
			$connection = $cman->getDefault();
		if( !$connection->dbBased() ) {
			return "";
		}
		if ( $fname == "" )
			return $connection->addFieldWrappers($field);

		if (!$pSet->isSQLExpression($field)) {
			// use field name as is with unparsed SQL
			return $connection->addFieldWrappers( $fname );
		}
		return $fname;

	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 * Add decryption clause if Database-based Encryption is set for the field.
	 *
	 *
	 * @param string	$field The field name
	 * @param object	$connection The connection object - can be NULL
	 * @param object	$pSet The settings object - can be NULL
	 * @param object	$cipherer The cypherer object - can be NULL
	 *
	 * @return string
	 */
	static function _getFieldSQLDecrypt($field, $connection, $pSet, $cipherer)
	{
		$fname = RunnerPage::_getFieldSQL( $field, $connection, $pSet );

		if( $cipherer && $pSet )
		{
			if ( $pSet->hasEncryptedFields() && !$cipherer->isEncryptionByPHPEnabled() )
				return $cipherer->GetFieldName($fname, $field);
		}

		return $fname;
	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 * Add decryption clause if Database-based Encryption is set for the field.
	 * Use current page connection and settings
	 *
	 * @param string	$field The field name
	 *
	 * @return string
	 */
	function getFieldSQLDecrypt($field)
	{
		return RunnerPage::_getFieldSQLDecrypt( $field, $this->connection, $this->pSet, $this->cipherer );
	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 * Use current page connection and settings
	 *
	 * @param string	$field The field name
	 *
	 * @return string
	 */
	function getFieldSQL($field)
	{
		return RunnerPage::_getFieldSQL( $field, $this->connection, $this->pSet );
	}

	/**
	 * Returns just the wrapped underlying field name - to be used only in SQL UPDATE and INSERT clauses.
	 * Add wrappers if needed.
	 *
	 * Example
	 ************************************************
	 * Original SQL:
	 * select cars.make as carmake from cars
	 *
	 * getTableField("carmake") -> "`make`"
	 *
	 * Insert/Update SQL:
	 * insert into cars ( `make` ) values ("aaa")
	 * update cars set `make`="aaa"
	 ************************************************
	 * @param string $field The field name
	 *
	 * @return string
	 */
	function getTableField($field)
	{
		$strField = $this->pSet->getStrField($field);

		if( $strField != "" )
			return $this->connection->addFieldWrappers( $strField );

		return $this->getFieldSQL($field);
	}

	/**
	 * Return JS for preload dependent ctrl
	 *
	 * @param string fName
	 * @param Array	vals 	Dependent and main fields' values
	 * @return mixed
	 * @intellisense
	 */
	function getPreloadArr($fName, $vals)
	{
		if( $this->pageType != PAGE_ADD && $this->pageType != PAGE_EDIT && $this->pageType != PAGE_REGISTER )
			return false;

		$parentFNames = $this->getLookupParentFieldsNames( $fName );
		if( !$parentFNames )
			return false;

		if( !$this->checkFieldOnPage( $fName ) )
			return false;

		$categoryFieldAppear = true;
		if( $this->pageType == PAGE_ADD )
		{
			foreach( $parentFNames as $pFName )
			{
				$categoryFieldAppear = $this->checkFieldOnPage( $pFName );
				if( $categoryFieldAppear )
					break;
			}
		}

		$output = array();
		if( !$this->pSet->isFreeInput($fName) )
		{
			$parentFiltersData = array();
			foreach( $parentFNames as $pFName )
			{
				$parentFiltersData[ $pFName ] = @$vals[ $pFName ];
			}

			$output = $this->getControl($fName)->loadLookupContent( $parentFiltersData, @$vals[ $fName ], $categoryFieldAppear );
		}
		else if( isset($vals[ $fName ]) )
			$output = array(0 => @$vals[ $fName ], 1 => @$vals[ $fName ]);

		if( !$output )
			return false;

		$fVal = "";
		if( strlen($vals[ $fName ]) )
			$fVal = $vals[ $fName ];

		if( $this->pageType == PAGE_EDIT && $this->pSet->multiSelect($fName) )
			$fVal = splitLookupValues($fVal);

		return array("vals" => $output, "fVal" => $fVal);
	}

	/**
	 * A stub
	 * @param String fName
	 * @return Boolean
	 */
	protected function checkFieldOnPage( $fName )
	{
		return true;
	}

	/*
	 * Assign for add/edit/view/search page
	 * @intellisense
	 */
	function headerCommonAssign()
	{
		$this->xt->assign( "logo_block", true );
		$this->xt->assign( "collapse_block", true );

		if( Security::hasLogin() ) {
			$this->assignAdmin();
			$provider = Security::currentProvider();
			if( $provider["type"] == stDB ) {
				$this->xt->assign("changepwd_link", true );
			}
		}
	}

	/**
	 * Common assign for diferent mode on list page
	 * Branch classes add to this method its individualy code
	 * @intellisense
	 */
	function commonAssign()
	{
		$this->headerCommonAssign();

		$this->xt->assign("quickjump_attrs", 'class="'.$this->makeClassName("quickjump").'"');

		if( $this->pdfMode == "" )
			$this->xt->assign( "defaultCSS", true );

		$this->xt->assign("more_list", true);

		$this->hideElement("searchpanel");


		$this->prepareCollapseButton();
		$this->prepareBreadcrumbs();

		$stateParams = $this->getStateUrlParams();
		if( $stateParams ) {
			$this->xt->assign("stateLink", "&" . $this->getStateUrlParams() );
			$this->xt->assign("stateLink_full", "?" . $this->getStateUrlParams() );
		}
	}

	function prepareCollapseButton()
	{
		if( !$this->pSet->hasVerticalBar() ) {
			return;
		}
		if( $_COOKIE["collapse_leftbar"] ) {
			$this->xt->assign("leftbar_class", "r-left-collapsed");
			$this->hideItemType('collapse_button');
			$this->hideItemType('logo');
		} else {
			$this->hideItemType('expand_button');
		}
	}

	/**
	 * Return JS for preload dependent ctrl for search fields
	 *
	 * @param String fName 		field name
	 * @param Array vals 		dependent and main fields' values
	 * @param Object contorls
	 * @return Mixed
	 * @intellisense
	 */
	function getSearchPreloadArr($fName, $vals, $controls)
	{
		if( is_null($controls) || $this->pSet->getEditFormat($fName) != EDIT_FORMAT_LOOKUP_WIZARD || !$this->pSet->useCategory( $fName ) )
			return false;

		$parentsFieldsData = array();
		$searchApplied = $this->searchClauseObj->searchStarted();

		foreach( $this->pSet->getParentFieldsData( $fName ) as $cData )
		{
			$parentField = $cData['main'];
			if( !$this->searchFieldAppearsOnPage( $parentField ) )
				continue;
			$parentsFieldsData[ $parentField ] = "";
			if( $searchApplied )
			{
				$categoryFieldParams = $this->searchClauseObj->getSearchCtrlParams( $parentField );

				if( count($categoryFieldParams) )
					$parentsFieldsData[ $parentField ] = $categoryFieldParams[0]['value1'];
			}
			else
			{
				$defaultValue = GetDefaultValue( $parentField, PAGE_SEARCH, $this->tName);
				if( strlen($defaultValue) )
					$parentsFieldsData[ $parentField ] = $defaultValue;
			}
		}

		$output = $controls->getControl( $fName )->loadLookupContent( $parentsFieldsData, $vals[ $fName ], count($parentsFieldsData) > 0 );

		if( !$output )
			return false;

		$fVal = $vals[ $fName ];
		if( $this->pSet->multiSelect( $fName ) )
			$fVal = splitLookupValues( $fVal );

		return array("vals" => $output, "fVal" => $fVal);
	}

	/**
	 * Add additional fields to field settings
	 * Use only for:
	 * 		register page,
	 * 		changepwd page,
	 * 		admin members page with Active Directory
	 * @intellisense
	 */
	function addExtraFieldsToFieldSettings($isCaptcha = false)
	{
		$extraParams = array('fields' => array());

		if($isCaptcha)
		{
			$extraParams['fields'] = array($this->getCaptchaFieldName());
			$extraParams['format'] = 'Text Field';
		}
		else if($this->pageType == PAGE_REGISTER )
		{
			$extraParams['fields'] = array('confirm');
			$extraParams['format'] = 'Password';
		}
		else if($this->pageType == PAGE_CHANGEPASS)
		{
			$extraParams['fields'] = array('oldpass', 'newpass', 'confirm');
			$extraParams['format'] = 'Password';
		}
		else if( /* ??? */ $this->mode == MEMBERS_PAGE )
		{
			$extraParams['fields'] = array('displayname', 'name', 'category');
			$extraParams['format'] = 'Text Field';
		}

		foreach($extraParams['fields'] as $fName)
		{
			$arrSetVals = array();
			$arrSetVals['strName'] = $fName;
			$arrSetVals['EditFormat'] = $extraParams['format'];
			$arrSetVals['validation']['validationArr'][] = 'IsRequired';
			$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$fName][$this->pageType] = $arrSetVals;
		}
	}

	/**
	 * Fill validation for current field
	 * @intellisense
	 */
	function fillValidation($fData, $val, &$arrSetVals)
	{
		$fData = $this->refineVaidationData( $fData );

		if( !$fData )
			return;

		if( count( $fData['basicValidate'] ) )
			$arrSetVals[ $val['jsName'] ]["validationArr"] = $fData['basicValidate'];

		if( array_key_exists("customMessages", $fData) && count( $fData["customMessages"] ) )
			$arrSetVals[ $val['jsName'] ]["customMessages"] = $fData["customMessages"];

		if( array_key_exists("regExp", $fData) )
			$arrSetVals[ $val['jsName'] ]["regExp"] = $fData["regExp"];

		if( in_array("IsTime", $fData['basicValidate']) )
		{
			if( !$this->timeRegexp )
				$this->timeRegexp = $this->getTimeRegexp();

			$arrSetVals[ $val['jsName'] ]["regExp"] = $this->timeRegexp;
		}
	}

	/**
	 * Remove excessive validation for page
	 */
	protected function refineVaidationData( &$fData )
	{
		return $fData;
	}

	/**
	 * Get the local time format regexp
	 */
	function getTimeRegexp()
	{
		global $locale_info;

		$timeDelimiter = $locale_info["LOCALE_STIME"];
		$timeFormat = $locale_info["LOCALE_STIMEFORMAT"];
		$is24hoursFormat = $locale_info["LOCALE_ITIME"] == "1";
		$leadingZero = $locale_info["LOCALE_ITLZERO"] == "1";
        if($locale_info["LOCALE_ITIME"] == "0")
			$designators = preg_quote($locale_info["LOCALE_S1159"],"")."|".preg_quote($locale_info["LOCALE_S2359"],"");

		if($is24hoursFormat)
		{
			if($leadingZero)
				$timeFormat = str_replace("HH", "(?:0[0-9]|1[0-9]|2[0-3])" ,$timeFormat);
			else
				$timeFormat = str_replace("H", "(?:[1-9]|1[0-9]|2[0-3])", $timeFormat);
		}
		else
		{
			if($leadingZero)
				$timeFormat = str_replace("hh", "(?:0[1-9]|1[0-2])",$timeFormat);
			else
				$timeFormat = str_replace("h", "(?:[1-9]|1[0-2])",$timeFormat);

			$timeFormat = str_replace("tt", "[\s]{0,2}(?:".$designators."|am|pm)[\s]{0,2}", $timeFormat);
        }
		$timeSep = $timeDelimiter == ":" ? ":" : "(?:".$timeDelimiter."|:)";
		$timeFormat = str_replace($timeDelimiter."mm".$timeDelimiter."ss", "(?:".$timeSep."[0-5][0-9](?:".$timeSep."[0-5][0-9])?)?", $timeFormat);
        $timeFormat = "^".str_replace(" ", "[\s]{0,2}", $timeFormat)."$";
		return $timeFormat;
	}

	/**
	 * Fill all settings for current table
	 * @intellisense
	 */
	function fillSettings()
	{
		$this->fillGlobalSettings();
		$this->fillTableSettings();
		$this->fillFieldSettings();
	}

	/**
	 * Fill controls map
	 * For add, edit, search pages - controls
	 *
	 * @param Array arr			an array of settings for one control
	 * @param Boolean addSet  	indicates if to add additional settings to control or not
	 * @param String fName 		(optional) a field's name
	 * @intellisense
	 */
	function fillControlsMap($arr, $addSet = false, $fName="")
	{
		if(!$addSet)
		{
			foreach($arr as $key=>$val)
			{
				initArray($this->controlsMap, $key);
				$this->controlsMap[$key][] = $val;
			}

			return;
		}

		foreach($arr as $key=>$val)
		{
			foreach($val as $vkey=>$vval)
			{
				if(!$fName)
					$this->controlsMap[$key][ count($this->controlsMap[$key]) - 1 ][$vkey] = $vval;
				else
				{
					for($i = 0; $i < count($this->controlsMap[$key]); $i++)
					{
						if($this->controlsMap[$key][$i]['fieldName']==$fName)
						{
							$this->controlsMap[$key][$i][$vkey] = $vval;
							break;
						}
					}
				}
			}
		}
	}

	/**
	 * Fill field settings for current table
	 * @intellisense
	 */
	function fillControlsHTMLMap()
	{
		$this->controlsHTMLMap[$this->tName] = array();
		$this->controlsHTMLMap[$this->tName][$this->pageType] = array();
		$this->controlsHTMLMap[$this->tName][$this->pageType][$this->id] = array();

		$this->controlsMap['gMaps'] = $this->googleMapCfg;
		if($this->searchClauseObj)
		{
			if(!isset($this->controlsMap["search"]))
			{
				$this->controlsMap["search"] = array();
			}
			$this->controlsMap["search"]["usedSrch"] = $this->searchClauseObj->searchStarted();
		}

		foreach($this->controlsMap as $key=>$val)
		{
			$this->controlsHTMLMap[$this->tName][$this->pageType][$this->id][$key] = $val;
		}

		$this->viewControlsHTMLMap[$this->tName] = array();
		$this->viewControlsHTMLMap[$this->tName][$this->pageType] = array();
		$this->viewControlsHTMLMap[$this->tName][$this->pageType][$this->id] = array();

		foreach($this->viewControlsMap as $key => $val)
			$this->viewControlsHTMLMap[$this->tName][$this->pageType][$this->id][$key] = $val;
	}

	/**
	 * Fill jsSettings and controlsHTMLMap arrays for current table
	 * @intellisense
	 */
	function fillSetCntrlMaps()
	{
		if( $this->isControlsMapFilled )
			return;

		$this->fillSettings();
		$this->fillControlsHTMLMap();
		$this->isControlsMapFilled = true;
	}

	/**
	 * Fill timepicker settings for current field
	 * @intellisense
	 */
	function fillTimePickSettings( $field,  $value = "", $pSet = null, $pageType = "", $settFieldName = "" )
	{
		if(is_null($pSet))
			$pSet = $this->pSet;
		if($pageType == "")
			$pageType = $this->pageType;
		
		if( !strlen( $settFieldName ) )
			$settFieldName = $field;
		
		$timeAttrs = $pSet->getFormatTimeAttrs($field);
		if( !!$timeAttrs && $timeAttrs["useTimePicker"])
		{
			$convention = $timeAttrs["hours"];
			$locAmPm = getLacaleAmPmForTimePicker($convention, true);
			$tpVal = getValForTimePicker($pSet->getFieldType($field),$value,$locAmPm['locale']);

			$range = array();
			if($convention==24)
			{
				for($h = 0;$h < $convention;$h ++)
					$range[]= $h;
			}
			else
			{
				for($h = 1;$h <= $convention;$h ++)
					$range[] = $h;
			}

			$minutes = array();
			for($m = 0; $m < 60; $m += $timeAttrs["minutes"])
				$minutes[] = $m;

			//settings
			$timePickSet = array('convention'=>$convention,
								 'range'=>$range,
								 'apm'=>array($locAmPm['am'],$locAmPm['pm']),
								 'rangeMin'=>$minutes,
								 'locale'=>$locAmPm['locale'],
								 'showSec'=>$timeAttrs["showSeconds"],
								 'minutes'=>$timeAttrs["minutes"]);

			if( $tpVal['dbtime'] )
				$timePickSet['hover'] = array('0'=>$tpVal['dbtime'][3],'1'=>$tpVal['dbtime'][4],'2'=>$tpVal['dbtime'][5]);

			if( !array_key_exists($settFieldName, $this->jsSettings['tableSettings'][$this->tName]['fieldSettings']) ) {
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$settFieldName] = array();
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$settFieldName][$pageType] = array();
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$settFieldName][$pageType]['timePick'] = $timePickSet;
			}
			
			if( !array_key_exists("timePick", $this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$settFieldName][$pageType]) ) {
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$settFieldName][$pageType]['timePick'] = $timePickSet;
			}

			$this->fillControlsMap(array('controls'=>array('open'=>($tpVal['val'] ? true : false))),true,$field);
		}
	}

	/**
	 * Assign body end
	 * @intellisense
	 */
	function assignBodyEnd($params = "")
	{
		global $pagesData;
		$this->fillSetCntrlMaps();
		echo "<script>
			window.controlsMap = ".my_json_encode($this->controlsHTMLMap).";
			window.viewControlsMap = ".my_json_encode($this->viewControlsHTMLMap).";
			window.settings = ".my_json_encode($this->jsSettings).";
			Runner.applyPagesData( ".my_json_encode( $pagesData )." );
			</script>\r\n";

		echo "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js?40608")."\"></script>\r\n";
		echo "<script>".$this->PrepareJS()."</script>";
	}

	/**
	 * Generates new id, same as flyId on front-end
	 *
	 * @return int
	 * @intellisense
	 */
	function genId()
	{
		$this->flyId++;
		$this->recId = $this->flyId;
		return $this->flyId;
	}

	/**
	 * Get page type
	 * @intellisense
	 */
	function getPageType()
	{
		return $this->pageType;
	}

	/**
	 * Add js files for page
	 * @intellisense
	 */
	function AddJSFileNoExt($file)
	{
		$this->includes_js[] = GetRootPathForResources($file);
	}

	function AddJSFile($file, $req1 = "", $req2 = "", $req3 = "")
	{
		$rootPath = GetRootPathForResources($file);
		$this->includes_js[] = $rootPath;
		if($req1!="")
		{
			$this->includes_jsreq[$rootPath] = array(GetRootPathForResources($req1));
		}
		if($req2!="")
		{
			$this->includes_jsreq[$rootPath][] = GetRootPathForResources($req2);
		}
		if($req3!="")
		{
			$this->includes_jsreq[$rootPath][] = GetRootPathForResources($req3);
		}
	}

	/**
	 * Grab all js files
	 * @intellisense
	 */
	function grabAllJsFiles()
	{
		$jsFiles = array();
		foreach($this->includes_js as $file)
		{
			$jsFiles[$file] = array();
			if(array_key_exists($file, $this->includes_jsreq))
				$jsFiles[$file] = $this->includes_jsreq[$file];
		}
		$this->includes_js = array();
		$this->includes_jsreq = array();
		return $jsFiles;
	}

	/**
	 * Grab all css files
	 * @intellisense
	 */
	function copyAllJsFiles($jsFiles)
	{
		foreach($jsFiles as $file=>$reqFiles)
		{
			$this->includes_js[] = $file;

			if(array_key_exists($file,$this->includes_jsreq))
			{
				foreach($reqFiles as $rFile)
				{
					if(array_key_exists($rFile,$this->includes_jsreq[$file]))
						continue;
					$this->includes_jsreq[$file][] = $rFile;
				}
			}
			else
				$this->includes_jsreq[$file] = $reqFiles;
		}
	}

	/**
	 * Add css files for page
	 * @intellisense
	 */
	function AddCSSFile($file)
	{
		if(is_array($file))
		{
			foreach($file as $f)
			{
				$this->includes_css[] = $f;
			}
		}
		else
			$this->includes_css[] = $file;
	}

	function successPageType() {
		switch( $this->pageType ) {
			case PAGE_CHANGEPASS:
				return "changepwd_success";
			case PAGE_REGISTER:
				return "register_success";
			case PAGE_REMIND:
				return "remind_success";
		}
		return $this->pageType;
	}


	function switchToSuccessPage()
	{
		$this->pSet = new ProjectSettings($this->tName, $this->pageType, $this->pageName, GLOBAL_PAGES );
		$this->pageName = $this->pSet->getDefaultPage( $this->successPageType() );
		$this->pSet = new ProjectSettings($this->tName, $this->pageType, $this->pageName, GLOBAL_PAGES );
		$this->templatefile = "";
		$this->setTemplateFile();
		$this->pageLayout = GetPageLayout( GLOBAL_PAGES, $this->pageName );
	}


	/**
	 * Grab all css files
	 * @intellisense
	 */
	function grabAllCSSFiles()
	{
		$cssFiles = $this->includes_css;
		$this->includes_css = array();
		return $cssFiles;
	}
	/**
	 * Copy all css files
	 * @intellisense
	 */
	function copyAllCssFiles($cssFiles)
	{
		foreach($cssFiles as $file)
			$this->AddCSSFile($file);
	}

	/**
	 * Load js and css files
	 * @intellisense
	 */
	function LoadJS_CSS()
	{
		$this->includes_js = array_unique($this->includes_js);
		$this->includes_css = array_unique($this->includes_css);
		$out = "";
		foreach($this->includes_js as $file)
		{
			$out .= "Runner.util.ScriptLoader.addJS(['".$file."']";
			if(array_key_exists($file,$this->includes_jsreq))
			{
				foreach($this->includes_jsreq[$file] as $req)
					$out.=",'".$req."'";
			}
			$out.=");\r\n";
		}
		$out.= " Runner.util.ScriptLoader.load();";
		return $out;
	}

	/**
	 * Set languge params for page
	 * @intellisense
	 */
	function setLangParams()
	{
	}

	/**
	 * Add general js or css files for pages
	 * @intellisense
	 */
	function addCommonJs()
	{
		if ($this->pSet->isAddPageEvents() && $this->pageType != PAGE_LOGIN && $this->shortTableName != "")
		{
			$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js");
		}
		if ($this->pageType == PAGE_MENU || $this->pageType == PAGE_REGISTER || $this->pageType == PAGE_USERINFO || $this->pageType == PAGE_LOGIN || $this->pageType == PAGE_CHANGEPASS || $this->pageType == PAGE_REMIND)
		{
			$this->AddJSFile("include/runnerJS/events/globalevents.js");
		}

		if($this->isUseCK)
			$this->AddJSFile("plugins/ckeditor/ckeditor.js");

		$this->addControlsJSAndCSS();
		
		$this->AddCSSFile("styles/bundle.css");	
	}

	function addControlsJSAndCSS()
	{
		$this->controls->addControlsJSAndCSS();
		$this->viewControls->addControlsJSAndCSS();
	}

	/**
	 * Prepare js code
	 * @intellisense
	 */
	function PrepareJS()
	{
		return $this->LoadJS_CSS();
	}

	function addButtonHandlers()
	{
		if ( !$this->pSet->isAddPageEvents() || $this->shortTableName == "")
			return false;

		$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js");
		return true;
	}

	function setGoogleMapsParams($fieldsArr)
	{
		$this->googleMapCfg['isUseMainMaps'] = $this->pSet->hasMap();
		$this->googleMapCfg['isUseFieldsMaps'] = $this->pSet->isUseFieldsMaps();

		if ($this->googleMapCfg['isUseFieldsMaps'])
		{
			foreach($fieldsArr as $f)
			{
				if ($f['viewFormat'] == FORMAT_MAP)
				{
					$this->googleMapCfg['fieldsAsMap'][$f['fName']] = array();
					$fieldMap = $this->pSet->getMapData($f['fName']);

					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['width'] = $fieldMap['width'] ? $fieldMap['width'] : 0;
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['height'] = $fieldMap['height'] ? $fieldMap['height'] : 0;
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['addressField'] = $fieldMap['address'];
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['latField'] = $fieldMap['lat'];
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['lngField'] = $fieldMap['lng'];
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['descField'] = $fieldMap['desc'];
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['mapIcon'] = $this->pSet->getMapIcon($f['fName'], $this->data);
					if (isset($fieldMap['zoom'])){
						$this->googleMapCfg['fieldsAsMap'][$f['fName']]['zoom'] = $fieldMap['zoom'];
					}
				}
			}
		}
		$this->googleMapCfg['isUseGoogleMap'] = $this->googleMapCfg['isUseMainMaps'] || $this->googleMapCfg['isUseFieldsMaps'];
		$this->googleMapCfg['tName'] = $this->tName;
	}

	function fillAdvancedMapData()
	{
		$advMaps = array();
		$clustering = false;

		foreach ($this->googleMapCfg['mapsData'] as $mapId => $mapData)
		{
			if( $this->googleMapCfg['mapsData'][$mapId]['showAllMarkers'] )
				$advMaps[] = $mapId;
			if( $this->googleMapCfg['mapsData'][$mapId]['clustering'] && $this->mapProvider == GOOGLE_MAPS )
				$clustering = true;
		}

		if( !$advMaps )
			return;

		if( $clustering )
			$this->AddJSFile("include/markerclusterer.js");

		$tKeys = $this->pSet->getTableKeys();

		$dc = $this->queryCommand;
		if( !$dc ) {
			$dc = $this->getSubsetDataCommand();
		}
		$dc->reccount = -1;
		$dc->startRecord = 0;
		$rs = $this->dataSource->getList( $dc );

		$recId = $this->recId;
		while( $data = $rs->fetchAssoc() )
		{
			$editlink = "";
			$keys = array();
			for($i = 0; $i < count($tKeys); $i ++) {
				if($i != 0) {
					$editlink.= "&";
				}
				$editlink.= "editid".($i + 1)."=".runner_htmlspecialchars(rawurlencode($data[$tKeys[$i]]));
				$keys[$i] = $data[$tKeys[$i]];
			}

			foreach( $advMaps as $mapId )
				$this->addBigGoogleMapMarker($mapId, $data, $keys,  ++$recId, $editlink );
		}

	}

	/**
	 *
	 */
	function addBigGoogleMapMarkers(&$data, $keys, $editLink = '')
	{
		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
		{
			//	skip heatmaps
			if( $this->fetchMapMarkersInSeparateQuery( $mapId ) )
				continue;
			$this->addBigGoogleMapMarker( $mapId, $data, $keys, $this->recId, $editLink);
		}
	}

	function fetchMapMarkersInSeparateQuery( $mapId )
	{
		return ($this->googleMapCfg['mapsData'][$mapId]['heatMap'] || $this->googleMapCfg['mapsData'][$mapId]['clustering'])
			&& ( $this->mapProvider == GOOGLE_MAPS || $this->mapProvider == HERE_MAPS || $this->mapProvider == MAPQUEST_MAPS );
	}


	function addBigGoogleMapMarker($mapId, &$data, $keys, $recId, $editLink = '')
	{
		$latF = $this->googleMapCfg['mapsData'][$mapId]['latField'];
		$lngF = $this->googleMapCfg['mapsData'][$mapId]['lngField'];
		$addressF = $this->googleMapCfg['mapsData'][$mapId]['addressField'];

		if( !strlen( $data[ $latF ] ) && !strlen( $data[ $lngF ] )&& !strlen( $data[ $addressF ] ) )
			return;

		$descF = $this->googleMapCfg['mapsData'][$mapId]['descField'];
		$markerAsEditLink = $this->googleMapCfg['mapsData'][$mapId]['markerAsEditLink'];
		$weightF = $this->googleMapCfg['mapsData'][$mapId]['weightField'];

		$markerArr = array();
		$markerArr['lat'] = str_replace(",", ".", ($data[$latF] ? $data[$latF] : ''));
		$markerArr['lng'] = str_replace(",", ".", ($data[$lngF] ? $data[$lngF] : ''));
		$markerArr['address'] = $data[$addressF] ? $data[$addressF] : '';
		$markerArr['desc'] = $data[$descF] ? $data[$descF] : $markerArr['address'];
		if( $weightF )
			$markerArr['weight'] = str_replace(",", ".", ($data[$weightF] ? $data[$weightF] : ''));

		if( $markerAsEditLink && $this->editAvailable())
			$markerArr['link'] = GetTableLink( $this->shortTableName, "edit", $editLink . '&' . $this->getStateUrlParams() );
		elseif($this->viewAvailable())
			$markerArr['link'] = GetTableLink( $this->shortTableName, "view", $editLink . '&' . $this->getStateUrlParams() );

		$markerArr['recId'] = $recId;
		$markerArr['keys'] = $keys;

		if( $this->googleMapCfg['mapsData'][ $mapId ]['dashMap'] )
		{
			$markerArr['mapIcon'] = $this->dashSet->getDashMapIcon( $this->dashElementName, $data );
			$markerArr["masterKeys"] = $this->getDetailTablesMasterKeys( $data );
		}
		else
		{
			//	big map on a List page
			if( $this->googleMapCfg['mapsData'][$mapId]['markerField'] )
				$markerArr['mapIcon'] = $data[ $this->googleMapCfg['mapsData'][$mapId]['markerField'] ];
			if( !$markerArr['mapIcon'] && $this->googleMapCfg['mapsData'][$mapId]['markerIcon'] )
				$markerArr['mapIcon'] = $this->googleMapCfg['mapsData'][$mapId]['markerIcon'];
		}

		$this->googleMapCfg['mapsData'][$mapId]['markers'][] = $markerArr;
	}

	/**
	 * @param &Array data
	 * @return Array
	 *  {
			detailTableName1 : { masterkey1 : ..., masterkey2: ..., ... },
			detailTableName2 : { masterkey1 : ..., masterkey2: ..., ... },
			...
		}
	 */
	protected function getDetailTablesMasterKeys( $data )
	{
		$masterKeys = array();

		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++)
		{
			$detailTableData = $this->allDetailsTablesArr[$i];
			$dDataSourceTable = $detailTableData['dDataSourceTable'];

			if( $detailTableData['dType'] == PAGE_LIST && !$this->permis[ $dDataSourceTable ]["search"] )
				continue;

			$masterKeys[ $dDataSourceTable ] = array();
			foreach($this->masterKeysByD[$i] as $idx => $m)
			{
				$curM = $m;
				if( $this->pageType == PAGE_REPORT )
					$curM = goodFieldName($curM).'_dbvalue';

				$masterKeys[ $dDataSourceTable ]["masterkey".($idx + 1)] = $data[ $curM ];
			}
		}

		return $masterKeys;
	}

	/**
	 * call addGoogleMapData before call  proccessRecordValue!!!
	 * @param String fName
	 * @param &Array data
	 * @param Array keys
	 * @param String editLink
	 * @return Array
	 */
	function addGoogleMapData($fName, &$data, $keys = array(), $editLink = '')
	{
		$fieldMap = $this->pSet->getMapData( $fName );

		$mapData = array();
		$mapData['fName'] = $fName;
		$mapData['zoom'] = isset( $fieldMap['zoom'] ) ? $fieldMap['zoom'] : '';
		$mapData['type'] = 'FIELD_MAP';
		$mapData['mapFieldValue'] = $data[ $fName ];

		$address = $data[ $fieldMap['address'] ] ? $data[ $fieldMap['address'] ] : "";
		$lat =  str_replace(",", ".", ( $data[ $fieldMap['lat'] ] ? $data[ $fieldMap['lat'] ] : ''));
		$lng =  str_replace(",", ".", ($data[ $fieldMap['lng'] ] ? $data[ $fieldMap['lng'] ] : ''));
		$desc = $data[ $fieldMap['desc'] ] ? $data[ $fieldMap['desc'] ] : $address;

		$viewLink = "";
		if ( $this->pageType != PAGE_VIEW && $this->viewAvailable() )
			$viewLink = GetTableLink( $this->shortTableName, "view", $editLink . '&' . $this->getStateUrlParams() );

		$mapData['markers'][] = array(
			'address' => $address,
			'lat' => $lat,
			'lng' => $lng,
			'link' => $viewLink,
			'desc' => $desc,
			'recId' => $this->recId,
			'keys' => $keys,
			'mapIcon' => $this->pSet->getMapIcon( $fName, $data )
		);

		$mapId = 'littleMap_'.GoodFieldName( $fName ).'_'.$this->recId;
		$this->googleMapCfg['mapsData'][ $mapId ] = $mapData;
		$this->googleMapCfg['fieldMapsIds'][] = $mapId;

		return $this->googleMapCfg['mapsData'][ $mapId ];
	}

	/**
	 * @param &Array data
	 * @return Array
	 */
	protected function getDashMapsIconsData( &$data )
	{
		$mapIconsData =  array();

		if( !$this->dashTName )
			return $mapIconsData;

		foreach( $this->dashSet->getDashboardElements() as $dElem )
		{
			if( $dElem["table"] != $this->tName || $dElem["type"] != DASHBOARD_MAP )
				continue;

			$mapIconsData[ $dElem["elementName"] ]	= $this->dashSet->getDashMapIcon( $dElem["elementName"], $data );
		}

		return $mapIconsData;
	}

	/**
	 * @param &Array data
	 * @return Array
	 */
	protected function getFieldMapIconsData( &$data )
	{
		$iconsData = array();

		if( $this->pSet->isUseFieldsMaps() )
		{
			foreach($this->pSet->getFieldsList() as $f)
			{
				if( $this->pSet->getViewFormat($f) == FORMAT_MAP  )
					$iconsData[ $f ] = $this->pSet->getMapIcon($f, $data);
			}
		}

		return $iconsData;
	}

	function initGmaps()
	{
		if( !$this->googleMapCfg['isUseGoogleMap'] )
			return;

		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
		{
			if ($this->googleMapCfg['mapsData'][$mapId]['showCenterLink'] === 1)
			{
				$this->googleMapCfg['centerLinkText'] = $this->googleMapCfg['mapsData'][$mapId]['centerLinkText'];
				break;
			}
		}

		$this->jsSettings["tableSettings"][$this->tName]["editAvailable"] = $this->editAvailable();
		$this->jsSettings["tableSettings"][$this->tName]["viewAvailable"] = $this->viewAvailable();

		$this->includeOSMfile();
		//	projectPath is added to avoid double loading
		$this->AddJSFile( projectPath() . "include/runnerJS/MapManager.js", "include/runnerJS/ControlConstants.js");
		$this->AddJSFile("include/runnerJS/".$this->getIncludeFileMapProvider(), projectPath() . "include/runnerJS/MapManager.js");

		$this->googleMapCfg['id'] = $this->id;

		if( !$this->googleMapCfg['APIcode'] )
			$this->googleMapCfg['APIcode'] = GetGlobalData("apiGoogleMapsCode","");

		$this->controlsMap['gMaps'] = &$this->googleMapCfg;
	}

	/**
	 * Get geo coordinates by address
	 * @intellisense
	 * @param String values
	 */
	function getGeoCoordinates($address)
	{
		return getLatLngByAddr($address);
	}

	/**
	 * Glue text adress from adress fields
	 * @intellisense
	 * @param Array values
	 */
	function glueAddressByAddressFields($values)
	{
		$address = "";
		$geoData = $this->pSet->getGeocodingData();

		foreach ($geoData["addressFields"] as $field )
		{
			$addressField = trim($values[$field]);
			if ( isset($values[$field]) && strlen($addressField) )
			{
				$address .= $addressField . " ";
			}
		}

		return trim($address);
	}

	/**
	 * Update 'latitude' and 'longitude' field's values
	 * @intellisense
	 * @param &Array values
	 * @param Array oldvalues (optional)
	 */
	function setUpdatedLatLng(&$values, $oldvalues = null)
	{
		//check if 'UpdateLatLng' is ticked for a table
		if( !$this->pSet->isUpdateLatLng() )
			return;

		$mapData = $this->pSet->getGeocodingData();
		$address = $this->glueAddressByAddressFields($values);

		if( $address == "" )
			return;

		if ( !is_null($oldvalues) ) {
			$oldaddress = $this->glueAddressByAddressFields($oldvalues);
		}
		else if ( trim($values[$mapData['latField']]) != "" && trim($values[$mapData['lngField']]) != ""  )
		{
			return;
		}

		// check if the actual map's address value were added/changed and lat/lng not empty
		if ( $oldvalues && trim($oldvalues[$mapData['latField']]) != "" && trim($oldvalues[$mapData['lngField']]) != "" && $address == $oldaddress )
			return;

		//get updated coordinates
		$location = $this->getGeoCoordinates($address);
		if( !$location )
			return;

		$values[ $mapData['latField'] ] = $location['lat'];
		$values[ $mapData['lngField'] ] = $location['lng'];
	}


	protected function getMapCondition()
	{
		if( !$this->mapRefresh || !$this->vpCoordinates )
			return null;

		$tGrid = $this->hasTableDashGridElement();

		foreach( $this->dashSet->getDashboardElements() as $dElem )
		{
			if( $dElem["table"] == $this->tName && $dElem["type"] == DASHBOARD_MAP && ( $dElem["updateMoved"] || !$tGrid ) )
				return $this->getLatLngCondition( $dElem["latF"], $dElem["lonF"] );
		}

		return null;
	}



	protected function getLatLngCondition( $latFName, $lngFName )
	{
		if( $this->skipMapFilter )
			return null;

		if( !$this->mapRefresh || !$this->vpCoordinates )
			return null;

		$s = $this->vpCoordinates["s"];
		$n = $this->vpCoordinates["n"];
		$w = $this->vpCoordinates["w"];
		$e = $this->vpCoordinates["e"];

		$conditions = array();
		$conditions[] = DataCondition::_Not( DataCondition::FieldIs( $latFName, dsopLESS, $s ) );
		$conditions[] = DataCondition::_Not( DataCondition::FieldIs( $latFName, dsopMORE, $n ) );

		if( $w <= $e ) {
			$conditions[] = DataCondition::_Not( DataCondition::FieldIs( $lngFName, dsopLESS, $w ) );
			$conditions[] = DataCondition::_Not( DataCondition::FieldIs( $lngFName, dsopMORE, $e ) );
		} else {
			//	region is across the International Date Line
			$conditions[] = DataCondition::_Or( array(
				DataCondition::_Not( DataCondition::FieldIs( $lngFName, dsopLESS, $w ) ),
				DataCondition::_Not( DataCondition::FieldIs( $lngFName, dsopMORE, $e ) )
			) );
		}
		return DataCondition::_And( $conditions );
	}


	/**
	 * @deprecated
	 * @param String latFName
	 * @param String lngFName
	 * @return String
	 */
	protected function getLatLngWhere( $latFName, $lngFName )
	{
		if( $this->skipMapFilter )
			return "";

		if( !$this->mapRefresh || !$this->vpCoordinates )
			return "";

		$latSQLName = $this->getFieldSQLDecrypt( $latFName );
		$lngSQLName = $this->getFieldSQLDecrypt( $lngFName );

		$s = $this->cipherer->MakeDBValue( $latFName, $this->vpCoordinates["s"], "", true );
		$n = $this->cipherer->MakeDBValue( $latFName, $this->vpCoordinates["n"], "", true );
		$w = $this->cipherer->MakeDBValue( $lngFName, $this->vpCoordinates["w"], "", true );
		$e = $this->cipherer->MakeDBValue( $lngFName, $this->vpCoordinates["e"], "", true );

		if( $this->vpCoordinates["w"] <= $this->vpCoordinates["e"] )
			return $latSQLName.">=".$s." AND ".$latSQLName."<=".$n." AND ".$lngSQLName."<=".$e." AND ".$lngSQLName.">=".$w;
		else
			return $latSQLName.">=".$s." AND ".$latSQLName."<=".$n." AND (".$lngSQLName."<=".$e." OR ".$lngSQLName.">=".$w.")";
	}

	/**
	 * A stub. Get the page's fields list
	 * @return Array
	 */
	protected function getPageFields()
	{
		return $this->pSet->getFieldsList();
	}

	/**
	 * Get permissions for pages
	 * @intellisense
	 */
	function getPermissions($tName = "")
	{
		$resArr = array();

		if(!$tName)
			$tName = $this->tName;
		$strPerm = GetUserPermissions($tName);

		if(isLogged())
		{
			$resArr["add"]=(strpos($strPerm, "A") !== false);
			$resArr["delete"]=(strpos($strPerm, "D") !== false);
			$resArr["edit"]=(strpos($strPerm, "E") !== false);
		}
		$resArr["search"]=(strpos($strPerm, "S") !== false);
		$resArr["export"]=(strpos($strPerm, "P") !== false);
		$resArr["import"]=(strpos($strPerm, "I") !== false);

		return $resArr;
	}

	/**
	 * Check is event exists on current page
	 * @param {string} - event name
	 * @intellisense
	 */
	function eventExists($name)
	{
		if(!$this->eventsObject)
			return false;
		return $this->eventsObject->exists($name);
	}

	function events()
	{
		return $this->eventsObject;
	}

	/**
	 * Check is googlemaps exists on current page
	 *
	 * @intellisense
	 */
	function mapsExists()
	{
		return $this->pSet->hasMap();
	}


	/**
	 * @return Boolean
	 */
	protected function hasTableDashGridElement()
	{
		if( !$this->dashSet )
			return false;

		foreach( $this->dashSet->getDashboardElements() as $dElem )
		{
			if( $dElem["table"] == $this->tName && $dElem["type"] == DASHBOARD_LIST )
				return true;
		}

		return false;
	}

	/**
	 * @return Boolean
	 */
	protected function hasDashMapElement()
	{
		if( !$this->dashSet )
			return false;

		foreach( $this->dashSet->getDashboardElements() as $dElem )
		{
			if( $dElem["table"] == $this->tName && $dElem["type"] == DASHBOARD_MAP )
				return true;
		}

		return false;
	}

	/**
	 * Returns array(
	 *		"prevWhere" => String
	 * 		"nextWhere" => String
	 * 		"prevOrder" => String
	 * 		"nextOrder" => String
	 *	)
	 * @param &Array data - current record
	 * @return Array
	 */
	function getNextPrevQueryComponents( &$data )
	{
		require_once(getabspath('classes/orderclause.php'));
		$orderClause = OrderClause::createFromPage( $this, false );
		$orderFields =& $orderClause->getOrderFields();
		$query = $this->pSet->getSQLQuery();

		if( !$orderFields || !$query )
			return array();

		//	build SQL Query parts wor the next and prev records
		$nextWhere = "";
		$prevWhere = "";
		$nextOrder = array();
		$prevOrder = array();

		for( $i = count($orderFields) - 1; $i >= 0; --$i )
		{
			$of = $orderFields[$i];
			$sqlColumn = $this->connection->addFieldWrappers( $of["column"] );

			$nextOrder[] = $sqlColumn . ' ' . $of["dir"];
			$prevOrder[] = $sqlColumn . ' ' . ( $of["dir"] == "ASC" ? "DESC" : "ASC" );

			$sqlValue = $this->cipherer->MakeDBValue( $of["column"], $data[ $of["column"] ], "", true );


			// Build this sort of exporessions:
			// field1 > x or field1 = x and ( field2 > y or field2=y and ( field3 ... ) )

			$equal = "";
			if( $i < count($orderFields) - 1 )
				$equal = sqlEqual( $sqlColumn, $sqlValue );

			$next = sqlMoreThan( $sqlColumn, $sqlValue );
			$prev = sqlLessThan( $sqlColumn, $sqlValue );
			if( $of["dir"] == "DESC" )
			{
				$prev = sqlMoreThan( $sqlColumn, $sqlValue );
				$next = sqlLessThan( $sqlColumn, $sqlValue );
			}

			$nextWhere = SQLQuery::combineCases( array(
					$next,
					SQLQuery::combineCases( array(
						$equal,
						$nextWhere ),
					"and" )),
				"or" );

			$prevWhere = SQLQuery::combineCases( array(
					$prev,
					SQLQuery::combineCases( array(
						$equal,
						$prevWhere ),
					"and" )),
				"or" );
		}

		return array(
			"nextWhere" => $nextWhere,
			"prevWhere" => $prevWhere,
			"nextOrder" => implode( ", ", array_reverse( $nextOrder ) ),
			"prevOrder" => implode( ", ", array_reverse( $prevOrder ) )
		);

	}

	/**
	 * Returns array(
	 *		"prev" => Array( <name => value> key pairs )
	 * 		"next" => Array( <name => value> key pairs )
	 *	)
	 * @param &Array data - current record
	 * @return Array
	 */
	function getNextPrevRecordKeys( &$data, $what = BOTH_RECORDS )
	{
		$dc = $this->getSubsetDataCommand();
		return $this->dataSource->getNextPrevKeys($dc, $data, $what);
	}

	/**
	 * Get an ORDER BY clause set on the corresponding list page
	 * to retrieve the right record on the edit/view pages
	 * without 'editid' params passed
	 * @return String
	 */
	public function getOrderByClause()
	{
		require_once(getabspath('classes/orderclause.php'));
		$orderClause = OrderClause::createFromPage( $this );

		return $orderClause->getOrderByExpression();
	}

	/**
	 * Get URL keys params string
	 *	editid1=a&editid2=b&...
	 *
	 * Uses $this->keys if parameter is not specified
	 * Returns empty string if empty array passed
	 * @return String
	 */
	protected function getKeyParams( $keys = null )
	{
		if( is_null( $keys ) )
			$keys = $this->keys;
		if( !$keys )
			return "";
		$keyParams = array();
		foreach( $this->pSet->getTableKeys() as $i => $k )
		{
			$keyParams[] = "editid" . ($i + 1) . "=" . rawurlencode( isset( $keys[ $k ] ) ? $keys[ $k ] : $keys[ $i ] )  ;
		}

		return implode("&", $keyParams);
	}


	/**
	 * Assign xt variables connected to the'Prev/Next' buttons
	 * @param Boolean showNext
	 * @param Boolean showPrev
	 * @param Boolean dashBased
	 */
	public function assignPrevNextButtons( $showNext, $showPrev, $dashGridBased = false )
	{
		if( !$this->pSet->useMoveNext() )
			return;

		if( $showNext || $dashGridBased )
		{
			$this->xt->assign("next_button", true);
			$this->xt->assign("nextbutton_attrs", 'id="nextButton'.$this->id.'"');
			if ( $dashGridBased )
				$this->xt->assign("nextbutton_class", "rnr-invisible-button");
		}
		else if( $showPrev )
		{
			$this->xt->assign("next_button", true);
			$this->xt->assign("nextbutton_class", "rnr-invisible-button");
		}
		else
			$this->xt->assign("next_button", false);

		if( $showPrev || $dashGridBased )
		{
			$this->xt->assign("prev_button", true);
			$this->xt->assign("prevbutton_attrs", 'id="prevButton'.$this->id.'"');
			if ( $dashGridBased )
				$this->xt->assign("prevbutton_class", "rnr-invisible-button");
		}
		else if( $showNext )
		{
			$this->xt->assign("prev_button", true);
			$this->xt->assign("prevbutton_class", "rnr-invisible-button");
		}
		else
			$this->xt->assign("prev_button", false);
	}

	/**
	 * Check is captcha exists on current page
	 *
	 * @intellisense
	 */
	function captchaExists() {
		return $this->pSet->hasCaptcha();
	}

	/**
	 * Check captcha
	 * @return Boolean
	 */
	function checkCaptcha()
	{
		$this->isCaptchaOk = true;
		if ( !$this->captchaExists() )
			return true;


		//	skip N CAPTCHA checks after successful test
		if ( isset($_SESSION["count_passes_captcha"]) )
		{
			$_SESSION["count_passes_captcha"] = $_SESSION["count_passes_captcha"] + 1;
			return true;
		}

		//	???
		if ( !isset($_SESSION["isCaptcha" . $this->getCaptchaId() . "Showed"]) && $this->captchaValue == '' )
			return true;

		$captchaSettings = GetGlobalData("CaptchaSettings", "");

		//	check FLASH captcha
		if ( $captchaSettings["type"] == FLASH_CAPTCHA && @strtolower($this->captchaValue) != strtolower(@$_SESSION["captcha_" . $this->getCaptchaId()]) )
		{
			$this->isCaptchaOk = false;
			$this->message = "Codigo de seguridad no válido";
		}

		//	check recaptcha
		if( $captchaSettings["type"] == RE_CAPTCHA )
		{
			$verifyResponse = verifyRecaptchaResponse($this->captchaValue);
			if ( !$verifyResponse["success"] )
			{
				$this->isCaptchaOk = false;
				$this->message = $verifyResponse["message"];
			}
		}

		//	CAPTCHA ok, clean up
		if( $this->isCaptchaOk )
		{
			if( $captchaSettings["type"] == FLASH_CAPTCHA )
			{
				unset($_SESSION["captcha_" . $this->getCaptchaId()]);
			}
			unset($_SESSION["isCaptcha" . $this->getCaptchaId() . "Showed"]);
			$_SESSION["count_passes_captcha"] = 0;
		}

		return $this->isCaptchaOk;
	}

	function displayCaptcha()
	{
		$captchaFieldName  = $this->getCaptchaFieldName();
		if( ( !isset($_SESSION["count_passes_captcha"]) ) or ( $_SESSION["count_passes_captcha"] >= $this->captchaPassesCount ) )
		{
			$this->xt->assign("captcha_block", true);
			$this->xt->assign("captcha", $this->getCaptchaHtml($captchaFieldName));
			$this->xt->assign("captcha_field_name", $captchaFieldName);
			if ( isset($_SESSION["count_passes_captcha"]) )
				unset($_SESSION["count_passes_captcha"]);

			$_SESSION["isCaptcha" . $this->getCaptchaId() . "Showed"] = 1;
		}

		//create control and settings for captcha field, if it show on page
		$controls = array('controls'=>array());
		$controls['controls']['ctrlInd'] = 0;
		$controls['controls']['id'] = $this->id;
		$controls['controls']['fieldName'] = $captchaFieldName;
		$controls['controls']['mode'] = $this->pageType;
		if ( !$this->isCaptchaOk )
			$controls["controls"]["isInvalid"] = true;


		$this->fillControlsMap($controls);
		$this->addExtraFieldsToFieldSettings(true);
	}

	function getCaptchaHtml($_captchaFieldName)
	{
		$captchaHTML = '<div class="captcha_block">';

		$typeCodeMessage = "Teclea el codigo que ves debajo";
		$path = GetCaptchaPath();
		$swfPath = GetCaptchaSwfPath();

		$captchaHTML .= '
			<div style="height:65px;">
			<object width="210" height="65" data="'.$swfPath.'?path='.$path.'?id='.$this->getCaptchaId().'" type="application/x-shockwave-flash">
				<param value="'.$swfPath.'?path='.$path.'?id='.$this->getCaptchaId().'" name="movie"/>
				<param value="opaque" name="wmode"/>
				<a href="http://www.macromedia.com/go/getflashplayer"><img alt="Download Flash" src=""/></a>
			</object>
			</div>';
			$captchaHTML .= '<div style="white-space: nowrap;">'.$typeCodeMessage.':</div>
			<span id="edit'.$this->id.'_'.$_captchaFieldName.'_0">
				<input type="text" value="" class="captcha_value" name="value_'.$_captchaFieldName.'_'.$this->id.'" style="" id="value_'.$_captchaFieldName.'_'.$this->id.'"/>
				<font color="red">*</font>
			</span>';

		$captchaHTML.='</div>';

		return $captchaHTML;
	}

	function getCaptchaId() {
		return $this->id;
	}

	/**
	 * Get captcha field name
	 *
	 * @intellisense
	 */
	function getCaptchaFieldName()
	{
		return "captcha";
	}

	/**
	 * Assign the recsPerPage xt variable
	 */
	public function createPerPage()
	{
		if( false && $this->isBootstrap() )
		{
			return $this->bsCreatePerPage();
		}
		$classString = "";
		$allMessage = "Mostrar todo";
		if( $this->isBootstrap() )
		{
			$classString = 'class="form-control"';
			$allMessage = "Todos";
		}
		$rpp = "<select ".$classString." id=\"recordspp".$this->id."\">";

		for($i=0;$i<count($this->arrRecsPerPage);$i++)
		{
			if($this->arrRecsPerPage[$i]!=-1)
				$rpp.= "<option value=\"".$this->arrRecsPerPage[$i]."\" ".($this->pageSize == $this->arrRecsPerPage[$i] ? "selected" : "").">".$this->arrRecsPerPage[$i]."</option>";
			else
				$rpp.= "<option value=\"-1\" ".($this->pageSize == $this->arrRecsPerPage[$i] ? "selected" : "").">".$allMessage."</option>";
		}

		$rpp.="</select>";

		$this->xt->assign("recsPerPage", $rpp);
	}

	function bsCreatePerPage()
	{
		$txtVal = $this->pageSize;
		if( $this->pageSize == -1 )
			$txtVal = "Mostrar todo";
		$rpp = '<div class="dropdown btn-group">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="dropdown-text">' . $txtVal . '</span> <span class="caret"></span></button>
			<ul class="dropdown-menu pull-right" role="menu">';
		for($i=0;$i<count($this->arrRecsPerPage);$i++)
		{
			$val = $this->arrRecsPerPage[$i];
			$txtVal = $val;
			if( $val == -1 )
				$txtVal = "Mostrar todo";
			$selectedAttr = '';
			if( $this->pageSize == $val )
				$selectedAttr = 'aria-selected="true" class="active"';
			else
				$selectedAttr = 'aria-selected="false"';

			$rpp .= '<li ' . $selectedAttr . '><a data-action="' . $val . '" class="dropdown-item dropdown-item-button">' . $txtVal . '</a></li>';
		}

		$rpp .= '</ul></div>';
		$this->xt->assign("recsPerPage", $rpp);
	}

	function ProcessFiles()
	{
		foreach($this->filesToDelete as $f)
		{
			$f->Delete();
		}
		foreach($this->filesToMove as $f)
		{
			$f->Move();
		}
		foreach($this->filesToSave as $f)
		{
			$f->Save();
		}
	}

	/**
	 * Use for count details recs number, if subQueryes not supported, or keys have different types
	 *
	 * @param integer $i
	 * @param array $detailid
	 * @intellisense
	 */
	function countDetailsRecsNoSubQ($dInd, &$detailid)
	{
		global $cman;

		$dDataSourceTable = $this->allDetailsTablesArr[ $dInd ]['dDataSourceTable'];

		$detPSet = new ProjectSettings($dDataSourceTable);
		$detailsDs = getDataSource( $dDataSourceTable, $detPSet );
		$filters = array();
		$filters[] = Security::SelectCondition( "S", $detPSet );
		//	master-details filter
		$detailKeys = $detPSet->getDetailKeysByMasterTable( $this->tName );
		$detailsKeyValues = array();
		foreach($this->masterKeysByD[ $dInd ] as $idx => $val)
		{
			$filters[] = DataCondition::FieldEquals( $detailKeys[$idx], $detailid[$idx] );
			$detailsKeyValues[ $detailKeys[$idx] ] = $detailid[$idx];
		}
		$dc = new DsCommand;
		$dc->filter = DataCondition::_And( $filters );
		RunnerContext::pushMasterContext( $detailsKeyValues );
		$ret = $this->limitRowCount( $detailsDs->getCount( $dc ), $detPSet);
		RunnerContext::pop();
		return $ret;

	}

	function noRecordsMessage()
	{
		$isSearchRun = $this->isSearchFunctionalityActivated();
		if( !$isSearchRun && $this->getCurrentTabWhere() != "" )
			$isSearchRun = true;

		if( $this->pSetSearch->noRecordsOnFirstPage() && !$isSearchRun )
			return "Nada que mostrar. Ejecute alguna búsqueda.";

		if( !$this->rowsFound && !$isSearchRun )
			return "Sin datos.";

		if( $isSearchRun && !$this->rowsFound )
			return "No se hallaron registros";
	}

	function showNoRecordsMessage()
	{
		$message = ($this->is508 == true ? "<a name=\"skipdata\"></a>" : "").$this->noRecordsMessage();
		$message= "<span name=\"notfound_message".$this->id."\">".$message."</span>";
		$this->xt->assign("message",$message);
		$this->xt->assign( "message_class", "alert-warning");
		$this->xt->assign("message_block",true);
	}

	/**
	 * Calcs pagination info
	 *
	 * @intellisense
	 */
	function buildPagination()
	{
		//	hide colunm headers if needed
		if($this->pageSize && $this->pageSize!=-1)
			$this->maxPages = ceil($this->numRowsFromSQL / $this->pageSize);
		if($this->myPage > $this->maxPages)
			$this->myPage = $this->maxPages;
		if($this->myPage < 1)
			$this->myPage = 1;
		$this->recordsOnPage = $this->numRowsFromSQL -($this->myPage - 1) * $this->pageSize;
		if($this->recordsOnPage > $this->pageSize && $this->pageSize!=-1)
			$this->recordsOnPage = $this->pageSize;

		if( $this->isPD() ) {
			$this->colsOnPage = 1;
		} else {
			$this->colsOnPage = $this->recsPerRowList;
			if($this->colsOnPage > $this->recordsOnPage && $this->listGridLayout != gltVERTICAL)
				$this->colsOnPage = $this->recordsOnPage;
			if($this->colsOnPage < 1)
				$this->colsOnPage = 1;
		}

		//	 Pagination:
		if((!$this->numRowsFromSQL) && ($this->deleteMessage == ''))
		{
			$this->rowsFound = false;
			if( !$this->fieldFilterEnabled() ) {
				$this->showNoRecordsMessage();
			}

			if($this->listAjax || $this->mode == LIST_LOOKUP)
			{
				$this->xt->assign("pagination_block", true);
				$this->hideElement("pagination");
				if( $this->listAjax )
					$this->xt->assign("pagination", "  ");
			}
			$this->hideItemType("details_found");
			$this->hideItemType("page_size");
		}
		else
		{
			$this->rowsFound = true;
			$this->xt->assign("details_found", true );
			$this->xt->assign("message_block",false);
			if($this->listAjax || $this->mode == LIST_LOOKUP)
			{
				$this->xt->assign("message_block",true);
				$this->xt->assign( "message_class", "alert-warning");
				$this->hideElement("message");
			}
			else if ($this->deleteMessage != ''){
				$this->xt->assign("message_block",true);
			}

			$this->xt->assign("records_found", $this->numRowsFromSQL);
			$this->jsSettings["tableSettings"][$this->tName]['maxPages'] = $this->maxPages;

			$firstDisplayed = ( $this->myPage - 1 )	 * $this->pageSize + 1;
			$lastDisplayed = ( $this->myPage ) * $this->pageSize;
			if( $this->pageSize < 0 ) {
				$firstDisplayed = 1;
				$lastDisplayed = $this->numRowsFromSQL;
			}
			if( $lastDisplayed > $this->numRowsFromSQL ) {
				$lastDisplayed = $this->numRowsFromSQL;
			}

			$this->prepareRecordsIndicator( $firstDisplayed, $lastDisplayed, $this->numRowsFromSQL );

			$this->xt->assign("page", $this->myPage);
			$this->xt->assign("maxpages", $this->maxPages);

			$this->xt->assign("pagination_block", false);

			$limit=10;
			if ($this->mobileTemplateMode())
				$limit=5;
			//	write pagination
			if($this->maxPages > 1)
			{
				$this->xt->assign("pagination_block", true);
				$pagination = '';
				$counterstart = $this->myPage - ($limit-1);
				if($this->myPage % $limit != 0)
					$counterstart = $this->myPage -($this->myPage % $limit) + 1;
				$counterend = $counterstart + $limit-1;
				if($counterend > $this->maxPages)
					$counterend = $this->maxPages;
				if($counterstart != 1)
				{
					$pagination.= $this->getPaginationLink(1,"Primero");
					$pagination.= $this->getPaginationLink($counterstart - 1,"Anterior");
				}
				
				$pageLinks = "";
				for( $counter = $counterstart; $counter <= $counterend; $counter ++ ) {
					$pageLinks .= $this->getPaginationLink($counter,$counter, $counter == $this->myPage );
				}

				$pagination .= $pageLinks;
				if( $counterend != $this->maxPages ) {
					$pagination.= $this->getPaginationLink($counterend + 1,"Siguiente");
					$pagination.= $this->getPaginationLink($this->maxPages,"Último");
				}

				$pagination = '<nav class="text-center"><ul class="pagination" data-function="pagination' . $this->id . '">' . $pagination . '</ul></nav>';
				$this->xt->assign("pagination", $pagination);
			}
			else
			{
				if($this->listAjax || $this->mode == LIST_LOOKUP || $this->mode == MEMBERS_PAGE)
				{
					$this->xt->assign("pagination_block", true);
					$this->hideElement("pagination");
					if( $this->listAjax )
						$this->xt->assign("pagination", "  ");
				}
			}
		}
	}

	function prepareRecordsIndicator($firstDisplayed, $lastDisplayed, $totalDisplayed)
	{
		if( !$this->pSet->isCrossTabReport() ) {
			$this->xt->assign( "details_found", true );
		}
		$this->xt->assign("first_shown", $firstDisplayed );
		$this->xt->assign("last_shown", $lastDisplayed );

		//	old methods, obsolete
		$this->xt->assign("firstrecord", $firstDisplayed );
		$this->xt->assign("lastrecord", $lastDisplayed );

		$first = '<span class="bs-number">'.$firstDisplayed.'</span>';
		$last = '<span class="bs-number">'.$lastDisplayed.'</span>';
		$total = '<span class="bs-number">'.$totalDisplayed.'</span>';

		foreach ( $this->pSet->detailsFoundLabelsData() as $itemId => $mLString )
		{
			$template = str_replace( array( '%first%', '%last%', '%total%'), array( $first, $last, $total), GetMLString( $mLString ) );
			$this->xt->assign( "details_found_label".$itemId, $template );
		}
	}

	/**
	 * Get pagination link for build pagination block
	 *
	 * @return string
	 * @intellisense
	 */
	function getPaginationLink($pageNum, $linkText, $active = false)
	{
		$href = GetTableLink( GetTableURL( $this->tName ), $this->pageType)."?goto=".$pageNum . $this->getStateUrlParams();
		return '<li ' . (isRTL() ? 'dir="RTL"' : "") . ' class="' . ( $active ? "active" : "" ) . '"><a href="'.$href.'" pageNum="'.$pageNum.'" >'.$linkText.'</a></li>';
		
	}

	/**
	 * Check is current table is admin table
	 *
	 * @return bool
	 * @intellisense
	 */
	function isAdminTable()
	{
		if($this->tName)
			return Security::isAdminTable( $this->tName );
		else
			return false;
	}

	function fieldAlign($f)
	{
		if( $this->pSet->getEditFormat($f) == FORMAT_LOOKUP_WIZARD )
			return 'left';
		$format = $this->pSet->getViewFormat($f);

		if( $format == FORMAT_FILE || $format == FORMAT_AUDIO || $format == FORMAT_CHECKBOX )
			return 'left';

		if( $format == FORMAT_NUMBER || IsNumberType( $this->pSet->getFieldType($f) ) )
			return 'right';

		return 'left';
	}

	/**
	 * Get the field's class name to align the field's value
	 * basing on its edti and view formats
	 * @param String f
	 * @return String
	 */
	function fieldClass($f)
	{
		if( $this->pSet->getEditFormat($f) == FORMAT_LOOKUP_WIZARD )
			return '';

		$format = $this->pSet->getViewFormat($f);

		if( $format == FORMAT_FILE )
			return ' rnr-field-file';

		if( $format == FORMAT_AUDIO )
			return ' rnr-field-audio';

		if( $format == FORMAT_CHECKBOX )
			return ' rnr-field-checkbox';

		if( $format == FORMAT_NUMBER || IsNumberType( $this->pSet->getFieldType($f) ) )
			return ' r-field-number';

		return "r-field-text";
	}

	/**
	 * buildDetailGridLinks
	 * Build master-details links href-attribute on list grid
	 * @param {array} master key values
	 * @return {array} array of links hrefs and ids
	 * @intellisense
	 */
	function buildDetailGridLinks(&$data)
	{
		$hrefs = array();

		foreach($this->allDetailsTablesArr as $detailsData)
		{
			$dShortTable = $detailsData['dShortTable'];
			$masterquery = "mastertable=".rawurlencode($this->tName);

			for($idx = 1; $idx <= count($detailsData["masterKeys"]); $idx ++)
			{
				$masterquery.= "&masterkey".($idx)."=".rawurlencode( $data[ $detailsData['dDataSourceTable'] ]["masterkey".$idx] );
			}

			$idLink = $dShortTable;
			if ( !$this->isPD() )
				$idLink = $this->pSet->detailsPreview( $detailsData['dDataSourceTable'] ) == DP_INLINE ? $dShortTable."_preview" : "master_".$dShortTable."_";

			$hrefs[] = array("id" => $idLink
				, "href" => GetTableLink($dShortTable, $detailsData["dType"], $masterquery));
		}

		return $hrefs;
	}

	/**
	 * Create new control (if needed) for edit field, and return it
	 * @param {string} field					field name
	 * @param {string} id (optional)			field id
	 * @param {array} extraParams (optional)
	 * @return {object} edit control
	 * @intellisense
	 */
	function getControl($field, $id = "", $extraParams = array())
	{
		return $this->controls->getControl($field, $id, $extraParams);
	}

	/**
	 * Create new control (if needed) for view field, and return it
	 * @param {string} field name
	 * @param {string} predefined view format
	 * @intellisense
	 */
	function getViewControl($field, $format = null)
	{
		return $this->viewControls->getControl($field, $format);
	}

	function setForExportVar($forExport)
	{
		$this->viewControls->setForExportVar($forExport);
	}

	/**
	 * showDBValue
	 * Wrapper for ViewControl creation and showDBValue call on it
	 * @param {string} field name
	 * @param {array} associative array with record data
	 * @param {string} string with record keys and values
	 * @intellisense
	 */
	function showDBValue($field, &$data, $keylink = "", $html = true )
	{
		if( !$keylink && $data ) {
			$tKeys = $this->pSet->getTableKeys();
			$keylink = "";
			for($i = 0; $i < count($tKeys); $i ++) {
				$keylink.= "&key".($i + 1)."=".rawurlencode(@$data[ $tKeys[$i] ]);
			}

		}
		if( $this->pdfJsonMode() ) {
			return $this->getViewControl($field)->getPdfValue($data, $keylink);
		}
		return $this->getViewControl($field)->showDBValue($data, $keylink, $html );
	}

	function showTextValue($field, &$data )
	{
		return $this->getViewControl($field)->getTextValue( $data );
	}


	/**
	 * showDBValue
	 * Wrapper for ViewControl creation and showDBValue call on it
	 * @param {string} field name
	 * @param {array} associative array with record data
	 * @intellisense
	 */
	function getTextValue( $field, &$data )
	{
		return $this->getViewControl($field)->getTextValue( $data );
	}

	/**
	 * Wrapper for the ViewControl's getExportValue method
	 * @param String field
	 * @param Array &data
	 * @param String keylink (optional)
	 * @return String
	 */
	function getExportValue($field, &$data, $keylink = "", $html )
	{
		return $this->getViewControl($field)->getExportValue($data, $keylink, $html );
	}

	/**
	 * Hide the field on the page
	 * @param String fieldName
	 */
	function hideField($fieldName, $recordId = "")
	{
		if( $this->isPD() ) {
			$items = $this->pSet->getFieldItems( $fieldName );
			if( is_array( $items ) ) {
				foreach( $items as $i )
					$this->hideItem( $i, $recordId );
			}
		} else {
			if(!is_null($this->xt))
				$this->xt->hideField($fieldName);
		}
	}

	/**
	 * Show the hidden field on the page
	 * @param String fieldName
	 */
	function showField($fieldName)
	{
		if( $this->isPD() )
		{
			$items = $this->pSet->getFieldItems( $fieldName );
			if( is_array( $items ) ) {
				foreach( $items as $i )
					$this->showItem( $i );
			}
		}
		else
		{
			if(!is_null($this->xt))
				$this->xt->showField($fieldName);
		}
	}

	/**
	 * The settings object 'getDetailKeysByMasterTable' method's wrapper
	 * @return Array
	 */
	function getDetailKeysByMasterTable()
	{
		return $this->pSet->getDetailKeysByMasterTable($this->masterTable);
	}

	/**
	 * Get the page's layout
	 * @return {string}
	 */
	function getPageLayout($tName="", $pageType="", $suffix = "")
	{
		global $page_layouts;
		if(!$tName)
			$tName = $this->tName;
		if(!$pageType)
			$pageType = $this->pageType;

		$templateName = GetTableURL($tName)."_".$pageType;
		if($suffix)
			$templateName = $templateName."_".$suffix;
		if(!$this->isPageTableBased() || $this->pageType == PAGE_REGISTER )
		{
			//the name of the non table page's layout
			$templateName = $pageType;
		}
		return $page_layouts[$templateName];
	}

	/**
	 * Check if the pabe is table based or not
	 * @return Boolean
	 */
	function isPageTableBased()
	{
		if($this->pageType == PAGE_MENU || $this->pageType == PAGE_LOGIN || $this->pageType == PAGE_REMIND || $this->pageType == PAGE_CHANGEPASS)
		{
			return false;
		}
		return true;
	}

	/**
	 * Check if the brick is set in the layout or not
	 *
	 * @param {string} $brickName
	 * @return {boolean}
	 */
	function isBrickSet($brickName)
	{
		return true;
		$layout = $this->getPageLayout();
		if($layout)
		{
			return $layout->isBrickSet($brickName);
		}
		return false;
	}

	/**
	 * Get the brick's table name (if it's set)
	 *
	 * @param {string} $brickName
	 * @return {string}
	 */
	function getBrickTableName($brickName)
	{
		$layout = $this->getPageLayout();
		if($layout)
		{
			return $layout->getBrickTableName($brickName);
		}
		return "";
	}

	/**
	 * Sets all necessary params for the Search panel added to the non table page
	 */
	function setParamsForSearchPanel()
	{
		if(!$this->searchPanelActivated)
		{
			return;
		}

		include_once(getabspath("classes/searchclause.php"));
		$this->needSearchClauseObj = true;

		$seachTableName = $this->getBrickTableName("searchpanel");
		if($seachTableName)
		{
			//if the brick's table name is set it'll used as the table name for the searchpanel's ProjectSettings object
			$this->pSetSearch = new ProjectSettings($seachTableName, PAGE_SEARCH);
			//set the correct search table's name
			$this->searchTableName = $seachTableName;
			//add some globale settings for the search table
			$this->settingsMap["globalSettings"]["shortTNames"][$seachTableName] = $this->pSetSearch->getShortTableName();
			$this->permis[$this->searchTableName] = $this->getPermissions($seachTableName);

			if( $this->permis[$this->searchTableName]["search"] && (!$this->isPageTableBased() || $this->pageType == PAGE_REGISTER) )
			{
				//for edit controls to render correctly
				$this->tableBasedSearchPanelAdded = true;
			}
		}
	}

	/**
	 * Check if the search panel is added
	 * @return Boolean
	 */
	protected function checkIfSearchPanelActivated() {
		return $this->pSet->showSearchPanel();
	}

	/**
	 * Build the Search panel if the "searchpanel" brick is added to the page's layout
	 */
	protected function buildAddedSearchPanel()
	{
		if( $this->pageType != PAGE_REPORT && $this->pageType != PAGE_CHART && $this->pageType != PAGE_LIST
			&& !($this->pageType == PAGE_ADD && $this->mode == ADD_INLINE) && !($this->pageType == PAGE_EDIT && $this->mode == EDIT_INLINE ) )
		{
			$this->buildSearchPanel();
		}
	}

	/**
	 * Build the activated Search panel
	 */
	public function buildSearchPanel() {
		if( !$this->searchPanelActivated || !$this->permis[ $this->searchTableName ]["search"] ) {
			return;
		}

		include_once( getabspath("classes/searchpanelsimple.php") );
		include_once( getabspath("classes/searchcontrol.php") );
		include_once( getabspath("classes/panelsearchcontrol.php") );

		$params = array();
		$params['pageObj'] = &$this;

		$searchPanelObj = new SearchPanelSimple( $params );
		$searchPanelObj->buildSearchPanel();
	}

	/**
	 * Assign simple search block
	 */
	public function assignSimpleSearch() {
		if( !$this->permis[ $this->searchTableName ]["search"] )
			return;

		$this->xt->assign("searchform_text", true);
		$this->xt->assign("searchform_search", true);

		$this->xt->assign('searchbutton_attrs', 'id="searchButtTop'.$this->id.'" title="'."Buscar".'"');

		if( !$this->pSetSearch->noRecordsOnFirstPage()
			|| $this->searchClauseObj->isSearchFunctionalityActivated()
			|| $this->listAjax ) {
			$this->xt->assign("searchform_showall", true);
		}

		if( $this->pSetSearch->noRecordsOnFirstPage() && $this->listAjax ) {
			$this->xt->displayItemHidden('searchform_showall');
		}

		$showallbutton_attrs.= 'id="showAll'.$this->id.'"';
		if( !$this->searchClauseObj->isShowAll() )
			$showallbutton_attrs.= ' style="display: none;"';

		// search panel has the same attrs
		$this->xt->assign('showallbutton_attrs', $showallbutton_attrs);

		$this->assignSearchControl();
	}

	/**
	 * Assign simple search control
	 */
	 protected function assignSearchControl() {
		$params = $this->searchClauseObj->getSearchGlobalParams();

		$searchforAttrs = "name=\"ctlSearchFor".$this->id."\" id=\"ctlSearchFor".$this->id."\"";
		if( $this->isUseAjaxSuggest )
			$searchforAttrs .= " autocomplete=off ";

		$searchforAttrs.= ' placeholder="'."buscar".'"';
		if( $this->searchClauseObj->searchStarted() || strlen( $params["simpleSrch"] ) ) {
			$valSrchFor = $params["simpleSrch"];
			$searchforAttrs.= " value=\"".runner_htmlspecialchars( $valSrchFor )."\"";
		}

		$this->xt->assignbyref( "searchfor_attrs", $searchforAttrs );

		if( $this->pSetSearch->showSimpleSearchOptions() ) {
			include_once( getabspath("classes/searchcontrol.php") );

			$typeCtrl = SearchControl::getSimpleSearchTypeCombo(
				$params["simpleSrchTypeComboOpt"],
				$params["simpleSrchTypeComboNot"],
				$this->id
			);
			$this->xt->assign( 'simpleSearchTypeCombo', $typeCtrl );

			/*
			$allSearchFields = array_diff(
				$this->pSet->getAllSearchFields(),
				$this->pSet->getDetailKeysByMasterTable( $this->masterTable )
			);*/


			$fieldCtrl = SearchControl::simpleSearchFieldCombo(
				$this->pSet->getAllSearchFields(),
				$this->pSet->getGoogleLikeFields(),
				$params["simpleSrchFieldsComboOpt"],
				$this->searchTableName,
				$this->id
			);
			$this->xt->assign( 'simpleSearchFieldCombo', $fieldCtrl );
		}
	}

	/**
	 * Build and show the Filter panel on the page
	 * if there are corresponding search permissions
	 */
	function buildFilterPanel()
	{
		if( !$this->permis[$this->tName]["search"]
			|| $this->pSetEdit->isSearchRequiredForFiltering() && !$this->isRequiredSearchRunning() )
		{
			$this->prepareEmptyFPMarkup();
			return false;
		}
		if( !$this->pSet->getFilterFields() )
			return false;

		include_once getabspath("classes/filterpanel.php");
		$params = array();
		$params["pageObj"] = &$this;
	    $filterPanel = new FilterPanel($params);
		return $filterPanel->buildFilterPanel();
	}

	/**
	 * A stub
	 */
	protected function prepareEmptyFPMarkup()
	{
	}

	/**
	 *
	 */
	function isSearchFunctionalityActivated()
	{
		if( !$this->searchClauseObj )
			return false;

		return $this->searchClauseObj->isSearchFunctionalityActivated();
	}

	/**
	 * Search clause method wrapper
	 * @return Boolean
	 */
	function isRequiredSearchRunning()
	{
		if( !$this->searchClauseObj )
			return false;

		return $this->searchClauseObj->isRequiredSearchRunning();
	}



	/**
	 * Check whether the page's layout is table-based
	 */
	function isOldLayout()
	{
		if(!$this->pageLayout)
			return false;
		return ($this->pageLayout->version == 1);
	}

	/**
	 * Forms class name with an appropriate prefix
	 */
	function makeClassName($name)
	{
		if($this->isOldLayout())
			return "runner-".$name;
		return "rnr-".$name;
	}

	/**
	 * Check if updated data contains duplicated values
	 * @param Array oldRecordData
	 * @param Array newRecordData
	 * @return Boolean
	 */
	protected function checkDeniedDuplicatedForUpdate( &$oldRecordData, &$newRecordData ) {
		foreach( $newRecordData as $f => $value ) {
			if( $this->pSet->allowDuplicateValues($f) )
				continue;

			if( !$this->hasDuplicateValue($f, $value, $oldRecordData[ $f ]) )
				continue;

			$this->errorFields[] = $f;

			$displayedValue = $value;
			$ctrl = $this->getViewControl( $f );
			if( $ctrl ) {
				$data = array( $f => $value );
				$displayedValue = $ctrl->getTextValue( $data );
			}

			$this->setMessage( $this->getDenyDuplicatedMessage( $f, $displayedValue ) );
			return false;
		}
		return true;
	}


	/**
	 * Check if the fieldData array contains at least one duplicated field's value
	 *
	 * @param {Array} $fieldsData
	 * @param {String} $message
	 * @return {Boolean}
	 */
	function hasDeniedDuplicateValues($fieldsData, &$message)
	{
		foreach($fieldsData as $fieldName => $value)
		{
			if($this->pSet->allowDuplicateValues($fieldName))
				continue;

			if($this->hasDuplicateValue($fieldName, $value))
			{
				$this->errorFields[] = $fieldName;
				if( !( $this->pageType == PAGE_EDIT && $this->mode == EDIT_POPUP )
					&& !( $this->pageType == PAGE_ADD && $this->mode == ADD_POPUP ) ) {
					$displayedValue = $value;

					$ctrl = $this->getViewControl( $fieldName );
					if( $ctrl ) {
						$data = array( $fieldName => $value );
						$displayedValue = $ctrl->getTextValue( $data );
					}

					$message = $this->getDenyDuplicatedMessage( $fieldName, $displayedValue );
				}
				return true;
			}
		}
		return false;
	}

	/**
	 * @param String fName
	 * @param String value
	 * @return String
	 */
	protected function getDenyDuplicatedMessage( $fName, $value )
	{
		$validationData = $this->pSet->getValidation( $fName);
		$messageData = $validationData["customMessages"]["DenyDuplicated"];

		if( $messageData["messageType"] == "Text" )
			$message = $messageData["message"];
		else
			$message = GetCustomLabel( $messageData["message"] );

		return $this->pSet->label( $fName ).": ".str_replace( "%value%", runner_htmlspecialchars( substr( $value, 0, 10 ) ), $message );
	}

	/**
	 * Check if the field's value duplicates with any of database field's values
	 *
	 * @param {String} $fieldName
	 * @param {String | Number} $value
	 * @param {String | Number} $oldValue
	 * @retrun {Boolean}
	 */
	function hasDuplicateValue($fieldName, $value, $oldValue = null)
	{
		//skip empty value
		if( !strlen( $value ) )
			return false;

		$dc = new DsCommand();


		if ( $oldValue ) {
			$conditions = array( DataCondition::FieldEquals( $fieldName, $value, 0, dsCASE_DEFAULT ) );
			$conditions[] = DataCondition::_Not( DataCondition::FieldEquals( $fieldName, $oldValue, 0, dsCASE_DEFAULT ) ) ;
			$dc->filter = DataCondition::_And( $conditions );
		} else {
			$dc->filter = DataCondition::FieldEquals( $fieldName, $value, 0, dsCASE_DEFAULT );
		}

		$dc->totals[] = array(
			"total" => "count",
			"alias" => "count_".$fieldName,
			"field" => $fieldName,
		);

		$qResult = $this->dataSource->getTotals( $dc );
		$data = $qResult->fetchAssoc();
		if( !$data[ "count_".$fieldName ] )
			return false;

		return true;
	}

	/**
	 * Fetch blocks ( {BEGIN ...} {END ...} ) content
	 * @param Array|String blocks
	 * @param Boolean dash			(optional)
	 * @return String
	 */
	function fetchBlocksList( $blocks, $dash = false )
	{
		if( !is_array( $blocks ) )
			return $this->xt->fetch_loaded( $blocks );

		$fetchedBlocks = "";
		$firstRightAligned = true;
		$hasRightAligned = false;
		$brickCount = 0;
		foreach( $blocks as $b )
		{
			++$brickCount;
			$align="";
			if( is_array($b) )
			{
				$name = $b["name"];
				$align= $b["align"];
			}
			else
			{
				$name = $b;
			}
			$fetched = $this->xt->fetch_loaded( $name );
			if( !$fetched )
				continue;

			if( $dash )
			{
				$alignClass = "";
				if( $align == "right" )
					$alignClass = "rnr-dberight";
				$fetched = '<span class="rnr-dbebrick ' . $alignClass .'">' . $fetched . "</span>";
				if( $align == "right" && $firstRightAligned)
				{
					$fetched = "<div class=\"rnr-dbefiller\"></div>" . $fetched;
					$firstRightAligned = false;
					$hasRightAligned = true;
				}
			}

			$fetchedBlocks.= $fetched;
		}
		if( $dash && $fetchedBlocks!= "" && $brickCount > 1 && !$hasRightAligned )
			$fetchedBlocks .= "<div class=\"rnr-dbefiller\"></div>";
		return $fetchedBlocks;
	}

	/**
	 * @return Boolean
	 */
	protected function needPopupSettings()
	{
		return true;
	}

	/**
	 * @param String templatefile
	 * @param Number id
	 */
	function displayAJAX($templatefile, $id)
	{
		if( $this->gridTabsAvailable() )
		{
			$this->pageData['tabs'] = $this->getTabsHtml();
			$this->pageData['tabId'] = $this->getCurrentTabId();
		}

		$returnJSON = array();

		$returnJSON["success"] = true;
		global $pagesData;
		$returnJSON["pagesData"] = $pagesData;
		if( count( $this->controlsHTMLMap ) )
			$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		if( count( $this->viewControlsHTMLMap ) )
			$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;

		if( count($this->includes_css) )
			$returnJSON['CSSFiles'] = array_unique($this->includes_css);

		$returnJSON['additionalJS'] = $this->grabAllJsFiles();
		$returnJSON['idStartFrom'] = $id;

		$this->xt->load_template($templatefile);
		if( count( $this->headerForms ) )
			$returnJSON['headerCont'] = $this->fetchForms( $this->headerForms );
		if( count( $this->footerForms ) )
			$returnJSON['footerCont'] = $this->fetchForms( $this->footerForms );

		if( $this->pageType == PAGE_CHART )
		{
			$returnJSON['headerCont'] = '<span class="rnr-dbebrick">'
				. $this->getPageTitle( $this->pageName, GoodFieldName($this->tName) )
				. "</span>";
		}
		if( $this->dashElementData ) {
			$icon = getIconHTML( $this->dashElementData["item"]["icon"] );
			if( $icon )
				$returnJSON["iconHtml"] = $icon;
		}

		$this->assignFormFooterAndHeaderBricks( false );
		$returnJSON['html'] = $this->getBodyMarkup( $templatefile );

		if( $this->needPopupSettings() )
			$returnJSON['settings'] = $this->jsSettings;

		$extraParams = $this->getExtraAjaxPageParams();
		if( count($extraParams) )
		{
			foreach( $extraParams as $param => $paramValue )
			{
				$returnJSON[ $param ] = $paramValue;
			}
		}

		echo printJSON($returnJSON);
	}

	/**
	 * @param templatefile string
	 * @return string
	 */
	protected function getBodyMarkup( $templatefile )
	{
		if( $this->getLayoutVersion() === PD_BS_LAYOUT )
			return $this->fetchForms( $this->bodyForms );

		$this->xt->load_template( $templatefile );
		return $this->xt->fetch_loaded('body');
	}

	/**
	 * A stub.
	 * Get extra JSON params to display the page on AJAX-like request
	 * @return Array
	 */
	protected function getExtraAjaxPageParams()
	{
		return array();
	}

	/**
	 * Assign 'form' footer and header elements
	 * @param Boolean assignValue
	 */
	public function assignFormFooterAndHeaderBricks( $assignValue = true )
	{
		if( $this->formBricks["header"] )
		{
			if( !is_array( $this->formBricks["header"] ) )
			{
				$this->formBricks["header"] = array( $this->formBricks["header"] );
			}
			foreach( $this->formBricks["header"] as $b )
			{
				$name = $b;
				if( is_array($b) )
					$name = $b["name"];
				$this->xt->assign( $name, $assignValue );
			}
		}

		if( $this->formBricks["footer"] )
		{
			if( !is_array( $this->formBricks["footer"] ) )
			{
				$this->formBricks["footer"] = array( $this->formBricks["footer"] );
			}
			foreach( $this->formBricks["footer"] as $b )
			{
				$name = $b;
				if( is_array($b) )
					$name = $b["name"];
				$this->xt->assign( $name, $assignValue );
			}
		}
	}

	/**
	 * Assign styles to the page
	 * @param Boolean isPdfPage  (optional)
	 */
	function assignStyleFiles( $isPdfPage = false )
	{
		global $wizardBuildKey, $projectBuildKey;

		for ( $i = 0; $i < count($this->includes_css); $i++ )
		{
			$f = $this->includes_css[$i];
			if ( $this->isCustomCssFile($f) )
				$addKey = "?" . $projectBuildKey;
			else
				$addKey = "?" . $wizardBuildKey;

			if ( strpos($f, "style.css") > 0 )
				$addKey .= "&" . $projectBuildKey;

			$this->includes_css[$i] = $f . $addKey;
		}

		$this->xt->assign_array("styleCSSFiles", "stylepath", array_unique($this->includes_css));
		$this->includes_css = array();

		$this->xt->assign("wizardBuildKey", $wizardBuildKey);
	}

	function isCustomCssFile( $file ) {
		return strpos( $file, "/pages/" ) > 0
			|| strpos( $file, "/custom/" ) > 0;
	}

	/**
	 * Displays the page using $templatefile
	 */
	function display($templatefile)
	{
		$this->assignStyleFiles();
		$this->xt->display($templatefile);
	}

	/**
	 * returns where clause for active master-detail relationship
	 * @param Boolean basedOnProp (optional)   true  view-edit dp case
	 * @return string
	 */
	function getMasterTableSQLClause()
	{
		$where = "";
		if( !$this->detailKeysByM )
			return $where;

		for($i = 0; $i < count( $this->detailKeysByM ); $i++)
		{
			if($i != 0)
				$where.= " and ";

			 //#14869
			$mKey = $this->masterKeysReq[ $i + 1 ];
			/*$mKey = $_SESSION[ $this->sessionPrefix."_masterkey".($i + 1) ];*/

			if( $this->cipherer && $this->cipherer->isEncryptionByPHPEnabled() )
				$mValue = $this->cipherer->MakeDBValue( $this->detailKeysByM[ $i ], $mKey );
			else
				$mValue = make_db_value( $this->detailKeysByM[$i], $mKey, "", "", $this->tName );

			if( strlen($mValue) != 0 )
				$where.= $this->getFieldSQLDecrypt( $this->detailKeysByM[$i] ) . "=" . $mValue;
			else
				$where.= "1=0";
		}

		return $where;
	}

	function showGridOnly() {
		return "";
	}

	/**
	 * Show a detail preview page
     * @param Array params - asp compatibility issue
	 */
	function showPageDp($params = "")
	{
		if( $this->isBootstrap() )
		{
			return $this->showGridOnly();
		}
		global $page_layouts;
		$layout =& $page_layouts[$this->shortTableName.'_'.$this->pageType];
		$pageSkinStyle = $layout->style.' page-'.$layout->name;


		// if we use details inline. We don't need show the header/footer.
		$this->xt->assign("header", false);
		$this->xt->assign("footer", false);

		$this->xt->prepare_template($this->templatefile);
		$contents = $this->renderPageBody();

		echo '<div id="detailPreview'.$this->id.'" class="'.$pageSkinStyle.' rnr-pagewrapper dpStyle">'.$contents.'</div>';
	}

	function renderPageBody()
	{
		return $this->xt->fetch_loaded('body');
	}

	/**
	 * Proccess master-details
	 *
	 * @param array $record
	 * @param array $data
	 * @param Number gridRowInd
	 */
	function proccessDetailGridInfo(&$record, &$data, $gridRowInd)
	{
		$hideDPLink = true;
		$hiddenPreviewTabs = array();

		// not bs layouts
		$tabNamesToHide = array();

		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++)
		{
			$detailTableData = $this->allDetailsTablesArr[$i];
			$dDataSourceTable = $detailTableData['dDataSourceTable'];

			$dPset = new ProjectSettings( $dDataSourceTable );

			$detTableType = $dPset->getEntityType();
			$detListAvailabel = ( $dPset->hasListPage() || isChart( $detTableType ) || isReport( $detTableType ) ) && $this->permis[$dDataSourceTable]["search"];
			$detAddAvailabel = $dPset->hasAddPage() && $this->permis[$dDataSourceTable]["add"];
			$detEditAvailabel = $dPset->hasEditPage() && $this->permis[$dDataSourceTable]["edit"];

			if( $detailTableData['dType'] == PAGE_LIST && !$detListAvailabel && !$detAddAvailabel && !$detEditAvailabel )
				continue;

			$dShortTable = $detailTableData['dShortTable'];
			$masterquery = "mastertable=".rawurlencode($this->tName);

			initArray($this->controlsMap, 'gridRows');
			initArray($this->controlsMap['gridRows'], $gridRowInd);
			initArray($this->controlsMap['gridRows'][ $gridRowInd ], 'masterKeys');
			$this->controlsMap['gridRows'][ $gridRowInd ]['masterKeys'][ $dDataSourceTable ] = array();

			$detailid = array();
			foreach($this->masterKeysByD[$i] as $idx => $m)
			{
				$curM = $m;
				if ($this->pageType==PAGE_REPORT)
				{
					$curM = goodFieldName($curM);
					$curM .= '_dbvalue';
				}
				$masterquery.= "&masterkey".($idx + 1)."=".rawurlencode( $data[ $curM ] );
				// Don't need to use here make_db_value func, it use in countDetailsRecsNoSubQ func
				$detailid[] = $data[ $curM ];
				$this->controlsMap['gridRows'][ $gridRowInd ]['masterKeys'][ $dDataSourceTable ]["masterkey".($idx + 1)] = $data[ $curM ];
			}

			//	skip the rest if no details link needed
			if( !$this->detailsInGridAvailable() )
				continue;

			//	add count of child records to SQL
			if( ( $this->pSet->detailsShowCount( $dDataSourceTable )
						|| $this->pSet->detailsHideEmpty( $dDataSourceTable )
							|| $this->pSet->detailsHideEmptyPreview( $dDataSourceTable ) )
					&& !$this->isDetailTableSubqueryApplied( $dDataSourceTable ) )
			{
				$data[ $dDataSourceTable."_cnt" ] = $this->countDetailsRecsNoSubQ($i, $detailid);
			}

			//detail tables
			if( $this->detailInGridAvailable( $detailTableData ) ) {
				$record[ $dShortTable."_dtable_link" ] = $this->permis[ $dDataSourceTable ]['add']
					|| $this->permis[ $dDataSourceTable ]['edit'] || $this->permis[ $dDataSourceTable ]['search'];
			}

			if( $this->pSet->detailsShowCount( $dDataSourceTable ) )
			{
				if( $data[ $dDataSourceTable."_cnt" ] + 0 )
					$record[ $dShortTable."_childcount" ] = true;
				else
				{
					if( $this->pSet->detailsLinks() != DL_INDIVIDUAL )
						$record[ $dShortTable."_childcount" ] = true;

					$record[ $dShortTable."_dlink_class" ] = "hidden-badge";
					$record[ $dShortTable."_cntspan_class" ] = "hidden-detcounter";
				}

				$record[ $dShortTable."_childnumber" ] = $data[ $dDataSourceTable."_cnt" ];
				$record[ $dShortTable."_childnumber_attr" ] = " id='cntDet_".$dShortTable."_".$this->recId."'";
				$this->controlsMap['gridRows'][ $gridRowInd ]['childNum'] = $data[ $dDataSourceTable."_cnt" ];
			}

			// detail link prepare
			if ( $detListAvailabel ) {
				$detHref = GetTableLink($dShortTable, $detailTableData['dType'], $masterquery);
			}
			else if ( $detAddAvailabel )
			{
				$detHref = GetTableLink($dShortTable, PAGE_ADD, $masterquery);
			}
			else if ( $detEditAvailabel )
			{
				$detHref = GetTableLink($dShortTable, PAGE_EDIT, $masterquery);
			}

			if( $this->detailsHrefAvailable() ) {
				$linkAttrs = " href=\"".$detHref;
			}

			$record[ $dShortTable."_link_attrs" ] = $linkAttrs."\" id=\"details_".$this->recId."_".$dShortTable."\" ";

			if( $this->pSet->detailsHideEmpty($dDataSourceTable) )
			{
				if( !($data[ $dDataSourceTable."_cnt" ] + 0) ) {
					$record[ $dShortTable."_link_attrs" ] .= "data-hidden";
				}
				elseif( $this->pSet->detailsPreview( $dDataSourceTable ) && $hideDPLink )
				{
					$hideDPLink = false;
				}
			}
			elseif( $hideDPLink )
				$hideDPLink = false;

			if ( $this->pSet->detailsHideEmptyPreview( $dDataSourceTable ) && !($data[ $dDataSourceTable."_cnt" ] + 0) )
				$hiddenPreviewTabs[] = $dDataSourceTable;
		}

		// Issue #12581
		if ( $this->pSet->detailsLinks() == DL_SINGLE )
		{
			if ( count($this->allDetailsTablesArr) == 1 && !$detListAvailabel && ( $detAddAvailabel || $detEditAvailabel ) )
			{
				$record["dtables_link_attrs"] = " href=\"".$detHref."\"";
			}
			else
			{
				$record["dtables_link_attrs"] = " href=\"#\" id=\"details_".$this->recId."\" ";
			}
		}

		if( $hideDPLink )
		{
			$record["dtables_link_attrs"].= " class=\"".$this->makeClassName("hiddenelem")."\" data-hidden";
			$record["dtables_link_class"] = $this->makeClassName("hiddenelem");
		}

		if( $this->pSet->detailsLinks() == DL_SINGLE && count($tabNamesToHide) ) {
			$record["dtables_link_attrs"].= " data-hiddentabs=\"".runner_htmlspecialchars( my_json_encode( $tabNamesToHide ) )."\"";
			$this->controlsMap['gridRows'][ $gridRowInd ][ 'hiddentabs' ] = $tabNamesToHide;
		}

		if( $hiddenPreviewTabs )
		{
			$this->controlsMap['gridRows'][ $gridRowInd ][ 'hiddenPreviewTabs' ] = $hiddenPreviewTabs;
		}
	}
	/**
	 * Get proceed link for details previews
	 * return HTML link
	 */
	function getProceedLink()
	{
		if( $this->isBootstrap() )
			return "";

		$masterPSet = $this->getMasterPSet();
		if( !$masterPSet->detailsProceedLink( $this->tName ) )
			return "";

		return '<span class="rnr-dbebrick">'
			.'<a href="' . $this->getProceedUrl() . '" name="dp' . $this->id . '">'
			.  "Proceder con" . ' '. GetTableCaption( GoodFieldName( $this->tName ) )
			. '</a>'
			. "&nbsp;&nbsp;</span>";
	}

	public function getProceedUrl()
	{
		for($i = 1; $i <= count( $this->masterKeysReq ); $i++)
		{
			$strkey.= "&masterkey".($i)."=".rawurlencode( $this->masterKeysReq[$i] );
		}

		return GetTableLink( $this->shortTableName, $this->pageType ) . "?mastertable=".rawurlencode( $this->masterTable ) . $strkey;
	}


	/**
	 * A stub #9875
	 * @param String dDataSourceTable	The detail datasource table name
	 * @param Number dTableIndex	The detail table index in the allDetailsTablesArr prop
	 * @return Boolean
	 */
	protected function isDetailTableSubquerySupported( $dDataSourceTName, $dTableIndex )
	{
		return false;
	}

	/**
	 * @param String table	The detail datasource table name
	 * @return Boolean
	 */
	protected function isDetailTableSubqueryApplied( $table )
	{
		return false;
	}

	/**
	 * Get details params
	 * @param Number ids
	 * @return Array
	 */
	public function getDetailsParams( $ids )
	{
		$dpParams = array();

		if( $this->pageType != PAGE_VIEW && $this->pageType != PAGE_EDIT && $this->pageType != PAGE_ADD )
			return $dpParams;

		foreach( $this->allDetailsTablesArr as $detailData )
		{
			$strDetTableName = $detailData["dDataSourceTable"];

			if( $this->pSet->detailsPreview( $strDetTableName ) != DP_INLINE )
				continue;
			$dpPermis = $this->getPermissions( $strDetTableName );
			if( ($this->pageType == PAGE_VIEW || $this->pageType == PAGE_EDIT) && $dpPermis['search'] || $this->pageType == PAGE_EDIT && $dpPermis['edit']
				|| $this->pageType == PAGE_ADD && $dpPermis['add'] )
			{
				$dpParams['ids'][] = ++$ids;
				$dpParams['strTableNames'][] = $strDetTableName;
				$dpParams['type'][] = $detailData["dType"];
				$dpParams['shorTNames'][] = $detailData["dShortTable"];
			}
		}

		return $dpParams;
	}

	/**
	 * Prepare the detail preview data, fille coresssponding controls maps and
	 * assign all required xt variables
	 * @param String dpType
	 * @param String dpTableName
	 * @param Number dpId
	 * @param &Array data
	 */
	public function setDetailPreview( $dpType, $dpTableName, $dpId, &$data)
	{
		if( $this->pageType != PAGE_EDIT && $this->pageType != PAGE_VIEW && $this->pageType != PAGE_ADD || !CheckTablePermissions($dpTableName, "S") )
			return;

		if( $dpType == PAGE_CHART )
			$this->setDetailChartOnEditView( $dpTableName, $dpId, $data );
		elseif( $dpType == PAGE_REPORT )
			$this->setDetailReportOnEditView( $dpTableName, $dpId, $data );
		else // $dpType == PAGE_LIST
			$this->setDetailList( $dpTableName, $dpId, $data );
	}

	/**
	 *
	 */
	protected function getDetailsPageObject( $tName, $listId = 0, $data = array() )
	{
		include_once( getabspath('classes/reportpage.php') );
		if( $this->detailsTableObjects[ $tName ] )
			return $this->detailsTableObjects[ $tName ];

		//	new page id is required when creating the page object
		if( !$listId )
			return null;

		$entityType = GetEntityType( $tName );
		$options = array();
		$options["id"] = $listId;
		$options["firstTime"] = 1;
		$options["pdfMode"] = $this->pdfMode;
		$options["masterTable"] = $this->tName;
		$options["masterPageType"] = $this->pageType;
		$options["xt"] = new Xtempl( true ); //#9607 1. Temporary fix
		$options["flyId"] = $this->genId() + 1;
		$options["masterKeysReq"] = array();
		$options["pushContext"] = false;
		if( $this->pdfJsonMode() )
			$options["pdfJson"] = true;

		$mkr = 1;
		$mKeys = $this->pSet->getMasterKeysByDetailTable( $tName );
		$masterKeys = array(); //for PAGE_EDIT only

		foreach($mKeys as $mk)
		{
			$options["masterKeysReq"][ $mkr ] = $data[ $mk ];
			$masterKeys["masterKey".$mkr] = $data[ $mk ];
			$mkr++;
		}

		if ( $this->getLayoutVersion() === PD_BS_LAYOUT )
			$options["pageName"] = $this->pSet->detailsPageId( $tName );

		if( titTABLE == $entityType || titVIEW == $entityType || titSQL == $entityType || titREST == $entityType )
		{
			$options["mode"] = $this->pdfJsonMode() ? LIST_PDFJSON: LIST_DETAILS;
			$options["pageType"] = PAGE_LIST;
			$pageObject = ListPage::createListPage($tName, $options);
		}
		else if( isReport( $entityType ) )
		{
			$options["tName"] = $tName;
			$options["mode"] = REPORT_DETAILS;
			$options["pageType"] = PAGE_REPORT;
			$pageObject = new ReportPage($options);
		}
		else if( isChart( $entityType ) )
		{
			$options["tName"] = $tName;
			$options["mode"] = CHART_DETAILS;
			$options["pageType"] = PAGE_CHART;
			$pageObject = new ChartPage($options);
		}


		$this->detailsTableObjects[ $tName ] = $pageObject;
		return $pageObject;
	}

	/**
	 * A stub
	 */
	function assignButtonsOnMasterEdit( $masterXt )
	{
	}

	/**
	 * @param String listTName
	 * @param Number listId
	 * @param &Array data
	 */
	protected function setDetailList( $listTName, $listId, &$data )
	{
		include_once( getabspath('classes/listpage.php') );
		include_once( getabspath('classes/listpage_embed.php') );
		include_once( getabspath('classes/listpage_dpinline.php') );

		//array of params for classes
		$listPageObject = $this->getDetailsPageObject( $listTName, $listId, $data );
		RunnerContext::push( $listPageObject->standaloneContext );
		$listPageObject->prepareForBuildPage();

		if( $listPageObject->shouldDisplayDetailsPage() )
		{
			//set page events
			foreach( $listPageObject->eventsObject->events as $event => $name )
			{
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			}

			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();

			$listPageObject->BeforeShowList();
			$this->assignDisplayDetailTableXtVariable( $listPageObject );

			$this->copyDetailPreviewJSAndCSS( $listPageObject );
			$this->updateSettingsWidthDPData( $listPageObject );

			$this->viewControlsMap["dViewControlsMap"][ $listTName ] = $listPageObject->viewControlsMap;

			$this->controlsMap["dControlsMap"][ $listTName ] = $listPageObject->controlsMap;
			if( $this->pageType == PAGE_EDIT )
				$this->controlsMap["dControlsMap"]["masterKeys"] = $masterKeys; //?

			$this->controlsMap["dpTablesParams"][] = array("tName" => $listTName, "id" => $listId, "pType" => PAGE_LIST);
		}

		$this->flyId = 	$listPageObject->recId + 1;
		RunnerContext::pop();
	}

	/**
	 * @param String reportTName
	 * @param Number reportId
	 * @param &Array data
	 */
	protected function setDetailReportOnEditView( $reportTName, $reportId, &$data  )
	{
		include_once( getabspath('classes/reportpage.php') );

		//array of params for ReportPage constructor
		$options = array();
		$options["id"] = $reportId;
		$options["mode"] = REPORT_DETAILS;
		$options["pdfMode"] = $this->pdfMode;
		$options["tName"] = $reportTName;
		$options["pageType"] = PAGE_REPORT;
		$options["masterPageType"] = $this->pageType;
		$options["masterTable"] = $this->tName;
		$options["xt"] = new Xtempl( true ); //#9607 1. Temporary fix
		$options["flyId"] = $this->genId() + 1;
		$options["masterKeysReq"] = array();
		$options["pushContext"] = false;
		if( $this->pdfJsonMode() )
			$options["pdfJson"] = true;

		$options["pageName"] = $this->pSet->detailsPageId( $reportTName );

		$mkr = 1;
		$mKeys = $this->pSet->getMasterKeysByDetailTable( $reportTName );
		foreach($mKeys as $mk)
		{
			$options["masterKeysReq"][ $mkr++ ] = $data[ $mk ];
		}

		$reportPageObject = new ReportPage( $options );
		RunnerContext::push( $reportPageObject->standaloneContext );
		$reportPageObject->init();

		// build tabs and set current
		$reportPageObject->processGridTabs();

		$reportPageObject->prepareDetailsForEditViewPage();

		if( !$reportPageObject->shouldDisplayDetailsPage() )
			return false;

		//add detail settings to master settings
		$reportPageObject->addControlsJSAndCSS();
		$reportPageObject->fillSetCntrlMaps();

		$reportPageObject->beforeShowReport();
		$this->assignDisplayDetailTableXtVariable( $reportPageObject );

		$this->copyDetailPreviewJSAndCSS( $reportPageObject );
		$this->updateSettingsWidthDPData( $reportPageObject );


		$this->viewControlsMap["dViewControlsMap"][ $reportTName ] = $reportPageObject->viewControlsMap;
		$this->controlsMap["dControlsMap"][ $reportTName ] = $reportPageObject->controlsMap;
		$this->controlsMap["dpTablesParams"][] = array("tName" => $reportTName, "id" => $options["id"], "pType" => PAGE_REPORT);
		RunnerContext::pop();
	}

	/**
	 * @param String chartTName
	 * @param Number chartId
	 * @param &Array data
	 */
	protected function setDetailChartOnEditView( $chartTName, $chartId, &$data )
	{
		if(	$this->pdfMode || $this->pdfJsonMode() )
			return;

		include_once( getabspath('classes/chartpage.php') );

		$xt = new Xtempl( true ); //#9607 1. Temporary fix

		$options = array();
		$options["xt"] = &$xt;
		$options["id"] = $chartId;
		$options["tName"] = $chartTName;
		$options["mode"] = CHART_DETAILS;
		$options["pageType"] = PAGE_CHART;
		$options["masterPageType"] = $this->pageType;
		$options["masterTable"] = $this->tName;
		$options["flyId"] = $this->genId() + 1; //fix it
		$options["pushContext"] = false;

		$options["pageName"] = $this->pSet->detailsPageId( $chartTName );

		$mkr = 1;
		$mKeys = $this->pSet->getMasterKeysByDetailTable( $chartTName );
		foreach($mKeys as $mk)
		{
			$options["masterKeysReq"][ $mkr++ ] = $data[ $mk ];
		}

		$masterKeysReq = $options["masterKeysReq"];
		if(count($masterKeysReq))
		{
			//	copy keys to session
			for($i = 1; $i <= count($masterKeysReq); $i++)
				$_SESSION[ $chartTName."_masterkey".$i ] = $masterKeysReq[ $i ];

			if( isset($_SESSION[ $chartTName."_masterkey".$i ]) )
				unset( $_SESSION[ $chartTName."_masterkey".$i ] );
		}

		$chartPageObject = new ChartPage($options);
		RunnerContext::push( $chartPageObject->standaloneContext );
		$chartPageObject->init();

		$chartXtParams["id"] = $options["flyId"];
		$chartXtParams["table"] = $chartTName;
		$chartXtParams["ctype"] =  $chartPageObject->pSet->getChartType();
		$chartXtParams["chartName"] = $chartPageObject->shortTableName;
		$chartXtParams["singlePage"] = true;
		$chartXtParams["containerId"] = "rnr" . $chartXtParams["chartName"] . $chartXtParams["id"];

		$xt->assign_function( $chartPageObject->shortTableName."_chart","xt_showchart", $chartXtParams );

		// build tabs and set current
		$chartPageObject->processGridTabs();
		$chartPageObject->prepareDetailsForEditViewPage();

		if( $this->mobileTemplateMode() )
			$xt->assign("container_menu", false);

		$chartPageObject->addControlsJSAndCSS();
		$chartPageObject->fillSetCntrlMaps();

		$this->AddJSFile('libs/js/anychart.min.js');
		$this->AddCSSFile('libs/js/anychart-ui.min.css');
		$this->AddCSSFile('libs/js/anychart-font.min.css');
//		$this->AddJSFile('libs/js/migrationTool.js');

		$chartPageObject->beforeShowChart();
		$this->assignDisplayDetailTableXtVariable( $chartPageObject );

		$this->copyDetailPreviewJSAndCSS( $chartPageObject );
		//add detail settings to master settings
		$this->updateSettingsWidthDPData( $chartPageObject );

		$this->viewControlsMap["dViewControlsMap"][ $chartTName ] = $chartPageObject->viewControlsMap;

		$this->controlsMap["dControlsMap"][ $chartTName ] = $chartPageObject->controlsMap;
		$this->controlsMap["dpTablesParams"][] = array("tName" => $chartTName, "id" => $options['id'], "pType" => PAGE_CHART );
		RunnerContext::pop();
	}

	/**
	 * Get the key values array form the record data array passed
	 * // It's used on the edit/view pages only
	 * @param Array data
	 * @return Array
	 */
	protected function getKeysFromData( $data )
	{
		$keys = array();

		$keyFields = $this->pSet->getTableKeys();
		foreach( $keyFields as $keyField )
		{
			$keys[ $keyField ] = $data[ $keyField ];
		}
		return $keys;
	}

	/**
	 * Add detail JS and CSS files to the master's files list
	 * @param &RunnerPage dtPageObject
	 */
	protected function copyDetailPreviewJSAndCSS( &$dtPageObject )
	{
		$layout = GetPageLayout( $dtPageObject->tName, $dtPageObject->pageType );
		if($layout)
			$this->AddCSSFile( $layout->getCSSFiles(isRTL(), isPageLayoutMobile($this->templatefile), $this->pdfMode != "" ) );

		//Add detail's js files to master's files
		$this->copyAllJSFiles( $dtPageObject->grabAllJSFiles() );
		//Add detail's css files to master's files
		$this->copyAllCSSFiles( $dtPageObject->grabAllCSSFiles() );
	}

	/**
	 * Add detail settings to master settings
	 * @param &RunnerPage dtPageObject
	 */
	protected function updateSettingsWidthDPData( &$dtPageObject )
	{
		$tName = $dtPageObject->tName;

		$this->jsSettings["tableSettings"][ $tName ] = $dtPageObject->jsSettings["tableSettings"][ $tName ];
		foreach($dtPageObject->jsSettings["global"]["shortTNames"] as $keySet => $val)
		{
			if( !array_key_exists($keySet, $this->settingsMap["globalSettings"]["shortTNames"]) )
				$this->settingsMap["globalSettings"]["shortTNames"][ $keySet ] = $val;
		}
	}

	/**
	 * @param &RunnerPage dtPageObject
	 */
	protected function assignDisplayDetailTableXtVariable( &$dtPageObject ) {
		$dtPageObject->prepareDisplayDetails();
		$this->xt->assign_method( "detailslButtons_". $dtPageObject->shortTableName , $dtPageObject, 'showButtonsDp', false );
		$this->xt->assign( "proceedAttrs_". $dtPageObject->shortTableName, 'href="' .$dtPageObject->getProceedUrl().'"' );

		$this->xt->assign(
			"details_pagetitle_". $dtPageObject->shortTableName,
			$dtPageObject->getPageTitle( $dtPageObject->pageName, GoodFieldName( $dtPageObject->tName ) )
		);

		$this->xt->assign( "details_". $dtPageObject->shortTableName, true );
		$this->xt->assign_method( "displayDetailTable_". $dtPageObject->shortTableName , $dtPageObject, 'showPageDp', false );
	}

	/**
	 * Remove columns hidden on the current device from the inline control fields list
	 * @param &Array inlineControlFields
	 * @param Number screenWidth
	 * @param Number screenHeight
	 * @param String orientation		The current device orientation identifier
	 * @return Array
	 */
	public function removeHiddenColumnsFromInlineFields( $inlineControlFields, $screenWidth, $screenHeight, $orientation )
	{
		//	don't remove inline fields if the user can show them
		if( $this->showHideFieldsFeatureEnabled() )
			return $inlineControlFields;

		$devices = array( DESKTOP, TABLET_10_IN, SMARTPHONE_LANDSCAPE, SMARTPHONE_PORTRAIT, TABLET_7_IN );
		foreach( $devices as $d )
		{
			$columnsToHide = $this->pSet->getHiddenFields( $d );
			if( !$columnsToHide || !$this->isColumnHiddenForDevice( $d, $screenWidth, $screenHeight, $orientation ) )
				continue;

			foreach( $columnsToHide as $hiddenField => $status )
			{
				$fieldPos = array_search( $hiddenField, $inlineControlFields );
				if( $fieldPos !== FALSE )
					array_splice( $inlineControlFields, $fieldPos, 1);
			}

			return $inlineControlFields;
		}

		return $inlineControlFields;
	}

	/**
	 * Check if some columns must be hidden on a device of particular type
	 * if the current device has certain screen width and height params.
	 * See also ProjectSettings::getDeviceMediaClause method
	 * @param Number d				Device identifier
	 * @param Number screenWidth
	 * @param Number screenHeight
	 * @param String orientation
	 */
	protected function isColumnHiddenForDevice( $d, $screenWidth, $screenHeight, $orientation )
	{
		if( $d == DESKTOP )
			return $screenWidth >= 1281;

		if( $d == TABLET_10_IN )
			return $screenWidth == 768 && $screenHeight == 1024 || $screenWidth >= 1025 && $screenWidth <= 1280 && $screenHeight <= 1023 || $screenHeight >= 1025 && $screenHeight <= 1280 && $screenWidth <= 1023;

		if( $d == TABLET_7_IN )
			return $screenWidth <= 1024 && $screenHeight <= 800 || $screenHeight <= 1024 && $screenWidth <= 800;

		if( $d == SMARTPHONE_LANDSCAPE )
			return $screenHeight <= 420 && $orientation == 'landscape' || $screenWidth <= 420 && $orientation == 'landscape' ;

		if( $d == SMARTPHONE_PORTRAIT )
			return $screenHeight <= 420 && $orientation == 'portrait' || $screenWidth <= 420 && $orientation == 'portrait';

		return false;
	}


	/**
	 * @param String table				A table name
	 * @param ProjectSettings pSet
	 * @return STring
	 */
	protected static function getKeysTitleTemplate($table, $pSet)
	{
		$keys = $pSet->getTableKeys();
		$str = "";
		foreach($keys as $k)
		{
			if( strlen($str) )
				$str .= ", ";

			$str .= "{%". GoodFieldName( $k ). "}";
		}
		return $str;
	}

	/**
	 * Get the default page's title template
	 * @param String page
	 * @param String table				A good table name
	 * @param ProjectSettings pSet
	 * @return STring
	 */
	public static function getDefaultPageTitle($page, $table, $pSet)
	{
		if( $page == "add" )
			return GetTableCaption($table).", "."Añadir nuevo";
		if( $page == "edit" )
			return GetTableCaption($table).", "."Editar"." [". RunnerPage::getKeysTitleTemplate( $table, $pSet ). "]";
		if( $page == "view" )
			return GetTableCaption($table)." [". RunnerPage::getKeysTitleTemplate( $table, $pSet ). "]";
		if( $page == "export" )
			return "Exportar";
		if( $page == "import" )
			return GetTableCaption($table).", "."Importar";
		if( $page == "search" )
			return GetTableCaption($table)." - "."Búsqueda avanzada";
		if( $page == "print" )
			return GetTableCaption($table);
		if( $page == "rprint" )
			return GetTableCaption($table);
		if( $page == "list" )
			return GetTableCaption($table);
		if( $page == "masterlist" )
			return GetTableCaption($table)." [". RunnerPage::getKeysTitleTemplate( $table, $pSet ). "]";
		if( $page == "masterchart" )
			return GetTableCaption($table);
		if( $page == "masterreport" )
			return GetTableCaption($table)." [". RunnerPage::getKeysTitleTemplate( $table, $pSet ). "]";
		if( $page == "masterprint" )
			return GetTableCaption($table)." [". RunnerPage::getKeysTitleTemplate( $table, $pSet ). "]";
		if( $page == "login" )
			return "Conectar";
		if( $page == "register" )
			return "Registrar";
		if( $page == "register_success" )
			return "Registro exitoso";
		if( $page == "changepwd" )
			return "Cambiar contraseña";
		if( $page == "changepwd_success" )
			return "Cambiar contraseña";
		if( $page == "remind" )
			return "Recordador de contraseña";
		if( $page == "remind_success" )
			return "Recordador de contraseña";
		if( $page == "chart" )
			return GetTableCaption($table);
		if( $page == "report" )
			return GetTableCaption($table);
		if( $page == "dashboard" )
			return GetTableCaption($table);
		if( $page == "menu" )
			return "Menú";
		if( $page == "admin_rights_list" || $page == "admin_members_list" || $page == "admin_admembers_list" )
			return GetTableCaption($table);
		if( $page == PAGE_USERINFO )
			return "Perfil del usuario";

		return GetTableCaption( $table );
	}

	/**
	 * Get a page's title template
	 * @param String page - page id, not type!
	 * @param String A good table name
	 * @param ProjectSettings pSet (optional)
	 * @return String
	 */
	protected function getPageTitleTemplate( $page, $table, $pSet ) {
		global $page_titles;

		if( !$table || $page == PAGE_REGISTER || $page == PAGE_USERINFO )
			$table = GLOBAL_PAGES_SHORT;

		if( $page_titles[$table]
			&& $page_titles[ $table ][ mlang_getcurrentlang() ]
			&& array_key_exists($page, $page_titles[ $table ][ mlang_getcurrentlang() ] ) ) {

			return @$page_titles[ $table ][ mlang_getcurrentlang() ][ $page ];
		}

		return RunnerPage::getDefaultPageTitle( $pSet->getPageType(), $table, $pSet );
	}

	/**
	 * @param String page
	 * @param String table (optional)				A good table name
	 * @param Array record (optional)				A source record data
	 * @param ProjectSettings settings (optional)
	 * @return String
	 */
	public function getPageTitle($page, $table = "", $record = null, $settings = null, $html = true)
	{
		if( $this->isDashboardElement()
			&& GoodFieldName( $this->dashElementData["item"]["table"] ) == $table
			&& $this->dashElementData["item"]["customLabel"] 
			&& $this->dashElementData["item"]["dashLabel"] ) {
			return GetMLString($this->dashElementData["item"]["dashLabel"]);
		}
		return $this->_getPageTitle($page, $table, $record, $settings, $html);
	}

	public function _getPageTitle($page, $table = "", $record = null, $settings = null, $html = true )
	{
		$pSet = is_null( $settings ) ? $this->pSet : $settings;
		$templ = $this->getPageTitleTemplate($page, $table, $pSet);

		$masterRecord = array();
		//	check if template requires master record
		if ( stripos($templ, "{%master." ) !== FALSE )
			$masterRecord = $this->getMasterRecord();

		$currentRecord = array();
		if( $record )
		{
			$currentRecord = $record;
		}
		else
		{
			//	check if template requires current record
			if( preg_match('/{\%(?!master\.)[\w\s\-\.]*}/', $templ ) !== FALSE )
				$currentRecord = $this->getCurrentRecord();
		}

		return $this->calcPageTitle( $templ, $currentRecord, $this->masterTable, $masterRecord, $pSet, $html );
	}

	/**
	 *
	 */
	public function calcPageTitle( $templ, $currentRecord = array(), $masterTable = "" , $masterRecord = array(), $pSet = null, $html = true )
	{
		if( !$pSet )
			$pSet = $this->pSet;

		if( !is_array( $masterRecord ) )
			$masterRecord = array();

		if( !is_array( $currentRecord ) )
			$currentRecord = array();

		$matches = array();
		if( !preg_match_all('/{\%([\w\.\s\-]*)\}/', $templ,  $matches) )
			return $templ;

		foreach( $matches[0] as $m )
		{
			if( !strcasecmp( substr($m, 0, 9), "{%master." ) )
			{
				$mSettings = new ProjectSettings( $masterTable, PAGE_LIST );
				$field = $mSettings->getFieldByGoodFieldName( trim(substr( $m, 9, strlen($m) - 10 )) );
				include_once getabspath('classes/controls/ViewControlsContainer.php');
				$masterViewControl = new ViewControlsContainer($mSettings, PAGE_LIST);
				$templ = str_replace($m, $masterRecord ? $masterViewControl->showDBValue($field, $masterRecord, "", "", $html) : "", $templ);
			}
			else
			{
				$field = $pSet->getFieldByGoodFieldName( trim(substr( $m, 2, strlen($m) - 3 )) );
				$fieldValue = "";
				if( $currentRecord ) {
					$fieldValue = $this->pdfJsonMode()
						? jsreplace( $this->getTextvalue( $field, $currentRecord) )
						: $this->showDBValue( $field, $currentRecord, "", $html );
				}
				$templ = str_replace($m,  $fieldValue, $templ );
			}
		}
		return $templ;
	}


	public function setPageTitle( $str ) {
		$this->xt->assign( "pagetitlelabel", $str );
	}

	function getCurrentRecord()
	{
		return array();
	}

	/**
	 * @param String field name (A good field name case-sensitive)
	 * @param String label value
	 * @return Boolean
	 */
	public function setFieldLabel($field, $label)
	{
		global $field_labels;
		if(isset($field_labels[GoodFieldName($this->tName)][mlang_getcurrentlang()][GoodFieldName($field)]))
		{
			$field_labels[GoodFieldName($this->tName)][mlang_getcurrentlang()][GoodFieldName($field)] = $label;
			return true;
		}
		else
			return false;
	}

	protected function assignBody()
	{
		if( $this->pdfJsonMode() ) {
			return;
		}
		$this->body["begin"] .= GetBaseScriptsForPage(false);
		if( !$this->mobileTemplateMode() )
			$this->body["begin"] .= "<div id=\"search_suggest".$this->id."\"></div>\r\n";

		$this->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $this );
		$this->xt->assign("body", $this->body);
	}

	/**
	 *
	 */
	public function getInputElementId( $field, $pSet = null )
	{
		if( !$pSet )
			$pSet = $this->pSet;
		$format = $pSet->getEditFormat( $field );
		if($format == EDIT_FORMAT_DATE)
		{
			$type = $pSet->getDateEditType($field);
			if($type==EDIT_DATE_DD || $type==EDIT_DATE_DD_DP)
				return "dayvalue_".GoodFieldName($field)."_".$this->id;
			else
				return "value_".GoodFieldName($field)."_".$this->id;
		}
		else if($format==EDIT_FORMAT_RADIO)
			return "radio_".GoodFieldName($field)."_".$this->id."_0";

		else if($format==EDIT_FORMAT_LOOKUP_WIZARD)
		{
			$lookuptype = $pSet->lookupControlType($field);
			if( $this->mobileTemplateMode() && $lookuptype == LCT_AJAX )
				$lookuptype = LCT_DROPDOWN;
			if($lookuptype==LCT_AJAX || $lookuptype==LCT_LIST)
				return "display_value_".GoodFieldName($field)."_".$this->id;
			else
				return "value_".GoodFieldName($field)."_".$this->id;
		}
		else
			return "value_".GoodFieldName($field)."_".$this->id;
	}

	/**
	 * Get the current record data to build correct edit controls (xt_buildeditcontrol)
	 * @return Array
	 */
	public function getFieldControlsData()
	{
		return array();
	}

	/**
	 * @return Boolean
	 */
	public function isSearchPanelActivated()
	{
		return $this->searchPanelActivated;
	}

	/**
	 *	Builds SQL expression based on key values:
	 * 	key1=1 and key2='a'
	 *
	 *	@return String
	 */
	public function keysSQLExpression( $keys )
	{
		$keyFields = $this->pSet->getTableKeys();
		$chunks = array();
		foreach($keyFields as $kf)
		{
			$value = $this->cipherer->MakeDBValue($kf, $keys[ $kf ], "", true);

			if( $this->connection->dbType == nDATABASE_Oracle )
				$valueisnull = $value === "null" || $value == "''";
			else
				$valueisnull = $value === "null";

			if( $valueisnull )
				$chunks[] = $this->getFieldSQL( $kf )." is null";
			else
				$chunks[] = $this->getFieldSQLDecrypt( $kf )."=".$this->cipherer->MakeDBValue($kf, $keys[ $kf ], "", true);
		}
		return implode( " and ", $chunks );
	}
	/**
	 * Counts totals, depending on theirs type
	 *
	 * @param array $totals
	 * @param array $data
	 */
	function countTotals(&$totals, &$data)
	{
		for($i = 0; $i < count($this->totalsFields); $i ++)
		{
			$curTotalFieldValue = $data[$this->totalsFields[$i]['fName']];

			if ( !isset($totals[$this->totalsFields[$i]['fName']]) )
			{
				$totals[$this->totalsFields[$i]['fName']] = 0;
			}

			if($this->totalsFields[$i]['totalsType'] == 'COUNT')
			{
				if ( $this->totalsFields[$i]['viewFormat'] == FORMAT_CHECKBOX && ( is_null($curTotalFieldValue) || !$curTotalFieldValue ) )
				{
					continue;
				}

				if(0 != strlen($curTotalFieldValue))
					$totals[$this->totalsFields[$i]['fName']]++;
			}
			else if($this->totalsFields[$i]['viewFormat'] == "Time")
			{
				$time = GetTotalsForTime($curTotalFieldValue);
				$totals[$this->totalsFields[$i]['fName']] += $time[2]+$time[1]*60 + $time[0]*3600;
			}
			else
				$totals[$this->totalsFields[$i]['fName']] += (double)$curTotalFieldValue;

			if($this->totalsFields[$i]['totalsType'] == 'AVERAGE')
			{
				if(!is_null($curTotalFieldValue) && $curTotalFieldValue!=="")
					$this->totalsFields[$i]['numRows']++;
			}
		}
	}


	protected function getTotalDataCommand() {
		return $this->getSubsetDataCommand();
	}
	
	function buildTotals( &$totals ) {
	}

	public function buildAllDataTotals() {
		if( !$this->totalsFields )
			return;
		
		$dc = $this->getTotalDataCommand();
		
		if( $this->pSet->getRecordsLimit() )
			$dc->reccount = $this->pSet->getRecordsLimit();

		$totalTypes = array('TOTAL' => 'sum', 'AVERAGE' => 'avg', 'COUNT' => 'count');

		$dc->totals = array();
		foreach( $this->totalsFields as $tf ) {			
			$dc->totals[] = array(
				"total" => $totalTypes[ $tf["totalsType"] ],
				"alias" => $tf["totalsType"]."_".$tf["fName"],
				"field" => $tf["fName"],
				"timeToSec" => $tf['viewFormat'] == "Time"
			);	
		}
		
		$totals = array();
		$rs = $this->dataSource->getTotals( $dc );
		if( $rs ) {
			$data = $rs->fetchAssoc();
			if( $data ) {
				foreach( $this->totalsFields as $idx => $tf ) {
					$totals[ $tf["fName"] ] = $data[ $tf["totalsType"]."_".$tf["fName"] ];
					 $this->totalsFields[ $idx ]["numRows"] = 1;
				}
			}
		}
		$this->buildTotals( $totals );	
	}
	
	
	function deleteAvailable() {
		return $this->pSet->hasDelete() && $this->permis[$this->tName]["delete"];
	}
	function importAvailable() {
		return $this->permis[$this->tName]["import"] && $this->pSet->hasImportPage();
	}
	function editAvailable() {
		return $this->pSet->hasEditPage() && $this->permis[$this->tName]["edit"];
	}
	function addAvailable() {
		return $this->pSet->hasAddPage() && $this->permis[$this->tName]["add"];
	}
	function copyAvailable() {
		return $this->pSet->hasCopyPage() && $this->permis[$this->tName]["add"];
	}
	function inlineEditAvailable() {
		return $this->permis[$this->tName]["edit"] && $this->pSet->hasInlineEdit();
	}
	function updateSelectedAvailable() {
		return $this->permis[$this->tName]["edit"] && $this->pSet->hasUpdateSelected();
	}
	function inlineAddAvailable() {
		return $this->permis[$this->tName]["add"] && $this->pSet->hasInlineAdd();
	}
	function viewAvailable() {
		return $this->permis[$this->tName]["search"] && $this->pSet->hasViewPage();
	}
	function exportAvailable() {
		return $this->permis[$this->tName]["export"] && $this->pSet->hasExportPage();
	}
	function printAvailable() {
		return $this->permis[$this->tName]["export"] && $this->pSet->hasPrintPage();
	}

	function advSearchAvailable() {
		return $this->permis[$this->tName]["search"] && count( $this->pSet->getAdvSearchFields() );
	}

	/**
	 *	Checks if grid tabs should be displayed on the the page.
	 *	True for List, chart, report pages
	 *	@return Boolean
	 */
	function gridTabsAvailable() {
		return false;
	}


	function getIncludeFileMapProvider()
	{
		switch( getMapProvider() ){
			case GOOGLE_MAPS:
				return "gmap.js";
				break;
			case OPEN_STREET_MAPS:
				return "osmap.js";
				break;
			case BING_MAPS:
				return "bingmap.js";
				break;
			case HERE_MAPS:
				return "heremap.js";
				break;
			case MAPQUEST_MAPS:
				return "mapquest.js";
				break;
		}
	}

	function includeOSMfile()
	{
		if( getMapProvider() == OPEN_STREET_MAPS )
			$this->AddJSFile("plugins/OpenLayers.js");
	}


	/**
	 *	Returns true is the page has multistepped layout
	 *  @return boolean
	 */
	function isMultistepped()
	{
		return $this->pSet->isMultistepped();
	}

	/**
	 *
	 */
	function prepareSteps()
	{
		if( !$this->isMultistepped() )
			return;

		$this->xt->assign('steps_block', true);

		$this->controlsMap['initialStep'] = $this->initialStep;
		$this->controlsMap['multistep'] = true;

		$this->xt->assign("nextStepButton", true);
	}

	protected function preparePdfControls()
	{

		if( $this->pdfMode )
			return;

		$this->controlsMap['printPdf'] = array();
		$this->controlsMap['printPdf']['pageType'] = $this->pageType;
		$this->xt->assign("pdflink_block", true);
	}

	function formatReportFieldValue( $field, &$data, $keylink = "" )
	{
		if( $this->format == "excel" || $this->format == "word")
		{
			return $this->getExportValue( $field, $data, $keylink, true );
		}
		return $this->showDBValue($field, $data, $keylink);
	}

	/**
	 *
	 */
	function getMasterTableInfo( $table = "")
	{
		if( $table == "" )
			$table = $this->masterTable;

		return $this->getMasterTableInfoByPSet($this->tName, $table, $this->pSet);
	}

	/**
	 * @param String tName
	 * @param String mtName
	 * @param ProjectSettings pSet
	 * @return Array
	 */
	protected function getMasterTableInfoByPSet( $tName, $mtName, $pSet )
	{
		$masterTablesInfoArr = $pSet->getMasterTablesArr();

		if( !$masterTablesInfoArr )
			return array();

		foreach( $masterTablesInfoArr as $masterTableData )
		{
			if( $mtName == $masterTableData['mDataSourceTable'] )
				return $masterTableData;
		}

		return array();
	}

	/**
	 * A wrapper for SearchClause::getSearchObject
	 * @return SearchClause
	 */
	public function getSearchObject()
	{
		$sessionPrefix = $this->sessionPrefix;
		if( $this->dashTName && $this->pSet->getEntityType() != titDASHBOARD ) {
			$sessionPrefix = $this->dashTName . "_" . $this->tName;
		}
		return SearchClause::getSearchObject( $this->tName, $this->dashTName, $sessionPrefix,
			$this->cipherer, $this->searchSavingEnabled, $this->pSet, $this->getLayoutVersion() === PD_BS_LAYOUT );
	}

	protected function assignMenus() {
		foreach( $this->pSet->getPageMenus() as $menu ) {
			$menuId = $menu["id"];
			if( $this->isAdminTable() ) {
				$menuId = "adminarea";
			}

			$this->assignMenu( $menuId, $menu["horizontal"] );
		}
	}
	
	protected function assignMenu( $menuName, $horizontal ) {
		global $projectMenus;
		if ( !in_array($menuName, $projectMenus) ) {
			$menuName = "main";
		}
		if( $this->isAdminTable() )
			$menuName = "adminarea";
		
		$menuObject = RunnerMenu::getMenuObject( $menuName );
		$menuRoot = $menuObject->getRoot();

		MenuItem::setMenuSession();

		$activeItem = $menuObject->findActiveItem( $_SESSION['menuItemId'], $this->tName, $this->getPageType() );
		$activeId = $activeItem ? $activeItem->id : null;
		$menuData = $menuRoot->getMenuXtData( $activeId, $horizontal ? MENU_HORIZONTAL : MENU_VERTICAL );
		$this->xt->assign( "menuitems_".$menuName, array( "data" => array( 0 => &$menuData ) ) );

	}
	

	/**
	 * @param String mTName
	 * @param String mType
	 * @param String tName
	 * @param String pType
	 * @return Array
	 */
	protected function getMenuItemDetailPeersData( $mTName, $mType, $tName, $pType )
	{
		$mPSet = new ProjectSettings( $mTName, $mType );
		$peers = array();

		foreach( $mPSet->getDetailTablesArr() as $dt )
		{
			if( $dt["dDataSourceTable"] == $tName && $dt["dType"] == $pType )
				continue;

			if( $dt["dType"] == PAGE_LIST )
				$type = "List";
			elseif( $dt["dType"] == PAGE_CHART )
				$type = "Chart";
			else
				$type = "Report";

			if( !$this->isUserHaveTablePerm( $dt["dDataSourceTable"], $type ) )
				continue;



			$mKeys = array();
			$masterRecordData = $_SESSION[ $mTName . "_masterRecordData" ];
			$detailsData = array();
			if( !$masterRecordData )
				$masterRecordData = $this->getMasterRecord();

			$keyLabelTemplates = array();
			foreach( $dt["masterKeys"] as $idx => $dk )
			{
				$mKeys[] = "masterkey".($idx + 1)."=".rawurlencode( $masterRecordData[ $dk ] );
				$keyLabelTemplates[] = "{%" . GoodFieldName( $dt["detailKeys"][$idx] ) . "}";
				$detailsData[ $dt["detailKeys"][$idx] ] = $masterRecordData[ $dk ];
			}

			$href = GetTableLink( GetTableURL( $dt["dDataSourceTable"] ), $dt["dType"] );
			$href.= "?".implode("&", $mKeys) ."&mastertable=" . rawurlencode($mTName);


			$labelTemplate = Labels::getBreadcrumbsLabelTempl( $dt["dDataSourceTable"] , $mTName );
			if( $labelTemplate == "" )
				$labelTemplate = GetTableCaption( GoodFieldName( $dt["dDataSourceTable" ]) ) ." [" . implode( ", ", $keyLabelTemplates ) . "]";
			$caption = $this->calcPageTitle($labelTemplate, $detailsData, $mTName, $masterRecordData, new ProjectSettings( $dt["dDataSourceTable"] ) );

			$peers[] = array("title" => $caption, "href" => $href);
		}

		return $peers;
	}

	/**
	 * @param &MenuItem menuRoot
	 * @param &MenuItem currentMenuItem
	 * @return Array
	 */
	protected function getMasterDetailMenuItems( &$menuRoot, &$currentMenuItem )
	{
		$items = array();

		$pSet = $this->pSet;
		$tName = $this->tName;
		$caption = GetTableCaption( GoodFieldName($tName) );
		$pType = $this->pageType;
		$sessionPrefix = $this->sessionPrefix;
		while( isset( $_SESSION[ $sessionPrefix."_mastertable" ] ) )
		{
			$mTName = $_SESSION[ $sessionPrefix."_mastertable" ];

			$masterTableData = $this->getMasterTableInfoByPSet( $tName, $mTName, $pSet );
			if( !$masterTableData )
				break;

			$masterRecordData = $_SESSION[ $mTName . "_masterRecordData" ];
			$detailsData = array();
			$keyLabelTemplates = array();

			foreach( $masterTableData["masterKeys"] as $idx => $dk )
			{
				$keyLabelTemplates[] = "{%" . GoodFieldName( $masterTableData["detailKeys"][$idx] ) . "}";
				$detailsData[ $masterTableData["detailKeys"][$idx] ] = $masterRecordData[ $dk ];
			}

			if( $currentMenuItem )
			{
				$itemData = array("isMenuItem" => true, "menuItem" => $currentMenuItem, "title" => $currentMenuItem->title);
			}
			else
			{
				$caption = GetTableCaption( GoodFieldName( $tName ) );
				$href = GetTableLink( GetTableURL( $tName ), $pType );
				$itemData = array("isMenuItem" => false, "menuItem" => array( "href" => $href ), "title" => $caption );
			}

			if( !$items )
			{
				$otherDetailsData = $this->getMenuItemDetailPeersData( $mTName, $masterTableData["type"], $tName, $pType );
				if(  count( $otherDetailsData ) > 0 )
					$itemData["detailPeers"] = $otherDetailsData;
			}

			$labelTemplate = Labels::getBreadcrumbsLabelTempl( $tName, $mTName );
			if( $labelTemplate == "" )
				$labelTemplate = $itemData["title"] . " [" . implode(", ", $keyLabelTemplates) . "]";

			$itemData["title"] = $this->calcPageTitle( $labelTemplate, $detailsData, $mTName, $masterRecordData, $pSet );

			$items[] = $itemData;

			$menuObject = RunnerMenu::getMenuObject( "main" );
			if( $menuObject )
				$currentMenuItem = $menuObject->findActiveItem( null, $mTName, $masterTableData["type"] );

			$tName = $mTName;
			$pType = $masterTableData["type"];
			$sessionPrefix = $mTName;
			$pSet = new ProjectSettings( $mTName, $masterTableData["type"] );
		}

		if( count( $items ) )
		{
			$crumb = array();
			if( $currentMenuItem )
			{
				$crumb = array("isMenuItem" => true, "menuItem" => $currentMenuItem, "title" => $currentMenuItem->title );
			}
			else
			{
				$href = GetTableLink( GetTableURL( $tName ), $pType );
				$crumb = array("isMenuItem" => false, "menuItem" => array( "href" => $href ), "title" => $caption );
			}

			$labelTemplate = Labels::getBreadcrumbsLabelTempl( $tName );
			if( $labelTemplate != "" )
				$crumb[ "title" ] = $this->calcPageTitle( $labelTemplate );

			$items[] = $crumb;
		}

		return $items;
	}

	function getBreadcrumbMenuId() {
		return "main";
	}

	protected function checkShowBreadcrumbs()
	{
		return true;
	}

	/**
	 * @param String menuId
	 */
	protected function prepareBreadcrumbs()
	{
		if ( !$this->checkShowBreadcrumbs() ) {
			return;
		}

		$menuId = $this->getBreadcrumbMenuId();

		if( $this->isPD() && !$this->pSet->hasBreadcrumb() ) {
			return;
		}

		//$detailItem = isset( $_SESSION[ $this->sessionPrefix."_mastertable" ] ); //  #14869
		$detailItem = strlen( $this->masterTable ) > 0;

		$menuObject = RunnerMenu::getMenuObject( $menuId );
		$menuRoot = $menuObject->getRoot();
		MenuItem::setMenuSession();
		if( !$menuObject ) {
			return;
		}
		$currentMenuItem = $menuObject->findActiveItem( $_SESSION["menuItemId"], $this->tName, $this->getPageType() );
		if( !$currentMenuItem && !$detailItem )
			return;

		if( $currentMenuItem && !$detailItem )
		{
			if( !$currentMenuItem->parentItem )
				return;
		}

		$this->xt->assign( "breadcrumbs", true );

		$this->xt->assign( "breadcrumb", true );

		$this->xt->assign( "crumb_home_link", runner_htmlspecialchars( GetLocalLink("menu") ) );

		$breadChain = $this->getMasterDetailMenuItems( $menuRoot, $currentMenuItem );
		$firstShowPeersIndex = count( $breadChain );
		if( $firstShowPeersIndex > 0 && $breadChain[ $firstShowPeersIndex - 1 ]["isMenuItem"] )
			$currentMenuItem = $breadChain[ $firstShowPeersIndex - 1 ]["menuItem"]->parentItem;

		if( $currentMenuItem )
		{
			while( $currentMenuItem->parentItem )
			{
				$crumb = array("isMenuItem" => true, "menuItem" => $currentMenuItem);
				$labelTemplate = Labels::getBreadcrumbsLabelTempl( $currentMenuItem->getTable(), "", $currentMenuItem->getPageType() );
				if( $labelTemplate != "" )
					$crumb[ "title" ] = $this->calcPageTitle( $labelTemplate );
				else
					$crumb[ "title" ] = $currentMenuItem->title;
				$breadChain[] = $crumb;

				$currentMenuItem = $currentMenuItem->parentItem;
			}
		}

		$breadcrumbs = array();

		//	add home item
		for( $i = count( $breadChain ) - 1; $i >= 0; --$i )
		{
			$itemData = $breadChain[ $i ];
			$crumb = array();

			$item = null;
			$attrs = array();

			if( $itemData["isMenuItem"] )
			{
				$item = $itemData["menuItem"];
				$attrs = $item->getMenuItemAttributes( MENU_HORIZONTAL );
				$href = $attrs["href"];
			}
			else
			{
				$href = $itemData["menuItem"]["href"];
			}

			$title = $itemData["title"];

			if( $i < $firstShowPeersIndex && $i )
				$crumb["crumb_attrs"] = 'href="' . $href . ( strpos( $href, "?" ) !== FALSE ? "&a=return" : "?a=return") . '"';
			else
				$crumb["crumb_attrs"] = 'href="' . $href . '"';

			if( $firstShowPeersIndex > 0 && $i == 0 )
				$crumb["crumb_title_span"] = true;
			else
				$crumb["crumb_title_link"] = true;

			$crumb["crumb_title"] = $title;

			if( $i < $firstShowPeersIndex && ( !$itemData["detailPeers"] || !$itemData["isMenuItem"] )
				|| ( $this->isAdminTable() ) )
			{
				$breadcrumbs[] = $crumb;
				continue;
			}

			if ( is_null($item) )
				continue;

			$dropItems = array();
			$peers = array();
			$detailPeers = !!$itemData["detailPeers"];

			if( $detailPeers  )
				$peers = $itemData["detailPeers"];
			else
				$item->parentItem->getItemDescendants( $peers );

			if( count( $peers ) > 1 || $detailPeers )
			{
				foreach( $peers as $p )
				{
					if( $detailPeers )
					{
						$dropItems[] = '<li><a href="'. $p["href"] .'">'. $p["title"] .'</a></li>';
						continue;
					}

					if( $p->id == $item->id )
						continue;

					$attrs = array();

					if( !$p->showAsLink() && $p->showAsGroup() )
					{
						//	show link to the first child if group
						$childWithLink = $p->getFirstChildWithLink();
						if( $childWithLink )
							$attrs = $childWithLink->getMenuItemAttributes( MENU_HORIZONTAL );
					}
					else if( $p->showAsLink() )
					{
						$attrs = $p->getMenuItemAttributes( MENU_HORIZONTAL );
					}

					if( count( $attrs ) )
						$dropItems[] = '<li><a href="' . $attrs["href"] . '">' . $p->title . '</a></li>';
				}

				if( count( $dropItems ) > 0 )
				{
					$crumb["crumb_title"] .= '<span class="caret"></span>';
					$crumb["crumb_attrs"] .= ' class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"';
					$crumb["crumb_item_class"] = 'dropdown';
					$crumb["crumb_dropdown"] = '<ul class="dropdown-menu">'. implode( "", $dropItems ) .'</ul>';
				}
			}

			$breadcrumbs[] = $crumb;
		}
		$this->xt->assign_loopsection( "crumb", $breadcrumbs );
	}

	/**
	 *
	 */
	public function fillControlFlags( $field, $required = false )
	{
		if( $this->isBootstrap() && ( $required || $this->pSet->isRequired( $field ) ) )
			$this->xt->assign( GoodFieldName( $field  ) . "_label", array( "end" => '&nbsp;<span class="icon-required"></span>' ) );
		else
			$this->xt->assign( GoodFieldName( $field  ) . "_label", true );
	}

	/**
	 * set badge colors for details links
	 */
	protected function setDetailsBadgeStyles() {
		if( !$this->detailsInGridAvailable() )
			return;

		foreach( $this->allDetailsTablesArr as $det ) {
			if( !$this->pSet->detailsShowCount( $det['dDataSourceTable'] ) )
				continue;

			$color = $this->pSet->getDetailsBadgeColor( $det['dDataSourceTable'] );
			if( !$color ) {
				// get default wizard color
				$dSet = new ProjectSettings( $det["dDataSourceTable"], $det["dType"] );
				$color = "#".$dSet->getDefaultBadgeColor();
			}

			$this->row_css_rules = ".badge.badge.". $det["dShortTable"] ."_badge { background-color:". $color ." }\n"
				. $this->row_css_rules;
		}
	}

	function detailsInGridAvailable()
	{
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++)
		{
			$detTable = $this->allDetailsTablesArr[$i]['dDataSourceTable'];

			$dPset = new ProjectSettings( $detTable );
			$detTablePermis = $this->permis[ $detTable ];
			$detTableType = $dPset->getEntityType();
			$detListAvailabel = ( $dPset->hasListPage() || isReport( $detTableType ) || isChart( $detTableType ) ) && $detTablePermis["search"];
			$detAddAvailabel = $dPset->hasAddPage() && $detTablePermis["add"];
			$detEditAvailabel = $dPset->hasEditPage() && $detTablePermis["edit"];

			if( $detListAvailabel || ( ( $this->pSet->detailsLinks() == DL_INDIVIDUAL || count($this->allDetailsTablesArr) == 1 )  && ( $detAddAvailabel || $detEditAvailabel ) ) )
			{
				return true;
			}
		}
		return false;
	}

	public function mobileTemplateMode() {
		return mobileDeviceDetected() && !$this->isBootstrap();
	}


	/**
	 *
	 * 	@return Array
	 */
	protected function getColumnsToHide()
	{
		return $this->getHiddenColumnsByDevice();
	}

	protected static function deviceClassToMacro( $deviceClass ) {
		if( $deviceClass == TABLET_10_IN || $deviceClass == TABLET_7_IN )
			return 1;
		if( $deviceClass == SMARTPHONE_LANDSCAPE || $deviceClass == SMARTPHONE_PORTRAIT )
			return 2;
		return 0;
	}

	protected function getSpecificPageSettings( $pageType ) {
		$pSet = $this->pSet;
		if( $this->getPageType() !== $pageType ) {
			$pSet = new ProjectSettings( $this->tName, $pageType );
		}
		return $pSet;
	}
	protected function showHideFieldsFeatureEnabled() {
		$pSet = $this->getSpecificPageSettings( PAGE_LIST );
		return $pSet->isAllowShowHideFields();
	}

	protected function reorderFieldsFeatureEnabled() {
		$pSet = $this->getSpecificPageSettings( PAGE_LIST );
		return $pSet->isAllowFieldsReordering();
	}


	/**
	 * 	Prepare array with Show/Hide fields data combined with Columns by device
	 * 	@return Array
	 */
	protected function getCombinedHiddenColumns()
	{
		if( !$this->showHideFieldsFeatureEnabled() )
			return $this->getHiddenColumnsByDevice();

		include_once getabspath("classes/paramsLogger.php");

		$logger = new paramsLogger( $this->tName, SHFIELDS_PARAMS_TYPE );
		$hideColumns = $logger->getShowHideData();

		$columnsByDeviceEnabled = $this->pSet->columnsByDeviceEnabled();

		$ret = array();
		$devices = array( DESKTOP, TABLET_10_IN, SMARTPHONE_LANDSCAPE, SMARTPHONE_PORTRAIT, TABLET_7_IN );
		foreach( $devices as $d )
		{
			if( !$columnsByDeviceEnabled )
				$ret[ $d ] = $hideColumns[ 0 ];
			else if( $hideColumns[ RunnerPage::deviceClassToMacro($d) ] )
				$ret[ $d ] = $hideColumns[ RunnerPage::deviceClassToMacro($d) ];
			else
			{
				$ret[ $d ] = array_keys( $this->pSet->getHiddenGoodNameFields( $d ) );
			}
		}
		return $ret;
	}

	/**
	 * 	Prepare array with Columns by device
	 * 	@return Array
	 */
	protected function getHiddenColumnsByDevice()
	{
		$columnsToHide = array();
		$devices = array( TABLET_7_IN, SMARTPHONE_PORTRAIT, SMARTPHONE_LANDSCAPE, TABLET_10_IN, DESKTOP );
		foreach( $devices as $d )
		{
			$columnsToHide[ $d ] = array_keys($this->pSet->getHiddenGoodNameFields( $d ));
		}
		return $columnsToHide;
	}

	/*
	 *
	 */
	public static function sendEmailByTemplate($toEmail, $template, $data, $html = false)
	{
		$templateFile = "email/" . mlang_getcurrentlang() . "/" . $template . ".txt";
		return sendEmailTemplate( $toEmail, $templateFile, $data, $html );
	}

	/**
	 * @return Mixed
	 */
	protected function getSelectedRecords()
	{
		$selected_recs = array();
		$keyFields = $this->pSet->getTableKeys();

		//	process selection
		if( @$_REQUEST["mdelete"] )
		{
			foreach( @$_REQUEST["mdelete"] as $ind )
			{
				$keys = array();
				foreach( $keyFields as $idx => $f )
				{
					$keys[ $f ] = refine( $_REQUEST[ "mdelete" + ( $idx + 1 ) ][ mdeleteIndex( $ind ) ] );
				}
				$selected_recs[] = $keys;
			}
		}
		elseif( $this->selection )
		{
			foreach( $this->selection as $keyblock )
			{
				$arr = explode( "&", refine( $keyblock ) );
				if( count( $arr ) < count( $keyFields ) )
					continue;

				$keys = array();
				foreach( $keyFields as $idx => $f)
				{
					$keys[ $f ] = urldecode( $arr[ $idx ] );
				}
				$selected_recs[] = $keys;
			}
		}
		else
			return null;

		return $selected_recs;
	}


	/**
	 * @return Array
	 */
	protected function getSelection()
	{
		if( "php" == "asp")
		{
			$selection = array();
			foreach( $this->selection as $s )
			{
				$selection[] = $s;
			}
			return $selection;
		}
		else
		{
			return $this->selection;
		}
	}

	/**
	 *	Data command for a specific WHERE tab.
	 *	@return DsCommand
	 */
	function getTabDataCommand( $tab )
	{
		$this->tabChangeling = $tab;
		$dc = $this->getSubsetDataCommand();
		$this->tabChangeling = null;
		return $dc;
	}

	/**
	 *	Simple mode - page displayed in a separate browser's window with no AJAX involved
	 *	@return Boolean
	 */
	function simpleMode()
	{
		//	More rigid check would involve checking $this->mode for each page type
		//	i.e. in ChartPage ($this->mode == CHART_SIMPLE)
		return $this->id == 1;
	}



	/**
	 *	Checks if grid tabs should be displayed inside the page.
	 *	True for simple mode, false for dashboards etc
	 *	@return Boolean
	 */
	function displayTabsInPage()
	{
		return $this->simpleMode();
	}

	/**
	 *	Add table captions to grid tab titles.
	 *	We need them when displaying tabs from different details tables in a single tab control:
	 *	Suppliers - All data (100) | Suppliers - good ones (5) | Shippers - all | Shippers - reliable
	 */
	function updateDetailsTabTitles()
	{
		if( !$this->changeDetailsTabTitles )
			return;
		foreach( array_keys( $this->gridTabs ) as $i )
		{
			$id = $this->gridTabs[$i]["tabId"];
			$this->setTabTitle( $id, GetTableCaption( GoodFieldName($this->tName) ) . ' - ' . $this->getTabTitle( $id ) );
		}
	}

	/**
	 *	Checks if the page should be displayed in the details mode
	 *	Applies to List/Chart/Report pages displayed on master's Add/Edit/View
	 *	@return Boolean
	 */
	function shouldDisplayDetailsPage()
	{
		return true;
	}

	/**
	 * 	Hide all items of the specified type
	 */
	function hideItemType( $type ) {
		if( $type == "grid_message") {
			$this->hideGridMessage();
		} else if( $type == "grid" ) {
			$this->hideForm( "grid" );
		} else {
			$itemsByType =& $this->pSet->helperItemsByType();
			$this->xt->displayItemsHidden( $itemsByType[ $type ] );
		}
	}

	function hideItem( $itemId, $recordId = "" ) {
		$this->xt->displayItemHidden( $itemId, $recordId );
	}

	function showItem( $itemId,  $recordId = "" ) {
		$this->xt->showHiddenItem( $itemId, $recordId );
	}


	function hideAllFormItems( $location ) {

		$helper = $this->pSet->helperFormItems();
		if( !is_array( $helper[ "formItems" ][ $location ] ) ) {
			return;
		}
		$this->xt->displayItemsHidden( $helper[ "formItems" ][ $location ] );
	}


	function showItemType( $type ) {
		$itemsByType =& $this->pSet->helperItemsByType();
		$this->xt->showHiddenItems( $itemsByType[ $type ] );
	}

	function hideForm( $form ) {
		$this->xt->assign( "form_".$form , $this->xt->getvar( "form_". $form ). " data-hidden");
	}

	function setPageData( $key, $value ) {
		$this->pageData[$key] = $value;
	}

	function getMasterPSet() {
		if( !$this->masterPSet && $this->masterTable ) {
			$this->masterPSet = new ProjectSettings( $this->masterTable, $this->masterPageType, $this->masterPage );
		}
		return $this->masterPSet;
	}

	function fetchForms( $forms ) {
		$formBlocks = array();
		foreach( $forms as $f )
		{
			$formBlocks[] = $f."_block";
		}
		return $this->fetchBlocksList( $formBlocks );
	}

	function hideElement( $name ) {
		if( $this->isPD()) {
			$itemTypes = $this->element2Item( $name  );
			foreach( $itemTypes as $it ) {
				$this->hideItemType( $it );
			}
		} else {
			$this->xt->displayBrickHidden( $this->element2Brick( $name ) );
		}
	}

	function element2Brick( $name ) {
		return $name;
	}

	function element2Item( $name ) {

		if( $name == "recordcontrol") {
			return array( "inline_save_all", "inline_cancel_all", "delete", "update_selected", "export_selected", "delete_selected" );
		}
		if( $name == "reorder_records") {
			return array( 'sort_dropdown' );
		}
		if( $name == "printpanel") {
			return array( 'print_panel' );
		}
		if( $name == "message") {
			return array( 'message' );
		}
		if( $name == "searchpanel") {
			return array( 'search_panel', 'hide_search_panel' );
		}
		if( $name == "pagination") {
			return array( 'pagination' );
		}
		if( $name == "filterpanel") {
			return array( 'filter_panel' );
		}
		return $name;
	}

	function hideGridMessage() {
		$this->xt->assign("grid_message_attrs", "data-hidden");
	}


	public function prepareDisplayDetails() {
	}
	public function showButtonsDp() {

	}

	function prepareCharts()
	{
		$chartXtParams =  array( "id" => $this->id );
		$this->xt->assign_function("chart", "xt_showpdchart", $chartXtParams);
	}

	function hideRecordItem( $itemId, $recordid ) {
		if( !$this->pdfJsonMode() )
			$this->recordAssign( $recordid, "item_" . $itemId, 'data-hidden' );
		else
			$this->recordAssign( $recordid, "item_hide_" . $itemId, '1' );
	}

	function recordAssign( $recordid, $key, $value ) {
		$data =& $this->findRecordAssigns( $recordid );
		$data[ $key ] = $value;
	}

	/**
	 * Returns reference to the array that holds record values for XTempl
	 * It is the same array that is passed to the BeforeMoveNext event as $record
	 */
	function &findRecordAssigns( $recordid ) {
		return array();
	}

	function pdfJsonMode() {
		return false;
	}

	function searchFieldAppearsOnPage( $field ) {
		if( $this->pageType === PAGE_SEARCH ) {
			return $this->pSet->appearOnPage( $field );
		}
		return $this->pSet->appearAlwaysOnSearchPanel( $field );
	}

	function createProjectSettings() {
		$this->pSet = new ProjectSettings($this->tName, $this->pageType, $this->pageName, $this->pageTable );
		/**
		 * Page type here has priority over page name. If supplied pageName is not compatible with the pageType, ignore the former.
		 * ATTENTION! It is not so in the PageSettings class. On the opposite, pageName has priority there.
		 */
		if( $this->pSet->getPageType() !== $this->pageType ) {
			$this->pSet = new ProjectSettings($this->tName, $this->pageType, null, $this->pageTable );
		}
	}

	/**
	 * format interval group value, like number interval or date part ( April 2010 )
	 * @return String
	 */
	function formatGroupValue( $fName, $intervalType, $value )
	{
		return RunnerPage::formatGroupValueStatic( $fName, $intervalType, $value, $this->pSet, $this, $this->pdfJsonMode() );
	}


	static function formatGroupValueStatic( $fName, $intervalType, $value, $pSet, $fieldControls, $pdfJsonMode )
	{
		if( !$intervalType ) {
			$data = array( $fName => $value );
			return $fieldControls->showDBValue( $fName, $data );
		}

		$fType = $pSet->getFieldType( $fName );
		if( IsNumberType( $fType ) ) {
			$start = $value - ($value % $intervalType);
			if( !IsFloatType( $fType ) ) {
				// 10 - 19, 20 - 29
				$end = $start + $intervalType - 1;
			} else  {
				// just a guess: 10.00-19.99, 20.00 - 29.99
				$end = $start + $intervalType - 0.01;
			}

			$dataStart = array( $fName => $start );
			$dataEnd = array( $fName => $end );

			$strStart = $fieldControls->showDBValue( $fName, $dataStart );
			$strEnd = $fieldControls->showDBValue( $fName, $dataEnd );

			return $pdfJsonMode
				// remove exessive ' wrappers: start "'1'", end "'2'"  --> "'1-2'"
				? substr( $strStart, 0 , strlen( $strStart ) - 1 )." - ".substr( $strEnd, 1 )
				: $strStart . " - " . $strEnd;
		}
		else if( isCharType( $fType ) )
		{
			$result = xmlencode( substr( $value, 0, $intervalType ) );
			return $pdfJsonMode ? "'". jsreplace( $result ) ."'" : $result;
		}
		else if( IsDateFieldType( $fType ) )
		{
			$result = formatDateIntervalValue( $value, $intervalType );
			return $pdfJsonMode ? "'". jsreplace( $result ) ."'" : $result;
		}
		return $value;
	}

	/**
	 * preloads and assigns "background" parameter
	 */
	function preparePDFBackground() {
		if( !$this->pdfBackgroundImage ) {
			return;
		}
		//  CAREFUL! $this->pdfBackgroundImage comes from client's browser
		//	Only files from "/images" can be used
		$filename = "images/" . str_replace('..', '', $this->pdfBackgroundImage );
		$image = myfile_get_contents_binary( getabspath( $filename ));
		$imgSize = getImageDimensions( $image );
		if( $imgSize ) {
			$this->xt->assign( "bgWidth", $imgSize["width"] );
			$this->xt->assign( "bgHeight", $imgSize["height"] );
		}
		$url = imageDataUrl( $image );
		if( !$url )
			return;
		$this->xt->assign( "backgroundImage", "'" . jsreplace( $url ) . "'" );
	}

	function getMasterCondition() {
		if( !$this->detailKeysByM )
			return null;

		$conditions = array();
		for( $i = 0; $i < count( $this->detailKeysByM ); ++$i )
		{
			$conditions[] = DataCondition::FieldEquals( $this->detailKeysByM[ $i ], $this->masterKeysReq[ $i + 1 ] );
		}
		return DataCondition::_And( $conditions );
	}

	/**
	 * returns current details key value
	 * @return string
	 */
	function getDetailsKeyValue( $field ) {
		foreach( $this->detailKeysByM as $i => $f )  {
			if( $field == $f )
				return $this->masterKeysReq[ $i + 1 ];
		}
		return false;
	}

	function getSecurityCondition() {
		return Security::SelectCondition( "S", $this->pSet );
	}


	function getDataSourceFilterCriteria( $ignoreFilterField = "" )
	{
		$security = $this->getSecurityCondition();
		$search = $this->searchClauseObj->getSearchDataCondition( $controls );
		$filter = $this->searchClauseObj->getFilterCondition( $this->pSet, $ignoreFilterField );
		$master = $this->getMasterCondition();
		$tab = DataCondition::SQLCondition( $this->getCurrentTabWhere() );
		$map = $this->dependsOnDashMap()
			? $this->getMapCondition()
			: null;
		$fieldFilter = $this->getFieldFilterCondition();


		return DataCondition::_And( array( $security, $master, $filter, $search, $tab, $map, $fieldFilter ) );
	}

	public function getSubsetDataCommand( $ignoreFilterField = "" ) {

		$ret = new DsCommand;
		$ret->filter = $this->getDataSourceFilterCriteria( $ignoreFilterField );
		$orderObject = $this->getOrderObject();
		$ret->order = $orderObject->getOrderFields();
		return $ret;
	}

	function getMasterTableDataClause()
	{
		if( !$this->detailKeysByM )
			return null;

		$ret = array();
		for($i = 0; $i < count( $this->detailKeysByM ); $i++)
		{
			$mKey = $_SESSION[ $this->sessionPrefix."_masterkey".($i + 1) ];
			$ret[] = DataCondition::FieldEquals(
				$this->detailKeysByM[$i],
				$_SESSION[ $this->sessionPrefix."_masterkey".($i + 1) ]
			);

		}
		return DataCondition::_And( $ret );
	}

	function getOrderObject() {
		require_once(getabspath('classes/orderclause.php'));
		return OrderClause::createFromPage( $this, false );
	}

	/**
	 * editid1=...& editid2=...&...
	 * for template variable
	 */
	function getEditLink( &$data )
	{
		$keyLinkParts = array();

		$tKeys = $this->pSet->getTableKeys();
		for( $i = 0; $i < count($tKeys); $i++ )
		{
			$keyValue = rawurlencode( $data[ $tKeys[$i] ] );
			$keyLinkParts[] = "editid".($i + 1)."=".runner_htmlspecialchars( $keyValue );
		}

		return implode( "&", $keyLinkParts );
	}

	/**
	 * read masterkeyN request params
	 */
	public static function readMasterKeysFromRequest()
	{
		$i = 1;
		$options = array();

		while( isset( $_REQUEST["masterkey".$i] ) )
		{
			$options[ $i ] = $_REQUEST["masterkey".$i];
			$i++;
		}

		return $options;
	}

	/**
	 * get master keys data
	 * keys: masterkeyN
	 */
	protected function getMasterKeysParams()
	{
		$params = array();

		if( !$this->masterKeysReq )
			return $params;

		for( $i = 1; $i <= count( $this->masterKeysReq ); $i++ )
		{
			$params[ "masterkey".$i ] = $this->masterKeysReq[ $i ];
		}

		return $params;
	}

	/**
	 * page state params for #14869
	 */
	protected function getStateParams()
	{
		$params = array();
		if( $this->masterTable )
		{
			$params = $this->getMasterKeysParams();
			$params["mastertable"] = $this->masterTable;
		}
		return $params;
	}

	/**
	 *  @param  startWidth String
	 * for startWidth "?"
		return "?mastertable=...&masterkey1=..."
	 * for startWidth "&"
		return "&mastertable=...&masterkey1=..."
	 * default result is
		"mastertable=...&masterkey1=..."
	 *
	 * return "" in case getStateParams returns an empty array
	 *
	 * @return String
	 */
	function getStateUrlParams()
	{

		$urlParams = array();
		foreach( $this->getStateParams() as $name => $value )
		{
			$urlParams[] = $name."=".runner_htmlspecialchars( rawurlencode( $value ) );
		}

		return implode( "&", $urlParams );
	}

	/**
	 * @return String
	 */
	protected function getMasterPageName() {
		$masterTableData = $this->getMasterTableInfo();
		if( $this->pageType == PAGE_PRINT || $this->pageType == PAGE_RPRINT ) {
			if( $masterTableData["type"] == PAGE_REPORT )
				$mPageType = "masterrprint";
			else
				$mPageType = "masterprint";
		} else {
			$mPageType = "masterlist";

			if( $masterTableData["type"] == PAGE_CHART )
				$mPageType = "masterchart";

			if( $masterTableData["type"] == PAGE_REPORT )
				$mPageType = "masterreport";
		}
		$mpSet = new ProjectSettings( $masterTableData['mDataSourceTable'], $mPageType );
		return $mpSet->pageName();
	}

	/**
	 * Get rows count for tab
	 */
	protected function getRowCountByTab($tab)
	{
		$dc = $this->getTabDataCommand( $tab );
		$this->callBeforeQueryEvent( $dc );
		return $this->dataSource->getCount( $dc );
	}

	function callBeforeQueryEvent( $dc )
	{

	}

	/**
	 *
	 */
	protected function checkOauthLogin() {
		if( !$this->dataSource ) {
			return true;
		}
		if( $this->dataSource->checkAuthorization() )
			return true;
		$request = $this->dataSource->getAuthorizationInfo();
		Security::saveRedirectURL();
		header( "Location: " . $request->getUrl() );
		exit();
	}

	/**
	 *
	 */
	protected function getRelatedInlineEditPage( $pageName = "", $keys = null, $id = "" ) {
		require_once getabspath('classes/editpage.php');

		$id = $id ? $id : $this->genId();

		$xt = new Xtempl();
		//array of params for classes
		$params = array();
		$params["id"] = $id;
		$params["xt"] = &$xt;
		$params["keys"] = $keys;
		$params["mode"] = EDIT_INLINE;
		$params["pageType"] = PAGE_EDIT;
		$params["pageName"] = $pageName ;
		$params["tName"] = $this->tName;

		$params["masterTable"] = $this->masterTable;
		if( $params["masterTable"] )
			$params["masterKeysReq"] = $this->masterKeysReq;

		/*if($this->dashTName) {
			$params["dashTName"] = $this->dashTName;
			$params["dashElementName"] = $this->dashElementName;
		}*/

		return new EditPage( $params );
	}

	public function getEditContolParams( $fName, $recId, &$data ) {
		global $locale_info;

		$parameters = array();
		$parameters["id"] = $recId;
		$parameters["ptype"] = PAGE_EDIT;
		$parameters["field"] = $fName;
		$parameters["pageObj"] = $this;
		$parameters["value"] = @$data[ $fName ];

		$parameters["extraParams"] = array();

		if( $this->getEditFormat( $fName ) !== EDIT_FORMAT_READONLY ) {
			$parameters["value"] = $this->getControl( $fName )->getDisplayValue( $data );
			$parameters["validate"] = $this->pSet->getValidation( $fName );
		}

		$parameters["mode"] = $this->mode == EDIT_INLINE ? "inline_edit" : "edit";

		if( $this->pSet->isUseRTE( $fName ) && $this->pSet->isAutoUpdatable( $fName ) ) {
			$_SESSION[ $this->sessionPrefix."_".$fName."_rte" ] = GetAutoUpdateValue( $fName, PAGE_EDIT );
			$parameters["mode"] = "add";
		}

		return $parameters;
	}

	public function getContolMapData( $fName, $recId, &$data, $pageFields ) {
		if( !$pageFields )
			$pageFields = $this->editFields;

		$controls = array();
		$controls["controls"] = array();
		$controls["controls"]["ctrlInd"] = 0;
		$controls["controls"]["id"] = $recId;
		$controls["controls"]["fieldName"] = $fName;

		$controls["controls"]["mode"] = $this->mode == EDIT_INLINE ? "inline_edit" : "edit";

		if( in_array( $fName, $this->detailKeysByM ) ) // detail key field
			$controls["controls"]["value"] = $data[ $fName ];

		$preload = $this->fillPreload( $fName, $this->editFields, $data );
		if( $preload !== false )
			$controls["controls"]["preloadData"] = $preload;

		return $controls;
	}

	/**
	 * @param Array fields - array of field names
	 */
	public function assignFieldBlocksAndLabels( $fields = array() )
	{
		if( !$fields )
			$fields = $this->getPageFields();

		foreach($fields as $fName)
		{
			$gfName = GoodFieldName($fName);

			$this->xt->assign($gfName."_fieldblock", true);
		}
	}

	protected function recheckUserPermissions() {
		if( Security::isGuest() || !isLogged() ) {
			$this->setMessage( "Su sesión ha expirado." .
				"<a href='#' id='loginButtonContinue" . $this->id . "'>" .
				"Login" . "</a>" .
				"para guardar los datos." );
		} else {
			$this->setMessage( 'You have no permissions to complete this action.' );
		}

		return false;
	}

	public function setMessage( $message ) {
		$this->message = $message;
	}

	/**
	 * Returns edit format of a field, apply format overrides
	 */
	public function getEditFormat( $field, $pSet = null ) {
		if( $pSet )
			return $pSet->getEditFormat( $field );

		return $this->pSetEdit->getEditFormat( $field );
	}

	/**
	 * true when user has Admin ( 'M' mask ) permissions on the table
	 * This user can view/edit all records regardless of ownership
	 * @return boolean
	 */
	public function hasAdminPermissions() {
		return strpos( GetUserPermissions( $this->tName ), 'M' ) !== false;
	}

	/**
	 * true when the user is Locking feature administartor.
	 * She can break record locks and force saving
	 * @return boolean
	 */
	public function lockingAdmin() {
		return $this->hasAdminPermissions() || Security::isAdmin();
	}

	public function getMaxOrderValue( $pSet ) {
		$dc = new DsCommand;
		$alias = generateAlias();
		$dc->totals[0] = array(
			"field" => $pSet->reorderRowsField(),
			"total" => "max",
			"alias" => $alias
		);
		$rs = $this->dataSource->getTotals( $dc );
		$data = $rs->fetchAssoc();
		return (int)$data[ $alias ];
	}

	/**
	 * Attempt at securing unique order field value for the reorderRows feature
	 * @param ProjecSetting pSet
	 * @param Integer order - initial order value.
	 * @return Integer - pseudo-unique value of order more or equal to initial value
	 */

	public function getUniqueOrder( $pSet, $order ) {
		$orderField = $pSet->reorderRowsField();
		$dc = new DsCommand;
		$dc->filter = DataCondition::_Not( DataCondition::FieldIs( $orderField, dsopLESS, $order ));
		$dc->order = array( array(
			"column" => $orderField,
			"dir" => "ASC"
		));
		$rs = $this->dataSource->getList( $dc );
		$orders = array();
		while( $data = $rs->fetchAssoc() ) {
			$orders[ $data[ $orderField ] ] = true;
		}
		while( $orders[ $order ] ) {
			++$order;
		}
		return $order;
	}

	protected function getListPSet() {
		if( !$this->listPagePSet )  {
			$this->listPagePSet = new ProjectSettings( $this->tName, PAGE_LIST );
		}
		return $this->listPagePSet;
	}

	protected function reoderCommandForReoderedRows( $listPSet, &$dc ) {
		if( !$listPSet->reorderRows() ) {
			return;
		}

		//	avoiding porting array_splice to C# and ASP
		$newOrder = array(
			array(
				"column" => $listPSet->reorderRowsField(),
				"dir" => $listPSet->inlineAddBottom() ? "ASC" : "DESC"
			)
		);

		foreach( $dc->order as $o ) {
			$newOrder[] = $o;
		}

		$dc->order = $newOrder;
	}

	function inDashboardMode() {
		return false;
	}

	/**
	 * Tells if the page data should be filtered by a map on the dashboard
	 */
	function dependsOnDashMap() {
		return $this->inDashboardMode() && $this->mapRefresh;
	}

	protected function getUserActivationUrl( $username, $code ) {
		return projectURL() . GetTableLink( "register" )
			."?a=activate&u=".rawurlencode( base64_encode( $username ) )
			."&code=".rawurlencode( $code );
	}

	protected function getSessionContolSettings() {
		$option = getSecurityOption('sessionControl');

		$settings = array();
		// Sessions never expire
		$settings["keepAlive"] = $option["keepAlive"];
		// Sessions expire after N minutes of inactivity
		$settings["forceExpire"] = $option["forceExpire"];
		// Minutes of inactivity for session expiration
		$settings["lifeTime"] = $option["lifeTime"];

		// Time interval in seconds for "keepAlive"/"forceExpire" requests
//		$settings["requestDelay"] = $option["forceExpire"] && $option["lifeTime"] < 2 ? 30 : 60;
		$settings["requestDelay"] = $option["forceExpire"] ? 30 : 60;
		// Register button/link clicking as user activity
		$settings["clickTracking"] = true;
		// Warn user N seconds before session expiration
		$settings["warnBeforeSeconds"] = 60;

		return $settings;
	}

	/**
	 * @param Number storage provider type, one of stpXXX constants
	 * @return Boolean
	 */
	protected function hasStorageProviderFields( $sProvider ) {
		foreach( $this->pSet->getFieldsList() as $field ) {
			if( $this->pSet->fileStorageProvider( $field ) == $sProvider ) {
				return true;
			}
		}
		return false;
	}

	protected function checkFSProviders() {
		$cloudFields = $this->pSet->getOAuthCloudFields();
		if( !$cloudFields ) {
			return;
		}
		$providers = array();
		foreach( $cloudFields as $f ) {
			$prov = $this->pSet->fileStorageProvider( $f );
			if( $providers[ $prov ] ) {
				//	check each provider only once
				continue;
			}
			$providers[ $prov ] = true;
			$fs = getStorageProvider( $this->pSet, $f );
			$fs->loadAccessToken();
		}
	}

	protected function getNotifications() {
		if( !$this->pSet->hasNotifications() ) {
			return false;
		}
		require_once( getabspath( "classes/notifications.php" ) );
	$noti = new RunnerNotifications( getNotificationSettings() );
		if( !$noti->enabled ) {
			return false;
		}
		$ret = array();
		$ret["messages"] = $noti->getMessages();
		$ret["lastRead"] = $noti->getLastRead();
		$ret["currentTime"] = now();
		return $ret;
	}

	protected function detailInGridAvailable( $detailTableData ) {
		return true;
	}

	protected function proceedLinkAvailable( $dTable ) {
		return $this->pSet->detailsProceedLink( $dTable );
	}

	protected function detailsHrefAvailable() {
		return true;
	}

	protected function getFieldFilterFields() {
		if ( $this->pageType == PAGE_PRINT || $this->pageType == PAGE_EXPORT ) {
			$settings = $this->getFieldFilterSettings();
			return array_keys( $settings );
		}
		return $this->pSet->getFieldFilterFields();
	}

	/**
	 * @return array array( $fieldName? -> values[] )
	 */
	protected function getFieldFilterSettings() {
		$settings = $_SESSION[ $this->sessionPrefix . "_fieldFilter" ];
		return $settings ? $settings : array();
	}

	/**
	 * @param array $settings ~ array( $fieldName -> values[] )
	 */
	protected function setFieldFilterSettings( $settings ) {
		$_SESSION[ $this->sessionPrefix . "_fieldFilter" ] = $settings;
	}

	/**
	 * Get FieldFilter settings for field
	 * @return array array( $fieldName => array( "initialized" => bool, "values" => array ) )
	 */
	protected function getFieldFilterFieldSettings( $fieldName ) {
		$settings = $this->getFieldFilterSettings();
		$fieldSettings = $settings[ $fieldName ];

		if( !$fieldSettings ) {
			return array(
				"values" => array(),
				"initialized" => false,
			);
		}

		return $settings[ $fieldName ];
	}

	/**
	 * Set FieldFilter settings for field
	 */
	protected function setFieldFilterFieldSettings( $fieldName, $values ) {
		$settings = $this->getFieldFilterSettings();
		$settings[ $fieldName ] = $values;
		$this->setFieldFilterSettings( $settings );
	}

	/**
	 * FieldFilter DISTINCT values of field
	 */
	protected function getFieldFilterDistinctValues( $fieldName ) {
		global $fieldFilterMaxValuesCount,
			$fieldFilterDefaultValue;

		// dont' apply current field's fieldFilter
		$fieldFilterSettings = $this->getFieldFilterSettings();
		$newSettings = $fieldFilterSettings;
		unset( $newSettings[ $fieldName ] );
		$this->setFieldFilterSettings( $newSettings );

		$dc = $this->getSubsetDataCommand();
		// do not apply pagination
		$dc->startRecord = 0;
		$dc->reccount = -1;

		$this->setFieldFilterSettings( $fieldFilterSettings );

		$dc->totals[] = array(
			"field" => $fieldName,
			"total" => "distinct",
			// merge empty string && null to null
			"caseStatement" => DataCondition::CaseFieldOrNull(
				DataCondition::_Not( DataCondition::FieldIs( $fieldName, dsopEMPTY, '' ) ),
				$fieldName
			),
			// IMPORTANT! alias, caseStatement leads to nameless column in select statement
			"alias" => "fieldfilter_" . $fieldName
		);
		$dc->reccount = $fieldFilterMaxValuesCount;

		$dataSource = $this->getDataSource();
		$result = $dataSource->getTotals( $dc );

		$fieldValues = array();
		while( $data = $result->fetchAssoc() ) {
			$value = $data[ "fieldfilter_" . $fieldName ];
			$fieldValues[] = $value;
		}

		if( $this->fieldFilterSortMethod( $fieldName ) == 0 ) {
			sort( $fieldValues, SORT_REGULAR );
		}

		
		return $fieldValues;
	}

	/* 
		Returns result as:
		[
				{ 
			  		value: <field value>,
			  		display: <formatted field value, с учетом viewAs>,
			  		search: [массив строк],
			  		selected: boolean - если в поле есть фильтр, и это значение выбрано, то true
				}
		] for each field DISTINCT value
	*/
	protected function getFieldFilterState( $fieldName ) {
		$distinctValues = $this->getFieldFilterDistinctValues( $fieldName );
		$filterSettings = $this->getFieldFilterFieldSettings( $fieldName );
		$filterValues = $filterSettings[ "values" ];
		$filterInitialized = $filterSettings[ "initialized" ];

		// "set" of values (array where keys are FieldFilter values)
		// if filter not defined, all values allowed
		$filterValuesSet = array();
		$allowedValues = $filterInitialized ? $filterValues : $distinctValues;
		foreach( $allowedValues as $value ) {
			$filterValuesSet[ $value ] = true;
		}

		$stateEntries = array();
		foreach( $distinctValues as $rawValue ) {
			$stateEntries[] = $this->getFieldFilterStateEntry( $fieldName, $rawValue, $filterValuesSet );
		}

		if( $this->fieldFilterSortMethod( $fieldName ) == 1 ) {
			usort( $stateEntries, array( $this, "fieldFilterSort") );
		}
		return $stateEntries;
	}

	function fieldFilterSort( $e1, $e2 ) {
		if( $e1["display"] == $e2["display"] ) {
			return 0;
		}
		return $e1["display"] > $e2["display"]
			? 1
			: -1;
	}

		
	/**
	 * Depending on the field type or View as type either the raw values need to be sorted, or the formatted ones
	 * @return  0 - sort raw values
	 * 			1 - sort formatted values
	 * Dates and numbers should be sorted as raw values
	 * Lookup wizards should be sorted as formatted values
	 * etc
	 */

	function fieldFilterSortMethod( $fieldName ) {
		if( $this->pSet->lookupField( $fieldName ) ) {
			return 1;
		}
		$viewFormat = $this->pSet->getViewFormat( $fieldName );
		$type = $this->pSet->getFieldType( $fieldName );

		if( IsNumberType( $type ) || IsTimeType( $type ) || IsDateFieldType( $type ) ) {
			return 0;
		}
		return 1;
	}

	/**
	 * @param string $fieldName field name
	 * @param mixed $value raw value
	 * @param array $selectedValuesSet KV array, where keys are selected FieldFilter values for specified field
	 * @return array
	 */
	protected function getFieldFilterStateEntry( $fieldName, $value, $selectedValuesSet ) {
		global $fieldFilterMaxDisplayValueLength,
			$fieldFilterMaxSearchValueLength,
			$fieldFilterDefaultValue,
			$fieldFilterValueShrinkPostfix;

		$returnValue = (string)$value !== "" ? $value : $fieldFilterDefaultValue;
		$data = array( $fieldName => $returnValue );

		$displayValue = (string)$this->getTextValue( $fieldName, $data );
		$displayValue = $displayValue !== "" ? $displayValue : "(" . "Vacio" . ")";

		$returnDisplayValue = runner_strlen( $displayValue ) > $fieldFilterMaxDisplayValueLength 
			? runner_substr( $displayValue, 0, $fieldFilterMaxDisplayValueLength ) . $fieldFilterValueShrinkPostfix
			: $displayValue;
			
		$searchValues = array( runner_substr( $displayValue, 0, $fieldFilterMaxSearchValueLength ) );
	
		// if field ViewFormat is Currency -> add value formatted as Number(with local delimiter) to search values
		$viewControl = $this->getViewControl( $fieldName );
		if( $viewControl->viewFormat == FORMAT_CURRENCY || $viewControl->viewFormat == FORMAT_NUMBER ) {
			$numberDisplayValue = formatNumberForEdit( $returnValue );
			$searchValues[] = runner_substr( $numberDisplayValue, 0, $fieldFilterMaxSearchValueLength ) ;
		}

		return array(
			"value" => $returnValue,
			"display" => $returnDisplayValue,
			"search" => $returnValue ? $searchValues : array( (string)$returnValue ),
			"selected" => isset( $selectedValuesSet[ $returnValue ] )
		);
	}

	protected function getFieldFilterCondition() {
		$pageFields = $this->getPageFields();
		$fieldFilterFields = $this->getFieldFilterFields();
		$filterFields = array_intersect( $pageFields, $fieldFilterFields );

		$fieldsConditions = array();
		foreach( $filterFields as $fieldName ) {
			$filterSettings = $this->getFieldFilterFieldSettings( $fieldName );
			$filterValues = $filterSettings[ "values" ];
			$filterInitialized = $filterSettings[ "initialized" ];

			// do not apply any condition if FieldFilter not initialized
			if( !$filterInitialized ) {
				continue;
			}

			// select empty row set
			if( count( $filterValues ) == 0 ) {
				$fieldsConditions[] = DataCondition::_False();
				continue;
			}

			// TODO: Possible where clause -> WHERE (case when $fieldName IS NULL then "" else $fieldName end) IN (...values, "")
			$valuesConditions = array();
			foreach( $filterValues as $value ) {
				if( $value === "" ) {
					$valuesConditions[] = DataCondition::FieldIs( $fieldName, dsopEMPTY, "" );
				}

				$valuesConditions[] = DataCondition::FieldEquals( $fieldName, $value );
			}

			$fieldsConditions[] = DataCondition::_Or( $valuesConditions );
		}
		
		return DataCondition::_And( $fieldsConditions );
	}

	public function processFieldFilter() {

		if( postvalue("fieldFilter") ) {
			$fieldFilterParams = my_json_decode( postvalue("fieldFilter") );
			$fieldName = $fieldFilterParams["field"];
			$fieldFilterFields = $this->getFieldFilterFields();

			if( !in_array( $fieldName, $fieldFilterFields ) ) {
				echo "Filter is not enabled for " . $fieldName . " field";
				return true;
			}

			if( $fieldFilterParams["updateFieldFilterValues"] ) {
				$values = my_json_decode( $fieldFilterParams["values"] );
				$addToExisting = my_json_decode( $fieldFilterParams["addToExisting"] );

				$fieldFilterFields = $this->getFieldFilterFields();

				if( !in_array( $fieldName, $fieldFilterFields ) ) {
					echo "Filter is not enabled for " . $fieldName . " field";
					return true;
				}
				
				$newValues = array();
				if( $addToExisting ) {
					$fieldSettings = $this->getFieldFilterFieldSettings( $fieldName );
					$filterValues = $fieldSettings[ "values" ];
					$newValues = array_unique( array_merge( $filterValues, $values ) );
				} else {
					$newValues = $values;
				}

				$newSettings = array(
					"values" => $newValues,
					"initialized" => true
				);

				$this->setFieldFilterFieldSettings( $fieldName, $newSettings );
				echo my_json_encode( array( "ok" => true ) );
				return true;
			}
			
			if( $fieldFilterParams["filterValues"] ) {
				$fieldFilterFields = $this->getFieldFilterFields();
				
				if( !in_array( $fieldName, $fieldFilterFields ) ) {
					echo "Filter is not enabled for " . $fieldName . " field";
					return true;
				}

				$response = array( "values" => $this->getFieldFilterState( $fieldName ) );
				echo printJSON( $response );
				return true;
			}

			echo "Unrecognized FieldFilter request";
			return true;
		}

		if( postvalue("a") == "clearFieldFilterValues" ) {
			$this->setFieldFilterSettings( array() );
			// continue processing request
			return false;
		}
		
		return false;
	}

	// records are filtered by FieldFilter feature
	protected function fieldFilterEnabled() {
		return false;
	}
}



class DetailsPreview extends RunnerPage
{
	function __construct($params)
	{
		parent::__construct($params);
	}

	protected function assignSessionPrefix()
	{
		$this->sessionPrefix = "_detailsPreview";
	}

}

$menuNodesObject = null;
?>