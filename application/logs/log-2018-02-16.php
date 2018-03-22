<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-02-16 03:35:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 03:35:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 03:35:26 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 03:35:26 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 03:35:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 03:35:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 10:29:25 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
ERROR - 2018-02-16 10:29:37 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-16 10:30:14 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-16 10:35:07 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 79
ERROR - 2018-02-16 11:00:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
CONTEXT:  SQL statement &quot;SELECT array_to_json(array_agg(row_to_json(cust))) FROM (
  SELECT b.*
  FROM qw.crm_customer b, qw.dwstatic_lookup a
  WHERE b.active_flag = TRUE
  and a.lookup_key = 'relationship_type'
  and b.relationshiptype::INTEGER = a.lookup_id
  AND (in_customerno = 'all' OR b.accountnumber:: TEXT =   in_customerno OR b.sagecustomernumber =   in_customerno OR b.crm_guid = in_customerno
  OR b.companyname ILIKE '%' || in_customerno || '%')
  AND (in_division = 'all' OR upper(b.division) =  upper(in_division) )
  AND (in_state = 'all' OR upper(b.address1_stateprovince) =  upper(in_state) )
  AND (in_country = 'all' OR upper(b.address1_countryregion) =  upper(in_country) )
  AND (in_relationshiptype = 'all' or a.lookup_id = in_relationshiptype::INTEGER)
  ORDER BY b.companyname
  LIMIT (in_end_row - in_start_row) OFFSET in_start_row
  ) cust&quot;
PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer,text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-02-16 11:00:27 --> Query error: ERROR:  invalid input syntax for integer: ""
CONTEXT:  SQL statement "SELECT array_to_json(array_agg(row_to_json(cust))) FROM (
  SELECT b.*
  FROM qw.crm_customer b, qw.dwstatic_lookup a
  WHERE b.active_flag = TRUE
  and a.lookup_key = 'relationship_type'
  and b.relationshiptype::INTEGER = a.lookup_id
  AND (in_customerno = 'all' OR b.accountnumber:: TEXT =   in_customerno OR b.sagecustomernumber =   in_customerno OR b.crm_guid = in_customerno
  OR b.companyname ILIKE '%' || in_customerno || '%')
  AND (in_division = 'all' OR upper(b.division) =  upper(in_division) )
  AND (in_state = 'all' OR upper(b.address1_stateprovince) =  upper(in_state) )
  AND (in_country = 'all' OR upper(b.address1_countryregion) =  upper(in_country) )
  AND (in_relationshiptype = 'all' or a.lookup_id = in_relationshiptype::INTEGER)
  ORDER BY b.companyname
  LIMIT (in_end_row - in_start_row) OFFSET in_start_row
  ) cust"
PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer,text) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcustomer('all','all','all','all',50,100,'')
ERROR - 2018-02-16 11:07:32 --> Severity: error --> Exception: syntax error, unexpected end of file /var/www/html/application/helpers/common_helper.php 4564
ERROR - 2018-02-16 11:07:32 --> Severity: error --> Exception: syntax error, unexpected end of file /var/www/html/application/helpers/common_helper.php 6215
ERROR - 2018-02-16 13:07:29 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 13:07:29 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 13:09:52 --> Severity: Notice --> Undefined index: wt /var/www/html/application/controllers/frontend/Home.php 228
ERROR - 2018-02-16 13:09:52 --> Severity: Notice --> Undefined index: wt /var/www/html/application/controllers/frontend/Home.php 228
ERROR - 2018-02-16 13:09:52 --> Severity: Notice --> Undefined index: wt /var/www/html/application/controllers/frontend/Home.php 228
ERROR - 2018-02-16 13:09:52 --> Severity: Notice --> Undefined index: wt /var/www/html/application/controllers/frontend/Home.php 228
ERROR - 2018-02-16 13:09:52 --> Severity: Notice --> Undefined index: wt /var/www/html/application/controllers/frontend/Home.php 228
ERROR - 2018-02-16 13:09:52 --> Severity: Notice --> Undefined index: wt /var/www/html/application/controllers/frontend/Home.php 228
ERROR - 2018-02-16 13:24:59 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 13:24:59 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 13:25:05 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 13:25:05 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 13:25:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 13:25:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 14:06:48 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 14:06:48 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 14:08:19 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 14:08:19 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 14:12:42 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 14:12:42 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 14:18:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 14:18:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 14:19:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 14:19:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 14:23:12 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 14:23:12 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 14:32:36 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 14:32:36 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 14:33:48 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 14:33:48 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 14:47:59 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 14:47:59 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 14:48:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 14:48:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 14:48:41 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 14:48:41 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 17:15:51 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 17:15:51 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 17:17:08 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 17:17:08 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 17:26:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 17:26:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 17:28:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 17:28:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 17:33:02 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 17:33:02 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 17:33:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 904
ERROR - 2018-02-16 17:33:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 915
ERROR - 2018-02-16 17:34:52 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 902
ERROR - 2018-02-16 17:34:52 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 913
ERROR - 2018-02-16 17:35:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 899
ERROR - 2018-02-16 17:35:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 910
ERROR - 2018-02-16 17:38:59 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 899
ERROR - 2018-02-16 17:38:59 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 910
ERROR - 2018-02-16 17:39:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 899
ERROR - 2018-02-16 17:39:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 910
ERROR - 2018-02-16 17:40:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 899
ERROR - 2018-02-16 17:40:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 910
ERROR - 2018-02-16 17:40:43 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 899
ERROR - 2018-02-16 17:40:43 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 910
ERROR - 2018-02-16 17:41:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 899
ERROR - 2018-02-16 17:41:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 910
ERROR - 2018-02-16 17:41:56 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 899
ERROR - 2018-02-16 17:41:56 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 910
ERROR - 2018-02-16 17:44:15 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 899
ERROR - 2018-02-16 17:44:15 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 910
ERROR - 2018-02-16 17:44:59 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 897
ERROR - 2018-02-16 17:44:59 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 908
ERROR - 2018-02-16 18:01:44 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 897
ERROR - 2018-02-16 18:01:44 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 908
ERROR - 2018-02-16 19:00:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 19:00:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 19:09:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 19:09:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 19:09:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 19:09:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 19:29:17 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 19:29:17 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 19:30:45 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 19:30:45 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 19:38:55 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 19:38:55 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 19:39:17 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 19:39:17 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 19:40:55 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 19:40:55 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 20:01:25 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 20:01:25 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 20:11:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 20:11:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 20:13:27 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 20:13:27 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 20:20:29 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 20:20:29 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 20:25:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 20:25:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 20:35:32 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 20:35:32 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 20:37:47 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 20:37:47 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 20:39:10 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 20:39:10 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 20:39:29 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 20:39:29 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 21:32:47 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 21:32:47 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
ERROR - 2018-02-16 21:33:46 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 898
ERROR - 2018-02-16 21:33:46 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 909
