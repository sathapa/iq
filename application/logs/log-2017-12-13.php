<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-12-13 04:26:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;img_location&quot; does not exist
LINE 2:   SELECT a.*, img_location = ''
                      ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(items))) FROM (
  SELECT a.*, img_location = ''
  FROM qw.item_product_view a
  WHERE (initcap(in_itemcode) = 'All' OR a.itemcode = in_itemcode OR a.itemcodedesc ILIKE in_itemcode || '%')
  and  (in_productline = 'All' OR a.productline = in_productline)
  and (in_producttype = 'All' OR a.producttypedesc = in_producttype)
  and (in_procurement = 'All' OR a.procurementtypedesc = in_procurement)
  and (in_vendor = 'All' OR a.primaryvendorno = in_vendor)
  and (in_warehouse = 'All' OR a.defaultwarehousecode = in_warehouse)
  ORDER BY a.itemcodedesc
  ) items
CONTEXT:  PL/pgSQL function qw.get_item_details(text,text,text,text,text,text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-13 04:26:43 --> Query error: ERROR:  column "img_location" does not exist
LINE 2:   SELECT a.*, img_location = ''
                      ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(items))) FROM (
  SELECT a.*, img_location = ''
  FROM qw.item_product_view a
  WHERE (initcap(in_itemcode) = 'All' OR a.itemcode = in_itemcode OR a.itemcodedesc ILIKE in_itemcode || '%')
  and  (in_productline = 'All' OR a.productline = in_productline)
  and (in_producttype = 'All' OR a.producttypedesc = in_producttype)
  and (in_procurement = 'All' OR a.procurementtypedesc = in_procurement)
  and (in_vendor = 'All' OR a.primaryvendorno = in_vendor)
  and (in_warehouse = 'All' OR a.defaultwarehousecode = in_warehouse)
  ORDER BY a.itemcodedesc
  ) items
CONTEXT:  PL/pgSQL function qw.get_item_details(text,text,text,text,text,text) line 3 at RETURN - Invalid query: select * from qw.get_item_details('all')
ERROR - 2017-12-13 04:37:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;img_location&quot; does not exist
LINE 2:   SELECT a.*, img_location = ''
                      ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(items))) FROM (
  SELECT a.*, img_location = ''
  FROM qw.item_product_view a
  WHERE (initcap(in_itemcode) = 'All' OR a.itemcode = in_itemcode OR a.itemcodedesc ILIKE in_itemcode || '%')
  and  (in_productline = 'All' OR a.productline = in_productline)
  and (in_producttype = 'All' OR a.producttypedesc = in_producttype)
  and (in_procurement = 'All' OR a.procurementtypedesc = in_procurement)
  and (in_vendor = 'All' OR a.primaryvendorno = in_vendor)
  and (in_warehouse = 'All' OR a.defaultwarehousecode = in_warehouse)
  ORDER BY a.itemcodedesc
  ) items
CONTEXT:  PL/pgSQL function qw.get_item_details(text,text,text,text,text,text) line 3 at RETURN /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-13 04:37:03 --> Query error: ERROR:  column "img_location" does not exist
LINE 2:   SELECT a.*, img_location = ''
                      ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(items))) FROM (
  SELECT a.*, img_location = ''
  FROM qw.item_product_view a
  WHERE (initcap(in_itemcode) = 'All' OR a.itemcode = in_itemcode OR a.itemcodedesc ILIKE in_itemcode || '%')
  and  (in_productline = 'All' OR a.productline = in_productline)
  and (in_producttype = 'All' OR a.producttypedesc = in_producttype)
  and (in_procurement = 'All' OR a.procurementtypedesc = in_procurement)
  and (in_vendor = 'All' OR a.primaryvendorno = in_vendor)
  and (in_warehouse = 'All' OR a.defaultwarehousecode = in_warehouse)
  ORDER BY a.itemcodedesc
  ) items
CONTEXT:  PL/pgSQL function qw.get_item_details(text,text,text,text,text,text) line 3 at RETURN - Invalid query: select * from qw.get_item_details('all')
ERROR - 2017-12-13 05:55:05 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 05:55:05 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 06:06:41 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2017-12-13 06:09:33 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 315
ERROR - 2017-12-13 06:09:35 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2017-12-13 06:09:41 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 315
ERROR - 2017-12-13 06:09:43 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2017-12-13 06:10:13 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2017-12-13 06:10:18 --> Severity: Notice --> Undefined variable: salesOrders /var/www/html/application/controllers/frontend/Orders.php 315
ERROR - 2017-12-13 06:10:18 --> Severity: Notice --> Undefined variable: salesOrderNo /var/www/html/application/controllers/frontend/Orders.php 316
ERROR - 2017-12-13 06:31:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 06:31:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 06:48:33 --> Severity: Notice --> Undefined index: shipp_method /var/www/html/application/views/frontend/order_page.php 64
ERROR - 2017-12-13 07:44:24 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 07:44:24 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 09:53:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 09:53:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 09:54:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 09:54:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 10:37:32 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 10:37:32 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 14:07:57 --> Severity: Notice --> Undefined property: stdClass::$get_quote_header /var/www/html/application/models/frontend/Main_model.php 36
ERROR - 2017-12-13 14:22:46 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 14:22:46 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 14:22:47 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 14:22:47 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 15:37:22 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 15:37:22 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 17:25:03 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 17:25:03 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 17:27:02 --> Severity: Notice --> Undefined variable: web_width /var/www/html/application/helpers/common_helper.php 3500
ERROR - 2017-12-13 17:27:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;,&quot;
LINE 2:        , 5, 3, 2, 'HOTGLUE', '', 'NONE','NONE',
               ^ /var/www/html/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2017-12-13 17:27:02 --> Query error: ERROR:  syntax error at or near ","
LINE 2:        , 5, 3, 2, 'HOTGLUE', '', 'NONE','NONE',
               ^ - Invalid query: SELECT * from qw.webnet_quote(0, '', 0,'16052', 'WNC',
						 , 5, 3, 2, 'HOTGLUE', '', 'NONE','NONE',
						 'NONE' ,'0',1, 1, 0,'','santosht',
						 '0003','IND','','Kevin Kelley','7-10 days ARO','','121317BS1225',
						 0,'','',0,0)
ERROR - 2017-12-13 20:41:01 --> Severity: Notice --> Undefined index: net_product /var/www/html/application/helpers/common_helper.php 3265
ERROR - 2017-12-13 20:41:10 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 20:41:10 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 20:42:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 8297
ERROR - 2017-12-13 20:42:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/application/libraries/mpdf60/mpdf.php:8331) /var/www/html/application/libraries/mpdf60/mpdf.php 1706
ERROR - 2017-12-13 21:38:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 21:38:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-13 21:38:40 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-13 21:38:40 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
