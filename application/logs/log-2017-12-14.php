<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-12-14 04:31:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;img_location&quot; does not exist
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
ERROR - 2017-12-14 04:31:28 --> Query error: ERROR:  column "img_location" does not exist
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
ERROR - 2017-12-14 04:41:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;img_location&quot; does not exist
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
ERROR - 2017-12-14 04:41:59 --> Query error: ERROR:  column "img_location" does not exist
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
ERROR - 2017-12-14 05:30:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;img_location&quot; does not exist
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
ERROR - 2017-12-14 05:30:48 --> Query error: ERROR:  column "img_location" does not exist
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
ERROR - 2017-12-14 05:33:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;img_location&quot; does not exist
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
ERROR - 2017-12-14 05:33:35 --> Query error: ERROR:  column "img_location" does not exist
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
CONTEXT:  PL/pgSQL function qw.get_item_details(text,text,text,text,text,text) line 3 at RETURN - Invalid query: select * from qw.get_item_details('all','all','all',
			'all','all','all')
ERROR - 2017-12-14 05:34:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;img_location&quot; does not exist
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
ERROR - 2017-12-14 05:34:14 --> Query error: ERROR:  column "img_location" does not exist
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
CONTEXT:  PL/pgSQL function qw.get_item_details(text,text,text,text,text,text) line 3 at RETURN - Invalid query: select * from qw.get_item_details('All','All','All',
			'All','All','All')
ERROR - 2017-12-14 05:34:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;img_location&quot; does not exist
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
ERROR - 2017-12-14 05:34:16 --> Query error: ERROR:  column "img_location" does not exist
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
CONTEXT:  PL/pgSQL function qw.get_item_details(text,text,text,text,text,text) line 3 at RETURN - Invalid query: select * from qw.get_item_details('All','All','All',
			'All','All','All')
ERROR - 2017-12-14 05:40:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;img_location&quot; does not exist
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
ERROR - 2017-12-14 05:40:02 --> Query error: ERROR:  column "img_location" does not exist
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
CONTEXT:  PL/pgSQL function qw.get_item_details(text,text,text,text,text,text) line 3 at RETURN - Invalid query: select * from qw.get_item_details('all','all','all','all','all','all')
ERROR - 2017-12-14 12:40:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;img_location&quot; does not exist
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
ERROR - 2017-12-14 12:40:55 --> Query error: ERROR:  column "img_location" does not exist
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
CONTEXT:  PL/pgSQL function qw.get_item_details(text,text,text,text,text,text) line 3 at RETURN - Invalid query: select * from qw.get_item_details('All','All','All','All','All','All')
ERROR - 2017-12-14 13:03:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.img_location does not exist
LINE 2:   SELECT a.*, a.img_location = ''
                      ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(items))) FROM (
  SELECT a.*, a.img_location = ''
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
ERROR - 2017-12-14 13:03:49 --> Query error: ERROR:  column a.img_location does not exist
LINE 2:   SELECT a.*, a.img_location = ''
                      ^
QUERY:  SELECT array_to_json(array_agg(row_to_json(items))) FROM (
  SELECT a.*, a.img_location = ''
  FROM qw.item_product_view a
  WHERE (initcap(in_itemcode) = 'All' OR a.itemcode = in_itemcode OR a.itemcodedesc ILIKE in_itemcode || '%')
  and  (in_productline = 'All' OR a.productline = in_productline)
  and (in_producttype = 'All' OR a.producttypedesc = in_producttype)
  and (in_procurement = 'All' OR a.procurementtypedesc = in_procurement)
  and (in_vendor = 'All' OR a.primaryvendorno = in_vendor)
  and (in_warehouse = 'All' OR a.defaultwarehousecode = in_warehouse)
  ORDER BY a.itemcodedesc
  ) items
CONTEXT:  PL/pgSQL function qw.get_item_details(text,text,text,text,text,text) line 3 at RETURN - Invalid query: select * from qw.get_item_details('All','All','All','All','All','All')
ERROR - 2017-12-14 14:09:17 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-14 14:09:17 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-14 14:09:34 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-14 14:09:34 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-14 14:32:28 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-14 14:32:28 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-14 14:47:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-14 14:47:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-14 14:47:49 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-14 14:47:49 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-14 14:52:29 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-14 14:52:29 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-14 15:13:39 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-14 15:13:39 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-14 15:20:37 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-14 15:20:37 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-14 15:35:45 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-14 15:35:45 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-14 15:40:53 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-14 15:40:53 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
ERROR - 2017-12-14 21:16:54 --> Severity: Notice --> Undefined variable: division /var/www/html/application/views/frontend/index.php 759
ERROR - 2017-12-14 21:16:54 --> Severity: Notice --> Undefined variable: territory /var/www/html/application/views/frontend/index.php 770
