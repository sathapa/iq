<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-11-23 09:23:57 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-23 09:23:57 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-23 09:24:11 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-23 09:24:35 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-23 09:27:02 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2017-11-23 09:34:55 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-23 09:34:55 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-23 13:13:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-23 13:13:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-23 13:17:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-23 13:17:05 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'19520', '1250', 
			'209-045-02', 33, 23, 'NONE', 'NONE', 'NONE', '', '',
			  0, '0', 1, '', 0.0, 1, 1, 0, 2,
			   1, 0,'dsfds','tisuser','0003','IND','','Kapil Tyagi',
			   '7-10 days ARO','fdsfd','112317BS1846','',0,'','')
ERROR - 2017-11-23 13:17:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-23 13:17:16 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'19520', '1250', 
			'209-045-02', 33, 23, 'NONE', 'NONE', 'NONE', '', '',
			  0, '0', 1, '', 0.0, 1, 1, 0, 2,
			   1, 0,'dsfds','tisuser','0003','IND','','Kapil Tyagi',
			   '7-10 days ARO','fdsfd','112317BS1846','',0,'','')
ERROR - 2017-11-23 13:19:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-23 13:19:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-23 13:19:25 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-23 13:19:25 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-23 13:20:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-23 13:20:19 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'19520', 'PSNC', 12,
				 10, 1, 1, 0, 'dsfdsfdsf','tisuser','0003','IND',
				 '','Kapil Tyagi','7-10 days ARO','dfdsfdsfdsf','112317BS1849',1,'','')
ERROR - 2017-11-23 13:22:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-23 13:22:53 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'19520', 'PSNC', 12,
				 10, 1, 1, 0, 'dsfdsfdsf','tisuser','0003','IND',
				 '','Kapil Tyagi','7-10 days ARO','dfdsfdsfdsf','112317BS1849',1,'','')
ERROR - 2017-11-23 13:24:41 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-23 13:24:41 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-23 13:26:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-23 13:26:15 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'13163', '1250', 
			'209-045-04', 33, 12, 'NONE', 'NONE', 'NONE', '', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 2,
			   1, 0,'sadsad','tisuser','0146','OEM','','Jim Moloney',
			   '7-10 days ARO','sadsad','112317CC1855','',1,'','')
ERROR - 2017-11-23 13:27:58 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-23 13:27:58 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-23 13:28:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-23 13:28:49 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'19520', 'PSNCFR', 22,
				 12, 1, 1, 0, 'dsadsadsad','tisuser','0408','IND',
				 '','Kapil Tyagi','7-10 days ARO','dasdsdas','112317HL1858',0,'','')
ERROR - 2017-11-23 13:29:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-23 13:29:43 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'19520', 'PSNCFR', 22,
				 12, 1, 1, 0, 'dsadsadsad','tisuser','0408','IND',
				 '','Kapil Tyagi','7-10 days ARO','dasdsdas','112317HL1858',0,'','')
ERROR - 2017-11-23 13:30:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-23 13:30:01 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'19520', 'PSNCFR', 22,
				 12, 1, 1, 0, 'dsadsadsad','tisuser','0408','IND',
				 '','Kapil Tyagi','7-10 days ARO','dasdsdas','112317HL1858',0,'','')
ERROR - 2017-11-23 13:30:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-23 13:30:46 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'19520', 'PSNCFR', 22,
				 12, 1, 1, 0, 'dsadsadsad','tisuser','0408','IND',
				 '','Kapil Tyagi','7-10 days ARO','dasdsdas','112317HL1858',0,'','')
ERROR - 2017-11-23 13:31:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-23 13:31:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-23 13:32:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-23 13:32:22 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.custompsn_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,character varying,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text,text) line 411 at SQL statement - Invalid query: SELECT * from qw.custompsn_quote(1, '',0 ,'19520', 'PSNCFR', 22,
				 12, 1, 1, 0, 'asdsad','tisuser','0003','IND',
				 '','Bill Elliott','7-10 days ARO','sdsd','112317BS1901',0,'','We are testing')
