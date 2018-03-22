<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-11-14 03:29:39 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 03:29:39 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 04:59:01 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 05:17:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_item_details(unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.get_item_details('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-14 05:17:03 --> Query error: ERROR:  function qw.get_item_details(unknown, unknown, unknown, unknown, unknown, unknown) does not exist
LINE 1: select * from qw.get_item_details('all','all','all',
                      ^
HINT:  No function matches the given name and argument types. You might need to add explicit type casts. - Invalid query: select * from qw.get_item_details('all','all','all',
			'all','all','all')
ERROR - 2017-11-14 12:39:19 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 12:39:19 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 12:39:36 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 12:39:36 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 14:03:12 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 14:03:12 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 14:41:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 14:41:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 15:59:21 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 18:12:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  function qw.get_item_details(unknown) is not unique
LINE 1: select * from qw.get_item_details('all')
                      ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-14 18:12:18 --> Query error: ERROR:  function qw.get_item_details(unknown) is not unique
LINE 1: select * from qw.get_item_details('all')
                      ^
HINT:  Could not choose a best candidate function. You might need to add explicit type casts. - Invalid query: select * from qw.get_item_details('all')
ERROR - 2017-11-14 18:15:06 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 18:16:50 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:16:50 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 18:20:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-11-14 18:20:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-11-14 18:22:36 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:22:36 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 18:22:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:22:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 18:23:00 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:23:00 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 18:23:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement &quot;SELECT                     (units * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                                    (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
        FROM temp_items a&quot;
PL/pgSQL function qw.cargonet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,double precision,double precision,double precision,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 240 at SQL statement /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-11-14 18:23:36 --> Query error: ERROR:  numeric field overflow
DETAIL:  A field with precision 12, scale 5 must round to an absolute value less than 10^7.
CONTEXT:  SQL statement "SELECT                     (units * price_markup * sum((a.modifiedqty * a.costperunit) + a.laborcost) *
                                    (1 - (in_discount / 100.00))) :: NUMERIC(12, 5)
        FROM temp_items a"
PL/pgSQL function qw.cargonet_quote(integer,character varying,integer,character varying,character varying,double precision,double precision,integer,integer,double precision,double precision,double precision,double precision,integer,double precision,text,text,character varying,character varying,character varying,character varying,character varying,character varying,character varying,integer,text) line 240 at SQL statement - Invalid query: SELECT * from qw.cargonet_quote(0, '', 0,'16052', 'CN', 399.00, 402.00, 32, 23, 23, 23, 34, 34, 4, 23,'taw3','santosht','0003','MTS','','Kevin Kelley','7-10 days ARO','2eq3','111417BS1323',0,'')
ERROR - 2017-11-14 18:24:14 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:24:14 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 18:24:23 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:24:23 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 18:24:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:24:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 18:24:48 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:24:48 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 18:24:59 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:24:59 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 18:28:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:28:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 18:28:10 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 18:35:38 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:35:38 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 18:37:45 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 18:37:52 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 18:46:33 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 18:46:39 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 18:52:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 18:52:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:04:52 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:04:52 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:09:04 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:09:04 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:10:35 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:10:35 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:10:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:10:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:12:29 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:12:29 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:12:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:12:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:13:23 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:13:23 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:16:10 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:16:10 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:16:24 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:16:24 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:16:39 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:16:39 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:25:56 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:25:56 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:25:58 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:25:58 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:26:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:26:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:26:23 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:26:23 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:26:29 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:26:29 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:27:57 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 19:28:17 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 19:28:37 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 19:29:39 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:29:39 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:29:44 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:29:44 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:29:50 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:29:50 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:38:55 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:38:55 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:43:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:43:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:43:54 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:43:54 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:44:10 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:44:10 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:44:20 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:44:20 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:47:36 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:47:36 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:56:41 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:56:41 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:56:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:56:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:56:54 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:56:54 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:57:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:57:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:58:09 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:58:09 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 19:58:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 19:58:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:06:05 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:06:05 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:06:10 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:06:10 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:06:20 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:06:20 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:06:29 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:06:29 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:07:09 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 20:07:16 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:07:16 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:07:18 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 20:07:25 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 55
ERROR - 2017-11-14 20:08:11 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:08:11 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:08:21 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:08:21 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:11:02 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:11:02 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:14:55 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:14:55 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:15:13 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:15:13 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:15:33 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:15:33 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:15:56 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:15:56 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:16:42 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:16:42 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:19:39 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:19:39 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:20:42 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:20:42 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:21:50 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:21:50 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:22:07 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:22:07 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:29:41 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:29:41 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:29:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:29:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:30:24 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:30:24 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:37:59 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:37:59 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
ERROR - 2017-11-14 20:53:08 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 761
ERROR - 2017-11-14 20:53:08 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 772
