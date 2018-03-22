<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-01-22 13:08:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 13:08:49 --> Query error: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_crmcontact('all','all','all',
							'all','all',0,50,'all','all')
ERROR - 2018-01-22 13:08:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 13:08:58 --> Query error: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_crmcontact('all','all','all',
							'all','all',0,50,'all','all')
ERROR - 2018-01-22 13:50:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 13:50:46 --> Query error: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_crmcontact('all','all','all',
							'all','all',0,50,'all','all')
ERROR - 2018-01-22 13:50:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 13:50:59 --> Query error: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_crmcontact('all','all','all',
							'all','all',0,50,'all','all')
ERROR - 2018-01-22 13:54:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 13:54:33 --> Query error: ERROR:  function qw.get_all_crmcontact(unknown, unknown, unknown, unknown, unknown, integer, integer, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_crmcontact('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_crmcontact('all','all','all',
							'all','all',0,50,'all','all')
ERROR - 2018-01-22 14:12:31 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-22 14:17:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;Customer&quot;
CONTEXT:  SQL statement &quot;SELECT array_to_json(array_agg(row_to_json(cust))) FROM (
  SELECT b.*
  FROM qw.crm_customer b, qw.dwstatic_lookup c
  WHERE b.active_flag = TRUE
  and c.lookup_key = 'relationship_type'
  and b.relationshiptype::INTEGER = c.lookup_id
  AND (in_customerno = 'all' OR b.accountnumber:: TEXT =   in_customerno OR b.sagecustomernumber =   in_customerno OR b.crm_guid = in_customerno
  OR b.companyname ILIKE '%' || in_customerno || '%')
  AND (in_division = 'all' OR upper(b.division) =  upper(in_division) )
  AND (in_state = 'all' OR upper(b.address1_stateprovince) =  upper(in_state) )
  AND (in_country = 'all' OR upper(b.address1_countryregion) =  upper(in_country) )
  AND (in_relationshiptype = 'all' or c.lookup_description = in_relationshiptype)
  ORDER BY b.companyname
  LIMIT (in_end_row - in_start_row) OFFSET in_start_row
  ) cust&quot;
PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer,text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 14:17:41 --> Query error: ERROR:  invalid input syntax for integer: "Customer"
CONTEXT:  SQL statement "SELECT array_to_json(array_agg(row_to_json(cust))) FROM (
  SELECT b.*
  FROM qw.crm_customer b, qw.dwstatic_lookup c
  WHERE b.active_flag = TRUE
  and c.lookup_key = 'relationship_type'
  and b.relationshiptype::INTEGER = c.lookup_id
  AND (in_customerno = 'all' OR b.accountnumber:: TEXT =   in_customerno OR b.sagecustomernumber =   in_customerno OR b.crm_guid = in_customerno
  OR b.companyname ILIKE '%' || in_customerno || '%')
  AND (in_division = 'all' OR upper(b.division) =  upper(in_division) )
  AND (in_state = 'all' OR upper(b.address1_stateprovince) =  upper(in_state) )
  AND (in_country = 'all' OR upper(b.address1_countryregion) =  upper(in_country) )
  AND (in_relationshiptype = 'all' or c.lookup_description = in_relationshiptype)
  ORDER BY b.companyname
  LIMIT (in_end_row - in_start_row) OFFSET in_start_row
  ) cust"
PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer,text) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcustomer('all','all','all','all',0,50,'all')
ERROR - 2018-01-22 14:31:14 --> Severity: Notice --> Undefined index: letter /var/www/html/application/models/frontend/HR_model.php 111
ERROR - 2018-01-22 14:31:30 --> Severity: Notice --> Undefined index: interviewQ /var/www/html/application/models/frontend/HR_model.php 107
ERROR - 2018-01-22 14:31:30 --> Severity: Notice --> Undefined index: letter /var/www/html/application/models/frontend/HR_model.php 111
ERROR - 2018-01-22 14:34:44 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-22 14:35:32 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-22 14:35:43 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-22 14:36:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;Customer&quot;
CONTEXT:  SQL statement &quot;SELECT array_to_json(array_agg(row_to_json(cust))) FROM (
  SELECT b.*
  FROM qw.crm_customer b, qw.dwstatic_lookup c
  WHERE b.active_flag = TRUE
  and c.lookup_key = 'relationship_type'
  and b.relationshiptype::INTEGER = c.lookup_id
  AND (in_customerno = 'all' OR b.accountnumber:: TEXT =   in_customerno OR b.sagecustomernumber =   in_customerno OR b.crm_guid = in_customerno
  OR b.companyname ILIKE '%' || in_customerno || '%')
  AND (in_division = 'all' OR upper(b.division) =  upper(in_division) )
  AND (in_state = 'all' OR upper(b.address1_stateprovince) =  upper(in_state) )
  AND (in_country = 'all' OR upper(b.address1_countryregion) =  upper(in_country) )
  AND (in_relationshiptype = 'all' or c.lookup_description = in_relationshiptype)
  ORDER BY b.companyname
  LIMIT (in_end_row - in_start_row) OFFSET in_start_row
  ) cust&quot;
PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer,text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 14:36:39 --> Query error: ERROR:  invalid input syntax for integer: "Customer"
CONTEXT:  SQL statement "SELECT array_to_json(array_agg(row_to_json(cust))) FROM (
  SELECT b.*
  FROM qw.crm_customer b, qw.dwstatic_lookup c
  WHERE b.active_flag = TRUE
  and c.lookup_key = 'relationship_type'
  and b.relationshiptype::INTEGER = c.lookup_id
  AND (in_customerno = 'all' OR b.accountnumber:: TEXT =   in_customerno OR b.sagecustomernumber =   in_customerno OR b.crm_guid = in_customerno
  OR b.companyname ILIKE '%' || in_customerno || '%')
  AND (in_division = 'all' OR upper(b.division) =  upper(in_division) )
  AND (in_state = 'all' OR upper(b.address1_stateprovince) =  upper(in_state) )
  AND (in_country = 'all' OR upper(b.address1_countryregion) =  upper(in_country) )
  AND (in_relationshiptype = 'all' or c.lookup_description = in_relationshiptype)
  ORDER BY b.companyname
  LIMIT (in_end_row - in_start_row) OFFSET in_start_row
  ) cust"
PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer,text) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcustomer('all','all','all','all',0,50,'all')
ERROR - 2018-01-22 14:49:40 --> Severity: Notice --> Undefined index: interviewQ /var/www/html/application/models/frontend/HR_model.php 107
ERROR - 2018-01-22 14:54:30 --> Severity: Notice --> Undefined index: resume /var/www/html/application/models/frontend/HR_model.php 109
ERROR - 2018-01-22 14:54:30 --> Severity: Notice --> Undefined index: test /var/www/html/application/models/frontend/HR_model.php 110
ERROR - 2018-01-22 14:55:18 --> Severity: Notice --> Undefined index: application /var/www/html/application/models/frontend/HR_model.php 108
ERROR - 2018-01-22 14:55:18 --> Severity: Notice --> Undefined index: test /var/www/html/application/models/frontend/HR_model.php 110
ERROR - 2018-01-22 14:56:21 --> Severity: Notice --> Undefined index: interviewQ /var/www/html/application/models/frontend/HR_model.php 107
ERROR - 2018-01-22 14:56:21 --> Severity: Notice --> Undefined index: application /var/www/html/application/models/frontend/HR_model.php 108
ERROR - 2018-01-22 14:56:21 --> Severity: Notice --> Undefined index: test /var/www/html/application/models/frontend/HR_model.php 110
ERROR - 2018-01-22 14:56:32 --> Severity: Notice --> Undefined index: interviewQ /var/www/html/application/models/frontend/HR_model.php 107
ERROR - 2018-01-22 14:56:32 --> Severity: Notice --> Undefined index: application /var/www/html/application/models/frontend/HR_model.php 108
ERROR - 2018-01-22 14:56:32 --> Severity: Notice --> Undefined index: test /var/www/html/application/models/frontend/HR_model.php 110
ERROR - 2018-01-22 15:07:12 --> Severity: Notice --> Undefined index: application /var/www/html/application/models/frontend/HR_model.php 108
ERROR - 2018-01-22 15:07:12 --> Severity: Notice --> Undefined index: test /var/www/html/application/models/frontend/HR_model.php 110
ERROR - 2018-01-22 15:07:30 --> Severity: Notice --> Undefined index: application /var/www/html/application/models/frontend/HR_model.php 108
ERROR - 2018-01-22 16:18:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;Customer&quot;
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
  AND (in_relationshiptype = 'all' or a.lookup_description = in_relationshiptype)
  ORDER BY b.companyname
  LIMIT (in_end_row - in_start_row) OFFSET in_start_row
  ) cust&quot;
PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer,text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 16:18:43 --> Query error: ERROR:  invalid input syntax for integer: "Customer"
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
  AND (in_relationshiptype = 'all' or a.lookup_description = in_relationshiptype)
  ORDER BY b.companyname
  LIMIT (in_end_row - in_start_row) OFFSET in_start_row
  ) cust"
PL/pgSQL function qw.get_all_crmcustomer(text,text,text,text,integer,integer,text) line 3 at RETURN - Invalid query: select * from qw.get_all_crmcustomer('all','all','all','all',0,50,'all')
ERROR - 2018-01-22 16:19:40 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-22 16:32:02 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-22 17:35:45 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-22 17:35:45 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-22 17:38:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-22 17:38:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-22 19:12:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-22 19:12:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-22 19:13:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;Shea&quot;
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 19:13:04 --> Query error: ERROR:  syntax error at or near "Shea"
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'11898', '1250', 
			'209-045-06', 19.85, 12.45, 'TW84PYBK', 'RMFPB037BK', 'RPY38WHFR', 'THPY69BK', 'VEL1X6',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0146','IND','','Michael O'Shea',
			   '7-10 days ARO','','012218CC1412','',0,'',
			   '',0,0)
ERROR - 2018-01-22 19:13:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;Shea&quot;
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 19:13:14 --> Query error: ERROR:  syntax error at or near "Shea"
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'11898', '1250', 
			'209-045-06', 19.85, 12.45, 'TW84PYBK', 'RMFPB037BK', 'RPY38WHFR', 'THPY69BK', 'VEL1X6',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0146','IND','','Michael O'Shea',
			   '7-10 days ARO','','012218CC1412','',0,'',
			   '',0,0)
ERROR - 2018-01-22 19:13:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;Shea&quot;
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 19:13:15 --> Query error: ERROR:  syntax error at or near "Shea"
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'11898', '1250', 
			'209-045-06', 19.85, 12.45, 'TW84PYBK', 'RMFPB037BK', 'RPY38WHFR', 'THPY69BK', 'VEL1X6',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0146','IND','','Michael O'Shea',
			   '7-10 days ARO','','012218CC1412','',0,'',
			   '',0,0)
ERROR - 2018-01-22 19:13:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;Shea&quot;
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 19:13:17 --> Query error: ERROR:  syntax error at or near "Shea"
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'11898', '1250', 
			'209-045-06', 19.85, 12.45, 'TW84PYBK', 'RMFPB037BK', 'RPY38WHFR', 'THPY69BK', 'VEL1X6',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0146','IND','','Michael O'Shea',
			   '7-10 days ARO','','012218CC1412','',0,'',
			   '',0,0)
ERROR - 2018-01-22 19:13:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;Shea&quot;
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 19:13:46 --> Query error: ERROR:  syntax error at or near "Shea"
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'11898', '1250', 
			'209-045-06', 19.85, 12.45, 'TW84PYBK', 'RMFPB037BK', 'RPY38WHFR', 'THPY69BK', 'VEL1X6',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0146','IND','','Michael O'Shea',
			   '7-10 days ARO','','012218CC1412','',1,'',
			   '',0,0)
ERROR - 2018-01-22 19:14:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;Shea&quot;
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 19:14:03 --> Query error: ERROR:  syntax error at or near "Shea"
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'11898', '1250', 
			'209-045-06', 19.85, 12.45, 'TW84PYBK', 'RMFPB037BK', 'RPY38WHFR', 'THPY69BK', 'VEL1X6',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0146','IND','','Michael O'Shea',
			   '7-10 days ARO','','012218CC1412','',1,'',
			   '',0,0)
ERROR - 2018-01-22 19:19:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;Shea&quot;
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2018-01-22 19:19:16 --> Query error: ERROR:  syntax error at or near "Shea"
LINE 4:       2, 0,'','santosht','0146','IND','','Michael O'Shea',
                                                            ^ - Invalid query: SELECT * from qw.customnet_quote(0, '', 0,'11898', '1250', 
			'209-045-06', 19.85, 12.45, 'TW84PYBK', 'RMFPB037BK', 'RPY38WHFR', 'THPY69BK', 'VEL1X6',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   2, 0,'','santosht','0146','IND','','Michael O'Shea',
			   '7-10 days ARO','','012218CC1412','',1,'',
			   '',0,0)
ERROR - 2018-01-22 19:26:59 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-22 20:38:54 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2018-01-22 20:38:54 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2018-01-22 20:41:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2018-01-22 20:41:54 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2018-01-22 21:16:36 --> Severity: Notice --> Undefined variable: searchRelationshipType /var/www/html/application/views/frontend/customers.php 63
ERROR - 2018-01-22 21:17:15 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 65
