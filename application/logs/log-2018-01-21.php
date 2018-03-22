<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-21 10:31:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-21 10:31:45 --> Query error: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_crmcontact('all','all','all',
							'all','all',0,50,'all','all')
