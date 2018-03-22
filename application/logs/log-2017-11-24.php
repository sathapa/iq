<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-11-24 06:31:49 --> Severity: error --> Exception: Call to undefined function getAllIsoncr() /var/www/html/application/controllers/frontend/Iso.php 47
ERROR - 2017-11-24 06:32:58 --> Severity: error --> Exception: Call to undefined function getAllIsoncr() /var/www/html/application/controllers/frontend/Iso.php 47
ERROR - 2017-11-24 06:33:00 --> Severity: error --> Exception: Call to undefined function getAllIsoncr() /var/www/html/application/controllers/frontend/Iso.php 47
ERROR - 2017-11-24 06:33:43 --> Severity: error --> Exception: Call to undefined function getAllIsoncr() /var/www/html/application/controllers/frontend/Iso.php 47
ERROR - 2017-11-24 06:35:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;iso_nonconformance&quot; does not exist
LINE 3: from iso_nonconformance a
             ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) from (
select a.*
from iso_nonconformance a
)
iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance() line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-24 06:35:47 --> Query error: ERROR:  relation "iso_nonconformance" does not exist
LINE 3: from iso_nonconformance a
             ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) from (
select a.*
from iso_nonconformance a
)
iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance() line 6 at RETURN - Invalid query: select * from qw.get_iso_nonconformance()
ERROR - 2017-11-24 06:36:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;iso_nonconformance&quot; does not exist
LINE 3: from iso_nonconformance a
             ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) from (
select a.*
from iso_nonconformance a
)
iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance() line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-24 06:36:15 --> Query error: ERROR:  relation "iso_nonconformance" does not exist
LINE 3: from iso_nonconformance a
             ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) from (
select a.*
from iso_nonconformance a
)
iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance() line 6 at RETURN - Invalid query: select * from qw.get_iso_nonconformance()
ERROR - 2017-11-24 06:37:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;iso_nonconformance&quot; does not exist
LINE 3: from iso_nonconformance a
             ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) from (
select a.*
from iso_nonconformance a
)
iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance() line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-24 06:37:56 --> Query error: ERROR:  relation "iso_nonconformance" does not exist
LINE 3: from iso_nonconformance a
             ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) from (
select a.*
from iso_nonconformance a
)
iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance() line 6 at RETURN - Invalid query: select * from qw.get_iso_nonconformance()
ERROR - 2017-11-24 06:40:11 --> Severity: error --> Exception: syntax error, unexpected '$sql' (T_VARIABLE) /var/www/html/application/models/frontend/Isoncr_model.php 17
ERROR - 2017-11-24 06:41:47 --> Severity: error --> Exception: syntax error, unexpected '$sql' (T_VARIABLE) /var/www/html/application/models/frontend/Isoncr_model.php 17
ERROR - 2017-11-24 06:43:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;crm_account_activity&quot;
LINE 11:     WHERE crm_account_activity.crm_activity_id = in_nrc_id
                   ^
QUERY:  UPDATE qw.iso_nonconformance
    SET
    customerno = in_customerno ,
    division = in_division,
    orig_salesorder = in_orig_salesorder,
    new_salesorder = in_new_salesorder,
    ncr_category = in_ncr_category,
    ncr_description = in_ncr_description,
    corrective_action = in_corrective_action,
    preventative_action = in_preventative_action 
    WHERE crm_account_activity.crm_activity_id = in_nrc_id
CONTEXT:  PL/pgSQL function qw.create_update_isoncr(text,text,text,text,text,text,text,text,text,text) line 33 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-24 06:43:10 --> Query error: ERROR:  missing FROM-clause entry for table "crm_account_activity"
LINE 11:     WHERE crm_account_activity.crm_activity_id = in_nrc_id
                   ^
QUERY:  UPDATE qw.iso_nonconformance
    SET
    customerno = in_customerno ,
    division = in_division,
    orig_salesorder = in_orig_salesorder,
    new_salesorder = in_new_salesorder,
    ncr_category = in_ncr_category,
    ncr_description = in_ncr_description,
    corrective_action = in_corrective_action,
    preventative_action = in_preventative_action 
    WHERE crm_account_activity.crm_activity_id = in_nrc_id
CONTEXT:  PL/pgSQL function qw.create_update_isoncr(text,text,text,text,text,text,text,text,text,text) line 33 at SQL statement - Invalid query: select * from qw.create_update_isoncr('Test','Test','Test','Test','Test','Test','Test','Test','Test','tisuser')
ERROR - 2017-11-24 06:48:24 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-24 06:48:24 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-24 07:10:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;crm_account_activity&quot;
LINE 11:     WHERE crm_account_activity.crm_activity_id = in_nrc_id
                   ^
QUERY:  UPDATE qw.iso_nonconformance
    SET
    customerno = in_customerno ,
    division = in_division,
    orig_salesorder = in_orig_salesorder,
    new_salesorder = in_new_salesorder,
    ncr_category = in_ncr_category,
    ncr_description = in_ncr_description,
    corrective_action = in_corrective_action,
    preventative_action = in_preventative_action 
    WHERE crm_account_activity.crm_activity_id = in_nrc_id
CONTEXT:  PL/pgSQL function qw.create_update_isoncr(text,text,text,text,text,text,text,text,text,text) line 33 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-24 07:10:34 --> Query error: ERROR:  missing FROM-clause entry for table "crm_account_activity"
LINE 11:     WHERE crm_account_activity.crm_activity_id = in_nrc_id
                   ^
QUERY:  UPDATE qw.iso_nonconformance
    SET
    customerno = in_customerno ,
    division = in_division,
    orig_salesorder = in_orig_salesorder,
    new_salesorder = in_new_salesorder,
    ncr_category = in_ncr_category,
    ncr_description = in_ncr_description,
    corrective_action = in_corrective_action,
    preventative_action = in_preventative_action 
    WHERE crm_account_activity.crm_activity_id = in_nrc_id
CONTEXT:  PL/pgSQL function qw.create_update_isoncr(text,text,text,text,text,text,text,text,text,text) line 33 at SQL statement - Invalid query: select * from qw.create_update_isoncr('Test','Test','Test','Test','Test','Test','Test','Test','Test','tisuser')
ERROR - 2017-11-24 07:11:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;iso_nonconformance&quot; does not exist
LINE 3: from iso_nonconformance a
             ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) from (
select a.*
from iso_nonconformance a
)
iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance() line 6 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-24 07:11:45 --> Query error: ERROR:  relation "iso_nonconformance" does not exist
LINE 3: from iso_nonconformance a
             ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(iso_ncr))) from (
select a.*
from iso_nonconformance a
)
iso_ncr
CONTEXT:  PL/pgSQL function qw.get_iso_nonconformance() line 6 at RETURN - Invalid query: select * from qw.get_iso_nonconformance()
ERROR - 2017-11-24 07:12:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_iso_nonconformance(unknown) does not exist
LINE 1: select * from qw.get_iso_nonconformance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-24 07:12:33 --> Query error: ERROR:  function qw.get_iso_nonconformance(unknown) does not exist
LINE 1: select * from qw.get_iso_nonconformance('all')
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_iso_nonconformance('all')
ERROR - 2017-11-24 07:17:18 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-24 07:17:18 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-24 07:17:27 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-24 07:17:27 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
