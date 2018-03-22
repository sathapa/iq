<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-11-21 03:59:12 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-21 04:31:23 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-21 09:34:50 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-21 09:35:14 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-21 09:41:20 --> Severity: Notice --> Undefined variable: searchCustomer /var/www/html/application/controllers/frontend/Home.php 83
ERROR - 2017-11-21 09:41:22 --> Severity: Notice --> Undefined variable: searchCustomer /var/www/html/application/controllers/frontend/Home.php 83
ERROR - 2017-11-21 09:41:23 --> Severity: Notice --> Undefined variable: searchCustomer /var/www/html/application/controllers/frontend/Home.php 83
ERROR - 2017-11-21 09:42:10 --> Severity: Notice --> Undefined variable: searchCustomer /var/www/html/application/controllers/frontend/Home.php 83
ERROR - 2017-11-21 09:42:40 --> Severity: Notice --> Undefined variable: searchCustomer /var/www/html/application/controllers/frontend/Home.php 83
ERROR - 2017-11-21 10:02:34 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-21 10:08:28 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-21 10:15:03 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-21 10:16:24 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-21 10:17:29 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-21 10:18:22 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-21 10:19:18 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-21 11:02:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 763
ERROR - 2017-11-21 11:02:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 774
ERROR - 2017-11-21 11:27:19 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 763
ERROR - 2017-11-21 11:27:19 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 774
ERROR - 2017-11-21 11:29:01 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 11:29:01 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 11:29:50 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 11:29:50 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 11:33:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, character varying) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,character varying) line 686 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-21 11:33:01 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, character varying) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,character varying) line 686 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'19520', '1250', '209-045-04', 7.33, 4.58, 'RHT3S025BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'Custom net Instructions','tisuser','1351','MTS','','Prem Yadav','7-10 days ARO','Custom net Tag','112117BH1701','',1,'','We are testing For ship Address')
ERROR - 2017-11-21 11:33:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, character varying) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,character varying) line 686 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-21 11:33:15 --> Query error: ERROR:  function qw.create_quote_header(text, character varying, character varying, text, character varying, character varying, character varying, character varying, character varying, character varying, character varying) does not exist
LINE 1: SELECT qw.create_quote_header(o_quoteid, in_customer, in_pro...
               ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts.
QUERY:  SELECT qw.create_quote_header(o_quoteid, in_customer, in_product, in_userid, in_salesperson, in_wtclass,
                                    in_opportunity, in_contact, in_leadtime, in_proposalnum, in_shiptoaddrress)
CONTEXT:  PL/pgSQL function qw.customnet_quote(integer,character varying,integer,character varying,character varying,character varying,double precision,double precision,character varying,character varying,character varying,character varying,character varying,integer,character varying,integer,character varying,double precision,double precision,integer,integer,integer,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,text,integer,text,character varying) line 686 at SQL statement - Invalid query: SELECT * from qw.customnet_quote(1, '', 0,'19520', '1250', '209-045-04', 7.33, 4.58, 'RHT3S025BK', 'NONE', 'NONE', 'NONE', '',  0, '0', 1, '', 0.0, 0.0, 1, 0, 1, 1, 0,'Custom net Instructions','tisuser','1351','MTS','','Prem Yadav','7-10 days ARO','Custom net Tag','112117BH1701','',1,'','We are testing For ship Address')
ERROR - 2017-11-21 11:35:35 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 11:35:35 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 11:37:46 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-21 12:02:42 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-21 13:02:01 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 13:02:01 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 13:02:29 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 13:02:29 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 13:02:54 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 13:02:54 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 13:03:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 13:03:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 13:04:01 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 13:04:01 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 13:38:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-21 13:38:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-21 13:43:02 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-21 14:03:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_orders_by_date(unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_orders_by_date('All','2017-11-21','...
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-21 14:03:52 --> Query error: ERROR:  function qw.get_all_orders_by_date(unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_orders_by_date('All','2017-11-21','...
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_orders_by_date('All','2017-11-21','2017-11-21','All','All','')
ERROR - 2017-11-21 14:05:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_orders_by_date(unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_orders_by_date('All','2017-11-21','...
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-21 14:05:41 --> Query error: ERROR:  function qw.get_all_orders_by_date(unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_orders_by_date('All','2017-11-21','...
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_orders_by_date('All','2017-11-21','2017-11-21','All','All','')
ERROR - 2017-11-21 14:05:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_orders_by_date(unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_orders_by_date('All','2017-11-21','...
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-21 14:05:45 --> Query error: ERROR:  function qw.get_all_orders_by_date(unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_orders_by_date('All','2017-11-21','...
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_orders_by_date('All','2017-11-21','2017-11-21','All','All','')
ERROR - 2017-11-21 14:08:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_all_orders_by_date(unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_orders_by_date('All','2017-11-21','...
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-21 14:08:56 --> Query error: ERROR:  function qw.get_all_orders_by_date(unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.get_all_orders_by_date('All','2017-11-21','...
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_all_orders_by_date('All','2017-11-21','2017-11-21','All','All','')
ERROR - 2017-11-21 14:09:22 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 62
ERROR - 2017-11-21 14:09:27 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 14:09:27 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 14:09:56 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 14:09:56 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 14:20:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-21 14:20:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-21 14:20:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-21 14:20:59 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-21 14:32:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-21 14:32:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-21 14:40:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-21 14:40:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-21 14:43:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-21 14:43:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-21 14:43:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-21 14:43:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-21 14:46:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-21 14:46:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-21 15:51:15 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 15:51:15 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 15:51:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 764
ERROR - 2017-11-21 15:51:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 775
ERROR - 2017-11-21 21:36:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;net_material1&quot; of relation &quot;qw_survey_item&quot; does not exist
LINE 1: ...ntity&quot; =  E'45', &quot;net_material&quot; =  E'209-045-02', &quot;net_mater...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-21 21:36:45 --> Query error: ERROR:  column "net_material1" of relation "qw_survey_item" does not exist
LINE 1: ...ntity" =  E'45', "net_material" =  E'209-045-02', "net_mater...
                                                             ^ - Invalid query: UPDATE "qw"."qw_survey_item" SET "item_name" =  E'item1', "quantity" =  E'45', "net_material" =  E'209-045-02', "net_material1" =  E'None', "lash_material" =  E'RHT3S125SD-G', "lash_material1" =  E'None', "rope_material" =  E'RPP3S037YL', "rope_material1" =  E'None', "condition" =  E'2', "item_height" =  E'3', "item_length" =  E'3', "shape" =  E'2', "drawing" =  E'1', "drawing_pg" =  E'3', "notes" =  E'sdfs', "profile_img" =  E'survey_1511300194.png'
WHERE "item_id" = E'item_560714'
ERROR - 2017-11-21 21:37:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;net_material1&quot; of relation &quot;qw_survey_item&quot; does not exist
LINE 1: ...ntity&quot; =  E'45', &quot;net_material&quot; =  E'209-045-02', &quot;net_mater...
                                                             ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-21 21:37:47 --> Query error: ERROR:  column "net_material1" of relation "qw_survey_item" does not exist
LINE 1: ...ntity" =  E'45', "net_material" =  E'209-045-02', "net_mater...
                                                             ^ - Invalid query: UPDATE "qw"."qw_survey_item" SET "item_name" =  E'item32', "quantity" =  E'45', "net_material" =  E'209-045-02', "net_material1" =  E'None', "lash_material" =  E'RHT3S125SD-G', "lash_material1" =  E'None', "rope_material" =  E'RPP3S037YL', "rope_material1" =  E'None', "condition" =  E'2', "item_height" =  E'3', "item_length" =  E'3', "shape" =  E'2', "drawing" =  E'1', "drawing_pg" =  E'3', "notes" =  E'sdfs', "profile_img" =  E'survey_1511300194.png'
WHERE "item_id" = E'item_560714'
ERROR - 2017-11-21 21:40:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-21 21:40:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
