<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id_Solicitudes',
'Fecha',
'Hora',
'Estado',
'Cantidad',
'TipoSolicitud',
'fk_id_Servicio',
'fk_id_Cliente',
'Observaciones' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_Solicitudes' => array( 'import_field' ),
'Fecha' => array( 'import_field1' ),
'Hora' => array( 'import_field2' ),
'Estado' => array( 'import_field3' ),
'Cantidad' => array( 'import_field4' ),
'Observaciones' => array( 'import_field5' ),
'TipoSolicitud' => array( 'import_field6' ),
'fk_id_Servicio' => array( 'import_field7' ),
'fk_id_Cliente' => array( 'import_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field6',
'import_field7',
'import_field8',
'import_field5' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field5' => 'grid' ),
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
'import_field2',
'import_field3',
'import_field4',
'import_field6',
'import_field7',
'import_field8',
'import_field5' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'id_Solicitudes',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'Fecha',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'Hora',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'Estado',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'Cantidad',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'Observaciones',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'TipoSolicitud',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'fk_id_Servicio',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'fk_id_Cliente',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 13,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>