<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-10-16 06:17:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;all&quot;
LINE 1: select * from qw.get_all_crmcustomer('all','all',0,all)
                                                           ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 06:17:04 --> Query error: ERROR:  syntax error at or near "all"
LINE 1: select * from qw.get_all_crmcustomer('all','all',0,all)
                                                           ^ - Invalid query: select * from qw.get_all_crmcustomer('all','all',0,all)
ERROR - 2017-10-16 06:20:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column b.divsion does not exist
LINE 7: and (in_division = 'all' or upper(b.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column &quot;b.division&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  SELECT b.*
from qw.crm_customer b
where  b.active_flag = true
and (in_customerno = 'all' or b.accountnumber::TEXT =   in_customerno or b.sagecustomernumber =   in_customerno or b.crm_guid = in_customerno 
or b.companyname ilike '%' || in_customerno || '%')
and (in_division = 'all' or upper(b.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(b.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(b.address1_countryregion) =  upper(in_country) )
order by b.companyname
    limit (in_end_row - in_start_row) offset in_start_row
) cust
CONTEXT:  PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 06:20:08 --> Query error: ERROR:  column b.divsion does not exist
LINE 7: and (in_division = 'all' or upper(b.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column "b.division".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  SELECT b.*
from qw.crm_customer b
where  b.active_flag = true
and (in_customerno = 'all' or b.accountnumber::TEXT =   in_customerno or b.sagecustomernumber =   in_customerno or b.crm_guid = in_customerno 
or b.companyname ilike '%' || in_customerno || '%')
and (in_division = 'all' or upper(b.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(b.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(b.address1_countryregion) =  upper(in_country) )
order by b.companyname
    limit (in_end_row - in_start_row) offset in_start_row
) cust
CONTEXT:  PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcustomer('all','all','all','all',0,50)
ERROR - 2017-10-16 06:20:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column b.divsion does not exist
LINE 7: and (in_division = 'all' or upper(b.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column &quot;b.division&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  SELECT b.*
from qw.crm_customer b
where  b.active_flag = true
and (in_customerno = 'all' or b.accountnumber::TEXT =   in_customerno or b.sagecustomernumber =   in_customerno or b.crm_guid = in_customerno 
or b.companyname ilike '%' || in_customerno || '%')
and (in_division = 'all' or upper(b.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(b.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(b.address1_countryregion) =  upper(in_country) )
order by b.companyname
    limit (in_end_row - in_start_row) offset in_start_row
) cust
CONTEXT:  PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 06:20:11 --> Query error: ERROR:  column b.divsion does not exist
LINE 7: and (in_division = 'all' or upper(b.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column "b.division".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  SELECT b.*
from qw.crm_customer b
where  b.active_flag = true
and (in_customerno = 'all' or b.accountnumber::TEXT =   in_customerno or b.sagecustomernumber =   in_customerno or b.crm_guid = in_customerno 
or b.companyname ilike '%' || in_customerno || '%')
and (in_division = 'all' or upper(b.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(b.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(b.address1_countryregion) =  upper(in_country) )
order by b.companyname
    limit (in_end_row - in_start_row) offset in_start_row
) cust
CONTEXT:  PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcustomer('all','all','all','all',0,50)
ERROR - 2017-10-16 06:20:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column b.divsion does not exist
LINE 7: and (in_division = 'all' or upper(b.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column &quot;b.division&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  SELECT b.*
from qw.crm_customer b
where  b.active_flag = true
and (in_customerno = 'all' or b.accountnumber::TEXT =   in_customerno or b.sagecustomernumber =   in_customerno or b.crm_guid = in_customerno 
or b.companyname ilike '%' || in_customerno || '%')
and (in_division = 'all' or upper(b.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(b.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(b.address1_countryregion) =  upper(in_country) )
order by b.companyname
    limit (in_end_row - in_start_row) offset in_start_row
) cust
CONTEXT:  PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 06:20:28 --> Query error: ERROR:  column b.divsion does not exist
LINE 7: and (in_division = 'all' or upper(b.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column "b.division".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  SELECT b.*
from qw.crm_customer b
where  b.active_flag = true
and (in_customerno = 'all' or b.accountnumber::TEXT =   in_customerno or b.sagecustomernumber =   in_customerno or b.crm_guid = in_customerno 
or b.companyname ilike '%' || in_customerno || '%')
and (in_division = 'all' or upper(b.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(b.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(b.address1_countryregion) =  upper(in_country) )
order by b.companyname
    limit (in_end_row - in_start_row) offset in_start_row
) cust
CONTEXT:  PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcustomer('all','all','all','all',0,50)
ERROR - 2017-10-16 06:20:56 --> Severity: error --> Exception: syntax error, unexpected end of file /var/www/html/application/helpers/common_helper.php 4356
ERROR - 2017-10-16 06:21:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column b.divsion does not exist
LINE 7: and (in_division = 'all' or upper(b.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column &quot;b.division&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  SELECT b.*
from qw.crm_customer b
where  b.active_flag = true
and (in_customerno = 'all' or b.accountnumber::TEXT =   in_customerno or b.sagecustomernumber =   in_customerno or b.crm_guid = in_customerno 
or b.companyname ilike '%' || in_customerno || '%')
and (in_division = 'all' or upper(b.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(b.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(b.address1_countryregion) =  upper(in_country) )
order by b.companyname
    limit (in_end_row - in_start_row) offset in_start_row
) cust
CONTEXT:  PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 06:21:09 --> Query error: ERROR:  column b.divsion does not exist
LINE 7: and (in_division = 'all' or upper(b.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column "b.division".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  SELECT b.*
from qw.crm_customer b
where  b.active_flag = true
and (in_customerno = 'all' or b.accountnumber::TEXT =   in_customerno or b.sagecustomernumber =   in_customerno or b.crm_guid = in_customerno 
or b.companyname ilike '%' || in_customerno || '%')
and (in_division = 'all' or upper(b.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(b.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(b.address1_countryregion) =  upper(in_country) )
order by b.companyname
    limit (in_end_row - in_start_row) offset in_start_row
) cust
CONTEXT:  PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcustomer('test','all','all','all',0,50)
ERROR - 2017-10-16 06:21:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column b.divsion does not exist
LINE 7: and (in_division = 'all' or upper(b.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column &quot;b.division&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  SELECT b.*
from qw.crm_customer b
where  b.active_flag = true
and (in_customerno = 'all' or b.accountnumber::TEXT =   in_customerno or b.sagecustomernumber =   in_customerno or b.crm_guid = in_customerno 
or b.companyname ilike '%' || in_customerno || '%')
and (in_division = 'all' or upper(b.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(b.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(b.address1_countryregion) =  upper(in_country) )
order by b.companyname
    limit (in_end_row - in_start_row) offset in_start_row
) cust
CONTEXT:  PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 06:21:28 --> Query error: ERROR:  column b.divsion does not exist
LINE 7: and (in_division = 'all' or upper(b.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column "b.division".
QUERY:  SELECT array_to_json(array_agg(row_to_json(cust))) from (
  SELECT b.*
from qw.crm_customer b
where  b.active_flag = true
and (in_customerno = 'all' or b.accountnumber::TEXT =   in_customerno or b.sagecustomernumber =   in_customerno or b.crm_guid = in_customerno 
or b.companyname ilike '%' || in_customerno || '%')
and (in_division = 'all' or upper(b.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(b.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(b.address1_countryregion) =  upper(in_country) )
order by b.companyname
    limit (in_end_row - in_start_row) offset in_start_row
) cust
CONTEXT:  PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcustomer('all','all','all','all',0,50)
ERROR - 2017-10-16 07:39:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column &quot;a.division&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 07:39:18 --> Query error: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column "a.division".
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcontact('','','','','',0,50)
ERROR - 2017-10-16 07:41:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column &quot;a.division&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 07:41:17 --> Query error: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column "a.division".
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcontact('all','all','all','all','all',0,50)
ERROR - 2017-10-16 07:41:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column &quot;a.division&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 07:41:23 --> Query error: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column "a.division".
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcontact('all','all','all','all','all',0,50)
ERROR - 2017-10-16 07:41:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column &quot;a.division&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 07:41:44 --> Query error: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column "a.division".
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcontact('all','all','','all','all',0,50)
ERROR - 2017-10-16 07:58:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column &quot;a.division&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 07:58:13 --> Query error: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column "a.division".
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcontact('all','all','all','all','all',0,50)
ERROR - 2017-10-16 07:59:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column &quot;a.division&quot;.
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-10-16 07:59:35 --> Query error: ERROR:  column a.divsion does not exist
LINE 8: and (in_division = 'all' or upper(a.divsion) =  upper(in_div...
                                          ^
HINT:  Perhaps you meant to reference the column "a.division".
QUERY:  SELECT array_to_json(array_agg(row_to_json(oppor))) from (
  SELECT a.*, b.accountnumber, b.companyname, b.relationshiptype
from qw.crm_contact a, qw.crm_customer b
where a.active_Flag = true and b.active_flag = true
  and a.crm_accountid = b.crm_guid
and (in_customerno = 'all' or b.sagecustomernumber = in_customerno or b.accountnumber::TEXT = in_customerno)
and (in_contact = 'all' or  a.crm_contactid = in_contact or (a.firstname || a.lastname ilike '%' || in_contact || '%'))
and (in_division = 'all' or upper(a.divsion) =  upper(in_division) )
and (in_state = 'all' or upper(a.address1_stateprovince) =  upper(in_state) )
and (in_country = 'all' or upper(a.address1_country) =  upper(in_country) )
order by a.firstname, a.lastname
    limit (in_end_row - in_start_row) offset in_start_row
) oppor
CONTEXT:  PL/pgSQL function qw.get_all_crmcontact(text,text,text,text,text,integer,integer) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcontact('all','all','all','all','all',0,50)
ERROR - 2017-10-16 08:44:35 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-16 08:44:35 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-16 10:58:41 --> Severity: Notice --> Undefined variable: searchCustomer /var/www/html/application/views/frontend/contacts.php 52
ERROR - 2017-10-16 10:58:41 --> Severity: Notice --> Undefined variable: searchContact /var/www/html/application/views/frontend/contacts.php 59
ERROR - 2017-10-16 10:58:41 --> Severity: Notice --> Undefined variable: searchDivision /var/www/html/application/views/frontend/contacts.php 69
ERROR - 2017-10-16 10:58:41 --> Severity: Notice --> Undefined variable: searchState /var/www/html/application/views/frontend/contacts.php 79
ERROR - 2017-10-16 10:58:44 --> Severity: Notice --> Undefined variable: searchCustomer /var/www/html/application/views/frontend/contacts.php 52
ERROR - 2017-10-16 10:58:44 --> Severity: Notice --> Undefined variable: searchContact /var/www/html/application/views/frontend/contacts.php 59
ERROR - 2017-10-16 10:58:44 --> Severity: Notice --> Undefined variable: searchDivision /var/www/html/application/views/frontend/contacts.php 69
ERROR - 2017-10-16 10:58:44 --> Severity: Notice --> Undefined variable: searchState /var/www/html/application/views/frontend/contacts.php 79
ERROR - 2017-10-16 10:59:49 --> Severity: Notice --> Undefined variable: searchCustomer /var/www/html/application/views/frontend/contacts.php 52
ERROR - 2017-10-16 10:59:49 --> Severity: Notice --> Undefined variable: searchContact /var/www/html/application/views/frontend/contacts.php 59
ERROR - 2017-10-16 10:59:49 --> Severity: Notice --> Undefined variable: searchDivision /var/www/html/application/views/frontend/contacts.php 69
ERROR - 2017-10-16 10:59:49 --> Severity: Notice --> Undefined variable: searchState /var/www/html/application/views/frontend/contacts.php 79
ERROR - 2017-10-16 11:02:55 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-16 11:02:55 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-16 12:00:43 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-16 12:00:43 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-16 12:12:39 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-16 12:13:32 --> Severity: Notice --> Undefined variable: searchKeyword /var/www/html/application/controllers/frontend/Excel.php 220
ERROR - 2017-10-16 14:04:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-16 14:04:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-16 14:10:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-16 14:10:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-16 16:23:30 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-16 16:23:30 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-16 19:57:54 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-16 19:57:54 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-16 20:12:08 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-16 20:12:08 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-16 20:29:18 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-10-16 20:34:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-16 20:34:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
ERROR - 2017-10-16 20:46:47 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 737
ERROR - 2017-10-16 20:46:47 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 748
