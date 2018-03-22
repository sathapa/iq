<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-20 07:39:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-20 07:39:44 --> Query error: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_crmcontact('all','all','all',
							'all','all',0,50,'all','all')
ERROR - 2018-01-20 12:27:00 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-01-20 12:28:58 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
