<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id_centro',
'nom_centro',
'barrio_centro',
'direc_centro',
'departamento',
'id_regional',
'id_municipio',
'fecha_reg_centro',
'extension' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_centro' => array( 'import_field' ),
'nom_centro' => array( 'import_field1' ),
'id_municipio' => array( 'import_field2' ),
'barrio_centro' => array( 'import_field3' ),
'direc_centro' => array( 'import_field4' ),
'fecha_reg_centro' => array( 'import_field5' ),
'extension' => array( 'import_field6' ),
'id_regional' => array( 'import_field7' ),
'departamento' => array( 'import_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field3',
'import_field4',
'import_field8',
'import_field7',
'import_field2',
'import_field5',
'import_field6' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field8' => 'grid',
'import_field7' => 'grid',
'import_field2' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field3',
'import_field4',
'import_field8',
'import_field7',
'import_field2',
'import_field5',
'import_field6' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'id_centro',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'nom_centro',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'id_municipio',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'barrio_centro',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'direc_centro',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'fecha_reg_centro',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'extension',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'id_regional',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'departamento',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 13,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>