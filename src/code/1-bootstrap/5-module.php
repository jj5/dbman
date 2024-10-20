<?php


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-10-21 jj5 - trace load if enabled...
//

if ( defined( 'APP_TRACE_LOAD' ) && APP_TRACE_LOAD ) {

  error_log( "loading: " . __FILE__ );

}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-10-21 jj5 - load dependencies...
//

require_once __DIR__ . '/4-config.php';


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-10-21 jj5 - load modules...
//

mud_load_modules( __DIR__ . '/../5-module', 'app' );


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// 2024-10-21 jj5 - load generated code...
//

//require_once __DIR__ . '/../../gen/dal/include.php';

