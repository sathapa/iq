<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-12-26 16:25:47 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-26 16:25:47 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-26 16:26:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-26 16:26:46 --> Query error: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_crmcontact('all','all','all',
							'all','all',0,50,'all','all')
