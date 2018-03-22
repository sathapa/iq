<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-11-27 04:38:13 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2017-11-27 04:38:41 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ',' or ')' /var/www/html/application/models/frontend/Isoncr_model.php 18
ERROR - 2017-11-27 13:23:24 --> Severity: Notice --> Undefined index: rope_material /var/www/html/application/controllers/frontend/Dashboard.php 516
ERROR - 2017-11-27 13:24:25 --> Severity: Notice --> Undefined index: net_material /var/www/html/application/controllers/frontend/Dashboard.php 502
ERROR - 2017-11-27 13:47:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-27 13:47:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-27 14:13:06 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 14:13:06 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-27 14:13:39 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2017-11-27 14:36:03 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 14:36:03 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-27 14:37:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-27 14:37:24 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-27 14:39:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 14:39:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-27 15:32:12 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 15:32:12 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-27 15:34:02 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 15:34:02 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-27 17:25:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-27 17:25:16 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-27 17:25:44 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-27 17:25:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-27 18:59:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-27 18:59:28 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-27 19:29:52 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 19:29:52 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-27 19:31:05 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 19:31:05 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-27 19:40:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:40:48 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, 0,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1432','',0,'HTPP 2in Sq;Width: 8.00 FT;Length: 43.00 FT;Color: Sand;Sewn Border: Polyester Braid 1/4in x 1000ft Sand;;;','')
ERROR - 2017-11-27 19:42:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:42:02 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1432','',0,'HTPP 2in Sq;Width: 8.00 FT;Length: 43.00 FT;Color: Sand;Sewn Border: Polyester Braid 1/4in x 1000ft Sand;;;','')
ERROR - 2017-11-27 19:42:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:42:07 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1432','',0,'HTPP 2in Sq;Width: 8.00 FT;Length: 43.00 FT;Color: Sand;Sewn Border: Polyester Braid 1/4in x 1000ft Sand;;;','')
ERROR - 2017-11-27 19:42:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:42:12 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1432','',0,'HTPP 2in Sq;Width: 8.00 FT;Length: 43.00 FT;Color: Sand;Sewn Border: Polyester Braid 1/4in x 1000ft Sand;;;','')
ERROR - 2017-11-27 19:42:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:42:19 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1432','',0,'HTPP 2in Sq;Width: 8.00 FT;Length: 43.00 FT;Color: Sand;Sewn Border: Polyester Braid 1/4in x 1000ft Sand;;;','')
ERROR - 2017-11-27 19:42:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:42:20 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1432','',0,'HTPP 2in Sq;Width: 8.00 FT;Length: 43.00 FT;Color: Sand;Sewn Border: Polyester Braid 1/4in x 1000ft Sand;;;','')
ERROR - 2017-11-27 19:42:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:42:31 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1432','',0,'HTPP 2in Sq;Width: 8.00 FT;Length: 43.00 FT;Color: Sand;Sewn Border: Polyester Braid 1/4in x 1000ft Sand;;;','')
ERROR - 2017-11-27 19:42:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:42:34 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1432','',0,'HTPP 2in Sq;Width: 8.00 FT;Length: 43.00 FT;Color: Sand;Sewn Border: Polyester Braid 1/4in x 1000ft Sand;;;','')
ERROR - 2017-11-27 19:44:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:44:49 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1432','',0,'HTPP 2in Sq;Width: 8.00 FT;Length: 43.00 FT;Color: Sand;Sewn Border: Polyester Braid 1/4in x 1000ft Sand;;;','')
ERROR - 2017-11-27 19:44:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:44:59 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1432','',0,'HTPP 2in Sq;Width: 8.00 FT;Length: 43.00 FT;Color: Sand;Sewn Border: Polyester Braid 1/4in x 1000ft Sand;;;','')
ERROR - 2017-11-27 19:45:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:45:01 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1432','',0,'HTPP 2in Sq;Width: 8.00 FT;Length: 43.00 FT;Color: Sand;Sewn Border: Polyester Braid 1/4in x 1000ft Sand;;;','')
ERROR - 2017-11-27 19:45:25 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 19:45:25 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-27 19:46:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 19:46:52 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1445','',0,'','')
ERROR - 2017-11-27 20:01:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 20:01:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-27 20:02:13 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2017-11-27 20:04:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 20:04:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-27 20:04:50 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2017-11-27 20:08:22 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 20:08:22 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-11-27 20:51:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-27 20:51:30 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, text) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,text) line 687 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'11792', '815', 
			'212-045-08', 43, 8, 'RPYB025SD', 'NONE', 'NONE', 'THHTSD', '',
			  0, '0', 1, '', 0.0, 0.0, 1, 0, 1,
			   2, -9,'','bettyt','0123','PLA','','Gerhard Komenda',
			   '7-10 days ARO','','112717RR1445','',0,'','')
ERROR - 2017-11-27 21:08:09 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-11-27 21:08:09 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
